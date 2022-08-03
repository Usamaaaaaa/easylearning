<?php 

include('../dbconnection.php');
session_start();


  //  admin login check 
  if(!isset($_SESSION['adm_login'])){
    if(isset($_POST['aemail']) && isset($_POST['apassword'])){
      // $name=$_POST['name'];
      $aemail=$_POST['aemail'];
      $apass=$_POST['apassword'];
      $sql="SELECT admin_email,admin_pass FROM admin_tb where admin_email='".$aemail."' AND admin_pass='".$apass."'";
        $result=$con->query($sql);
         $row=$result->num_rows;
        if($row == 1){
    
          echo json_encode("o");
          $_SESSION['adm_login']=true;
          $_SESSION['adm_email']=$aemail;
        }else {
          echo json_encode("f");
        }
    }
   }
?>