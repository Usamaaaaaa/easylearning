<?php include('../dbconnection.php');
include('header.php'); 

if(!isset($_SESSION)){

    session_start();
   }
if(isset($_SESSION['std_email'])){
$email=$_SESSION['std_email'];}
// echo $email;

if(isset($_REQUEST['stdupdte_btn'])){
    if($_REQUEST['spass']==""){
        $errmsg='<div class="alert alert-warning alert-dismissible fade show" role="alert">
         <strong>all field are required!</strong> 
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
           <span aria-hidden="true">&times;</span>
         </button>
       </div>';
    }else{
        // $sql="SELECT * FROM admin_tb where admin_email='$email'" ;
       $password=$_REQUEST['spass'];
        $sql="UPDATE  student SET std_pass='$password' where std_email='$email'";
        if($con->query($sql)==true){
            $errmsg='<div class="alert alert-success alert-dismissible " role="alert">
                  <strong>UPDATE SUCCESSFULLY!</strong> 
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>';
        }else{
            $errmsg='<div class="alert alert-danger alert-dismissible fade show" role="alert">
                  <strong>UNABLE TO UPDATE!</strong> 
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>';
        }
        }
    }
 
?>

<div class="col-sm-9 jumbotron">
<form action="" method="POST">
  <div class="form-group">
    <label for="admemail">Email </label>
    <input type="email" class="form-control" id="admemail" aria-describedby="emailHelp" placeholder="Enter email" name="semail" value="<?php 
    if(isset($_SESSION['std_email'])){
    echo $email;} ?>" readonly>
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1"> new Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder=" New Password" name="spass">
  </div>
  
  <button type="submit" class="btn btn-primary" name="stdupdte_btn">update</button>
  
</form>
<?php if(isset($errmsg)){
      echo $errmsg;
  }?>
</div>





<?php include('footer.php') ?>