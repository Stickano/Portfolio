<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title', 'Henrik Jeppesen')</title>

    <link rel="alternate" href="jeppesen.dev" hreflang="en">
    <link rel="icon"      href="/favicon.ico?v=1.1">

    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    @yield('css')
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author"                content="Henrik Jeppesen">
    <meta name="description"           content="@yield('description')">
    <meta name="keywords"              content="@yield('keywords')">
    <meta name="robots"                content="@yield('robots')">
    <meta name="viewport"              content="width=device-width, initial-scale=0.8">
</head>
<body>

    @include('layouts.menu')
    <div class="container-fluid content">
        @yield('content')
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="{!! asset('js/app.js') !!}"></script>
    @yield('script')

</body>
</html>