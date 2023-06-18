<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
    </head>
    <body>
        @foreach($posts as $post)
        <div>
            <h2>{{$post->title}}</h2>
            <h3>{{$post->excerpt}}</h3>
            <h3>{{$post->published_at}}</h3>
        </div>
        @endforeach

        {{$posts->links()}}
    </body>
</html>
