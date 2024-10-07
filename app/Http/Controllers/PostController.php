<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\User;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        // dd(request('search'));
        $title = '';
        if (request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $title = ' in ' . $category->name;
        }
        if (request('author')) {
            $author = User::firstWhere('username', request('author'));
            $title = ' by ' . $author->name;
        }
        return view('posts', [
            "pageTitle" => "Posts",
            "posts" => Post::latest()->filter(request(['search', 'category', 'author']))->paginate(7)->withQueryString(),
            // "posts" => Post::all(),
            "title" => "All Posts" . $title
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
