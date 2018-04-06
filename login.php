<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/bootstrap.css" />
<link rel="stylesheet" href="css/login.css" />
</head>

<body>

<div id="d2">

<h1 align="center">Admin login</h1>
<hr width="200px" />
<form class="form-horizontal" action="verify.php" method="post">

 <div class="form-group">       
 <label class="col-lg-5 col-sm-2 control-label">User name</label>       
 <div class=" col-lg-3 col-sm-10">   
 <input type="text" class="form-control"   placeholder="Enter User name" name="uname">       
 </div>    
 </div>    
 <div class="form-group">       
 <label class="col-lg-5 col-sm-2 control-label">Password</label>       
 <div class="col-lg-3 col-sm-10">          
 <input type="password" class="form-control"  placeholder="Enter password" name="pass"  >       
 </div>    
 </div>        
 <div class="form-group">       
 <div class="col-sm-offset-5 col-sm-1">          
 <button type="submit" class="btn btn-default">Sign in</button>       
 </div>    
 </div> 


</form>



<script src="js/jquery-1.11.0.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap.js"></script>
</body>
</html>