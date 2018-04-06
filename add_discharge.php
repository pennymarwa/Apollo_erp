<?php
ob_start();
include_once("connect.php");
$p_ddate=$_REQUEST['p_ddate'];
$p_status=$_REQUEST['p_status'];
$p_id=$_REQUEST['p_id'];
$s_no=$_REQUEST['sno'];
$str="UPDATE  admit_patient SET  p_ddate =  '$p_ddate',
p_status =  '$p_status' WHERE  s_no ='$s_no' ";
mysql_query($str);
if(($p_status=="cured") or ($p_status=="dor"))
{
	$strp=mysql_fetch_array(mysql_query("select * from add_patient where p_id='$p_id'"));
	if($strp['p_email'])
	{
		echo "mailed";
		mysql_query("update admit_patient set m_status1='1' where p_id='$p_id'");
	}
}

header("location:index.php?a=discharge");
?>
