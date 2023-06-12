<?php
include('./dbConnection.php');
include('./mainInclude/header.php');
?>
 <!-- Start video backgroung -->
 <div class="container-fluid remove-vid-marg">
     <div class="vid-parent ">
         <video playsinline autoplay muted loop  >
             <source src="videos/banner2.mp4" >
         </video>
     </div>
     <div class="vid-content">
    <h1 class="my-content-head">Welcome to iAcademy</h1>
    <small class="my-content">Making Study Easy</small><br />

<?php
 
 if(!isset($_SESSION['is_login'])){
   echo'<a href="#" class="btn btn-danger mt-3" data-bs-toggle="modal" data-bs-target="#stuRegModelCenter"

   >Get Started</a>';
 }else{
   echo'<a href=" Student/studentProfile.php" class="btn btn-primary mt-3">My Profile</a>';
 }

?>


    
    </div>
  </div>


<!-- End video background -->

<!-- Start Text banner -->
<div class="container-fluid bg-danger txt-banner">
  <div class="row botm-banner">
    <div class="col-sm">
    <h5><i class="fas fa-book-open mr-3"></i>100+ Online Courses</h5>
    </div>
    <div class="col-sm">
    <h5><i class="fas fa-user mr-3"></i>Expert Instroters</h5>
    </div>
    <div class="col-sm">
    <h5><i class="fas fa-keyboard mr-3"></i>Lifetime Access</h5>
    </div>
    <div class="col-sm">
    <h5><i class="fas fa-dollar-sign mr-3"></i>Money Back Guarantee</h5>
    </div>
  </div>
</div>
<!-- End Text Banner -->

<!-- Start Most Popular Courses -->
<div class="container">
  <h1 class="text-center" >Popular Courses</h1>
  
  <div class="container-courses">
   <div class="row">
     <!--  Start Most popular course 1st -->
       <div class="col-lg-4 each-con">
       <div class="card" style="width: 18rem;">
          <img src="images/Math.jpg" class="card-img-top" alt="math">
           <div class="card-body">
            <h5 class="card-title">Math</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
           <div class="card-footer">
         <p class="card-text d-inline">Price: <small><del>1000tk</del></small>
         <span class="font-weight-bolder">700tk</span>
          </p>
          <a href="#" class="btn btn-primary">Enroll Now</a>
          </div>
        </div>
       </div>
      <!--  End Most popular course 1st -->

      <div class="col-lg-4 each-con ">
          <!--  Start Most popular course 2nd -->
          <div class="card" style="width: 18rem;">
       <img src="images/phy.jpg" class="card-img-top" alt="physics">
       <div class="card-body">
        <h5 class="card-title">Physics</h5>
         <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
         <div class="card-footer">
         <p class="card-text d-inline">Price: <small><del>1000tk</del></small>
        <span class="font-weight-bolder">700tk</span>
        </p>
       <a href="#" class="btn btn-primary">Enroll Now</a>
       </div>
        </div>
  <!--  End Most popular course 2nd -->
      </div>

     <div class="col-lg-4 each-con">
         <!--  Start Most popular course 3rd -->
   <div class="card" style="width: 18rem;">
  <img src="images/ict.jpg" class="card-img-top" alt="ict">
  <div class="card-body">
    <h5 class="card-title">ICT</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
   </div>
   <div class="card-footer">
     <p class="card-text d-inline">Price: <small><del>800tk</del></small>
    <span class="font-weight-bolder">500tk</span>
    </p>
    <a href="#" class="btn btn-primary">Enroll Now</a>
   </div>
</div>
  <!--  End Most popular course 3rd -->
     </div>
   </div> 
   <!-- end row 1 -->
   
   <div class="row">
      <!--  Start Most popular course 4th -->
      <div class="col-lg-4 each-con">
       <div class="card" style="width: 18rem;">
          <img src="images/bio.jpg" class="card-img-top" alt="bio">
           <div class="card-body">
            <h5 class="card-title">Biology</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
           <div class="card-footer">
         <p class="card-text d-inline">Price: <small><del>900tk</del></small>
         <span class="font-weight-bolder">600tk</span>
          </p>
          <a href="#" class="btn btn-primary">Enroll Now</a>
          </div>
        </div>
       </div>
      <!--  End Most popular course 4th-->
      

      <!--  Start Most popular course 5th -->
      <div class="col-lg-4 each-con">
       <div class="card" style="width: 18rem;">
          <img src="images/history.jpg" class="card-img-top" alt="History">
           <div class="card-body">
            <h5 class="card-title">History</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
           <div class="card-footer">
         <p class="card-text d-inline">Price: <small><del>1100tk</del></small>
         <span class="font-weight-bolder">800tk</span>
          </p>
          <a href="#" class="btn btn-primary">Enroll Now</a>
          </div>
        </div>
       </div>
      <!--  End Most popular course 5th -->

      <!--  Start Most popular course 6th -->
      <div class="col-lg-4 each-con">
       <div class="card" style="width: 18rem;">
          <img src="images/chem.jpg" class="card-img-top" alt="chemistry">
           <div class="card-body">
            <h5 class="card-title">Chemistry</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
           <div class="card-footer">
         <p class="card-text d-inline">Price: <small><del>1200tk</del></small>
         <span class="font-weight-bolder">1000tk</span>
          </p>
          <a href="#" class="btn btn-primary">Enroll Now</a>
          </div>
        </div>
       </div>
      <!--  End Most popular course 6th -->
   </div>
  </div>
</div>

<!-- Start Contact Us -->
<?php
include('./contact.php');
?>
<!-- end Contact Us -->
<!-- start student testimonial -->
<div class="container-fluid mt-5" style="background-color: #4B7289" id="Feedback">
<h1> Student Feedback</h1>
<div class="container">
<label for="first" class="first"></label>
<label for="second"  class="second"></label>
<div class="one slide">
    <blockquote>
      <span class="leftq quotes">&ldquo;</span> He promptly completed the task at hand and communicates really well till the project reaches the finishing line. I was pleased with his creative design and will definitely be hiring him again. <span class="rightq quotes">&bdquo; </span>
    </blockquote>
    <img src="images\pexels-photo-2681751.jpeg " width="130" height="150" />
    <h2>Steve Kruger</h2>
    <h6>UI/UX Designer at Woof Design Studio</h6>
  </div>
  
  <div class="two slide">
    <blockquote>
      <span class="leftq quotes">&ldquo;</span> He promptly completed the task at hand and communicates really well till the project reaches the finishing line. I recommend him to anyone who wants their work done professionally. <a href="#"></a><span class="rightq quotes">&bdquo; </span>
    </blockquote>
    <img src="images\pexels-photo-594610.jpeg" width="150" height="170" />
    <h2>John Doe</h2>
    <h6>Developer Relations at Woof Studios</h6>
  </div>
</div>
</div>
          <!-- end student testimonial -->    
              
  <!-- Start social media -->
<div class="container-fluid bg-danger txt-banner">
  <div class="row text-white text-center p-1">
    <div class="col-sm">
      <a class ="text-white social-hover" href="#">
    <i class="fab fa-facebook-f"></i>facebook</a>
    </div>
    <div class="col-sm">
    <a class ="text-white social-hover" href="#">
    <i class="fab fa-twitter "></i>Twitter</a>
    </div>
    <div class="col-sm">
    <a class ="text-white social-hover" href="#">
      <i class="fab fa-whatsapp mr-3"></i>Whatsapp</a>
    </div>
    <div class="col-sm">
    <a class ="text-white social-hover" href="#"><i class="fab fa-instagram mr-3"></i>Instagram</a>
    </div>
  </div>
</div>
<!-- End social-->

<!-- start about section-->
<div class="container-fluid p-4" style="background-color: #E9ECEF">
  <div class="container" style="background-color: #E9ECEF" > 
  <div class="row text-center"> 
  <div class="col-sm">
    <h5>About Us</h5>
    <p>IACADEMY provies universal access to the world's best education,partnering with top universities and organization to offer courses online.</p>
  </div>
  <div class="col-sm">
    <h5>Catagory</h5>
  <a class ="text-dark" href="#">Web Development</a><br />
  <a class ="text-dark" href="#">Web Designing</a><br />
  <a class ="text-dark" href="#">Android App Dev</a><br />
  <a class ="text-dark" href="#">iOS Development</a><br />
  <a class ="text-dark" href="#">Data Analysis</a><br />
</div>
<div class="col-sm">
<h5>Contact Us</h5>
    <p>IAcademy Pvt Ltd <br> Near Police Camp II <br> Bokaro,Jharkhand <br> Ph.000000000</p>
</div>
</div>
</div>
</div>
<!-- end about section-->

<?php
include('./mainInclude/footer.php');
?>