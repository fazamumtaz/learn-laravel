<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\User;
use App\Models\Post;
use Illuminate\Support\str;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index()
    {
        $category = Category::all();
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
        ], compact('category'));
    }

    public function show(Post $post)
    {
        return view('post', [
            "pageTitle" => "Single Post",
            "post" => $post
        ]);
    }

    public function createPost(Request $request)
    {
        // dd($request->all);
        $category = Category::all();
        $request->validate([
            'blogTitle' => 'required',
            'content' => 'required',
            'category_id' => 'required'
        ]);

        Post::create([
            'blogTitle' => $request->blogTitle,
            'slug' => str::slug($request->slug),
            'category_id' => $request->category_id,
            'user_id' => Auth::user()->id,
            'content' => $request->content
        ]);
        return redirect()->back()->with('success', 'data berhasil ditambah');
    }
}
