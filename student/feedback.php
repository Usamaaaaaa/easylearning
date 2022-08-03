<?php
if(!isset($_SESSION)){

   session_start();
  }
  include('../dbconnection.php');
  include('header.php');
  if(isset($_SESSION['std_login'])){
    $email=$_SESSION['std_email'];
  }
  
  $sql="SELECT * FROM student WHERE std_email='$email'";
  $result=$con->query($sql);
   //  if($result->num_rows > 0){
        $row=$result->fetch_assoc();
        $stdid=$row['std_id'];
        if(isset($_REQUEST['feed_btn'])){
            if(($_REQUEST['sid']=="") || ($_REQUEST['fcontent']=="")){
                $errormsg='<div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>ALL FIELD ARE REQUIRED!</strong> 
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>';
            }else{
                
            $feedback=$_REQUEST["fcontent"];
            $id=$_REQUEST['sid'];
            $sql="INSERT INTO feedback (f_content,std_id) values ('$feedback','$id')";
         if($con->query($sql)==true){
           $errormsg='<div class="alert alert-success alert-dismissible fade show" role="alert">
           <strong>send Successfully!</strong>
           <button type="button" class="close" data-dismiss="alert" aria-label="Close">
             <span aria-hidden="true">&times;</span>
           </button>
         </div>';}else{
           $errormsg='<div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>sending failed!</strong> 
      
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>';}}
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
    <label for="sname">feedback:</label>
    <textarea name="fcontent" id=""  rows="2" class="form-control"></textarea>
  </div>
  
  <!-- <div class="form-group ">
    <label for="semail">email</label>
    <input type="text" class="form-control" id="semail"  placeholder="email" name="stdemail" value="<?php
       if (isset($row['std_email'])) {
         echo $row['std_email'];
} 

    ?>"> -->
    
  <button type="submit" class="btn btn-success text-uppercase mt-2" name="feed_btn">send</button>
  
    
    
    
    
    </form>
    <?php 
    if(isset($errormsg)){
      echo $errormsg;
    }
    ?>
  </div>



<?php include('footer.php') ?>