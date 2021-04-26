<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "synzineer");
 
// Check connection
if($link === false){
    die("<b>ERROR: Could not connect.</b> " . mysqli_connect_error());
}
 
// Escape user inputs for security
$name = mysqli_real_escape_string($link, $_REQUEST['name']);
$email = mysqli_real_escape_string($link, $_REQUEST['disc']);
$text = mysqli_real_escape_string($link, $_REQUEST['link']);
 
// Attempt insert query execution
$sql = "INSERT INTO submit (name,disc,link) VALUES ('$name','$email','$text')";

if(mysqli_query($link, $sql)){
    header('Refresh:0; url=../html/welcome.php');
    echo "<script type='text/javascript'>alert('Submitted successfully !')</script>";
     // exit; 
      
} else{
     header('Refresh:0; url=../html/welcome.php');
    echo "<script type='text/javascript'>alert('Failed !!!, Try again')</script>";
}
 
// Close connection
mysqli_close($link);
?>