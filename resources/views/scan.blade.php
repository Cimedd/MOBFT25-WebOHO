@extends('layouts.index')
@section('styles')
@endsection
@section('content')
    <div class="grid grid-cols-1 mx-auto h-screen">
        <div id="reader" width="600px" class="text-white"></div>
        <div class="rounded-md p-6 w-3/4 mt-10 mx-auto h-fit" style="background-color: #561414;">
            <form action="{{ route('getQuestion') }}" method="POST">
                @csrf
                <label for="ormawaField" style="color: #fbc908;" class="mb-4 pt-2">Code</label>
                <input type="text" name="ormawaCode" id="ormawaField" class="mr-5 w-full">
                <br>
                <br>
                <input type="submit" name="submit" class="rounded-sm p-1 border-none w-full"
                    style="background-color: #fbc908;" value="REDEEM">
            </form>
        </div>
    </div>
@endsection
@section('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://unpkg.com/html5-qrcode" type="text/javascript"></script>
    <script>
        function onScanSuccess(decodedText, decodedResult) {
            // handle the scanned code as you like, for example:
            console.log(`Code matched = ${decodedText}`, decodedResult);
            $("#ormawaField").text(`${decodedText}`);
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
    <script></script>
@endsection
