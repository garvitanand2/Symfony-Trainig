<?php
session_start();
$EMAIL="abc@gmail.com";
$PWD = "1234";
$EMAIL1= $_POST['name'];
$PWD1 = $_POST['pwd'];

if(isset($_POST["login"]))
{
	echo "test4";
	if($EMAIL1!="" && $PWD1!="")
	{		 
		echo 'test5';
		if($EMAIL == $EMAIL2 && $PWD==$PWD2 )
		{
			echo $EMAIL ;
			echo $EMAIL2;
			echo $PWD;
			echo $PWD2;
			
			//setcookie('userid', $EMAIL2, time()+60*60*7);
			//setcookie('pwd', $PWD2, time()+60*60*7);
			echo 'test 8';
			//$_SESSION['userid']= $EMAIL1;
			//$_SESSION['pwd']= $PWD1;
			echo 'test9';
			header("location: welcome.php");


		//}

		/*else
		{
			header("location: login.php");

		}
	}*/
	/*else
		{
			header("location: login.php");
			
		}*/

		//echo "user entered ";
	}
	else
	{
		header('location: login.php');
	}
}
}
else
{	
	header("location: login.php");
	exit();
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