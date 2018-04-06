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
 $str="insert into add_patient(p_fname,p_lname,p_age,p_gender,p_edate,p_contact,p_email) values('$p_fname','$p_lname','$p_age','$p_gender','$p_edate','$p_contact','$p_email')";
mysql_query($str);
header("location:index.php?a=add_p");

?>