@extends('layouts.main')

@section('content')
    <div class="container-fluid mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6 bg-light">
                <header>
                    <h1 class="mb-4 mt-3 text-center">Kebijakan Privasi</h1>
                    <p>Terakhir diperbarui: {{ date('d F Y') }}</p>
                </header>

                <section class="mb-4">
                    <p>Selamat datang di <strong>bskreatif.com</strong>!</p>
                    <p>Kami menghargai kepercayaan Anda kepada kami. Artikel berikut ini menjelaskan bagaimana kami
                        mengumpulkan,
                        menggunakan, dan melindungi informasi pribadi Anda. Kami berkomitmen untuk menjaga privasi Anda dan
                        mengamankan
                        informasi yang Anda berikan kepada kami.</p>
                </section>

                <section class="mb-4">
                    <h2>Informasi yang Kami Kumpulkan</h2>
                    <ul>
                        <li>Nama dan informasi kontak, seperti alamat email.</li>
                        <li>Informasi demografis, seperti kode pos, preferensi, dan minat.</li>
                        <li>Data penggunaan dan navigasi web.</li>
                    </ul>
                </section>

                <section class="mb-4">
                    <h2>Penggunaan Informasi</h2>
                    <ul>
                        <li>Menyesuaikan pengalaman pengguna dan konten situs web.</li>
                        <li>Memberikan informasi berkaitan dengan layanan atau produk yang Anda minta.</li>
                        <li>Melakukan analisis untuk meningkatkan kualitas layanan kami.</li>
                    </ul>
                </section>

                <section class="mb-4">
                    <h2>Keamanan Informasi</h2>
                    <p>Kami berkomitmen untuk melindungi informasi pribadi Anda. Kami menggunakan langkah-langkah keamanan
                        fisik,
                        elektronik, dan manajerial untuk melindungi informasi pribadi Anda dari akses yang tidak sah.</p>
                </section>

                <section class="mb-4">
                    <h2>Penggunaan Cookie</h2>
                    <p>Situs web kami dapat menggunakan cookie untuk meningkatkan pengalaman pengguna. Dengan menggunakan
                        situs web
                        kami, Anda setuju dengan penggunaan cookie sesuai dengan kebijakan kami.</p>
                </section>

                <section class="mb-4">
                    <h2>Berbagi Informasi</h2>
                    <p>Kami tidak akan menjual, menyewakan, atau memberikan informasi pribadi Anda kepada pihak ketiga
                        tanpa izin Anda,
                        kecuali jika diwajibkan oleh hukum.</p>
                </section>

                <section class="mb-4">
                    <h2>Google AdSense</h2>
                    <p>Situs web ini menggunakan layanan Google AdSense untuk menampilkan iklan. Google AdSense dapat
                        menggunakan
                        cookie untuk menyajikan iklan yang lebih relevan. Informasi yang dikumpulkan oleh Google AdSense,
                        termasuk
                        alamat IP Anda, dapat dikirim ke Google dan disimpan oleh mereka.</p>
                </section>

                <section class="mb-4">
                    <h2>Persetujuan</h2>
                    <p>Dengan menggunakan situs web kami, Anda menyetujui pengumpulan dan penggunaan informasi sebagaimana
                        dijelaskan
                        dalam kebijakan privasi ini.</p>
                </section>

                <section class="mb-4">
                    <h2>Perubahan Kebijakan Privasi</h2>
                    <p>Kami dapat memperbarui kebijakan privasi ini dari waktu ke waktu. Perubahan akan segera berlaku
                        setelah
                        diperbarui di halaman ini.</p>
                </section>

                <footer>
                    <p class="mt-4">Terima kasih atas kepercayaan Anda kepada <strong>bskreatif.com</strong>!</p>
                    <p>Terakhir diperbarui: {{ date('d F Y') }}</p>
                </footer>
            </div>
        </div>
    </div>
@endsection
