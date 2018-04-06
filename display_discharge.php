<?php
include_once("connect.php");
?>
<link rel="stylesheet" href="css/bootstrap.min.css" />
<?php
if($_REQUEST['b']=="edit_dis")
include_once("edit_discharge.php");
else
{
?>
<table class="table">
<thead>
<tr>
<th colspan="4" class="text-center">
<h3>DISPLAY PATIENT</h3>
</th>
<th colspan="4" style="text-align:right">




</th>
</tr>
</thead>
<tr>
<th>Sr. no.</th>
<th>Patient ID</th>
<th>Patient Name</th>
<th>Patient email</th>
<th>Admission date</th>
<th>Doctor</th>
<th>Ward no.</th>
<th>Discharge date</th>
<th>Status</th>
<th>EDIT</th>

</tr>

<?php
$str="select * from admit_patient";
$str1=mysql_query($str);
while($str2=mysql_fetch_array($str1))
{
	$row=mysql_fetch_array(mysql_query("select * from add_patient where p_id='$str2[p_id]'"));
	echo"
	<tr>
	<td>$str2[s_no]</td>
	<td>$str2[p_id]</td>
	<td>$row[p_fname]&nbsp;$row[p_lname]</td>
	<td>$row[p_email]</td>
	<td>$str2[p_adate]</td>
	<td>$str2[p_doc]</td>
	<td>$str2[p_ward]</td>
	<td>$str2[p_ddate]</td>
	<td>$str2[p_status]</td>
	<td><a href='index.php?a=discharge&b=edit_dis&sno=$str2[s_no]&p_id=$str2[p_id]'>Edit</a></td>
	
	</tr>
	";
}

?>
</table>
<?php
}
?>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery-1.11.0.js"></script>
