@extends('dashboard.layouts.main')

@section('dashboard')
    <div class="row justify-content-center">
        <div class="col-md-12 py-4">
            <div class="card shadow-sm">
                <div class="card-header">
                    <a class="text-decoration-none" href="/dashboard"><i class="fas fa-fw fa-tachometer-alt"></i>
                        {{ __('Dashboard') }}</a> / <a class="text-decoration-none"
                        href="{{ route('users.index') }}">{{ __('Users List') }}</a>
                    / Edit User
                </div>
                <div class="card-body">
                    <form action="{{ route('users.update', ['user' => $user]) }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="mb-3 row">
                            <div class="col-md-12">
                                <input type="hidden" name="oldImage" value="{{ $user->image }}">
                                @if ($user->image)
                                    <img src="{{ asset('storage/' . $user->image) }}" alt="Gambar Sebelumnya"
                                        class="img-fluid mb-2 rounded-circle" style="max-width: 200px;" id="previewImage">
                                @else
                                    <img src="{{ $user->jekel == 'laki-laki' ? asset('img/user/laki-laki.png') : asset('img/user/perempuan.png') }}"
                                        alt="Default Image" class="object-cover" style="width: 150px" id="previewImage">
                                @endif
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <div class="col-md-12">
                                <input type="file" class="form-control-file @error('image') is-invalid @enderror"
                                    id="image" name="image" onchange="previewFile()">
                                @error('image')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                                <div class="mt-2">
                                    <small class="text-muted">Ukuran file maksimum: 2MB</small>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <div class="col-md-6">
                                <input type="text" placeholder="Name"
                                    class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                                    value="{{ old('name', $user->name) }}" autofocus>
                                @error('name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <input type="text" placeholder="Username"
                                    class="form-control @error('username') is-invalid @enderror" id="username"
                                    name="username" value="{{ old('username', $user->username) }}">
                                @error('username')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <div class="col-md-6">
                                <input type="email" placeholder="Email"
                                    class="form-control @error('email') is-invalid @enderror" id="email" name="email"
                                    value="{{ old('email', $user->email) }}">
                                @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="jekel_laki" name="jekel"
                                        value="laki-laki" {{ $user->jekel == 'laki-laki' ? 'checked' : '' }} required>
                                    <label class="form-check-label" for="jekel_laki">Laki-laki</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="jekel_perempuan" name="jekel"
                                        value="perempuan" {{ $user->jekel == 'perempuan' ? 'checked' : '' }} required>
                                    <label class="form-check-label" for="jekel_perempuan">Perempuan</label>
                                </div>
                                @error('jekel')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                        </div>

                        <div class="mb-3 row">
                            <div class="col-md-6">
                                <input type="password" placeholder="Password"
                                    class="form-control @error('password') is-invalid @enderror" id="password" required
                                    name="password">
                                @error('password')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <input type="password" placeholder="Confirm Password"
                                    class="form-control @error('password_confirmation') is-invalid @enderror"
                                    id="password_confirmation" name="password_confirmation" required>
                                @error('password_confirmation')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <button type="submit" class="float-right btn btn-primary btn-sm">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        function previewFile() {
            var preview = document.getElementById('previewImage');
            var fileInput = document.getElementById('image');
            var file = fileInput.files[0];

            var reader = new FileReader();

            reader.onloadend = function() {
                preview.src = reader.result;
            };

            if (file) {
                reader.readAsDataURL(file);
            } else {
                preview.src = "";
            }
        }
    </script>
@endsection
