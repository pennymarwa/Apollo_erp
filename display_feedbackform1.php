<?php
include_once("connect.php");
$feed=mysql_query("select * from p_feedback");
$rowfd=mysql_fetch_array($feed);
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

<body>
<div class="container" style="width:100%">
<div class="row">
<div class="col-lg-12">
<h1 align="right" style="padding-top:40px; padding-right:20px;"><b>FEEDBACK FORM</b></h1>
</div>
</div>
<hr style="height:2px;" color="#fff";/>
<div class="row">
<div class="col-lg-12">
<form action="display1_feedback.php" method="post" class="form-group">		

<table style="background-color:#FFF; width:90%; margin-left:5%; margin-right:5%;" class="table">
<tr>
<th colspan="6" class="text-center">
<?php
$std=mysql_query("select count(distinct(p_id)) as new1 from p_feedback ");
$std1=mysql_fetch_array($std);
echo "Total number of patients: ".$std1[new1] ;


?>
</th>
</tr>
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
	 if($rowms[ms_id]<="7")
					{
					
	echo "<tr valign='top'>";
	echo "<th style='width:2%;'>";
	echo $x++;
	echo "</th>";
	echo "<th style='width:20%;'>";
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
					<th style='width:300px;'>
					<table width='100%'>
					<tr>
					<th style='text-align:left;'>
					";
					$strt=mysql_query("SELECT COUNT( ss_id ) AS  'newname' FROM p_feedback WHERE p_ans ='hs' and ms_id='$rowms[ms_id]' and s_id='$rows[s_id]' and ss_id='$rowss[ss_id]'  ");
					$strt1=mysql_fetch_array($strt);
					echo $strt1[newname];
					echo "</th>
					<th style='text-align:center'>";
					$strt=mysql_query("SELECT COUNT( ss_id ) AS  'newname' FROM p_feedback WHERE p_ans ='s' and ms_id='$rowms[ms_id]' and s_id='$rows[s_id]' and ss_id='$rowss[ss_id]'  ");
					$strt1=mysql_fetch_array($strt);
					echo $strt1[newname];
					echo "</th>
					<th style='text-align:right'>";
					$strt=mysql_query("SELECT COUNT( ss_id ) AS  'newname' FROM p_feedback WHERE p_ans ='ns' and ms_id='$rowms[ms_id]' and s_id='$rows[s_id]' and ss_id='$rowss[ss_id]'  ");
					$strt1=mysql_fetch_array($strt);
					echo $strt1[newname];
					
					
					
					
					echo"
					</th>
					</tr>
					</table>	
					</th>
					</tr>";
				$y++;
	  			}
	  			echo "</table>";
			}
			
			echo "</th></tr>";
 	 }
	  
	  echo "</table>";
	}// if condition close here
	
	echo "</th></tr>";
	
					}
}
?>

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