<!DOCTYPE html>
<html>
<head>
    <title>@yield('title', 'Prolearner')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('/assets/css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css" integrity="sha256-BtbhCIbtfeVWGsqxk1vOHEYXS6qcvQvLMZqjtpWUEx8=" crossorigin="anonymous" />
    @stack('head')
</head>
<body>
@include('components.header')

<div class="container">
    @yield('content')
</div>

{{--@include('components.footer')--}}

{{-- Scripts --}}
@stack('scripts')
<script src="{{ asset('/assets/js/app.js') }}"></script>
</body>
</html>
