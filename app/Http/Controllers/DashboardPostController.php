<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Cviebrock\EloquentSluggable\Sluggable;



class DashboardPostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $category = Category::all();
        // return Post::where('user_id', auth()->user()->id)->get();
        return view('dashboard.posts.index', [
            'posts' => Post::where('user_id', auth()->user()->id)->get(),
            'category' => Category::all()
        ]);

        // dd(Post::where('user_id', auth()->user()->id));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.posts.create', [
            'pageTitle' => "Create Post",
            'category' => Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $slug = Str::slug($request->blogTitle);
        // Validasi inputan user
        $validatedData = $request->validate([
            'blogTitle' => "required",
            'content' => "required",
            'category_id' => "required"
        ]);

        // Add the slug to validated data
        $validatedData['slug'] = $slug;
        $validatedData['user_id'] = auth()->user()->id;

        // Membuat post baru
        Post::create($validatedData);

        // Mengarahkan user kembali ke dashboard/
        return redirect('/dashboard/posts')->with('success', 'Post berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return view('dashboard.posts.show', [
            'post' => $post
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        // Post::destroy($post->slug);
        $post->delete();

        return redirect('/dashboard/posts')->with('success', 'Postingan berhasil dihapus');
    }
}
