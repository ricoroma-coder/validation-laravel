<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>@yield('titulo')</title>
</head>
<body>

    @yield('conteudo')

    <script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
</body>
</html>

