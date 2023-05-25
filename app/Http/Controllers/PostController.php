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
            'posts'=> Post::orderByDesc('id')->get(),
            'posts_for_second'=>Post::all()->slice(7),
            'all_posts'=>Post::orderByDesc('id')->get(),
            'categories'=>Category::all()
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
}
