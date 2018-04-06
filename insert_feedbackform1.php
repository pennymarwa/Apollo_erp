<?php
ob_start();
include_once("connect.php");
$dt=date('Y-m-d');
$p_id=$_REQUEST[p_id];
foreach($_REQUEST as $k=>$v)
{
	$kk=substr($k,0,1);
	if(($kk=="r") || ($kk=="f"))
	{
	$str="insert into p_feedback (p_id, ms_id, s_id, ss_id, p_ans, entrydate) values('$p_id', ";
	
	
		$kkarr=explode('_',$k);
		 $ms=substr($kkarr[0],1);
		 $s=$kkarr[1];
		 $ss=$kkarr[2];
	
	$p_ans=$v;
	$str.="'$ms','$s','$ss', '$p_ans', '$dt')";
	mysql_query($str);
	}
}
header("location:feedbackform1.php");

?>