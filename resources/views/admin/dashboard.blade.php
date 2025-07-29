@extends('layouts.app')

@section('style')
    <style>
        body{
            background-color: transparent;
        }
        
        .square {
            background-color: #355120;
            border-radius: 2rem;
        }

        .btn {
            background-color: #c69c17;
            border-color: #c69c17;
        }

        .btn:hover {
            background-color: #d8b23a; 
            border-color: #d8b23a;
            transform: scale(1.02);
            transition: all 0.3s ease;
        }

        .btn:focus, 
        .btn:active {
            background-color: #b38a15;
            border-color: #b38a15;
            box-shadow: 0 0 0 0.25rem rgba(198, 156, 23, 0.5);
        }

        .text {
            font-size: 1.5rem;
        }

        @font-face {
            font-family: 'CustomFont';
            src: url("{{ asset('/fonts/Pine Forest Personal Use Only.otf') }}") format('opentype');
        }

        .greeting-heading {
            font-family: 'CustomFont', sans-serif;
            font-size: 2.5rem;
            color: #355120;
            text-shadow: 1px 1px 2px rgba(0,0,0,0.1);
        }
    </style>
@endsection

@section('content')
    <img src="{{ asset('asset/background-05.webp') }}" 
         alt="background" 
         class="position-fixed w-100 h-100" 
         style="top:0; left:0; object-fit:cover; z-index: -1;">
    <div class="container">
        <h1 class="greeting-heading">Hello, {{ $name }} 👋</h1>
        <div class="square p-3">
            <p><i class="fa-solid fa-filter"></i> Filter</p>
            <form action="{{ route('admin.result') }}" method="post">
                @csrf
                <div class="mb-1">
                    <label for="team">Team Name</label>
                    <select id="team" class="js-example-basic-single w-100" name="team">
                        @if ($teams)
                            @foreach ($teams as $team)
                                <option value="{{ $team->id }}">{{ $team->name }}</option>
                            @endforeach
                        @endif
                    </select>
                </div>
                <br>
                <div class="mb-3">
                    <label for="ormawa">Ormawa</label>
                    <select id="team" class="js-example-basic-single w-100" name="ormawa">
                        @if ($ormawas)
                            @foreach ($ormawas as $ormawa)
                                <option value="{{ $ormawa->id }}">{{ $ormawa->name }}</option>
                            @endforeach
                        @endif
                    </select>
                </div>
                <div class="button">
                    <input type="submit" value="Check" class="btn btn-danger w-100">
                </div>
            </form>

            <br>
            @if (session('result') && session('result')->isNotEmpty())
                <h2>Result</h2>
                <p class="text">Ormawa : {{ session('ormawaName') }}</p>
                <p class="text">Team : {{ session('teamName') }} </p>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <td>No</td>
                            <td>Question</td>
                            <td>Answer</td>
                            <td>Correct Answer</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach (session('result') as $index => $item)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $item->question_text }}</td>
                                <td>{{ $item->user_answer_text }}</td>
                                <td>{{ $item->correct_answer_text }}</td>
                            </tr>
                        @endforeach
                        <tr>
                            <td colspan="4" class="text">Correct Answers: {{ session('correctCount') }} / {{ session('count') }}</td>
                        </tr>
                        <tr>
                            <td colspan="4" class="text">Score For {{ session('ormawaName') }}: {{ session('score') }}</td>
                        </tr>
                    </tbody>
                </table>
            @else
                <p class="text-center">No Result Found</p>
            @endif
        </div>
        
    </div>
@endsection

@section('script')
    <script>
        // In your Javascript (external .js resource or <script> tag)
        $(document).ready(function() {
            $('.js-example-basic-single').select2();
        });
    </script>
@endsection
