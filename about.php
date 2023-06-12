<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.col-lg-8 {
  float: left;
  width: 33.33%;
  margin-bottom: 16px;
  padding: 0 8px;
  margin-left:250px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: #000000;
  color: white;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .col-lg-8 {
    width: 100%;
    display: block;
  }
}
</style>
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
        </ul>
    </div>
  </div>
</nav>

<div class="about-section">
  <h1>About Us Page</h1>
  <p>Some text about who we are and what we do.</p>
  <p>iAcademy is a website where student can learn online through content or video lesson.<br> It is the modern education system of electronics technology is called electronic learning or e-learning.<br> The development of technology around the world has touched the education system.<br>HTML,CSS,Bootstrap,XAMPP (Web Server),PHP,MySQL</p>
</div>

<h2 style="text-align:center">Our Team</h2>
<div class="row">
<div class="col-lg-8">
    <div class="card">
      <img src=".\images\1633415393340.jpg" alt="Suhi" style="width:100%">
      <div class="container">
        <h2>Nazifa Anjum</h2>
        <p class="title">18.02.04.103</p>
        <p>Web Developer</p>
        <p>180204103@aust.edu</p>
      </div>
    </div>
  </div>

  <div class="col-lg-8">
    <div class="card">
      <img src=".\images\IMG_4319.jpg" alt="kanzud" style="width:100%">
      <div class="container">
        <h2>Kanzud Saiyara</h2>
        <p class="title">18.02.04.105</p>
        <p>Web Developer</p>
        <p>180204105@aust.edu</p>
      </div>
    </div>
  </div>
  

</div>

</body>
</html>
