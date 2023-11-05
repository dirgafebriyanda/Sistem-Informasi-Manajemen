@extends('dashboard.layouts.main')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8 mb-4">
        <div class="card shadow-sm">
            <div class="card-header">
                <a class="text-decoration-none" href="/dashboard"><i class="fas fa-fw fa-tachometer-alt"></i>
                    {{ __('Dashboard') }}</a> / <a class="text-decoration-none" href="/dashboard/galleries">{{ __('Gallery List') }}</a>
                / Add Image
            </div>
            <div class="card-body">
                <form action="{{ route('galleries.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3 row">
                        <div class="col-md-12">
                            <input type="text" placeholder="Image Name" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" autofocus>
                            @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <div class="col-md-12">
                            <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" name="image" value="{{ old('image') }}">
                            @error('image')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <button type="submit" class="float-right btn btn-primary btn-sm">Add Image</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
