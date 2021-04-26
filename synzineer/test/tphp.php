<?php

// Grab User submitted information
$email = $POST["email"];
$password = $POST["password"];

// Connect to the database
$con = mysql_connect("localhost","root","");
// Make sure we connected successfully
if(! $con)
{
    die('Connection Failed'.mysql_error());
}

// Select the database to use
mysql_select_db("synzineer",$con);

$result = mysql_query("SELECT * FROM resister WHERE email = '$email' and password='$password'") or die("failed to wuery innto database".mysql_error());

$row = mysql_fetch_array($result);

if($row["email"]==$email && $row["password"]==$password)
    echo"login succesfulllllllll.";
else
    echo"fuck u!!!!!!!!!!!!!!!!!";
?>