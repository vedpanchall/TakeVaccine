<?php
$con=new mysqli("localhost","root","","covid19");

if($con){
$msd = "connection is done";
}
else{
	die($con->error());
}



?>
