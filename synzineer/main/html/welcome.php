<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location:login.php");
    exit;
}
?>
 
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
    
     

    <title>Welcome</title>
       

    <style>
      .custom-margin {
         margin-top: 20vh;
      }
      .cloud-main
      {
        height: 150px;
        width: 100%;
        background-color: black;
        padding-top: 30px;
      }

     

      /* If you add background image it will look like transparent form*/
       body {
        padding-top: 200px;
        
      }
   </style>
</head>
<body style="background-color: #e3e0df">
<!-- Start Navigation div -->
  <nav  style="margin-top: -200px;" class="navbar navbar-expand-sm navbar-dark bg-danger pl-5 fixed-top">
    <a href="../../index.html" class="navbar-brand">Synzineer</a>
    <span class="navbar-text">Learn and Implement</span>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#myMenu">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="myMenu">
      <ul class="navbar-nav pl-5 custom-nav">
        <li class="nav-item"><a href="../../index.html" class="nav-link">Home</a></li>
        <li class="nav-item"><a href="#Services" class="nav-link">Education</a></li>
        <li class="nav-item"><a href="#Courses" class="nav-link">Software</a></li>
        <li class="nav-item"><a href="#Contact" class="nav-link">Media</a></li>
        <li class="nav-item"><a href="uploads.php" class="nav-link">Download</a></li>
        <li class="nav-item"><a href="#Team" class="nav-link">Team</a></li>
        <li class="nav-item"><a href="#Contact" class="nav-link">FAQs</a></li>
        <li class="nav-item"><a href="#Contact" class="nav-link">Contact</a></li>
      </ul>
    </div>
  </nav>


<div style="height: 140px;width: 100%;background-color: black;opacity: 0.9">
    <div  align="center" style="margin-top: -20px;">
        <h1 style="color: white;padding-top:30px;">Hi, <b style="color: yellow;text-transform: capitalize;"><?php echo htmlspecialchars($_SESSION["username"]); ?></b >. Welcome to our site.</h1>
    </div>
   
    <p align="center">
        <a href="reset-password.php" class="btn btn-warning" >Reset Your Password</a>
        <a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>
    </p>  
</div>
<div style="width: 100%;height: 5px;background-color: yellow"></div>




<div class="cloud-main">
<div class="container">
  <div class="row">
  <div class="col">
    <div class="row">
        <div class="col">
            <a href="https://www.google.com/drive/" target="_blank">
            <img src="../photo/drive2.jpg" class="border border-warning" style="height: 80px;background-color: red;box-shadow: 2px 2px 8px black">
            </a>
        </div>
        <div class="col" style="margin-top: 10px;">
            <a href="https://www.google.com/drive/" target="_blank" style="text-decoration: none">
            <p style="font-size: 45px;color: white;text-shadow: 2px 2px 1px black;border-radius: 5px; font-family: 'Roboto', sans-serif;box-shadow: 2px 2px yellow;background-color: #fef554;margin-left: -60px;margin-right: 100px;">Drive</p>
            </a>
        </div>    
  </div>
</div>


  <div class="col">
    <div class="row">
        <div class="col">
            <a href="https://www.mediafire.com/" target="_blank">
            <img src="../photo/mfire.png"  class="border border-warning" style="height: 80px;background-color: red;box-shadow: 2px 2px 8px black">
        </a>
        </div>
        <div class="col" style="margin-top: 10px;">
        <a href="https://www.mediafire.com/" target="_blank" style="text-decoration: none;">   
            <p style="font-size: 45px;color: white;text-shadow: 2px 2px 1px black;border-radius: 5px; font-family: 'Roboto', sans-serif;box-shadow: 2px 2px yellow;background-color: #fef554;margin-left: -40px;margin-right: 60px;">Mediafire</p>
        </a> 
        </div>    
  </div>
  </div>


  <div class="col">
    <div class="row">
        <div class="col">
            <a href="https://mega.nz/" target="_blank"> 
            <img src="../photo/mega.png" class="border border-warning" style="height: 80px;background-color: red;box-shadow: 2px 2px 8px black">
        </a>
        </div>
        <div class="col" style="margin-top: 10px;">
        <a href="https://mega.nz/" target="_blank" style="text-decoration: none;">     
            <p style="font-size: 45px;color: white;text-shadow: 2px 2px 1px black;border-radius: 5px; font-family: 'Roboto', sans-serif;box-shadow: 2px 2px yellow;background-color: #fef554;margin-left: -60px;margin-right: 100px;">Mega</p>
        </a>
        </div>    
  </div>
  </div>
</div>          
</div>
</div>
<div style="width: 100%;height: 5px;background-color: yellow"></div>


<div style="width: 500px; margin-left: 35%;margin-top: 50px;border-color: 2px 2px black;background-color: #aeaeae;padding: 20px;border-radius: 7px;" class="submit-link" >
    <form action="../php/submit.php" method="post">
        <h3 style="font-weight: bold;font-size: 25px;margin-bottom: 20px;color: white;font-family: 'Roboto', sans-serif;">Upload Here</h3>
    <input class="form-control"  type="text" name="name" placeholder="name of the content" required><Br>
    <input class="form-control" type="text" name="disc" placeholder="Discription" required><Br>
    <input class="form-control" type="text" name="link" placeholder="link" required><Br>
    <input type="submit" name="submit" value="submit" class="btn btn-dark">
    </form>
</div >


  <!-- Start Footer-->
  <footer class="container-fluid bg-dark text-white mt-5 " style="border-top: 3px solid #DC3545;">
    <div class="container">   <!-- Start Footer Container -->
      <div class="row py-3">    <!-- Start Footer Row -->
        <div class="col-md-6">      <!-- Start Footer 1st Column -->
          <div>
            <span>Follow Us: </span>
            <a href="https://fb.me/synzineer.cf  " target="_blank"><i class="fab fa-facebook-f px-3"></i></a>
            <a href="https://twitter.com/synzineer" target="_blank"><i class="fab fa-twitter pr-3"></i></a>
            <a href="https://www.youtube.com/channel/UCVOtx62H_Or-nzqIZ2NFrTw" target="_blank"><i class="fab fa-youtube pr-3"></i></a>
            <a href="https://plus.google.com/u/0/" target="_blank"><i class="fab fa-google-plus-g pr-3"></i></a>
            
            <a href="https://www.instagram.com/synzineer" target="_blank"><i class="fab fa-instagram pr-3"></i></a>
          </div>
        </div>    <!-- End Footer 1st Column -->

        <div class="col-md-6 text-right">   <!-- Start Footer 2nd Column -->
          <small> Designed by <a href="http://www.synzineer.cf" target="_blank" style="color: #dc3545">Rahul singh</a> &copy; 2019. </small>
        </div>    <!-- End Footer 2nd Column -->
      </div>    <!-- End Footer Row -->
    </div>    <!-- End Footer Container -->
  </footer> <!-- End Footer -->
</body>
</html>