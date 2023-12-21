@extends('layouts.main')

@section('content')
    <!-- slide -->
    <section id="slide" class="mt-5">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('img/gambar/banner-mobile.png') }}" class="d-md-none w-100 h-100  " alt="Gambar 1" />
                    <img src="{{ asset('img/gambar/banner-desktop.png') }}" class="d-none d-md-block w-100 h-100"
                        alt="Gambar 1" />
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('img/gambar/banner-mobile-1.png') }}" class="d-md-none w-100 h-100  "
                        alt="Gambar 1" />
                    <img src="{{ asset('img/gambar/banner-desktop-1.png') }}" class="d-none d-md-block w-100 h-100"
                        alt="Gambar 1" />
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('img/gambar/banner-mobile-2.png') }}" class="d-md-none w-100 h-100  "
                        alt="Gambar 1" />
                    <img src="{{ asset('img/gambar/banner-desktop-2.png') }}" class="d-none d-md-block w-100 h-100"
                        alt="Gambar 1" />
                </div>
                <div class="carousel-caption carousel-caption-left ">
                    <h1 class="fw-bold caption">BENGKEL <span class="text-warning">SPORT</span>
                        KREATIF</h1>
                    <p class="persuasif fw-bold">JASA SERVICE RAKET BADMINTON DAN TENNIS</p>
                    <p class="fw-bold"><span class="text-warning">Percayakan Raketmu pada Kami : </span><br>Dengan harga
                        yang terjangkau, anda tetap puas dengan hasilnya. Tunggu apa lagi, buruan !!!</p>
                    <div>
                        <a href="#" data-bs-toggle="modal" data-bs-target="#formPemesanan"
                            class="btn btn-success hvr-grow text-light fw-bold mt-3 me-2 btn-home">Pesan Sekarang</a>
                        <a href="https://wa.me/6285266528221?text=Saya%20ingin%20konsultasi%20tentang..."
                            class="btn btn-primary hvr-grow text-light fw-bold mt-3 btn-home">Konsultasi</a>
                    </div>

                </div>
            </div>
        </div>
        {{-- <button class="carousel-control-prev btn-lg" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button> --}}
        </div>
    </section>
    <!-- akhir slide -->

    <!-- alasan -->
    <section id="alasan">
        <div class="container-fluid text-center">

            <h2 class="fw-bold text-center">Alasan Mengapa Anda Harus Memilih Kami?</h2>

            <div class="row mt-4" style="overflow: hidden">
                <div class="col-lg-4 py-4" data-aos="slide-up">
                    <div class="card  text-dark hvr-float card-home" style="background-color:#a2d9ff;">
                        <div class="card-body">
                            <i class="fas fa-headset fa-3x mb-3"></i>
                            <h5 class="card-title">Pelayanan Pelanggan 24/7</h5>
                            <p class="card-text">Kami siap membantu Anda kapan pun dibutuhkan, 24 jam sehari, 7 hari
                                seminggu.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Menambahkan ikon Font Awesome ke alasan lainnya -->
                <!-- Anda dapat mengganti ikon dengan ikon Font Awesome lainnya sesuai kebutuhan -->
                <div class="col-lg-4 py-4" data-aos="slide-up">
                    <div class="card  text-dark hvr-float card-home  " style="background-color:#a2d9ff;">
                        <div class="card-body">
                            <i class="fas fa-award fa-3x mb-3"></i>
                            <h5 class="card-title">Kualitas Unggul</h5>
                            <p class="card-text">Produk atau layanan kami selalu berfokus pada kualitas tertinggi.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 py-4" data-aos="slide-up">
                    <div class="card  text-dark hvr-float card-home  " style="background-color:#a2d9ff;">
                        <div class="card-body">
                            <i class="fas fa-lightbulb fa-3x mb-3"></i>
                            <h5 class="card-title">Inovasi Terbaru</h5>
                            <p class="card-text">Kami terus berinovasi untuk memberikan solusi terbaik bagi kebutuhan Anda.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 py-4" data-aos="slide-up">
                    <div class="card  text-dark hvr-float card-home" style="background-color:#a2d9ff;">
                        <div class="card-body">
                            <i class="fas fa-users fa-3x mb-3"></i>
                            <h5 class="card-title">Tim Profesional</h5>
                            <p class="card-text">Tim kami terdiri dari para profesional yang berpengalaman dalam bidangnya.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 py-4" data-aos="slide-up">
                    <div class="card  text-dark hvr-float card-home  " style="background-color:#a2d9ff;">
                        <div class="card-body">
                            <i class="fas fa-hand-holding-heart fa-3x mb-3"></i>
                            <h5 class="card-title">Kemudahan Penggunaan</h5>
                            <p class="card-text">Produk atau layanan kami dirancang untuk kenyamanan dan kemudahan
                                penggunaan.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 py-4" data-aos="slide-up">
                    <div class="card  text-dark hvr-float card-home " style="background-color:#a2d9ff;">
                        <div class="card-body">
                            <i class="fas fa-shield-alt fa-3x mb-3"></i>
                            <h5 class="card-title">Keandalan</h5>
                            <p class="card-text">Anda bisa mempercayai kami dalam memberikan layanan yang handal.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#a2d9ff" fill-opacity="1"
                d="M0,320L30,282.7C60,245,120,171,180,154.7C240,139,300,181,360,202.7C420,224,480,224,540,186.7C600,149,660,75,720,74.7C780,75,840,149,900,165.3C960,181,1020,139,1080,112C1140,85,1200,75,1260,90.7C1320,107,1380,149,1410,170.7L1440,192L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z">
            </path>
        </svg>

    </section>
    <!-- akhir alasan -->

    <!-- layanan -->
    <section id="layanan">
        <div class="container-fluid"style="background-color: #a2d9ff">
            <div class="row  justify-content-center">
                <h2 class="fw-bold text-center">Layanan apa saja yang kami berikan?</h2>
                <div class="row mt-3" style="overflow: hidden">
                    <div class="col-md-4 mb-2" data-aos="slide-up">
                        <div class="card card-home hvr-float">
                            <div class="card-body text-center">
                                <i class="fas fa-leaf fa-2x mb-3"></i> <!-- Ikon daun dari Font Awesome -->
                                <h5 class="card-title fw-bold">Menambah Berat Daun</h5>
                                <p class="card-text">Layanan menambah berat daun raket badminton & tennis untuk
                                    meningkatkan
                                    performa
                                    pukulan.</p>
                                <p class="card-text fw-bold">Rp. 20.000 - Rp.
                                    50.000</p>
                                <div>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 mb-2" data-aos="slide-up">
                        <div class="card card-home hvr-float">
                            <div class="card-body text-center">
                                <i class="fas fa-stroopwafel fa-2x mb-3"></i> <!-- Ikon reset dari Font Awesome -->
                                <h5 class="card-title fw-bold">Ganti atau Stel Ulang Senar</h5>
                                <p class="card-text">Layanan penggantian atau penyetelan ulang senar raket badminton &
                                    tennis
                                    sesuai kebutuhan.</p>
                                <p class="card-text fw-bold">Rp. 35.000 - Rp.
                                    45.000</p>
                                <div>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 mb-2" data-aos="slide-up">
                        <div class="card card-home hvr-float">
                            <div class="card-body text-center">
                                <i class="fas fa-low-vision fa-2x mb-3"></i> <!-- Ikon mata ayam dari Font Awesome -->
                                <h5 class="card-title fw-bold">Ganti Mata Ayam</h5>
                                <p class="card-text">Layanan penggantian mata ayam pada raket badminton & tennis.
                                </p>
                                <p class="card-text fw-bold">Rp. 15.000 - Rp.
                                    35.000</p>
                                <div>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-2" data-aos="slide-up">
                        <div class="card card-home hvr-float">
                            <div class="card-body text-center">
                                <i class="fas fa-tools fa-2x mb-3"></i> <!-- Ikon alat dari Font Awesome -->
                                <h5 class="card-title fw-bold">Service Patah</h5>
                                <p class="card-text">Layanan perbaikan raket badminton & tennis yang patah.</p>
                                <p class="card-text fw-bold">Rp. 75.000 - Rp.
                                    100.000</p>
                                <div>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 mb-2" data-aos="slide-up">
                        <div class="card card-home hvr-float">
                            <div class="card-body text-center">
                                <i class="fas fa-grip-lines-vertical fa-2x mb-3"></i> <!-- Ikon grip dari Font Awesome -->
                                <h5 class="card-title fw-bold">Ganti atau Stel Grip</h5>
                                <p class="card-text">Layanan penggantian atau penyetelan ulang grip raket badminton &
                                    tennis.</p>
                                <p class="card-text fw-bold">Rp. 35.000</p>
                                <div class="card-text">
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-2" data-aos="slide-up">
                        <div class="card card-home hvr-float">
                            <div class="card-body text-center">
                                <i class="fas fa-ring fa-2x mb-3"></i> <!-- Ikon grip dari Font Awesome -->
                                <h5 class="card-title fw-bold">Ganti Tutup Grip</h5>
                                <p class="card-text">Layanan penggantian tutup grip raket raket badminton & tennis.</p>
                                <p class="card-text fw-bold">Rp. 25.000 - Rp.
                                    35.000</p>
                                <div class="card-text">
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#a2d9ff" fill-opacity="1"
                d="M0,160L26.7,154.7C53.3,149,107,139,160,160C213.3,181,267,235,320,234.7C373.3,235,427,181,480,165.3C533.3,149,587,171,640,170.7C693.3,171,747,149,800,165.3C853.3,181,907,235,960,261.3C1013.3,288,1067,288,1120,250.7C1173.3,213,1227,139,1280,117.3C1333.3,96,1387,128,1413,144L1440,160L1440,0L1413.3,0C1386.7,0,1333,0,1280,0C1226.7,0,1173,0,1120,0C1066.7,0,1013,0,960,0C906.7,0,853,0,800,0C746.7,0,693,0,640,0C586.7,0,533,0,480,0C426.7,0,373,0,320,0C266.7,0,213,0,160,0C106.7,0,53,0,27,0L0,0Z">
            </path>
        </svg>
    </section>
    <!-- akhir layanan -->

    <!-- Galeri -->
    <section id="gallery">
        <div class="container-fluid">
            <div class="row mt-4 text-center">
                <div class="col">
                    <h2 class="fw-bold">Raket sperti apa saja yang bisa di perbaiki?</h2>
                    <h3 class="fw-bold text-center">Semua jenis raket badminton dan tennis.</h3>
                </div>
            </div>
            <div class="row mt-4 fs-5 justify-content-center" style="overflow: hidden">
                <div class="col-md-4 py-4" data-aos="slide-up">
                    <img src="{{ asset('img/1.png') }}" alt="Gambar Default"
                        class="w-100 h-100 img-thumbnail bg-dark   hvr-grow card-home" />
                </div>
                <div class="col-md-4 py-4" data-aos="slide-up">
                    <img src="{{ asset('img/2.png') }}" alt="Gambar Default"
                        class="w-100 h-100 img-thumbnail bg-dark   hvr-grow card-home" />
                </div>
                <div class="col-md-4 py-4" data-aos="slide-up">
                    <img src="{{ asset('img/3.png') }}" alt="Gambar Default"
                        class="w-100 h-100 img-thumbnail bg-dark   hvr-grow card-home" />
                </div>
                <div class="col-md-4 py-4" data-aos="slide-up">
                    <img src="{{ asset('img/4.png') }}" alt="Gambar Default"
                        class="w-100 h-100 img-thumbnail bg-dark   hvr-grow card-home" />
                </div>
                <div class="col-md-4 py-4" data-aos="slide-up">
                    <img src="{{ asset('img/5.png') }}" alt="Gambar Default"
                        class="w-100 h-100 img-thumbnail bg-dark   hvr-grow card-home" />
                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#a2d9ff" fill-opacity="1"
                d="M0,320L30,282.7C60,245,120,171,180,154.7C240,139,300,181,360,202.7C420,224,480,224,540,186.7C600,149,660,75,720,74.7C780,75,840,149,900,165.3C960,181,1020,139,1080,112C1140,85,1200,75,1260,90.7C1320,107,1380,149,1410,170.7L1440,192L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z">
            </path>
        </svg>
    </section>
    <!-- Akhir Galeri -->

    <!-- Ulasan -->
    <section id="ulasan"> <!-- Reduced top and bottom padding -->
        <div class="container-fluid justify-content-center" style="background-color: #a2d9ff">
            <div class="row py-3 text-center"> <!-- Reduced top margin -->
                <div class="col-md-12">
                    <h2 class="fw-bold">Apa kata mereka yang sudah menggunakan jasa kami?</h2>
                </div>
                <div class="col-md-12 mt-3">
                    <div class="text-center d-flex justify-content-center mt-0">
                        <button type="button" class="fw-bold btn btn-homei hvr-grow" data-bs-toggle="modal"
                            data-bs-target="#ulasanModal">
                            Berikan Ulasan
                        </button>
                    </div>
                </div>
            </div>
            @if ($reviews->isEmpty())
                <div class="container py-2"> <!-- Reduced top and bottom padding -->
                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <div class="card  hvr-float text-center card-home">
                                <div class="card-body">
                                    <p class="display-4">Belum ada ulasan.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @else
                <div class="row mt-2 justify-content-center">
                    <div class="owl-carousel">
                        @foreach ($reviews as $review)
                            <div class="item">
                                <div class="col-md-6" style="width: 95%;">
                                    <!-- Adjusted width and reduced top and bottom padding -->
                                    <div class="card w-100 text-center card-home" data-aos="slide-up">
                                        <div class="card-body">
                                            <p>
                                                <span class="fw-bold"><i class="fas fa-user-circle fa-lg"></i>
                                                    {{ $review->name }}</span>
                                                <br>
                                                <span class="small px-4">{{ $review->job }}</span>
                                            </p>
                                            <p class="card-text">{{ $review->comment }}</p>
                                            <span>
                                                @for ($i = 1; $i <= 5; $i++)
                                                    @if ($i <= $review->rating)
                                                        <i class="fas fa-star text-warning"></i>
                                                    @else
                                                        <i class="fas fa-star text-secondary"></i>
                                                    @endif
                                                @endfor
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#a2d9ff" fill-opacity="1"
                d="M0,160L26.7,154.7C53.3,149,107,139,160,160C213.3,181,267,235,320,234.7C373.3,235,427,181,480,165.3C533.3,149,587,171,640,170.7C693.3,171,747,149,800,165.3C853.3,181,907,235,960,261.3C1013.3,288,1067,288,1120,250.7C1173.3,213,1227,139,1280,117.3C1333.3,96,1387,128,1413,144L1440,160L1440,0L1413.3,0C1386.7,0,1333,0,1280,0C1226.7,0,1173,0,1120,0C1066.7,0,1013,0,960,0C906.7,0,853,0,800,0C746.7,0,693,0,640,0C586.7,0,533,0,480,0C426.7,0,373,0,320,0C266.7,0,213,0,160,0C106.7,0,53,0,27,0L0,0Z">
            </path>
        </svg>
    </section>
    <!-- Akhir Ulasan -->

    <!-- Blog & Berita -->
    <section id="blog"> <!-- Reduced top and bottom padding -->
        <div class="container-fluid justify-content-center">
            <div class="row text-center"> <!-- Reduced top margin -->
                <div class="col-md-12">
                    <h2 class="fw-bold">Seputar berita dan informasi olahraga.</h2>
                </div>
            </div>
            @if ($posts->isEmpty())
                <div class="container py-2">
                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <div class="card hvr-float text-center card-home" style="background-color:#a2d9ff;">
                                <div class="card-body">
                                    <p class="display-4">Belum ada.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @else
                <div class="row">
                    <div class="owl-carousel">
                        @foreach ($posts as $post)
                            <div class="item">
                                <div class="col-md-4" style="width: 100%">
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
                                                <small class="text-muted">
                                                    Ditulis Oleh :
                                                    <a class="text-decoration-none"
                                                        href="/posts?author={{ $post->author->username }}">
                                                        {{ $post->author->name }}
                                                    </a>
                                                    {{ $post->created_at->diffForHumans() }}
                                                </small>
                                            </p>
                                            <p class="card-text">{{ $post->excerpt }}</p>
                                            <a href="/posts/{{ $post['slug'] }}" class="btn btn-primary">Selengkapnya</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif
        </div>
    </section>
    <!-- Akhir Blog & Berita -->

    <!-- Modal untuk Ulasan -->
    <div class="modal fade" id="ulasanModal" tabindex="-1" aria-labelledby="ulasanModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ulasanModalLabel">Berikan Ulasan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Formulir Ulasan -->
                    <form method="post" action="/ulasan">
                        @csrf
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" name="name" class="form-control" id="nama" required>
                        </div>
                        <div class="mb-3">
                            <label for="pekerjaan" class="form-label">Pekerjaan</label>
                            <input type="text" name="job" class="form-control" id="pekerjaan" required>
                        </div>
                        <div class="mb-3">
                            <label for="kontak" class="form-label">Kontak</label>
                            <input type="text" name="contact" class="form-control" id="kontak" required>
                        </div>
                        <div class="mb-3">
                            <label for="rating" class="form-label">Rating</label>
                            <div class="rating">
                                <i class="fas fa-star" data-rating="1"></i>
                                <i class="fas fa-star" data-rating="2"></i>
                                <i class="fas fa-star" data-rating="3"></i>
                                <i class="fas fa-star" data-rating="4"></i>
                                <i class="fas fa-star" data-rating="5"></i>
                                <input type="hidden" name="rating" id="selected-rating" required>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="ulasan" class="form-label">Ulasan</label>
                            <textarea name="comment" class="form-control" id="ulasan" rows="4" required></textarea>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary btn-home"
                                data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary btn-home">Kirim</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Akhir Modal Ulasan -->

    <!-- Modal Pemesanan-->
    <div class="modal fade" id="formPemesanan" tabindex="-1" aria-labelledby="formPemesananLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Form Pemesanan</h1>
                </div>
                <div class="modal-body">
                    <form id="orderForm">
                        <input type="text" class="form-control mb-2" id="nama" name="nama"
                            placeholder="Nama Lengkap" required>
                        <input type="text" class="form-control mb-2" id="kontak" name="kontak"
                            placeholder="Email atau No Hp" required>
                        <textarea id="pesan" class="form-control mb-2" name="pesan" rows="4" placeholder="Pesan" required></textarea>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-dark btn-home" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-sm btn-success btn-home" onclick="kirimPesan()">Kirim</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        function kirimPesan() {
            var nama = document.getElementById('nama').value;
            var kontak = document.getElementById('kontak').value;
            var pesan = document.getElementById('pesan').value;

            // Ganti nomor WhatsApp sesuai kebutuhan
            var nomorWhatsApp = '6285266528221';

            // Membuat link WhatsApp dengan pesan
            var linkWhatsApp = 'https://wa.me/' + nomorWhatsApp + '?text=' + encodeURIComponent('Nama: ' + nama +
                '\nKontak: ' + kontak + '\nPesan: ' + pesan);

            // Buka link WhatsApp
            window.open(linkWhatsApp, '_blank');

            // Jika Anda ingin mengirim formulir ke server, tambahkan kode AJAX di sini
            // ...

            // Bersihkan formulir setelah dikirim
            document.getElementById('orderForm').reset();
        }
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const ratingStars = document.querySelectorAll(".rating i");
            const ratingInput = document.getElementById("selected-rating");

            ratingStars.forEach((star, index) => {
                star.addEventListener("click", () => {
                    resetStars();

                    for (let i = 0; i <= index; i++) {
                        ratingStars[i].classList.add("active");
                    }

                    ratingInput.value = index + 1;
                });
            });

            function resetStars() {
                ratingStars.forEach((star) => {
                    star.classList.remove("active");
                });
            }
        });
    </script>

    {{-- <script>
        document.addEventListener('DOMContentLoaded', function() {
            const reviews = @json($reviews->slice(6)->values());
            const loadMoreBtn = document.getElementById('loadMoreBtn');
            const reviewContainer = document.getElementById('reviewContainer');
            const loadMoreContainer = document.getElementById('loadMoreContainer');

            // Tambahkan variabel boolean untuk melacak status tampilan ulasan
            let showAllReviews = false;

            if (reviews.length === 0) {
                loadMoreContainer.style.display = 'none';
            }

            loadMoreBtn.addEventListener('click', function() {
                // Tampilkan atau sembunyikan ulasan berdasarkan status tampilan
                if (showAllReviews) {
                    // Jika tombol "Sembunyikan Ulasan" diklik, kembalikan tampilan ulasan ke 6
                    reviewContainer.innerHTML = '';
                    @json($reviews->slice(0, 6)->values()).forEach(function(review) {
                        const ratingHtml = Array.from({
                            length: 5
                        }, (_, index) => {
                            return index < review.rating ?
                                '<i class="fas fa-star text-warning"></i>' :
                                '<i class="fas fa-star text-secondary"></i>';
                        }).join('');

                        const reviewHtml = `
                        <div class="col-lg-4 py-4" data-aos="slide-up">
                            <div class="card  bg-dark text-light hvr-float w-100">
                                <div class="card-body">
                                    <p>
                                        <span class="fw-bold"><i class="fas fa-user-circle fa-lg"></i> ${review.name}</span>
                                        <br>
                                        <span class="small px-4">${review.job}</span>
                                    </p>
                                    <p class="card-text">${review.comment}</p>
                                    <span>${ratingHtml}</span>
                                </div>
                            </div>
                        </div>
                    `;

                        reviewContainer.innerHTML += reviewHtml;
                    });

                    // Ubah teks tombol menjadi "Tampilkan Semua Ulasan"
                    loadMoreBtn.innerText = 'Tampilkan Semua Ulasan';

                    showAllReviews = false;
                } else {
                    // Jika tombol "Tampilkan Semua Ulasan" diklik, tampilkan semua ulasan
                    reviews.forEach(function(review) {
                        const ratingHtml = Array.from({
                            length: 5
                        }, (_, index) => {
                            return index < review.rating ?
                                '<i class="fas fa-star text-warning"></i>' :
                                '<i class="fas fa-star text-secondary"></i>';
                        }).join('');

                        const reviewHtml = `
                        <div class="col-lg-4 py-4" data-aos="slide-up">
                            <div class="card  bg-dark text-light hvr-float w-100">
                                <div class="card-body">
                                    <p>
                                        <span class="fw-bold"><i class="fas fa-user-circle fa-lg"></i> ${review.name}</span>
                                        <br>
                                        <span class="small px-4">${review.job}</span>
                                    </p>
                                    <p class="card-text">${review.comment}</p>
                                    <span>${ratingHtml}</span>
                                </div>
                            </div>
                        </div>
                    `;

                        reviewContainer.innerHTML += reviewHtml;
                    });

                    // Ubah teks tombol menjadi "Sembunyikan Ulasan"
                    loadMoreBtn.innerText = 'Sembunyikan Ulasan';

                    showAllReviews = true;
                }

                // Tambahkan kode untuk menampilkan kembali tombol "Tampilkan Semua Ulasan" setelah di-klik
                loadMoreContainer.style.display = 'flex';
            });
        });
    </script> --}}
@endsection
