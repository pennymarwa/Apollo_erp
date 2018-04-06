<?php
include_once("connect.php");
$str=mysql_fetch_array(mysql_query("select * from admit_patient"));
?>

<div class="container">
<div class="row">

<table class="table" style="background-color:#FFF; border:hidden; width:50%; margin-left:20%; margin-right:30%;" >
<tr>
<thead>
<th colspan="4" class="text-center">
<h3>MAIL REPORT</h3>
</th>

</thead>
</tr>

<tr>
<th>Total Mails sent</th>
<th>
<?php
$strt=mysql_query("SELECT COUNT( m_status1 ) AS  'newname' FROM admit_patient WHERE m_status1='1' ");
					$strt1=mysql_fetch_array($strt);
					echo $strt1[newname];
?>
</th>
</tr>

<tr>
<th>No. of patients replied</th>
<th>
<?php
$strn=mysql_query("SELECT COUNT( pf_status ) AS  'newname' FROM admit_patient WHERE pf_status='1' ");
					$strn1=mysql_fetch_array($strn);
					echo $strn1[newname];
?>
</th>
</tr>

<tr>
<th>No. of patients replied at first mail</th>
<th>
<?php
$strnn=mysql_query("SELECT COUNT( m_status2 ) AS  'newname' FROM admit_patient WHERE m_status1='1' and pf_status='1' and m_status2='0' and m_status3='0' ");
					$strnn1=mysql_fetch_array($strnn);
					echo $strnn1[newname];
?>
</th>
</tr>

<tr>
<th>No. of patients replied at second mail</th>
<th>
<?php
$strnnn=mysql_query("SELECT COUNT( m_status2 ) AS  'newname' FROM admit_patient WHERE m_status2='1' and pf_status='1' and m_status1='1' and m_status3='0' ");
					$strnnn1=mysql_fetch_array($strnnn);
					echo $strnnn1[newname];
?>
</th>
</tr>

<tr>
<th>No. of patients replied at third mail</th>
<th>
<?php
$strnnn=mysql_query("SELECT COUNT( m_status2 ) AS  'newname' FROM admit_patient WHERE m_status3='1' and pf_status='1' and m_status2='1' and m_status1='1' ");
					$strnnn1=mysql_fetch_array($strnnn);
					echo $strnnn1[newname];
?>
</th>
</tr>


</table>

</div>
</div>