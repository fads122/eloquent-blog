<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts</title>
</head>
<body>
    <h1>Posts</h1>

    @foreach ($posts as $post)
        <div>
            <h2>{{ $post->title }}</h2>
            <p>{{ $post->content }}</p>

            <h3>Comments</h3>
            <ul>
                @foreach ($post->comments as $comment)
                    <li>{{ $comment->body }}</li>
                @endforeach
            </ul>
        </div>
        <hr>
    @endforeach
</body>
</html>
