@extends('layouts.main')

@section('container')
    @if ($posts->count())
        <h1 class="my-4">{{ $title }} </h1>

        <div class="card mb-3">
            <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" class="card-img-top"
                alt="{{ $posts[0]->title }}">
            <div class="card-body">
                <a href="/post/{{ $posts[0]->slug }}" class="text-decoration-none text-dark">
                    <h3 class="card-title">{{ $posts[0]->title }}</h3>
                </a>
                <p class="card-text">
                    <small class="text-muted">
                        By : <a href="/posts?author={{ $posts[0]->author->username }}" class="text-decoration-none">
                            {{ $posts[0]->author->name }}
                        </a> in <a href="/posts?category={{ $posts[0]->category->slug }}" class="text-decoration-none">
                            {{ $posts[0]->category->name }} </a>
                        {{ $posts[0]->created_at->diffForHumans() }}
                    </small>
                </p>
                <p class="card-text">{{ $posts[0]->excerpt }}</p>
                <a href="/post/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-info">
                    Read more
                </a>
            </div>
        </div>


        <div class="container">
            <div class="row">
                @foreach ($posts->skip(1) as $post)
                    <div class="col-md-4">
                        <div class="card mb-4 box-shadow">
                            <div class="position-absolute px-3 py-2 badge rounded-pill"
                                style="background-color: rgba(0,0,0,0.6)">
                                <a href="/posts?category={{ $post->category->slug }}"
                                    class="text-decoration-none text-info">
                                    {{ $post->category->name }} </a>
                            </div>
                            <img class="card-img-top"
                                src="https://source.unsplash.com/500x300?{{ $post->category->name }}"
                                alt="{{ $post->title }}">
                            <div class="card-body">
                                <a href="/post/{{ $post->slug }}" class="text-decoration-none">
                                    <h5 class="card-title">{{ $post->title }}</h5>
                                </a>
                                <p class="card-text">
                                    <small class="text-muted">
                                        By : <a href="/posts?author={{ $post->author->username }}"
                                            class="text-decoration-none">
                                            {{ $post->author->name }}
                                        </a>
                                        {{ $post->created_at->diffForHumans() }}
                                    </small>
                                </p>
                                <p class="card-text">{{ $post->excerpt }}</p>
                                <a href="/post/{{ $post->slug }}" class="text-decoration-none btn btn-info">
                                    Read more
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="d-flex justify-content-center">
            {{ $posts->links() }}
        </div>
    @else
        <p class="text-center fs-4 my-4">No posts found</p>
    @endif
@endsection
