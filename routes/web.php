<?php

use App\Models\Post;
use App\Models\User;
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
        'content' => Category::all(),
        'pageTitle' => "Categories",
    ]);
});
Route::get('categories/{category:slug}', function (Category $category) {
    return view('posts', [
        'pageTitle' => "Post by Category",
        'title' => $category->name,
        'posts' => $category->posts->load('category', 'author'),
        'name' => $category->name
    ]);
});

//  -- UNUSE --
// Route::get('authors', function () {
//     return view('categories', [
//         'pageTitle' => 'Authors',
//         'content' => User::all(),
//         'title' => 'The Authors'
//     ]);
// });

Route::get('authors/{author:username}', function (User $author) {
    return view('posts', [
        'pageTitle' => "$author->name's posts",
        'title' => "Posts by $author->name",
        'posts' => $author->posts->load(['category', 'author']),
    ]);
});
