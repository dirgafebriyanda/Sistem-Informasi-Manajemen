@extends('dashboard.layouts.main')

@section('dashboard')
    <div class="container py-4 d-flex justify-content-center">
        <div class="row">
            <div class="col">
                <div class="card" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            @if (auth()->user()->image)
                                <img class="py-2 px-2 rounded-circle img-fluid rounded-start"
                                    src="{{ asset('img/user/' . auth()->user()->image) }}">
                            @else
                                <img class="py-2 px-2 rounded-circle img-fluid rounded-start"
                                    src="{{ asset('img/undraw_profile.svg') }}">
                            @endif
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">{{ auth()->user()->name }}</h5>
                                <p class="card-text"></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
