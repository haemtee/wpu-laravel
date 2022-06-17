@extends('layouts.main')

@section('container')
    <div class="container my-4">
        <div class="row justify-content-center mb-1">
            <div class="col-md-8">
                <h1> {{ $post->title }} </h1>
                <p> By : <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none">
                        {{ $post->author->name }}</a> in
                    <a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none">
                        {{ $post->category->name }}
                    </a>
                </p>

                <img src="https://source.unsplash.com/1400x400?{{ $post->category->name }}" alt="https://source.unsplash.com/500x300?{{ $post->category->name }}" class="img-fluid rounded-2">
                <article class="my-3 fs-5">
                {!! $post->body !!}
                </article>
                <a href="/posts" class="mt-3 d-block text-decoration-none">Back to blog</a>
            </div>
        </div>
    </div>
@endsection
