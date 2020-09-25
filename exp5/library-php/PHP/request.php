<?php
session_start();
include("connection.php");
$username = "";
$email    = "";
$name="";
$password_1="";
$password_2="";
$type="";

//$pimg="";
$errors = array(); 

$db = mysqli_connect('localhost', '##', '', 'library');

if (isset($_POST['reg_user'])) {

  $username = mysqli_real_escape_string($db, $_POST['user_name']);
  $email = mysqli_real_escape_string($db, $_POST['user_mail']);
  $password_1 = mysqli_real_escape_string($db, $_POST['user_pass']);
  $password_2 = mysqli_real_escape_string($db, $_POST['user_cnfpass']);
  $type= mysqli_real_escape_string($db, $_POST['user_type']);

    if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  $user_check_query = "SELECT * FROM user WHERE user_name='$username' OR user_mail='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { 
    if ($user['user_name'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['user_mail'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  if (count($errors) == 0) {
  	$password = md5($password_1);

  	$query = "INSERT INTO user (user_name, user_mail, user_pass, user_type) 
  			  VALUES('$username', '$email', '$password','$type')";
  	mysqli_query($db, $query);
  	$_SESSION['user_name'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: login.php');
  }
}

if (isset($_POST['login_user'])) {
  $email =$_POST['user_mail'];
  $password =$_POST['user_pass'];

  if (count($errors) == 0) {
  	$password = md5($password);
  	$query = "SELECT * from user WHERE user_mail='$email' and user_pass='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['user_name'] = $username;
  	  $_SESSION['success'] = "You are now logged in";
        $_SESSION["log"]=1;
  	  header('location: home.html');
  	}else {
        $_SESSION["log"]=0;
  		array_push($errors, "Wrong username/password combination");
  	}
  }
}


?>
