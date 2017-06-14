<?php
try{
	$db=new PDO("mysql:host=localhost;dbname=student;port=3306","root","");
	$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	$db->exec("SET NAMES 'utf8'");   
}
catch(exception $e) {
     echo"error connecting to the database";

}

?>

