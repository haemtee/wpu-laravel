@extends('layouts.main')


@section('container')
    <div class="row justify-content-center my-4 py-5">
        <div class="col-lg-6 p-5 myshadow bg-white">
            @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <div class="text-center py-3">
                <img src="/img/svg/login.svg" alt="Login" width="20%" class="img-fluid">
            </div>
            <main class="form-signin w-100 m-auto">
                <h1 class="h3 mb-3 fw-normal text-center">Please login</h1>
                <form>
                    {{-- <img class="mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57"> --}}
                    <div class="form-floating">
                        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">Email address</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">Password</label>
                    </div>

                    <button class="w-100 btn btn-lg btn-info my-3" type="submit">Login</button>
                </form>
                <small class="d-block text-center">Not registered? <a href="/register">Register now! </a> </small>
            </main>
        </div>
    </div>
@endsection
