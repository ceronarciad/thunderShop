<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Application') }}</title>
        <!-- Favicon -->
        <link href="{{ asset('argon') }}/img/brand/favicon.png" rel="icon" type="image/png">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
        <!-- Icons -->
        <link href="{{ asset('argon') }}/vendor/nucleo/css/nucleo.css" rel="stylesheet">
        <link href="{{ asset('argon') }}/vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
        <!-- Argon CSS -->
        <link type="text/css" href="{{ asset('argon') }}/css/argon.css?v=1.0.0" rel="stylesheet">
        <!-- JS -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        @yield('page-style-files')
    </head>
    <body class="{{ $class ?? '' }}">   
        @auth()
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>

            @if (auth()->user()->id_profile == 9)
                @include('layouts.navbars.sidebar')
            @endif
        @endauth
        
        <div class="main-content">
            @include('layouts.navbars.navbar')
            <div class="header bg-gradient-secondary py-7 py-lg-1">
                <div class="container">
                    <div class="header-body text-center mt-5 mb-5">
                        <div class="row justify-content-center" id="app">
                            @yield('content')                                                      
                        </div>
                    </div>
                </div>
                {{-- <div class="separator separator-bottom separator-skew zindex-100">
                    <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
                        <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
                    </svg>
                </div> --}}
            </div>
        
            <div class="container mt--10 pb-5"></div>
        </div>

        @include('layouts.footers.guest')       

        <script src="{{ asset('argon') }}/vendor/jquery/dist/jquery.min.js"></script>
        <script src="{{ asset('argon') }}/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
        
        @stack('js')
        
        <!-- Argon JS -->
        <script src="{{ asset('argon') }}/js/argon.js?v=1.0.0"></script>
            
    </body>
    
  @yield('page-js-files')
  @yield('page-js-script')
</html>