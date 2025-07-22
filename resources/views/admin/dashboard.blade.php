@extends('layouts.app')

@section('style')
    <style>
        .square {
            background-color: #941b0c;
            border-radius: 2rem;
        }

        .btn {
            background-color: #492469;
            border-color: #492469;

        }
        .text {
            font-size: 1.5rem;
        }
    </style>
@endsection

@section('content')
    <div class="container">
        <h1 class="fs-2">Hello, {{ $name }} 👋</h1>
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
