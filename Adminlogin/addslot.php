<!DOCTYPE html>
<?php

include ("connect.php");
   ob_start();
?>
<html lang="en">
<html lang="en" dir="ltr">
<head>
<meta charset="UTF-8">
    <!--<title> Responsive Footer | CodingLab</title>--->
    <link rel="stylesheet" href="style.css">	
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Baker Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo.png" rel="icon">
  <link href="assets/img/logo.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

<style>
 
body {
  margin: 0;
  padding: 0;
  height: 100px;
}
#login{
	margin-left: 35%;
}
#login .container #login-row #login-column #login-box {
  max-width: 600px;
  height: 320px;
  border: 1px solid #9C9C9C;
  margin-bottom:20%;
}
#login .container #login-row #login-column #login-box #login-form {
  padding: 20px;
}
#login .container #login-row #login-column #login-box #login-form #register-link {
  margin-top: 70px;
}
</style>
 

    </div>	
  </header>


  <!-- =======================================================
  * Template Name: Baker - v4.3.0
  * Template URL: https://bootstrapmade.com/baker-free-onepage-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  
      

	
<div id="login">
        <div class="container" style="margin-top:100px">
            <div id="login-row" class="justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12" style="height:100%;background:white">
                         <form id="login-form" class="form" action="" method="post">
                          
						   <h3 class="text-center text-info" style="color:green">Slot Management</h3>
							
                             <div class="form-group">
							<label for="fname" >Vaccine Name:</label><br>
                                <select  class="form-control" name="Vaccine_Name"  id="name-dropdown" required>
								<option checked>Select Vaccine Name</option>
									<option value="1">Covishield Vaccine</option>
									<option value="2">Covaxin Vaccine</option>
								
								</select>
								</div>
								<div class="form-group">
                                <label for="name" >Slot:</label><br>
                                <input type="number" name="Slots" id="name" placeholder="Slot Number" class="form-control" required>
                            </div>
							 <div class="form-group">
							 
							<div class="form-group">
				<label for="fname" >State:</label><br>
                                <select  class="form-control" name="State_ID"  id="state-dropdown" required>
								<option checked>Select State</option>
									<option value="1">Gujarat</option>
									<option value="2">Maharastra</option>
									<option value="3">Rajastan</option>
								</select>        
                            </div>
						 <div class="form-group">
							<label for="fname" >City:</label><br>
                               <select class="form-control" id="city-dropdown" name="City_ID"required>
                               <option checked>Select City</option></select>							   
                                </div>	
								<script>
                           $(document).ready(function() {
                           $('#state-dropdown').on('change', function() {
	                       $('#city-dropdown').html();
                           var State_ID = this.value;
                          // alert(state_id);
                           $.ajax({
                           url: "states-by-city.php",
                           type: "GET",
                           data: {
                           state_id: State_ID
                           },
                           cache: false,
                           success: function(result){
                           $('#city-dropdown').html(result); 
                           }
                           });
                           });
                           });    
                           </script>
                
                </div>
                
				
			
						 <div class="form-group">
							<label for="fname" >Area:</label><br>
                               <select class="form-control" id="area-dropdown" name="Area_ID" required>
                               <option checked>Select Area Name</option></select>							   
                                </div>	
								<script>
                           $(document).ready(function() {
                           $('#city-dropdown').on('change', function() {
	                       $('#area-dropdown').html();
                           var City_ID = this.value;
                          // alert(state_id);
                           $.ajax({
                           url: "states-by-city.php",
                           type: "GET",
                           data: {
                           city_id: City_ID
                           },
                           cache: false,
                           success: function(result){
                           $('#area-dropdown').html(result); 
                           }
                           });
                           });
                           });    
                           </script>
								
								
							<div class
							="form-group">
                                <label for="name" >Dose 1:</label><br>
                                <input type="number" name="Dose_1" id="name" placeholder="dose1" class="form-control" required>
                            </div>
							<div class="form-group">
                                <label for="name" >Dose 2:</label><br>
                                <input type="number" name="Dose_2" id="name" placeholder="dose2" class="form-control" required>
                            </div>
                            					   
                            <div class="form-group">
							
                    
                            <input type="submit" name="submit" class="btn btn-info btn-md" style="color:midnightblue ;"  value="submit" style=" height: 36px;">

                            </div>
                            
                        </form> 
						<?php
//if(isset($_POST['Vaccine_Name']) || isset($_POST['Slots']) || isset($_POST['City_ID']) || isset($_POST['Area_ID']) || isset($_POST['Dose_1'])  || isset($_POST['Dose_2']))
//{
	if(isset($_POST['submit']))
	{
		
		$vn=$_POST['Vaccine_Name'];
		$sl=$_POST['Slots'];
		$st=$_POST['State_ID'];
		$ct=$_POST['City_ID'];
		$ar=$_POST['Area_ID'];
		$do=$_POST['Dose_1'];
		$ds=$_POST['Dose_2'];
	
	
	$in="insert into slots (Vaccine_Name,Slots,State_ID,City_ID,Area_ID,Dose_1,Dose_2) VALUES('$vn','$sl','$st','$ct','$ar','$do','$ds')";
          // header ("location:view.php");
            if($res=$con->query($in)){
            	echo "<p style='color:green;' align='center'>data inserted successfully</p>";
               header('Location:http://localhost/Project/TakeVaccine/Adminlogin/slotmanagement.php');
            }
          
            
            else{
            	echo "Opps! somthing went wrong.";
            }
         }
           
//}
?> 
						
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    
  </main><!-- End #main -->

 
</body>

</html>