@extends('layouts.main')

@section('content')
    <!-- slide -->
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
        {{-- <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div> --}}
        <div class="carousel-inner">

            <div class="carousel-item active">
                <img src="{{ asset('img/gambar/banner-mobile.png') }}" class="d-md-none w-100 h-100 gradient" alt="Gambar 1" />
                <img src="{{ asset('img/gambar/banner-desktop.png') }}" class="d-none d-md-block w-100 h-100 gradient"
                    alt="Gambar 1" />
                <div class="carousel-caption carousel-caption-left shadow-sm">
                    <h1 class="fw-bold caption">BENGKEL <span class="text-warning">SPORT</span> KREATIF</h1>
                    <p class="persuasif fw-bold">JASA SERVICE RAKET BADMINTON DAN TENNIS</p>
                    <p class="fw-bold"><span class="text-warning">Percayakan Raketmu pada Ahli : </span><br>Dengan harga
                        yang terjangkau tetap dengan hasil yang berkualitas</p>
                    <a href="#" data-bs-toggle="modal" data-bs-target="#biayaModal"
                        class="btn btn-warning btn-custome btn-lg text-light fw-bold mt-3">CEK BIAYA SERVICE</a>
                </div>
            </div>
        </div>
        {{-- <div class="carousel-item">
            <img src="img/gambar/slide2.jpg" class="d-block w-100 h-100" alt="Gambar 2" />
        </div>
        <div class="carousel-item">
            <img src="img/gambar/slide3.jpg" class="d-block w-100 h-100" alt="Ganbar 3" />
        </div> --}}
    </div>
    {{-- <button class="carousel-control-prev btn-lg" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button> --}}
    </div>
    <!-- akhir slide -->

    <!-- alasan -->
    <div class="container-fluid my-5 text-center">
        <h2 class="fw-bold text-center">Alasan Mengapa Anda Harus Memilih Kami</h2>

        <div class="row mt-5">
            <div class="col-lg-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <i class="fas fa-headset fa-3x mb-3"></i>
                        <h5 class="card-title">Pelayanan Pelanggan 24/7</h5>
                        <p class="card-text">Kami siap membantu Anda kapan pun dibutuhkan, 24 jam sehari, 7 hari seminggu.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Menambahkan ikon Font Awesome ke alasan lainnya -->
            <!-- Anda dapat mengganti ikon dengan ikon Font Awesome lainnya sesuai kebutuhan -->
            <div class="col-lg-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <i class="fas fa-award fa-3x mb-3"></i>
                        <h5 class="card-title">Kualitas Unggul</h5>
                        <p class="card-text">Produk atau layanan kami selalu berfokus pada kualitas tertinggi.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <i class="fas fa-lightbulb fa-3x mb-3"></i>
                        <h5 class="card-title">Inovasi Terbaru</h5>
                        <p class="card-text">Kami terus berinovasi untuk memberikan solusi terbaik bagi kebutuhan Anda.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <i class="fas fa-users fa-3x mb-3"></i>
                        <h5 class="card-title">Tim Profesional</h5>
                        <p class="card-text">Tim kami terdiri dari para profesional yang berpengalaman dalam bidangnya.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <i class="fas fa-hand-holding-heart fa-3x mb-3"></i>
                        <h5 class="card-title">Kemudahan Penggunaan</h5>
                        <p class="card-text">Produk atau layanan kami dirancang untuk kenyamanan dan kemudahan penggunaan.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <i class="fas fa-shield-alt fa-3x mb-3"></i>
                        <h5 class="card-title">Keandalan</h5>
                        <p class="card-text">Anda bisa mempercayai kami dalam memberikan layanan yang handal dan terpercaya.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- akhir alasan -->

    <!-- service -->
    <section id="service">
        <div class="container-fluid">
            <div class="row  justify-content-center">
                <div class="col">
                    <h2 class="fw-bold text-center">Layanan Kami</h2>
                </div>
            </div>
            <div class="row justify-content-center fs-5" style="overflow: hidden">
                <div class="col-md-6 mt-2" data-aos="fade-right">
                    <div class="card shadow h-100" data-aos="zoom-in">
                        <div class="card bg-dark text-white ">
                            <img src="{{ asset('img/service-tennis.png') }}" class="card-img "
                                alt="{{ asset('img/badminton.jpg') }}">
                            <div class="card-img-overlay d-flex align-items-center p-0">
                                <h5 class="card-title text-center fw-bold flex-fill p-3 fs-3 mt-0 text-decoration-none text-light"
                                    style="background-color: rgba(0,0,0,.7)">Servis Raket Tenis</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mt-2" data-aos="fade-left">
                    <div class="card shadow h-100" data-aos="zoom-in">
                        <div class="card bg-dark text-white ">
                            <img src="{{ asset('img/service-badminton.png') }}" class="card-img "
                                alt="{{ asset('img/badminton.jpg') }}">
                            <div class="card-img-overlay d-flex align-items-center p-0">
                                <h5 class=" card-title text-center fw-bold flex-fill p-3 fs-3 mt-0 text-decoration-none text-light"
                                    style="background-color: rgba(0,0,0,.7)">Servis Raket Bulutangkis</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!-- akhir service -->

    <!-- Tentang desktop -->
    <section id="about">
        <div class="container-fluid p-3 d-none d-md-block">
            <div class="row mt-5 justify-content-center">
                <div class="col">
                    <h2 class="fw-bold text-center">Tentang Kami</h2>
                </div>
            </div>
            <div class="row justify-content-center fs-5 " style="overflow: hidden">
                <div class="col-md-4 mt-2" data-aos="fade-right">
                    <img class="img-fluid" src="{{ asset('img/about-tennis.png') }}" alt="">
                </div>
                <div class="col-md-4 mt-2" data-aos="fade-right">
                    <p>
                    <h5 class="fw-bold">Servis Raket Tenis</h5>
                    Dengan staf profesional yang memiliki pengalaman, kami menghadirkan layanan yang berkualitas tinggi
                    dengan keahlian teknis yang tinggi pula. Kami tidak hanya memperbaiki raket; kami merawatnya dengan
                    sepenuh hati agar mencerminkan preferensi Anda serta menyesuaikan diri dengan gaya permainan unik yang
                    Anda miliki.
                    </p>
                    <p>
                        Melalui layanan kami, Anda tidak hanya mendapatkan perbaikan raket, namun juga solusi terbaik yang
                        disesuaikan dengan gaya permainan Anda.
                    </p>
                </div>
            </div>
            <div class="row justify-content-center fs-5   text-end" style="overflow: hidden">
                <div class="col-md-4 mt-2" data-aos="fade-left">
                    <p>
                    <h5 class="fw-bold">Service Raket Bulutangkis</h5>
                    Service raket badminton menjadi fondasi krusial bagi seorang pemain dalam mengejar kemenangan. Kami,
                    sebagai penyedia layanan service raket badminton, memahami betapa pentingnya raket yang handal untuk
                    mencapai performa optimal di lapangan. Dengan fokus pada kualitas, ketelitian, dan pengalaman, kami siap
                    mendukung para pemain dalam menghadirkan performa terbaik mereka.
                    </p>
                    <p>
                        Melalui layanan kami, pemain tenis dapat mempercayakan raket mereka kepada kami dan berkonsentrasi
                        sepenuhnya pada permainan.
                    </p>
                </div>
                <div class="col-md-4 mt-2" data-aos="fade-right">
                    <img class="img-fluid" src="{{ asset('img/about-badminton.png') }}" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- akhir Tentang desktop -->

    <!-- Tentang mobile -->
    <section id="about">
        <div class="container-fluid d-md-none ">
            <div class="row text-center">
                <div class="col">
                    <h2 class="fw-bold text-center">Tentang Kami</h2>
                </div>
            </div>
            <div class="row justify-content-center fs-5  mb-2" style="overflow: hidden">
                <div class="col-md-4" data-aos="fade-right">
                    <img class="img-fluid" src="{{ asset('img/about-tennis.png') }}" alt="">
                </div>
                <div class="col-md-4 mt-2" data-aos="fade-right">
                    <p>
                    <h5 class="fw-bold">Servis Raket Tenis</h5>
                    Dengan staf profesional yang memiliki pengalaman, kami menghadirkan layanan yang berkualitas tinggi
                    dengan keahlian teknis yang tinggi pula. Kami tidak hanya memperbaiki raket; kami merawatnya dengan
                    sepenuh hati agar mencerminkan preferensi Anda serta menyesuaikan diri dengan gaya permainan unik yang
                    Anda miliki.
                    </p>
                    <p>
                        Melalui layanan kami, Anda tidak hanya mendapatkan perbaikan raket, namun juga solusi terbaik yang
                        disesuaikan dengan gaya permainan Anda.
                    </p>
                </div>
            </div>
            <div class="row justify-content-center fs-5  mb-2" style="overflow: hidden">

                <div class="col-md-4 mt-2" data-aos="fade-right">
                    <img class="img-fluid" src="{{ asset('img/about-badminton.png') }}" alt="">
                </div>
                <div class="col-md-4 mt-2" data-aos="fade-left">
                    <p>
                    <h5 class="fw-bold">Servis Raket Bulutangkis</h5>
                    Service raket badminton menjadi fondasi krusial bagi seorang pemain dalam mengejar kemenangan. Kami,
                    sebagai penyedia layanan service raket badminton, memahami betapa pentingnya raket yang handal untuk
                    mencapai performa optimal di lapangan. Dengan fokus pada kualitas, ketelitian, dan pengalaman, kami siap
                    mendukung para pemain dalam menghadirkan performa terbaik mereka.
                    </p>
                    <p>
                        Melalui layanan kami, pemain tenis dapat mempercayakan raket mereka kepada kami dan berkonsentrasi
                        sepenuhnya pada permainan.
                    </p>
                </div>

            </div>
        </div>
    </section>
    <!-- akhir Tentang mobile-->

    <!-- Galeri -->
    <section id="gallery" class="mb-4">
        <div class="container-fluid p-3">
            <div class="row mt-5 text-center">
                <div class="col">
                    <h2 class="fw-bold">Galeri</h2>
                </div>
            </div>
            <div class="row mt-5 fs-5 justify-content-center" style="overflow: hidden">
                @if ($galleries->isEmpty())
                    <!-- Tampilkan gambar default jika daftar galeri kosong -->
                    <div class="col-md-4 mb-4" data-aos="zoom-in-down">
                        <img src="{{ asset('img/1.png') }}" alt="Gambar Default" class="w-100 h-100 img-thumbnail" />
                    </div>
                    <div class="col-md-4 mb-4" data-aos="zoom-in-down">
                        <img src="{{ asset('img/2.png') }}" alt="Gambar Default" class="w-100 h-100 img-thumbnail" />
                    </div>
                    <div class="col-md-4 mb-4" data-aos="zoom-in-down">
                        <img src="{{ asset('img/3.png') }}" alt="Gambar Default" class="w-100 h-100 img-thumbnail" />
                    </div>
                    <div class="col-md-4 mb-4" data-aos="zoom-in-down">
                        <img src="{{ asset('img/4.png') }}" alt="Gambar Default" class="w-100 h-100 img-thumbnail" />
                    </div>
                    <div class="col-md-4 mb-4" data-aos="zoom-in-down">
                        <img src="{{ asset('img/5.png') }}" alt="Gambar Default" class="w-100 h-100 img-thumbnail" />
                    </div>
                    <div class="col-md-4 mb-4" data-aos="zoom-in-down">
                        <img src="{{ asset('img/6.png') }}" alt="Gambar Default" class="w-100 h-100 img-thumbnail" />
                    </div>
                @else
                    <!-- Tampilkan galeri jika tidak kosong -->
                    @foreach ($galleries as $gallery)
                        <div class="col-md-4 mb-4" data-aos="zoom-in-down">
                            <img src="{{ asset('images/' . $gallery->image) }}" alt="{{ $gallery->name }}"
                                class="w-100 h-100 img-thumbnail" />
                        </div>
                    @endforeach
                @endif

            </div>
        </div>
    </section>
    <!-- Akhir Galeri -->

    <!-- modal -->
    <div class="modal fade" id="biayaModal" data-bs-backdrop="static" tabindex="-1"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content">
                <div class="modal-header d-flex justify-content-center">
                    <h5 class="modal-title fw-bold" id="exampleModalLabel">DAFTAR BIAYA JASA PERBAIKAN,SERVICE
                        ,PEMASANGAN GRIB DAN SENAR RAKET BADMINTON DAN TENNIS</h5>
                </div>
                <div class="modal-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr class="bg-dark text-light fw-bold">
                                    <th scope="col">No</th>
                                    <th scope="col">Service</th>
                                    <th scope="col">Biaya</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($services as $service)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $service->service }}</td>
                                        <td>Rp. {{ $service->biaya }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary fw-bold" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- akhir modal -->
@endsection
