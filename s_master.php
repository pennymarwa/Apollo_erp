<?php
ob_start();
session_start();
include_once("session.php");
include_once("connect.php");

$serv=mysql_query("select * from ms_master");
?>
<html>
<head>

<title>Untitled Document</title>
<link rel="stylesheet" href="css/template.css" />
   <link href="css/bootstrap.min.css" rel="stylesheet">
   <script src="js/jquery-1.11.0.js"></script>
   <script src="js/bootstrap.min.js"></script>

</head>
<form class="form-horizontal" action="s_insert.php" method="post">

<div class="row">
	
    <div class="form-group col-lg-12">
    <label class="control-label col-lg-2" > Main services </label>
    <div class="col-lg-6">
    <select name="ms_id"  class="form-control">
    <option disabled selected>Select Main services</option>
    <?php
	while($adrow=mysql_fetch_array($serv))
	{
		echo "<option value='$adrow[ms_id]'>$adrow[ms_name]      (Id:".$adrow[ms_id].")</option>"; 
		
		
		}
	?>
    </select>
    </div>
    </div>
</div>


<div class="row">
	
    <div class="form-group col-lg-12">
    <label class="control-label col-lg-2" > Services </label>
    <div class="col-lg-6">
    <input type="text" class="form-control" name="s_name" placeholder="Enter services" />
    </div>
    </div>
</div>

<div class="row">
	
    <div class="form-group col-lg-8">
    <input type="submit" class="btn btn-primary center-block" />
</div>
</div>
</form>