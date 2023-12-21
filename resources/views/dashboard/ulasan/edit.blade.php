@extends('dashboard.layouts.main')

@section('dashboard')
    <div class="row justify-content-center">
        <div class="col-md-12 py-4">
            <div class="card shadow-sm">
                <div class="card-header">
                    <a class="text-decoration-none" href="/dashboard"><i class="fas fa-fw fa-tachometer-alt"></i>
                        {{ __('Dashboard') }}</a> / <a class="text-decoration-none"
                        href="/dashboard/ulasan">{{ __('Reviews List') }}</a>
                    / Edit Review
                </div>
                <div class="card-body">
                    <form action="{{ route('ulasan.update', $review->id) }}" method="post">
                        @csrf
                        @method('PATCH')

                        <div class="mb-3 row">
                            <div class="col-md-12">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" placeholder="Name"
                                    class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                                    value="{{ old('name', $review->name) }}" autofocus>
                                @error('name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <div class="col-md-12">
                                <label for="job" class="form-label">Job</label>
                                <input type="text" placeholder="Job"
                                    class="form-control @error('job') is-invalid @enderror" id="job" name="job"
                                    value="{{ old('job', $review->job) }}">
                                @error('job')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <div class="col-md-12">
                                <label for="comment" class="form-label">Comment</label>
                                <textarea class="form-control @error('comment') is-invalid @enderror" placeholder="Comment" id="comment"
                                    name="comment">{{ old('comment', $review->comment) }}</textarea>
                                @error('comment')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <div class="col-md-12">
                                <label for="rating" class="form-label">Rating</label>
                                <input type="number" placeholder="Rating"
                                    class="form-control @error('rating') is-invalid @enderror" id="rating" name="rating"
                                    value="{{ old('rating', $review->rating) }}">
                                @error('rating')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <button type="submit" class="float-right btn btn-primary btn-sm">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
