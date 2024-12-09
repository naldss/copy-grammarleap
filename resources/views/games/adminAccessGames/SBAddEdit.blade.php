<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ isset($SentenceBuilder) ? 'Edit Sentence Builder Content' : 'Add New Sentence Builder Content' }}</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
@include('dashboard.header')

<body class="background1">
    <div class="add-edit-container">
        <div class="add-edit-box">
            <h1 class="form-name">{{ isset($SentenceBuilder) ? 'Edit Sentence Builder Content' : 'Add New Sentence Builder Content' }}</h1>
            <hr>
            <form method="POST" action="{{ isset($SentenceBuilder) ? route('sentence_builder.update', $SentenceBuilder->id) : route('sentence_builder.store') }}">
                @csrf
                @if (isset($SentenceBuilder))
                    @method('PUT')
                @endif

                <div class="form-group">
                    <label for="difficulty">Difficulty:</label>
                    <select name="difficulty" id="difficulty" class="form-control"
                        value="{{ old('difficulty', isset($SentenceBuilder) ? $SentenceBuilder->difficulty : '') }}"
                        required>
                        <option value="easy">Easy</option>
                        <option value="medium">Medium</option>
                        <option value="hard">Hard</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="sentence" class="form-label">Sentence</label>
                    <textarea placeholder="Place Sentence Here..." class="form-control" name="sentence" id="sentence" required>{{ old('sentence', isset($SentenceBuilder) ? $SentenceBuilder->sentence : '') }}</textarea>
                </div>
                <br>
                <button type="submit">Save</button>
                <a href="{{ route('sentence_builder.index') }}">Cancel</a>
            </form>
        </div>
    </div>
</body>

</html>
