<?php
ob_start();
session_start();
include_once("session.php");
include_once("connect.php");

$serv=mysql_query("select * from department");
$serv1=mysql_query("select * from doctor");

?>
<html>
<head>

<link rel="stylesheet" href="css/template.css" />
   <link href="css/bootstrap.min.css" rel="stylesheet">
   <script src="js/jquery-1.11.0.js"></script>
   <script src="js/bootstrap.min.js"></script>

</head>

<body>
<br>
<br>

<div class="row">
<div class="col-lg-12">

<div class="col-lg-8">
<h3 align="center"><b> Add Doctor</b></h3>
</div>

<br>
<form class="form-horizontal" action="d_insert.php" method="post">


<div class="row">

    <div class="form-group col-lg-12">
    <label class="control-label col-lg-2" > Doctor Name </label>
    <div class="col-lg-6">
    <input type="text" class="form-control" name="d_name" placeholder="Enter doctor name" />
    </div>
    </div>
</div>

<div class="row">

    <div class="form-group col-lg-12">
    <label class="control-label col-lg-2" > Doctor's Department </label>
    <div class="col-lg-6">
    <select name="dept_name"  class="form-control">
    <option disabled selected>Select Department</option>
     <?php
	while($adrow=mysql_fetch_array($serv))
	{
		echo "<option value='$adrow[dpt_id]'>$adrow[dpt_id] $adrow[dpt_name]</option>"; 
		
		
		}
	?>
    </select>
    </div>
    </div>
</div>

<div class="row">
	
    <div class="form-group col-lg-8">
    <input type="submit" class="btn btn-primary center-block" />
</div>

</div>
</form>
<div class="col-lg-12">

<div class="col-lg-8">
<h3 align="center"><b> Add Department</b></h3>
</div>

<br>
<form class="form-horizontal" action="dpt_insert.php" method="post">


<div class="row">

    <div class="form-group col-lg-12">
    <label class="control-label col-lg-2" > Department Name </label>
    <div class="col-lg-6">
    <input type="text" class="form-control" name="dpt_name" placeholder="Enter department name" />
    </div>
    </div>
</div>

<div class="row">
	
    <div class="form-group col-lg-8">
    <input type="submit" class="btn btn-primary center-block" />
</div>
</div>
</form>
</div>

</body>
</html>