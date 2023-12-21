@extends('layouts.main')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center p-3 mt-4" style="overflow: hidden">
            <div class="col-md-4">
                <div class="card shadow-sm">
                    @if (session()->has('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif
                    @if (session()->has('loginError'))
                        <div class="alert alert-danger  alert-dismissible fade show" role="alert">
                            {{ session('loginError') }}
                        </div>
                    @endif
                    <main class="form-signin text-center">
                        <div class="card-header py-4 text-center bg-secondary">
                            <img class="img-fluid " src="{{ asset('img/icon/putih.png') }}" alt="Logo">
                        </div>
                        <div class="card-body px-3 py-3">
                            <form action="/login" method="post" class="img-thumbnail border-secondary px-4 py-4">
                                @csrf
                                <div class="form-floating mb-3">
                                    <input type="text" name="login"
                                        class="form-control border-secondary @error('login') is-invalid @enderror"
                                        id="login" placeholder="Username atau Email" autofocus required
                                        value="{{ old('login') }}">
                                    <label for="login">Username atau Email</label>
                                    @error('login')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="password" name="password"
                                        class="form-control border-secondary @error('password') is-invalid @enderror"
                                        id="password" placeholder="Password" required>
                                    <label for="password">Password</label>
                                    @error('password')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <button class="w-100 btn btn-lg mt-2 btn-secondary hvr-grow" type="submit">Login
                                    <i class="fas fa-sign-in-alt"></i></button>
                            </form>
                        </div>
                    </main>
                    <div class="card-footer text-center bg-secondary py-2 text-light">
                        <span>Copyright &copy; <img style="width: 83px" class="img-fluid"
                                src="{{ asset('img/icon/putih.png') }}" alt=""> {{ date('Y') }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
