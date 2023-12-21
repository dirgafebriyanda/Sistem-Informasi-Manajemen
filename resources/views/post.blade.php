@extends('layouts.main')

@section('content')
    <style>
        .scrollable-column {
            transition: max-height 0.5s ease;
            border-left: 2px solid #ccc;
            padding: 10px;
            position: fixed;
            top: 0;
            right: 0;
            overflow-y: hidden;
            background-color: #f8f9fa;
            height: 100%;
        }

        .scrollable-column:hover {
            overflow-y: scroll;
        }
    </style>

    <section id="post" class="mt-5 py-3">
        <div class="container-fluid ">
            <div class="row">
                {{-- Postingan --}}
                <div class="col-md-8 bg-light">
                    <h1 class="display-4 mb-4 fw-bold">{{ $post->title }}</h1>
                    <p class="mb-3">
                        Penulis : <a href="/posts?author={{ $post->author->username }}"
                            class="text-decoration-none">{{ $post->author->name }}</a>
                        | Kategori: <a href="/posts?category={{ $post->category->slug }}"
                            class="text-decoration-none">{{ $post->category->name }}</a>
                        | Tanggal: {{ $post->created_at->format(' j F Y') }}
                    </p>

                    @if ($post->image)
                        <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}"
                            class="img-fluid mb-4">
                    @else
                        <img src="{{ asset('img/default.png') }}" alt="{{ $post->category->name }}"
                            class="img-fluid mb-4 bg-dark">
                    @endif

                    <article class="fs-5 text-justify">
                        {!! $post->body !!}
                    </article>
                    <hr class="my-4">

                    <div class="mt-4">
                        <style>
                            .btn-link-no-style {
                                color: inherit;
                                text-decoration: none;
                                cursor: pointer;
                            }

                            .btn-link-no-style:hover {
                                text-decoration: none;
                                /* Optional: Remove underline on hover */
                            }
                        </style>
                        <!-- Tombol Like -->
                        <a href="#" class="btn-link-no-style me-2">
                            <i class="fas fa-heart text-danger fa-2x"></i>
                            <span id="likeCount">{{ isset($likeCount) ? $likeCount : 0 }}</span>
                        </a>

                        <!-- Tombol Comment -->
                        <a href="#" class="btn-link-no-style me-2" id="commentBtn">
                            <i class="fas fa-comment text-secondary fa-2x"></i>
                            <span id="commentCount">{{ isset($commentCount) ? $commentCount : 0 }}</span>
                        </a>

                        <!-- Tombol share-->
                        <a href="#" class="btn-link-no-style " id="shareBtn">
                            <i class="fas fa-share fa-2x"></i>
                            <span id="shareCount">{{ isset($shareCount) ? $shareCount : 0 }}</span>
                        </a>
                        <!-- Share -->
                        <div class="mt-4" id="shareIcons">
                            <p class="mb-3">Bagikan posting ini:</p>
                            <!-- Icons yang ditampilkan setelah tombol share diklik -->
                            <button class="btn btn-primary me-2" id="copyLinkBtn">
                                <i class="fas fa-link"></i>
                            </button>
                            <a href="https://twitter.com/share?url={{ url()->current() }}" class="btn btn-primary me-2"
                                target="_blank">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="https://www.facebook.com/sharer/sharer.php?u={{ url()->current() }}"
                                class="btn btn-primary me-2" target="_blank">
                                <i class="fab fa-facebook"></i>
                            </a>
                            <a href="https://wa.me/?text=Check out this post: {{ url()->current() }}"
                                class="btn btn-success me-2" target="_blank">
                                <i class="fab fa-whatsapp"></i>
                            </a>
                            <a href="https://www.instagram.com/" class="btn btn-danger me-2" target="_blank">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </div>
                        {{-- comment --}}
                        <div class="mt-4" id="commentForm" style="display: none;">
                            <div class="row">
                                <div class="col-sm-6 mb-3">
                                    <form id="commentForm">
                                        <textarea class="form-control" id="commentTextarea" rows="3" placeholder="Tambahkan komentar"></textarea>
                                        <button type="submit" class="btn btn-primary btn-sm mt-2">Kirim Komentar</button>
                                    </form>
                                </div>
                                <div class="col-sm-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <i class="fas fa-user-circle fa-lg"></i><span class="fw-bold"> Bambang</span>
                                            <hr class="my-2">
                                            <p>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore similique
                                                nesciunt
                                                sapiente nulla reprehenderit temporibus a error provident assumenda
                                                repudiandae?"
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <hr class="my-4">

                        <div class="container">
                            <h3 class="mb-3">Postingan terkait lainnya:</h3>
                            <div class="row">
                                <div class="owl-carousel">
                                    @foreach ($posts as $otherPost)
                                        @if ($otherPost->category->id == $post->category->id && $otherPost->slug != $post->slug)
                                            <div class="item">
                                                <div class="col-md-4" style="width: 100%">
                                                    <div class="card">
                                                        <div class="position-absolute px-3 py-2 text-white"
                                                            style="background-color: rgba(0, 0, 0, 0.7)">
                                                            <a href="/posts?category={{ $otherPost->category->slug }}"
                                                                class="text-white text-decoration-none">
                                                                {{ $otherPost->category->name }}
                                                            </a>
                                                        </div>
                                                        @if ($otherPost->image)
                                                            <img src="{{ asset('storage/' . $otherPost->image) }}"
                                                                alt="{{ $otherPost->category->name }}"
                                                                class="card-img-top">
                                                        @else
                                                            <img src="{{ asset('img/default.png') }}"
                                                                class="card-img-top bg-dark"
                                                                alt="{{ $otherPost->category->name }}">
                                                        @endif
                                                        <div class="card-body">
                                                            <p class="card-title">{{ $otherPost->title }}</p>
                                                            <p>
                                                                <small class="text-muted">
                                                                    Ditulis Oleh :
                                                                    <a class="text-decoration-none"
                                                                        href="/posts?author={{ $otherPost->author->username }}">
                                                                        {{ $otherPost->author->name }}
                                                                    </a>
                                                                    {{ $otherPost->created_at->diffForHumans() }}
                                                                </small>
                                                            </p>
                                                            <a href="/otherPosts/{{ $otherPost['slug'] }}"
                                                                class="btn btn-primary">Selengkapnya</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="my-4">

                    {{-- sidebar --}}
                    <div class="col-md-4 scrollable-column py-5 d-none d-md-block" id="scrollableCol">
                        <p class="mt-3">Postingan Terpopuler :</p>
                        <ul class="list-group list-group-flush">
                            @foreach ($posts->sortByDesc('click_count')->take(5) as $post)
                                <li class="list-group-item">
                                    <div class="d-flex align-items-center">
                                        @if ($post->image)
                                            <img src="{{ asset('post-images/' . $post->image) }}"
                                                alt="{{ $post->category->name }}" class="me-2" width="60"
                                                height="50">
                                        @else
                                            <img src="{{ asset('img/default.png') }}" alt="{{ $post->category->name }}"
                                                class="me-2 bg-dark" width="60" height="50">
                                        @endif
                                        <a href="{{ url("/posts-{$post->slug}") }}"
                                            class="text-decoration-none text-dark"> {{ $post->title }}</a>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                        <hr class="my-4">

                        <p class="mt-3">Postingan Terbaru :</p>
                        <ul class="list-group list-group-flush">
                            @foreach ($posts->take(5) as $post)
                                <li class="list-group-item">
                                    <div class="d-flex align-items-center">
                                        @if ($post->image)
                                            <img src="{{ asset('post-images/' . $post->image) }}"
                                                alt="{{ $post->category->name }}" class="me-2" width="60"
                                                height="50">
                                        @else
                                            <img src="{{ asset('img/default.png') }}" alt="{{ $post->category->name }}"
                                                class="me-2 bg-dark" width="60" height="50">
                                        @endif
                                        <a href="{{ url("/posts-{$post->slug}") }}"
                                            class="text-decoration-none text-dark"> {{ $post->title }}</a>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                        <hr class="my-4">

                        <p class="mt-3">Kategori :</p>
                        <ul class="list-group list-group-flush">
                            <div id="categoriesContainer">
                                @foreach ($categories as $category)
                                    <li class="list-group-item">
                                        <div class="col-md-12 category-item">
                                            <a href="/posts?category={{ $category->slug }}"
                                                class="text-decoration-none text-dark">
                                                {{ $category->name }}
                                            </a>

                                        </div>
                                    </li>
                                @endforeach
                            </div>
                        </ul>
                    </div>

                    <div class="col-md-4 mt-3 d-md-none d-block">
                        <p>Postingan Terpopuler :</p>
                        <ul class="list-group list-group-flush">
                            @foreach ($posts->sortByDesc('click_count')->take(5) as $post)
                                <li class="list-group-item">
                                    <div class="d-flex align-items-center">
                                        @if ($post->image)
                                            <img src="{{ asset('post-images/' . $post->image) }}"
                                                alt="{{ $post->category->name }}" class="me-2" width="60"
                                                height="50">
                                        @else
                                            <img src="{{ asset('img/default.png') }}" alt="{{ $post->category->name }}"
                                                class="me-2 bg-dark" width="60" height="50">
                                        @endif
                                        <a href="{{ url("/posts-{$post->slug}") }}"
                                            class="text-decoration-none text-dark">{{ $post->title }}</a>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                        <hr class="my-4">

                        <p class="mt-3">Postingan Terbaru :</p>
                        <ul class="list-group list-group-flush">
                            @foreach ($posts->take(5) as $post)
                                <li class="list-group-item">
                                    <div class="d-flex align-items-center">
                                        @if ($post->image)
                                            <img src="{{ asset('post-images/' . $post->image) }}"
                                                alt="{{ $post->category->name }}" class="me-2" width="60"
                                                height="50">
                                        @else
                                            <img src="{{ asset('img/default.png') }}" alt="{{ $post->category->name }}"
                                                class="me-2 bg-dark" width="60" height="50">
                                        @endif
                                        <a href="{{ url("/posts-{$post->slug}") }}"
                                            class="text-decoration-none text-dark">{{ $post->title }}</a>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                        <hr class="my-4">

                        <p class="mt-3">Kategori :</p>
                        <ul class="list-group list-group-flush">
                            <div id="categoriesContainer">
                                @foreach ($categories as $category)
                                    <li class="list-group-item">
                                        <div class="col-md-12 category-item">
                                            <a href="/posts?category={{ $category->slug }}"
                                                class="text-decoration-none text-dark">
                                                {{ $category->name }}
                                            </a>

                                        </div>
                                    </li>
                                @endforeach
                            </div>
                        </ul>
                    </div>
                </div>
            </div>
    </section>

    {{-- Script Copy Link --}}
    <script>
        document.getElementById('copyLinkBtn').addEventListener('click', function() {
            var dummy = document.createElement('textarea');
            document.body.appendChild(dummy);
            dummy.value = window.location.href;
            dummy.select();
            document.execCommand('copy');
            document.body.removeChild(dummy);
            alert('Link copied to clipboard!');
        });
    </script>

    {{-- Script Shere --}}
    <script>
        document.getElementById('shareBtn').addEventListener('click', function(event) {
            event.preventDefault();

            // Toggle tampilan ikon-ikon setelah tombol share diklik
            var shareIcons = document.getElementById('shareIcons');
            shareIcons.style.display = (shareIcons.style.display === 'none') ? 'block' : 'none';
        });
    </script>

    <script>
        document.getElementById('commentBtn').addEventListener('click', function(event) {
            event.preventDefault();

            // Toggle tampilan formulir komentar setelah tombol komentar diklik
            var commentForm = document.getElementById('commentForm');
            commentForm.style.display = (commentForm.style.display === 'none') ? 'block' : 'none';
        });
    </script>

    <script>
        // Ambil elemen jumlah share
        var shareCountSpan = document.getElementById('shareCount');

        // Ambil nilai saat ini dari localStorage atau defaultkan ke 0
        var currentShareCount = localStorage.getItem('shareCount') || 0;

        // Atur nilai awal ke tampilan jumlah share
        shareCountSpan.innerText = currentShareCount;

        // Tambahkan event listener untuk setiap tombol share
        document.getElementById('copyLinkBtn').addEventListener('click', handleShareClick);
        document.querySelector('#shareIcons a[href^="https://twitter.com"]').addEventListener('click', handleShareClick);
        document.querySelector('#shareIcons a[href^="https://www.facebook.com"]').addEventListener('click',
            handleShareClick);
        document.querySelector('#shareIcons a[href^="https://wa.me"]').addEventListener('click', handleShareClick);
        document.querySelector('#shareIcons a[href^="https://www.instagram.com"]').addEventListener('click',
            handleShareClick);

        function handleShareClick() {
            // Tambahkan 1 ke nilai saat ini
            currentShareCount++;

            // Simpan nilai ke localStorage
            localStorage.setItem('shareCount', currentShareCount);

            // Update tampilan jumlah share
            shareCountSpan.innerText = currentShareCount;
        }
    </script>
@endsection
