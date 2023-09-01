<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="/css/style.css">
    </head>
    <body>
        <div class='footer'>
               <a href="/">戻る</a>
        </div>
       <div class='posts'>
            @foreach ($posts as $post)
                    <div class='post'>
                        <p>{{ $post->created_at}}</p>
                         <h2>今回のトレーニング内容</h2>
                            @foreach ($post->records as $record)
                               <div class='record'>
                                <h3>鍛えた部位</h3>
                                <p>{{$record->training->part->name}}</p>
                                <h3>トレーニング名</h3>
                                <p>{{$record->training->name}}</p>
                                <h3>重さ(kg)</h3>
                                <p>{{$record->weight}}</p>
                                <h3>回数</h3>
                            　　<p>{{$record->count}}</p>
                            　　<h3>セット数</h3>
                                <p> {{$record->set}}</p>
                                <h3>休憩時間(s)</h3>
                     　          <p>{{$record->time}}</p>
                     　           </div>
                           @endforeach
                            <h2>反省</h2>
                            <div class='body'>
                　　　　　  　　　　　<p>{{$post->body}}</p>
                            </div>
                        <div class='footer'>
                               <a href='{{$post->id}}/edit'>反省編集画面へ</a>
                        </div>
                        <form action="/posts/{{ $post->id }}/delete" id="form_{{ $post->id }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="button" onclick="deletePost({{ $post->id }})">delete</button> 
                        </form>
                  </div>                
            @endforeach
         </div>
        <div class='footer'>
               <a href="/">戻る</a>
        </div>
        
        <script>
            function deletePost(id) {
                'use strict'
        
                if (confirm('削除すると復元できません。\n本当に削除しますか？')) {
                    document.getElementById(`form_${id}`).submit();
                }
            }
        </script>
    </body>
</html>