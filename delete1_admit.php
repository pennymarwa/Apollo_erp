<?php
ob_start();
include_once("connect.php");
$s_no=$_REQUEST['s_no'];
mysql_query("delete from admit_patient where s_no='$s_no'");
header("location:display_admit.php");


?>