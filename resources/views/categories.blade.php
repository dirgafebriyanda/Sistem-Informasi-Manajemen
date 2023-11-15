@extends('layouts.main')

@section('content')
    <h1 class="mb-4 text-center">Post Category</h1>
    <div class="container">
        <div class="row">
            @foreach ($categories as $category)
                <div class="col-md-4 p-2">
                    <a href="/posts?category={{ $category->slug }}">
                        <div class="card bg-dark text-white ">
                            <img src="{{ asset('img/pembalap.jpg') }}" class="card-img " alt="{{ $category->name }}">
                            <div class="card-img-overlay d-flex align-items-center p-0">
                                <h5 class="card-title text-center flex-fill p-3 fs-3 mt-0"
                                    style="background-color: rgba(0,0,0,.7)">{{ $category->name }}</h5>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
