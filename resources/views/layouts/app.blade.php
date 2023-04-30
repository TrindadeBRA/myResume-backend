<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    {{-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) --}}
    @vite(['resources/sass/app.scss',  'resources/css/app.css', 'resources/js/app.js'])

</head>
<body>
    <div id="app">
        @php
            $navbarData = [
                "paths" => [
                    "main" => url('/'),
                    "logout" => route('logout'),
                    "login" => route('login'),
                    "register" => route('register'),
                ],
                "isLogged" => Auth::check(),
                "userName" => (Auth::user() ? Auth::user()->name : false),
                "userEmail" => (Auth::user() ? Auth::user()->email : false),
                "userId" => (Auth::user() ? Auth::user()->id : false),
                "csrfToken" => csrf_token(),
            ];
        @endphp

        <navbar :navbar-data="{{ json_encode($navbarData) }}"></navbar>

        <main class="">
            @yield('content')
        </main>
    </div>
</body>
</html>


