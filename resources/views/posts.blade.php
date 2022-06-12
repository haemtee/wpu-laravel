@extends('layouts.main')

@section('container')
    <h1 class="mt-4">My Laravel Blogs</h1>

    @foreach ($posts as $post)
        <a href="post/{{ $post['id'] }}">
            <h2> {{ $post['title'] }} </h2>
        </a>
        <p>{{ $post['body'] }}</p>
        <p class="d-inline">Written by : {{ $post['author'] }}</p>
    @endforeach
@endsection
