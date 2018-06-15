<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
       <div class="col-md-4"></div>

       <div class="col-md-4" style="margin-top: 25px;">
       @if(count($errors) > 0)
            @foreach($errors->all() as $error)
            <div class="alert alert-danger">
                    {{ $error }}
            </div>
            @endforeach
        @endif
        @if(session('info'))
            <div class="alert alert-success">
            {{ session('info')}}
            </div>
        @endif
            <form action="{{ url('/create') }}" method="post">
            {{ csrf_field() }}
                <label for="CityName">CityName</label>
                <input type="text" class="form-control" name="cityname"><br>
                <input type="submit" class="btn btn-success" value="add city">
            </form>
       </div>
       <div class="col-md-4"></div>
        </div>
    </div>
</body>
</html>