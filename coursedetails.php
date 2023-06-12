<!-- start header -->
<?php
include('./mainInclude/header.php');
?>

<!-- end header -->

<!-- start banner -->

<div class="container-fluid bg-dark"
 >
<div class="row">
    <img src=".\images\iStock-1164946738-scaled.jpg" alt="courses"
    style="hight=500px;width=100%; object-fit:cover; box: shadow 10px;"/>
</div>
</div>


    <!-- end banner -->


     <!-- start main content -->
     <div class="container">
   <div class="row">
       <div class="col-md-4">
       <img src="images/Math.jpg" class="card-img-top" alt="math">
</div>
<div class="col-md-8">
           <div class="card-body">
            <h5 class="card-title">Course Name: Math</h5>
            <p class="card-text">Description: Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <p class="card=text">Duration: 10 Days</p> 
        <form action="" method="post">
        <p class="card-text d-inline">Price: <small><del>1000tk</del></small>
        <span class="font-weight-bolder">700tk</span>
        </p> 
<button type="submit" class="btn btn-primary text-white font-weight-border float-right" name="buy">Buy Now</button>
        </form>
          </div>
        </div>
       </div>

       <div class="container">
           <div class="row">
               <table class="table table-bordered table-hover">
             <thead>
                 <tr>
                     <th scope="col">Lesson No.</th>
                     <th scope="col">Lesson Name</th>
                 </tr>
             </thead>
             <tbody>
                 <tr>
                     <th scope="row">1</th>
                     <td>introduction</td>
                 </tr>
             </tbody>
               </table>';
           </div>
       </div>
 <!--end main contant -->

  <!-- start contact us -->
  <?php
include('./contact.php');
?>
   <!-- end contact us -->

    <!-- start footer -->
<?php
include('./mainInclude/footer.php');
?>

<!-- end footer -->