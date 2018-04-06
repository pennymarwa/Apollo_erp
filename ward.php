<?php
ob_start();
session_start();
include_once("session.php");
include_once("connect.php");

$serv=mysql_query("select * from ward");
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
<div class="col-lg-8">
<h3 align="center"><b> Add Ward</b></h3>
<br>
</div>
<form class="form-horizontal" action="w_insert.php" method="post">


<div class="row">

    <div class="form-group col-lg-12">
    <label class="control-label col-lg-2" > Ward Name </label>
    <div class="col-lg-6">
    <input type="text" class="form-control" name="w_name" placeholder="Enter Ward name" />
    </div>
    </div>
</div>

<div class="row">

    <div class="form-group col-lg-12">
    <label class="control-label col-lg-2" > Ward no. </label>
    <div class="col-lg-6">
    <input type="number" class="form-control" name="w_no" placeholder="Enter Ward no." />
    </div>
    </div>
</div>

<div class="row">
	
    <div class="form-group col-lg-8">
    <input type="submit" class="btn btn-primary center-block" />
</div>


</body>
</html>