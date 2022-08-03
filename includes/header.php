<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/custom.css">
    <!-- font awesome -->
    <link rel="stylesheet" href="css/all.min.css">
    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@1,700&display=swap" rel="stylesheet">
    <title>ELEARNING SCHOOL</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark  fixed-top">
  <a class="navbar-brand pl-5 text-dark" href="index.php">ELEARNING</a>
  <button class="navbar-toggler bg-dark" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav custom-nav pl-5">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item ">
        <a class="nav-link custom-nav-item" href="course.php">Courses</a>
      </li>
      <li class="nav-item">
        <a class="nav-link custom-nav-item" href="../payment.php">Payment</a>
      </li>
      <?php session_start();
      if(isset($_SESSION['std_login'])){
        echo '<li class="nav-item">
        <a class="nav-link custom-nav-item text-light " href="student/studentprofile.php">Profile</a>
      </li>
      <li class="nav-item">
      <a class="nav-link custom-nav-item bg-primary" href="logout.php">LogOut</a>
    </li>
      ';
      }else{
        echo '<li class="nav-item">
        <a class="nav-link custom-nav-item" href="#" data-toggle="modal" data-target="#stdlModalCenter">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link custom-nav-item" href="#" data-toggle="modal" data-target="#exampleModalCenter">SignUp</a>
      </li>';
      }
      ?>
      <!-- <li class="nav-item">
        <a class="nav-link custom-nav-item" href="#">Profile</a>
      </li>
      <li class="nav-item">
        <a class="nav-link custom-nav-item" href="#" data-toggle="modal" data-target="#stdlModalCenter">Login</a>
      </li> -->
      <!-- <li class="nav-item">
        <a class="nav-link custom-nav-item" href="#" data-toggle="modal" data-target="#exampleModalCenter">SignUp</a>
      </li> -->
      <li class="nav-item">
        <a class="nav-link custom-nav-item" href="#feed">FeedBack</a>
      </li>
      <li class="nav-item">
        <a class="nav-link custom-nav-item" href="#contact">Contact Us</a>
      </li>
    </ul>
  </div>
</nav>