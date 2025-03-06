<?php
include ("connect.php");
ob_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
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
  height: 100vh;
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

  <!-- =======================================================
  * Template Name: Baker - v4.3.0
  * Template URL: https://bootstrapmade.com/baker-free-onepage-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-transparent">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="index.html" style="margin-left:-60px"> Take Vaccine</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section  class="d-flex align-items-center justify-content-center" style="padding: 20px">
  
    <div class="container position-relative" style="width:100%">
      <div id="myCarousel" class="carousel slide" data-ride="carousel" style="margin-top: 20px">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="towfiqu-barbhuiya-ktBXHKC50vc-unsplash.jpg" alt="vaccin pic" style="width:100%;max-height: 300px !important;">
         <div class="carousel-caption">   
        
        
      </div></div>

      <div class="item">
        <img src="Capture4.jpg" alt="vaccin pic" style="width:100%;max-height: 300px !important;">
        <div class="carousel-caption">

         
       
      </div>
    </div>
    
    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

  <main id="main" style="padding-top:30px;">
  <?php
if(isset($_POST['name']) || isset($_POST['email']) || isset($_POST['password']) || isset($_POST['state']) || isset($_POST['city'])){
	if(isset($_POST['submit']))
	{
		$nm=$_POST['name'];
		$em=$_POST['email'];
		$ps=$_POST['password'];
		$st=$_POST['state'];
		$ci=$_POST['city'];
	}
	$in="insert into User (name,email,password,state,city,role) VALUES('$nm','$em','$ps','$st','$ci','1')";
	//echo $in;die();
          // header ("location:view.php");
            if($res=$con->query($in)){
            	echo "<p style='color:green;' align='center'>data inserted successfully</p>";
              //  $user = $result->fetch_row();
                         $last_id = $con->insert_id;

          $_SESSION['userId'] = $last_id;
           //echo $last_id ; die();
              header('Location:http://localhost/Project/TakeVaccine/index2.php');
            }
          
            
            else{
            	echo "Opps! somthing went wrong.";
            }
         }
           

?>

  <div id="login">
        <div class="container">
            <div id="login-row" class="justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12" style="height:100%">
                         <form id="login-form" class="form" action="" method="post">
                            <h3 class="text-center text-info">Register</h3>
							<div class="form-group">
                                <label for="username" >Name:</label><br>
                                <input type="text" name="name" id="name" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="username" >Email:</label><br>
                                <input type="email" name="email" id="email" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="password" >Password:</label><br>
                                <input type="password" name="password" id="password" class="form-control" required>
                            </div>
							<div class="form-group">
							<label for="fname" >State:</label><br>
                                <select  class="form-control" name="state"  id="state-dropdown" required>
								<option checked>Select State</option>
									<option value="1">Gujarat</option>
									<option value="2">Maharastra</option>
									<option value="3">Rajastan</option>
								</select>        
                            </div>
							<div class="form-group">
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
                            					   
                            <div class="form-group">
                    
                            <input type="submit" name="submit" class="btn btn-info btn-md" style="background-color:#ffce3a;" value="submit">
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

   

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>Covid 19 Vaccine</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/baker-free-onepage-bootstrap-theme/ -->
          Designed by <a href="https://bootstrapmade.com/">Take Vaccine</a>
        </div>
      </div>
      
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  
</body>

</html>