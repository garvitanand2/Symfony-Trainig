
<?php 
include ' conn.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
</head>

<body>

<div class = "col-lg-6 m-auto">
<form method = "post">

<br>
<br>
<div class = "card">
<div class = " card header  bg-dark"> 
<h1 class = "text-white " title="center" >Insert Operation </h1>


</div>

<label>usename: </label>
<input type="text " name = "username" class ="form control">
<br>

<label>Password </label>
<input type="text " name = "password" class ="form-control ">
<br>

<button class = "btn btn-success" type ="submit">Submit </button></div>
<br>

</div>
  

</form>

</div>
</body>
</html>
 