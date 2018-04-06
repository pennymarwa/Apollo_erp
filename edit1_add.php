<?php
ob_start();
include_once("connect.php");
$p_fname=$_REQUEST['p_fname'];
$p_lname=$_REQUEST['p_lname'];
$p_age=$_REQUEST['p_age'];
$p_gender=$_REQUEST['p_gender'];
$p_edate=$_REQUEST['p_edate'];
$p_contact=$_REQUEST['p_contact'];
$p_email=$_REQUEST['p_email'];
$p_id=$_REQUEST['p_id'];
mysql_query("update add_patient set  p_fname='$p_fname',p_lname='$p_lname',p_age='$p_age',p_gender='$p_gender',p_edate='$p_edate',p_contact='$p_contact',p_email='$p_email' where p_id='$p_id'");
header("location:index.php?a=display");


?>