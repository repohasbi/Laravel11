<x-layout>
    <x-slot:title>{{ $title }}</x-slot>

    <a href="/posts">&laquo; Back</a>
    <article class="py-8 max-w-screen-md">
        <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">{{ $post['title'] }}</h2>
        <div class="text-base text-gray-500">
            <a href="/authors/{{ $post->author->id }}" class="hover:underline"> {{ $post->author->name }}</a> |
            {{ $post->created_at->diffForHumans() }}

            {{-- <a href="#" class="hover:underline"> {{ $post->created_at->format('j F Y') }} </a> --}}

        </div>
        <p class="my-4 font-light">
            {{ $post['body'] }}
        </p>
    </article>
</x-layout>
