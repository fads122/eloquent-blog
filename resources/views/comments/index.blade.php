<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comments</title>
</head>
<body>
    <h1>Comments</h1>

    <ul>
        @foreach ($comments as $comment)
            <li>{{ $comment->body }}</li>
        @endforeach
    </ul>
</body>
</html>
