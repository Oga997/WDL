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

$db = mysqli_connect('localhost', 'oga', 'darkoga123', 'library');

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
    
    if (count($errors) == 0) 
    {
  	$password = md5($password);
  	$query = "SELECT * from user WHERE user_mail='$email' and user_pass='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) >0) 
    {
        $data=mysqli_fetch_assoc($results);
        $_SESSION['user_data']=$data;
        if($data['user_type']=='Student')
    {
        header('location: home.html');
    }
    else
    {
        header('location: http://127.0.0.1:8000/dashboard');
    }}}
    else {
  		array_push($errors, "Wrong username/password combination");
  	}
  }

if(isset($_REQUEST["term"])){
    // Prepare a select statement
    $sql = "SELECT * FROM book WHERE book_title LIKE ?";
    
    if($stmt = mysqli_prepare($db, $sql)){
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "s", $param_term);
        
        // Set parameters
        $param_term = $_REQUEST["term"] . '%';
        
        // Attempt to execute the prepared statement
        if(mysqli_stmt_execute($stmt)){
            $result = mysqli_stmt_get_result($stmt);
            
            // Check number of rows in the result set
            if(mysqli_num_rows($result) > 0){
                // Fetch result rows as an associative array
                while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                    echo "<p>" . $row["book_title"] . "</p>";
                }
            } else{
                echo "<p>No matches found</p>";
            }
        } else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($db);
        }
    }
}

?>
