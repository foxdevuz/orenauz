<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('welcome', [
            'posts'=> Post::latest()->get(),
            'posts_for_second'=>Post::all()->slice(7),
            'all_posts'=>Post::query()->paginate(10)
        ]);
    }

    public function show()
    {
        return view('more');
    }
}
