<!DOCTYPE html>
<html lang="en">

<head>
    @include('head')
    <title>GrammarLeap | {{ $room->room_name }}</title>
</head>
@include('dashboard.header')

<body class="background">
    <div class="quiz-room-container">
        <div class="quiz-room-top">
            <div class="quiz-room-information">
                <div class="quiz-room-creator">
                    Creator: {{ $room->creator ? $room->creator->first_name . ' ' . $room->creator->last_name : 'N/A' }}
                </div>
                <div class="quiz-room-name">
                    {{ $room->room_name }}

                </div>
                <div class="quiz-room-description">
                    {{ $room->room_description }}
                </div>
            </div>
            @if (!$hasTakenQuiz)
                <a href="{{ route('takequiz', ['room_id' => $room->room_id]) }}" class="quiz-room-take-quiz">
                    Take Quiz
                </a>
            @else
                <div class="quiz-room-take-quiz quiz-taken">
                    <div>
                        {{ $userQuizScore->score }} / {{ $total_quizzes }} Points |
                        {{ round(($userQuizScore->score / $total_quizzes) * 100, 2) }}% Accuracy
                    </div>
                    <div class="sub-quiz-taken">Quiz Taken.</div>
                </div>
            @endif
        </div>
        <div class="quiz-room-users-list-box">
            <div class="box-title-2">Users Quiz Leaderboard</div>
            <div class="quiz-room-users-list">

                @if ($quiz_scores->isEmpty())
                    <p>No scores available for this room.</p>
                @else
                    @foreach ($quiz_scores as $index => $quiz_score)
                        <div class="users-result-box"
                            @if ($index % 2 == 1) style="background-color: rgb(244, 244, 255)" @endif>
                            <div class="leaderboard-rank-quiz-room">{{ $index + 1 }}</div>
                            <div class="quiz-result-list-name">
                                {{ $quiz_score->user ? $quiz_score->user->first_name . ' ' . $quiz_score->user->last_name : 'Unknown User' }}
                            </div>
                            <div class="quiz-result-box">
                                {{ $quiz_score->score }}/{{ $quiz_score->total_points }} points |
                                {{ $quiz_score->accuracy }}% accuracy
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>


    </div>

</body>

</html>
