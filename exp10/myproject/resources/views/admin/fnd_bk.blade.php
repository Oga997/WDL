<!DOCTYPE html>
<html lang="en">
<head>
  <title>Find a Book</title>
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style type="text/css">
.jumbotron {
    background-color: skyblue;
    color: #fff;
  }

        table{
            text-align: center;
          
        }
        th{
            text-align: center;
            background:black;
            color:white;
        }
  </style>

</head>
<body>
<form action="" method="POST" enctype="multipart/form-data">
<div class="jumbotron text-center">
  <h1 style="">Library Management</h1> 
  <p>(Learn From anywhere Anytime in the World)</p>
</div>
<br><br>
<h1 style="text-align:center;"><center>Enter The Book Name</center></h1><br>

<center><input type="text" class="form-control col-md-6" placeholder="Search.." id="sk" name="sk" style="width:40%;left:26%;" >
<button type="submit" class="btn btn-success  col-md-1" id="sub" name="sub" style="left:25%;"><span class="glyphicon glyphicon-search"></span> Search</button></center>
    <br>
   <br>
    </form>
	</body>
	 <?php
    require("connect.php");

if(isset($_POST['sub'])){
    $cs=$_POST['sk'];
//echo $cs;
$database=new DatabaseManager();
 $query ="SELECT * from books where bk_nm='".$cs."'";
//echo "<br>query:".$query; 
$status=$database->safeRetrieve($query,NUll);

             for ($i=0; $i<count($status); $i++)
    { echo"<br><center>";   echo"<table class='table table-hover table-bordered'>";
                 echo"<th>Book Id</th><th>Book Name</th><th>Book Author</th><th>Category</th><th>Book Pdf</th>";
   echo "<tr>
    <td>" . $status[$i]['id'] . "</td>
    <td>" . $status[$i]['bk_nm'] . "</td>
    <td>" . $status[$i]['bk_aut'] . "</td>
    <td>" . $status[$i]['bk_catg'] . "</td>
    <td>" . '<a class="btn btn-primary" href="download.php?file='.$status[$i]['bk_pd'] .'">Download</a>'."</td>
    
    </tr>";
                 echo"</table>";echo"</center>";
    }
}
    ?>