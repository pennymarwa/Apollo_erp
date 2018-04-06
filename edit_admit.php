<?php 
include_once("connect.php");
$s_no=$_REQUEST['s_no'];
$str=mysql_query("select* from admit_patient where s_no='$s_no'");
$str1=mysql_fetch_array($str);

?>
<div class="container">
<div class="row">
<div class="col-lg-8">
	<h2 align="center"><b> ADMIT PATIENT </b> </h2>
    </div>
    
</div>
<br />
<div class="row">

<form class="form-horizontal" action="edit1_admit.php" method="post">


    

<div class="row">
	
    <div class="form-group col-lg-12">
    <label class="control-label col-lg-2" > Admission Date </label>
    <div class="col-lg-6">
    <input type="date" class="form-control" name="p_adate" placeholder="Enter Admission date"  value="<?Php echo $str1['p_adate']; ?>"/>
    </div>
    </div>
</div>


<div class="row">
	
    <div class="form-group col-lg-12">
    <label class="control-label col-lg-2" > Department </label>
    <div class="col-lg-6">
      
   <select class="form-control" name="p_dept">
   <option value="Dept. 1" 
   <?php
   if($str1[p_dept]=="Dept. 1")
   {
	   echo "selected=selected";
   }
   ?>
   >Dept. 1</option>
    <option value="Dept. 2"
    <?php
   if($str1[p_dept]=="Dept. 2")
   {
	   echo "selected=selected";
   }
   ?>>Dept. 2</option>
    <option value="Dept. 3"
    <?php
   if($str1[p_dept]=="Dept. 3")
   {
	   echo "selected=selected";
   }
   ?>>Dept. 3</option>
    <option value="Dept. 4"
    <?php
   if($str1[p_dept]=="Dept. 4")
   {
	   echo "selected=selected";
   }
   ?>>Dept. 4</option>
     </select>
    </div>
    </div>
</div>
<div class="row">
	
    <div class="form-group col-lg-12">
    <label class="control-label col-lg-2" > Doctor </label>
    <div class="col-lg-6">
  <select class="form-control" name="p_doc">
   <option value="Doc. A" 
   <?php
   if($str1[p_doc]=="Doc. A")
   {
	   echo "selected=selected";
   }
   ?>
   >Doc. A</option>
    <option value="Doc. B"
    <?php
   if($str1[p_doc]=="Doc. B")
   {
	   echo "selected=selected";
   }
   ?>>Doc. B</option>
    <option value="Doc. C"
    <?php
   if($str1[p_doc]=="Doc. C")
   {
	   echo "selected=selected";
   }
   ?>>Doc. C</option>
    <option value="Doc. D"
    <?php
   if($str1[p_doc]=="Doc. D")
   {
	   echo "selected=selected";
   }
   ?>>Doc. D</option>
     </select>  </div>
    </div>
</div>

<div class="row">
	
    <div class="form-group col-lg-12">
    <label class="control-label col-lg-2" > Ward no. </label>
    <div class="col-lg-6">
    <input type="number" class="form-control" name="p_ward" placeholder="Enter Ward no."   value="<?Php echo $str1[p_ward]; ?>"/>
    </div>
    </div>
</div>


<div class="row">
	
    <div class="form-group col-lg-12">
    <label class="control-label col-lg-2" > Discharge date </label>
    <div class="col-lg-6">
    <input type="date" class="form-control" name="p_ddate" placeholder="Enter Discharge date"   value="<?Php echo $str1['p_ddate']; ?>"/>
    </div>
    </div>
</div>


<div class="row">
	
    <div class="form-group col-lg-12">
    <label class="control-label col-lg-2" > Patient Status </label>
    <div class="col-lg-6">
     <select class="form-control" name="p_status">
   <option value="cured" 
   <?php
   if($str1[p_status]=="cured")
   {
	   echo "selected=selected";
   }
   ?>
   >Cured</option>
    <option value="Doc. B"
    <?php
   if($str1[p_status]=="uncured")
   {
	   echo "selected=selected";
   }
   ?>>Uncured</option>
    <option value="dama"
    <?php
   if($str1[p_status]=="dama")
   {
	   echo "selected=selected";
   }
   ?>>Dama</option>
    <option value="expired"
    <?php
   if($str1[p_status]=="expired")
   {
	   echo "selected=selected";
   }
   ?>>Expired</option>
     </select>  </div>
    </div>
</div>

<br />


</div>


<input type="hidden" name="s_no" value="<?php echo $s_no ?>"

<div class="row">
	
    <div class="form-group col-lg-8">
    <input type="submit" class="btn btn-primary center-block" />
</div>

</form>

</div>


