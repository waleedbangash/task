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
    <title>Document</title>
</head>
<body>
    <div class="coontainer">
        <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-6">
                <h1>Add Rolls</h1>
                <form  method="post" action="{{url('admin/submitrolls')}}">
                    @csrf
                    <div class="form-group">

                     <div class="col-sm-10">
                       <input type="text" class="form-control" name="rolls">
                       <span>@error('rolls'){{$message}}@enderror</span>
                     </div>
                     <div class="col-sm-6">
                        <input type="submit" class="form-control" class="btn btn-secondary" value="add rolls">
                      </div>
                      <div class="col-sm-4">
                        <a href="{{url('admin/showrolls')}}" class="btn btn-success">Show Rolles</a>
                      </div>
                      <div class="col-sm-4">
                        <a href="{{url('admin/')}}" class="btn btn-info">Back</a>
                      </div>
                   </div>
                 </form>
            </div>
        </div>
        <div>
</body>
</html>
