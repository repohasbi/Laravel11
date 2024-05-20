<?php

use Illuminate\Support\Arr;
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
        'posts' => [
            [
                'id' => 1,
                'title' => 'Judul Artikel 1',
                'slug' => 'judul-artikel-1',
                'author' => 'Hasbi',
                'date' => '1 Januari 2024',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut architecto impedit voluptatibus, placeat adipisci nostrum ducimus. Accusamus aliquam labore architecto, quam dolorem officiis! Tenetur, inventore quam tempore ipsam suscipit nobis? Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut architecto impedit voluptatibus, placeat adipisci nostrum ducimus. Accusamus aliquam labore architecto, quam dolorem officiis! Tenetur, inventore quam tempore ipsam suscipit nobis? '
            ],
            [
                'id' => 2,
                'title' => 'Judul Artikel 2',
                'slug' =>
                'judul-artikel-2',
                'author' => 'Ahmad',
                'date' => '3 Januari 2024',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus nostrum doloremque doloribus consequatur quis earum id. Cumque dolorum architecto eum maiores impedit, corporis fugiat suscipit repellendus facilis voluptas sunt aspernatur?Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut architecto impedit voluptatibus, placeat adipisci nostrum ducimus. Accusamus aliquam labore architecto, quam dolorem officiis! Tenetur, inventore quam tempore ipsam suscipit nobis? '
            ]
        ]
    ]);
});

Route::get('/posts/{slug}', function ($slug) {
    $posts = [
        [
            'id' => 1,
            'title' => 'Judul Artikel 1',
            'slug' => 'judul-artikel-1',
            'author' => 'Hasbi',
            'date' => '1 Januari 2024',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut architecto impedit voluptatibus, placeat adipisci nostrum ducimus. Accusamus aliquam labore architecto, quam dolorem officiis! Tenetur, inventore quam tempore ipsam suscipit nobis? Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut architecto impedit voluptatibus, placeat adipisci nostrum ducimus. Accusamus aliquam labore architecto, quam dolorem officiis! Tenetur, inventore quam tempore ipsam suscipit nobis? '
        ],
        [
            'id' => 2,
            'title' => 'Judul Artikel 2',
            'slug' => 'judul-artikel-2',
            'author' => 'Ahmad',
            'date' => '3 Januari 2024',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus nostrum doloremque doloribus consequatur quis earum id. Cumque dolorum architecto eum maiores impedit, corporis fugiat suscipit repellendus facilis voluptas sunt aspernatur?Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut architecto impedit voluptatibus, placeat adipisci nostrum ducimus. Accusamus aliquam labore architecto, quam dolorem officiis! Tenetur, inventore quam tempore ipsam suscipit nobis? '
        ]
    ];

    $post = Arr::first($posts, function ($post) use ($slug) {
        return $post['slug'] == $slug;
    });

    return view('posts/post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});
