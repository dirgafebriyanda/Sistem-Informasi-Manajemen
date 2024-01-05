@extends('dashboard.layouts.main')

@section('dashboard')
    <div class="row ">
        <div class="col-md-12 py-4">
            <div class="card shadow">
                <div class="card-header">
                    <i class="fas fa-fw fa-tachometer-alt"></i> Dashboard
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-4 py-3">
                            <a href="/dashboard/posts" class="text-decoration-none">
                                <div class="card bg-success hvr-float-shadow w-100">
                                    <div class="card-body">
                                        <i class="fas fa-newspaper fa-3x mb-3 text-white"></i>
                                        <h5 class="card-title text-white">Posts List <span class="badge badge-light">
                                                {{ $postsCount }}
                                            </span>
                                        </h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-4 py-3">
                            <a href="/dashboard/services" class="text-decoration-none">
                                <div class="card bg-success hvr-float-shadow w-100">
                                    <div class="card-body">
                                        <i class="fas fa-tools fa-3x mb-3 text-white"></i>
                                        <h5 class="card-title text-white">Services List <span
                                                class="badge badge-light">{{ $servicesCount }}</span>
                                        </h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-4 py-3">
                            <a href="/dashboard/galleries" class="text-decoration-none">
                                <div class="card bg-success hvr-float-shadow w-100">
                                    <div class="card-body">
                                        <i class="fas fa-images fa-3x mb-3 text-white"></i>
                                        <h5 class="card-title text-white">Galleries List <span
                                                class="badge badge-light">{{ $galeriesCount }}</span>
                                        </h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-4 py-3">
                            <a href="/dashboard/ulasan" class="text-decoration-none">
                                <div class="card bg-success hvr-float-shadow w-100">
                                    <div class="card-body">
                                        <i class="fas fa-comment fa-3x mb-3 text-white"></i>
                                        <h5 class="card-title text-white">Reviews List <span
                                                class="badge badge-light">{{ $reviewsCount }}</span>
                                        </h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-4 py-3">
                            <a href="/dashboard/saran" class="text-decoration-none">
                                <div class="card bg-success hvr-float-shadow w-100">
                                    <div class="card-body">
                                        <i class="fas fa-comment-alt fa-3x mb-3 text-white"></i>
                                        <h5 class="card-title text-white">Faq List
                                            <span class="badge badge-light">{{ $saranCount }}</span>
                                        </h5>
                                    </div>
                                </div>
                            </a>
                        </div>

                        @can('admin')
                            <div class="col-sm-4 py-3">
                                <a href="/dashboard/categories" class="text-decoration-none">
                                    <div class="card bg-success hvr-float-shadow w-100">
                                        <div class="card-body">
                                            <i class="fas fa-list fa-3x mb-3 text-white"></i>
                                            <h5 class="card-title text-white">Categories List <span
                                                    class="badge badge-light">{{ $categoriesCount }}</span>
                                            </h5>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-sm-4 py-3">
                                <div class="card bg-success hvr-float-shadow w-100">
                                    <a href="/dashboard/users" class="text-decoration-none">
                                        <div class="card-body">
                                            <i class="fas fa-users fa-3x mb-3 text-white"></i>
                                            <h5 class="card-title text-white">Users List <span
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
