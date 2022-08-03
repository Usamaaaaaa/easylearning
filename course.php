<?php 
include('dbconnection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="css/custom.css"> -->
    <!-- font awesome -->
    <link rel="stylesheet" href="css/all.min.css">
    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@1,700&display=swap" rel="stylesheet">
    <title>Courses</title>
</head>
<body>
    <!-- start haedr -->
    <?php include('includes/header.php')?>
    <!-- end header -->
    <div class="container-fluid bg-dark">
        <div class="row">
            <img src="images/analytics-3265840_1920.jpg" alt="course" style="height: 500px; width:100%; object-fit:cover; box-shadow: 10px;">
        </div>
    </div>
    <!-- strat course seection  -->
    <div class="container mt-5">
      <h3 class="text-center">all courses</h3>
      <div class="row mt-4">
      <?php 
          
            $sql="SELECT * FROM course_tb ";
            $result=$con->query($sql);
            if($result->num_rows > 0){
              while($row=$result->fetch_assoc()){
                $corseid=$row['course_id'];
                echo' <div class="col-sm-4 mb-4">
                <a href=""  style="text-align:left; padding:0px; margin:0px;">
                <div class="card">
                  <img class="card-img-top" src="'.str_replace('..','.',$row['course_img']).'" alt="N/A">
                   <div class="card-body">
                      <h5 class="card-title">'.$row['course_name'].'</h5>
                      <p class="card-text">'.$row['course_desc'].'</p>
                   </div>
                    <div class="card-footer">
                     <p class="card-text d-inline"><price:<small><del>&#8377 '.$row['c_orginal_price'].'</del></small><span class="font-weight-bolder">&#8377 '.$row['course_price'].'</span></p>
                     <a href="coursedetail.php?course_id='.$row['course_id'].'" class="btn btn-primary text-white font-weight-bolder float-right">Enroll</a>
                   </div>
</div>
</a>
</div>';}}
?>
      </div> 
                                <!-- 2nd card end  -->
                 <div class="text-center m-2">
                   <a href="" class="btn btn-primary btn-sm">view all courses</a>
                 </div>
              
    <!-- end coure section  -->
    <!-- start footer -->
       <?php include('includes/footer.php') ?>
    <!-- end  footer -->
</body>
</html>