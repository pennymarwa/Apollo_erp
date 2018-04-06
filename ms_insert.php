<?php
ob_start();
include_once("connect.php");
$ms_name=$_REQUEST['ms_name'];
mysql_query("insert into ms_master(ms_name)values('$ms_name')");
header("location:index.php?a=feedback");
?>