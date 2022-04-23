<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
<div class="paddingnya"  style="padding:100px 500px 10px">
<form action="/fix_update_category/{{$categori->id}}" method="POST">
    @csrf
    @method('PATCH')
<h1>Ubah Data Product</h1>
<div class="form-floating mb-3">
  <input value="{{$categori->name}}" type="text" class="form-control" id="floatingNama" placeholder="nama product" name="name" >
  <label for="floatingInput">Nama Product</label>
</div>
<button type="submit" class="mt-3 btn btn-success">Submit</button>
</form>
</div>
    
</body>
</html>