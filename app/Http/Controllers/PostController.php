<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        // dd(request('search')); 
        return view('posts', [
            "pageTitle" => "Posts",
            "posts" => Post::latest()->filter(request(['search', 'category', 'user']))->paginate(7)->withQueryString(),
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
