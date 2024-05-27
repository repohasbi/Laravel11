<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Post
{
    public static function All()
    {
        return [
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
        ];
    }

    public static function find($slug): array
    {
        // $post = Arr::first(Post::all(), function ($post) use ($slug) {
        //     return $post['slug'] == $slug;
        // });

        $post = Arr::first(static::all(), fn ($post) => $post['slug'] == $slug);

        if (!$post) {
            abort(404);
        }

        return $post;
    }
}
