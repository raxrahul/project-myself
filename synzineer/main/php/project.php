<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "synzineer");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$name = mysqli_real_escape_string($link, $_REQUEST['name']);
$phone = mysqli_real_escape_string($link, $_REQUEST['phone']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
$s_name = mysqli_real_escape_string($link, $_REQUEST['s_name']);
$s_language = mysqli_real_escape_string($link, $_REQUEST['s_language']);
$degree = mysqli_real_escape_string($link, $_REQUEST['degree']);
$text1 = mysqli_real_escape_string($link, $_REQUEST['text1']);
$s_cost = mysqli_real_escape_string($link, $_REQUEST['s_cost']);
 
// Attempt insert query execution
$sql = "INSERT INTO project (name, phone, email, s_name, s_language, degree, s_cost, text1) 
VALUES ('$name', '$phone', '$email','$s_name','$s_language','$degree','$s_cost','$text1')";

if(mysqli_query($link, $sql)){
    
    header('Refresh:0; url=../../index.html');
    echo "<script type='text/javascript'>alert('submitted successfully!')</script>";
     // exit; 
      
} else{
    header('Refresh:0; url=../../form.html');
    echo "<script type='text/javascript'>alert('Failed!!!  Try Again')</script>";
}
 
// Close connection
mysqli_close($link);
?>