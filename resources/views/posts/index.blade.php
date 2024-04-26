<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css"/>
    <title>Document</title>
</head>
<body>
    <h1>Posts:</h1>
    <a href="/create">Create a Post</a>
    <ul>
    @foreach ($posts as $post)
        <li><a href="show/{{ $post->id }}" >{{ $post->title }}<a/></li>
    @endforeach
    </ul>
</body>
</html>