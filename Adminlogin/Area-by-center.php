<?php
require_once "connect.php";

$Area_ID = $_GET['Area_ID'];

if(isset($Area_ID))
{
	   $result = mysqli_query($con,"SELECT * FROM slots where Area_ID=$Area_ID");
	while($row = mysqli_fetch_array($result)) {

	?>
	 <div class="col-md-6 form-group">
                  <label for="fname" >Vaccine Name:</label><br>
                               <select class="form-control" id="area-dropdown" name="area"required>
                               <option checked>Select Vaccine Type</option>
                               <option value="1">Covishield Vaccine</option>
                               <option value="2">Covaxin Vaccine</option>
                      </select>	
	   </div>	
								
			  
        
             <div class="col-md-6 form-group">
                  <label for="fname" >Dose:</label><br>
                               <select class="form-control" id="area-dropdown" name="area"required>
                               <option checked>Select Dose</option>
                               <option value="1">Dose1</option>
                               <option value="2">Dose2</option> </select>	
			</div>	
<div id="register-link" class="text-right">
<a href="http://localhost\Project\TakeVaccine/slotbooked.php" class="btn btn-warning" style="background-color: lightgrey; border: 2px solid grey; ">Book slot</a>
                        
	<?php
	}
} else{
echo "die";
}

?>

