<!DOCTYPE html>
<html>
<head>
    <title>@yield('title', 'Prolearner')</title>
    @stack('head')
</head>
<body>
    <p>header</p>
@yield('content')

    <p>footer</p>
@stack('scripts')
</body>
</html>
