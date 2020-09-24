<?php
 //print_r(PDO::getAvailableDrivers());
	$servername = "localhost";
	$username = "";
	$password = "";
	$database="#####";
	
	$conn=new mysqli($servername,$username,$password,$database);
    if($conn->connect_error){
        die("Connection failed".$conn->connect_error);
    }
?>
