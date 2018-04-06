<?php
ob_start();
include_once("connect.php");
$pid=$_REQUEST['p_id'];
$p_adate=$_REQUEST['p_adate'];
$p_doc=$_REQUEST['p_doc'];
$p_ward=$_REQUEST['p_ward'];
$str="insert into admit_patient(p_id,p_adate,p_doc,p_ward) values('$pid','$p_adate','$p_doc','$p_ward')";
mysql_query($str);
header("location:index.php?a=admit");



?>