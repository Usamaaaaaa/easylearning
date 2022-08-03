<?php include('includes/header.php'); ?>
<div class="container-fluid bg-dark">
        <div class="row">
            <img src="images/analytics-3265840_1920.jpg" alt="course" style="height: 500px; width:100%; object-fit:cover; box-shadow: 10px;">
        </div>
    </div>
    <!-- start payment status section -->
    <div class="container">
        <h2 class="text-center my-4">Payment Status</h2>
        <form action="" method="post">
        <div class="form-group">
                     <label for="exampleFormControlInput1">Check Status</label>
                     <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                     </div>
                     <input  class="btn btn-primary" type="submit" value="View" name="send">
        </form>
    </div>


            <!--end payment status section  -->
            <!-- start contact us  -->
            <?php 
            include('contact.php');
            ?>
            <!-- end contact us  -->


<?php include('includes/footer.php'); ?>