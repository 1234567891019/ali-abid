<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<title>Crud eloquent  orm</title>
</head>
<body>
<div class="container my-5">
    <div class="row" >
        <div class="col-sm-6">
            <form action="" method="post">
            @csrf
            <!-- the Csrf token is used for approval or security conformation which is check from our middleware files. we can also save the files without csrf token. There are 2 methods for that -->
            
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                </div>
                <div class="mb-3">
                    <label for="city" class="form-label">City</label>
                    <input type="text" class="form-control" id="city"  name="city" placeholder="City">
                </div>
                <div class="mb-3">
                    <label for="marks" class="form-label">Marks</label>
                    <input type="number" class="form-control" id="marks"  name="marks" placeholder="Marks">
                </div>
                    <button type="submit" class="btn btn-primary ">Submit</button>
            </form>
        </div>   
        @if(session()->has('status') ) 
            <div class="alert alert-success">
                {{  session('status')}}
            </div>
        @endif
        <div class="col-sm-6">
            <table class= "table table-hover">
                <thead>
                    <tr> 
                        <th scope="col"> id</th>
                        <th scope="col"> name</th>
                        <th scope="col"> city</th>
                        <th scope="col"> marks</th>
                        <th scope="col"> Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($students as $stu)
                    <tr>
                        <th>{{$stu->id}}</th>
                        <td>{{$stu->name}}</td>
                        <td>{{$stu->city}}</td>
                        <td>{{$stu->marks}}</td>
                        <td>
                            <a href="{{ url ('/edit',$stu->id)}}" class="btn btn-primary btn-sm">Edit</a>
                            <a href="{{ url ('/delete',$stu->id)}}" class="btn btn-danger btn-sm">Move to Trash </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <a href="{{ url ('/trash')}}" class="btn btn-danger btn-sm">Go To Trash</a>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>