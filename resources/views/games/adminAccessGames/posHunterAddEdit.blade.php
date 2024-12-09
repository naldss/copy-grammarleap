<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ isset($PosHunter) ? 'Edit POS Hunter Content' : 'Add New POS Hunter Content' }}</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
@include('dashboard.header')

<body class="background1">
    <div class="add-edit-container">
        <div class="add-edit-box">
            <h1 class="form-name">{{ isset($PosHunter) ? 'Edit POS Hunter Content' : 'Add New POS Hunter Content' }}</h1>
            <hr>
            <form method="POST" action="{{ isset($PosHunter) ? route('pos_hunter.update', $PosHunter->id) : route('pos_hunter.store') }}">
                @csrf
                @if (isset($PosHunter))
                    @method('PUT')
                @endif

                <div class="form-group">
                    <label for="difficulty">Difficulty:</label>
                    <select name="difficulty" id="difficulty" class="form-control"
                        value="{{ old('difficulty', isset($PosHunter) ? $PosHunter->difficulty : '') }}"
                        required>
                        <option value="easy">Easy</option>
                        <option value="medium">Medium</option>
                        <option value="hard">Hard</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="sentence" class="form-label">Sentence</label>
                    <textarea placeholder="Place Sentence Here..." class="form-control" name="sentence" id="sentence" required>{{ old('sentence', isset($PosHunter) ? $PosHunter->sentence : '') }}</textarea>
                </div>
                <br>
                <button type="submit">Save</button>
                <a href="{{ route('pos_hunter.index') }}">Cancel</a>
            </form>
        </div>
    </div>
</body>

</html>
