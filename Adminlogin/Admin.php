<?php
include ("connect.php");
ob_start();
?>
<html>
<head>
<title></title>
<meta charset ="utf-8" name="viewport" content="width-device-width,initial-scale-1.0,shrink">

<link rel="stylesheet"  href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" >
<link rel="stylesheet" type="text/css" href="mycss.css">
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
  margin-top: 105px;
  padding-top: 2px;
  height: 100px;

}
div.login-form h2{
	text-align: center;
	background-color: #204969;
	padding: 12px;
	text-decoration-color: green;
	}

	div.login-form form div.extra{
	font-size: 14px;
	display: flex;
	flex-direction: row;
	text-decoration-color: blue;
	color: blueviolet;
	justify-content: space-between;
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

<body >
	<center>

	
	<div class="login-form">
		<h2 >DEPARTMENT LOGIN</h2>

		<form method="POST">

			<div class="input-field">
				<i class="fas fa-user"></i>
				<input type="text" placeholder="Admin name" name="email">
			</div>

			<div class="input-field">
				<i class="fas fa-lock"></i>
				<input type="password" placeholder="Password" name="password">
			</div>
			<div class="form-group">
                                <label for="remember-me" class="text-info"><span>Remember me</span> <span><input id="remember-me" name="remember-me" type="checkbox"></span></label><br>
                              
                            </div>

			<button type="submit" name="submit">Log In</button>

			
		</form>
	</div>
	</center>
	<?php
	if(isset($_POST['email']) || isset($_POST['password'])){
          if(isset($_POST['submit']))
          { 
          	$ad=$_POST['email'];
          	$ur=$_POST['password'];
          	
          	
					if ($ad=='admin@gmail.com' && $ur=='admin@123')
					  {
					    ?>
					     <script>
alert("Access Granted!");
window.location = "dashboard/index.html";
</script>	
<?php				 
 }
					  else
					  {
					    ?>
					    <script >
					    	alert("Invalid Username or Password");


					    </script>
					    <?php
					  }
					}
					}
?>
</body>
</html>