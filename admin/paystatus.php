<?php 
include('../includes/adminheader.php');
?>

<div class="col-sm-8">
   <form action="" method="post" class="form-inline d-print-none mt-5">
<div class="form-group mx-5">
    <label for="cid ">order Id</label>
    <input type="text" class="form-control ml-3" id="cid"  placeholder="course id" name="c_id">
  </div>
  <button class="btn btn-danger" type="submit">Search</button>
</form>
<?php 
include('../includes/admnfooter.php');
?>