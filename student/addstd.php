  <?php

  if(!isset($_SESSION)){
   session_start();
  }
  
  include('../dbconnection.php'); 
    // check email already exist or not
   if(isset($_POST['email'])){
    $email=$_POST['email'];
    $sql="SELECT std_email FROM student where std_email='".$email."'";
    $result=$con->query($sql);
    $row=$result->num_rows;
    echo json_encode($row);
   }


 
//    student registration registration 
 if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $pass=$_POST['password'];
    // echo $name;
    $sql="INSERT INTO student (std_name,std_email,std_pass) VALUES
     ('$name','$email','$pass')";
    if($con->query($sql) == true){
        echo json_encode(0);
    }else{
        echo json_encode(1);
    }
 } 


  //  student login check 
  if(!isset($_SESSION['std_login'])){
if(isset($_POST['lemail']) && isset($_POST['lpassword'])){
  // $name=$_POST['name'];
  $email=$_POST['lemail'];
  $pass=$_POST['lpassword'];
  $sql="SELECT std_email,std_pass FROM student where std_email='".$email."' AND std_pass='".$pass."'";
    $result=$con->query($sql);
    $row=$result->num_rows;
    if($row === 1){

      echo json_encode("o");
      $_SESSION['std_login']=true;
      $_SESSION['std_email']=$email;
    }else if($row === 0){
      echo json_encode("f");
    }
}
}
?> 