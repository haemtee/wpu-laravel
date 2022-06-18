@extends('layouts.main')


@section('container')
    <div class="row justify-content-center my-4 py-5">
        <div class="col-lg-6 p-5 myshadow bg-white">
            <div class="text-center py-3">
                <img src="/img/svg/register.svg" alt="Register" width="20%" class="img-fluid">
            </div>
            <main class="form-register w-100 m-auto">
                <h1 class="h3 mb-3 fw-normal text-center">Registration Form</h1>
                <form action="/register" method="post">
                    @csrf
                    <div class="form-floating">
                        <input type="text" name="name"
                            class="form-control rounded-top @error('name') is-invalid @enderror" id="name"
                            placeholder="Name" value="{{ @old('name') }}" required>
                        <label for="name">Name</label>
                        <div class="invalid-feedback">
                            @error('name')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <div class="form-floating">
                        <input type="text" name="username" class="form-control @error('username') is-invalid @enderror"
                            id="username" placeholder="Username" value="{{ @old('username') }}" required>
                        <label for="username">Username</label>
                        <div class="invalid-feedback">
                            @error('username')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <div class="form-floating">
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                            id="email" placeholder="name@example.com" value="{{ @old('email') }}" required>
                        <label for="floatingInput">Email address</label>
                        <div class="invalid-feedback">
                            @error('email')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <div class="form-floating">
                        <input type="password" name="password"
                            class="form-control rounded-bottom @error('password') is-invalid @enderror" id="password"
                            placeholder="Password" required>
                        <label for="floatingPassword">Password</label>
                        <div class="invalid-feedback">
                            @error('password')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>

                    <button class="w-100 btn btn-lg btn-info mt-4 mb-3" type="submit">Register</button>
                </form>
                <small class="d-block text-center">Already registered? <a href="/login">Login </a> </small>
            </main>
        </div>
    </div>
@endsection
