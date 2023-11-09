<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=deivce-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
</head>
<body>
    <div class="container">
        <h1>{{ $title }}</h1>
        {{ $slot }}
    </div>
</body>
</html>