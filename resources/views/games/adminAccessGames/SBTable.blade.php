<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin: POS Hunter</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

@include('dashboard.header')

<body class="background1">
    <div class="adminClassicStudyContainer">
        <a href="{{ route('dashboard') }}" class="gobackhome">← Exit</a>
        <div class="admin-top-container">
            <h1 class="admin-access-title">Sentence Builder Content</h1>
            <div>
                <a href="{{ route('SBcsv') }}" class="btn btn-primary mb-3">Add CSV</a>
                <a href="{{ route('sentence_builder.create') }}" class="btn btn-primary mb-3">Add New Sentence Builder
                    Content</a>
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
                        <th>Sentence</th>
                        <th>Difficulty</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($sentenceBuilder as $sentenceBuilderRow)
                        <tr>
                            <td>{{ $sentenceBuilderRow->id }}</td>
                            <td>{{ $sentenceBuilderRow->sentence }}</td>
                            <td>{{ $sentenceBuilderRow->difficulty }}</td>
                            <td>
                                <a href="{{ route('sentence_builder.edit', $sentenceBuilderRow->id) }}"
                                    class="btn btn-primary btn-sm">Edit</a>
                                <form method="POST"
                                    action="{{ route('sentence_builder.destroy', $sentenceBuilderRow->id) }}"
                                    onsubmit="return confirm('Are you sure you want to delete this sentence?');">
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
