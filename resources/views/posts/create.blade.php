<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
      <h1>本日のトレーニング</h1>
      　  <form action='/posts/add' method="POST">
    　　　　      @csrf
            <div class="part">
                  <h2>place</h2>
                  <input type="text" name=post[part] placeholder="鍛えた場所">
            </div>
            <div class="training">
                  <h2>training</h2>
                  <input type="text" name=post[training] placeholder="トレーニング名">
            </div>
            <div class="weight">
                  <h2>weight</h2>
                  <input type="text" name=post[weight] placeholder="重さ(kg)">
            </div>
            <div class="count">
                  <h2>count</h2>
                  <input type="text" name=post[count] placeholder="回数">
            </div>
            <div class="set">
                  <h2>set</h2>
                  <input type="text" name=post[set] placeholder="セット数">
            </div>
        　　 <div class="place">
                  <h2>time</h2>
                  <input type="text" name=post[time] placeholder="セット間休憩時間">
             </div>
             <input type="hidden" name=new_post_id value='{{$new_post_id}}'>
              <input type="submit" value="store">
          </form>
           <div class='footer'>
               <a href='/posts/{{ $new_post_id }}/confirm'>投稿画面へ</a>
           </div>
    </body>
</html>


