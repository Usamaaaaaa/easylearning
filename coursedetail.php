<?php include('includes/header.php'); 
include('dbconnection.php');
?>
<div class="container-fluid bg-dark">
        <div class="row">
            <img src="images/analytics-3265840_1920.jpg" alt="course" style="height: 500px; width:100%; object-fit:cover; box-shadow: 10px;">
        </div>
    </div>
 <!-- start course detail  -->
 <div class="container mt-3">
     <?php if(isset($_GET['course_id'])){
         $cid=$_GET['course_id'];
         $_SESSION['c_id']=$cid;
                 //  echo $cid;
         $sql="SELECT * FROM course_tb where course_id='$cid'";
         $result=$con->query($sql);
         $row=$result->fetch_assoc();
        //  echo $row['course_name'];
     }
     
     ?>
     <div class="row">
         <div class="col-sm-4">
             <img src="<?php echo str_replace('..','.',$row['course_img'])?>" class="card-img-top" alt="">
         </div>
         <div class="col-sm-8">
             <div class="card-body">
                 <h5 class="card-title">Course Name:<?php echo $row['course_name'];?></h5>
                 <p class="card-text"><?php echo $row['course_desc'];?></p>
                 <form action="checkout.php" method="post">
                 <p class="card-text d-inline">price:<small><del>&#8377 <?php echo $row['c_orginal_price'];?></del></small>  <span class="font-weight-bolder">  &#8377 <?php echo $row['course_price'];?></span></p>
                 <input type="hidden" id="pid" value="<?php echo $row['course_price']; ?>">
                 <button type="submit" class="btn btn-primary text-white font-weight-bolder float-right">Buy Now</button>
                 </form>
             </div>
         </div>
     </div>
 </div>
  <div class="container">
      <div class="row">
          
      <table class="table table-bordered table-hover">
              <thead>
                  <tr>
                      <th scope="col">lesson 1</th>
                      <th scope="col">lesson name</th>
                  </tr>
              </thead>
              <tbody>
    <?php 
    $sql="SELECT * FROM lesson";
    $result=$con->query($sql);
    if($result->num_rows>0){
        $nom=0;
    while($row=$result->fetch_assoc()){
        if($cid==$row['course_id']){
            $nom++;
            // echo $row['lesson_name'];
     echo '
     <tr>
         <th scope="row">'.$nom.'</th>
         <td>'.$row['lesson_name'].'</td>
     </tr>';
    }}}
    
    
    ?>

              </tbody>
          </table>
      </div>
  </div>
  <!-- end couse detail  -->
<?php include('includes/footer.php'); ?>