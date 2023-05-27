<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index()
    {   
        $expTime = now()->addMinutes(10);
        // cache latest
        if(Cache::has('latest')){
            $latest = Cache::get('latest');
        } else {
            $latest = Cache::remember('latest', $expTime, function () {
                return Post::latest()->first();
            });
        }
        // cache for breaking news
        if(Cache::has('breakingNews')){
            $breakingNews = Cache::get('breakingNews');
        } else {
            $breakingNews = Cache::remember('breakingNews', $expTime, function () {
                return Post::orderByDesc('id')->skip(1)->take(3)->get();
            });
        }
        // cache for popularPosts
        if(Cache::has('popularPosts')){
            $popularPosts = Cache::get('popularPosts');
        } else {
            $popularPosts = Cache::remember('popularPosts', $expTime, function () {
                return Post::orderBydesc('view')->take(3)->get();
            });
        }
        // cache for second
        if(Cache::has('second')){
            $second = Cache::get('second');
        } else {
            $second = Cache::remember('second', $expTime, function () {
                return Post::skip(7)->take(3)->get();
            });
        }
        // cache for allPosts
        if(Cache::has('allPosts')){
            $allPosts = Cache::get('allPosts');
        } else {
            $allPosts = Cache::remember('allPosts', $expTime, function () {
                return Post::inRandomOrder()->get();
            });
        }
        // cache for categories
        if(Cache::has('categories')){
            $categories = Cache::get('categories');
        } else {
            $categories = Cache::remember('categories', $expTime, function () {
                return Category::all();
            });
        }
        // show view
        return view('welcome', [
            'latest'=> $latest, # post for first news
            'breakingNews'=>$breakingNews, # posts for 'Tezkor'
            'popularPosts'=>$popularPosts, # posts for 'Mashxur'
            'second'=>$second, #posts for <x-main.second"/>
            'allPosts'=>$allPosts,
            'categories'=>$categories,
        ]);
    }

    public function show(Post $post)
    {
        return view('more', [
            'post'=>$post,
            'latest'=>Post::inRandomOrder()->take(3)->get(),
            'categories'=>Category::all()
        ]);
    }
    public function category($slug)
    {
        $post = Post::where('category','=',$slug)->orderByDesc('id')->get();
        return view('category', [
            'categories'=>Category::all(),
            'posts'=>$post
        ]);
    }
    public function search(Request $request)
    {
        $query = $request->query('query');
        $post = Post::where('name','like','%'.$query.'%')
                    ->orWhere('description','like','%'.$query.'%')
                    ->get();
        return view('search',[
            'categories'=>Category::all(),
            'result'=>$post
        ]);
    }

}
