<html>


<head>
<link rel="stylesheet" href="navigation.css">
</head>






<body>


  <div class="topnav" id="myTopnav">  
  <a href="demo1.php" class="icon" >  New Employee  </a>
  <a href="employee_view.php"  class = "page2" >   Employee     </a>
  <i class="fa fa-bars"></i>
  </div>
  

   <h1 align="center"> Enter Employee Data </h1>

<br>
<br>

<form  name = "emp" action="" method="POST" align ="center" />
<fieldset>
    <legend>Employee Details:</legend>
Name: <input type="text" size=30   name="name1" value = "<?php isset( $row[ 'name' ] ) ? $row[ 'name' ] : '' ?>" >
<br>
<br>    
Email <input type="text"  size=30 name="email2"  >
<br>  
<br>
 Company <input type="text" size=30  name="company3" >
<br>
<br>
Salary <input type ="text" size=30   name = "salary4" >
 <br>
<br>
Mobile <input type ="text" size=30   name = "mobile5" >
<br>
<br>
</p>
<input type="submit" value = "submit" name = "done"  id="success-btn" />
</fieldset>
</form>
</body>
</html>
 
<?php


if(isset($_POST['done']))
{
$Name = $_POST['name1'];
$Email = $_POST['email2'];
$Salary = $_POST['salary4'];
$Mobile = $_POST['mobile5'];
$Company = $_POST['company3'];



 $dbhost = 'localhost';
         $dbuser = 'root';
         $dbpass = 'GARVIT';
          $dbname = 'kivihealth';
         $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);
   
        
             $sql = "INSERT INTO employee (name, email, salary, mobile, company) VALUES ('$Name', '$Email', '$Salary','$Mobile','$Company')";
            mysqli_query($conn, $sql);
   echo "<script>
alert('Employee addded successfully');
</script>";    

}
      ?>
