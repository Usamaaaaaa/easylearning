<div class="modal-body">
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
</form>
      </div>
      <div class="modal-footer">
        <span id="successmsg"></span>
        <button type="button" class="btn btn-primary" id="signup" onclick="addstd1()">Sign Up</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="clear1()">Close</button>
      </div>