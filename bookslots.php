<html>
<head>
 
  <?php
  ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include ("connect.php");
ob_start();
session_start();

//$query = "SELECT * FROM `slot_booked`";
  //$res= $con->query($query);
?>


<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--<title> Responsive Footer | CodingLab</title>--->
    <link rel="stylesheet" href="style.css">	
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Book Slots</title>
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


  <!-- =======================================================
  * Template Name: Baker - v4.3.0
  * Template URL: https://bootstrapmade.com/baker-free-onepage-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  
</head>

<body style="padding-top:75px";>

  
      <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-transparent">
    <div class="container d-flex align-items-center justify-content-between"></a>-->

      <h1 class="logo"><a href="index.html">Take Vaccine</a></h1>
	  <div id="register-link" class="text-right">
	
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
    
      <nav id="navbar" class="navbar" style="margin-bottom :0%">
	  <li class="dropdown"><a href="#"><span>Vaccination Service</span> <i class="bi bi-chevron-down"></i></a>
                <ul>
                  <li><a href="#">Register Member</a></li>
                  <li><a href="#">Search Vaccination centre</a></li>
                  <li><a href="#">Book Vaccination Centre</a></li>
                 </ul> </li>
          
		  <li class="dropdown"><a href="#"><span>Platforms</span> <i class="bi bi-chevron-down"></i></a>
                <ul>
                  <li><a href="#">Department Login</a></li>
                  <li><a href="#">Vaccination statistics</a></li>
                 </ul> </li>
          
		  <li class="dropdown"><a href="#"><span>About Us</span> <i class="bi bi-chevron-down"></i></a>
                <ul>
                  <li><a href="#">How To Get Vaccinated</a></li>
                  <li><a href="#">Overview</a></li>
				  <li><a href="#">Guidelines</a></li>
                 </ul> </li>
         
		  <li class="dropdown"><a href="#"><span>Download Certificate</span> <i class="bi bi-chevron-down"></i></a>
                <ul>
                  <li><a href="#">Verify Certificate</a></li>
                  <li><a href="#">Download Certificate</a><li>
                 </ul> </li>
          
		  <li class="dropdown"><a href="#"><span>Help</span> <i class="bi bi-chevron-down"></i></a>
                <ul>
                  <li><a href="#">FAQ</a></li>
                  <li><a href="#">Contact Us</a></li>
				  </ul><li>
				  <li>
				 
				  
				  <a class="getstarted scrollto" href="" style=" cursor:pointer; padding: 8px 25px;  margin-left: 12px;   border-radius: 4px;color: #fff;font-weight: 400; font-family: &quot;Poppins&quot;,san-serif; border: 2px solid #5c9f24;">Register/Login</a>
				 
                 </li>
  <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>	
  </header>
  <div  class="nearestCentersSection pb-5">
   <div  class="container">
      <h1  class="text-center accessibility-plugin-ac">Search Your Nearest Vaccination Center</h1>
      <p  class="text-center accessibility-plugin-ac">Get a preview list of the nearest centers and check availability of vaccination slots</p>
      <a  target="_blank" aria-label="Login to book your slot" class="text-center accessibility-plugin-ac d-block" >Login to book your slot</a>
	   <div class="col-md-12">
            <form action="#" method="post" >
              <div class="row">
                <div class="col-md-6 form-group">

				<label for="fname" >State:</label><br>
                                <select  class="form-control" name="state"  id="state-dropdown" required>
								<option checked>Select State</option>
									<option value="1">Gujarat</option>
									<option value="2">Maharastra</option>
									<option value="3">Rajastan</option>
								</select>        
                            </div>
						 <div class="col-md-6 form-group">
							<label for="fname" >City:</label><br>
                               <select class="form-control" id="city-dropdown" name="city"required>
                               <option checked>Select City</option></select>							   
                                </div>	
								<script>
                           $(document).ready(function() {
                           $('#state-dropdown').on('change', function() {
	                       $('#city-dropdown').html();
                           var state_id = this.value;
                          // alert(state_id);
                           $.ajax({
                           url: "states-by-city.php",
                           type: "GET",
                           data: {
                           state_id: state_id
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
                
				
			
						 <div class="col-md-6 form-group">
							<label for="fname" >Area:</label><br>
                               <select class="form-control" id="area-dropdown" name="areaName" required>
                               <option checked>Select Area Name</option></select>							   
                                </div>	
								<script>
                           $(document).ready(function() {
                           $('#city-dropdown').on('change', function() {
	                       $('#area-dropdown').html();
                           var city_id = this.value;
                          // alert(state_id);
                           $.ajax({
                           url: "states-by-city.php",
                           type: "GET",
                           data: {
                           city_id: city_id
                           },
                           cache: false,
                           success: function(result){
                           $('#area-dropdown').html(result); 
                           }
                           });
                           });
                           });    
                           </script>
						   <div class="col-md-12 form-group" id="areaVac">
                
                

				<script>
                           $(document).ready(function() {
                           $('#area-dropdown').on('change', function() {
	                       $('#areaVac').html();
                           var Area_ID = this.value;
                          // alert(state_id);
                           $.ajax({
                           url: "Area-by-center.php",
                           type: "GET",
                           data: {
                           Area_ID: Area_ID
                           },
                           cache: false,
                           success: function(result){
                           $('#areaVac').html(result); 
                           }
                           });
                           });
                           });    
                           </script>			
				</div>
            </form>
		 
</div>
                      <?php 
                        $id = $_GET['id'];
					  if(isset($_POST['submit']))
	{
    $query = "SELECT * FROM `sub_user` where `SubUser_ID` =$id";
  $res= $con->query($query);
    $row=$res->fetch_object();
    $userId =  $_SESSION['userId'];
		$su=$row->SubUser_ID;
		$ci=$_POST['city'];
		$st=$_POST['state'];
		$ar=$_POST['areaName'];
		$cn=$_POST['areaName'];
		$do=$row->Dose;
    $vacId = $_POST['vaccine_id'];
		$vacName = $row->Vaccine_Name;
  
	
                    $in = "INSERT INTO slot_booked (User_ID,SubUser_ID,City_ID,State_ID,Area_ID,Centre_Name,Dose,Vaccine_Name) VALUES ('$userId','$su', '$ci', '$st', '$ar', '$cn','$do','$vacName')";
                    
						            if($res=$con->query($in)){
                           $last_id = $con->insert_id;
                               $query1 = "SELECT * FROM `slots` where `ID` =$vacId";
                               $res1= $con->query($query1);
                               $row1=$res1->fetch_object();
                                         $dose=$row1->Dose_1;
                                         $totalDose = $dose - 1;
                                         if($row->Dose == "dose1")
                                         {
                                          $query= "UPDATE `slots` SET `Dose_1`='$totalDose' WHERE `ID` = $vacId";
                                             if ($con->query($query) === TRUE) {
                                             header('Location:http://localhost/Project/TakeVaccine/slotbooked.php.?id='.$last_id);
                                            echo "Record updated successfully";
                                          } else {
                                            echo "somthing went wrong!!!";
                                          }
                                         } else {
                                          $query= "UPDATE `slots` SET `Dose_2`='$totalDose' WHERE `ID` = $vacId";
                                          if ($con->query($query) === TRUE) {
											   header('Location:http://localhost/Project/TakeVaccine/slotbooked.php.?id='.$last_id);
                                            echo "Record updated successfully";
                                          } else {
                                            echo "somthing went wrong!!!";
                                          }
                                         }

            
            }else{
              echo "Opps! somthing went wrong.";
            }                     
         }
           
                          ?>
						  
          </body>
		  </html>
		  <?php 
		  $id = $_GET['id'];
		 
		  ?>