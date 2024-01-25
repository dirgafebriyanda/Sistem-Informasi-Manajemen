@extends('layouts.main')

@section('content')
    <style>
        .carousel-caption {
            margin-bottom: 13rem;
        }

        @media (max-width: 768px) {
            .carousel-caption {
                margin-bottom: 6.5rem;
            }
        }
    </style>
    <div id="carouselExampleCaptions" class="carousel slide mt-5">
        <div id="carouselExample" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active bg-dark">
                    <img src="{{ asset('img/tentang/tentang 1.jpeg') }}" class="d-block w-100" alt="..."
                        style="opacity: 40%">
                    <div class="carousel-caption">
                        <h1 class="fw-bold">Mengenal Bengkel Sport Kreatif</h1>
                        <br>
                        <p class="h4 fw-bold">Selamat datang di Bengkel Sport Kreatif, tempat di mana keahlian
                            bertemu
                            kreativitas. Kami adalah
                            ahli perbaikan raket tenis dan bulu tangkis dengan fokus pada memberikan pelayanan yang luar
                            biasa dan menjaga keunggulan setiap raket.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <img src="{{ asset('img/wave/wave-hero.png') }}" class="img-fluid" alt="">

    <!-- Di dalam HTML -->
    <section id="tentang" class="mt-4">
        <div class="container-fluid  py-3">
            <h1 class="fw-bold">Berdiri sejak 2008</h1>
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <p class="lead">Kami dengan bangga menjadi mitra
                        setia para pecinta tenis dan bulu tangkis dalam perjalanan mereka mencapai performa terbaik.
                        Bengkel Sport Kreatif berawal dari hasrat mendalam terhadap olahraga raket. Didirikan pada tahun
                        2008 oleh dua penggemar tenis dan bulu tangkis, kami memulai perjalanan kami dengan satu tujuan
                        sederhana: memberikan layanan perbaikan dan peningkatan raket yang berkualitas tinggi.
                    </p>
                </div>
            </div>

            <div class="row justify-content-center mt-4">
                <div class="col-md-6">
                    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner  card-home">
                            <div class="carousel-item active">
                                <img src="{{ asset('img/tentang/tennis 1.jpeg') }}" class="d-block w-100 img-thumbnail"
                                    alt="Slide 1">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('img/tentang/tennis 2.jpeg') }}" class="d-block w-100 img-thumbnail"
                                    alt="Slide 2">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('img/tentang/tennis 3.jpeg') }}" class="d-block w-100 img-thumbnail"
                                    alt="Slide 3">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('img/tentang/tennis 4.jpeg') }}" class="d-block w-100 img-thumbnail"
                                    alt="Slide 4">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <h2 class="fw-bold">Memeperbaiki Raket Tennis</h2>
                    <div id="process-description">
                        <p>Setiap raket tenis di Bengkel Sport Kreatif menjalani beberapa tahapan kritis untuk memastikan
                            perawatan terbaik. Inilah tahapan umumnya:</p>

                        <ol>
                            <li><strong>Pemeriksaan Awal:</strong> Melibatkan pemeriksaan menyeluruh terhadap kondisi raket,
                                termasuk senar, grip, dan frame.</li>
                            <li><strong>Identifikasi Masalah:</strong> Mendeteksi masalah atau kerusakan yang mungkin
                                terjadi pada raket.</li>
                            <li><strong>Perbaikan Kerusakan:</strong> Melibatkan perbaikan pada bagian yang rusak, seperti
                                retak pada frame atau putusnya senar.</li>
                            <li><strong>Penyetelan Tension Senar:</strong> Menyesuaikan ketegangan senar sesuai dengan
                                preferensi pemain untuk memengaruhi kontrol dan daya pukulan.</li>
                            <li><strong>Pengecatan (Opsional):</strong> Jika diinginkan, melakukan pengecatan untuk aspek
                                estetika dan memberikan sentuhan personal pada raket.</li>
                            <li><strong>Pengujian:</strong> Sebelum dikembalikan kepada pemain, melakukan pengujian untuk
                                memastikan kualitas dan performa raket.</li>
                        </ol>

                        <p>Dengan proses ini, kami berkomitmen untuk memberikan pengalaman perbaikan raket yang tidak hanya
                            berkualitas tetapi juga memperhatikan setiap detailnya.</p>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center mt-3">
                <div class="col-md-6 d-none d-md-block">
                    <h2 class="fw-bold">Memeperbaiki Raket Badminton</h2>
                    <div id="process-description">
                        <p>Kami di Bengkel Sport Kreatif memahami betapa pentingnya setiap raket badminton bagi pemain. Oleh
                            karena itu, kami memberikan perhatian khusus dalam setiap tahapan perbaikan. Berikut adalah
                            proses kami:</p>

                        <ol>
                            <li><strong>Pemeriksaan Awal:</strong> Kami melakukan pemeriksaan menyeluruh untuk
                                mengidentifikasi kondisi raket, termasuk senar, grip, dan frame.</li>
                            <li><strong>Diagnosis Masalah:</strong> Setiap raket dianalisis dengan cermat untuk menemukan
                                masalah atau kerusakan yang perlu diperbaiki.</li>
                            <li><strong>Perbaikan:</strong> Kami melakukan perbaikan yang spesifik sesuai dengan
                                karakteristik permainan dan kebutuhan individual pemilik raket badminton.</li>
                            <li><strong>Penyetelan Tension Senar:</strong> Ketegangan senar disesuaikan dengan hati-hati,
                                mempertimbangkan preferensi pemain terkait kontrol dan kekuatan pukulan.</li>
                            <li><strong>Pengecatan (Opsional):</strong> Untuk memberikan sentuhan personal, kami menyediakan
                                opsi pengecatan dengan desain yang sesuai dengan gaya permainan masing-masing pemilik raket.
                            </li>
                            <li><strong>Pengujian:</strong> Sebelum pengembalian, setiap raket diuji untuk memastikan
                                kualitas dan performa yang optimal di lapangan.</li>
                        </ol>

                        <p>Dengan peduli pada setiap detail, kami berkomitmen memberikan pengalaman perbaikan raket
                            badminton yang berkualitas dan sesuai dengan keinginan pemainnya.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner  card-home">
                            <div class="carousel-item active">
                                <img src="{{ asset('img/tentang/badminton 1.jpeg') }}" class="d-block w-100 img-thumbnail"
                                    alt="Slide 1">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('img/tentang/badminton 2.jpeg') }}" class="d-block w-100 img-thumbnail"
                                    alt="Slide 2">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('img/tentang/badminton 3.jpeg') }}" class="d-block w-100 img-thumbnail"
                                    alt="Slide 3">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('img/tentang/badminton 4.jpeg') }}" class="d-block w-100 img-thumbnail"
                                    alt="Slide 4">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 d-md-none d-block">
                    <h2 class="fw-bold">Memeperbaiki Raket Badminton</h2>
                    <div id="process-description">
                        <p>Kami di Bengkel Sport Kreatif memahami betapa pentingnya setiap raket badminton bagi pemain. Oleh
                            karena itu, kami memberikan perhatian khusus dalam setiap tahapan perbaikan. Berikut adalah
                            proses kami:</p>

                        <ol>
                            <li><strong>Pemeriksaan Awal:</strong> Kami melakukan pemeriksaan menyeluruh untuk
                                mengidentifikasi kondisi raket, termasuk senar, grip, dan frame.</li>
                            <li><strong>Diagnosis Masalah:</strong> Setiap raket dianalisis dengan cermat untuk menemukan
                                masalah atau kerusakan yang perlu diperbaiki.</li>
                            <li><strong>Perbaikan:</strong> Kami melakukan perbaikan yang spesifik sesuai dengan
                                karakteristik permainan dan kebutuhan individual pemilik raket badminton.</li>
                            <li><strong>Penyetelan Tension Senar:</strong> Ketegangan senar disesuaikan dengan hati-hati,
                                mempertimbangkan preferensi pemain terkait kontrol dan kekuatan pukulan.</li>
                            <li><strong>Pengecatan (Opsional):</strong> Untuk memberikan sentuhan personal, kami menyediakan
                                opsi pengecatan dengan desain yang sesuai dengan gaya permainan masing-masing pemilik raket.
                            </li>
                            <li><strong>Pengujian:</strong> Sebelum pengembalian, setiap raket diuji untuk memastikan
                                kualitas dan performa yang optimal di lapangan.</li>
                        </ol>

                        <p>Dengan peduli pada setiap detail, kami berkomitmen memberikan pengalaman perbaikan raket
                            badminton yang berkualitas dan sesuai dengan keinginan pemainnya.</p>
                    </div>
                </div>
            </div>
        </div>
        <img src="{{ asset('img/wave/wave-top.png') }}" class="img-fluid" alt="">

    </section>
@endsection
