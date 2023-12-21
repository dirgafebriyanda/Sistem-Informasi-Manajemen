@extends('dashboard.layouts.main')

@section('dashboard')
    <div class="row justify-content-center">
        <div class="col-md-12 py-4">
            <div class="card shadow-sm">
                <div class="card-header">
                    <a class="text-decoration-none" href="/dashboard"><i class="fas fa-fw fa-tachometer-alt"></i>
                        {{ __('Dashboard') }}</a> / <a class="text-decoration-none"
                        href="/dashboard/services">{{ __('Service List') }}</a>
                    / Edit Service
                </div>
                <div class="card-body">
                    <form action="{{ route('services.update', $service->id) }}" method="post">
                        @csrf
                        @method('PATCH') <!-- Gunakan method PATCH untuk pembaruan -->

                        <div class="mb-3 row">
                            <div class="col-md-12">
                                <input type="text" placeholder="Service"
                                    class="form-control @error('service') is-invalid @enderror" id="service"
                                    name="service" value="{{ $service->service }}" autofocus>
                                @error('service')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <div class="col-md-12">
                                <input type="text" placeholder="Biaya"
                                    class="form-control @error('biaya') is-invalid @enderror" id="biaya" name="biaya"
                                    value="{{ $service->biaya }}">
                                @error('biaya')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <button type="submit" class="float-right btn btn-primary btn-sm">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
