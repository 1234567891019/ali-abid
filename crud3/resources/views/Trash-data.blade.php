<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="assets/css/style.css">
<title>Trash Data</title>
</head>
<body>
    <div class="container my-5">
        <div class="row" >
            <div class="col-sm-6">
            <a href="{{ url ('/')}}" class="btn btn-warning btn-sm mb-5 float-right">Back </a>
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
                    @foreach ($student as $stu)
                        <tr>
                            <th>{{$stu->id}}</th>
                            <td>{{$stu->name}}</td>
                            <td>{{$stu->city}}</td>
                            <td>{{$stu->marks}}</td>
                            <td>
                                <a href="{{ url ('/restore',$stu->id)}}" class="btn btn-primary btn-sm">Restore </a>
                                <a href="{{ url ('/force-delete',$stu->id)}}" class="btn btn-danger btn-sm">Delete </a>
                                <!-- If we to delete the file through DELETE method then we use @method delete on the top of line or in file and we have to give route of delete in the routes-->
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>
</html>