<?php
ob_start();
include_once("connect.php");
$ss_name=$_REQUEST['ss_name'];
$ms_id=$_REQUEST['ms_id'];
$s_id=$_REQUEST['s_id'];
mysql_query("insert into ss_master(ms_id,s_id,ss_name) values('$ms_id','$s_id','$ss_name')");
header("location:index.php?a=feedback");
?>