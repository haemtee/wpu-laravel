@extends('layouts.main')

@section('container')
    <h1 class="my-4">{{ $title }}</h1>

    @foreach ($authors as $author)
        <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="img/{{ $author->img }}" class="img-fluid rounded-start" alt="{{ $author->name }}">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">{{ $author->name }} </h5>
                        <p class="card-text">{{ $author->email }}</p>
                        <p class="card-text"><small class="text-muted">All my post</small></p>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection
