<?php
session_start();
if(isset($_SESSION['email']))
{
	echo "Welcome    ".$_SESSION['email'];
    echo "<a href='new4.php'>logout</a>  ";
}

else
{
	header('location: new1.php');
}

 ?>