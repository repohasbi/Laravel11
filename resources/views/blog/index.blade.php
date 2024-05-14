<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
</head>
<body>
    <a href="/">Home</a>
    <a href="/about">About</a>
    <a href="/blog">Blog</a>
    <a href="/contact">Contact</a>
    <h1>Halaman {{ $title }}</h1>
    <article>
        <h3>Articles</h3>
        @foreach ($articles as $article)
            <h4>{{ $article }}</h4>
            @foreach ($posts as $post)
                <p>{{ $post }}</p>
            @endforeach
        @endforeach
    </article>
</body>
</html>