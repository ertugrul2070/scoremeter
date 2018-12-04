<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('includes.head')
    <link href="{{asset ('css/total.css')}}" rel="stylesheet" type="text/css">

</head>
<body>
<div class="container">
    <nav>
        @include('includes.nav')
    </nav>

    <div class="main">
        @yield('content')
    </div>
</div>
</body>
</html>