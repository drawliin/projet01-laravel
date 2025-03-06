<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Route Test</title>
</head>
<body>
    <h1>Bonjour {{$name}}</h1>

    @if($condition)
        <p>Condition true</p>
    @else
        <p>Condition false</p>
    @endif

    @foreach($array as $key => $val)
        <p>{{$key}}: {{$val}}</p>
    @endforeach
    
</body>
</html>