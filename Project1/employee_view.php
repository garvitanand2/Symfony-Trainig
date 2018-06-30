<?php 
         $dbhost = 'localhost';
         $dbuser = 'root';
         $dbpass = 'GARVIT';
         $dbname = "kivihealth";
        
             $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);
             $q = "Select * from employee;";
             $query = mysqli_query($conn, $q)           
?>

<!DOCTYPE html>
<html> 
<head>
  <link rel="stylesheet" href="navigation.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="topnav" id="myTopnav">
<a href="demo1.php" class="icon" >  New Employee  </a>
<a href="page2.html"  class = "page2" >   Employee     </a>
<i class="fa fa-bars"></i>
</a>
</div>
<div class= "container">
<br>
<br>
<h1 class ="text-warning" align="center"> Displaying employee data </h1>


<table class = "table table-stripped table-hover table-border" >

<tr class ="bg-dark text-white text-centre" >
<th>Name</th>
<th>Email</th>
<th>Salary</th>
<th>Mobile </th>
<th>Company</th>
<th>ID</th>

<</tr>



<?php 

         $dbhost = 'localhost';
         $dbuser = 'root';
         $dbpass = 'GARVIT';
         $dbname = 'kivihealth';
         $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);
   
             if(! $conn )
             {
            die('Could not connect: ' . mysqli_error()); 
             } 
            else 
            {
            echo "Connection success";       
            }
  




 
  $q = "Select * from employee;";
  $query = mysqli_query($conn, $q);
   while($res = mysqli_fetch_array( $query ))
   {         
?>
<tr class= "text-centre">
<td><?php  echo $res['name']?></td>
<td><?php  echo $res['email']?></td>
<td><?php  echo $res['salary']?></td>
<td><?php  echo $res['mobile']?></td>

<td><?php  echo $res['company']?></td>

<td><?php  echo $res['ID']?></td>


<td>  <button class ="btn-danger btn deleteBtn" id ="<?php  echo $res['ID']; ?>" >Delete </button> </td>

<td>  <button class ="btn-primary btn updatebtn" ><a href ="updatemain.php?id=<?php  echo $res['ID'];?>" class ="text-white">Update</a> </button> </td>



</tr>


<?php
}
?>

</table>




</body>

<script >
$(document).ready(function()
{
    $(".deleteBtn").click(function()
    {
      var del_id= $(this).attr('id');
  
      var $ele = $(this);

        $.ajax({
          url: "delete.php",
          type: "POST",
          data:{'del_row':del_id}, 
          success: function(data)
          {
                console.log(data)
                 if(data=="YES")
                 {
                    $ele.closest('tr').remove();
                 }
                 else
                 {
                        alert("can't delete the row")
                 }
             }});
    });
});</script>


</html>