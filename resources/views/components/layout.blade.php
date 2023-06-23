<html>
    <head>
        <title>{{ $title ?? 'Todo Manager' }}</title>
    </head>
    <body>
        <h1>{{ $title }}</h1>
        <hr/>
        {{ $slot }}
    </body>
</html>