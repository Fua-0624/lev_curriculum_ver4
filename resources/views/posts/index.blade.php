<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!--Fonts-->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>Blog Name</h1>
        <div class="posts">
            @foreach($posts as $post)
                <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
                <p class="body">{{ $post->body }}</p>
            @endforeach
        </div>
        <div class="paginate">
            {{ $posts->links() }}
        </div>
    </body>
</html>