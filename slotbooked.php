<!DOCTYPE html>

<?php
include ("connect.php");
$id = $_GET['id'];

$query = "SELECT * FROM `slot_booked` where `id` = $id";
  $res= $con->query($query);
?>
<html lang="en">
<html lang="en" dir="ltr">
<head>
<meta charset="UTF-8">
    <!--<title> Responsive Footer | CodingLab</title>--->
    <link rel="stylesheet" href="style.css">	
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Take Vaccine-Slot Booked</title>
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

<body>

  
      <!-- ======= Header ======= -->
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
                  <li><a href="http://localhost/Project/TakeVaccine/Register.php">Search Vaccination centre</a></li>
                  <li><a href="http://localhost/Project/TakeVaccine/Register.php">Book Vaccination Centre</a></li>
                 </ul> </li>
          
		  <li class="dropdown"><a href="#"><span>Platforms</span> <i class="bi bi-chevron-down"></i></a>
                <ul>
                  <li><a href="http://localhost/Project/TakeVaccine/Adminlogin/Admin.php">Department Login</a></li>
                    
                 </ul> </li>
          
		  <li class="dropdown"><a href="#"><span>About Us</span> <i class="bi bi-chevron-down"></i></a>
                <ul>
                  <li><a href="#">How To Get Vaccinated</a></li>
                  <li><a href="#">Overview</a></li>
				  <li><a href="#">Guidelines</a></li>
                 </ul> </li>
         
		 
          
		  <li class="dropdown"><a href="#"><span>Help</span> <i class="bi bi-chevron-down"></i></a>
                <ul>
                  <li><a href="http://localhost/Project/TakeVaccine/index.php">FAQ</a></li>
                  <li><a href="http://localhost/Project/TakeVaccine/index.php">Contact Us</a></li>
				  </ul><li>
				  <li>
				 
				  
				  <a class="getstarted scrollto" href="http://localhost/Project/TakeVaccine/index2.php" style=" cursor:pointer; padding: 8px 25px;  margin-left: 12px;   border-radius: 4px;color: #fff;font-weight: 400; font-family: &quot;Poppins&quot;,san-serif; border: 2px solid #5c9f24;" >Register/Login</a>
            </li>
            <?php
              if(isset($_post['submit']))
              {
                  header("location:http://localhost/Project/TakeVaccine/index2.php");
              }
				 ?>
                 </li>
  <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>	
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  
    <div class="container position-relative" style="width: 100%">
      <div id="myCarousel" class="carousel slide" data-ride="carousel" style="margin-top :6.8%;width: 130.5%;margin-left: -193px;">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="towfiqu-barbhuiya-ktBXHKC50vc-unsplash.jpg" alt="vaccin pic" style="width:100%;max-height: 300px !important";>
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
  </header><!-- End Header -->

 

		
    

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts section-bg"style="font-size:10px;width: 130.5%;margin-left: -193px; background-color:#2a2f47;">
      <div class="container">

        <div class="row counters">
<div class="col-lg-2 col-6 text-center" style="color:white">
            <p><i><b><i class="bx bx-phone-call"></i>Support for COVID-19 </i></b></p>
			</div>
          <div class="col-lg-2 col-6 text-center" style="color:white">
            <span style="color:white">91-11-23978046 or 1075</span>
            <p>Health Ministry</p>
          </div>

          <div class="col-lg-2 col-6 text-center"style="color:white">
            <span style="color:white" >1098</span>
            <p>Child</p>
          </div>

          <div class="col-lg-2 col-6 text-center"style="color:white">
            <span style="color:white"> 08046110007</span>
            <p>Mental Health</p>
          </div>

          <div class="col-lg-2 col-6 text-center"style="color:white" "font-size:14px">
            <span style="color:white"> 14567</span>
            <p>	Senior Citizens</p>
          </div>

        </div>

      </div>
    </section>
	 <section id="counts" class="counts section-bg"style="font-size:10px;width: 130.5%;margin-left: -193px; background-color:rgba(235,153,110,.16);">
      <div class="container" >

        <div class="row_section" style="color:black" "font-size:30px">
<div class="col-lg-2 col-12 text-center">
        
			</div>
          <div class="col-lg-4 col-12 text-center" style="font-size:16px">
		  <span> <i class="bx bx-test-tube" ></i>Total Vaccination Doses</span>
            <p>1,00,58,23,247</p>
            <span><b>India marches beyond 1 Billion Vaccine doses</b></span>
          </div>

          <div class="col-lg-4 col-12 text-center" style="font-size:16px">
            <span><i class="bx bxs-eyedropper"></i>Vaccinations Done Today</span>
            <p>73,000</p>
			<span><b>India sets world record of 2.5 Cr+ Vaccinations in a day</b></span>
          </div>

        
        </div>

      </div>
    </section>
	<!-- End Counts Section -->
	<div class="container" style="padding-top:2%;">
   
	<div class="col-lg-12 well" style="width:600px;margin-left:30%;">
		<div class="row">
				<form>
					<div class="col-sm-6">
					<?php
 $row=$res->fetch_object();
  {
	  $user = "select * from sub_user where `SubUser_ID` = $row->SubUser_ID";
	    $res1= $con->query($user);
		$row1=$res1->fetch_object();
				
		$user2 = "select * from state where `State_ID` = $row->State_ID";
	    $res2= $con->query($user2);
		$row2=$res2->fetch_object();
		
		 $user3 = "select * from city where `City_ID` = $row->City_ID";
	    $res3= $con->query($user3);
		$row3=$res3->fetch_object();
		
		$user4 = "select * from vaccination_centre where `Area_ID` = $row->Area_ID";
	    $res4= $con->query($user4);
		$row4=$res4->fetch_object();
		
		$user5 = "select * from vaccination_centre where `Area_ID` = $row->Centre_Name";
	    $res5= $con->query($user5);
		$row5=$res5->fetch_object();
		
		
		
    ?>
						<div class="row">
							
							<div class="col-sm-8 form-group">
							
								<label> Name : <?php echo $row1->Name;?></label>
								
							</div>				
						
						<div class="col-sm-8 form-group">
							
								<label> State : <?php echo $row2->State_Name;?></label>
								
							</div>	
							
							<div class="col-sm-8 form-group">
							<label> City : <?php echo $row3->City_Name;?></label>
							
							
						</div>	
							<div class="col-sm-8 form-group">
								<label> Area Name : </label>
								<label><?php echo $row4->Centre_Name;?></label>
								
							</div>	
							<div class="col-sm-8 form-group">
								<label> Center Name :</label>
								<p><b><?php echo $row5->Centre_Name;?></b></p>
								
							</div>	
							<div class="col-sm-8 form-group">
								<label>Dose: 
								 <?php
           if($row->Dose=="dose1")
           {
            echo "1";
           }
           if($row->Dose=="dose2")
           {
            echo "2";
           }
           ?>
		 </label>

		 
								
							</div>
							
<div class="col-sm-8 form-group">
								<label> Date : </label>
								<label>19-03-2022</label>
								
							</div>

							<p style="color:green; text-align:right;" ><b>Your Slot is successfully booked</b></p>
                            
							   <?php }?>
                              </div>			
  	
						</div>							
					  
				</form> 
				</div>
		</div>
	</div>

                                                                             
    <!-- ======= Services Section ======= -->
    <!-- End Services Section -->

    <!-- ======= Cta Section ======= -->
    
    <!-- ======= End Team Section ======= -->
        
   

   <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Frequently Asked Questions</h2>
          
        </div>
       <div class="faq-list">
          <ul>
            

            <li data-aos="fade-up" data-aos-delay="100">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed">How can I check slots availablity near by my area? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                <p>
                 On Website Home Page scroll down Select book slots and you can select your near by vaccination area.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="200">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed">How can I get my Vaccination Certificate ? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                <p>
                Login to your account after completion of vaccination and click on get download certificate.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="300">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-4" class="collapsed">Whom do I contact in case ofside effect form vaccination ? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                <p>
                You can contact on any of the following details.
                a) Helpline Number : +19-11-2397804(Toll free-1075)
                b) Technical Helpline Number : 0120-4473222.You can contact the vaccination center where you took vaccination for advice.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="400">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-5" class="collapsed">What if I cannot go for vaccination on the date ?Can I reshedule it ? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
                <p>
                Yes, you have Login and book your slot again and after that you can go and get your vaccine. 
                </p>
              </div>
            </li>

          </ul>
        </div>

      </div>
    </section><!-- End Frequently Asked Questions Section -->

    
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer class="footer">
   <div class="content">
     <div class="left box">
       <div class="upper">
         <div class="topic">About us</div>
         <p>This website also include search which show centers of nearby area mentioned in this website.  This website services for public health includes a centralized vaccine management platform that can manage mass vaccination, including vaccine distribution and administration.

</p>
       </div>
       <div class="lower">
         <div class="topic">Contact us</div>
         <div class="phone">
           <a href="#"><i class="fas fa-phone-volume"></i>+007 9089 6767</a>
         </div>
         <div class="email">
           <a href="#"><i class="fas fa-envelope"></i>TakeVaccine@gmail.com</a>
         </div>
       </div>
     </div>
     <div class="middle box">
       <div class="topic">Our Services</div>
       <div><a href="#">Register Members</a></div>
	   <div><a href="#">Search vaccination center</a></div>
       <div><a href="#">Manage Appointment</a></div>
       <div><a href="#">Book Vaccination Slots</a></div>
       <div><a href="#">Download Certificate</a></div>
     </div>
     <div class="right box">
       <div class="topic">Log in</div>
       <form action="#">
         <input type="text" placeholder="Enter email address">
         <input type="submit" name="" value="Send">
         <div class="media-icons">
           <a href="#"><i class="fab fa-facebook-f"></i></a>
           <a href="#"><i class="fab fa-instagram"></i></a>
           <a href="#"><i class="fab fa-twitter"></i></a>
           <a href="#"><i class="fab fa-youtube"></i></a>
           <a href="#"><i class="fab fa-linkedin-in"></i></a>
         </div>
       </form>
     </div>
   </div>
   <div class="bottom">
     <p style="margin-right: 43%;">Copyright © 2021 <a href="#">TakeVaccine</a> All rights reserved</p>
   </div>
 </footer>

  <!-- End Footer -->

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


