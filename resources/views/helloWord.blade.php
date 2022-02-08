<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    {{-- STAMPIAMO IN PAGINA IN MODO STATICO --}}
    <h1>Welcome Piparo's Family</h1>

     <h2>{{ $name }} {{ $lastname }} </h2>

     {{-- STAMPIAMO IN PAGINA DINAMICAMENTE --}}
     <div>
        @foreach ($parents as $parent)
            {{ $parent }},
        @endforeach
     </div>


     {{-- BONUS --}}
     <a href="{{ route('bonus') }}">Go Menù</a>
     <a href="{{ route('bonus') }}">Go Second Menù</a>
</body>
</html>