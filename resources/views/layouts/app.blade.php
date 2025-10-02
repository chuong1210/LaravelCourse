<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'My Shop' }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        .active {
            font-weight: bold;
            color: #ff1616 !important;
            background-color: #007bff !important;
        }
    </style>
</head>

<body>

    @include('layouts.header')
    {{-- HEADER --}}
    {{-- CONTENT --}}
    <div class="container mt-4">
        @yield('content')
    </div>

    @include('layouts.footer')



</body>

</html>