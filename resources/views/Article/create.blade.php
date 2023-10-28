<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>create</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<form method="post" action="/create/submit" enctype="multipart/form-data" class="col-6 mt-4 mx-auto">
    @csrf
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" name="title" value="">
    </div>
    <div class="form-group">
        <label for="title">Thumbnail</label>
        <input type="file" class="form-control" name="thumbnail" value="">
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <textarea class="form-control" name="description" rows="4"></textarea>
    </div>
    <div class="form-group mt-3">
        <a class="btn btn-danger" href="{{ url('/index') }}">Back Home</a>
        <button type="submit" class="btn btn-primary">Add Post</button>
    </div>
</form>
</body>
</html>
