<?php
ob_start();
include_once("connect.php");
$w_no=$_REQUEST['w_no'];
$w_name=$_REQUEST['w_name'];
mysql_query("insert into ward(w_no,w_name)values('$w_no','$w_name')");
header("location:index.php?a=ward");
?>