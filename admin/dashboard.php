<?php include('../dbconnection.php');
include('../includes/adminheader.php'); 
if(isset($_SESSION)){
session_start();}

$sql="SELECT COUNT(*) as course FROM course_tb";
$result=$con->query($sql);
 $row0=$result->fetch_assoc();
 
$sql="SELECT COUNT(*) as student FROM student";
$result=$con->query($sql);
 $row1=$result->fetch_assoc();
 
// $sql="SELECT COUNT(*) as order FROM order_tb";
// $result=$con->query($sql);
//  $row=$result->fetch_assoc();

?>

<!-- start 2nd colomn -->
<div class="col-sm-9  mt-5">
<div class="row text-center mx-3">
    <div class="col-sm-4 mt-5">
    <div class="card text-white bg-danger mb-3" style="max-width:18rem;">
  <div class="card-header">
    Courses
  </div>
  <div class="card-body">
    <h4 class="card-title">
    <?php echo $row0['course'];?>
    </h5>
    
    <a href="request.php" class="btn text-white">view</a>
  </div>
  
</div>
    </div>
    <div class="col-sm-4 mt-5">
    <div class="card text-white bg-success mb-3" style="max-width:18rem;">
  <div class="card-header">
    students
  </div>
  <div class="card-body">
    <h4 class="card-title">
    <?php echo $row1['student'];?>
    </h5>
    
    <a href="work.php" class="btn text-white">view</a>
  </div>
  
</div>
    </div>
    <div class="col-sm-4 mt-5">
    <div class="card text-white bg-primary mb-3" style="max-width:18rem;">
  <div class="card-header">
    sold
  </div>
  <div class="card-body">
    <h4 class="card-title">
      7
    </h5>
    
    <a href="employee.php" class="btn text-white">view</a>
  </div>
  
</div>
    </div></div>
<!--   card row ended -->
<div class="mx-5 mt-5 text-center">
 
    <p class="bg-dark text-white p-2">course ordered</p>
    <?php 
    
$sql="SELECT * FROM order_tb";
$result=$con->query($sql);
//  $row=$result->fetch_assoc();
        echo '<table class="table">
        <thead>
          <tr>
            
            <th scope="col">requester id</th>
            <th scope="col">name</th>
            <th scope="col">email</th>
          </tr>
        </thead>
        <tbody>';
        
            while($row=$result->fetch_assoc()){
       echo '  <tr>';
        echo '<td>'.$row["order_id"].'</td>';
        echo '<td>'.$row["course_id"].'</td>';
        echo '<td>'.$row["std_email"].'</td>';
        echo '</tr>';
        }
          
       echo '</tbody>
      </table>';
      
    if($result->num_rows<=0){
        echo '0 result';

    }
    ?>
    
    
    
    
    <?php
    
    include('../includes/admnfooter.php');
    
    ?>
       