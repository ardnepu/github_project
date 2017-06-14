<?php
session_start();
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$address=$_POST['address'];
$email=$_POST['email'];
$password=$_POST['password'];
include('connect.php');
if(isset($_POST['submit']))
{
	
	$db->query("INSERT INTO login_system(firstname,lastname,address,email,password) VALUES('$firstname','$lastname','$address','$email','$password')");	
	$_SESSION['sMsg']="Registered successfully !";
	header("location: signup_page.php");
	
}
?>