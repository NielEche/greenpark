<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   
    <head>
        <title> @yield('title') | {{ env('APP_NAME')}}</title>
        <meta charset="UTF-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="format-detection" content="telephone=no">
        <meta name="format-detection" content="address=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
        <!-- Favicon -->
        <link rel="shortcut icon" href="{{ asset('files/img/favicon/favicon.ico') }}" type="image/x-icon">
        <link rel="apple-touch-icon" href="{{ asset('files/img/favicon/primelaw.png') }}">
        <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('files/img/favicon/primelaw.png') }}">
        <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('files/img/favicon/primelaw.png') }}">
    
        <!-- Bootstrap -->
        <link rel="stylesheet" href="{{ asset('files/bootstrap/css/bootstrap-grid.min.css') }}">
        <link rel="stylesheet" href="{{ asset('files/bootstrap/css/bootstrap.min.css') }}">
    
        <!-- Normalize -->
        <link rel="stylesheet" href="{{ asset('files/css/normalize.css') }}">
    
        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{ asset('files/css/font-awesome.min.css') }}">
    
        <!-- Main style -->
        <link rel="stylesheet" href="{{ asset('files/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('files/css/custom.css') }}" >
        <link rel="stylesheet" href="{{ asset('files/calender/css/style.css') }}">
    
        <!-- REVOLUTION STYLE SHEETS -->
        <link rel="stylesheet" type="text/css" href="{{ asset('files/revolution/css/settings.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('files/revolution/css/layers.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('files/revolution/css/navigation.css') }}">
    
        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
       <!--<link rel="stylesheet" href="{{ asset('css/app.css') }}">-->

        @livewireStyles

        <!-- Scripts -->
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.0/dist/alpine.js" defer></script>

        <!-- JQuery -->
        <script src="{{ asset('files/js/jquery/jquery-2.2.4.min.js') }}"></script>
    
        <!-- REVOLUTION JS FILES -->
        <script src="{{ asset('files/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
        <script src="{{ asset('files/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>
    
        <!-- SLIDER REVOLUTION 5.0 EXTENSIONS
            (Load Extensions only on Local File Systems !
            The following part can be removed on Server for On Demand Loading) -->
        <script src="{{ asset('files/revolution/js/extensions/revolution.extension.actions.min.js') }}"></script>
        <script src="{{ asset('files/revolution/js/extensions/revolution.extension.carousel.min.js') }}"></script>
        <script src="{{ asset('files/revolution/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
        <script src="{{ asset('files/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
        <script src="{{ asset('files/revolution/js/extensions/revolution.extension.migration.min.js') }}"></script>
        <script src="{{ asset('files/revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script>
        <script src="{{ asset('files/revolution/js/extensions/revolution.extension.parallax.min.js') }}"></script>
        <script src="{{ asset('files/revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
        <script src="{{ asset('files/revolution/js/extensions/revolution.extension.video.min.js') }}"></script>
    
        @yield('style')
    </head>
   
<body>
    <div class="wrapp-content">
        <!-- Header -->
        <header class="wrapp-header">
            @include('partials.header')
        </header>
       
        @yield('content')
        @yield('footer')
    </div>
    @stack('modals')

    @livewireScripts

    <!-- Bootstrap -->
    <script src="{{ asset('files/bootstrap/js/bootstrap.min.js') }}"></script>
    
    <!-- SuperFish -->
    <script src="{{ asset('files/js/plugins/jquery.superfish.min.js') }}"></script>
    
    <!-- Main navigation sticky -->
    <script src="{{ asset('files/js/plugins/jquery.sticky.min.js') }}"></script>
    
    <!-- Isotope -->
    <script src="{{ asset('files/js/plugins/jquery.isotope.min.js') }}"></script>
    
    <!-- Images loaded -->
    <script src="{{ asset('files/js/plugins/jquery.imagesloaded.min.js') }}"></script>
    
    <!-- Waypoint -->
    <script src="{{ asset('files/js/plugins/jquery.waypoint.min.js') }}"></script>
    
    <!-- Main script -->
    <script src="{{ asset('files/js/main.js') }}"></script>
    
    <script src="{{ asset('files/revolution/js/rvstart.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="{{ asset('files/calender/js/script.js') }}"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    @yield('script')
    
</body>
</html>

