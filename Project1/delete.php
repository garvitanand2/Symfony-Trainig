<?php 

$dbhost = 'localhost';
         $dbuser = 'root';
         $dbpass = 'GARVIT';
          $dbname = 'kivihealth';
         $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);
          
    
    $ID = $_POST['del_row'];
    // echo $ID;
    $q = "DELETE from employee WHERE ID = $ID;";

  echo "YES";
  mysqli_query($conn,$q);
  // header('location: http://localhost/project1/employee_view.php');          
?>