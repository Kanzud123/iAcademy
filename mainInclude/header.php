<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,
    initial-scale=1.0">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- font awesome css -->
    <link rel="stylesheet" href="css/all.min.css"> 

     <!-- Google fonts -->
     <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@700&display=swap" rel="stylesheet">
     <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&family=Ubuntu:wght@700&display=swap" rel="stylesheet">
    
    <!-- Custome CSS -->
    <link rel="stylesheet" href="css/style.css">



    <!-- Start Free jQuery Slider HEAD section -->
<link rel="stylesheet" type="text/css" href="engine1/style.css" />
<script type="text/javascript" src="engine1/jquery.js"></script>
<!-- Free jQuery Slider HEAD section -->

    <title>iAcademy</title>
</head>
 <body>
<!-- starting Navbar -->
<nav class="navbar navbar-expand-sm navbar-dark fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand my-nav" href="index.php">iAcademy</a>
    <span class="navbar-text my-text">Learn and Implement</span>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <ul class="navbar-nav custom-nav pl-5">
        <li class="nav-item custom-nav-item"><a href="index.php" class="nav-link">Home</a></li>
        <!--<li class="nav-item custom-nav-item"><a href="courses.php" class="nav-link">Courses</a></li>-->
        <li class="nav-item custom-nav-item"><a href="paymentstatus.php" class="nav-link">Payment Status</a></li>
        <?php
session_start();
if(isset($_SESSION['is_login'])){
  echo'<li class="nav-item custom-nav-item"><a href="Student/studentProfile.php" class="nav-link">My Profile</a></li>
  <li class="nav-item custom-nav-item"><a href="logout.php" class="nav-link">Logout</a></li>
  <li class="nav-item custom-nav-item"><a href="courses.php" class="nav-link">Courses</a></li>';
}else {
  echo' <li class="nav-item custom-nav-item"><a href="#" class="nav-link" data-bs-toggle="modal" data-bs-target="#stuLoginModelCenter">Login</a></li>
  <li class="nav-item custom-nav-item"><a href="#" class="nav-link" data-bs-toggle="modal" data-bs-target="#stuRegModelCenter">Signup</a></li>';
}



?>
      
        <li class="nav-item custom-nav-item"><a href="#" class="nav-link">Feedback</a></li>
        <li class="nav-item custom-nav-item"><a href="about.php" class="nav-link">About Us</a></li>
     </ul>
    </div>
  </div>
</nav>

<!-- End Navbar -->
