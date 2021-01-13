<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'mat Studio') }}</title>

    <!-- {{-- Fontawsome Icons with my KIT CODE  --}} -->
    <script src="https://kit.fontawesome.com/7532718861.js"></script>  

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/test.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">

        @include('partials.navbar')

        @yield('content')

        <div class="space-80"></div>

        @include('partials.links')

        <footer>
            <p>Copyright © mat. Studio. All rights reserved.</p>
        </footer>

    </div>
    
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    @yield('extra-js')
</body>
</html>
