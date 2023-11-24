@extends('layouts.main')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center mt-4" style="overflow: hidden">
            <div class="col-md-4" data-aos="fade-right">
                <img class="img-fluid img-thumbnail" src="{{ asset('img/about-tennis.png') }}" alt="">
            </div>
            <div class="col-md-4" data-aos="fade-right">

                <h5 class="fw-bold">Service Raket Tennis</h5>
                <p>
                    Dengan staf profesional yang memiliki pengalaman, kami menghadirkan layanan yang berkualitas tinggi
                    dengan keahlian teknis yang tinggi pula. Kami tidak hanya memperbaiki raket; kami merawatnya dengan
                    sepenuh hati agar mencerminkan preferensi Anda serta menyesuaikan diri dengan gaya permainan unik
                    yang
                    Anda miliki.
                </p>
                <p>
                    Melalui layanan kami, Anda tidak hanya mendapatkan perbaikan raket, namun juga solusi terbaik yang
                    disesuaikan dengan gaya permainan Anda.
                </p>
            </div>
        </div>
        <div class="row justify-content-center mt-4" style="overflow: hidden">
            <div class="col-md-4" data-aos="fade-right">
                <img class="img-fluid img-thumbnail" src="{{ asset('img/about-badminton.png') }}" alt="">
            </div>
            <div class="col-md-4" data-aos="fade-left">
                <h5 class="fw-bold">Service Raket Badminton</h5>
                <p>
                    Service raket badminton menjadi fondasi krusial bagi seorang pemain dalam mengejar kemenangan. Kami,
                    sebagai penyedia layanan service raket badminton, memahami betapa pentingnya raket yang handal untuk
                    mencapai performa optimal di lapangan. Dengan fokus pada kualitas, ketelitian, dan pengalaman, kami
                    siap mendukung para pemain dalam menghadirkan performa terbaik mereka.
                </p>
                <p>
                    Melalui layanan kami, pemain tenis dapat mempercayakan raket mereka kepada kami dan berkonsentrasi
                    sepenuhnya pada permainan.
                </p>
            </div>
        </div>
    </div>
@endsection
