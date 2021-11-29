<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
</head>
<body>
        <h1> this is it!</h1>
            
                <table border="1">
                <tr>
                    <th>投稿</th>
                    <th>コメント</th>   
                </tr>    
                @foreach ($post2s as $post2)
                    <tr>
                    <td>
                        {{ $post2->id }}
                        {{ $post2->name }}
                        {{ $post2->contents }}
                        {{ $post2->user_id }}
                    
                    
                        @foreach ($post2->comment2s as $comment2)
                        <td>
                            {{$comment2->post2_id}}
                            {{$comment2->chat}}
                            {{$comment2->user_id}}       
                        </td>            
                        @endforeach
                    </td>
                    </tr>
                @endforeach
                
                </table>
            

    
</body>
</html>