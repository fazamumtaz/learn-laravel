<?php

use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('index', [
        "pageTitle" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "pageTitle" => "About"
    ]);
});

Route::get('posts', [PostController::class, 'index']);
Route::get('post/{post:slug}', [PostController::class, 'show']);
Route::get('/categories', function () {
    return view('categories', [
        'title' => 'Post Categories',
        'categories' => Category::all(),
        'pageTitle' => "Categories",
    ]);
});
Route::get('categories/{category:slug}', function (Category $category) {
    return view('category', [
        'pageTitle' => "Post by Category",
        'title' => $category->name,
        'posts' => $category->posts,
        'name' => $category->name
    ]);
});
