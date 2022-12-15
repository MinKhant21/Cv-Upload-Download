<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th>id</th>
            <th>Option</th>
        </tr>
        @foreach ($cv as $c)
        <tr>
            <td>{{ $c->id }}</td>
            <td>
                <a href="{{ '/download/'.$c->cv_file }}">Download</a>
            </td>
        </tr>
        @endforeach
    </table>
   
</body>
</html>