<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="id-ID">

<head>
    <meta name="google-site-verification" content="WKij0qlmTeTVDvFcp2-2NE9jQMPhnX4CRjiCvjTMsyI" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5, viewport-fit=cover">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <meta name="publisher" content="BSKreatif">
    <meta name="distribution" content="global">
    <meta name="webcrawlers" content="all" />
    <meta name="rating" content="general" />
    <meta name="spiders" content="all">
    <meta name="copyright" content="BSKreatif">
    <meta name="robots" content="index, follow">
    <meta name="description"
        content="BSKreatif. bskreatif. bengkel sport kreatif. Raket patah. Raket tenis. Raket bulutangkis. Ganti senar. Ganti senar raket tenis. Ganti senar raket bulutangkis. service raket patah tanpa klem. Raket. Bulutangkis. Badmiton. Tennis. Tenis. Stel senar raket. Tempat service raket tenis terbaik. Tempat service raket bulutangkis terbaik. Melayani ke seluruh Indonesia.">
    <meta name="googlebot" content="index, follow" />
    <meta name="bingbot" content="index, follow" />
    <meta property="og:locale" content="id_ID" />
    <meta property="og:description" content="" />
    <meta property="og:title" content="Bengkel Sport Kreatif | Jasa Memeperbaiki Raket">
    <meta property="og:site_name" content="Bskreatif" />
    <meta property="og:description" content="">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.bskreatif.com/">
    <meta property="og:image" content="https://www.bskreatif.test/img/gambar/slide1m.jpg">
    <link rel="canonical" href="https://www.bskreatif.com/">
    <link rel="icon" type="image/png" sizes="228x228" href="{{ asset('favicon.png') }}">
    <title>{{ $title }} | Jasa Memeperbaiki Raket</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap"
        rel="stylesheet" />
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/hamburgers.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/aos.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/hover.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">


</head>

<body>
    @include('partials.navbar')

    @yield('content')

    @if (!request()->is('login') && !request()->is('kritik-dan-saran'))
        @include('partials.footer')
    @endif

    @if (!request()->is('login') && !request()->is('kritik-dan-saran'))
        <button type="button" class="btn btn-dark btn-sm" id="btn-back-to-top">
            <i class="fas fa-angle-up"></i>
        </button>

        {{-- <a href="https://api.whatsapp.com/send?phone=6285266528221&text=Nama%3A%0ANomor%20Telepon%3A%0AJenis%20Layanan%3A%0ADetail%20Pesanan%3A%0AWaktu%20yang%20diinginkan%3A"
            target="_blank" class="btn text-green btn-sm rounded-circle" id="whatsapp">
            <i class="fab fa-whatsapp text-light fa-2x text-center"></i>
        </a> --}}
    @endif
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="{{ asset('js/aos.js') }}"></script>
    <script>
        AOS.init({
            once: true,
            duration: 2000,
        });
    </script>
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".owl-carousel").owlCarousel({
                loop: true,
                margin: 10,
                responsiveClass: true,
                autoplay: true, // Enable autoplay
                autoplayTimeout: 5000, // Set autoplay interval in milliseconds (e.g., 5000 = 5 seconds)
                responsive: {
                    0: {
                        items: 1,
                        nav: true
                    },
                    600: {
                        items: 3,
                        nav: false
                    },
                    1000: {
                        items: 3,
                        nav: true,
                        loop: false
                    }
                }
            });
        });
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var scrollableColumn = document.getElementById("scrollableCol");
            var footer = document.getElementById(
                "kontak-kami"); // Ganti "kontak-kami" dengan ID atau kelas footer Anda

            function checkScroll() {
                var scrollHeight = window.pageYOffset || document.documentElement.scrollTop;
                var windowHeight = window.innerHeight;
                var documentHeight = document.documentElement.scrollHeight;

                var footerTop = footer.offsetTop;

                if (scrollHeight + windowHeight >= footerTop) {
                    scrollableColumn.style.position = "absolute";
                    scrollableColumn.style.top = (footerTop - scrollableColumn.offsetHeight) + "px";
                } else {
                    scrollableColumn.style.position = "fixed";
                    scrollableColumn.style.top = "0";
                }
            }

            window.addEventListener("scroll", checkScroll);
            window.addEventListener("resize", checkScroll);
        });
    </script>

</body>

</html>
