<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
</head>
<body>
@foreach ($post2s as $post2)
    {{ $post2s }}  
    <li>{{ $post2->name }}</li>
@endforeach

    
</body>
</html>