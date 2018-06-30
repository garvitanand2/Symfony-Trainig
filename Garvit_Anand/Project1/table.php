<?php


         $dbhost = 'localhost';
         $dbuser = 'root';
         $dbpass = 'GARVIT';
          $dbname = 'kivihealth';
         $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);
   
        if(! $conn ){
            die('Could not connect: ' . mysqli_error());
       }




     
$sql = "Select * from employee";
$record = mysqli_query($conn,$sql);

?>

<html>

<head>
<title>
Employee data
</title>

</head>


<body bgcolor="#E6E6FA">


<div class = "container">
<div class= "col-lg-12">


<h1 align="center"> Employee Data    </h1>

<table width="600" border="1"  cellspacing="1" cellpadding="1" align="center" class ="table table-striped table-hover table-bordered" >
 
<tr>
<th>ID</th>
<th>Name</th>
<th>Email</th>
<th>Salary</th>
<th>Mobile</th>
<th>Companny</th>
<th>Update </th>
<th>Delete</th>

</tr>



<?php
while ($employee = mysqli_fetch_array($record)) 
{
	
     
     echo  "<tr>";
     echo "<td>" .$employee['ID'] .  "</td>" ;
     echo "<td>" .$employee['name'] .  "</td>" ;
     echo "<td>" .$employee['email'] . "</td>";
     echo "<td>" .$employee['salary'] ."</td>";
     echo "<td>" .$employee['mobile'] ."</td>";
     echo "<td>" .$employee['company'] ."</td>";


/*
     echo "<td>"."<input type='button' name='update ' value='Update' onclick ='www.google.com' style='font-size:7pt;color:white;background-color:green;border:2px solid #336600;padding:3px' >".
     "</td>"; 
    

     echo "<td>"."<input type=button  name='delete' value='Delete' r:2px solstyle='font-size:7pt;color:white;background-color:red;bordeid #336600;padding:3px' >"."</td>";

*/
       echo "<td>"."'<a href='http://www.google.com/'>
      <button >Update</button>'" . "</td>";

   
echo "<td>"."'<a href='delete.php'>
      <button >Delete</button>'" . "</td>";
       

       echo "</tr>";   
}
?>
</table>

</body>

</html>