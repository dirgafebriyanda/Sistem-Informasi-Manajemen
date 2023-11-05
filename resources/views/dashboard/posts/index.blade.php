@extends('dashboard.layouts.main')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8 mb-4">
        <div class="card shadow-sm">
            <div class="card-header ">
                <a class="text-decoration-none" href="/dashboard"><i class="fas fa-fw fa-tachometer-alt"></i>
                    {{ __('Dashboard') }}</a> / Post List
                <a class="btn btn-sm btn-primary d-inline float-right" href="/dashboard/posts/create" title="Add"><i class="fa fa-plus-square"></i></a>
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
                                <th scope="col">Title</th>
                                <th scope="col">Category</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($posts as $post)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $post->title }}</td>
                                <td>{{ $post->category->name }}</td>
                                <td>
                                    <a title="View" href="/dashboard/posts/{{ $post->slug }}" class="btn btn-info btn-sm" title="View"><span class="fa fa-eye text-light"></span></a>
                                    <a title="Edit" href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning btn-sm" title="Edit"><span class="fa fa-edit text-light"></span></a>
                                    <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                                        @method('delete')
                                        @csrf
                                        <button title="Delete" class="btn btn-danger border-0 btn-sm" title="Delete" onclick="return confirm('Are your sure?')"><span class="fa fa-trash text-light"></span></button>
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