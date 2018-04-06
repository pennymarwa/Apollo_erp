<?php
ob_start();
include_once("connect.php");
$s_no=$_REQUEST['s_no'];
$p_adate=$_REQUEST['p_adate'];
$p_dept=$_REQUEST['p_dept'];
$p_doc=$_REQUEST['p_doc'];
$p_ward=$_REQUEST['p_ward'];
$p_ddate=$_REQUEST['p_ddate'];
$p_status=$_REQUEST['p_status'];
mysql_query(" update admit_patient set  p_adate='$p_adate',p_dept='$p_dept',p_doc='$p_doc',p_ward='$p_ward',p_ddate='$p_ddate',p_status='$p_status' where s_no='$s_no' " );
header("location:display_admit.php");


?>