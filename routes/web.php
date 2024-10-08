<?php

use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardPostController;

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

// -- UNUSE --
// Route::get('authors/{author:username}', function (User $author) {
//     return view('posts', [
//         'pageTitle' => "$author->name's posts",
//         'title' => "Posts by $author->name",
//         'posts' => $author->posts->load(['category', 'author']),
//     ]);
// });

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);
// Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');

Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware('auth');
Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');
