<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('includes.head')
</head>
<body>
    <nav>
        @include('includes.nav')
    </nav>
<div class="welcome-body">
        @yield('content')
</div>
</body>
</html>