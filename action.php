<?php
include 'database.php';
if(isset($_POST['fb']))
{
$username=$_POST['username'];
$email=$_POST['email'];
$contact=$_POST['contact'];
$message=$_POST['message'];

$sql="INSERT INTO feedback(Username, Email, Contact, Message) VALUES ('$username','$email','$contact','$message')";

$result=mysqli_query($conn, $sql);

if($result){
    header('Location: ./message.php');
}
}
?>