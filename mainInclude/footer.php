<!-- Start Footer -->


<Footer class="container-fluid bg-dark text-center p-2">
  <small class=" text-white"
  >Copyright &copy; 2019 || Designed By iAcademy ||</small>

</Footer>
<!-- end footer-->

<!--start registration form-->
<!-- Modal -->
<div class="modal fade" id="stuRegModelCenter" tabindex="-1" aria-labelledby="stuRegModelCenterLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="stuRegModelCenterLabel">Student Registration</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        
 <!-- Start student reg. form -->
<?php include('studentRegistration.php'); ?>
 <!-- end student reg. form -->

      </div>
      <div class="modal-footer">
        <span id="successMsg"></span>
        <button type="button" class="btn btn-primary" onclick="addStu()"id="signup">Sign Up</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" >Close</button>
      </div>
    </div>
  </div>
</div>
<!--end registration form-->

<!--start login form-->

<!-- start student login modal -->
<!-- Modal -->
<div class="modal fade" id="stuLoginModelCenter" tabindex="-1" role="dialog" aria-labelledby="stuLoginModelCenterLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="stuLoginModelCenterLabel">Student Log in</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">

      <!-- Start student login form -->

      <form id="StuLoginform">
          <div class="form-group">
            <i class="fas fa-envelope"></i>
            <label for="stuLogemail" class="pl-2 font-weight-bold">Email</label>
            <input
              type="email"
              class="form-control"
              placeholder="email"
              name="stuLogemail"
              id="stuLogemail"
            >
          </div>
          <div class="form-group">
            <i class="fas fa-key"></i>
            <label
              for="stuLogpass"
              class="pl-2 font-weight-bold"
            >
              Password</label
            >
            <input
              type="password"
              class="form-control"
              placeholder="password"
              name="stuLogpass"
              id="stuLogpass"
            >
          </div>
        </form>
</div>
        <div class="modal-footer">
          <small id="statusLogMsg"></small>
          <button type="button" class="btn btn-primary" onclick="checkStuLogin()" id="stuLoginBtn">Log In</button>
          <button
            type="button"
            class="btn btn-secondary"
            data-bs-dismiss="modal"
          >
            Cancel
          </button>
        </div>
          </div>
           </div>
             </div>
        <!-- end student log in form -->

<!--end login form-->








<!-- jquery and bootstrap javascript -->
<script src="js/jquery.min.js"></script>
<script src="js/propper.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<!-- font awesome js -->
<script src="js/all.min.js"></script>



<!--Student Ajax Call JavaScript -->
<script type="text/javascript" src="js/ajaxrequest.js"></script>

 </body>
 </html>