@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8">
                <h1 class="mb-3">{{ $post->title }}</h1>
                <p>Ditulis Oleh : <a class=" text-decoration-none"
                        href="/posts?author={{ $post->author->username }}">{{ $post->author->name }}</a> Kategori <a
                        class=" text-decoration-none"
                        href="/posts?category=/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
                @if ($post->image)
                    <img src="{{ asset('storage/post-images/' . $post->image) }}" alt="{{ $post->category->name }}"
                        class="card-img-top">
                @else
                    <img src="{{ asset('img/gambar/banner-desktop.png') }}" alt="{{ $post->category->name }}"
                        class="img-fluid">
                @endif
                <article class="my-3 fs-5" style="text-align: justify">
                    {!! $post->body !!}
                </article>
                <a href="/posts" class="d-block btn btn-primary">Back to Blog</a>
            </div>
        </div>
    </div>
@endsection
