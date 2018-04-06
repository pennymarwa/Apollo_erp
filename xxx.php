 <div class="form-group col-lg-12">
    <label class="control-label col-lg-2" > Patient Name </label>
    <div class="col-lg-6">
    <select name="p_id"  class="form-control">
    <option disabled selected>Select Patient</option>
    <?php
	while($adrow=mysql_fetch_array($adstr))
	{
		echo "<option value='$adrow[p_id]'>$adrow[p_fname] $adrow[p_lname]     (Patient Id:".$adrow[p_id].")</option>"; 
		
		
		}
	?>
    </select>
    </div>
    </div>