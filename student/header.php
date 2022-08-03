<?php 
include('../dbconnection.php');

if(!isset($_SESSION)){

    session_start();
   }
//    include('includes/header.php');
//    include('includes/header.php');
   $email=$_SESSION['std_email'];
 
   $sql="SELECT * FROM student WHERE std_email='$email'";
   $result=$con->query($sql);
    //  if($result->num_rows > 0){
         $row=$result->fetch_assoc();
          $stdimg=$row["std_img"];
    //  }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- <link rel="stylesheet" href="css/custom.css"> -->
    <!-- font awesome -->
    <link rel="stylesheet" href="../css/all.min.css">
</head>
<body>
    
<nav class="navbar navbar-dark bg-dark  fixed-top">
  <a class="navbar-brand pl-5 text-white" href="../index.php">ELEARNING</a>
  <!-- <button class="navbar-toggler bg-dark" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button> -->
</nav>
 <!-- side  bar -->
 <div class="container-fluid mb-5" style="margin-top: 40px;">
 <div class="row">
     <nav class="col-sm-2 bg-light sidebar py-5">
     
         <div class="sidebar-sticky">
             <ul class="nav flex-column">
                 <li class="nav-item mb-3">
                     <img src="<?php echo $stdimg; ?>" alt="no img" class="img-thumbnail rounded-circle">
                 </li>
                 <li class="nav-item mb-3">
                    <a href="studentprofile.php" class="nav-link"> profile</a>
                 </li>
                 <li class="nav-item mb-3">
                 <a href="stdcourse.php" class="nav-link"> my course</a>
                 </li>
                 <li class="nav-item mb-3">
                 <a href="feedback.php" class="nav-link">feedback</a>
                 </li>
                 <li class="nav-item mb-3">
                 <a href="stdchangepass.php" class="nav-link"> change pasword</a>
                 </li>
                 
                 <li class="nav-item mb-3">
                     <a href="../logout.php" class="nav-link"> logout</a>
                 </li>

             </ul>
             
            </div>
            </nav>

 <!-- </div> -->