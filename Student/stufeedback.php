<?php
if(!isset($_SESSION)){
    session_start();
}

include('../stuInclude/header.php');
include_once('../dbConnection.php');

if(isset($_SESSION['is_login'])){
 $stuEmail=$_SESSION['stuLogemail'];
}else{
    echo"<script> location.href='../index.php';</script>";
}

$sql = "SELECT * FROM student WHERE stu_email='$stuEmail'";
$result = $conn->query($sql);
if($result->num_rows==1){
    $row = $result->fetch_assoc();
    $stuId = $row["stu_id"];
}

if(isset($_REQUEST['submitFeedbackBtn'])){
    if(($_REQUEST['f_content'] == "")){
        //msg display if required feild missing
        $passmsg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2" role = "alert"> Fill All Fileds </div>';
    }else{
        $fcontent = $_REQUEST["f_content"];
        $sql = "INSERT INTO feedback (t_contant, stu_id) VALUES ('$fcontent' , '$stuId')";
        if($conn->query($sql)==TRUE){
            // below msg will display submit successfully
            $passmsg = '<div class="alart alert-success col-sm-6 ml-5 mt-2" role = "alert"> Update Sucessfully </div>';
        } else{
            //msg will display on form submit failled
            $passmsg= '<div class="alart alert-danger col-sm-6 ml-5 mt-2" role = "alert">Unable to Update </div>';
        }
    }
    
}    

?>

 <div class="col-sm-6 mt-5">
  <form class="mx-5" method="POST" enctype="multipart/form-data">
  <div class="form-group">
          <label for="StuId">Student ID</label>
          <input type="text"class="form-control" id="stuId" name="stuId" value="<?php if (isset($stuId)){
              echo $stuId;}?>" readonly>
      </div>

      <div class="form-group">
          <label for="f_content">Write Feedback:</label>
          <textarea class="form-control" id="f_content" name="f_content" row=2></textarea>
      </div>
      <button type="submit" class="btn btn-primary" name="submitFeedbackBtn">Submit</button>
      <?php if(isset($passmsg)){echo $passmsg;} ?> 
      </form>
</div>

</div>   <!-- close row div from header file -->

<?php
include('../stuInclude/footer.php');
?>