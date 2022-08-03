<?php include('../dbconnection.php');
include('../includes/adminheader.php');
// <?php include('include/header.php');
// include('../requester/dbconnection.php');
if(isset($_REQUEST['addprod_btn'])) {
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
       $sql="INSERT INTO course_tb(course_name,course_desc,course_author,course_img,course_duration,course_price,c_orginal_price) values('$name','$desc','$authorname','$img_folder','$duration','$price','$orignalprice')";
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
    echo "<script> location.href='courses.php';</script>";
  }
    




?>
        <!-- add coursestart --> 
<div class="col-sm-6 jumbotron  mt-2">
<h3 class="text-center text-uppercase"> add new course  </h3>
<form action="" method="post" enctype="multipart/form-data">
<div class="form-group">
    <label for="coursename">Name</label>
    <input type="text" class="form-control" id="coursename"  placeholder="course name" name="cname">
  </div>
  
  <div class="form-group ">
    <label for="coursedesc">course description</label>
    <input type="text" class="form-control" id="coursedesc"  placeholder="email" name="cdesc">
  </div>
  <div class="form-group ">
    <label for="author">author</label>
    <input type="text" class="form-control" id="author"  placeholder="password" name="aname">
  </div>
  <div class="form-group ">
    <label for="duration">duration</label>
    <input type="text" class="form-control" id="duration"  placeholder="password" name="cduration">
  </div>
  
  <div class="form-group ">
    <label for="courseprice">price</label>
    <input type="text" class="form-control" id="courseprice"  placeholder="password" name="cprice">
  </div>
  <div class="form-group ">
    <label for="corginalp">orignal price</label>
    <input type="text" class="form-control" id="corginal"  placeholder="password" name="corignalprice">
  </div>
  <div class="form-group ">
    <label for="courseimg">course image</label>
    <input type="file" class="form-control-file" id="courseimg"  placeholder="password" name="cimage">
  </div>
  
  
  <button type="submit" class="btn btn-success text-uppercase" name="addprod_btn">add product</button>
  <button type="submit" class="btn btn-dark text-uppercase" name="close_btn">close</button>
  <?php if(isset($errormsg)){
    echo $errormsg;
  }
  $errormsg="";
  ?>
</form>


<?php include('../includes/admnfooter.php') ?>