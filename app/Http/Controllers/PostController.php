<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('welcome', [
            'posts'=> Post::orderByDesc('id')->get(),
            'posts_for_second'=>Post::all()->slice(7),
            'all_posts'=>Post::orderByDesc('id')->get()
        ]);
    }

    public function show(Post $post)
    {
        return view('more', [
            'post'=>$post,
            'latest'=>Post::orderByDesc('id')->get()
        ]);
    }
}
