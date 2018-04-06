<?php
ob_start();
include_once("connect.php");
$dpt_name=$_REQUEST['dpt_name'];
mysql_query("insert into department(dpt_name)values('$dpt_name')");
header("location:index.php?a=d_entry");
?>