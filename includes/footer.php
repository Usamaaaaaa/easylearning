  <footer class="container-fluid bg-dark text-center p-2 ">
                <small class="text-white">Copyright &copy; 2020 || designed by || ESchool || <a href="" data-toggle="modal" data-target="#adminlModalCenter" class="text-dark">admin</a> </small>
               </footer>
               <!-- footer end -->
               <!-- start student registration section end -->
               <!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Student Registration</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="clear1()">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?php include('studentregistration.php'); ?>
    </div>
  </div>
</div>
               <!--  student registration section end -->

               <!-- start student login form section -->
             

<!-- Modal -->
<div class="modal fade" id="stdlModalCenter" tabindex="-1" role="dialog" aria-labelledby="stdlModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="stdlModalLongTitle">Student Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="clear1()">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="" method="POST" id="stdloginform">
      
  <div class="form-group">
  <i class="fas fa-envelope"></i><label for="stdlEmail" class="pl-2 font-weight-bold">Email address</label>
    <input type="email" class="form-control" id="stdlEmail" aria-describedby="emailHelp" placeholder="Enter email">
    
  </div>
  <div class="form-group">
  <i class="fas fa-key"></i><label for="stdlPassword" class="pl-2 font-weight-bold">Password</label>
    <input type="password" class="form-control" id="stdlPassword" placeholder="Password">
  </div>
  
</form>
      </div>
      <div class="modal-footer">
        <span id="success"></span>
        <button type="button" class="btn btn-primary" id="std_login" name="stdl_btn" onclick="login()">Login</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="clear1()">Close</button>
      </div>
    </div>
  </div>
</div>
               <!--  student login form section end -->
               
               <!-- start admin login form section -->
             

<!-- Modal -->
<div class="modal fade" id="adminlModalCenter" tabindex="-1" role="dialog" aria-labelledby="adminlModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="adminlModalLongTitle">Admin Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="adminclr()">
          <span aria-hidden="true" >&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="" method="POST" id="adminloginform">
      
  <div class="form-group">
  <i class="fas fa-envelope"></i><label for="adminEmail" class="pl-2 font-weight-bold">Email address</label>
    <input type="email" class="form-control" id="adminEmail" aria-describedby="emailHelp" placeholder="Enter email">
   
  </div>
  <div class="form-group">
  <i class="fas fa-key"></i><label for="adminPassword" class="pl-2 font-weight-bold">Password</label>
    <input type="password" class="form-control" id="adminPassword" placeholder="Password">
  </div>
  
</form>
      </div>
      <div class="modal-footer">
        <div id="admsuccess"></div>
        <button type="button" class="btn btn-primary" onclick="aslogin()">Login</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="adminclr()">Close</button>
      </div>
    </div>
  </div>
</div>
               <!--  admin login form section end -->
               

<script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/all.min.js"></script>   
  <script type="text/javascript" src="js/ajaxreq.js"></script>
  <script type="text/javascript" src="js/admin.js"></script>
</body>
</html>