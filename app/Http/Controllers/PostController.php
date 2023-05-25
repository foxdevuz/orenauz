<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('welcome', [
            'latest'=> Post::latest()->first(), # post for first news
            'breakingNews'=>Post::orderByDesc('id')->skip(1)->take(3)->get(), # posts for 'Tezkor'
            'popularPosts'=>Post::orderBydesc('view')->take(3)->get(), # posts for 'Mashxur'
            'second'=>Post::skip(7)->take(3)->get(), #posts for <x-main.second"/>
            'allPosts'=>Post::inRandomOrder()->get(),
            'categories'=>Category::all(),
        ]);
    }

    public function show(Post $post)
    {
        return view('more', [
            'post'=>$post,
            'latest'=>Post::orderByDesc('id')->get(),
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
