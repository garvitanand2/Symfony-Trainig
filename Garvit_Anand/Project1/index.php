<html>

<head>
  <link rel="stylesheet" href="navigation.css">
  <script>
     function openWin()
      {
     window.open("page2.html");
      }
  </script>

</head>

<body>

  <div class="topnav" id="myTopnav">
  
  <a href="#NewEmployee" class="icon" >  New Employee  </a>
  
  <a href="page2.html"  class = "icon" >   Employee     </a>
  
    
    <i class="fa fa-bars"></i>
  </a>
</div>
<br>


<form action="Employee.php" method="post">

         Name: <input type="text"   name="name " id = 1>
                 <br>
                 <br>

         Company <input type="text"   name="company" id = 2>
<br>
<br>

Email <input type="text"   name="email" id = 3  >
<br>  
<br>

Salary <input type ="text"   name = "salary" id = 4>
<br>
<br>

Mobile <input type ="text"   name = "mobile" id = 5 >
<br>
<br>

<input type="submit">
<input type="reset">

</form>



</body>
</html>