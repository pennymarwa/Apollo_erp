<?php
$strpd=mysql_query("select * from admit_patient where pf_status='0' and m_status1='1' and m_status2='0' and (p_status='cured' or p_status='dor') and (datediff(curdate(), p_ddate)=7) ");
if(mysql_num_rows($strpd))
{
	while($rowpd=mysql_fetch_array($strpd))
	{
		$emailp=mysql_fetch_array(mysql_query("select * from add_patient where p_id='$rowpd[p_id]'"));
		if($emailp[p_email])
		echo "mail";
		mysql_query("update admit_patient set m_status2='1' where p_id='$rowpd[p_id]'");
	}
	
}
$strpd1=mysql_query("select * from admit_patient where pf_status='0' and m_status1='1' and m_status2='1' and m_status3='0' and (p_status='cured' or p_status='dor') and (datediff(curdate(), p_ddate)=14) ");
if(mysql_num_rows($strpd1))
{
	while($rowpd1=mysql_fetch_array($strpd1))
	{
		$emailp1=mysql_fetch_array(mysql_query("select * from add_patient where p_id='$rowpd1[p_id]'"));
		if($emailp1[p_email])
		echo "mail";
		mysql_query("update admit_patient set m_status3='1' where p_id='$rowpd1[p_id]'");
	}
}

?>