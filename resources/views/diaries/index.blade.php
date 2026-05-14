<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>diaries

    </title>
</head>
<body>
    <h1>diaries</h1>
    <ul>
    @foreach ($diaries as $diary)
        <li><?= $diary["title"] ?></li>
    @endforeach
    </ul>
</body>
</html>