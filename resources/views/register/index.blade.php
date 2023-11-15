@extends('dashboard.layouts.main')

@section('content')
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <main class="form-regitration">
                <h1 class="h3 mb-3 fw-normal text-center">Registration</h1>
                <form action="/register" method="POST">
                    @csrf
                    <div class="form-floating">
                        <input type="name" name="name"
                            class="form-control rounded-top @error('name') is-invalid @enderror" id="name"
                            placeholder="Name" required value="{{ old('name') }}">
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="username" name="username" class="form-control @error('username') is-invalid @enderror"
                            id="username" placeholder="Username" required value="{{ old('username') }}">
                        @error('username')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                            id="email" placeholder="name@example.com" required value="{{ old('email') }}">
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="password" name="password"
                            class="form-control rounded-bottom @error('password') is-invalid @enderror" id="password"
                            placeholder="Password" required>
                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <button class="float-right btn-sm btn btn-primary mt-3" type="submit">save</button>
                </form>
            </main>
        </div>
    </div>
@endsection
