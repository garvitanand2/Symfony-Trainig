<?php
$myemail= "qwerty";
$mypass = "1234";

if(isset($_POST['login']))
{ 
$email = $_POST['email'];
$pass = $_POST['password'];

//echo $email;
//echo $pass;
//echo 'test case starting';
if(($email==$myemail) && ($pass==$mypass))
{ 
	//echo "test case verified";

   // echo "entering rememberme";
	if(isset($_POST['remember']))
	{
		//echo "starting cookie";
	setcookie('email',$email,time()+60*60*7);
	//echo "cookie set";
	session_start();
	$_SESSION['email']=$email;

	//echo "session set";
    
	header("location: new3.php");

	}

 }
	
	else {
		echo "Incoreect emial";
	}
}
else{
header("location: new1.php");
}
?>