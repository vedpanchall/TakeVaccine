<?php
session_start();
include ("connect.php");
 $usr= $_SESSION['userId'];

 $query = "SELECT * FROM `sub_user` where `User_ID` =$usr";
  $res= $con->query($query);

?>
<html lang="en">

<head>
  <meta charset="utf-8">  
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Account Detail</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo.png" rel="icon">
  <link href="assets/img/logo.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
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
  <section id="testimonials" class="testimonials">

      <div class="container">

        <div class="section-title">
          <h5 style='color:green;' align='left'>Account Details</h5>
          <p style='color:black;' align='left'>Register Mobile Number: XXX-XXX-2077 </p>
        </div>
       <section id="services" class="services">
      <div class="container">
      </div>
      <div class="row">
       
      
 <?php
            while ($row=$res->fetch_object())
  {
    ?>
          <div class="col-lg-16 col-md-16d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            
  
    <div class="bx-bx-call">

            <div class="icon-box iconbox-blue">
              <div class="icon">
              <i class="bx bxs-eyedropper"></i>
              </div>
               <div class="row counters">
                 <div class="col-lg-12  col-8 text-center"style="color:black">
                <h5><p><b>Name</b></p><p style="color:blue; align:text-center;"><?php echo $row->Name;?></p></h5>
           </div>

           <div class="row counters">
          <div class="col-lg-4 col-6 text-center"style="color:black">
           <p><b>Id Proof</b></p><p style="color:green">
          <?php
           if($row->ID_Proof==1)
           {
            echo "Adhar Card";
           }
           if($row->ID_Proof==2)
           {
            echo "Driving License";
           }
          ?>
          </div>
           <div class="col-lg-4 col-6 text-center"style="color:black">
         <p><b>Id Number</b></p><p style="color:green"><?php echo $row->ID_Number;?></p>
          </div>
           <div class="col-lg-4 col-6 text-center"style="color:black">
           <p><b>Status</b></p><p style="color:green"><?php echo $row->Status;?></p>
           </div>
         </div>

   
             <div class="row counters">
             <div class="col-lg-4 col-6 text-center" style="color:black">
            <p><b>Dose</b></p> <p style="color:green"><?php echo $row->Dose;?></p>
          </div>
          
          <div class="col-lg-4 col-6 text-center"style="color:black">
           <p><b>Vaccine Name</b></p> <p style="color:green">
         
        
            <?php
           if($row->Vaccine_Name==1)
           {
            echo "Covishield Vaccine";
           }
           if($row->Vaccine_Name==2)
           {
            echo "Covaxin Vaccine";
           }
           ?>
         </div>
         <div class="col-lg-4 col-6 text-center" style="color:black">
            <p><b>Gender</b></p> <p style="color:green"><?php echo $row->Gender;?></p>
          </div>
           </div>
      <div class="row counters">
             
          <div class="col-lg-4 col-6 text-center"style="color:black">
           <p><b>Date of Birth</b></p><p style="color:green"><?php echo $row->date;?></p>
          </div>
          </div>
          <div id="register-link" class="text-right">
<a href="http://localhost/Project/TakeVaccine/bookslots.php?id=<?php echo $row->SubUser_ID;?>" class="btn btn-warning" style="background-color: lightgrey;">Book slots</a>
</div>

          </div>
        </div>
      </div>
	  </div>
      <?php

} 
        ?>
      
</div>
</section>

 
    </div>
	</section>
</body>
</html>
