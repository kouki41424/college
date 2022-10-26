<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">

        <title>Blog</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">


    </head>
    <body class="antialiased">
        <h1 class="title">編集画面</h1>
        <form action="/posts/{{$post->id}}" method="POST">
            @csrf
            @method('PUT')
            <div class='content_title'>
                <h2>Title</h2>
                <input type='text' name="post[title]" value="{{$post->title}}"/>
                <p class ="title_error" style="color:red">{{$errors->first('post.title')}}</p>
            </div>
            <div class ='content_body'>
                <h2>Body</h2>
                <input type='text' name='post[body]' value="{{$post->body}}"></textarea>
                <p class ="body_error" style ="color:red">{{$errors->first('post.body')}}</p>
            </div>
            <input type="submit" value="update">
        </form>
       <div class="footer">
           <a href ="/posts/{{$post->id}}">戻る</a>
       </div>
    </body>
</html>