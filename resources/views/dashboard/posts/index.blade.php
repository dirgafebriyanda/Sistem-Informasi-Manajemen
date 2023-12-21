@extends('dashboard.layouts.main')

@section('dashboard')
    <div class="row justify-content-center">
        <div class="col-md-12 py-4">
            <div class="card shadow-sm">
                <div class="card-header ">
                    <a class="text-decoration-none" href="/dashboard"><i class="fas fa-fw fa-tachometer-alt"></i>
                        {{ __('Dashboard') }}</a> / Posts List
                    <a class="btn btn-sm btn-primary d-inline float-right" href="/dashboard/posts/create" title="Add"><i
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
                                    <th scope="col">Judul</th>
                                    <th scope="col">Kategori</th>
                                    <th scope="col">Status</th>
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
                                            @if ($post->published_at)
                                                Publish
                                            @else
                                                Draft
                                            @endif
                                        </td>
                                        <td>
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <a title="View" href="/dashboard/posts/{{ $post->slug }}"
                                                        class="btn btn-info btn-sm" title="View"><span
                                                            class="fa fa-eye text-light"></span></a>
                                                </div>
                                                <div class="col-sm-4">
                                                    <a title="Edit" href="/dashboard/posts/{{ $post->slug }}/edit"
                                                        class="btn btn-warning btn-sm" title="Edit"><span
                                                            class="fa fa-edit text-light"></span></a>
                                                </div>
                                                <div class="col-sm-4">
                                                    <form action="/dashboard/posts/{{ $post->slug }}" method="post"
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
                    @if ($posts->hasPages())
                        <div class="d-flex justify-content-end">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination flex-wrap">
                                    {{ $posts->links() }}
                                </ul>
                            </nav>
                        </div>
                    @endif
                    <!-- End Pagination -->
                </div>

            </div>
        </div>
    @endsection
