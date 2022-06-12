@extends('layouts.main')

@section('container')
    <h1 class="mt-4">About</h1>
    <h3> {{ $name }} </h3>
    <p> {{ $email }} </p>
    <img src="img/{{ $img }}" alt="{{ $name }}" width="200" class="img-thumbnail rounded-4">
@endsection
