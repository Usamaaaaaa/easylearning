
<?php include('../dbconnection.php');
include('../includes/adminheader.php'); 

if(isset($_REQUEST['updatestd_btn'])) {
    if(($_REQUEST['stdname'] == "") || ($_REQUEST['stdemail'] == "")){
          $errormsg='<div class="alert alert-warning alert-dismissible fade show" role="alert">
          <strong>ALL FIELD ARE REQUIRED!</strong> 
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>';
       }else{
         $id=$_REQUEST['sid'];
        $name=$_REQUEST["stdname"];
        $email=$_REQUEST['stdemail'];
     
  
       $sql="UPDATE student set std_id='$id',std_name='$name',std_email='$email' where std_id='".$_REQUEST['sid']."'";
     if($con->query($sql)==true){
       $errormsg='<div class="alert alert-success alert-dismissible fade show" role="alert">
       <strong>Registered Successfully!</strong>
       <button type="button" class="close" data-dismiss="alert" aria-label="Close">
         <span aria-hidden="true">&times;</span>
       </button>
     </div>';
  //    echo '<meta http-equiv="refresh" content="0;url=?closed"/>';
  }else{
       $errormsg='<div class="alert alert-danger alert-dismissible fade show" role="alert">
      <strong>unable to register!</strong> 
  
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>';}}}
      ?>
<?php 





  if(isset($_REQUEST['close_btn'])){
    echo "<script> location.href='student.php';</script>";
  }
?>




        
       <!-- edit course    start --> 
<div class="col-sm-6 jumbotron  mt-1">
<h3 class="text-center text-uppercase"> update student detail </h3>
<?php
if(isset($_REQUEST['edit'])){
  // if(isset($_REQUEST['hid'])){
    // echo $_REQUEST['hid'];
      $sql="SELECT * FROM student where std_id='".$_REQUEST['hid']."'";
      $result=$con->query($sql);
      $row=$result->fetch_assoc();

      ?>
<form action="" method="post" enctype="multipart/form-data">
<div class="form-group">
    <label for="sid">student id</label>
    <input type="text" class="form-control" id="sid"  placeholder="course id" name="sid"
    value="<?php
       if (isset($row['std_id'])) {
         echo $row['std_id'];
} 
    ?>"  readonly>
  </div>
<div class="form-group">
    <label for="sname">Name</label>
    <input type="text" class="form-control" id="sname"  placeholder="course name" name="stdname" value="<?php
       if (isset($row['std_name'])) {
         echo $row['std_name'];
} 
    ?>">
  </div>
  
  <div class="form-group ">
    <label for="semail">email</label>
    <input type="text" class="form-control" id="semail"  placeholder="email" name="stdemail" value="<?php
       if (isset($row['std_email'])) {
         echo $row['std_email'];
} 
    ?>">
  </div>
  
  
  
  <button type="submit" class="btn btn-success text-uppercase mt-2" name="updatestd_btn">update</button>
  <button type="submit" class="btn btn-dark text-uppercase mt-2" name="close_btn">close</button>

  
</form>
<?php if(isset($errormsg)){
    echo $errormsg;
  }
  $errormsg="";
  ?>
  </div>
  <?php
}
?>
<?php include('../includes/admnfooter.php') ?>