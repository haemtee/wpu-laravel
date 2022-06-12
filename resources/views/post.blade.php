@extends('layouts.main')

@section('container')
    <h1 class="mt-4"> {{ $post["title"] }} </h1>
    <h5> Written by : {{ $post["author"] }} </h5>
    <p> {{ $post["body"] }} </p>

    <a href="/blog" class="btn btn-info">Back to blog</a>
@endsection
