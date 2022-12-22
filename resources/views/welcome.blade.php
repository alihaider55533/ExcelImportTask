<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel 9 Import Export Excel & CSV File - TechvBlogs</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>

<body>
<div class="container mt-5 text-center">
    <h2 class="mb-4">
        <a href="#">Import Excel File</a>
    </h2>
    <form action="{{ route('import') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group mb-4">
            <div class="custom-file text-left">
                <input type="file" name="file" class="custom-file-input" id="customFile">
                <label class="custom-file-label" for="customFile">Choose file</label>
            </div>
        </div>
        <button class="btn btn-primary">Import Users</button>
        <a class="btn btn-success" href="{{ route('export-users') }}">Export Users</a>
    </form>
    <div style="padding-top: 100px">
        @if(isset($files))
        <table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Detail View</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($files as $index => $file)
            <tr>
                <td>{{ ++$index }}</td>
                <td>{{ $file->name }}</td>
                <td><a href="{{ URL::to('/detail-view/'. $file->id) }}">Open</a></td>
            </tr>
            @endforeach
            </tbody>
        </table>
        @endif
    </div>
</div>

</body>

</html>