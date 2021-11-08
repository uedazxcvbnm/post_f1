<table border="1">
    <tr>
        <th>id</th>
        <th>user_id</th>
        <th>name</th>
        <th>contents</th>
    </tr>
    @foreach ($posts as $post)
    <tr>
        <td>{{ $post->id }}</td>
        <td>{{ $post->user_id }}</td>
        <td>{{ $post->name }}</td>
        <td>{{ $post->contents }}</td>
    </tr>
    @endforeach
</table>