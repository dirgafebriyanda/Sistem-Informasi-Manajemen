<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>WPU Blog | {{ $title }}</title>
    <link href="{{ asset('dist/css/bootstrap.min.css') }}" rel="stylesheet">
       
    <link rel="stylesheet" href="{{ asset('dist/fontawesome-free/css/all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

    @include('partials.navbar')

    <div class="container mt-5 p-4">
        @yield('content')
    </div>

    <script src="{{ asset('dist/js/bootstrap.bundle.min.js') }}">
    </script>
</body>

</html>
