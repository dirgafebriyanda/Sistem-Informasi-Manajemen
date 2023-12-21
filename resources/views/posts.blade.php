@extends('layouts.main')

@section('content')
    <section id="posts">
        <div class="container-fluid mt-5 py-4">
            <div class="row mb-3 justify-content-end">
                <div class="col-md-4">
                    @if (Request::is('posts'))
                        <form action="/posts" method="get">
                            @if (request('category'))
                                <input type="hidden" name="category" value="{{ request('category') }}">
                            @endif
                            @if (request('author'))
                                <input type="hidden" name="author" value="{{ request('author') }}">
                            @endif
                            <div class="input-group">
                                <input type="search" name="search" class="form-control" placeholder="Search.."
                                    value="{{ request('search') }}">
                                <button type="submit" class="btn btn-dark"><i class="fa fa-search"></i></button>
                            </div>
                        </form>
                    @endif
                </div>
            </div>
            <div class="row">
                @if ($posts->count() > 0)
                    @php
                        $mainPostDisplayed = false;
                    @endphp
                    @foreach ($posts as $post)
                        @if (!empty($post->published_at))
                            @if (!$mainPostDisplayed)
                                <div class="col-md-12">
                                    <div class="card mb-3 text-center">
                                        @if ($post->image)
                                            <img src="{{ asset('storage/' . $post->image) }}"
                                                alt="{{ $post->category->name }}" class="img-fluid">
                                        @else
                                            <img src="{{ asset('img/default.png') }}" alt="{{ $post->category->name }}"
                                                class="img-fluid bg-dark">
                                        @endif
                                        <div class="card-body text-center">
                                            <h3 class="card-title"><a class="text-decoration-none text-dark"
                                                    href="/posts/{{ $post->slug }}">{{ $post->title }}</a></h3>
                                            <p>
                                                <small class="text-muted">Ditulis Oleh : <a class="text-decoration-none"
                                                        href="/posts?author={{ $post->author->username }}">{{ $post->author->name }}</a>
                                                    Kategori <a class="text-decoration-none"
                                                        href="/posts?category={{ $post->category->slug }}">{{ $post->category->name }}</a>
                                                    {{ $post->created_at->diffForHumans() }}</small>
                                            </p>
                                            <p class="card-text">{{ $post->excerpt }}</p>
                                            <a href="/posts/{{ $post->slug }}"
                                                class="text-decoration-none btn btn-primary">Selengkapnya</a>
                                        </div>
                                    </div>
                                </div>
                                @php
                                    $mainPostDisplayed = true;
                                @endphp
                            @else
                                <div class="col-md-4 mb-3">
                                    <div class="card">
                                        <div class="position-absolute px-3 py-2 text-white"
                                            style="background-color: rgba(0, 0, 0, 0.7)">
                                            <a href="/posts?category={{ $post->category->slug }}"
                                                class="text-white text-decoration-none">
                                                {{ $post->category->name }}
                                            </a>
                                        </div>
                                        @if ($post->image)
                                            <img src="{{ asset('storage/' . $post->image) }}"
                                                alt="{{ $post->category->name }}" class="card-img-top">
                                        @else
                                            <img src="{{ asset('img/default.png') }}" class="card-img-top bg-dark"
                                                alt="{{ $post->category->name }}">
                                        @endif
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $post->title }}</h5>
                                            <p>
                                                <small class="text-muted">Ditulis Oleh : <a class="text-decoration-none"
                                                        href="/posts?author={{ $post->author->username }}">{{ $post->author->name }}</a>
                                                    {{ $post->created_at->diffForHumans() }}</small>
                                            </p>
                                            <p class="card-text">{{ $post->excerpt }}</p>
                                            <a href="/posts/{{ $post['slug'] }}" class="btn btn-primary">Selengkapnya</a>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endif
                    @endforeach
                @else
                    <p class="text-center fs-4">No post found.</p>
                @endif
            </div>

            <div class="container-fluid mt-3">
                <style>
                    .pagination {
                        display: flex;
                        justify-content: center;
                        flex-wrap: wrap;
                    }
                </style>
                <!-- Pagination -->
                @if ($posts->hasPages())
                    <div class="d-flex justify-content-end">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination flex-wrap">
                                {{ $posts->links() }}
                            </ul>
                        </nav>
                    </div>
                @endif
                <!-- End Pagination -->
            </div>

        </div>
    </section>
@endsection
