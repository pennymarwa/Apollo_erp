<?php
ob_start();
session_start();
if(!$_SESSION['login'])
{
	header("location:login.php?msg=please login first");
}


?>