@extends('dashboard.layouts.main')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8 mb-4">
        <div class="card shadow-sm">
            <div class="card-header">
                <a class="text-decoration-none" href="/dashboard"><i class="fas fa-fw fa-tachometer-alt"></i>
                    {{ __('Dashboard') }}</a> / Services List
                <a href="/dashboard/services/create" class="btn btn-sm btn-primary mb-3 float-right" title="Add"><i class="fa fa-plus-square"></i></a>
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
                                <th scope="col">Service</th>
                                <th scope="col">Biaya</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($services as $service)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $service->service }}</td>
                                <td>Rp. {{ $service->biaya }}</td>
                                <td>
                                    <a href="/dashboard/services/{{ $service->id }}/edit" class="btn btn-sm btn-success" title="Edit"><span class="fa fa-edit"></span></a>
                                    <form action="/dashboard/services/{{ $service->id }}" method="post" class="d-inline">
                                        @method('delete')
                                        @csrf
                                        <button class="btn btn-sm btn-danger border-0" onclick="return confirm('Are you sure?')" title="Delete" type="submit">
                                            <span class="fa fa-trash"></span>
                                        </button>
                                    </form>
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