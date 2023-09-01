<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
         <link rel="stylesheet" href="/css/style2.css">
    </head>
    
    <body>
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
           </div>
    
        
      <form action= "/posts/{{ $post->id }}/save" method="POST">
             @csrf
             @method('PUT')
            <div class="body">
                  <h2>反省点など</h2>
                  <textarea name=post[body] placeholder="反省点">{{  $post->body }}</textarea>
                  
            </div>
             <input type="submit" value="編集" >
      </form>


   </body>
    <div class='footer'>
         <a href="/posts/myself">戻る</a>
    </div>
</html>