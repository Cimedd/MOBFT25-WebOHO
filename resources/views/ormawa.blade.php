@extends('layouts.app')
@section('style')
    <style>
        #timer {
            font-size: 2rem;
            font-weight: bold;
        }

        .header {
            text-align: center;
        }

        .badut {
            left: 5%;
            bottom: 2%;
            width: 10%;
        }

        .topi {
            right: 5%;
            bottom: 5%;
            width: 15%;
        }

        .firework {
            right: 25%;
            top: 60%;

        }

        .topi-badut {
            right: -15%;
            top: -18%;
            transform: rotate(45deg);
        }

        .image {
            width: 50%;

        }

        .img-container {
            width: fit-content;
        }

        #timer {
            font-size: 2rem;
            font-weight: bold;
        }

        .layout-container {
            display: flex;
            padding: 20px;
        }

        .left-column {
            width: 30%;
            padding-right: 20px;
            text-align: center;
        }

        .right-column {
            width: 70%;
            padding-left: 50px;
        }

        .timer-position {
            text-align: right;
            margin-bottom: 20px;
        }

        .timer-default {
            background-color: #d17a32;
            color: white;
            padding: 5px 15px;
            border-radius: 5px;
            font-size: 1.5rem;
            font-weight: bold;
            text-align: center;
            width: fit-content;
            margin-left: auto; /* Rata kanan di desktop */
            margin-bottom: 20px;
        }

        .answer-grid {
            display: grid;
            gap: 15px;
            margin-top: 20px;
        }

        .answer-grid-2 {
            grid-template-columns: 1fr 1fr;
        }

        .answer-grid-4 {
            grid-template-columns: 1fr 1fr;
            grid-template-rows: auto auto;
        }

        .answer-option {
            display: none;
        }

        .answer-label {
            display: block;
            padding: 15px;
            background-color: #c69c17;
            color: white;
            border-radius: 8px;
            text-align: center;
            cursor: pointer;
            transition: all 0.3s ease;
            border: 2px solid #d17a32;
        }

        .answer-label:hover {
            background-color: #c69c17;
            transform: translateY(-2px);
        }

        .answer-option:checked+.answer-label {
            background-color: #d17a32;
            font-weight: bold;
            box-shadow: 0 0 10px rgba(209, 122, 50, 0.7);
        }

        @font-face {
            font-family: 'CustomFont';
            src: url("{{ asset('/fonts/Pine Forest Personal Use Only.otf') }}") format('opentype');
        }

        .pakai-font {
            font-family: 'CustomFont', sans-serif;
            font-size: 2.5rem;
            color: #355120;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.1);
        }

        @media screen and (max-width: 768px) {
            .right-column {
                padding-top: 50px;
            }

            .timer-default {
                position: absolute;
                top: 0px;
                /* width: fit-content; */
                margin: 0;
                z-index: 10;
                box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
            }

            .layout-container {
                flex-direction: column;
            }

            .left-column,
            .right-column {
                width: 100%;
                padding: 0;
            }

            .answer-grid-2,
            .answer-grid-4 {
                grid-template-columns: 1fr;
            }

            .card {
                margin-left: 0;
                margin-right: 0;
                width: 100% !important;
                padding: 15px;
            }

            .answer-grid {
                display: flex;
                flex-direction: column;
                align-items: center;
                width: 100%;
                gap: 12px;
                margin: 0;
                text-align: center;
            }

            .answer-grid>div {
                width: 100%;
                max-width: 300px;
            }

            .answer-label {
                width: 100%;
                box-sizing: border-box;
                padding: 12px;
            }

            .form-check {
                padding: 0;
            }
        }

        /*
            @media screen and (max-width:980px) {
                .badut {
                    left: 5%;
                    bottom: 2%;
                    width: 25%;
                }

                .topi {
                    right: 5%;
                    width: 25%;
                }

                @media screen and (max-width:900px) {

                    .image,
                    .img-container {
                        width: 75%;
                    }
                }
            }

    */
        /* Your existing media queries */
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"
        integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection

@section('content')
    <img src="{{ asset('asset/background-05.webp') }}" alt="background" class="position-fixed w-100 h-100"
        style="top:0; left:0; object-fit:cover; z-index: -1;">
    <div class="layout-container position-relative">
        <div class="left-column">
            <div class="header mt-4">
                @if ($ormawa)
                    <div class="mx-auto text-center rounded position-relative" style=>
                        <h1 class="text-center ormawa mt-5 z-10 pakai-font">{{ $ormawa->name }}</h1>
                        <div class="img-container rounded py-4 mx-auto" style="background-color: rgba(255, 255, 255, 0.8);">
                            <img src="{{ asset('logo/ormawa') }}/{{ $ormawa->img_logo }}" class="image" alt="">
                        </div>
                    </div>
                @endif
            </div>
        </div>
        <div class="right-column">
            <div id="timer" class="text-white text-center w-fit md:w-fit mx-auto rounded timer-default"
                style="background-color: #d17a32;"></div>
            <!-- Initial placeholder time -->

            <div class="card mx-auto mt-5" style="background-color: #355120; width: 95%; max-width: 1200px;">
                {{-- <img src="{{ asset('asset/9.png') }}" alt="topi-badut" class="w-25 position-absolute topi-badut"> --}}

                <div class="card-body">
                    @if (session()->has('wrong'))
                        <div class="alert alert-danger" style='font-size: 1.25rem; font-weight:800' role="alert">
                            {{ session()->get('wrong') }}
                        </div>
                    @endif
                    @if (session()->has('success'))
                        <div class="alert alert-success" style='font-size: 1.25rem; font-weight:800' role="alert">
                            {{ session()->get('success') }}
                        </div>
                    @endif
                    {{-- Use $questions for pagination data --}}
                    <h2 class="card-title pakai-font">
                        Question {{ $questions->currentPage() }} of {{ $questions->lastPage() }}
                    </h2>

                    <p id="question">{{ $question->question }}</p>

                    <form action="/team/answer" method="POST">
                        @csrf
                        <input type="hidden" name="ormawaCode" value="{{ $ormawa->code }}">
                        <input type="hidden" name="page" value="{{ $questions->currentPage() }}">
                        <input type="hidden" name="lastPage" value="{{ $questions->lastPage() }}">
                        <input type="hidden" name="question_id" value="{{ $question->id }}">

                        <div class="answer-grid answer-grid-{{ count($answers) <= 2 ? '2' : '4' }}">
                            @foreach ($answers as $answer)
                                <div class="form-check">
                                    <input class="answer-option" type="radio" id="answer_{{ $answer->id }}"
                                        name="answer_id" value="{{ $answer->id }}" required>
                                    <label class=" text-white answer-label" for="answer_{{ $answer->id }}">
                                        {{ $answer->answer_text }}
                                    </label>
                                </div>
                            @endforeach
                        </div>

                        <button type="submit" class="btn btn-warning mt-3">Submit</button>
                    </form>
                </div>
            </div>
        </div>

    </div>
    <div class="mt-5 bottom-0">
        <h1 class="text-center pakai-font">~ Good Luck ~</h1>
    </div>
    </div>
@endsection

@section('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
        integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('js') }}/anime.min.js"></script>
    <script>
        $(document).ready(function() {
            let counter = 0;
            let question = @json($question);
            let ormawa = @json($ormawa);
            // console.log(ormawa)
            let totalTime = 180000; //waktu 1 menit
            let timerElement = $('#timer');
            let intervalId;
            let startTime;

            function getStartTime() {
                return $.ajax({
                    type: "GET",
                    url: `{{ route('team.getStartTime', ['ormawaCode' => $ormawa->id]) }}`,
                    dataType: "json",
                });
            }

            getStartTime().done(function(response) {
                startTime = new Date(response.start_time).getTime();
                startTimer(totalTime);
            }).fail(function() {
                startTime = null; // Fallback to current time if fetching fails
            });


            function startTimer(duration) {
                let endTime = startTime + duration;

                function updateTimer() {
                    let now = Date.now();
                    let remaining = endTime - now;
                    if (remaining <= 0) {
                        clearInterval(intervalId);
                        timerElement.text('00:00');
                        handleTimerExpiry();
                        return;
                    }

                    let totalSeconds = Math.floor(remaining / 1000);
                    let minutes = Math.floor(totalSeconds / 60);
                    let seconds = totalSeconds % 60;
                    let formattedSeconds = seconds < 10 ? `0${seconds}` : seconds;
                    timerElement.text(`${minutes}:${formattedSeconds}`);
                }

                updateTimer();
                intervalId = setInterval(updateTimer, 1000);
            }

            function handleTimerExpiry() {
                $.ajax({
                    type: "post",
                    url: "{{ route('team.insert.log')}}",
                    data: {
                        '_token': "{{ csrf_token() }}",
                        'ormawa_id': ormawa.id,
                    },
                    success: function(response) {
                        Swal.fire({
                            title: 'Time is up!',
                            text: 'You have completed the mission!',
                            icon: 'warning'
                        }).then(() => {
                            window.location.href = "{{ route('team.home') }}";
                        });
                    }
                });
            }
        });
    </script>
@endsection
