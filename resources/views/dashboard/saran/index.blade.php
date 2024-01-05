@extends('dashboard.layouts.main')

@section('dashboard')
    <div class="row justify-content-center">
        <div class="col-md-12 py-4">
            <div class="card shadow-sm">
                <div class="card-header ">
                    <a class="text-decoration-none" href="/dashboard"><i class="fas fa-fw fa-tachometer-alt"></i>
                        {{ __('Dashboard') }}</a> / Saran List
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
                                    <th scope="col">Nama</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Komentar</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($sarans as $saran)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $saran->nama }}</td>
                                        <td>{{ $saran->email }}</td>
                                        <td>{{ $saran->komentar }}</td>
                                        <td>
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <a title="View" href="/dashboard/saran/{{ $saran->id }}"
                                                        class="btn btn-info btn-sm" title="View"><span
                                                            class="fa fa-eye text-light"></span></a>
                                                </div>
                                                <div class="col-sm-4">
                                                    <form action="/dashboard/saran/{{ $saran->id }}" method="post"
                                                        class="d-inline">
                                                        @method('delete')
                                                        @csrf
                                                        <button title="Delete" class="btn btn-danger btn-sm" title="Delete"
                                                            onclick="return confirm('Are your sure?')"><span
                                                                class="fa fa-trash text-light"></span></button>
                                                    </form>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="container-fluid mt-3">
                    <style>
                        .pagination {
                            display: flex;
                            justify-content: center;
                            flex-wrap: wrap;
                        }
                    </style>
                    <!-- Pagination -->
                    @if ($sarans->hasPages())
                        <div class="d-flex justify-content-end">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination flex-wrap">
                                    {{ $sarans->links() }}
                                </ul>
                            </nav>
                        </div>
                    @endif
                    <!-- End Pagination -->
                </div>
            </div>
        </div>
    </div>
@endsection
