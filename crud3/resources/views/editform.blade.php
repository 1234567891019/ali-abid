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
        @method('PUT')
        <!-- The method or request we admit not including get or post we have to added that method by mentioning it in line.The put and patch method is used for update but it have some difference in it. In out the whole form data delete and save again  but in patch the updated feild is deleted and save again  -->
  <div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="text" class="form-control" id="name" name="name" value="{{ $student->name}}">
  </div>
  <div class="mb-3">
  <label for="city" class="form-label">City</label>
    <input type="text" class="form-control" id="city"  name="city" value="{{ $student->city}}">
  </div>
  <div class="mb-3">
    <label for="marks" class="form-label">Marks</label>
    <input type="number" class="form-control" id="marks"  name="marks" value="{{ $student->marks}}" >
  </div>
  <button type="submit" class="btn btn-primary ">Update</button>
</form>
  </div>
  </div>
        </div>
      
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>