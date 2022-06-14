@extends('layouts.main')

@section('container')
    <h1 class="my-4"> {{ $post->title }} </h1>

    <p> By : <a href="/authors/{{ $post->author->username }}" class="text-decoration-none"> {{ $post->author->name }}</a> in
        <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none"> {{ $post->category->name }}
        </a>

    <h5> Written at : {{ $post->created_at }} </h5>
    {!! $post->body !!}
    <a href="/blog" class="mt-3 d-block text-decoration-none">Back to blog</a>
@endsection
