<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classic Study</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
@include('dashboard.header')

<body class="background1">
    <div class="adminClassicStudyContainer">
        <a href="{{ route('classicstudy') }}" class="gobackhome">← Exit</a>
        <div class="admin-top-container">
            <h1 class="admin-access-title">Classic Study Quizzes</h1>
            <div>
                <a href="{{ route('csvquiz') }}" class="btn btn-primary mb-3">Add CSV</a>
                <a href="{{ route('classic_study_quiz.create') }}" class="btn btn-primary mb-3">Create New Quiz</a>
            </div>

        </div>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Topic ID</th>
                        <th>Question</th>
                        <th>Choices</th>
                        <th>Correct Choice</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($quizzes as $quiz)
                        <tr>
                            <td>{{ $quiz->id }}</td>
                            <td>{{ $quiz->topic_id }}</td>
                            <td>{{ $quiz->question }}</td>
                            <td>{{ $quiz->choice_1 }}, {{ $quiz->choice_2 }}, {{ $quiz->choice_3 }},
                                {{ $quiz->choice_4 }}
                            </td>
                            <td>{{ $quiz->correct_choice }}</td>
                            <td>
                                <a href="{{ route('classic_study_quiz.edit', $quiz->id) }}"
                                    class="btn btn-primary btn-sm">Edit</a>
                                <form action="{{ route('classic_study_quiz.destroy', $quiz->id) }}" method="POST"
                                    onsubmit="return confirm('Are you sure you want to delete this topic?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-primary btn-sm">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>
