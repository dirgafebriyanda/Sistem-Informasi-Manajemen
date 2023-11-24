@extends('layouts.main')

@section('content')
    <div class="row justify-content-center mb-3 mt-3">
        <div class="col-md-6">
            <form action="/posts" method="get">
                @if (request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">
                @endif
                @if (request('author'))
                    <input type="hidden" name="author" value="{{ request('author') }}">
                @endif
                <div class="input-group mb-3">
                    <input type="text" name="search" class="form-control" placeholder="Search.."
                        value="{{ request('search') }}">
                    <button type="submit" class="btn btn-dark"><i class="fa fa-search"></i></button>
                </div>
            </form>
        </div>
    </div>


    @if ($posts->count())
        <div class="card mb-3 text-center">
            @if ($posts[0]->image)
                <img src="{{ asset('post-images/' . $posts[0]->image) }}" alt="{{ $posts[0]->category->name }}"
                    class="img-fluid">
            @else
                <img src="{{ asset('img/default.png') }}" alt="{{ $posts[0]->category->name }}"
                    class="img-fluid mt-3 bg-dark">
            @endif
            <div class="card-body text-center">
                <h3 class="card-title"><a class=" text-decoration-none text-dark"
                        href="/posts/{{ $posts[0]->slug }}">{{ $posts[0]->title }}</a></h3>
                <p>
                    <small class="text-muted">Ditulis Oleh : <a class=" text-decoration-none"
                            href="/posts?author={{ $posts[0]->author->username }}">{{ $posts[0]->author->name }}</a>
                        Kategori <a class=" text-decoration-none"
                            href="/posts?category={{ $posts[0]->category->slug }}">{{ $posts[0]->category->name }}</a>
                        {{ $posts[0]->created_at->diffForHumans() }}</small>
                </p>

                <p class="card-text">{{ $posts[0]->excerpt }}</p>

                <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-primary">Read more</a>
            </div>
        </div>

        <div class="container">
            <div class="row">
                @foreach ($posts->skip(1) as $post)
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <div class="position-absolute px-3 py-2 text-white"
                                style="background-color: rgba(0, 0, 0, 0.7)"><a
                                    href="/posts?category={{ $post->category->slug }}"
                                    class="text-white text-decoration-none">
                                    {{ $post->category->name }}</a></div>
                            @if ($post->image)
                                <img src="{{ asset('post-images/' . $post->image) }}" alt="{{ $post->category->name }}"
                                    class="card-img-top">
                            @else
                                <img src="{{ asset('img/default.png') }}" class="card-img-top bg-dark"
                                    alt="{{ $post->category->name }}">
                            @endif

                            <div class="card-body">
                                <h5 class="card-title">{{ $post->title }}</h5>
                                <p>
                                    <small class="text-muted">Ditulis Oleh : <a class=" text-decoration-none"
                                            href="/posts?author={{ $post->author->username }}">{{ $post->author->name }}</a>
                                        {{ $post->created_at->diffForHumans() }}</small>
                                </p>
                                <p class="card-text">{{ $post->excerpt }}</p>
                                <a href="/posts/{{ $post['slug'] }}" class="btn btn-primary">Read more</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @else
        <p class="text-center fs-4">No post found.</p>
    @endif
    <div class="d-flex card-footer justify-content-center ">
        <!-- Desktop Pagination -->
        <nav class="d-none d-md-block" aria-label="Page navigation">
            <ul class="pagination justify-content-center">
                <li class="page-item">
                    <a class="page-link" href="{{ $posts->previousPageUrl() }}" aria-label="Previous">
                        <span aria-hidden="true">&laquo; Previous</span>
                    </a>
                </li>
                {{ $posts->links() }}
                <li class="page-item">
                    <a class="page-link" href="{{ $posts->nextPageUrl() }}" aria-label="Next">
                        <span aria-hidden="true">Next &raquo;</span>
                    </a>
                </li>
            </ul>
        </nav>

        <!-- Mobile Pagination -->
        <nav class="d-md-none" aria-label="Page navigation">
            <div class="text-center">
                <p>Halaman ke {{ $posts->currentPage() }} dari {{ $posts->lastPage() }}</p>
            </div>
            <div class="pagination justify-content-center">
                <p>{{ $posts->links('pagination::simple-bootstrap-4') }}</p>
            </div>
        </nav>
    </div>
@endsection
