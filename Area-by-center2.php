<?php
require_once "connect.php";

$Area_ID = $_GET['Area_ID'];
if($Area_ID != 'null')
{
	   $result = mysqli_query($con,"SELECT * FROM slots where Area_ID=$Area_ID");
	while($row = mysqli_fetch_array($result)) {
      
	?>
	 <div class="col-md-6 form-group">
                  <label for="fname" >Vaccine Name:</label><br>
		<input type="text" class="form-control" name="area" value="<?php if($row['Vaccine_Name'] ==1){echo"Covishield Vaccine";}else{echo"Covaxin Vaccine";}?>">

	   </div>	
								
			  
        <input type="hidden" name="vaccine_id" value="<?php echo $row['ID'] ;?>" >
             <div class="col-md-6 form-group">
                  <label for="fname" >Dose 1:</label><br>
                              <input type="text" class="form-control" name="dose1" value="<?php echo $row['Dose_1'] ;?>">	
			</div>	
		<div class="col-md-6 form-group">
                  <label for="fname" >Dose 2:</label><br>
                              <input type="text" class="form-control" name="dose2" value="<?php echo $row['Dose_2'] ;?>">	
			</div>	
<div id="register-link" class="text-right">
<a href="http://localhost/ved/Baker2/index2.php" class="btn btn-warning" style="background-color: lightgrey; border: 2px solid grey; ">Login</a>
                        
	<?php
	}
} else{
echo "die";
}

?>

