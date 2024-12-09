<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Classic Study | {{ $content->topic_title }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
@include('dashboard.header2')

<body class="background">
    <!-- Display Content Details -->
    <div class="cs-body">
        <a href="{{ route('classicstudy') }}" class="gobackhome">← Exit</a>
        <br>
        <div class="title">
            {{ $content->topic_title }}
        </div>

        <div class="definition">
            <p>{!! nl2br(e($content->definition)) !!}</p>
        </div>

        <div class="image-description">
            {{ $content->image_description }}
        </div>
        
        @if ($content->image)
            <img class="cs-image" src="{{ asset('storage/' . $content->image) }}" width="500">
        @endif

        <br>
        <a href="{{ route('quiz', $content->id) }}" class="takequiz"> Take Quiz →</a>
    </div>
</body>

</html>
