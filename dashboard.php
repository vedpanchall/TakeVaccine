<?php
include ("connect.php");

$query1="select *from user";
$result1=mysqli_query($con,$query1);
$usr=mysqli_num_rows($result1);

$query2="select *from sub_user";
$result2=mysqli_query($con,$query2);
$sub_usr=mysqli_num_rows($result2);


?>

<html>
<head>
	<meta charset="UTF-8">
    <!--<title> Responsive Footer | CodingLab</title>--->
    <link rel="stylesheet" href="style.css">	
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>TakeVaccine Dashboard</title>
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


	<style>
.cards
{
	margin-top: 80px;
	width: 100%;
	padding:  35px 20px;
	display: grid;
	grid-template-columns: repeat(3, 1fr);
	grid-gap: 20px;
}

.cards .card{
	background: linear-gradient(45deg,#47cebe,#ef4a82);
	padding: 20px;
	display: flex;
	align-items: center;
	justify-content: space-between;
	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.4);
}
.number{
	font-size: 35px;
	font-weight: 500;
	color: #fff;
}

.card-name{
	color: #444;
	font-weight: 600;
	font-size: 40px;
}
.t1
{
	margin-top: 100px;
	font-size: 100px;
	color: #228B22;
	font-weight: 600;
}
	</style>





</head>
<body>
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
                  <li><a href="howtogetvaccinated.pdf">How To Get Vaccinated</a></li>
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

  <div class="t1">
  <h1 style="font-size: 50px;">Vaccination Dashboard</h1>
  </div>	
	<div class="cards">
	 <div class="card">
	 	<div class="card-content">
	 		<div class="card-name">Users</div>
	 		<div class="number"><?php echo $usr;?></div>
	 	</div>
	 		 </div>

	 		 <div class="card">
	 	<div class="card-content">
	 		<div class="card-name">Total Registrations</div>
	 		<div class="number"><?php echo $sub_usr;?></div>
	 	</div>
	 		 </div>	

	 		<div class="card">
	 	<div class="card-content">
	 		<div class="card-name">Sub Users</div>
	 		<div class="number"><?php echo $sub_usr;?></div>
	 	</div>
	 		 </div>	
 
		
	</div>
	<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Gender', 'Population'],
          ['Male',     13],
          ['Female',      2],
          ['Others',  0],
           ]);

        var options = {
          title: 'Vaccination By Gender'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Vaccine Name', 'Distribution amount'],
          ['Covishield',     8],
          ['Covaxin',      8],
          
        ]);

        var options = {
          title: 'Vaccination By Type',
          pieHole: 0.4,
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
        chart.draw(data, options);
      }
    </script>
  
  </head>
  <body>
    <div id="piechart" style="width: 900px; height: 500px;"></div>
    <div id="donutchart" style="width: 900px; height: 500px;"></div>
  </body>


</body>
</html>