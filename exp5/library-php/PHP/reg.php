<?php include('request.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>REGISTRATION FORM</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
</head>
<body>
    		<h2><b>REGISTRATION</b></h2>
	<div class="regg">
		<form id="reg" method="post" action="reg.php">
            <?php include('errors.php') ?>
			<div>
                <label>First Name</label><br>
				<input type="text" id="fname" name="user_name" required="" value="<?php echo $username; ?>">
				<span class="error_form" id="fname_error_message"></span>	   
			</div><br>
			<div><label>Second Name</label><br>
				<input type="text" id="lname" name="" required="">
				<span class="error_form" id="lname_error_message"></span>	
			</div><br>
			<div>
                <label>Email id</label>	<br>
				<input type="email" id="mail" name="user_mail" required="" value="<?php echo $email; ?>">
				<span class="error_form" id="email_error_message"></span>
			</div><br>
			<div>
                <label>Password</label>	<br>
				<input type="Password" id="Pass" name="user_pass" required="">
				<span class="error_form" id="password_error_message"></span>
			</div><br>
			<div>
                <label>Re-Enter Password</label><br>
				<input type="password" id="cnfPass" name="user_cnfpass" required="">
				<span class="error_form" id="retype_password_error_message"></span>	
			</div><br>
            <label for="profession"><b>Select Profession</b></label><br>
          <select name="user_type" required="" id="profession">
          <option name="user_type" value="student">Student</option>    
          <option name="user_type" value="professor">Professor</option>    
          </select>
        <span class="error_form" id="prof_error"></span><br><br>
			<input type="submit" id="regb" value="Register" name="reg_user"><br><br>
            <input type="checkbox" id="check">    
        <span>Remember me</span>    
        <br><br>
        <span>Already a member?</span>
        <a href="login.php">Login here</a>
		</form>
	</div>
	<script type="text/javascript">
      $(function() {

         $("#fname_error_message").hide();
         $("#lname_error_message").hide();
         $("#email_error_message").hide();
         $("#password_error_message").hide();
         $("#retype_password_error_message").hide();

         var error_fname = false;
         var error_lname = false;
         var error_email = false;
         var error_password = false;
         var error_retype_password = false;

         $("#fname").focusout(function(){
            check_fname();
         });
         $("#lname").focusout(function() {
            check_lname();
         });
         $("#mail").focusout(function() {
            check_email();
         });
         $("#Pass").focusout(function() {
            check_password();
         });
         $("#cnfPass").focusout(function() {
            check_retype_password();
         });

         function check_fname() {
            var pattern = /^[a-zA-Z]*$/;
            var fname = $("#fname").val();
            if (pattern.test(fname) && fname !== '') {
               $("#fname_error_message").hide();
               $("#fname").css("border-bottom","2px solid #34F458");
            } else {
               $("#fname_error_message").html("Should contain only Characters");
               $("#fname_error_message").show();
               $("#fname").css("border-bottom","2px solid #F90A0A");
               error_fname = true;
            }
         }

         function check_lname() {
            var pattern = /^[a-zA-Z]*$/;
            var lname = $("#lname").val()
            if (pattern.test(lname) && lname !== '') {
               $("#lname_error_message").hide();
               $("#lname").css("border-bottom","2px solid #34F458");
            } else {
               $("#lname_error_message").html("Should contain only Characters");
               $("#lname_error_message").show();
               $("#lname").css("border-bottom","2px solid #F90A0A");
               error_lname = true;
            }
         }

         function check_password() {
            var passwd = $("#Pass").val().length;
            if (passwd < 8) {
               $("#password_error_message").html("Atleast 8 Characters");
               $("#password_error_message").show();
               $("#Pass").css("border-bottom","2px solid #F90A0A");
               error_password = true;
            } else {
               $("#password_error_message").hide();
               $("#Pass").css("border-bottom","2px solid #34F458");
            }
         }

         function check_retype_password() {
            var password = $("#Pass").val();
            var retype_password = $("#cnfPass").val();
            if (password !== retype_password) {
               $("#retype_password_error_message").html("Passwords Did not Matched");
               $("#retype_password_error_message").show();
               $("#cnfPass").css("border-bottom","2px solid #F90A0A");
               error_retype_password = true;
            } else {
               $("#retype_password_error_message").hide();
               $("#cnfPass").css("border-bottom","2px solid #34F458");
            }
         }

         function check_email() {
            var pattern = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
            var email = $("#mail").val();
            if (pattern.test(email) && email !== '') {
               $("#email_error_message").hide();
               $("#mail").css("border-bottom","2px solid #34F458");
            } else {
               $("#email_error_message").html("Invalid Email");
               $("#email_error_message").show();
               $("#mail").css("border-bottom","2px solid #F90A0A");
               error_email = true;
            }
         }

         $("#reg").submit(function() {
            error_fname = false;
            error_lname = false;
            error_email = false;
            error_password = false;
            error_retype_password = false;

            check_fname();
            check_sname();
            check_email();
            check_password();
            check_retype_password();

            if (error_fname === false && error_lname === false && error_email === false && error_password === false && error_retype_password === false) {
               alert("Registration Successfull");
               return true;
            } else {
               alert("Please Fill the form Correctly");
               return false;
            }


         });
      });
   </script>
</body>
</html>