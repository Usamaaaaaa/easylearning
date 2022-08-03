
<?php include('includes/header.php');
include('dbconnection.php');
?>
    <!-- start navbar -->
               <!-- navbar end -->
               <!-- background  -->
<div class="container-fluid vid-contner">
    <div class="back-vid">
        <video playsinline autoplay muted loop>
       <source src="video/Computer - 1196.mp4">
        </video>
    
        
        <div class="vid-overlay"></div>
      </div>
    <!-- <div class="vid-content " >
        <h2 class="content text-uppercase">welcome to elearning</h2>
        <small class="content text-uppercase mt-3 font-weight-bold">easy learing</small>  -->
        <?php 
        // if(!isset($_SESSION['std_login'])){
        //   echo'
        // <a href="" class="btn btn-danger mt-3" data-toggle="modal" data-target="#exampleModalCenter">GO</a>';}
        // else{
        //   echo'
        //   <a href="" class="btn btn-primary mt-3">My Profile</a>';
        // }
        ?>
     <!-- </div>  -->
     
</div>


               <!-- backgrnd end  -->
               <!-- banner -->
               <div class="container-fluid bg-danger txt-banner">
                   <div class="row bottom-banner">
                       <div class="col-sm">
                           <h5><i class="fas fa-book-open mr-3"></i>online course</h5>
                       </div>
                       <div class="col-sm">
                           <h5><i class="fas fa-users mr-3"></i>instructor</h5>
                       </div>
                       <div class="col-sm">
                           <h5><i class="fas fa-Keyboard mr-3"></i>lifetime</h5>
                       </div>
                       <div class="col-sm">
                           <h5><i class="fas fa-rupee-sign mr-3"></i>money back</h5>
                       </div>
                   </div>
               </div>
               <!-- banner end  -->
               <!-- courses section start -->
               <div class="container jumbotron mt-5">
                 <h1 class="text-center">popular courses</h1>
                 <!-- ist card start  -->
                 <!-- <a href="" class="btn" style="text-align:left; padding:0px; margin:opx;"></a> -->
                  <div class="card-deck mt-3">
                    <?php 
                    $sql="SELECT * FROM course_tb LIMIT 3";
                    $result=$con->query($sql);
                    if($result->num_rows > 0){
                      while($row=$result->fetch_assoc()){
                        $corseid=$row['course_id'];
                        echo'
                        <a href=""  style="text-align:left; padding:0px; margin:0px;">
                        <div class="card">
                          <img class="card-img-top" src="'.str_replace('..','.',$row['course_img']).'" alt="N/A">
                           <div class="card-body">
                              <h5 class="card-title">'.$row['course_name'].'</h5>
                              <p class="card-text">'.$row['course_desc'].'</p>
                           </div>
                            <div class="card-footer">
                             <p class="card-text d-inline"><price:<small><del>&#8377 '.$row['c_orginal_price'].'</del></small><span class="font-weight-bolder">&#8377 '.$row['course_price'].'</span></p>
                             <a href="course.php?course_id='.$row['course_id'].'" class="btn btn-primary text-white font-weight-bolder float-right">Enroll</a>
                           </div>
      </div>
    </a>';}}?></div>
    
                 <!-- ist card end  -->
                  <!-- 2nd card start  -->
    <div class="card-deck mt-3">
                    <?php 
                    $sql="SELECT * FROM course_tb LIMIT 3,3";
                    $result=$con->query($sql);
                    if($result->num_rows > 0){
                      while($row=$result->fetch_assoc()){
                        $corseid=$row['course_id'];
                        echo'
                        <a href=""  style="text-align:left; padding:0px; margin:0px;">
                        <div class="card">
                          <img class="card-img-top" src="'.str_replace('..','.',$row['course_img']).'" alt="N/A">
                           <div class="card-body">
                              <h5 class="card-title">'.$row['course_name'].'</h5>
                              <p class="card-text">'.$row['course_desc'].'</p>
                           </div>
                            <div class="card-footer">
                             <p class="card-text d-inline"><price:<small><del>&#8377 '.$row['c_orginal_price'].'</del></small><span class="font-weight-bolder">&#8377 '.$row['course_price'].'</span></p>
                             <a href="course.php?course_id='.$row['course_id'].'" class="btn btn-primary text-white font-weight-bolder float-right">Enroll</a>
                           </div>
      </div>
    </a>';}}?></div>
        
                 <!-- 2nd card end  -->

                 <div class="text-center m-2">
                   <a href="" class="btn btn-primary btm-sm">view all courses</a>
                 </div>
               </div>


                      <!-- feedback section start  -->
        <div class="container-fluid mt-5" id="feed" style="background-color: #4B7289;">
       <h1 class="text-center testyheading  p-4">feedback</h1>
       <div class="row">
         <div class="col-md-12">
           <div id="testimonial-slider" class="owl-carousel">
           
<!-- <div id="carouselExampleControls" class="carousel slide" data-ride="carousel"> -->

             <?php 
             $sql="SELECT s.std_name,s.std_img,f.f_content FROM student  as s join feedback as f on s.std_id=f.std_id limit 2";
             $result=$con->query($sql);
             if($result->num_rows>0){
               while($row=$result->fetch_assoc()){
                 $simg= str_replace('..','.',$row['std_img']);
              
             
             ?>
             <div class="d-flex flex-row mb-3 mx-3 justify-content-center">
               <div>
             <div class="testimonial-prof">
                 <h4 class="text-white"><?php echo $row['std_name'] ?></h4>
               </div>
               
               <div class="pic">
                 <img src="<?php echo $simg; ?>" alt="" class="img-fluid img-thumbnail rounded-circle" style="height: 100px; width: 100px;">
               </div>
               <p class="border border-light  text-light p-3 mt-2"><?php echo $row['f_content'];?></p>
             </div> 
             <?php }}?>
             </div>
           </div>
         </div>
       </div>

        </div>
        </div>



                           <!-- feedback end  -->



               <!-- </div> -->

               <!-- courses section end -->
               <!-- contact section start -->
            <?php include('contact.php');?>
               <!-- contact section end -->
               <!-- about section start -->
               <div class="container-fluid p-4 bg-dark text-white mt-2">
                 <div class="container">
                   <div class="row text-center">
                     <div class="col-sm">
                       <h5 class="text-uppercase">about us</h5>
                       <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ad cupiditate est quis eligendi ab! Ex voluptates sint consequuntur inventore quaerat similique architecto, ipsam placeat cupiditate consequatur perspiciatis consectetur excepturi in?</p>
                     </div>
                     <div class="col-sm">
                       <h5 class="text-uppercase">category</h5>
                       <a href="" class="text-dark text-capitalize">web designer</a>
                       <a href="" class="text-dark text-capitalize">web developer</a>
                       <a href="" class="text-dark text-capitalize">graphic designer</a>
                       <a href=""  class="text-dark text-capitalize">php developer</a>
                       <a href=""  class="text-dark text-capitalize">laravel</a>
                     </div>
                     <div class="col-sm">
                       <h5 class="text-uppercase">contact</h5>
                       <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quibusdam earum, sed mollitia asperiores inventore similique?</p>

                     </div>
                   </div>
                 </div>
               </div>
               
               <!-- about section end -->
               <!-- footer start  -->
    <?php include('includes/footer.php'); ?>  
            <!-- end footer section          -->