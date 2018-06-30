 <?php


$dbhost = 'localhost';
         $dbuser = 'root';
         $dbpass = 'GARVIT';
          $dbname = 'kivihealth';
         $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);
   
        if(! $conn ){
            die('Could not connect: ' . mysqli_error()); 
       }
       else 
       {
       echo "Connection success";



       }


$ID = $_GET['id'];
$result = "SELECT name,email,salary,mobile,company FROM employee WHERE id = $ID;";
$result1 = mysqli_query($conn, $result);

if (!$result) 
{
    echo 'Could not run query: ' . mysql_error();
    exit;
}
$row = mysqli_fetch_assoc($result1);
//echo '<pre>';
//print_r($row);
//exit;
$P0 = $row['name']; 
$P1 = $row['email'];
$P2 = $row['salary'];
$P3 = $row['mobile'];
$P4 = $row['company'];

if(isset ($_POST['done']))
{
  $name = $_POST["name1"];
  $email = $_POST["email2"];
   $company = $_POST["company3"];
    $salary = $_POST["salary4"];
     $mobile = $_POST["mobile5"];
      
  $ID = $_GET['id'];

    $sql =   "UPDATE employee SET ID = $ID,name='$name', email='$email' , company='$company', salary='$salary' , mobile = '$mobile' where ID= $ID;";

      
if(isset ($_POST['done']))
{

  $ID = $_GET['id'];
    $sql =   "UPDATE employee SET ID = $ID,name='$name', email='$email' , salary=$salary ,company='$company', mobile = $mobile where ID= $ID;";
            if (mysqli_query($conn, $sql)) 
            {
               echo "New record created successfully";
            } else 
            {
               echo "Error: " . $sql . "" . mysqli_error($conn);
            }
              $conn->close();
  }
    
   header('location: http://localhost/project1/employee_view.php');


           }
        
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
<h1 class = "text-white " title="center" >Update  Operation </h1>
</div>
<label>Name</label>
<input type="text " name = "name1" class ="form control"  value =" <?php  echo $P0; ?>">
<br>
<label>Email</label>
<input type="text " name = "email2" class ="form-control "  value =" <?php  echo $P1; ?>" >
<br>
<label>Salary</label>
<input type="text " name = "salary4" class ="form-control " value =" <?php  echo $P2; ?>">
<br>
<label>Mobile</label>
<input type="text " name = "mobile5" class ="form-control " value =" <?php  echo $P3; ?>">
<br>
<label>Company</label>
<input type="text " name = "company3" class ="form-control " value =" <?php  echo $P4; ?>">
<br>
<button class = "btn btn-success" type ="submit" name ='done' >Submit </button></div>
<br>
</div>
</form>
</div>
</body>
</html>
 