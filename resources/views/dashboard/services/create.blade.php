@extends('dashboard.layouts.main')

@section('dashboard')
    <div class="row justify-content-center">
        <div class="col-md-12 py-4">
            <div class="card shadow-sm">
                <div class="card-header">
                    <a class="text-decoration-none" href="/dashboard"><i class="fas fa-fw fa-tachometer-alt"></i>
                        {{ __('Dashboard') }}</a> / <a class="text-decoration-none"
                        href="/dashboard/services">{{ __('Services List') }}</a>
                    / Create Service
                </div>
                <div class="card-body">
                    <form action="{{ route('services.store') }}" method="post">
                        @csrf
                        <div class="mb-3 row">
                            <div class="col-md-12">
                                <input type="text" placeholder="Service"
                                    class="form-control @error('service') is-invalid @enderror" id="service"
                                    name="service" value="{{ old('service') }}" autofocus>
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
                                    value="{{ old('biaya') }}">
                                @error('biaya')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <button type="submit" class="float-right btn btn-primary btn-sm">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
