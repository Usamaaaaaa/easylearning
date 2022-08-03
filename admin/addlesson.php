<?php include('../dbconnection.php');
include('../includes/adminheader.php');
// <?php include('include/header.php');
// include('../requester/dbconnection.php');
session_start();

if(isset($_REQUEST['addless_btn'])) {
    if(($_REQUEST['cname'] == "") || ($_REQUEST['ldesc'] == "") || ($_REQUEST['lname'] == "") || ($_REQUEST['cid'] == "")){
          $errormsg='<div class="alert alert-warning alert-dismissible fade show" role="alert">
          <strong>ALL FIELD ARE REQUIRED!</strong> 
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>';
       }else{
        $name=$_REQUEST["cname"];
        $id=$_REQUEST["cid"];
        $desc=$_REQUEST['ldesc'];
        $lname=$_REQUEST['lname'];
        // $duration=$_REQUEST['llink'];
        // $price=$_REQUEST["cid"];
        // $orignalprice=$_REQUEST['corignalprice'];
        $link=$_FILES['llink']['name'];
        $temp_link=$_FILES['llink']['tmp_name'];
        $vid_folder='../lessonvid/'.$link;
        move_uploaded_file($temp_link,$vid_folder);
       $sql="INSERT INTO lesson(lesson_name,lesson_desc,lesson_link,course_id,course_name) values('$lname','$desc','$vid_folder','$id','$name')";
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
    echo "<script> location.href='lesson.php';</script>";
  }
    




?>
        <!-- add coursestart --> 
<div class="col-sm-6 jumbotron  mt-5 mx-3 jumbotron">
<h3 class="text-center text-uppercase"> add new lesson  </h3>
<form action="" method="post" enctype="multipart/form-data">
<div class="form-group">
    <label for="courseid">course id</label>
    <input type="text" class="form-control" id="courseid"  placeholder="course name" name="cid" value="
    <?php
    if(isset($_SESSION['corseid'])){
     echo $_SESSION['corseid'];
    }
    ?>
    
    
    " readonly>
  </div>
<div class="form-group">
    <label for="coursename"> course Name</label>
    <input type="text" class="form-control" id="coursename"  placeholder="course name" name="cname" value="<?php
    if(isset($_SESSION['corsename'])){
        echo $_SESSION['corsename'];
       }
    ?>
">
  </div>
  <div class="form-group">
    <label for="name"> lesson Name</label>
    <input type="text" class="form-control" id="name"  placeholder="lesson name" name="lname">
  </div>
  
  <div class="form-group ">
    <label for="desc">lesson description</label>
    <input type="text" class="form-control" id="desc"  placeholder="description" name="ldesc">
  </div>

  <div class="form-group ">
    <label for="link">lesson video link</label>
    <input type="file" class="form-control-file" id="link"   name="llink">
  </div>
  
  
  
  <button type="submit" class="btn btn-success text-uppercase" name="addless_btn">add product</button>
  <button type="submit" class="btn btn-dark text-uppercase" name="close_btn">close</button>
  <?php if(isset($errormsg)){
    echo $errormsg;
    // echo $_SESSION['corseid'];
  }
  $errormsg="";
  ?>
</form>


<?php include('../includes/admnfooter.php') ?>