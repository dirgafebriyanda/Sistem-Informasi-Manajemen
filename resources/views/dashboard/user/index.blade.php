@extends('dashboard.layouts.main')

@section('dashboard')
    <div class="row justify-content-center">
        <div class="col-md-12 py-4">
            <div class="card shadow-sm">
                <div class="card-header">
                    <a class="text-decoration-none" href="/dashboard"><i class="fas fa-fw fa-tachometer-alt"></i>
                        {{ __('Dashboard') }}</a> / List Users
                    <a href="/dashboard/users/create" class="btn btn-sm btn-primary mb-3 float-right" title="Create User">
                        <i class="fa fa-plus-square"></i>
                    </a>
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
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr class="bg-dark text-light fw-bold">
                                    <th scope="col">No</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="rounded-circle overflow-hidden"
                                                    style="width: 30px; height: 30px; margin-right: 10px;">
                                                    @if ($user->image)
                                                        <img src="{{ asset('img/user/' . $user->image) }}" alt="User Image"
                                                            class="w-100 h-100 object-cover">
                                                    @else
                                                        <img src="{{ asset('img/undraw_profile.svg') }}" alt="Default Image"
                                                            class="w-100 h-100 object-cover">
                                                    @endif
                                                </div>
                                                <span>{{ $user->name }}</span>
                                            </div>
                                        </td>

                                        <td>{{ $user->email }}</td>
                                        <td>
                                            @if ($user->is_admin == 1)
                                                Admin
                                            @else
                                                User
                                            @endif
                                        </td>
                                        <td>
                                            <div class="row d-flex">
                                                <div class="col-sm-4">
                                                    <a href="/dashboard/users/{{ $user->id }}/edit"
                                                        class="btn btn-sm btn-success" title="Edit"><span
                                                            class="fa fa-edit"></span></a>
                                                </div>
                                                @if ($user->is_admin != 1)
                                                    <div class="col-sm-4">
                                                        <form action="/dashboard/users/{{ $user->id }}" method="post"
                                                            class="d-inline">
                                                            @method('delete')
                                                            @csrf
                                                            <button class="btn btn-sm btn-danger"
                                                                onclick="return confirm('Are you sure?')" title="Delete"
                                                                type="submit">
                                                                <span class="fa fa-trash"></span>
                                                            </button>
                                                        </form>
                                                    </div>
                                                @endif
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
