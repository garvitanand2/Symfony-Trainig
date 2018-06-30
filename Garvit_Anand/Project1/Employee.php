 
<?php



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

            header('location: http://localhost/Project1/demo1.php');

      ?>