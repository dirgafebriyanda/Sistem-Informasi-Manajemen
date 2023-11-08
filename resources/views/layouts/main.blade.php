<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:title" content="Jasa Service Raket Terbaik | Bengkel Sport Kreatif">
    <meta property="og:description"
        content="Jasa layanan profesional untuk perbaikan dan perawatan raket badminton dan tenis. Layanan kustomisasi, ganti grip, dan penyetelan raket. Hubungi kami untuk layanan berkualitas.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.bskreatif.com/jasa-service-raket">
    <meta property="og:image" content="https://www.bskreatif.test/img/gambar/slide1m.jpg">
    <meta name="description"
        content="Jasa profesional untuk perbaikan dan perawatan raket badminton dan tenis. Layanan kami meliputi penyetelan, ganti grip, perbaikan kerusakan, dan kustomisasi raket agar sesuai dengan preferensi Anda. Hubungi kami untuk layanan handal dan berkualitas.">
    <meta name="robots" content="index, follow">
    <meta name="keywords" content="jasa raket, badminton, tenis, perbaikan raket, ganti grip, penyetelan raket">
    <link rel="canonical" href="https://www.bskreatif.com/jasa-service-raket">

    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.png') }}">


    <title>Jasa Service Raket Terbaik | {{ $title }}</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap"
        rel="stylesheet" />
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

    @include('partials.navbar')

    @yield('content')

    <!-- footer -->
    <footer class="bg-dark text-white" id="kontak-kami">
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
                        <iframe class="img-fluid rounded-2 border-success"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.2050077203085!2d103.59568377413476!3d-1.6294272360956805!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e25879d2fe468d5%3A0x955fa1c0d70d3ad0!2sBENGKEL%20SPORT%20KREATIF!5e0!3m2!1sid!2sid!4v1697418929321!5m2!1sid!2sid"
                            allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
                <p>Social Media</p>
                <a class="btn btn-primary border-light btn-floating m-1" href="#!" role="button"><i
                        class="fab fa-facebook-f"></i></a>
                <a class="btn btn-danger border-light btn-floating m-1" href="#!" role="button"><i
                        class="fab fa-instagram"></i></a>
                <a class="btn btn-dark border-light btn-floating m-1" href="#!" role="button"><i
                        class="fab fa-tiktok"></i></a>
                <a class="btn btn-success border-light btn-floating m-1" href="#!" role="button"><i
                        class="fab fa-whatsapp"></i></a>
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
                    Dapatkan layanan perawatan raket berkualitas terbaik untuk raket tenis dan bulutangkis Anda. Kami
                    memberikan layanan profesional untuk memperbaiki, mengganti grip, menyetel, dan membuat raket sesuai
                    preferensimu. Dengan tim ahli kami, raketmu akan selalu siap memberikan performa terbaik di
                    lapangan.
                </p>
            </section>
        </div>
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            <span>Copyright &copy; <img style="width: 85px" class="img-fluid mb-1"
                    src="{{ asset('img/icon/putih.png') }}" alt=""> {{ date('Y') }}</span>
        </div>
    </footer>
    <!-- akhir footer -->

    <button type="button" class="btn btn-danger btn-floating btn-sm" id="btn-back-to-top">
        <i class="fas fa-angle-up"></i>
    </button>

    <a href="https://api.whatsapp.com/send?phone=6285266528221&text=Nama%3A%0ANomor%20Telepon%3A%0AJenis%20Layanan%3A%0ADetail%20Pesanan%3A%0AWaktu%20yang%20diinginkan%3A"
        target="_blank" class="btn text-green btn-sm rounded-circle" id="whatsapp">
        <i class="fab fa-whatsapp text-light fa-2x text-center"></i>
    </a>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>
