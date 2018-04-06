<head>
<script type="text/javascript" src="js/admit_validation.js"></script>
</head>

<?php

$adstr=mysql_query("select * from add_patient");

?><head>
<script type="text/javascript" src="ajax_admit.js"></script>
</head>

<div class="container" style="width:100%">

    <div class="row">
        <div class="col-lg-12">
        <h2 align="center"><b> ADMIT PATIENT </b> </h2>
        </div>
        
    </div>
<br />

    <div class="row">
        <div class="col-lg-6">
        <form class="form-horizontal" name="myForm" action="add_admit.php" method="post" onsubmit="return(validate());">
        
            <div class="row">
                
                <div class="form-group col-lg-12">
                <label class="control-label col-lg-2" > Patient id </label>
                <div class="col-lg-8">
                <input type="text" class="form-control" name="p_id" placeholder="Enter Patient-id" onblur="select_patient(this.value)"/> 
                
                </div>
                </div>
            </div>
        
            <div class="row">
                
                <div class="form-group col-lg-12">
                <label class="control-label col-lg-2" > Admission Date </label>
                <div class="col-lg-8">
                <input type="text" class="form-control" name="p_adate" value="<?php echo date("Y-m-d"); ?>" readonly="readonly" placeholder="Enter Admission date" />
                </div>
                </div>
            </div>
        
        
        
            <div class="row">
                
                <div class="form-group col-lg-12">
                <label class="control-label col-lg-2" > Doctor </label>
                <div class="col-lg-8">
               <select name="p_doc" class="form-control">
    			<option disabled selected>Select Doctor</option>
				<?php
				$adstr1=mysql_query("select * from doctor");
				while($adrow1=mysql_fetch_array($adstr1))
				{
					echo "<option value='$adrow1[d_name]'>$adrow1[d_name]	
					</option>"; 
					
					}
				?>
                </select>
                </div>
                </div>
            </div>
        
            <div class="row">
                
                <div class="form-group col-lg-12">
                <label class="control-label col-lg-2" > Ward no. </label>
                <div class="col-lg-8">
                <select name="p_ward" class="form-control">
    			<option disabled selected>Select Ward</option>
				<?php
				$adstr=mysql_query("select * from ward");
				while($adrow=mysql_fetch_array($adstr))
				{
					echo "<option value='$adrow[w_name]'>$adrow[w_name] $adrow[w_no]	
					</option>"; 
					
					}
				?>
                </select>
                </div>
                </div>
            </div>
        
        <br />
            <div class="row">
                
                <div class="form-group col-lg-8">
                <input type="submit" class="btn btn-primary center-block" />
            </div>
            
            
            </div>
        </form>
        </div>
    
    <div class=" col-lg-offset-1 col-lg-3">
    
    <div id="table">
    
    
    </div>
    
    
    </div>
    </div>






</div>

