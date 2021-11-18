<table border="1">
    <tr>
        <th>id</th>
        <th>user_id</th>
        <th>name</th>
        <th>contents</th>
    </tr>

    {{-- @foreach ($posts as $post)
    <tr>
        <td>{{ $post->id }}</td>
        <td>{{ $post->user_id }}</td>
        <td>{{ $post->name }}</td>
        <td>{{ $post->contents }}</td>
    </tr>
    @endforeach --}}

    <tr>
        <td>{{ $posts->id }}</td>
        <td>{{ $posts->user_id }}</td>
        <td>{{ $posts->name }}</td>
        <td>{{ $posts->contents }}</td>
    </tr>

    
</table>

<br>

<table border="1">
    <tr>
        <th>id</th>
        <th>post_id</th>
        <th>name</th>
        <th>contents</th>
        <th>created_at</th>
    </tr>

    @foreach ($comments as $comment)
    <tr>
        <td>{{ $comment->id }}</td>
        <td>{{ $comment->post_id }}</td>
        <td>{{ $comment->name }}</td>
        <td>{{ $comment->contents }}</td>
        <td>{{ $comment->created_at }}</td>
    </tr>
    @endforeach
</table>
