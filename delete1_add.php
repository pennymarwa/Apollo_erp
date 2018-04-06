<?php
ob_start();
include_once("connect.php");
$p_id=$_REQUEST['p_id'];
mysql_query("delete from add_patient where p_id='$p_id'");
header("location:index.php?a=display");


?>