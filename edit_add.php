<?php 
$p_id=$_REQUEST['p_id'];
$str=mysql_query("select* from add_patient where p_id='$p_id'");
$str1=mysql_fetch_array($str);

?>

<div class="container">
<div class="row">
<div class="col-lg-8">
	<h2 align="center"><b> ADD PATIENT </b> </h2>
    </div>
    
</div>
<br />
<div class="row">

<form class="form-horizontal" action="edit1_add.php" method="post">

<div class="row">
	
    <div class="form-group col-lg-12">
    <label class="control-label col-lg-2" > Patient First Name </label>
    <div class="col-lg-6">
    <input type="text" class="form-control" name="p_fname" placeholder="Enter first name" value="<?Php echo $str1[p_fname]; ?>" />
    </div>
    </div>
</div>
<div class="row">
	
    <div class="form-group col-lg-12">
    <label class="control-label col-lg-2" > Patient Last Name </label>
    <div class="col-lg-6">
    <input type="text" class="form-control" name="p_lname" placeholder="Enter last name" value="<?Php echo $str1[p_lname]; ?>" />
    </div>
    </div>
</div>
<div class="row">
	
    <div class="form-group col-lg-12">
    <label class="control-label col-lg-2" > Age </label>
    <div class="col-lg-6">
    <input type="number" class="form-control" name="p_age" placeholder="Enter Age" value="<?Php echo $str1[p_age]; ?>"/>
    </div>
    </div>
</div>
<div class="row">
	
    <div class="form-group col-lg-12">
    <label class="control-label col-lg-2" > Gender </label>
    <div class="col-lg-6">
    <input type="radio" name="p_gender" value="male"
	<?php 
	if($str1[p_gender]=="male")
	{
		echo "checked=checked";
	}
	?>
    >male
    
     <input type="radio"  name="p_gender" value="female" <?php 
	if($str1[p_gender]=="female")
	{
		echo "checked=checked";
	}
	
	?> >female
    
    </div>
    </div>
</div>

<div class="row">
	
    <div class="form-group col-lg-12">
    <label class="control-label col-lg-2" > Entry Date </label>
    <div class="col-lg-6">
    <input type="date" class="form-control" name="p_edate" placeholder="Entry Date" value="<?Php echo $str1[p_edate]; ?>"/>
    </div>
    </div>
</div>


<div class="row">
	
    <div class="form-group col-lg-12">
    <label class="control-label col-lg-2" > Contact </label>
    <div class="col-lg-6">
    <input type="number" class="form-control" name="p_contact" placeholder="Enter Contact no." value="<?Php echo $str1[p_contact]; ?>"/>
    </div>
    </div>
</div>


<div class="row">
	
    <div class="form-group col-lg-12">
    <label class="control-label col-lg-2" > Email Address </label>
    <div class="col-lg-6">
    <input type="email" class="form-control" name="p_email" placeholder="Enter Email Address" value="<?Php echo $str1[p_email]; ?>" />
    </div>
    </div>
</div>
<br />
<input type="hidden" name="p_id" value="<?php echo $p_id ?>"

<div class="row">
	
    <div class="form-group col-lg-8">
    <input type="submit" class="btn btn-primary center-block" />
</div>



</form>
















</div>


