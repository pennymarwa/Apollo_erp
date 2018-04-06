<head>
<script type="text/javascript" src="ajax_admit.js"></script>
</head>
<?php
include_once("connect.php");
$x=$_REQUEST['x'];
$str=mysql_query("select * from add_patient where p_id='$x'");
$row=mysql_fetch_array($str);
?>
<table class="table">
<tbody>
<tr>
<th>First Name</th>
<td><?php echo $row['p_fname']; ?></td>
</tr>
<tr>
<th>Last Name</th>
<td><?php echo $row['p_lname']; ?></td>
</tr>
<tr>
<th>Age</th>
<td><?php echo $row['p_age']; ?></td>
</tr>
<tr>
<th>Gender</th>
<td><?php echo $row['p_gender']; ?></td>
</tr>
<tr>
<th>Entry Date</th>
<td><?php echo $row['p_edate']; ?></td>
</tr>
<tr>
<th>Contact</th>
<td><?php echo $row['p_contact']; ?></td>
</tr>
<tr>
<th>Email</th>
<td><?php echo $row['p_email']; ?></td>
</tr>


</tbody>
</table>