
<?php include('../dbconnection.php');
include('../includes/adminheader.php'); 

      ?>
<?php 
  if(isset($_REQUEST['updateless_btn'])) {




  if(($_REQUEST['cname'] == "") || ($_REQUEST['ldesc'] == "") ||        
  ($_REQUEST['lname'] == "") || ($_REQUEST['cid'] == "") || ($_REQUEST['lid'] == "")){
        $errormsg='<div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>ALL FIELD ARE REQUIRED!</strong> 
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>';
     }else{
       
      $name=$_REQUEST["cname"];
      $desc=$_REQUEST['ldesc'];
      $lname=$_REQUEST['lname'];
      $cid=$_REQUEST['cid'];
      $lid=$_REQUEST["lid"];
      // $orignalprice=$_REQUEST['corignalprice'];
      $link=$_FILES['less_link']['name'];
      $temp_link=$_FILES['less_link']['tmp_name'];
      $vid_folder='../lessonvid/'.$link;
      move_uploaded_file($temp_link,$vid_folder);

     $sql="UPDATE lesson set  lesson_id='$lid',lesson_name='$lname',lesson_desc='$desc',lesson_link='$vid_folder',course_id='$cid',course_name='$name' where lesson_id='".$_REQUEST['lid']."'";
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
  if(isset($_REQUEST['close1_btn'])){
    echo "<script> location.href='courses.php';</script>";
  }
?>




        
       <!-- edit course    start --> 
<div class="col-sm-6 jumbotron  mt-1">
<h3 class="text-center text-uppercase"> update course detail </h3>
<?php
if(isset($_REQUEST['edit'])){
  // if(isset($_REQUEST['hid'])){
    // echo $_REQUEST['hid'];
      $sql="SELECT * FROM lesson where lesson_id='".$_REQUEST['lid']."'";
      $result=$con->query($sql);
      $row=$result->fetch_assoc();

      ?>
<form action="" method="post" enctype="multipart/form-data">
<div class="form-group">
    <label for="courseid">lesson id</label>
    <input type="text" class="form-control" id="courseid"  placeholder="course id" name="lid"
    value="<?php
       if (isset($row['lesson_id'])) {
         echo $row['lesson_id'];
} 
    ?>"  readonly>
  </div>
<div class="form-group">
    <label for="coursename"> lesson Name</label>
    <input type="text" class="form-control" id="coursename"  placeholder="course name" name="lname" value="<?php
       if (isset($row['lesson_name'])) {
         echo $row['lesson_name'];
} 
    ?>">
  </div>
  
  <div class="form-group ">
    <label for="coursedesc">lesson description</label>
    <input type="text" class="form-control" id="coursedesc"  placeholder="email" name="ldesc" value="<?php
       if (isset($row['lesson_desc'])) {
         echo $row['lesson_desc'];
} 
    ?>">
  </div>
  <div class="form-group ">
    <label for="author">course id</label>
    <input type="text" class="form-control" id="author"  placeholder="password" name="cid" value="<?php
       if (isset($row['course_id'])) {
         echo $row['course_id'];
} 
    ?>">
  </div>
  <div class="form-group ">
    <label for="author">course name</label>
    <input type="text" class="form-control" id="author"  placeholder="password" name="cname" value="<?php
       if (isset($row['course_name'])) {
         echo $row['course_name'];
} 
    ?>">
  </div>
  
  <div class="form-group ">
    <label for="courseimg">course video</label>
    <div class="embed-responsive embed-responsive-16by9">
  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen></iframe>
</div>
<input type="file" class="form-control-file" id="courseimg" name="less_link">
  </div>
  
  
  <button type="submit" class="btn btn-success text-uppercase" name="updateless_btn">update</button>
  <button type="submit" class="btn btn-dark text-uppercase" name="close1_btn">close</button>
  <?php if(isset($errormsg)){
    echo $errormsg;
  }
  $errormsg="";
  ?>
</form>
  
  </div>
  
  <!-- <button type="submit" class="btn btn-success" name="UPDATE_btn">UPDATE</button>
  <button type="submit" class="btn btn-dark" name="close_btn">close</button>
  < <?php 
  // if(isset($errmsg)){ -->
      // echo $errmsg;
  // }
  // $errmsg="";
  ?>
  </form> -->
  <?php
}
// }

?>
<?php include('../includes/admnfooter.php') ?>