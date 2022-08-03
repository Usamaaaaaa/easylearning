
<?php include('../dbconnection.php');
include('../includes/adminheader.php'); 

      ?>
<?php 
  if(isset($_REQUEST['updateprod_btn'])) {




  if(($_REQUEST['cname'] == "") || ($_REQUEST['cdesc'] == "") ||        
  ($_REQUEST['aname'] == "") || ($_REQUEST['cprice'] == "") || ($_REQUEST['corignalprice'] == "")  || ($_REQUEST['cduration'] == "")){
        $errormsg='<div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>ALL FIELD ARE REQUIRED!</strong> 
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>';
     }else{
       
      $name=$_REQUEST["cname"];
      $desc=$_REQUEST['cdesc'];
      $authorname=$_REQUEST['aname'];
      $duration=$_REQUEST['cduration'];
      $price=$_REQUEST["cprice"];
      $orignalprice=$_REQUEST['corignalprice'];
      $image=$_FILES['cimage']['name'];
      $temp_image=$_FILES['cimage']['tmp_name'];
      $img_folder='../images/courseimage/'.$image;
      move_uploaded_file($temp_image,$img_folder);

     $sql="UPDATE course_tb set course_name='$name',course_desc='$desc',course_author='$authorname',course_img='$img_folder',course_duration='$duration',course_price='$price',c_orginal_price='$orignalprice' where course_id='".$_REQUEST['cid']."'";
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
      $sql="SELECT * FROM course_tb where course_id='".$_REQUEST['hid']."'";
      $result=$con->query($sql);
      $row=$result->fetch_assoc();

      ?>
<form action="" method="post" enctype="multipart/form-data">
<div class="form-group">
    <label for="courseid">course id</label>
    <input type="text" class="form-control" id="courseid"  placeholder="course id" name="cid"
    value="<?php
       if (isset($row['course_id'])) {
         echo $row['course_id'];
} 
    ?>"  readonly>
  </div>
<div class="form-group">
    <label for="coursename">Name</label>
    <input type="text" class="form-control" id="coursename"  placeholder="course name" name="cname" value="<?php
       if (isset($row['course_name'])) {
         echo $row['course_name'];
} 
    ?>">
  </div>
  
  <div class="form-group ">
    <label for="coursedesc">course description</label>
    <input type="text" class="form-control" id="coursedesc"  placeholder="email" name="cdesc" value="<?php
       if (isset($row['course_desc'])) {
         echo $row['course_desc'];
} 
    ?>">
  </div>
  <div class="form-group ">
    <label for="author">author</label>
    <input type="text" class="form-control" id="author"  placeholder="password" name="aname" value="<?php
       if (isset($row['course_author'])) {
         echo $row['course_author'];
} 
    ?>">
  </div>
  <div class="form-group ">
    <label for="duration">duration</label>
    <input type="text" class="form-control" id="duration"  placeholder="password" name="cduration" value="<?php
       if (isset($row['course_duration'])) {
         echo $row['course_duration'];
} 
    ?>">
  </div>
  
  <div class="form-group ">
    <label for="courseprice">price</label>
    <input type="text" class="form-control" id="courseprice"  placeholder="password" name="cprice" value="<?php
       if (isset($row['course_price'])) {
         echo $row['course_price'];
} 
    ?>">
  </div>
  <div class="form-group ">
    <label for="corginalp">orignal price</label>
    <input type="text" class="form-control" id="corginal"  placeholder="password" name="corignalprice" value="<?php
       if (isset($row['c_orginal_price'])) {
         echo $row['c_orginal_price'];
} 
    ?>">
  </div>
  <div class="form-group ">
    <label for="courseimg">course image</label>
    <img src="<?php
       if (isset($row['course_img'])) {
         echo $row['course_img'];
} ?>" alt="" class="img-thumbnail" style="height: 200px; width:200px">
    <input type="file" class="form-control-file" id="courseimg"  placeholder="password" name="cimage">
  </div>
  
  
  <button type="submit" class="btn btn-success text-uppercase" name="updateprod_btn">update</button>
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