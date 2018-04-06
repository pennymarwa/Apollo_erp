<head>
<script type="text/javascript" src="js/add_validation.js"></script>
</head>

<div class="container" style="width:100%">
<div class="row">
<div class="col-lg-8">
	<h2 align="center"><b> ADD PATIENT </b> </h2>
    </div>
    
</div>
<br />
<div class="row">

<form class="form-horizontal" name="myForm" action="add_form1.php" method="post" onsubmit="return(validate());">

<div class="row">
	
    <div class="form-group col-lg-12">
    <label class="control-label col-lg-2" > Patient First Name </label>
    <div class="col-lg-6">
    <input type="text" class="form-control" name="p_fname" placeholder="Enter first name" />
    </div>
    </div>
</div>
<div class="row">
	
    <div class="form-group col-lg-12">
    <label class="control-label col-lg-2" > Patient Last Name </label>
    <div class="col-lg-6">
    <input type="text" class="form-control" name="p_lname" placeholder="Enter last name" />
    </div>
    </div>
</div>
<div class="row">
	
    <div class="form-group col-lg-12">
    <label class="control-label col-lg-2" > Age </label>
    <div class="col-lg-6">
    <input type="number" class="form-control" name="p_age" placeholder="Enter Age" />
    </div>
    </div>
</div>
<div class="row">
	
    <div class="form-group col-lg-12">
    <label class="control-label col-lg-2" > Gender </label>
    <div class="col-lg-6">
    <input type="radio"  name="p_gender" value="male" /> Male &nbsp;&nbsp;
    <input type="radio"  name="p_gender" value="female" /> Female
    </div>
    </div>
</div>

<div class="row">
	
    <div class="form-group col-lg-12">
    <label class="control-label col-lg-2" > Entry Date </label>
    <div class="col-lg-6">
    <input type="text" class="form-control" value="<?php echo date("Y-m-d"); ?>" name="p_edate" readonly="readonly" placeholder="Entry Date" />
    </div>
    </div>
</div>


<div class="row">
	
    <div class="form-group col-lg-12">
    <label class="control-label col-lg-2" > Contact </label>
    <div class="col-lg-6">
    <input type="number" class="form-control" name="p_contact" placeholder="Enter Contact no." />
    </div>
    </div>
</div>


<div class="row">
	
    <div class="form-group col-lg-12">
    <label class="control-label col-lg-2" > Email Address </label>
    <div class="col-lg-6">
    <input type="email" class="form-control" name="p_email" placeholder="Enter Email Address" />
    </div>
    </div>
</div>
<br />
<div class="row">
	
    <div class="form-group col-lg-8">
    <input type="submit" class="btn btn-primary center-block" />
</div>



</form>
















</div>


