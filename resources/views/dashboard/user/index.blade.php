@extends('dashboard.layouts.main')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12 mb-4 mt-5">
            <div class="card shadow-sm">
                <div class="card-header">
                    <a class="text-decoration-none" href="/dashboard"><i class="fas fa-fw fa-tachometer-alt"></i>
                        {{ __('Dashboard') }}</a> / List User
                    <a href="/dashboard/users/create" class="btn btn-sm btn-primary mb-3 float-right" title="Add"><i
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
                                    <th scope="col">Nama</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>
                                            <div class="row d-flex">
                                                <div class="col-sm-4">
                                                    <a href="/dashboard/services/{{ $user->id }}/edit"
                                                        class="btn btn-sm btn-success" title="Edit"><span
                                                            class="fa fa-edit"></span></a>
                                                </div>
                                                <div class="col-sm-4">
                                                    <form action="/dashboard/services/{{ $user->id }}" method="post"
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
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
                <div class="d-flex card-footer justify-content-center ">
                    <!-- Desktop Pagination -->
                    <nav class="desktop-pagination d-none d-sm-block" aria-label="Page navigation">
                        <ul class="pagination justify-content-center">
                            <li class="page-item">
                                <a class="page-link" href="{{ $users->previousPageUrl() }}" aria-label="Previous">
                                    <span aria-hidden="true">&laquo; Previous</span>
                                </a>
                            </li>
                            {{ $users->links() }}
                            <li class="page-item">
                                <a class="page-link" href="{{ $users->nextPageUrl() }}" aria-label="Next">
                                    <span aria-hidden="true">Next &raquo;</span>
                                </a>
                            </li>
                        </ul>
                    </nav>

                    <!-- Mobile Pagination -->
                    <div class="mobile-pagination d-sm-none d-flex flex-row">
                        <label for="mobilePageSelect" class="mr-2">Page:</label>
                        <select id="mobilePageSelect" class="form-control" onchange="changePage(this.value)">
                            @for ($i = 1; $i <= $users->lastPage(); $i++)
                                <option value="{{ $users->url($i) }}" @if ($users->currentPage() == $i) selected @endif>
                                    {{ $i }}</option>
                            @endfor
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        // Tambahkan fungsi ini jika Anda ingin meng-handle perubahan halaman di versi mobile
        function changePage(url) {
            window.location.href = url;
        }
    </script>
@endsection
