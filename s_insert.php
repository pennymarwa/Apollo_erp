<?php
ob_start();
include_once("connect.php");
$s_name=$_REQUEST['s_name'];
$ms_id=$_REQUEST['ms_id'];
mysql_query("insert into s_master(s_name,ms_id)values('$s_name','$ms_id')");
header("location:index.php?a=feedback");
?>