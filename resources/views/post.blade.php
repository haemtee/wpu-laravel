@extends('layouts.main')

@section('container')
    <h1 class="my-4"> {{ $post->title }} </h1>
    <h5> Written at : {{ $post->created_at }} </h5>
     {!! $post->body !!} 
    <a href="/blog" class="btn btn-info">Back to blog</a>
@endsection
