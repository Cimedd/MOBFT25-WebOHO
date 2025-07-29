<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>MOB FT 2024</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="icon" href="{{ asset('logo') }}/main1.png">

    {{-- font-awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    {{-- CSS --}}
    <link rel="stylesheet" href="{{ asset('css') }}/fonts.css">


    {{-- select 2 --}}
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <style>
        #app {
            background-color: transparent;
        }

        .dropdown-menu {
            background-color: #d17a32
        }

        .dropdown-item:hover {
            background-color: #d38d54;
        }

        .navbar {
            padding: 0; 
            position: relative;
        }

        .navbar-collapse {
            position: absolute;
            right: 20px;
            top: 20px;
            margin-right: 15px;
            z-index: 1000;
        }
    
        .navbar .container {
            max-width: 100%;
            padding: 0;
            margin: 0;
        }
    
        .navbar img {
            width: 100%;
            display: block;
        }

        #navbar-toggler {
            border: 1px solid white;
        }

        .nav-header-image {
            width: 100%;
            display: block;
            height: auto;
        }

        .navbar-toggler {
            display: none !important; 
        }

        .navbar .container {
            max-width: 100%;
            padding: 0;
            margin: 0;
            position: relative;
            display: flex;
            flex-direction: column;
        }

        .navbar-collapse {
            position: absolute;
            right: 20px;
            top: 50%; 
            transform: translateY(-50%); 
            margin-right: 15px;
            z-index: 1000;
            background: transparent;
        }

        @media screen and (max-width: 480px) {
            .nav-header-image {
                width: 100vw;
                height: 7vh; 
                object-fit: cover;
                object-position: center top;
                transform: scale(1.15);
                transform-origin: top center;
                margin-left: -3vh;
                position: relative;
                left: 0;
            }

            .navbar {
                display: flex;
                flex-direction: column;
            }
    
            .nav-header-image {
                width: 100vw;
                height: 7vh;
                object-fit: cover;
                object-position: center top;
            }
    
            .navbar-collapse {
                position: static;
                transform: none;
                padding: 25px 15px;
                display: flex !important; 
                justify-content: flex-end;
                width: 100%;
                margin-top: 0;
                top: auto;
            }
    
            .nav-link.dropdown-toggle {
                font-size: 14px;
                padding: 0.3rem 0.8rem;
                background-color: rgba(209, 122, 50, 0.7);
                border-radius: 4px;
            }
    
            .dropdown-menu {
                position: absolute;
                right: 15px;
                left: auto;
                top: 100%;
                margin-top: 5px;
            }
        }
    </style>
    @yield('style')
</head>

<body>
    <div id="app" class="vh-100 vw-100 overflow-x-hidden">
        <nav class="navbar navbar-expand-md shadow-sm">
            <div class="container">
                <img src="{{ asset('asset') }}/HEADER ATASSS-05.webp" 
                alt="OPEN HOUSE ORMAWA"
                class="nav-header-image"  
                >
                <button id="navbar-toggler" class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span><i class="fas fa-bars text-white"></i></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            {{-- @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('LOGIN') }}</a>
                                </li>
                            @endif --}}

                            {{-- @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif --}}
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    @yield('script')
</body>

</html>
