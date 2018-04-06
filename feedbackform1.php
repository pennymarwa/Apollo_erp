<?php
session_start();
include_once("connect.php");
include_once("session1.php");
$pass=$_SESSION['login'];
$strf=mysql_query("select * from add_patient where p_email='$pass'");
$rowf=mysql_fetch_array($strf);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" href="css/bootstrap.min.css" />
<style>

table 
{
	border:hidden;
}
</style>
</head>

<body style="background-color:#0CC;">
<div class="container" style="width:100%">
<div class="row">
<div class="col-lg-12">
<h1 align="right" style="padding-top:40px; padding-right:20px; color:#FFF;"><b>FEEDBACK FORM</b></h1>
</div>
</div>
<hr style="height:2px;" color="#fff";/>
<div class="row">
<div class="col-lg-12">
<form action="insert_feedbackform1.php" method="post" class="form-group">		

<table class="table" style=" width:90%; margin-left:5%; margin-right:5%; background-color:#FFF;">

<tr>
<th>
Name
</th>
<th>
<input type="text" class="form-control" value="<?php echo $rowf[p_fname]; ?>" readonly="readonly">
</th>
<th>
Package type
</th>
<th>
<input type="text" class="form-control" />
</th>
</tr>
<tr>
<th>Patient Id
</th>
<th>
<input type="text" class="form-control"  value="<?php echo $rowf[p_id]; ?>" readonly="readonly"/>
</th>
<th>
Email
</th>
<th>
<input type="text" class="form-control" value="<?php echo $rowf[p_email]; ?>" readonly="readonly" />
</th>
</tr>

<tr>
<th>
Contact
</th>
<th>
<input type="text" class="form-control" value="<?php echo $rowf[p_contact]; ?>" readonly="readonly"  />
</th>
<th>


</th>
</tr>


</table>        
        
<table style="background-color:#FFF; width:90%; margin-left:5%; margin-right:5%;" class="table">
<tr>
<th></th>
<th></th>
<th style="text-align:right"><table align="right"><tr valign="top"><th style="text-align:center">Highly <br />satisfied</th><th style="text-align:center">satisfied</th><th style="text-align:center"> not<br /> satisfied</th></tr></table></th>
</tr>
<?php
$strms=mysql_query("select * from ms_master order by ms_id");
$x=1;
$y=1;
$z=1;
while($rowms=mysql_fetch_array($strms))
{
	echo "<tr valign='top'>";
	echo "<th style='width:2%;'>";
	echo $x++;
	echo "</th>";
	echo "<th style='width:30%;'>";
	echo $rowms[ms_name];
	echo "</th>";
	echo "<th>"; // for s_master table
	$strs=mysql_query("select * from s_master where ms_id='".$rowms[ms_id]."'");
	if(mysql_num_rows($strs))
	{
	  echo "<table class='table table-hover' align='center'>";
	  while($rows=mysql_fetch_array($strs))
	  {
		  echo "<tr valign='top'>
		  <th style='width:250px;'>".$rows[s_name]."</th>
		  <th>";
		 	$strss=mysql_query("select * from ss_master where s_id='".$rows[s_id]."'");
			if(mysql_num_rows($strss))
			{
	  			echo "<table class='table table-hover' align='center' width='100%'>";
	  			while($rowss=mysql_fetch_array($strss))
	  			{
					if($rowss[ss_name]=="please write down the name of the person below")
					{
					echo $rowss[ss_name];
					continue;
					}
		  			echo "<tr valign='top'>
					<th style='width:1000px;'>".$rowss[ss_name]."</th>
					<th style='width:100px;'>
						<input type='radio' name='r{$rows[ms_id]}_{$rows[s_id]}_{$rowss[ss_id]}' value='hs'>
					</th>
					<th style='width:100px;'>
						<input type='radio' name='r{$rows[ms_id]}_{$rows[s_id]}_{$rowss[ss_id]}' value='s'>
					</th>
					<th style='width:100px;'>
						<input type='radio' name='r{$rows[ms_id]}_{$rows[s_id]}_{$rowss[ss_id]}' value='ns'>
					</th>
					</tr>";
				$y++;
	  			}
	  			echo "</table>";
			}
			else
			{
				echo "<input type='text' class='form-control' name='f{$rows[ms_id]}_{$rows[s_id]}_na'>";
				echo "<th style='width:50px;'>
				<input type='radio' name='r{$rows[ms_id]}_{$rows[s_id]}_na' value='hs'>
				</th>
				<th style='width:50px;'>
				<input type='radio' name='r{$rows[ms_id]}_{$rows[s_id]}_na' value='s'>
				</th>
				<th style='width:50px;'>
				<input type='radio' name='r{$rows[ms_id]}_{$rows[s_id]}_na' value='ns'></th>";
				$z++;
			}
			echo "</th></tr>";
 	 }
	  echo "</table>";
	}// if condition close here
	else
	{
				echo "<input type='text' class='form-control' name='f{$rowms[ms_id]}_na_na'>";
	}
	echo "</th></tr>";
	
	
}
?>
<tr>
<th colspan="3"><input type="submit" /></th>
</tr>
</table>
</form>

        
        
        
        
        

</div><!--col-->
</div><!--row-->
</div><!--container-->

<script src="js/jquery-1.11.0.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap.js"></script>
</body>

</html>