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
            <img src="{{ asset('img/gambar/banner-desktop.png') }}" class="d-none d-md-block w-100 h-100 gradient" alt="Gambar 1" />
            <div class="carousel-caption carousel-caption-left shadow-sm">
                <h1 class="fw-bold caption">BENGKEL <span class="text-warning">SPORT</span> KREATIF</h1>
                <p class="persuasif fw-bold">JASA SERVICE RAKET BADMINTON DAN TENNIS</p>
                <p class="h3 fw-bold"><span class="text-warning">Percayakan Raketmu pada Ahli : </span><br>Dengan harga yang terjangkau tetap dengan hasil yang berkualitas</p>
                <a href="#" data-bs-toggle="modal" data-bs-target="#biayaModal" class="btn btn-warning btn-lg text-light fw-bold mt-3">CEK BIAYA SERVICE</a>
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

<!-- service -->
<section id="service">
    <div class="container-fluid p-3">
        <div class="row mt-5 justify-content-center">
            <div class="col">
                <h2 class="fw-bold text-center bg-dark text-light p-3">SERVICE</h2>
            </div>
        </div>
        <div class="row justify-content-center fs-5 mt-5" style="overflow: hidden">
            <div class="col-md-4 mt-2" data-aos="fade-right">
                <div class="card shadow h-100" data-aos="zoom-in">
                    <div class="card bg-dark text-white ">
                        <img src="{{ asset('img/service-tennis.png') }}" class="card-img " alt="{{ asset('img/badminton.jpg') }}">
                        <div class="card-img-overlay d-flex align-items-center p-0">
                            <h5 class="card-title text-center fw-bold flex-fill p-3 fs-3 mt-0 text-decoration-none text-light" style="background-color: rgba(0,0,0,.7)">RAKET TENNIS</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mt-2" data-aos="fade-left">
                <div class="card shadow h-100" data-aos="zoom-in">
                    <div class="card bg-dark text-white ">
                        <img src="{{ asset('img/service-badminton.png') }}" class="card-img " alt="{{ asset('img/badminton.jpg') }}">
                        <div class="card-img-overlay d-flex align-items-center p-0">
                            <h5 class=" card-title text-center fw-bold flex-fill p-3 fs-3 mt-0 text-decoration-none text-light" style="background-color: rgba(0,0,0,.7)">RAKET BADMINTON</h5>
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
                <h2 class="fw-bold text-center bg-dark text-light p-3">ABOUT</h2>
            </div>
        </div>
        <div class="row justify-content-center fs-5 mt-5" style="overflow: hidden">
            <div class="col-md-4 mt-2" data-aos="fade-right">
                <img class="img-fluid" src="{{ asset('img/about-tennis.png') }}" alt="">
            </div>
            <div class="col-md-4 mt-2" data-aos="fade-right">
                <p>
                <h5 class="fw-bold">Service Raket Tennis</h5>
                Dengan staf profesional yang memiliki pengalaman, kami menghadirkan layanan yang berkualitas tinggi dengan keahlian teknis yang tinggi pula. Kami tidak hanya memperbaiki raket; kami merawatnya dengan sepenuh hati agar mencerminkan preferensi Anda serta menyesuaikan diri dengan gaya permainan unik yang Anda miliki.
                </p>
                <p>
                    Melalui layanan kami, Anda tidak hanya mendapatkan perbaikan raket, namun juga solusi terbaik yang disesuaikan dengan gaya permainan Anda.
                </p>
            </div>
        </div>
        <div class="row justify-content-center fs-5 mt-5 mt-5 text-end" style="overflow: hidden">
            <div class="col-md-4 mt-2" data-aos="fade-left">
                <p>
                <h5 class="fw-bold">Service Raket Badminton</h5>
                Service raket badminton menjadi fondasi krusial bagi seorang pemain dalam mengejar kemenangan. Kami, sebagai penyedia layanan service raket badminton, memahami betapa pentingnya raket yang handal untuk mencapai performa optimal di lapangan. Dengan fokus pada kualitas, ketelitian, dan pengalaman, kami siap mendukung para pemain dalam menghadirkan performa terbaik mereka.
                </p>
                <p>
                    Melalui layanan kami, pemain tenis dapat mempercayakan raket mereka kepada kami dan berkonsentrasi sepenuhnya pada permainan.
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
    <div class="container-fluid d-md-none mt-5">
        <div class="row text-center">
            <div class="col">
                <h2 class="fw-bold bg-dark text-light p-3">ABOUT</h2>
            </div>
        </div>
        <div class="row justify-content-center fs-5 mt-5 mb-2" style="overflow: hidden">
            <div class="col-md-4" data-aos="fade-right">
                <img class="img-fluid" src="{{ asset('img/about-tennis.png') }}" alt="">
            </div>
            <div class="col-md-4 mt-2" data-aos="fade-right">
                <p>
                <h5 class="fw-bold">Service Raket Tennis</h5>
                Dengan staf profesional yang memiliki pengalaman, kami menghadirkan layanan yang berkualitas tinggi dengan keahlian teknis yang tinggi pula. Kami tidak hanya memperbaiki raket; kami merawatnya dengan sepenuh hati agar mencerminkan preferensi Anda serta menyesuaikan diri dengan gaya permainan unik yang Anda miliki.
                </p>
                <p>
                    Melalui layanan kami, Anda tidak hanya mendapatkan perbaikan raket, namun juga solusi terbaik yang disesuaikan dengan gaya permainan Anda.
                </p>
            </div>
        </div>
        <div class="row justify-content-center fs-5 mt-5 mb-2" style="overflow: hidden">

            <div class="col-md-4 mt-2" data-aos="fade-right">
                <img class="img-fluid" src="{{ asset('img/about-badminton.png') }}" alt="">
            </div>
            <div class="col-md-4 mt-2" data-aos="fade-left">
                <p>
                <h5 class="fw-bold">Service Raket Badminton</h5>
                Service raket badminton menjadi fondasi krusial bagi seorang pemain dalam mengejar kemenangan. Kami, sebagai penyedia layanan service raket badminton, memahami betapa pentingnya raket yang handal untuk mencapai performa optimal di lapangan. Dengan fokus pada kualitas, ketelitian, dan pengalaman, kami siap mendukung para pemain dalam menghadirkan performa terbaik mereka.
                </p>
                <p>
                    Melalui layanan kami, pemain tenis dapat mempercayakan raket mereka kepada kami dan berkonsentrasi sepenuhnya pada permainan.
                </p>
            </div>

        </div>
    </div>
</section>
<!-- akhir Tentang mobile-->

<!-- Galeri -->
<section id="gallery" class="mb-4">
    <div class="container-fluid p-3">
        <div class="row mt-5 text-center border-dark">
            <div class="col">
                <h2 class="fw-bold bg-dark text-light p-3">GALLERY</h2>
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
                <img src="{{ asset('images/' . $gallery->image) }}" alt="{{ $gallery->name }}" class="w-100 h-100 img-thumbnail" />
            </div>
            @endforeach
            @endif

        </div>
    </div>
</section>
<!-- Akhir Galeri -->

<!-- footer -->
<footer class="bg-dark text-white" id="contact">
    <div class="container ">
        <div class="row mt-5 mb-4">
            <div class="col-md-4 mt-4 text-center">
                <i class="fa fa-map-marker-alt fa-2x text-danger"></i>
                <p>Address</p>
                <p class="mt-2">Jl. Siswa, Suka Karya, Kec. Kota Baru, Kota Jambi, Jambi 36129</p>
            </div>
            <div class="col-md-4 mt-4 text-center">
                <i class="fa fa-map-marked-alt fa-2x text-success"></i>
                <p>Google Maps</p>
                <p>
                    <iframe class="img-fluid rounded-2 border-success" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.2050077203085!2d103.59568377413476!3d-1.6294272360956805!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e25879d2fe468d5%3A0x955fa1c0d70d3ad0!2sBENGKEL%20SPORT%20KREATIF!5e0!3m2!1sid!2sid!4v1697418929321!5m2!1sid!2sid" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </p>
            </div>
            <div class="col-md-4 mt-4 text-center">
                <i class="fa fa-address-book fa-2x text-primary"></i>
                <p>Contact</p>
                <p class="mt-2">
                    <i class="fa fa-phone fa-lg"></i> +62 852-6652-8221
                </p>
                <p>
                    <i class="fas fa-envelope fa-lg"></i> bskreatif@gmail.com
                </p>
            </div>
        </div>
        <section class="mb-4 text-center">
            <a class="btn btn-primary border-light btn-floating m-1" href="#!" role="button"><i class="fab fa-facebook-f fa-lg"></i></a>
            <a class="btn btn-danger border-light btn-floating m-1" href="#!" role="button"><i class="fab fa-instagram fa-lg"></i></a>
            <a class="btn btn-dark border-light btn-floating m-1" href="#!" role="button"><i class="fab fa-tiktok fa-lg"></i></a>
            <a class="btn btn-success border-light btn-floating m-1" href="#!" role="button"><i class="fab fa-whatsapp fa-lg"></i></a>
        </section>
        <section class="text-center">
            <form action="" class="row d-flex justify-content-center">
                <div class="col-auto">
                    <p class="pt-2">
                        <strong>Sign up for our newsletter</strong>
                    </p>
                </div>
                <div class="col-md-5 col-12">
                    <div class="form-outline form-white mb-4">
                        <input type="email" id="form5Example21" class="form-control" />
                        <label class="form-label" for="form5Example21">Email address</label>
                    </div>
                </div>
                <div class="col-auto">
                    <button type="submit" class="btn btn-outline-light mb-4">Subscribe</button>
                </div>
            </form>
        </section>
        <section class="mb-4 text-center">
            <p>
                Dapatkan layanan perawatan raket berkualitas terbaik untuk raket tenis dan bulutangkis Anda. Kami memberikan layanan profesional untuk memperbaiki, mengganti grip, menyetel, dan membuat raket sesuai preferensimu. Dengan tim ahli kami, raketmu akan selalu siap memberikan performa terbaik di lapangan.
            </p>
        </section>
    </div>
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        <span>Copyright &copy; <img style="width: 85px" class="img-fluid mb-1" src="{{ asset("img/icon/putih.png") }}" alt=""> {{ date('Y') }}</span>
    </div>
</footer>


<!-- akhir footer -->

<!-- modal -->
<div class="modal fade" id="biayaModal" data-bs-backdrop="static" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content">
            <div class="modal-header d-flex justify-content-center">
                <h5 class="modal-title fw-bold" id="exampleModalLabel">DAFTAR BIAYA JASA PERBAIKAN,SERVICE ,PEMASANGAN GRIB DAN SENAR RAKET BADMINTON DAN TENNIS</h5>
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