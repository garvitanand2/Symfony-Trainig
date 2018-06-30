
<?php

$first_name = $_POST['fname'];
$last_name = $_POST['lname'];
echo $first_name;
echo $last_name;
echo '1';
$EMAIL = "abc@gmail.com";
$PWD = "1234";

echo '2';


if(isset($_POST["login"])){
 

 echo $_POST["login"];
}
	$EMAIL1=  $_POST['fname'];
	$PWD1 =  $_POST['lname'];

echo '3';	
	echo $EMAIL1;
	echo $PWD1;
	//$_SESSION["temp1"]  = $EMAIL1;
	//$_SESSION["temp2"]  = $PWD1;
	if(!empty($EMAIL1) && !empty($PWD1))
	{		
		if($EMAIL == $EMAIL1 && $PWD==$PWD1 ){
			setcookie('userid', $EMAIL1, time()+60*60*7);
			setcookie('pwd', $PWD1, time()+60*60*7);		
			$_SESSION['userid']= $EMAIL1;
			$_SESSION['pwd']= $PWD1;
			echo "if";
			header("location: 2.php");
			exit;
		}else{
			header("location: 1.php");
			exit();
		}
	}else{
		echo "ddd";	
		header("location: 1.php");
		exit();
	}
}




?>
<html>
<head>
<link rel="stylesheet" href="navigation.css">


<title>WELCOME PAGE</title>
</head>
<sbody>

  <div class="topnav" id="myTopnav">  
  <a href="logout.php" class="icon">Logout  </a>
  
  <i class="fa fa-bars"></i>
  </div>

<h1> Welcome to dashboard </h1>      
<br>
<br>
</body>
</html>