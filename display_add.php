

<table class="table table-responsive">
<thead>
<tr>

<th colspan="4" class="text-center">
<h3>DISPLAY PATIENT</h3>
</th>
<th colspan="4" style="text-align:right">


<button type="button" class="btn btn-primary dropdown-toggle">
           <?php echo"<a href='index.php?a=add_p' style='color:#fff;'> <span class='glyphicon glyphicon-user'></span>&nbsp; Add entry</a> "; ?></button>

</th>
</tr>
<tr>
<th>Patient ID</th>
<th>First name</th>
<th>Last name</th>
<th>Age</th>
<th>Gender</th>
<th>Entry date</th>
<th>Contact</th>
<th>E-mail</th>
<th>Edit</th>

</tr>

</thead>

<?php
$str="select * from add_patient";
$str1=mysql_query($str);
while($str2=mysql_fetch_array($str1))
{
	echo"
	<tr>
	<td>$str2[p_id]</td>
	<td>$str2[p_fname]</td>
	<td>$str2[p_lname]</td>
	<td>$str2[p_age]</td>
	<td>$str2[p_gender]</td>
	<td>$str2[p_edate]</td>
	<td>$str2[p_contact]</td>
	<td>$str2[p_email]</td>
	<th><a href='index.php?a=edit&p_id=$str2[p_id]'>Edit</a></th>
	
	</tr>
	";
}

?>
</table>
