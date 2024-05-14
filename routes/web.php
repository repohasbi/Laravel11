<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home']);
});

Route::get('/about', function () {
    return view('about', [
        'title' => 'About',
        'nama' => 'Hasbi',
    ]);
});

// Route /blog => 2 buah artikel, judul, isi
// Route /contact => email sosmed

Route::get('/blog', function () {
    return view('blog/index', [
        'title' => 'Blog',
        'articles' => ['Satu', 'Dua'],
        'posts' => ['Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.']
    ]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});
