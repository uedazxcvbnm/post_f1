<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
</head>
<body>
        <h1> this is it!</h1>
            <ul>
                @foreach ($posts as $post)
                <li>{{ $post->name }}</li>
                @endforeach
            </ul>         

    </div>
</body>
</html>