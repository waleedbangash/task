<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>show Rolles</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-5">
                <h1>All rolles</h1>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                        <th>Id</th>
                        <th>name</th>
                        <th>email</th>
                        <th>password</th>
                        <th>role_id</th>
                        <th>created_at</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($rowArr as $row)
                        <tr>
                        <td>{{$row->id}}</td>
                        <td>{{$row->name}}</td>
                        <td>{{$row->email}}</td>
                        <td>{{$row->password}}</td>
                        <td>{{$row->role_id}}</td>
                        <td>{{$row->created_at}}</td>
                        </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-4">
               <a href="{{url('admin/addroll')}}" class="btn btn-success">Add Rolles</a>
            </div>
        </div>
    </div>
</body>
</html>
