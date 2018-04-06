<?php
$sno=$_REQUEST['sno'];
$p_id=$_REQUEST['p_id'];
include_once("connect.php");
?>
<table class="table">
<thead>
<tr>
<th colspan="4" class="text-center">
<h3>DISCHARGE PATIENT</h3>
</th>
<th colspan="4" style="text-align:right">




</th>
</tr>
</thead>
</table>
<div class="row">
<form action="add_discharge.php" method="post">
    <div class="col-lg-7">
        <div class="row">
            
            <div class="form-group col-lg-12">
            <label class="control-label col-lg-3" > Discharge date </label>
                <div class="col-lg-8  ">
                <input type="date" class="form-control" name="p_ddate" placeholder="Enter Discharge date" />
                </div>
            </div>
        </div>
    
    
        <div class="row">
            
            <div class="form-group col-lg-12">
            <label class="control-label col-lg-3" > Patient Status </label>
                <div class="col-lg-8">
                <select class="form-control" name="p_status">
                <option value="cured">Cured</option>
                <option value="lama">LAMA</option>
                <option value="dama">DAMA</option>
                <option value="dor">DOR</option>
                <option value="absconding">absconding</option>
                <option value="expired">expired</option>
                </select>
                </div>
            </div>
        </div>
        
        <div class="row">
            
            <div class="form-group col-lg-12">
            <input type="hidden" name="sno" value="<?php echo $sno ;?>">
            <input type="hidden" name="p_id" value="<?php echo $p_id ;?>">
            
            <input type="submit" class="btn btn-primary  center-block">
            </div>
        </div>
    </div><!--first main col close-->
    </form>
    
    <div class=" col-lg-offset-1 col-lg-4">
    <?php
	$str=mysql_fetch_array(mysql_query("select * from admit_patient where s_no='$sno'"));
	$row=mysql_fetch_array(mysql_query("select * from add_patient where p_id='$str[p_id]'"));
	?>
    <table class="table">
<tbody>
<tr>
<th>First Name</th>
<td><?php echo $row[p_fname]; ?></td>
</tr>
<tr>
<th>Last Name</th>
<td><?php echo $row[p_lname]; ?></td>
</tr>
<tr>
<th>Age</th>
<td><?php echo $row[p_age]; ?></td>
</tr>
<tr>
<th>Gender</th>
<td><?php echo $row[p_gender]; ?></td>
</tr>
<tr>
<th>Entry Date</th>
<td><?php echo $row[p_edate]; ?></td>
</tr>
<tr>
<th>Contact</th>
<td><?php echo $row[p_contact]; ?></td>
</tr>
<tr>
<th>Email</th>
<td><?php echo $row[p_email]; ?></td>
</tr>
<tr>
<th>Admit Date</th>
<td><?php echo $str[p_adate]; ?></td>
</tr>

</tbody>
</table>
    </div><!--second main col close-->
    
    
    
</div><!--main row close-->
<!--
-->