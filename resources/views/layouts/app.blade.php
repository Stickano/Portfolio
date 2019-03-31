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

    <div id="preloader">
        <div style="margin:auto;">
            <svg version="1.1" id="L9" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
              viewBox="0 0 100 100" enable-background="new 0 0 0 0" xml:space="preserve">
                <rect x="20" y="50" width="4" height="10" fill="#fff">
                  <animateTransform attributeType="xml"
                    attributeName="transform" type="translate"
                    values="0 0; 0 20; 0 0"
                    begin="0" dur="0.6s" repeatCount="indefinite" />
                </rect>
                <rect x="30" y="50" width="4" height="10" fill="#fff">
                  <animateTransform attributeType="xml"
                    attributeName="transform" type="translate"
                    values="0 0; 0 20; 0 0"
                    begin="0.2s" dur="0.6s" repeatCount="indefinite" />
                </rect>
                <rect x="40" y="50" width="4" height="10" fill="#fff">
                  <animateTransform attributeType="xml"
                    attributeName="transform" type="translate"
                    values="0 0; 0 20; 0 0"
                    begin="0.4s" dur="0.6s" repeatCount="indefinite" />
                </rect>
            </svg>
        </div>
    </div>

    @include('layouts.menu')
    <div class="container-fluid content">
        @yield('content')
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="{!! asset('js/app.js') !!}"></script>
    @yield('script')

</body>
</html>