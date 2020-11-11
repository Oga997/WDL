<!DOCTYPE html>
<html>
<style>
    body{
        background-color: burlywood;
    }
    table{
        width: 100%;
    }
    table tr{
    }
    </style>    
<body>
<hr>
<center><b><h1>Biography section<img src="biog.png" style="width:50px;"></h1></b></center>
<hr>
<?php
include('request.php');
    
    $sql = "SELECT * FROM books where bk_catg='BIOGRAPHY'";
if($result = mysqli_query($db, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table 1px border>";
            echo "<tr>";
                echo "<th>Book</th>";
                echo "<th>Author</th>";
                echo "<th>Download</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['bk_nm'] . "</td>";
                echo "<td>" . $row['bk_aut'] . "</td>";
                echo "<td>" . $row['bk_pd'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
?>
<dl>
    <h2><b><dt>1. Hillbilly Elegy A Memoir of a Family and Culture in Crisis</dt></b></h2>
    <p>Hillbilly Elegy: A Memoir of a Family and Culture in Crisis is a memoir by J. D. Vance about the Appalachian values of his Kentucky family and their relation to the social problems of his hometown of Middletown, Ohio, where his mother's parents moved when they were young.</p>
    <a href="file:///D:/H-page/Biography-books/Hillbilly%20Elegy_%20A%20Memoir%20of%20a%20Family%20and%20Culture%20in%20Crisis.pdf"><dd>Click here</dd></a>
</dl>
<dl>
    <h2><b><dt>2. killers of the flower moon the osage murders and the birth of the fbi</dt></b></h2>
    <p>Killers of the Flower Moon: The Osage Murders and the Birth of the FBI is the third non-fiction book by American journalist David Grann.The book was released on April 18, 2017 by Doubleday.</p>
<p>Time magazine listed Killers of the Flower Moon as one of its top ten non-fiction books of 2017.The book is currently planned for production as a film directed by Martin Scorsese.</p>
    <a href="file:///D:/H-page/Biography-books/Killers%20of%20the%20Flower%20Moon_%20The%20Osage%20Murders%20and%20the%20Birth%20of%20the%20FBI.pdf"><dd>Click here</dd></a>
</dl>
</body>
</html>