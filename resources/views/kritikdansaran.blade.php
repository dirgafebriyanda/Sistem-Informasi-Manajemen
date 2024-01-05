@extends('layouts.main')

@section('content')
    <section id="kritik">
        <div class="container mt-5 py-5">
            <div class="row justify-content-center">
                <div class="col-md-6 p-4">
                    <div class="card shadow">

                        <div class="py-3">
                            <h4 class="text-center ">Kritik atau Saran</h4>
                        </div>
                        <div class="card-body">
                            @if (session()->has('success'))
                                <div class="alert alert-success" id="notif" role="alert">
                                    {{ session('success') }}
                                </div>
                                <audio class="d-none" id="audio" controls autoplay>
                                    <source src="{{ asset('sound/notif.wav') }}">
                                </audio>
                            @endif
                            <form method="POST" action="{{ route('saran.store') }}">
                                @csrf
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="nama" name="nama">
                                    <label for="">Nama</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="email" class="form-control" id="email" name="email">
                                    <label for="email">email</label>

                                </div>
                                <div class="mb-3">
                                    <textarea class="form-control" id="kritik-saran" name="komentar" rows="4" placeholder="Komentar"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary w-100">Kirim</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        function hideAlert() {
            $("#notif").slideUp(500,
                function() {
                    $(this).remove();
                });
        }
        setTimeout(hideAlert, 3000);
    </script>
@endsection
