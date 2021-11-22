<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>
<body>
    <h2>@yield('title')</h2>

    @yield('contents')
    <br>

    <ul>
        <li><a href="/layout">Home</a></li>
        <li><a href="/layout/users">Users</a></li>
        <li><a href="/layout/posts">Posts</a></li>
        <li><a href="/layout/comments">Comments</a></li>
    </ul>

</body>
</html>

