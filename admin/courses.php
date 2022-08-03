<?php include('../dbconnection.php');
include('../includes/adminheader.php');
 
// if(isset($_REQUEST['edit'])){
  ?>

<div class="col-sm-9 mt-5">
    <h4 class="bg-dark text-white py-2">List of Courses</h4>
    <?php 
    // if(isset($_REQUEST['id'])){
        $sql="SELECT * FROM course_tb";
        $result=$con->query($sql);
        if($result->num_rows > 0){

        
        // $row=$result->fetch_assoc();
        ?>
     <table class="table">
        <thead class="bg-dark text-white">
          <tr>
            
            <th scope="col">course id</th>
            <th scope="col">name</th>
            <th scope="col">author</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          <?php 
            while($row=$result->fetch_assoc()){
              // echo $row['course_id'];
              ?>
         <tr>
        <td scope="row"><?php echo $row['course_id']; ?></td>
        <td><?php echo $row['course_name'];?></td>
        <td><?php echo $row['course_author'];?></td>
        <td>
         <form action="editcourse.php" method="POST" class="d-inline">
        <input type="hidden" name="hid" value="<?php echo $row['course_id'];?>">
        <input type="submit" class="btn btn-primary" name="edit"  value="edit">
            </form>
         <form action="" class="d-inline" method="POST">
          <input type="hidden" name="id" value="<?php echo $row['course_id'];?>">
        <input type="submit" class="btn btn-primary" name="delete" value="delete">
    </form>
        
        </td>
        </tr>
        <?php }?>
        </tbody>
      </table>
<?php }
?>
</div>
<div>
    <a href="addcourse.php" class="btn btn-danger box"><i class="fas fa-plus fa-2x"></i></a>
</div>
<?php 
if(isset($_REQUEST['delete'])){
  $sql="DELETE from course_tb  where course_id='".$_REQUEST['id']."' ";
  if($con->query($sql)==TRUE){
    echo '<meta http-equiv="refresh" content="0;url=?closed"/>';
}}
?>
<?php include('../includes/admnfooter.php'); ?>