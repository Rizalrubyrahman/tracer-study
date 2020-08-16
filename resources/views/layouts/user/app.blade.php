<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/mg/favicon.png') }}">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" type="text/css" href="{!!asset('assets/css/bootstrap.min.css')!!}">
    <link rel="stylesheet" type="text/css" href="{!!asset('assets/css/style.css')!!}">

</head>
@if (request()->is('/'))
    <body style="overflow: hidden;">
@else
    <body>
@endif
    @include('layouts.user.navigation')
    @include('sweetalert::alert')

    @yield('content')
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
</body>
</html>