<!DOCTYPE html>
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

  <title>TakeVaccine-Home Page</title>
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

<style type="text/css"></style>
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
                  <li><a href="http://localhost/Project/TakeVaccine/index2.php">Register Member</a></li>
                  <li><a href="http://localhost/Project/TakeVaccine/index2.php">Search Vaccination centre</a></li>
                  <li><a href="http://localhost/Project/TakeVaccine/index2.php">Book Vaccination Centre</a></li>
                  <li><a href="http://localhost/Project/TakeVaccine/centerlocation.php">Map Vaccination Centre</a></li>
                 </ul> </li>
          
		  <li class="dropdown"><a href="#"><span>Platforms</span> <i class="bi bi-chevron-down"></i></a>
                <ul>
                  <li><a href="http://localhost/Project/TakeVaccine/Adminlogin/Admin.php">Department Login</a></li>
                  
                 </ul> </li>
          
		  <li class="dropdown"><a href="#"><span>About Us</span> <i class="bi bi-chevron-down"></i></a>
                <ul>
                  <li><a href="#">How To Get Vaccinated</a></li>
                  <li><a href="TakeVaccine.pptx">Overview</a></li>
				  
                 </ul> </li>
         
		  <li class="dropdown"><a href="#"><span>Download Certificate</span> <i class="bi bi-chevron-down"></i></a>
                <ul>
                  <li><a href="http://localhost/Project/TakeVaccine/index2.php">Verify Certificate</a></li>
                  <li><a href="http://localhost/Project/TakeVaccine/index2.php">Download Certificate</a><li>
                 </ul> </li>
          
		  <li class="dropdown"><a href="#"><span>Help</span> <i class="bi bi-chevron-down"></i></a>
                <ul>
                  <li><a href="http://localhost/Project/TakeVaccine/index.php">FAQ</a></li>
                  <li><a href="http://localhost/Project/TakeVaccine/index.php">Contact Us</a></li>
                  <li><a href="http://localhost/Project/TakeVaccine/message.php">Send Feedback</a></li>
				  </ul><li>
				  <li>
				 
				  <li class="dropdown"><a href="#"><span>Dashboard</span> <i class="bi bi-chevron-down"></i></a>
                <ul>
                  <li><a href="http://localhost/Project/TakeVaccine/dashboard.php">Vaccination Statictics</a></li>
                  
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
	
	
<div  class="nearestCentersSection pb-5">
   <div  class="container">
      <h1  class="text-center accessibility-plugin-ac">Search Your Nearest Vaccination Center</h1>
      <p  class="text-center accessibility-plugin-ac">Get a preview list of the nearest centers and check availability of vaccination slots</p>
      <a  target="_blank" aria-label="Login to book your slot" class="text-center accessibility-plugin-ac d-block">Login to book your slot</a>
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
                               <select class="form-control" id="area-dropdown" name="area"required>
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
                           url: "Area-by-center2.php",
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

          </body>
        </html>
        
                                                                             
    <!-- ======= Services Section ======= -->
    <!-- End Services Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container">
       <div class="whatsNewonCowin" >
        <div class="container">
		<div class="row">
		<div  class="col-12 col-lg-3" >
		<h2  class="accessibility-plugin-ac" > What's new<br  class="d-none d-sm-block"> on TakeVaccine </h2>
		</div>
		<div  class="col-12 col-lg-9">
		<mat-accordion multi="true" class="mat-accordion mat-accordion-multi">
		<mat-expansion-panel  hidetoggle="" class="mat-expansion-panel ng-tns-c95-10">
		
		
		
		<div  class="w-90">You can download your vaccination certificate for International Travel ?</div>
		<div  class="d-flex flex-row align-items-center mr-4">
		</div>
		<div class="w-90" style="padding-bottom:1%">This new feature allows fully vaccinated citizens to update existing photo identity to passport number and date of birth to get International Travel Certificate.</div>
		<hr class="new1">
	
	
		
		<span class="mat-content ng-tns-c96-13"><mat-panel-title  class="mat-expansion-panel-header-title accessibility-plugin-ac ng-tns-c96-13">
		<div class="w-90">You can register as a foreign national on CoWIN and get vaccinated ? </div>
		<div class="w-90">New feature has been provided for foreign national. You can easily be vaccinated just by providing your basic details. If you have been administered with Dose 1 vaccine in foreign country, you'll have provide it's details to Vaccinator while going for Vaccination.</div>
		<hr class="new1">
		
		<div class="w-90"> Citizens can link their passports to CoWIN issued certificate by raising an issue in their accounts ? </div>
		<div class="w-90">	This is a new feature provided where you can link your passport by entering Passport number. In order to link your passport to the certificate you need to login into your CoWIN portal and then raise an issue to get your passport linked by clicking on "Add Passport Details to my vaccination certificate"</div>
		<hr class="new1">
		
		<div  class="w-90"> Introducing “Raise an Issue” to CoWIN for all your vaccine certificate and account related issues ?</div>
		

		<div class="w-90">You can now get all your Issues related to your Vaccine Certificate at one place. All you need to do is to login to your CoWIN portal and click on "Raise an Issue" . Multiple Issue options are provided. You can raise your concerned issues accordingly.</div>
	<hr class="new1">
	
		<div class="w-90"> Check your eligibility for Dose 2 by signing in on CoWIN with your registered mobile number ?</div>
	
		<div class="w-90">
		Citizens administered with dose 1 can now check their eligibility for Dose 2 by performing a single step.<br>
		"Login to your CoWIN portal" and there you have your eligibility mention next to your name, highlighted as "No. of Days left for Dose 2". </div>
	<!---->
	  
    </section><!-- End Cta Section -->

   

    

    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
      <div class="container">
	  <div class="easyVaccination">
	  <div class="container">
	  <h1  class="text-center accessibility-plugin-ac">Getting Vaccinated Is As Easier Than Ever</h1><div class="row mt-5">
	  <div class="col-sm-12 col-md-4 mb-5 text-center"><p  class="accessibility-plugin-ac">
	  <span class="steps-count dashed-line">1</span>
	  <span>Book an Appointment On <br>CoWIN or Walk Into Any <br>Vaccination Center</span></p>
	  <img src="https://prod-cdn.preprod.co-vin.in/assets/images/vaccinated_img1.png" class="img-fluid mb-4 mt-2">
	  <a title="How to book your appointment on CoWIN" aria-label="How to book your appointment on CoWIN" target="_blank" href="https://prod-cdn.preprod.co-vin.in/assets/pdf/User_Guide_Citizen%20registration_18%2B.pdf" 
	  class="accessibility-plugin-ac">How to book your appointment on CoWIN</a></div>
	  <div class="col-sm-12 col-md-4 mb-5 text-center"><p class="accessibility-plugin-ac">
	  <span class="steps-count dashed-line">2</span><span>Get Your Vaccination <br> Safely at the Time of Your <br> Appointment</span></p>
	  <img src="https://prod-cdn.preprod.co-vin.in/assets/images/vaccinated_img2.png"
	  class="img-fluid mb-4 mt-2"><a title="Do’s and don’ts for getting vaccinated" aria-label="Do’s and don’ts for getting vaccinated" target="_blank" 
	  class="accessibility-plugin-ac" href="https://prod-cdn.preprod.co-vin.in/assets/pdf/Dos_and_Donts_for_Citizens.pdf">Dos and dont's for getting vaccinated</a></div>
	  <div class="col-sm-12 col-md-4 mb-5 text-center">
	  <p class="accessibility-plugin-ac"><span class="steps-count">3</span><span>Download Your Vaccination <br> Certificate from CoWIN <br> and Wait for Dose #2</span></p>
	  <img src="https://prod-cdn.preprod.co-vin.in/assets/images/vaccinated_img3.png" class="img-fluid mb-4 mt-2">
	  <a title="Download your vaccine certificate" target="_blank" aria-label="Download your vaccine certificate" 
	  class="accessibility-plugin-ac" href="https://selfregistration.cowin.gov.in/vaccination-certificate">Download Your Vaccine Certificate</a>
	  </div>
	  </div>
	  </div>
	  </div>
    <!-- ======= End Team Section ======= -->
        
   

    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Frequently Asked Questions</h2>
          
        </div>
       <div class="faq-list">
          <ul>
            <li data-aos="fade-up">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1">How can I register myself for vaccine ? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                <p>
              Go to Home Page select Register/Login Register yourself for vaccination and continue doing step by step procedure.
                </p>
              </div>
            </li>

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
     <p style="margin-right: 35%;">Copyright © 2021 <a href="#">TakeVaccine</a> All rights reserved</p>
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