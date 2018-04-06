<?php
ob_start();
session_start();
include_once("connect.php");
$uname=$_REQUEST['p_fname'];
$pass=$_REQUEST['p_email'];

$str1=mysql_query("select * from add_patient where p_fname='$uname' and p_email='$pass'");

if(mysql_num_rows($str1))
{
	$_SESSION['login']=$pass;
	header("location:feedbackform1.php?msg=login successfull");
}
else
{
	header("location:login_feedback.php?msg=wrong username and password");
}
?>