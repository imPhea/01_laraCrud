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
<form method="post" action="/update/submit" class="col-6 mt-4 mx-auto" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="id" value="{{$article->id}}">
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" name="title" value="{{ $article->title }}">
    </div>
    <div class="form-group">
        <label for="title">Thumbnail</label>
        <input type="file" class="form-control" name="thumbnail" value="">
        <img src="images/{{ $article->thumbnail }}" alt="thumbnail">
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <input class="form-control" name="description" value="{{ $article->description }}">
    </div>
    <div class="form-group mt-3">
        <a class="btn btn-danger" href="{{ url('/index') }}">Back Home</a>
        <button type="submit" class="btn btn-primary">Submit Change</button>
    </div>
</form>
</body>
</html>
