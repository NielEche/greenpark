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

    <meta name="msapplication-TileColor" content="#ffffff" />
    <meta name="msapplication-TileImage" content="{{ asset('files/img/content/greenpark.png') }}" />
    <meta name="theme-color" content="#ffffff" />


    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('files/img/content/greenpark.png') }}" />
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('files/img/content/greenpark.png') }}" />
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('files/img/content/greenpark.png') }}" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('files/img/content/greenpark.png') }}" />
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('files/img/content/greenpark.png') }}" />
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('files/img/content/greenpark.png') }}" />
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('files/img/content/greenpark.png') }}" />
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('files/img/content/greenpark.png') }}" />
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('files/img/content/greenpark.png') }}" />
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('files/img/content/greenpark.png') }}" />
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('files/img/content/greenpark.png') }}" />
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('files/img/content/greenpark.png') }}" />
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('files/img/content/greenpark.png') }}" />
    <link rel="icon" type="image/x-icon" href="{{ asset('files/img/content/greenpark.ico') }}" />
    <link rel="manifest" href="{{ asset('files/img/content/manifest.json') }}" />

    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('files/bootstrap/css/bootstrap-grid.min.css') }}">
    <link rel="stylesheet" href="{{ asset('files/bootstrap/css/bootstrap.min.css') }}">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('files/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Roboto:100,400,400i,700,700i%7CPlayfair+Display:400,400i,700,700i%7CMaterial+Icons&amp;display=swap" />


    <!-- Main style -->
    <link rel="stylesheet" type="text/css" href="{{ asset('files/css/vendor.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('files/css/main.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('files/css/custom.css') }}" />


    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

 
    @livewireStyles

    <!-- JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <!-- Bootstrap Script -->
    <script src="{{ asset('files/bootstrap/js/bootstrap.min.js') }}"></script>

</head>

<body>
    <!-- - section MODAL -->
    <div class="modal fade" id="shipdesignmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="p-2">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body w-100">
                    <img class="w-100" src="img/assets/projects/Supply_utility_vessel.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- - section MODAL -->

    <!-- - section MODAL -->
    <div class="modal fade" id="shipdesignmodal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="p-2">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body w-100">
                    <img class="w-100" src="img/assets/projects/Barges.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- - section MODAL -->
    <div data-barba="wrapper">
            <!-- PAGE PRELOADER -->
            <div class="preloader js-preloader">
                <div class="preloader__curtain preloader__curtain_outer bg-light"></div>
                <div class="preloader__content">
                    <div class="preloader__curtain preloader__curtain_inner bg-accent-primary-1"></div>
                    <div class="preloader__wrapper-logo"><a class="logo" href="index.php">
                            <div class="logo__text"><span class="logo__text-title"><img src="{{ asset('files/img/content/greenpark.svg') }}"
                                        alt=""></span></div>
                        </a>
                    </div>
                </div>
            </div>
            <!-- - PAGE PRELOADER -->
    

        <!-- PAGE HEADER -->
        @include('partials.header')
        <!-- - PAGE HEADER -->

        @yield('content')
        @yield('footer')
    </div>
    @stack('modals')

    @livewireScripts

    <!-- Bootstrap -->
    <script src="{{ asset('files/bootstrap/js/bootstrap.min.js') }}"></script>

    <!-- VENDOR SCRIPTS -->
    <script src="{{ asset('files/js/vendor.js') }}"></script>
    <!-- - VENDOR SCRIPTS -->
    <!-- COMPONENTS -->
    <script src="{{ asset('files/js/components.js') }}"></script>
    <!-- - COMPONENTS -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDNq0ueciTt6V_9F8Uhce_15ReMqETLWtU" async></script>
    <!-- PAGE SCRIPTS-->
    <!-- - PAGE SCRIPTS-->

    @yield('script')
</body>

</html>
