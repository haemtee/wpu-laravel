@extends('layouts.main')

@section('container')
    <h1 class="my-4">My Laravel Blogs</h1>

    @foreach ($posts as $post)
        <a href="post/{{ $post->slug }}">
            <h2> {{ $post->title }} </h2>
        </a>
        <p>{{ $post->excerpt }}</p>
        <p class="d-inline">Written at : {{ $post->created_at }}</p>
    @endforeach
@endsection
