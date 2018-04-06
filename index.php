<?php
ob_start();
session_start();
error_reporting(0);
include_once("session.php");
include_once("connect.php");
include_once("mailme.php");
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
<div class="container" style="width:100%;">
	<div class="row" style="background-color:#65BAED;">
        <div class="navbar-header">
            
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#target">
            <span>Menu</span> 
             
            </button>
            <h2 id="h1"><b>Welcome Manpreet!</b></h2>
            
        </div>
        <div class="collapse navbar-collapse" id="target">
    
            <ul class="nav navbar-nav navbar-right" id="menu">
            
           <li class="dropdown">
           
           
           <button type="button" class="btn btn-default btn-lg dropdown-toggle" data-toggle="dropdown" id="bt1" data-target="dropdown-menu">
           <a href="#"> <span class="glyphicon glyphicon-user">&nbsp;<span class="caret"></span></span></a> </button>
               <ul class="dropdown-menu"  role="menu" 	 style="color:#000;">
              
               
               <li><a href="logout.php">Logout</a></li>
               </ul>
           </li>
            </ul>
        </div>

</div><!--row close-->


	<div class="row">
    <div class="col-lg-2" style="background-color:#005C77; height:1000px;">
     <ul type="none" id="menu1">
            <li><img src="images/dashboard1.png" id="im1" />&nbsp;&nbsp;<a href="index.php">DASHBOARD</a></li>
            
            <li><img src="images/ic_add_entry.png" id="im1" />&nbsp;&nbsp;
            <?php echo "<a href='index.php?a=display'>ADD PATIENT</a>";?></li>
            <li><img src="images/ic_add_entry.png" id="im1" />&nbsp;&nbsp;
			<?php echo"<a href='index.php?a=admit'>ADMIT PATIENT</a>"; ?></li>
            <li><img src="images/update3 copy.png" id="im1" />&nbsp;&nbsp;
            <?php echo "<a href='index.php?a=discharge'>DISCHARGE</a>"; ?></li>
            <li><img src="images/2icon4Pouch by Andrei Nichita.png" id="im1" />&nbsp;&nbsp;
            <?php echo "<a href='index.php?a=feedback'>SERVICES</a> "; ?></li>
            <li><img src="images/update3 copy.png" id="im1" />&nbsp;&nbsp;
            <?php echo "<a href='index.php?a=rating'>RATING</a>"; ?></li>
            <li><img src="images/update3 copy.png" id="im1" />&nbsp;&nbsp;
            <?php echo "<a href='index.php?a=ward'>ADD WARD</a>"; ?></li>
            <li><img src="images/update3 copy.png" id="im1" />&nbsp;&nbsp;
            <?php echo "<a href='index.php?a=d_entry'>ADD DOCTOR</a>"; ?></li>
            
            
            </ul>
            
     </div>
     <div class="col-lg-10">     
     <?php
	  if($_REQUEST['a']=="admit")
	 include_once("display_admit.php");
	 else if($_REQUEST['a']=="display")
	 include_once("display_add.php");
	 else if($_REQUEST['a']=="admit_p")
	 include_once("admit_p.php");
	 else if($_REQUEST['a']=="edit")
	 include_once("edit_add.php");
	 else if($_REQUEST['a']=="adedit")
	 include_once("edit_admit.php");
	 
	 else if($_REQUEST['a']=="add_p")
	 include_once("form1.php");
	 else if($_REQUEST['a']=="feedback")
	 include_once("ms_master.php");
	 else if($_REQUEST['a']=="rating")
	 include_once("display_feedbackform1.php");
	 else if($_REQUEST['a']=="discharge")
	 include_once("display_discharge.php");
	 else if($_REQUEST['a']=="ward")
	 include_once("ward.php");
	 else if($_REQUEST['a']=="d_entry")
	 include_once("d_entry.php");
	 else
	 {
	 ?>
     
     <div class="row col-lg-12">
     <div class="col-lg-5">
     <img src="images/cmyk-1024x1024.jpg" id="im2"></div>
     <div class="col-lg-7">

     <h3 id="h2">"State of the art 350 bedded hospital with most eminent medical professionals, paramedics and skilled nursing professionals"</h3>
	 </div>
     <?php
	 }
	 ?>
     </div>
     </div>













</div>
</div>
</body>
</html>
