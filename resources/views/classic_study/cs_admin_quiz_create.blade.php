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

<body class="background1">
    <div class="add-edit-container">
        <div class="add-edit-box">
            <h1 class="form-name">Add Quiz Item</h1>
            <form action="{{ route('classic_study_quiz.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <select name="topic_id" id="topic_id" class="form-control" required>
                        <option value=""></option>
                        @foreach ($allContent as $Content)
                            <option value="{{ $Content->id }}">
                                ID: {{ $Content->id }} - {{ $Content->topic_level }} - {{ $Content->topic_title }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="question" class="form-label">Question</label>
                    <textarea placeholder="Place Question Here" class="form-control" name="question" id="question" required>{{ old('question', isset($classicStudy) ? $classicStudy->question : '') }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="choice_1" class="form-label">Choice 1</label>
                    <textarea placeholder="Place Choice Here" class="form-control" name="choice_1" id="choice_1" required>{{ old('choice_1', isset($classicStudy) ? $classicStudy->choice_1 : '') }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="choice_2" class="form-label">Choice 2</label>
                    <textarea placeholder="Place Choice Here" class="form-control" name="choice_2" id="choice_2" required>{{ old('choice_2', isset($classicStudy) ? $classicStudy->choice_2 : '') }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="choice_3" class="form-label">Choice 3</label>
                    <textarea placeholder="Place Choice Here" class="form-control" name="choice_3" id="choice_3" required>{{ old('choice_3', isset($classicStudy) ? $classicStudy->choice_3 : '') }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="choice_4" class="form-label">Choice 4</label>
                    <textarea placeholder="Place Choice Here" class="form-control" name="choice_4" id="choice_4" required>{{ old('choice_4', isset($classicStudy) ? $classicStudy->choice_4 : '') }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="correct_choice" class="form-label">Correct Choice</label>
                    <textarea placeholder="Place Correct Choice Here" class="form-control" name="correct_choice" id="correct_choice" required>{{ old('correct_choice', isset($classicStudy) ? $classicStudy->correct_choice : '') }}</textarea>
                </div>
                <button type="submit">Save</button>
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
