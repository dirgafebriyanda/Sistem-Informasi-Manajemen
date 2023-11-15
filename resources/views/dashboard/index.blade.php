@extends('dashboard.layouts.main')

@section('content')
    <div class="row ">
        <div class="col-md-12 py-5">
            <div class="card shadow">
                <div class="card-header">
                    <i class="fas fa-fw fa-tachometer-alt"></i> Dashboard
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-4 mb-4">
                            <a href="/dashboard/posts" class="text-decoration-none">
                                <div class="card bg-success">
                                    <div class="card-body">
                                        <i class="fas fa-newspaper fa-3x mb-3 text-white"></i>
                                        <h5 class="card-title text-white">Post <span class="badge badge-light">
                                                {{ $postsCount }}
                                            </span>
                                        </h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-4 mb-4">
                            <a href="/dashboard/services" class="text-decoration-none">
                                <div class="card bg-success">
                                    <div class="card-body">
                                        <i class="fas fa-tools fa-3x mb-3 text-white"></i>
                                        <h5 class="card-title text-white">Layanan <span
                                                class="badge badge-light">{{ $servicesCount }}</span>
                                        </h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-4 mb-4">
                            <a href="/dashboard/galleries" class="text-decoration-none">
                                <div class="card bg-success">
                                    <div class="card-body">
                                        <i class="fas fa-images fa-3x mb-3 text-white"></i>
                                        <h5 class="card-title text-white">Galeri <span
                                                class="badge badge-light">{{ $galeriesCount }}</span>
                                        </h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-4 mb-4">
                            <div class="card bg-success">
                                <div class="card-body">
                                    <i class="fas fa-comments fa-3x mb-3 text-white"></i>
                                    <h5 class="card-title text-white">Testimoni <span class="badge badge-light">5</span>
                                    </h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 mb-4">
                            <div class="card bg-success">
                                <div class="card-body">
                                    <i class="fas fa-comment-alt fa-3x mb-3 text-white"></i>
                                    <h5 class="card-title text-white">Kritik dan Saran <span
                                            class="badge badge-light">8</span></h5>
                                </div>
                            </div>
                        </div>
                        @can('admin')
                            <div class="col-sm-4 mb-4">
                                <a href="/dashboard/categories" class="text-decoration-none">
                                    <div class="card bg-success">
                                        <div class="card-body">
                                            <i class="fas fa-list fa-3x mb-3 text-white"></i>
                                            <h5 class="card-title text-white">Kategori <span
                                                    class="badge badge-light">{{ $categoriesCount }}</span>
                                            </h5>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-sm-4 mb-4">
                                <div class="card bg-success">
                                    <a href="/dashboard/users" class="text-decoration-none">
                                        <div class="card-body">
                                            <i class="fas fa-users fa-3x mb-3 text-white"></i>
                                            <h5 class="card-title text-white">User <span
                                                    class="badge badge-light">{{ $usersCount }}</span></h5>
                                        </div>

                                    </a>
                                </div>
                            </div>
                        @endcan
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
