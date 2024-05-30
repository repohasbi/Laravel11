<x-layout>
    <x-slot:title>{{ $title }}</x-slot>

    <a href="/posts">&laquo; Back</a>
    <article class="py-8 max-w-screen-md">
        <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">{{ $post['title'] }}</h2>
        <div>
            By
            <a href="/authors/{{ $post->author->username }}" class="text-base text-gray-500 hover:underline">
                {{ $post->author->name }}</a>
            in
            <a href="/categories/{{ $post->category->slug }}"
                class="text-base text-gray-500 hover:underline">{{ $post->category->name }}</a>
            |
            {{ $post->created_at->diffForHumans() }}
        </div>
        {{-- <div class="text-base text-gray-500">
            <a href="/authors/{{ $post->author->username }}" class="hover:underline"> {{ $post->author->name }}</a> |
            {{ $post->created_at->diffForHumans() }} z --}}

        {{-- <a href="#" class="hover:underline"> {{ $post->created_at->format('j F Y') }} </a> --}}

        {{-- </div> --}}
        <p class="my-4 font-light">
            {{ $post['body'] }}
        </p>
    </article>
</x-layout>
