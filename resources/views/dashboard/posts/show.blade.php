@extends('dashboard.layouts.main')

@section('content')
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-8">
                <h1 class="mb-3">{{ $post->title }}</h1>

                <a href="/dashboard/posts" class="btn btn-success btn-sm"><span data-feather="arrow-left"></span> Back to all
                    my posts</a>
                <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning btn-sm"><span
                        data-feather="edit"></span> Edit</a>
                <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger btn-sm" onclick="return confirm('Are your sure?')"><span
                            data-feather="x-circle"></span> Delete</button>
                </form>
                @if ($post->image)
                    <div>
                        <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}"
                            class="img-fluid mt-3">
                    </div>
                @else
                    <img src="{{ asset('img/pembalap.jpg') }}" alt="{{ $post->category->name }}" class="img-fluid mt-3">
                    {{-- <img src="https://source.unsplash.com/1200x400/?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid"> --}}
                @endif
                <article class="my-3 fs-5" style="text-align: justify">
                    {!! $post->body !!}
                </article>
            </div>
        </div>
    </div>
@endsection
