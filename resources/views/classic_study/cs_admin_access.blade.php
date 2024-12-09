<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin: Classic Study</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
@include('dashboard.header')

<body class="background1">
    <div class="adminClassicStudyContainer">
        <a href="{{ route('classicstudy') }}" class="gobackhome">← Exit</a>
        <div class="admin-top-container">
            <h1 class="admin-access-title">Classic Study Content</h1>
            <div>
                <a href="{{ route('admin.classic-study.addcsv') }}" class="btn btn-primary mb-3">CSV Upload</a>
                <a href="{{ route('admin.classic-study.add') }}" class="btn btn-primary mb-3">Add New Classic Study</a>
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
                        <th>Classic Study Level</th>
                        <th>Sequence Num</th>
                        <th>Topic Title</th>
                        <th>Definition</th>
                        <th>Image Description</th>
                        <th>Image</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($allContent as $Content)
                        <tr>
                            <td>{{ $Content->id }}</td>
                            <td>{{ $Content->topic_level }}</td>
                            <td>{{ $Content->sequence_num }}</td>
                            <td>{{ $Content->topic_title }}</td>
                            <td>{!! nl2br(e($Content->definition)) !!}</td>
                            <td>{{ $Content->image_description }}</td>
                            <td>
                                @if ($Content->image)
                                    <img src="{{ asset('storage/' . $Content->image) }}"
                                        alt="{{ $Content->image_description }}" width="100">
                                @else
                                    No image
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('admin.classic-study.edit', $Content->id) }}"
                                    class="btn btn-primary btn-sm">Edit</a>
                                <form method="POST" action="{{ route('classicStudyDelete', $Content->id) }}"
                                    onsubmit="return confirm('Are you sure you want to delete this topic?');"
                                    >
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
