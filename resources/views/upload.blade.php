<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cv Upload</title>
</head>
<body>
    <form action="{{ url('upload/cv') }}" enctype="multipart/form-data" method="post">
        @csrf
        <input type="file" name="file" >
        <input type="submit" value="Upload">
    </form>

    <a href="{{ url('/show') }}">Show CV List</a>
</body>
</html>