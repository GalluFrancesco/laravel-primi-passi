<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hello world</h1>
    <h1>{{$parola1}} {{$parola2}}</h1>
    @foreach($prova_list as $value)
        @if($loop->first)
            <h2>{{$value}}</h2>
        @elseif($loop->index===1)
            <h3>{{$value}}</h3>
        @elseif($loop->index===2)
            <h4>{{$value}}</h4>
        @else
            <h5>{{$value}}</h5>
        @endif
    @endforeach
</body>
</html>