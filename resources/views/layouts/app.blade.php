<!DOCTYPE html>
<html>
<head>
    <title>@yield('title', 'Prolearner')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/app.css') }}">
    @stack('head')
</head>
<body>
    <p>header</p>
    @yield('content')

    <p>footer</p>
    @stack('scripts')
    <script src="{{ asset('/assets/js/app.js') }}"></script>
</body>
</html>
