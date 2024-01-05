@extends('dashboard.layouts.main')

@section('dashboard')
    <div class="container py-4 ">
        <div class="row">
            <div class="col">
                <div class="card" style="max-width: 540px;">
                    @if (session()->has('success'))
                        <div class="alert alert-success" id="notif" role="alert">
                            {{ session('success') }}
                        </div>
                        <audio class="d-none" id="audio" controls autoplay>
                            <source src="{{ asset('sound/notif.wav') }}">
                        </audio>
                    @endif
                    <div class="row g-0">
                        <div class="col-md-4 text-center">
                            @if (auth()->user()->image)
                                <img class="py-2 px-2 rounded-circle img-fluid rounded-start"
                                    src="{{ asset('storage/' . auth()->user()->image) }}">
                            @else
                                <img src="{{ $user->jekel == 'laki-laki' ? asset('img/user/laki-laki.png') : asset('img/user/perempuan.png') }}"
                                    alt="Default Image" class="py-2 px-2 rounded-circle img-fluid rounded-start">
                            @endif
                            <h4 class="card-text text-center">
                                @if (auth()->user()->is_admin == 1)
                                    Admin
                                @else
                                    User
                                @endif
                            </h4>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">{{ auth()->user()->name }}</h5>
                                <p class="card-text">Usename : {{ auth()->user()->username }}</p>
                                <p class="card-text">Jenis Kelamin : {{ auth()->user()->jekel }}</p>
                                <p class="card-text">Email : {{ auth()->user()->email }}</p>
                                <a href="/dashboard/users/{{ $user->id }}/edit"
                                    class="btn btn-sm btn-success fw-bold"><span class="fa fa-edit"></span> Edit
                                    Profile</a>
                                @if (auth()->user()->is_admin != 1)
                                    <form action="/dashboard/users/{{ $user->id }}" method="post" class="d-inline">
                                        @method('delete')
                                        @csrf
                                        <button class="btn p-2 btn-sm btn-danger" onclick="return confirm('Are you sure?')"
                                            title="Delete" type="submit">
                                            <span class="fa fa-trash"> Hapus akun</span>
                                        </button>
                                    </form>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
