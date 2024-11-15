@extends('dashboard.layouts.main')

@section('dashboard')
    <div class="row justify-content-center">
        <div class="col-md-12 py-4">
            <div class="card shadow-sm">
                <div class="card-header">
                    <a class="text-decoration-none" href="/dashboard"><i class="fas fa-fw fa-tachometer-alt"></i>
                        {{ __('Dashboard') }}</a> / <a class="text-decoration-none"
                        href="/dashboard/posts">{{ __('Posts List') }}</a>
                    / Create Post
                </div>
                <div class="card-body">
                    <form action="/dashboard/posts" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3 row">
                            <div class="col-md-12">
                                <input type="text" placeholder="Title"
                                    class="form-control @error('title') is-invalid @enderror" id="title" name="title"
                                    value="{{ old('title') }}" autofocus>
                                @error('title')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <div class="col-md-12">
                                <input type="text" placeholder="Slug"
                                    class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug"
                                    value="{{ old('slug') }}" readonly>
                                @error('slug')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <div class="col-md-12">
                                <select class="form-control" name="category_id" id="category">
                                    <option value="" selected disabled>Pilih Category</option>
                                    @foreach ($categories as $category)
                                        @if (old('category_id') == $category->id)
                                            <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                                        @else
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <div class="col-md-12">
                                <select class="form-control" name="published_at" id="category">
                                    <option value="" selected disabled>Pilih Status</option>
                                    <option value="{{ now() }}">Publish</option>
                                    <option value="">Draft</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <img class="img-preview img-thumbnail mb-3" style="max-width: 200px;">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <div class="col-md-12">
                                <input type="file" class="form-control @error('image') is-invalid @enderror"
                                    name="image" id="image" onchange="previewImage()">
                                @error('image')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <div class="col-md-12">
                                <input id="body" type="hidden" name="body" value="{{ old('body') }}">
                                <trix-editor input="body"></trix-editor>
                                @error('body')
                                    <p class="text-danger">{{ $message }}</p>
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
        const title = document.querySelector('#title');
        const slug = document.querySelector('#slug');

        title.addEventListener('change', function() {
            fetch('/dashboard/posts/checkSlug?title=' + title.value)
                .then(response => response.json())
                .then(data => slug.value = data.slug)
        });

        document.addEventListener('trix-file-accept', function(event) {
            event.preventDefault()
        });

        function previewImage() {
            const image = document.querySelector('#image');
            const imgPreview = document.querySelector('.img-preview');

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFReaderEvent) {
                imgPreview.src = oFReaderEvent.target.result;
            }
        }
    </script>
    <script>
        // Pemulihan konten dari Local Storage saat halaman dimuat
        window.addEventListener('DOMContentLoaded', function() {
            restoreFromLocalStorage();
            // Inisialisasi Trix Editor
            var trixEditor = document.querySelector('trix-editor');
            trixEditor.addEventListener('trix-change', saveToLocalStorage);
        });

        // Autosave sebelum halaman direfresh
        window.addEventListener('beforeunload', function() {
            saveToLocalStorage();
        });

        function saveToLocalStorage() {
            var bodyContent = document.querySelector('trix-editor').value;
            localStorage.setItem('editorContent', bodyContent);
        }

        function restoreFromLocalStorage() {
            var savedContent = localStorage.getItem('editorContent');
            if (savedContent) {
                document.querySelector('trix-editor').value = savedContent;
            }
        }
    </script>
@endsection
