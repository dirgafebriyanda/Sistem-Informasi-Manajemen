@extends('layouts.main')

@section('content')
<div class="row justify-content-center mt-5">
    <div class="col-md-4">
        <div class="card bg-dark shadow-sm">
            @if (session()->has('success'))
            <div class="alert alert-success  alert-dismissible fade show" role="alert">
                {{ session('success') }}
            </div>
            @endif
            @if (session()->has('loginError'))
            <div class="alert alert-danger  alert-dismissible fade show" role="alert">
                {{ session('loginError') }}
            </div>
            @endif
            <main class="form-signin">
                <div class="card-header mt-3">
                    <img class="img-fluid" src="{{asset('img/icon/putih.png')}}" alt="">
                </div>
                <div class="card-body">
                    <form action="/login" method="post">
                        @csrf
                        <div class="form-floating mb-3">
                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" autofocus required value="{{ old('email') }}">
                            <label for="email">Email address</label>
                            @error('email')
                            <div class="invalid-feedback"></div>
                            {{ $message }}
                            @enderror
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                            <label for="password">Password</label>
                        </div>
                        <button class="w-100 btn btn-lg btn-outline-primary" type="submit">Login</button>
                    </form>
            </main>
        </div>
    </div>
</div>
@endsection