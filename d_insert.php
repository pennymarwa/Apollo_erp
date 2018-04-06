<?php
ob_start();
include_once("connect.php");
$d_name=$_REQUEST['d_name'];
$dept_name=$_REQUEST['dept_name'];
mysql_query("insert into doctor(d_name,dept_name)values('$d_name','$dept_name')");
header("location:index.php?a=d_entry");
?>