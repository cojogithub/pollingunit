<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Polling Unit') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('admin/vendor/bootstrap/css/bootstrap.min.css') }}">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="{{ asset('admin/vendor/font-awesome/css/font-awesome.min.css') }}">
    <!-- Custom Font Icons CSS -->
    <link rel="stylesheet" href="{{ asset('admin/css/font.css') }}">
    <!-- Theme stylesheet -->
    <link rel="stylesheet" href="{{ asset('admin/css/style.default.css') }}" id="theme-stylesheet">
    <!-- Custom stylesheet -->
    <link rel="stylesheet" href="{{ asset('admin/css/custom.css') }}">
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('admin/img/favicon.ico') }}">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        @include('partials.header')

        <main class="py-4 d-flex align-items-stretch">
            @include('partials.sidebar')
            <div class="page-content">
                @yield('content')
            </div>
        </main>
    </div>

    <!-- JavaScript files -->
    <script src="{{ asset('admin/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/popper.js/umd/popper.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/jquery.cookie/jquery.cookie.js') }}"></script>
    <script src="{{ asset('admin/vendor/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/jquery-validation/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('admin/js/charts-home.js') }}"></script>
    <script src="{{ asset('admin/js/front.js') }}"></script>
    @yield('scripts')
</body>
</html>
