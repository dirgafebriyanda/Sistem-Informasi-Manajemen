@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8">
                <h1 class="mb-3">{{ $post->title }}</h1>
                <p>By. <a class=" text-decoration-none"
                        href="/posts?author={{ $post->author->username }}">{{ $post->author->name }}</a> in <a
                        class=" text-decoration-none"
                        href="/posts?category=/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
                @if ($post->image)
                    <img src="{{ asset('storage/post-images/' . $post->image) }}" alt="{{ $post->category->name }}" class="card-img-top">
                @else
                    {{-- <img src="https://source.unsplash.com/1200x400/?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid"> --}}
                    <img src="{{ asset('img/pembalap.jpg') }}" alt="{{ $post->category->name }}" class="img-fluid">
                @endif
                <article class="my-3 fs-5" style="text-align: justify">
                    {!! $post->body !!}
                </article>
                <a href="/posts" class="d-block">Back to Blog</a>
            </div>
        </div>
    </div>
@endsection
