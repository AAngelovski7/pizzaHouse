<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    {{-- Ne mora da go pisime /public bidejki toj folder e public na proektot i sekoj file so e vo toj folder mojme v aka da go koristime i sekoj file   --}}
    <link rel="stylesheet" href="/css/main.css">
</head>
<body>

@yield('content')

<footer>
    Copiright 2020 Pizza House
</footer>
</body>
</html>
