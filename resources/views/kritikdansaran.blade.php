@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 mt-5 mb-5">
                <div class="card">
                    <div class="card-header">
                        <h4 class="fw-bold text-center card-title">Kirimkan Kritik dan Saran Anda disini</h4>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="mb-3">
                                <input type="text" class="form-control" id="nama" name="nama"
                                    placeholder="Nama lengkap...">
                            </div>
                            <div class="mb-3">
                                <input type="email" class="form-control" id="email" name="email"
                                    placeholder="No hp atau email...">
                            </div>
                            <div class="mb-3">
                                <textarea class="form-control" id="kritik-saran" name="kritik_saran" rows="4" placeholder="Krirtik dan saran..."></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Kirim</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
