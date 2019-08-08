<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>worktrees @yield('title')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Styles SasS-->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/page.css') }}" rel="stylesheet" type="text/css">

</head>

    <body>

        @include('layouts._navbar')
            <main class="main-content">
             @yield('header')
             @yield('content')

            </main>

        @include('layouts._footer')
    </body>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/page.js') }}"></script>

</html>
