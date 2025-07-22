@extends('layouts.app')
@section('style')
    <style>
        /* Your existing CSS styles */
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


        /* Your existing media queries */
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"
        integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection

@section('content')
    <div class="vw-100 vh-100 position-relative overflow-hidden">
        <div id="timer" class="text-white text-center w-25 mx-auto rounded" style="background-color: #d17a32;">01:30</div>

        <!-- Initial placeholder time -->
        <div class="header mt-4">
            @if ($ormawa)
                <div class="mx-auto text-center rounded position-relative" style=>
                    <div class="img-container rounded mx-auto" style="background-color: rgba(255, 255, 255, 0.6)">
                        <img src="{{ asset('logo/ormawa') }}/{{ $ormawa->img_logo }}" class="image" alt="">
                    </div>
                    <h1 class="text-center ormawa mt-5 z-10">{{ $ormawa->name }}</h1>
                </div>
            @endif
        </div>
        <div class="card mx-auto mt-5" style="background-color: #941a0b; width:20rem;">
            <img src="{{ asset('asset/9.png') }}" alt="topi-badut" class="w-25 position-absolute topi-badut">

            <div class="card-body">
                @if (session()->has('wrong'))
                    <div class="alert alert-danger" role="alert">
                        {{ session()->get('wrong') }}
                    </div>
                @endif
                @if (session()->has('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session()->get('success') }}
                    </div>
                @endif
                {{-- Use $questions for pagination data --}}
                <h2 class="card-title">
                    Question {{ $questions->currentPage() }} of {{ $questions->lastPage() }}
                </h2>

                <p id="question">{{ $question->question }}</p>

                <form action="/team/answer" method="POST">
                    @csrf
                    <input type="hidden" name="ormawaCode" value="{{ $ormawa->code }}">
                    <input type="hidden" name="page" value="{{ $questions->currentPage() }}">
                    <input type="hidden" name="lastPage" value="{{ $questions->lastPage() }}">
                    <input type="hidden" name="question_id" value="{{ $question->id }}">

                    @foreach ($answers as $answer)
                        <div class="form-check">
                            <input class="form-check-input" type="radio" id="answer_{{ $answer->id }}" name="answer_id"
                                value="{{ $answer->id }}" required>
                            <label class="form-check-label text-white" for="answer_{{ $answer->id }}">
                                {{ $answer->answer_text }}
                            </label>
                        </div>
                    @endforeach

                    <button type="submit" class="btn btn-warning mt-3">Submit</button>
                </form>
            </div>
        </div>

    </div>
    <div class="mt-5 bottom-0">
        <h1 class="text-center">~ Good Luck ~</h1>
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
            let totalTime = 60000000; //waktu 1 menit
            let timerElement = $('#timer');
            let intervalId;

            function startTimer(duration) {
                let startTime = Date.now();
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
                    url: "{{ route('team.insert.log') }}",
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

            $("#true").click(function(e) {
                e.preventDefault();
                $.ajax({
                    type: "post",
                    url: "{{ route('team.answerQuestion') }}",
                    data: {
                        '_token': "{{ csrf_token() }}",
                        'answer': 1,
                        'question_id': question[counter].id
                    },
                    success: function(response) {
                        toastr.success('Answer has been submitted!');
                        updateQuestion();
                    }
                });
            });

            $("#false").click(function(e) {
                e.preventDefault();
                $.ajax({
                    type: "post",
                    url: "{{ route('team.answerQuestion') }}",
                    data: {
                        '_token': "{{ csrf_token() }}",
                        'answer': 0,
                        'question_id': question[counter].id
                    },
                    success: function(response) {
                        toastr.success('Answer has been submitted!');
                        updateQuestion();
                    }
                });
            });

            function updateQuestion() {
                counter++;

                if (counter > 4) {
                    Swal.fire({
                        title: 'Success!',
                        text: 'You have completed the mission!',
                        icon: 'success',
                        confirmButtonText: 'Done'
                    }).then(() => {
                        $.ajax({
                            type: "post",
                            url: "{{ route('team.insert.log') }}",
                            data: {
                                '_token': "{{ csrf_token() }}",
                                'ormawa_id': ormawa.id,
                            },
                            success: function(response) {
                                window.location.href = "{{ route('team.home') }}";
                            }
                        });
                    });
                } else {
                    $("#numQuestion").text("Question " + (counter + 1));
                    $("#question").text(question[counter].question);
                }
            }

            startTimer(totalTime);
        });
    </script>
@endsection
