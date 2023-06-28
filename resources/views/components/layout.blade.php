<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href={{ asset('css/app.css')}}>
    <title>{{ $title ?? 'Todo Manager' }}</title>
</head>
<body>
    <div class="container">
        <h1>{{ $title }}</h1>
        <hr/>
        {{ $slot }}
    </div>
</body>
</html>
