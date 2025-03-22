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
            background-color: #390303;
        }

        .card {
            background-color: #941b0c;
            top: 20vh;
            left: 50%;
            transform: translateX(-50%);
        }

        .btn {
            background-color: #fbc908;

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

        .firework {
            right: 5rem;
            width: 20%;
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

        @media screen and (max-width: 480px) {
            .badut {
                bottom: -3rem;
                right: -7rem;
            }

            .firework {
                right: 1rem;
                top: -1rem;
                width: 30%;
            }

            .home {
                width: 100%;
            }

        }
    </style>
</head>

<body>
    <div class="container position-relative">
        <nav>
            <h1 class="title mt-4">OPEN HOUSE ORMAWA</h1>
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
        <img src="{{ asset('asset') }}/11.png" alt="badut" class="position-absolute firework">
    </div>
    <img src="{{ asset('asset') }}/2.png" alt="carnaval" class="w-100 position-absolute home opacity-50"
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
