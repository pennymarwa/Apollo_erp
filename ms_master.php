<?php
ob_start();
session_start();
include_once("session.php");
include_once("connect.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" href="css/template.css" />
   <link href="css/bootstrap.min.css" rel="stylesheet">
   <script src="js/jquery-1.11.0.js"></script>
   <script src="js/bootstrap.min.js"></script>

</head>

<body>
<div class="container" style="width:100%">
<br /><br />
<div class="row">
    <div class="col-lg-12">
    <h2 align="center"><b>Add services</b></h2>
    <br />
    </div>

<br />
</div>
<form class="form-horizontal" action="ms_insert.php" method="post">
<div class="row">
    <div class="form-group col-lg-12">
   		 <label class="control-label col-lg-2" > Main Services </label>
        <div class="col-lg-6">
        <input type="text" class="form-control" name="ms_name" placeholder="Enter services" />
        </div>
    </div>
</div>

    <div class="row">
        
        <div class="form-group col-lg-8">
        <input type="submit" class="btn btn-primary center-block" />
    </div>
    </div>
    <div class="row">
    <?php
	include_once("s_master.php");
	?>
    </div>
    <div class="row">
    <?php
    
    include_once("ss_master.php");
    ?>
    </div>
</form>
</div>
</div>

</body>
</html>