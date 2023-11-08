@extends('layouts.main')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <h2 class="fw-bold text-center">Kirimkan Kritik dan Saran Anda disini.</h2>
            <div class="col-md-8 mt-5 mb-5">
                <div class="card shadow">
                    <div class="card-body">
                        <form>
                            <div class="mb-3">
                                <input type="text" class="form-control" id="nama" name="nama"
                                    placeholder="isi nama anda...">
                            </div>
                            <div class="mb-3">
                                <input type="email" class="form-control" id="email" name="email"
                                    placeholder="isi no telp atau email anda...">
                            </div>
                            <div class="mb-3">
                                <textarea class="form-control" id="kritik-saran" name="kritik_saran" rows="4"
                                    placeholder="isi krirtik dan saran anda,,,"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Kirim</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
