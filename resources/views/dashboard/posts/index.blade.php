@extends('dashboard.layouts.main')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">My Posts</h1>
</div>
<div class="card">
    <div class="card-header">
        <a href="/dashboard">{{ __('Dashboard') }}</a> / Post List
        <a class="btn btn-sm btn-success float-right" href="/dashboard/posts/create">Add new blog</a>
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
            <table class="table table-hover">
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
                            <a title="View" href="/dashboard/posts/{{ $post->slug }}" class="badge bg-info"><span data-feather="eye"></span></a>
                            <a title="Edit" href="/dashboard/posts/{{ $post->slug }}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>
                            <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                                <button title="Delete" class="badge bg-danger border-0" onclick="return confirm('Are your sure?')"><span data-feather="x-circle"></span></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

{{-- <script>
        var notif = document.getElementById('notif');
        var audio = document.getElementById('audio');
        function playNotif(){
            audio.play();
            notif.style.display = 'block';
        }
        window.onload = playNotif;
    </script> --}}
<script>
    function hideAlert() {
        $("#notif").slideUp(500,
            function() {
                $(this).remove();
            });
    }
    setTimeout(hideAlert, 3000);
</script>
@endsection