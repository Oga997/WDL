<?php include('request.php') ?>
<!DOCTYPE html>    
<html>    
<head>    
    <title>Login Form</title>    
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
</head>
<body>    
    <h2><b>LOGIN</b></h2><br>
    <div class="log_form">    
    <form id="loggin" method="post" action="login.php">  
        <?php include('errors.php'); ?>
        <div>
        <label><b>User Name</b></label><br>    
        <input type="email" name="user_mail" id="mail" placeholder="Username/Email id" required="">   
        <span class="error_form" id="mail_error_message"></span></div>
        <br>
        <div>
        <label><b>Password</b></label><br>    
        <input type="Password" name="user_pass" id="Pass" placeholder="Password" required="">    
        <span class="error_form" id="password_error_message"></span></div>
        <br>
        <label for="profession"><b>Select Profession</b></label><br>
          <select name="user_type" required="" id="profession">
          <option name="user_type" value="Student">Student</option>    
          <option name="user_type" value="Admin">Admin</option>    
          </select>
        <br><br>
       <input type="submit" id="log" value="Login" name="login_user">
        <br><br>    
        <input type="checkbox" id="check">    
        <span>Remember me</span>    
        <br><br>
        <span>Not a member?</span>
        <a href="reg.php">Register here</a><br><br>  
        <a href="#" id="fpwd">Forgot Password</a>    
    </form>     

</div> 
<script type="text/javascript">
$(function(){
    $("#mail_error_message").hide();
    $("#password_error_message").hide();
    
    var error_mail=false;
    var error_pass=false;
    
    $("#mail").focusout(function(){
        check_email();
    });
    $("Pass").focusout(function(){
        check_pass();
    });
    
    function check_email() {
            var pattern = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
            var email = $("#mail").val();
            if (pattern.test(email) && email !== '') {
               $("#mail_error_message").hide();
               $("#mail").css("border-bottom","2px solid #34F458");
            } else {
               $("#mail_error_message").html("Invalid Email");
               $("#mail_error_message").show();
               $("#mail").css("border-bottom","2px solid #F90A0A");
               error_email = true;
            }
         }
    function check_pass() {
            var passwd = $("#Pass").val().length;
            if (passwd < 8) {
               $("#password_error_message").html("Atleast 8 Characters");
               $("#password_error_message").show();
               $("#Pass").css("border-bottom","2px solid #F90A0A");
               error_pass= true;
            } else {
               $("#password_error_message").hide();
               $("#Pass").css("border-bottom","2px solid #34F458");
            }
         }

    $("#loggin").submit(function(){
        error_mail=false;
        error_pass=false;
        
        check_email();
        check_pass();
        
        if(error_mail===false && error_pass===false){
            return true;
        }
        else{
            alert("please fill the form correctly");
            return false;
        }
    
    });
    
});    
</script>
</body>    
</html>   