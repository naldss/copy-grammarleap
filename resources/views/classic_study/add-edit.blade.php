<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ isset($classicStudy) ? 'Edit Classic Study' : 'Add New Classic Study' }}</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
@include('dashboard.header')

<body class="background1">
    <div class="add-edit-container">
        <div class="add-edit-box">
            <h1 class="form-name">{{ isset($classicStudy) ? 'Update Content' : 'Add New Content' }}</h1>
            <hr>
            <form method="POST"
                action="{{ isset($classicStudy) ? route('admin.classic-study.update', $classicStudy->id) : route('admin.classic-study.store') }}"
                enctype="multipart/form-data">
                @csrf
                @if (isset($classicStudy))
                    @method('PUT')
                @endif

                {{-- <div class="form-group">
                    <label for="csv_file">Upload CSV File:</label>
                    <input type="file" name="csv_file" id="csv_file" class="form-control" accept=".csv">
                </div> --}}

                <div class="form-group">
                    <label for="topic_level">Classic Study Level:</label>
                    <select name="topic_level" id="topic_level" class="form-control"
                        value="{{ old('sequence_num', isset($classicStudy) ? $classicStudy->sequence_num : '') }}"
                        required>
                        <option value="foundational">Foundational</option>
                        <option value="proficiency">Proficiency</option>
                        <option value="advanced">Advanced</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="sequence_num">Sequence Number:</label>
                    <input type="number" name="sequence_num" id="sequence_num"
                        value="{{ old('sequence_num', isset($classicStudy) ? $classicStudy->sequence_num : '') }}"
                        required class="form-control">
                </div>

                <div class="form-group">
                    <label for="topic_title">Topic Title:</label>
                    <input type="text" name="topic_title" id="topic_title"
                        value="{{ old('topic_title', isset($classicStudy) ? $classicStudy->topic_title : '') }}"
                        required class="form-control">
                </div>

                <div class="form-group">
                    <label for="definition">Definition:</label>
                    <textarea class="form-control" name="definition" id="definition" required>{{ old('definition', isset($classicStudy) ? $classicStudy->definition : '') }}</textarea>
                </div>

                <div class="form-group">
                    <label for="image_description">Image Description:</label>
                    <textarea class="form-control" name="image_description" id="image_description">{{ old('image_description', isset($classicStudy) ? $classicStudy->image_description : '') }}</textarea>
                </div>

                <div class="form-group">
                    <label for="image">Image:</label>
                    <input type="file" name="image" id="image"
                        value="{{ old('image', isset($classicStudy) ? $classicStudy->image : '') }}"
                        class="form-control">
                </div>

                <br>

                <button type="submit">Save</button>
                <a href="{{ route('classicstudyedit') }}">Cancel</a>
            </form>

        </div>
    </div>
</body>

</html>
