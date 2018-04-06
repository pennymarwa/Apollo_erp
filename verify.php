<?php
ob_start();
session_start();
$uname=$_REQUEST['uname'];
$pass=$_REQUEST['pass'];

if($uname=="manpreet" && $pass="123")
{
	$_SESSION['login']=$uname;
	header("location:index.php?msg=login successfull");
}
else
{
	header("location:login.php?msg=wrong username and password");
}
?>