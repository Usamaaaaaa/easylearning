<?php
if(!isset($_SESSION)){

   session_start();
  }
  include('../dbconnection.php');
  include('./header.php');
//   include('includes/header.php');
  $email=$_SESSION['std_email'];

//   $sql="SELECT * FROM student WHERE std_email='$email'";
//   $result=$con->query($sql);
//     if($result->num_rows>0){
//         $row=$result->fetch_assoc();
//         $stdid=$row["std_id"];
//         $stdname=$row["std_name"];
//         $stdemail=$row["std_email"];
//         // $stdid=$row["std_id"];
    // }
    if(isset($_REQUEST['stdup_btn'])) {




        if(($_REQUEST['stdname'] == "") || ($_REQUEST['sid'] == "") ||        
        ($_REQUEST['stdemail'] == "")){
              $errormsg='<div class="alert alert-warning alert-dismissible fade show" role="alert">
              <strong>ALL FIELD ARE REQUIRED!</strong> 
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>';
           }else{
             
            $name=$_REQUEST["stdname"];
            $id=$_REQUEST['sid'];
            $email=$_REQUEST['stdemail'];
            // $duration=$_REQUEST['cduration'];
            // $price=$_REQUEST["cprice"];
            // $orignalprice=$_REQUEST['corignalprice'];
            $image=$_FILES['simage']['name'];
            $temp_image=$_FILES['simage']['tmp_name'];
            $img_folder='../images/stdimg/'.$image;
            move_uploaded_file($temp_image,$img_folder);
      
           $sql="UPDATE student set  std_id='$id',std_name='$name',std_email='$email',std_img='$img_folder' where std_id='".$_REQUEST['sid']."'";
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


  <div class="col-sm-6 mt-5">
      <form action="" method="POST" class="mx-5" enctype="multipart/form-data">
       
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

    ?>"><br>
     <div class="form-group ">
    <label for="courseimg">course image</label>
    <img src="<?php
       if (isset($row['std_img'])) {
         echo $row['std_img'];
} ?>" alt="" class="img-thumbnail" style="height: 200px; width:200px">
    <input type="file" class="form-control-file" id="courseimg"  name="simage">
  </div>
  
  <button type="submit" class="btn btn-success text-uppercase mt-2" name="stdup_btn">update</button>
  <button type="submit" class="btn btn-dark text-uppercase mt-2" name="close_btn">close</button>
    
    
    
    
    </form>
    <?php 
    if(isset($errormsg)){
      echo $errormsg;
    }
    ?>
  </div>

<?php include('footer.php') ?>