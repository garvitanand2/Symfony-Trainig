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
<h1 align="center"> 
Enter Employee Data </h1>>
<br>
<br>
<form  name = "form" action="Employee.php" method="POST" align ="center"  OnSubmit="alert("Thank you for your feedback.");"/>
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
<input type="submit" value = "submit"  />
</fieldset>

</form>
</body>
</html>
