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

<table style="background-color:#FFF; width:70%; margin-left:20%; margin-right:15%;" class="table">
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
					
					echo "<th style='text-align:center'>";
					$str=mysql_fetch_array(mysql_query("select count(p_ans) as maximum from p_feedback where ms_id='$rowms[ms_id]' and p_ans='hs'"));
					$str1=mysql_fetch_array(mysql_query("select count(p_ans) as maximum1 from p_feedback where ms_id='$rowms[ms_id]' and p_ans='s'"));
					$str2=mysql_fetch_array(mysql_query("select count(p_ans) as maximum2 from p_feedback where ms_id='$rowms[ms_id]' and p_ans='ns'"));
					if($str[maximum]>$str1[maximum1] && $str[maximum]>$str2[maximum2])
					{
						echo"Highly Satisfied";
					}
					else if($str1[maximum1]>$str[maximum] && $str1[maximum1]>$str2[maximum2])
					{
						echo"Satisfied";
					}
					else if($str2[maximum2]>$str[maximum] && $str2[maximum2]>$str1[maximum1])
					{
						echo"Not Satisfied";
					}
					else if($str[maximum]==$str1[maximum1])
					{
						echo"Highly Satisfied";
					}
					else if($str1[maximum1]==$str2[maximum2])
					{
						echo"Satisfied";
					}
					else if($str[maximum]==$str2[maximum2])
					{
						echo"highly Satisfied";
					}
					
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