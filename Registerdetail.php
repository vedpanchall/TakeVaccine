<!DOCTYPE html>
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include ("connect.php");
   ob_start();
session_start();
 $usr= $_SESSION['userId'];

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

  <title>Take Vaccine-Registration</title>
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
  margin-top: -85px;
}
</style>
 <header id="header" class="fixed-top header-transparent">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="index.html">Take Vaccine</a></h1>
	  <div id="register-link" class="text-right">
	
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
    
      <nav id="navbar" class="navbar" style="margin-bottom :0%">
	  <li class="dropdown"><a href="#"><span>Vaccination Service</span> <i class="bi bi-chevron-down"></i></a>
                <ul>
                  <li><a href="http://localhost/Project/TakeVaccine/Register.php">Register Member</a></li>
                  <li><a href="http://localhost/Project/TakeVaccine/Registerdetail.php">Search Vaccination centre</a></li>
                  <li><a href="http://localhost/Project/TakeVaccine/Registerdetail.php">Book Vaccination Centre</a></li>
                 </ul> </li>
          
		  <li class="dropdown"><a href="#"><span>Platforms</span> <i class="bi bi-chevron-down"></i></a>
                <ul>
                  <li><a href="http://localhost/Project/TakeVaccine/Adminlogin/Admin.php">Department Login</a></li>
                  <li><a href="http://localhost/Project/TakeVaccine/Adminlogin/Admin.php">Vaccination statistics</a></li>
                 </ul> </li>
          
		  <li class="dropdown"><a href="#"><span>About Us</span> <i class="bi bi-chevron-down"></i></a>
                <ul>
                  <li><a href="#">How To Get Vaccinated</a></li>
                  <li><a href="#">Overview</a></li>
				  <li><a href="#">Guidelines</a></li>
                 </ul> </li>
         
		  <li class="dropdown"><a href="#"><span>Download Certificate</span> <i class="bi bi-chevron-down"></i></a>
                <ul>
                  <li><a href="http://localhost/Project/TakeVaccine/Register.php">Verify Certificate</a></li>
                  <li><a href="http://localhost/Project/TakeVaccine/Register.php">Download Certificate</a><li>
                 </ul> </li>
          
		  <li class="dropdown"><a href="#"><span>Help</span> <i class="bi bi-chevron-down"></i></a>
                <ul>
                  <li><a href="http://localhost/Project/TakeVaccine/index.php">FAQ</a></li>
                  <li><a href="http://localhost/Project/TakeVaccine/index.php">Contact Us</a></li>
				  </ul><li>
				  <li>
				 
				  
				  <a class="getstarted scrollto" href="http://localhost/Project/TakeVaccine/Register.php" style=" cursor:pointer; padding: 8px 25px;  margin-left: 12px;   border-radius: 4px;color: #fff;font-weight: 400; font-family: &quot;Poppins&quot;,san-serif; border: 2px solid #5c9f24;">Register/Login</a>
				 
                 </li>
  <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

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
                            <h3 class="text-center text-info" style="color:green">Register for Vaccination</h3>
							
                            <div class="form-group">
                                <label for="name" >Name:</label><br>
                                <input type="test" name="name" id="name" placeholder="Name" class="form-control" required>
                            </div>
							<div class="form-group">
                                <label for="username" >Dose:</label><br>
				
                                <input class="form-check-input" type="radio" name="dose" id="dose1" value="dose1">
  <label class="form-check-label" for="flexRadioDefault1">
    Dose 1
  </label>
								<input class="form-check-input" type="radio" name="dose" id="dose2" value="dose2">
  <label class="form-check-label" for="flexRadioDefault1">
    Dose 2
  </label>
								
                            </div>
                            
							<div class="form-group">
							<label for="fname" >ID Proof:</label><br>
                                <select  class="form-control" name="proof"  id="proof-dropdown" required>
								<option checked>Select ID Proof</option>
									<option value="1">Adhar Card</option>
									<option value="2">Driving License</option>
								
								</select>        
                            </div>
							 <div class="form-group">
                                <label for="name" >ID Number:</label><br>
                                <input type="text" name="Id_Number" id="name" placeholder="ID Number" class="form-control" required>
                            </div>
							
						   <div class="form-group">
							<label for="fname" >Vaccine Name:</label><br>
                                <select  class="form-control" name="vaccinename"  id="name-dropdown" required>
								<option checked>Select Vaccine Name</option>
									<option value="1">Covishield Vaccine</option>
									<option value="2">Covaxin Vaccine</option>
								
								</select>
								<div class="form-group">
                                <label for="username" >Gender:</label><br>
				
                                <input class="form-check-input" type="radio" name="gender" id="male" value="male">
  <label class="form-check-label" for="flexRadioDefault1">Male
  </label>
								<input class="form-check-input" type="radio" name="gender" id="female" value="female">
  <label class="form-check-label" for="flexRadioDefault1">Female
  </label>
  <input class="form-check-input" type="radio" name="gender" id="others" value="others">
  <label class="form-check-label" for="flexRadioDefault1">Others
  </label>
                            </div>
							 <div class="form-group">
                                <label for="name" >Year Of Birth:</label><br>
                                <input type="date" name="date" id="date" class="form-control" required>
                            </div>
                            					   
                            <div class="form-group">
                    
                            <input type="submit" name="Register" class="btn btn-info btn-md" style="color:midnightblue ;"  value="Register" style=" height: 36px;">

                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    
  </main><!-- End #main -->

  <?php
  if(isset($_POST['name']) || isset($_POST['dose']) || isset($_POST['proof']) || isset($_POST['Id_Number']) || isset($_POST['vaccinename']) || isset($_POST['gender']) || isset($_POST['date'])){
	if(isset($_POST['Register']))
	{
		$nm=$_POST['name'];
		$do=$_POST['dose'];
		$pr=$_POST['proof'];
		$nu=$_POST['Id_Number'];
		$vn=$_POST['vaccinename'];
    $gn=$_POST['gender'];
    $da=$_POST['date'];
    $sta = 'Pending';



$today = date("Y-m-d");
$diff = date_diff(date_create($da), date_create($today));
//echo 'Age is '.
$a=$diff->format('%y');

 if($a>=18)
 {

	
	$inData ="insert into sub_user (User_ID,Status,Dose,Name,Gender,ID_proof,Vaccine_Name,ID_Number,date) VALUES($usr,'$sta','$do','$nm','$gn','$pr','$vn','$nu','$da')";
  //echo $inData;
  
if($res=$con->query($inData)){
           

              ?>
              <script>
                alert("Registered Successfully");
              </script>
           <?php
              header('Location:http://localhost/Project/TakeVaccine/Accountdetail.php');
          
           } 
}
else
{
  ?>
  <script>
    alert("You are under age");
  </script>
  <?php
}

}

}
	//echo $in;die();
  
  
            
  ?>
</form>
</body>

</html>