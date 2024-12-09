<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classic Study</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
@include('dashboard.header')

<body class="background">
    <div class="add-edit-container">
        <div class="add-edit-box">
            <h1 class="form-name">Edit Quiz Item</h1>
            <form action="{{ route('classic_study_quiz.update', $classicStudyQuiz->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <select name="topic_id" id="topic_id" class="form-control" required>
                        <option value="{{ $classicStudyQuiz->topic_id }}">Topic ID: {{ $classicStudyQuiz->topic_id }}
                        </option>
                        @foreach ($allContent as $Content)
                            <option value="{{ $Content->id }}">
                                Topic ID: {{ $Content->id }} | Level: {{ $Content->topic_level }} | Title:
                                {{ $Content->topic_title }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="question" class="form-label">Question</label>
                    <textarea name="question" class="form-control" required>{{ old('question', $classicStudyQuiz->question) }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="choice_1" class="form-label">Choice 1</label>
                    <textarea name="choice_1" class="form-control" required>{{ old('choice_1', $classicStudyQuiz->choice_1) }}</textarea>

                </div>
                <div class="mb-3">
                    <label for="choice_2" class="form-label">Choice 2</label>
                    <textarea name="choice_2" class="form-control" required>{{ old('choice_2', $classicStudyQuiz->choice_2) }}</textarea>

                </div>
                <div class="mb-3">
                    <label for="choice_3" class="form-label">Choice 3</label>
                    <textarea name="choice_3" class="form-control" required>{{ old('choice_3', $classicStudyQuiz->choice_3) }}</textarea>

                </div>
                <div class="mb-3">
                    <label for="choice_4" class="form-label">Choice 4</label>
                    <textarea name="choice_4" class="form-control" required>{{ old('choice_4', $classicStudyQuiz->choice_4) }}</textarea>

                </div>
                <div class="mb-3">
                    <label for="correct_choice" class="form-label">Correct Choice</label>
                    <textarea name="correct_choice" class="form-control" required>{{ old('correct_choice', $classicStudyQuiz->correct_choice) }}</textarea>

                </div>
                <button type="submit">Update</button>
                <a href="{{ route('classic_study_quiz.index') }}">Cancel</a>
            </form>
        </div>
    </div>
</body>
<script>
    $(document).ready(function() {
        $('#topic_id').select2({
            placeholder: "Select or type a topic ID",
            allowClear: true
        });
    });
</script>

</html>
