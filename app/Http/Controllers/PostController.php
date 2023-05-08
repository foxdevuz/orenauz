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
        ]);
    }

    public function show()
    {
        return view('more');
    }
}
