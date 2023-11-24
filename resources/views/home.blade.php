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
                <div class="carousel-caption carousel-caption-left shadow">
                    <h1 class="fw-bold caption">BENGKEL <span class="text-warning flip-horizontal">SPORT</span>
                        KREATIF</h1>
                    <p class="persuasif fw-bold">JASA SERVIS RAKET BULUTANGKIS DAN TENNIS</p>
                    <p class="fw-bold"><span class="text-warning">Percayakan Raketmu pada Kami : </span><br>Dengan harga
                        yang terjangkau, anda tetap puas dengan hasilnya. Tunggu apa lagi, buruan !!!</p>
                    <a href="#" data-bs-toggle="modal" data-bs-target="#formPemesanan"
                        class="btn btn-warning btn-custome text-light fw-bold mt-3">Pesan Sekarang</a>
                    <a href="https://wa.me/6285266528221?text=Saya%20ingin%20konsultasi%20tentang..."
                        class="btn btn-danger btn-custome text-light fw-bold mt-3">Konsultasi</a>

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
    <div class="container-fluid my-4 text-center">
        <h2 class="fw-bold text-center" data-aos="slide-down">Alasan Mengapa Anda Harus Memilih Kami?</h2>

        <div class="row mt-4" style="overflow: hidden">
            <div class="col-lg-4 mb-4" data-aos="flip-left">
                <div class="card shadow bg-dark text-light">
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
            <div class="col-lg-4 mb-4" data-aos="flip-left">
                <div class="card shadow bg-dark text-light">
                    <div class="card-body">
                        <i class="fas fa-award fa-3x mb-3"></i>
                        <h5 class="card-title">Kualitas Unggul</h5>
                        <p class="card-text">Produk atau layanan kami selalu berfokus pada kualitas tertinggi.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 mb-4" data-aos="flip-left">
                <div class="card shadow bg-dark text-light">
                    <div class="card-body">
                        <i class="fas fa-lightbulb fa-3x mb-3"></i>
                        <h5 class="card-title">Inovasi Terbaru</h5>
                        <p class="card-text">Kami terus berinovasi untuk memberikan solusi terbaik bagi kebutuhan Anda.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 mb-4" data-aos="flip-left">
                <div class="card shadow bg-dark text-light">
                    <div class="card-body">
                        <i class="fas fa-users fa-3x mb-3"></i>
                        <h5 class="card-title">Tim Profesional</h5>
                        <p class="card-text">Tim kami terdiri dari para profesional yang berpengalaman dalam bidangnya.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 mb-4" data-aos="flip-left">
                <div class="card shadow bg-dark text-light">
                    <div class="card-body">
                        <i class="fas fa-hand-holding-heart fa-3x mb-3"></i>
                        <h5 class="card-title">Kemudahan Penggunaan</h5>
                        <p class="card-text">Produk atau layanan kami dirancang untuk kenyamanan dan kemudahan penggunaan.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 mb-4" data-aos="flip-left">
                <div class="card shadow bg-dark text-light">
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
    <!-- akhir alasan -->

    <!-- layanan -->
    <section id="layanan">
        <div class="container-fluid">
            <div class="row  justify-content-center">
                <div class="col" data-aos="slide-down">
                    <h2 class="fw-bold text-center">Layanan apa saja yang kami berikan?</h2>
                </div>
            </div>
            <div class="row mt-3 justify-content-center fs-5" style="overflow: hidden">
                <div class="col-md-4 mb-4" data-aos="flip-right">
                    <div class="card shadow bg-dark text-light">
                        <div class="card-body text-center">
                            <i class="fas fa-leaf fa-2x mb-3"></i> <!-- Ikon daun dari Font Awesome -->
                            <h5 class="card-title fw-bold">Menambah Berat Daun</h5>
                            <p class="card-text">Layanan menambah berat daun raket bulutangkis & tenis untuk
                                meningkatkan
                                performa pukulan.</p>
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

                <div class="col-md-4 mb-4" data-aos="flip-right">
                    <div class="card shadow bg-dark text-light">
                        <div class="card-body text-center">
                            <i class="fas fa-stroopwafel fa-2x mb-3"></i> <!-- Ikon reset dari Font Awesome -->
                            <h5 class="card-title fw-bold">Ganti atau Stel Ulang Senar</h5>
                            <p class="card-text">Layanan penggantian atau penyetelan ulang senar bulutangkis & tenis
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

                <div class="col-md-4 mb-4" data-aos="flip-right">
                    <div class="card shadow bg-dark text-light">
                        <div class="card-body text-center">
                            <i class="fas fa-low-vision fa-2x mb-3"></i> <!-- Ikon mata ayam dari Font Awesome -->
                            <h5 class="card-title fw-bold">Ganti Mata Ayam</h5>
                            <p class="card-text">Layanan penggantian mata ayam pada senar raket bulutangkis & tenis.
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
                <div class="col-md-4 mb-4" data-aos="flip-right">
                    <div class="card shadow bg-dark text-light">
                        <div class="card-body text-center">
                            <i class="fas fa-tools fa-2x mb-3"></i> <!-- Ikon alat dari Font Awesome -->
                            <h5 class="card-title fw-bold">Service Patah Tanpa Klem</h5>
                            <p class="card-text">Layanan perbaikan raket bulutangkis & tenis yang patah tanpa klem.
                            </p>
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

                <div class="col-md-4 mb-4" data-aos="flip-right">
                    <div class="card shadow bg-dark text-light">
                        <div class="card-body text-center">
                            <i class="fas fa-grip-lines-vertical fa-2x mb-3"></i> <!-- Ikon grip dari Font Awesome -->
                            <h5 class="card-title fw-bold">Ganti atau Stel Grip</h5>
                            <p class="card-text">Layanan penggantian atau penyetelan ulang grip raket bulutangkis &
                                tenis.</p>
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
                <div class="col-md-4 mb-4" data-aos="flip-right">
                    <div class="card shadow bg-dark text-light">
                        <div class="card-body text-center">
                            <i class="fas fa-ring fa-2x mb-3"></i> <!-- Ikon grip dari Font Awesome -->
                            <h5 class="card-title fw-bold">Ganti Tutup Grip</h5>
                            <p class="card-text">Layanan penggantian tutup grip raket bulutangkis & tenis.</p>
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
    </section>
    <!-- akhir layanan -->

    <!-- Galeri -->
    <section id="gallery" class="mb-4">
        <div class="container-fluid">
            <div class="row mt-4 text-center">
                <div class="col" data-aos="slide-down">
                    <h2 class="fw-bold">Raket sperti apa saja yang bisa di perbaiki?</h2>
                    <h3 class="fw-bold text-center">Semua jenis raket bulutangkis dan tenis.</h3>
                </div>
            </div>
            <div class="row mt-4 fs-5 justify-content-center" style="overflow: hidden">
                <div class="col-md-4 mb-4" data-aos="zoom-in-down">
                    <img src="{{ asset('img/1.png') }}" alt="Gambar Default"
                        class="w-100 h-100 img-thumbnail bg-dark shadow" />
                </div>
                <div class="col-md-4 mb-4" data-aos="zoom-in-down">
                    <img src="{{ asset('img/2.png') }}" alt="Gambar Default"
                        class="w-100 h-100 img-thumbnail bg-dark shadow" />
                </div>
                <div class="col-md-4 mb-4" data-aos="zoom-in-down">
                    <img src="{{ asset('img/3.png') }}" alt="Gambar Default"
                        class="w-100 h-100 img-thumbnail bg-dark shadow" />
                </div>
                <div class="col-md-4 mb-4" data-aos="zoom-in-down">
                    <img src="{{ asset('img/4.png') }}" alt="Gambar Default"
                        class="w-100 h-100 img-thumbnail bg-dark shadow" />
                </div>
                <div class="col-md-4 mb-4" data-aos="zoom-in-down">
                    <img src="{{ asset('img/5.png') }}" alt="Gambar Default"
                        class="w-100 h-100 img-thumbnail bg-dark shadow" />
                </div>
            </div>
        </div>
    </section>
    <!-- Akhir Galeri -->

    <!-- Testimoni -->
    <section id="testimoni" class="mb-4">
        <div class="container-fluid">
            <div class="row mt-3 text-center">
                <div class="col" data-aos="slide-down">
                    <h2 class="fw-bold">Apa kata mereka yang sudah menggunakan jasa kami?</h2>
                </div>
            </div>
            <div class="row mt-4" style="overflow: hidden">
                <div class="col-lg-4 mb-4" data-aos="slide-up">
                    <div class="card shadow bg-dark text-light">
                        <div class="card-body">
                            <p class="fw-bold"><i class="fas fa-user-circle fa-lg"></i> Busyra Sidi</p>
                            <p class="card-text">Pelayanan cepat dan sangat memuaskan! Saya sangat puas dengan
                                hasilnya.</p>
                            <span class="text-warning">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4" data-aos="slide-up">
                    <div class="card shadow bg-dark text-light">
                        <div class="card-body">
                            <p class="fw-bold"><i class="fas fa-user-circle fa-lg"></i> M. Iswan Achir</p>
                            <p class="card-text">Proses perbaikan cepat dan tanpa masalah. Saya puas sekali, Terima kasih!
                            </p>
                            <span class="text-warning">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4" data-aos="slide-up">
                    <div class="card shadow bg-dark text-light">
                        <div class="card-body">
                            <p class="fw-bold"><i class="fas fa-user-circle fa-lg"></i> Musa Harahap</p>
                            <p class="card-text">Hasil perbaikan yang luar biasa. Saya sangat puas sekali, Terima kasih!
                            </p>
                            <span class="text-warning">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- Akhir Testimoni -->

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
                    <button type="button" class="btn btn-sm btn-dark" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-sm btn-success" onclick="kirimPesan()">Kirim</button>
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
@endsection
