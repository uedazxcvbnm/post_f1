<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
</head>
<body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
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