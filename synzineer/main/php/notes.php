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
$phone =$_REQUEST['phone']; //mysqli_real_escape_string($link, $_REQUEST['phone']);
$notes =$_REQUEST['notes'];
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
$text = mysqli_real_escape_string($link, $_REQUEST['text']);
 
// Attempt insert query execution
$sql = "INSERT INTO notes (name, phone, email, notes, text1) VALUES ('$name', '$phone', '$email','$notes','$text')";

if(mysqli_query($link, $sql)){
    header('Refresh:1; url=../../index.html');
    echo "<script type='text/javascript'>alert('submitted successfully!')</script>";
     // exit; 
      
} else{
     header('Refresh:0; url=../../form.html');
    echo "<script type='text/javascript'>alert('Failed !!!, Try again')</script>";
}
 
// Close connection
mysqli_close($link);
?>