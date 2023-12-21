@extends('dashboard.layouts.main')

@section('dashboard')
    <div class="row justify-content-center">
        <div class="col-md-12 py-4">
            <div class="card shadow-sm">
                <div class="card-header">
                    <a class="text-decoration-none" href="/dashboard"><i class="fas fa-fw fa-tachometer-alt"></i>
                        {{ __('Dashboard') }}</a> / <a class="text-decoration-none"
                        href="/dashboard/galleries">{{ __('Gallery List') }}</a>
                    / Create Gallery
                </div>
                <div class="card-body">
                    <form action="{{ route('galleries.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3 row">
                            <div class="col-md-12">
                                <img id="previewImage" src="#" alt="Preview"
                                    style="max-width: 200px; display: none;" class="img-thumbnail mb-2">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <div class="col-md-12">
                                <label for="image" class="form-label">Upload Gambar</label>
                                <div class="input-group">
                                    <input type="file" class="form-control @error('image') is-invalid @enderror"
                                        id="image" name="image" onchange="previewFile()">
                                </div>
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
                                <textarea placeholder="Penjelasan gambar" class="form-control @error('name') is-invalid @enderror" id="name"
                                    name="name" rows="4" autofocus></textarea>
                                @error('name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <button type="submit" class="float-right btn btn-primary btn-sm">Save</button>
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
                preview.style.display = 'block'; // Menampilkan pratinjau gambar
            };

            if (file) {
                reader.readAsDataURL(file);
            } else {
                preview.src = "";
                preview.style.display = 'none'; // Menyembunyikan pratinjau gambar jika tidak ada file yang dipilih
            }
        }
    </script>
@endsection
