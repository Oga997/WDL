<!DOCTYPE html><html lang="en">
<head>
<style type="text/css">
  li{
        list-style-type: none;  
        float:left;
        display: inline-block;
        margin:10px;
        padding:4px;
         border:1px solid white;
    }
    ul{
       list-style-type: none;
        margin: 0;
        padding: 0;
        display: inline-block;
        float:left;
        background: black;
        width:100%;
        left:0px;
        height:60px;
    }
    a{
        text-decoration: none;
        color:white;
    }
        ul:hover{
            background-color: black;
            color:white;
        }
        li:hover{
            background-color: black;
            color:black;
            box-shadow:3px 3px 3px #C0C0C0;
        }
    .top-container{
                background-image:url("Para4%20.jpeg");
                background-attachment: fixed;
                background-position: center;
                background-size: cover;
		       
                background-repeat: no-repeat;
        color:ghostwhite;
        font-size: 20px;
    }
.box{
 width: 100%;
  margin: 50px auto 0px;
  color: white;
  background:SkyBlue;
  text-align: center;
  border: 1px solid #B0C4DE;
  border-bottom: none;
  border-radius: 10px 10px 0px 0px;
  padding: 20px;}
  
  form, .content {
  width: 100%;
  margin: 0px auto;
  padding: 20px;
  border: 2px solid #B0C4DE;
  background: white;
  border-radius: 0px 0px 10px 10px;
}
body{
  background-image:url("fbback.jpg");
}
</style>
  <title>Contact us</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="css/jquery.min.js"></script>
  <script src="css/bootstrap.min.js"></script>
</head>
<body>


      <ul>
          <li><a href="home.html" title="Home" style="text-decoration:none;color:white;"><img src="home.png" height="25px" width="25px" >Home</a></li>
      
  <li><a href="fbook.php"style="text-decoration:none;color:white;"><img src="icon.png" height="25px" width="25px" title="Find A Book">Find a Book</a></li>
      
<li><a href="model.php" title="Model Answer Paper"style="text-decoration:none;color:white;"><img src="file%20(2).png" height="25px" width="25px" >Model Answer Paper</a></li>     
        <li><a href="aboutus.html" title="Home" style="text-decoration:none;color:white;">
        <img src="info3.png" height="25px" width="25px" >About us</button></li>
    <li><a href="contact1.html" title="Home" style="text-decoration:none;color:white;">
        <img src="contacts1.png" height="25px" width="25px" >Contact us</button></li>
    <li><button type="button" name="lo" id="lo" style="background:transparent;border:0px;color:white;" onclick="con()">
        <img src="logout.png" height="25px" width="25px" title="Log Out">Log Out</button></li>
      </ul><br><br>
<center>
<div class="box1">
<div class="container">
<div class="col-md-6">
  <div class="box"><h1>Contact us</h1></div>
  <form action="">
    <div class="form-group">
      <input type="text" class="form-control" id="email" placeholder="Enter email" name="fname">
    </div>
    <div class="form-group">
      <input type="text" class="form-control" id="pwd" placeholder="Enter password" name="lname">
    </div>
    <div class="form-group">
      <input type="email" class="form-control" id="pwd" placeholder="Enter Email" name="email">
    </div>
	<div class="form-group">
      <input type="text" class="form-control" id="pwd" placeholder="Enter Your Issue" name="issue">
    </div>
	<div class="form-group">
      <label for="Last Name"><b>Any Screenshot of inconvinience:</b></label>
      <input type="file" class="form-control" id="pwd" placeholder="Select the screenshot" name="ss">
    </div>
    <button type="submit" class="btn btn-success" style="width:300px;">Submit</button>
  </form>
</div>
</div>
</div>
</center>
</body>
</html>