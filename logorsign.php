<?php 
include('dbconnection.php');
include('includes/header.php');
?>
<div class="container-fluid">
    <div class="row">
    <img src="./images/analytics-3265840_1920.jpg" alt="" srcset="" style="height: 300px; width:100%; object-fit:cover; box-shadow: 10px;">
    </div>
</div>
<div class="container jumbotron mb-5">

<div class="row">
    <div class="col-md-4">
        <h5 class="mb-3">already registered !! login now</h5>
        <form action="" method="POST" id="stdloginform">
      
  <div class="form-group">
  <i class="fas fa-envelope"></i><label for="stdlEmail" class="pl-2 font-weight-bold">Email address</label>
    <input type="email" class="form-control" id="stdlEmail" aria-describedby="emailHelp" placeholder="Enter email">
    
  </div>
  <div class="form-group">
  <i class="fas fa-key"></i><label for="stdlPassword" class="pl-2 font-weight-bold">Password</label>
    <input type="password" class="form-control" id="stdlPassword" placeholder="Password">
  </div>
  <button type="button" class="btn btn-primary" id="std_login" name="stdl_btn" onclick="login()">Login</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="clear1()">Close</button>
</form>
    </div>
    <div class="col-md-4">
        <h5 class="mb-3">new user !! register now</h5>
        <form action="" method="POST" id="stdregform">
      <div class="form-group">
          <i class="fas fa-user"></i><label for="stdname" class="pl-2 font-weight-bold">Name</label><small id="nameerr"></small>
    <input type="text" class="form-control" id="stdname" aria-describedby="emailHelp" placeholder="Enter email" name="stdrname"></div>
  <div class="form-group">
  <i class="fas fa-envelope"></i><label for="stdEmail" class="pl-2 font-weight-bold">Email address</label><small id="emailerr"></small>
    <input type="email" class="form-control" id="stdEmail" aria-describedby="emailHelp" placeholder="Enter email" name="strdremail">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
  <i class="fas fa-key"></i><label for="stdPassword" class="pl-2 font-weight-bold">Password</label><small id="passerr"></small>
    <input type="password" class="form-control" id="stdPassword" placeholder="Password" name="stdrpass">
  </div>
  <!-- <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div> -->
  <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
  <button type="button" class="btn btn-primary" id="signup" onclick="addstd1()">Sign Up</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="clear1()">Close</button>
</form>
    </div>

</div>
</div>
<?php include('includes/footer.php');?>