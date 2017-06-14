<?php
session_start();
$email=$_POST['email'];
$password=$_POST['password'];
$_SESSION['email']=$email;
$_SESSION['password']=$password;
include('connect.php');
$sql=$db->query("SELECT email,password FROM login_system");
$sql->setFetchMode(PDO::FETCH_ASSOC);
while($row=$sql->fetch()){
	if($row['email']==$email && $row['password']==$password){
		header("location: content.php");
	}
}
$_SESSION['errMsg']="Incorrect username or password";
header("location: index.php");

?>