@extends('layouts.main')

@section('content')
    <section id="kritik" class="mt-5">
        <div class="container mt-4">
            <div class="row justify-content-center">
                <div class="col-md-6 p-4">
                    <div class="card">
                        <div class="card-header bg-secondary text-light py-3">
                            <h4 class="text-center ">Kritik atau Saran</h4>
                        </div>
                        <div class="card-body">
                            <form class="img-thumbnail border-secondary px-4 py-4 ">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control border-secondary" id="nama"
                                        name="nama">
                                    <label for="">Nama lengkap</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="email" class="form-control border-secondary" id="email"
                                        name="email">
                                    <label for="email">email</label>

                                </div>
                                <div class="mb-3">
                                    <textarea class="form-control border-secondary" id="kritik-saran" name="kritik_saran" rows="4"
                                        placeholder="Komentar"></textarea>
                                </div>
                                <button type="submit" class="btn btn-lg btn-secondary w-100">Kirim <i
                                        class="fas fa-sign-in-alt"></i></button>
                            </form>
                        </div>
                        <div class="card-footer text-center bg-secondary py-2 text-light">
                            <span>Copyright &copy; <img style="width: 83px" class="img-fluid"
                                    src="{{ asset('img/icon/putih.png') }}" alt=""> {{ date('Y') }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
