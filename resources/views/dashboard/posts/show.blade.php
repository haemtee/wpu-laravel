@extends('dashboard.layouts.main')

@section('container')
    <div class="container my-4">
        <div class="row my-3">
            <div class="col-lg-8">
                <h1 id="judul"> {{ $post->title }} </h1>
                <a href="/dashboard/posts" class="btn btn-secondary"> <span data-feather="arrow-left"
                        class="align-text-bottom"></span> Back to my Posts</a>
                <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning"> <span data-feather="edit"
                        class="align-text-bottom"></span>Edit</a>
                <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button class="btn bg-danger" onclick="return confirm('Are you sure?')"> <span
                            data-feather="x-circle"></span>Delete</button>
                </form>
                @if ($post->image)
                <div class="my-3" style="max-height: 350px; overflow:hidden;">
                    <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}" class="img-fluid d-block">
                </div>
                @else
                    <img src="https://source.unsplash.com/1400x400?{{ $post->category->name }}"
                        alt="{{ $post->category->name }}" class="img-fluid rounded-2 mt-3">
                @endif

                <article class="my-3 fs-5">
                    {!! $post->body !!}
                </article>
                <a href="#judul" class="mt-3 d-block text-decoration-none">Back to top</a>
            </div>
        </div>
    </div>
@endsection
