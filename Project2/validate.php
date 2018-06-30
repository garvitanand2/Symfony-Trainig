<?php

$EMAIL1= $_POST['name'];
$PWD1 = $_POST['pwd'];
if(isset($_POST["login"]))
{
if($EMAIL1="" && $PWD1="")
{		
header('location: login.php');
}
}
	
header('location: welcome.php');

?>