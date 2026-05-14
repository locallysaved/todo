<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{ asset("style.css") }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>veicamie uzdevumi</title>
</head>
<body>
    <x-navigation></x-navigation>
    <h1>visi veicamie uzdevumi</h1>
    <ul>
        @foreach ($todos as $todo)
            <li><a href="/todos/{{ $todo->id }}">{{ $todo->content }}</a></li>
        @endforeach
    </ul>
    boii
</body>
</html>