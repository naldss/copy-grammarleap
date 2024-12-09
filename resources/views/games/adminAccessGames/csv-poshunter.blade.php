<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
@include('dashboard.header')

<body>
    <div style="padding: 5%">
        <h1>POS Hunter CSV Content Upload</h1>
        <br>
        <form method="POST" action="{{ route('pos_hunter.store') }}" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="csv_file">Upload CSV File:</label>
                <input type="file" name="csv_file" id="csv_file" class="form-control" accept=".csv">
            </div>
            
            <br>
            <button type="submit">Save</button>
            <a href="{{ route('classicstudyedit') }}">Cancel</a>
        </form>
    </div>


</body>

</html>
