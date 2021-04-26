<!DOCTYPE html>
<html>
<head>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">

   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
      crossorigin="anonymous">

   <!-- Font Awesome -->
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ"
      crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
        <!-- Font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    
    <title>uploads</title>
    <style>
    .r
    {
        color:blue; border:2px red solid;
    }
    tr
    {
        font-size: 20px;
        color: blue    }
    td
    {
        color: black;
        font-size: 15px;
    }

    </style>
    
</head>
<body>

    <!-- Start Navigation div -->
  <nav class="navbar navbar-expand-sm navbar-dark bg-danger pl-5 fixed-top">
    <a href="../../index.html" class="navbar-brand">Synzineer</a>
    <span class="navbar-text">Learn and Implement</span>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#myMenu">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="myMenu">
      <ul class="navbar-nav pl-5 custom-nav">
        <li class="nav-item"><a href="../../index.html" class="nav-link">Home</a></li>
        <li class="nav-item"><a href="education.html" class="nav-link">Education</a></li>
        <li class="nav-item"><a href="software.html" class="nav-link">Software</a></li>
        <li class="nav-item"><a href="media.html" class="nav-link">Media</a></li>
        <li class="nav-item"><a href="uploads.php" class="nav-link">Download</a></li>
        <li class="nav-item"><a href="team.html" class="nav-link">Team</a></li>
        <li class="nav-item"><a href="faqs.html" class="nav-link">FAQs</a></li>
        <li class="nav-item"><a href="contact.html"  class="nav-link">Contact</a></li>
      </ul>
    </div>
  </nav> 


<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "synzineer");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt select query execution
$sql = "SELECT * FROM submit";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0)
    {
        echo "<div class='container'>";
        echo "<table class='table'>";
        echo "<thead class='thead-dark'>";
            echo "<tr>";
                echo "<th>Name </th>";
                echo "<th>Discription</th>";
                echo "<th>Click to Download</th>";
                //echo "<th>email</th>";
            echo "</tr>";
                    echo "<thead>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td style='text-transform: capitalize;'>" . $row['name'] . "</td>";
                echo "<td '>" . $row['disc'] . "</td>";
                //echo "<td>" . $row['email'] . "</td>";
               // echo "<td >" . $row['id'] . "</td>";
                echo "<td style='text-transform: capitalize;' >";
                    //echo "<a href=" '.$row['email']'">"fuckyou"</a>";
                print('<a href="'.$row['link'].'" target="blank">Download</a>');
                echo "</td >";
                
            echo "</tr>";
        }

        echo "</table>";


      // echo "<p  class='r'>CSS Styling in php</p>";

        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>


  

 <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
    crossorigin="anonymous"></script>
</body>
</html>