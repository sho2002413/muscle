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
      <h2>本日のトレーニング内容</h2>
         <div class='records'>
                @foreach ($records as $record)
                    <div class='record'>
                        <h4>part</h4>
                        <p>{{$record->training->part->name}}</p>
                        <h4>training</h4>
                        <p>{{$record->training->name}}</p>
                        <h4>weight(kg)</h4>
                        <p>{{$record->weight}}</p>
                        <h4>count</h4>
                    　　<p>{{$record->count}}</p>
                    　　<h4>set</h4>
                        <p> {{$record->set}}</p>
                        <h4>rest(s)</h4>
             　          <p>{{$record->time}}</p>
            　　　　　　　　　　<h4>date</h4>
                        <p>{{$record->created_at}}</p>
                    </div>
                @endforeach
        </div>
        
      <form action= "/posts/{{ $new_post->id }}" method="POST">
             @csrf
             @method('PUT')
            <div class="body">
                  <h2>反省点など</h2>
                  <textarea name=post[body] placeholder="反省点">{{  $new_post->body }}</textarea>
                  
            </div>
             <input type="submit" value="投稿" >
      </form>


   </body>
</html>