<?php include('../dbconnection.php');
include('../includes/adminheader.php'); 
session_start();
if(isset($_SESSION['adm_email'])){
$email=$_SESSION['adm_email'];}
// echo $email;

if(isset($_REQUEST['updte_btn'])){
    if($_REQUEST['apass']==""){
        $errmsg='<div class="alert alert-warning alert-dismissible fade show" role="alert">
         <strong>all field are required!</strong> 
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
           <span aria-hidden="true">&times;</span>
         </button>
       </div>';
    }else{
        // $sql="SELECT * FROM admin_tb where admin_email='$email'" ;
       $password=$_REQUEST['apass'];
        $sql="UPDATE  admin_tb SET admin_pass='$password' where admin_email='$email'";
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
    if(isset($_REQUEST['closebtn']))
{
    echo "<script> location.href='../index.php'; </script>";
}
?>

<div class="col-sm-9 ">
<form action="" method="POST">
  <div class="form-group">
    <label for="admemail">Email </label>
    <input type="email" class="form-control" id="admemail" aria-describedby="emailHelp" placeholder="Enter email" name="aemail" value="<?php 
    if(isset($_SESSION['adm_email'])){
    echo $email;} ?>" readonly>
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1"> new Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder=" New Password" name="apass">
  </div>
  
  <button type="submit" class="btn btn-primary" name="updte_btn">update</button>
  <button type="submit" class="btn btn-primary" name="closebtn">close</button>
</form>
<?php if(isset($errmsg)){
      echo $errmsg;
  }?>
</div>





<?php include('../includes/admnfooter.php') ?>