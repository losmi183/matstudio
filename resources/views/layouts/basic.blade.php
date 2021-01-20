<!DOCTYPE html>
<html lang="en">
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

    @yield('extra-css')

</head>

<body>

    @include('partials.navbar')
    
    @yield('content')
    
    <div class="space-80"></div>

    @include('partials.links')

    <footer>
        <p>Copyright © mat. Studio. All rights reserved.</p>
    </footer>




    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    @yield('extra-js')    
</body>
</html>