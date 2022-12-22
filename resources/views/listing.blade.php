<!DOCTYPE Html>
<head>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dataTables.bootstrap4.min.css') }}">

    {{--    <link rel="stylesheet" href="{{ 'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css' }}">--}}
{{--    <link rel="stylesheet" href="{{ 'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css' }}">--}}
</head>
<body>
<table id="example" class="table table-striped table-bordered" style="width:100%">
    <thead>
    <tr>
        <th>#</th>
        <th>Name</th>
        <th>Roll Number</th>
        <th>Class</th>
        <th>Department</th>
        <th>Title</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>Tiger Nixon</td>
        <td>System Architect</td>
        <td>Edinburgh</td>
        <td>61</td>
        <td>2011-04-25</td>
        <td>$320,800</td>
    </tr>
    </tbody>
</table>
</body>
<footer></footer>

<script src="{{ asset('js/table.js') }}"></script>
