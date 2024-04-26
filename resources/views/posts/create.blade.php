<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
    <h1>Create a Post</h1>
    <a href="/">Back</a>
    <form method="POST" action="/store">
        @csrf
        <label>
            Title:
            <input name="title" />
        </label>

        <label>
            Category_id:
            <input name="category_id" />
        </label>
        <button>Create</button>
    </form>
</body>
</html>