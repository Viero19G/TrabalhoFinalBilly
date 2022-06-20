<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clubes</title>
</head>
<body>
    <h1>Clubes</h1>
    <ul>
        @foreach($Lista as $clube)
            <li>{{dd($clube)}}</li>
        @endforeachm
    </ul>
    <a href="{{route('gremio')}}">Gremio</a>
</body>
</html>