<?php


if(isset($_POST['feedback']))
{

	$conn=mysqli_connect("localhost","root","");
	$db=mysqli_select_db($conn,"covid19");

	if($conn)
	{

	$fn=$_POST['fname'];
	$ln=$_POST['lname'];
	$add=$_POST['eaddress'];
	$fback=$_POST['content'];

	
$query="insert into feedback (FirstName,LastName,Email,Feedback) VALUES('$fn','$ln','$add','$fback')";

	$result=mysqli_query($conn,$query);

	if($result)
	{
		echo "Data inserted";
}	}
}

?>