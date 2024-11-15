@extends('dashboard.layouts.main')

@section('dashboard')
    <div class="row justify-content-center">
        <div class="col-md-12 py-4">
            <div class="card shadow-sm">
                <div class="card-header">
                    <a class="text-decoration-none" href="/dashboard"><i class="fas fa-fw fa-tachometer-alt"></i>
                        {{ __('Dashboard') }}</a> / <a class="text-decoration-none"
                        href="/dashboard/galleries">{{ __('Gallery List') }}</a>
                    / Edit Gallery
                </div>
                <div class="card-body">
                    <form action="{{ route('galleries.update', $gallery->id) }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3 row">
                            <div class="col-md-12">
                                <input type="hidden" name="oldImage" value="{{ $gallery->image }}">
                                @if ($gallery->image)
                                    <img src="{{ asset('storage/' . $gallery->image) }}" alt="Gambar Sebelumnya"
                                        class="img-thumbnail mb-2" style="max-width: 200px;" id="previewImage">
                                @else
                                    <img src="{{ asset('img/default.png') }}" class="img-preview img-thumbnail mb-3"
                                        style="max-width: 200px;" alt="No Image">
                                @endif
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <div class="col-md-12">
                                <label for="image" class="form-label">Upload Gambar Baru</label>
                                <input type="file" class="form-control @error('image') is-invalid @enderror"
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
                            <div class="col-md-12">
                                <textarea class="form-control @error('name') is-invalid @enderror" id="name" name="name" autofocus
                                    rows="4">{{ old('name', $gallery->name) }}</textarea>
                                @error('name')
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
