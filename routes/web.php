<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', [
        'title' => 'About',
        'name' => 'Hasbi',
    ]);
});

// Route /blog => 2 buah artikel, judul, isi
// Route /contact => email sosmed

Route::get('/posts', function () {
    return view('posts/index', [
        'title' => 'Blog',
        'posts' => Post::all()
    ]);
});

Route::get('/posts/{post:slug}', function (Post $post) {

    // $post = Post::find($slug);

    return view('posts/post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});

Route::get('/authors/{user:username}', function (User $user) {

    // $post = Post::find($slug);

    return view('posts/index', ['title' => count($user->posts) . ' Articles by ' . $user->name, 'posts' => $user->posts]);
});

Route::get('/categories/{category:slug}', function (Category $category) {
    return view('posts/index', ['title' => ' Articles in ' . $category->name, 'posts' => $category->posts]);
});
