<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }} - Lista de compras</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js']);
</head>
<body>
<h1>{{ $title }}</h1>

{{ $slot }}
</body>
</html>
