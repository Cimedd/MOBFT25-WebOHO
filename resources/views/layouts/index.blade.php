<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>OHO MOB FT 2024</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="{{ asset('css/fonts.css') }}">
    <link rel="icon" href="{{ asset('logo') }}/main1.png">
    <style>
        .container-fluid {
            background-color: rgb(57, 3, 3);
        }
    </style>
    @yield('styles')
</head>

<body>
    <div class="container-fluid w-100">
        <div class="container mx-auto">
            <div class="header flex p-3">
                <img src="{{ asset('logo') }}/main.png" alt="" class="w-16 mr-3">
                <h1 class="text-xl">OPEN HOUSE ORMAWA MOB FT</h1>
            </div>
            @yield('content')
        </div>
    </div>

    @yield('script')
</body>

</html>
