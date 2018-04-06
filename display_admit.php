<?php
include_once("connect.php");
?>
<link rel="stylesheet" href="css/bootstrap.min.css" />

<table class="table">
<tr>
<thead>

<th colspan="4" class="text-center">
<h3>DISPLAY PATIENT</h3>
</th>
<th colspan="4" style="text-align:right">


<button type="button" class="btn btn-primary dropdown-toggle">
           <?php echo"<a href='index.php?a=admit_p' style='color:#fff;'> <span class='glyphicon glyphicon-user'></span>&nbsp; Add entry</a> "; ?></button>

</th>
</thead>
</tr>
<tr>
<th>Sr. no.</th>
<th>Patient Id</th>
<th>Patient Name</th>
<th>Patient Email</th>
<th>Admission date</th>
<th>Doctor</th>
<th>Ward no.</th>

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
	
	
	</tr>
	";
}

?>
</table>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery-1.11.0.js"></script>
