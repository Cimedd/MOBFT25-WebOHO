@extends('layouts.app')

@section('style')
    <style>
        body {
            min-height: 100vh;
            position: relative;
            background-color: transparent;
        }
        .position-fixed {
            position: fixed;
        }
        .w-100 {
            width: 100%;
        }
        .h-100 {
            height: 100%;
        }

        nav {
            position: relative;
            z-index: 100; /* Paling depan */
            width: 100%;
        }
        
        .korden {
            top: 0;
            z-index: 0;
            opacity: 0.5;
        }

        .right {
            right: 0;
        }

        .left {
            left: 0;
        }

        .form {
            z-index: 100;
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
        }

        .mascot {
            width: 10%;
        }

        #reader {
            z-index: 100;
        }

        @media screen and (max-width:760px) {
            .house {
                width: 100%;
            }

            .mascot {
                width: 35%; 
                max-width: 150px; 
            }
        }
    </style>
@endsection

@section('content')
    <div class="">
        <img src="{{ asset('asset') }}/background-05.webp" alt="background" class="position-fixed w-100 h-100" 
         style="top:0; left:0; object-fit:cover;">
        <img id="bird" src="{{ asset('asset') }}/MASKOT MOB-04 (2).webp" alt="bird" class="position-absolute mascot"
            style="right: 5%; bottom: 1%">
        <img id="tiger" src="{{ asset('asset') }}/MASKOT MOB-03 (1).webp" alt="tiger" class="position-absolute mascot"
            style="left: 5%; bottom: 1%">
    </div>
    <div class="container position-relative">
        @if (session()->has('completed'))
            <div class="alert alert-success" role="alert">
                {{ session()->get('completed') }}
            </div>
        @endif
        @if (session()->has('wrong'))
            <div class="alert alert-danger" role="alert">
                {{ session()->get('wrong') }}
            </div>
        @endif
        <div class="">
            <div id="reader" width="600px" class="text-black mx-auto bg-light rounded"></div>
            <div class="rounded p-3 mt-3 w-75 mx-auto form" style="background-color: #355120;">
                <form action="{{ route('team.getQuestion', ['page' => 1]) }}" method="GET">
                    <label for="ormawaField" style="color: #c69c17;" class="mb-1">Code</label>
                    <input type="password" name="ormawaCode" id="ormawaField" class="w-100" readonly x>
                    <br>
                    <br>
                    <input type="submit" name="submit" class="btn w-100 text-white" style="background-color: #d17a32;"
                        value="REEDEM" id="reedem">
                </form>
            </div>
        </div>

    </div>
    
@endsection

@section('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://unpkg.com/html5-qrcode" type="text/javascript"></script>
    <script src="{{ asset('js') }}/anime.min.js"></script>
    <script>
        function onScanSuccess(decodedText, decodedResult) {
            // handle the scanned code as you like, for example:
            console.log(`Code matched = ${decodedText}`, decodedResult);
            // $("#ormawaField").text(`${decodedText}`);
            $('#ormawaField').attr("value", `${decodedText}`);
        }

        function onScanFailure(error) {
            // handle scan failure, usually better to ignore and keep scanning.
            // for example:
            console.warn(`Code scan error = ${error}`);
        }

        let html5QrcodeScanner = new Html5QrcodeScanner(
            "reader", {
                fps: 10,
                qrbox: {
                    width: 250,
                    height: 250
                }
            },
            /* verbose= */
            false);
        html5QrcodeScanner.render(onScanSuccess, onScanFailure);
    </script>

    <script>
        const mascotStates = {
        bird: {
            open: "{{ asset('asset') }}/MASKOT MOB-04 (2).webp",
            closed: "{{ asset('asset') }}/MASKOT MOB-08 (1).webp"
        },
        tiger: {
            open: "{{ asset('asset') }}/MASKOT MOB-03 (1).webp",
            closed: "{{ asset('asset') }}/MASKOT MOB-07 (1).webp"
        }
    };

    function blinkMascots() {
        // Kedipkan mata (tutup)
        document.getElementById('bird').src = mascotStates.bird.closed;
        document.getElementById('tiger').src = mascotStates.tiger.closed;
        
        // Habis 300ms, buka kembali mata
        setTimeout(() => {
            document.getElementById('bird').src = mascotStates.bird.open;
            document.getElementById('tiger').src = mascotStates.tiger.open;
        }, 300);
    }

    setInterval(blinkMascots, 3000);
    </script>
@endsection
