<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        return view('posts', [
            "pageTitle" => "Posts",
            "posts" => Post::latest()->get(),
            // "posts" => Post::all()
            "title" => "All Posts"
        ]);
    }

    public function show(Post $post)
    {
        return view('post', [
            "pageTitle" => "Single Post",
            "post" => $post
        ]);
    }
}
