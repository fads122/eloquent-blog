<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f5f8fa;
            color: #333;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #3b5998;
            color: #fff;
            padding: 10px;
            text-align: center;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
        }

        .post {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 20px;
        }

        .post h2 {
            color: #3b5998;
        }

        .post p {
            line-height: 1.6;
        }

        .comments {
            margin-top: 10px;
        }

        .comment {
            background-color: #f5f7f9;
            border: 1px solid #ddd;
            border-radius: 4px;
            padding: 10px;
            margin-bottom: 10px;
        }

        .comment p {
            margin: 0;
        }
    </style>
</head>
<body>
    <header>
        <h1>Noah's Blog</h1>
    </header>

    <div class="container">
        @foreach ($posts as $post)
            <div class="post">
                <h2>{{ $post->title }}</h2>
                <p>{{ $post->content }}</p>

                <div class="comments">
                    <h3>Comments</h3>
                    @forelse ($post->comments as $comment)
                        <div class="comment">
                            <p>{{ $comment->body }}</p>
                        </div>
                    @empty
                        <p>No comments yet.</p>
                    @endforelse
                </div>
            </div>
        @endforeach
    </div>
</body>
</html>
