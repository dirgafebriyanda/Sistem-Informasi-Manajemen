@extends('dashboard.layouts.main')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8 mb-4">
        <div class="card shadow-sm">
            <div class="card-header">
                <a class="text-decoration-none" href="/dashboard"><i class="fas fa-fw fa-tachometer-alt"></i>
                    {{ __('Dashboard') }}</a> / <a class="text-decoration-none" href="/dashboard/categories">{{ __('Post List') }}</a>
                / Edit
            </div>
            <div class="card-body">
                <form action="/dashboard/categories/{{ $category->slug }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="mb-3 row">
                        <div class="col-md-12">
                            <input type="text" placeholder="Category" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ $category->name }}" autofocus>
                            @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <div class="col-md-12">
                            <input type="text" placeholder="Slug" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" value="{{ $category->slug }}" readonly>
                            @error('slug')
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
    const title = document.querySelector('#name');
    const slug = document.querySelector('#slug');

    title.addEventListener('change', function() {
        fetch('/dashboard/posts/checkSlug?title=' + title.value)
            .then(response => response.json())
            .then(data => slug.value = data.slug)
    });
</script>
@endsection