<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "synzineer");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$first_name = mysqli_real_escape_string($link, $_REQUEST['name']);
$last_name = mysqli_real_escape_string($link, $_REQUEST['phone']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
$email1 = mysqli_real_escape_string($link, $_REQUEST['email1']);
 
// Attempt insert query execution
$sql = "INSERT INTO test (name, phone, email, email1) VALUES ('$first_name', '$last_name', '$email','$email1')";

if(mysqli_query($link, $sql)){
    header('Refresh:1; url=../../index.html');
    echo "<script type='text/javascript'>alert('submitted successfully!')</script>";
     // exit; 
      
} else{
    header('Refresh:0; url=../../form.html');
    echo "<script type='text/javascript'>alert('Failed!!! Try again')</script>";
 
// Close connection
mysqli_close($link);
?>