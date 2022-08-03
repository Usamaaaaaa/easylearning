<?php include('../dbconnection.php');
include('../includes/adminheader.php');
// <?php include('include/header.php');
// include('../requester/dbconnection.php');
if(isset($_REQUEST['addstd_btn'])) {
    if(($_REQUEST['sname'] == "") || ($_REQUEST['semail'] == "") ||        
    ($_REQUEST['spass'] == "")){
          $errormsg='<div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>ALL FIELD ARE REQUIRED!</strong> 
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>';
       }else{
        $name=$_REQUEST["sname"];
        $email=$_REQUEST['semail'];
        $pass=$_REQUEST['spass'];
        // $duration=$_REQUEST['cduration'];
        // $price=$_REQUEST["cprice"];
        // $orignalprice=$_REQUEST['corignalprice'];
        // $image=$_FILES['cimage']['name'];
        // $temp_image=$_FILES['cimage']['tmp_name'];
        // $img_folder='../images/courseimage/'.$image;
        // move_uploaded_file($temp_image,$img_folder);
       $sql="INSERT INTO student(std_name,std_email,std_pass) values('$name','$email','$pass')";
     if($con->query($sql)==true){
       $errormsg='<div class="alert alert-success alert-dismissible fade show" role="alert">
       <strong>Registered Successfully!</strong>
       <button type="button" class="close" data-dismiss="alert" aria-label="Close">
         <span aria-hidden="true">&times;</span>
       </button>
     </div>';}else{
       $errormsg='<div class="alert alert-danger alert-dismissible fade show" role="alert">
      <strong>unable to register!</strong> 
 
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>';}}}
    
    
if(isset($_REQUEST['close_btn'])){
    echo "<script> location.href='student.php';</script>";
  }
    




?>
        <!-- add coursestart --> 
<div class="col-sm-6 jumbotron  mt-2">
<h3 class="text-center text-uppercase"> add new student  </h3>
<form action="" method="post" enctype="multipart/form-data">
<div class="form-group">
    <label for="stdname">Name</label>
    <input type="text" class="form-control" id="stdname"  placeholder="student name" name="sname">
  </div>
  
  <div class="form-group ">
    <label for="stdemail">email</label>
    <input type="email" class="form-control" id="stdemail"  placeholder="email" name="semail">
  </div>
  <div class="form-group ">
    <label for="stdpass">password</label>
    <input type="text" class="form-control" id="stdpass"  placeholder="password" name="spass">
  </div>
  
  
  
  <button type="submit" class="btn btn-success text-uppercase" name="addstd_btn">add student</button>
  <button type="submit" class="btn btn-dark text-uppercase" name="close_btn">close</button>
  <?php if(isset($errormsg)){
    echo $errormsg;
  }
  $errormsg="";
  ?>
</form>
</div>

<?php include('../includes/admnfooter.php') ?>