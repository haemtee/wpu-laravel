@extends('layouts.main')

@section('container')
    <h1 class="my-4">{{ $title }} </h1>
    @foreach ($posts as $post)
        <article class="mb-5 border-bottom pb-3 py-3">
            <a href="/post/{{ $post->slug }}" class="text-decoration-none">
                <h2> {{ $post->title }} </h2>
            </a>
            <p> By : <a href="/authors/{{ $post->author->username }}" class="text-decoration-none"> {{ $post->author->name }}
                </a> in <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">
                    {{ $post->category->name }} </a>

            <p>{{ $post->excerpt }}</p>
            <p>Written at : {{ $post->created_at }}</p>
            <a href="/post/{{ $post->slug }}" class="text-decoration-none">
                Read more ..
            </a>
        </article>
    @endforeach
@endsection
