@extends('dashboard.layouts.main')

@section('dashboard')
    <div class="row justify-content-center">
        <div class="col-md-12 py-4">
            <div class="card shadow-sm">
                <div class="card-header">
                    <a class="text-decoration-none" href="/dashboard"><i class="fas fa-fw fa-tachometer-alt"></i>
                        {{ __('Dashboard') }}</a> / Galleries List
                    <a href="{{ route('galleries.create') }}" class="btn btn-sm btn-primary mb-3 float-right" title="Add"><i
                            class="fa fa-plus-square"></i></a>
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
                                    <th scope="col">Gambar</th>
                                    <th scope="col">Keterangan</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($galleries as $gallery)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>
                                            <img src="{{ asset('storage/' . $gallery->image) }}" alt="Gallery Image"
                                                style="max-width: 100px; max-height: 100px;">
                                        </td>
                                        <td>{{ $gallery->name }}</td>
                                        <td>
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <a href="{{ route('galleries.edit', $gallery->id) }}"
                                                        class="btn btn-sm btn-warning" title="Edit"><span
                                                            class="fa fa-edit"></span></a>
                                                </div>
                                                <div class="col-sm-4">
                                                    <form action="{{ route('galleries.destroy', $gallery->id) }}"
                                                        method="post" class="d-inline">
                                                        @method('delete')
                                                        @csrf
                                                        <button class="btn btn-sm btn-danger"
                                                            onclick="return confirm('Are you sure?')" title="Delete"
                                                            type="submit">
                                                            <span class="fa fa-trash"></span>
                                                        </button>
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
            </div>
        </div>
    </div>
@endsection
