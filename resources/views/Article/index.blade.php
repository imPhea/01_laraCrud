<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Learn Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    {{--    modal link bootstrap--}}
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container mt-5">

    <div class="col-12 my-4">
        <h1 class="col-8 text-danger d-inline-block">Article</h1>
        <a class="btn btn-danger col-2" href="{{url('/create')}}">Add New</a>
    </div>
    <table class="table">
        <thead>
        <tr>
            <th class="text-center">Id</th>
            <th class="text-center">Title</th>
            <th class="text-center">Thumbnail</th>
            <th class="text-center">Description</th>
            <th class="text-center">Created At</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($articles as $row)
            <tr>
                <td class="fs-5 text-center">{{ $row->id }}</td>
                <td class="fs-5 text-center">{{ $row->title }}</td>
                <td class="fs-5 text-center">
                    <img src="images/{{ $row->thumbnail }}" style="height: 45px">
                </td>
                <td class="fs-5 text-center">{{ $row->description }}</td>
                <td class="fs-5 text-center">{{ $row->created_at }}</td>
                <td>
                    <a class="btn btn-primary" href="/update/{{$row->id}}">Edit</a>
{{--                    modal confirmation --}}
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#confirmModal">Delete</button>
                    <div class="modal fade" id="confirmModal" tabindex="-1" role="dialog" aria-labelledby="confirmModalLabel"
                         aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="confirmModalLabel">Confirmation</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <h4>Delete this post id {{$row->id}}?</h4>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger px-4" data-dismiss="modal">No</button>
                                    <a class="btn btn-primary px-4" href="/delete/{{$row->id}}">Yes</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</body>
</html>
