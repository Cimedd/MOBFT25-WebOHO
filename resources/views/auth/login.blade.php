{{-- @extends('layouts.app') --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MOB FT 2024</title>
    <link rel="stylesheet" href="{{ asset('css') }}/fonts.css">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <style>
        body {
            background-color: #242A35;
            margin:0;
            padding: 0;
        }

        .bg-login {
            position: fixed;
            width: 100vw;
            height: 100vh;
            object-fit: cover;
            object-position: center;
            left: 0;
            top: 0;
            opacity: 0.5;
            z-index: -1;
        }

        .container {
            padding: 0; 
            max-width: 100%;
        }

        nav {
            width: 100vw;
            margin: 0;
            padding: 0;
            position: fixed;
            top: 0;
            left: 0;
            z-index: 1000; 
        }

        nav img {
            width: 100%;
            max-height: 150px;
            object-fit: cover;
            display: block;
            opacity: 1; 
        }

        .card {
            background-color: #355120;
            top: 20vh;
            margin-top: 50px;
            left: 50%;
            transform: translateX(-50%);
        }

        .btn {
            background-color: #c69c17;

        }

        .card-header {
            color: #e9e2b6;
        }

        .right-0 {
            right: -10rem;
        }

        .bottom {
            bottom: -1rem;
        }

        .home {
            bottom: 0px;
        }

        button {
            background-color:
        }

        #show {
            accent-color: #fbc908;
        }

        .title {
            color: #fbc908;
            font-family: "Sancreek";
        }

        .nav-header-image {
            width: 100%;
            height: auto;
            max-height: 150px;
            object-fit: contain;
            display: block;
        }

        @media screen and (max-width: 480px) {
            .badut {
                bottom: -3rem;
                right: -7rem;
            }

            .bg-login {
                object-position: 65% center; 
                height: 100vh;
            }

            
            .nav-header-image {
                max-height: 60px !important;
                object-fit: cover;
                object-position: center top;
                width: 100vw;
                height: 18vh;
                margin-left: -8px; 
                transform: scale(1.15);
                transform-origin: top center;
            }

            .home {
                width: 100%;
                object-position: 60% top;
                height: 120vh;
            }

        }
    </style>
</head>

<body>
    <div class="container position-relative">
        <nav>
            <img 
            src="{{ asset('asset') }}/HEADER ATASSS-05.png" 
            alt="OPEN HOUSE ORMAWA"  
            class="nav-header-image"  
            >
        </nav>
        <div class="card w-75 position-absolute z-1">
            {{-- <div class="card-header">{{ __('LOGIN PAGE') }}</div> --}}
            <div class="card-body">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <label for="username" class="col-form-label text-md-end">{{ __('Username') }}</label>
                    <br>
                    <input id="username" type="text"
                        class="w-100 form-control @error('username') is-invalid @enderror" name="username"
                        value="{{ old('username') }}" required autocomplete="username" autofocus>

                    @error('username')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <label for="password" class="col-form-label text-md-end">{{ __('Password') }}</label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                        name="password" required autocomplete="current-password">
                    <div class="text-white mt-2">
                        <input type="checkbox" id="show" value=""> Show Password
                    </div>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    {{-- 
                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                        {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div> --}}
                    <br>
                    <button type="submit" class="btn w-100   text-white" style="background-color:   #d17a32;">
                        {{ __('LOGIN') }}
                    </button>

                    {{-- <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">

                                {{-- @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif --}}
                </form>
            </div>
            {{-- <img src="{{ asset('asset') }}/4.png" class="w-75 position-absolute badut bottom" alt=""> --}}
        </div>
        
    </div>
    <img src="{{ asset('asset') }}/BACKGROUND LOGIN-01.png" alt="carnaval" class="bg-login"
        style="left: 50%; transform: translateX(-50%)">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        let id = document.getElementById("password");

        $("#show").change(function(e) {
            e.preventDefault();
            if (id.type == "password") {
                $(id).attr("type", "text");
            } else {
                $(id).attr("type", "password");
            }
        });
    </script>
</body>

</html>
