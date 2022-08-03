<?php include('../dbconnection.php');
include('../includes/adminheader.php'); 
session_start();?>



   <!-- start 2nd coulumn -->
   <div class="col-sm-8">
   <form action="" method="post" class="form-inline d-print-none mt-5">
<div class="form-group mx-5">
    <label for="cid ">Course Id</label>
    <input type="text" class="form-control ml-3" id="cid"  placeholder="course id" name="c_id">
  </div>
  <button class="btn btn-danger" type="submit">Search</button>
</form>
<?php 
//    if(isset($_REQUEST['rid'])){
    $sql="SELECT course_id FROM course_tb";
    $result=$con->query($sql);
    while($row=$result->fetch_assoc()){
    if(isset(($_REQUEST['c_id'])) && $_REQUEST['c_id']==$row['course_id']){
        $sql="SELECT * FROM course_tb where course_id={$_REQUEST['c_id']}";
        $res=$con->query($sql);
        $roo=$res->fetch_assoc();
        if($roo['course_id']==$_REQUEST['c_id'])
 {
     $_SESSION['corseid']=$roo['course_id'];
    //  echo $_SESSION['corseid'];
     $_SESSION['corsename']=$roo['course_name'];
     ?>
<h3 class=" mt-3 bg-dark text-white text-uppercase p-2 ">course id: <?php if(isset($roo['course_id'])){
    echo $roo['course_id'];
}?>
  course name:  <?php if(isset($roo['course_name'])){
    echo $roo['course_name']; }}
?></h3>
<?php 
  $sql="SELECT * FROM lesson where course_id={$_REQUEST['c_id']}";
  $res=$con->query($sql);

?>
<table class="table">
    <thead class="bg-dark text-white">
        <tr>
            <th scope="col">lessson id</th>
            <th scope="col">lesson name</th>
            <th scope="col">lesson link</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
    <?php 
        // if($res->num_rows>0){
    while($row=$res->fetch_assoc()){
    ?>
       <tr>
                   <th scope="row"><?php echo $row['lesson_id'];?></th>
                   <td><?php echo $row['lesson_name'];?></td>
                   <td> <?php  echo $row['lesson_link'];?></td>
                    <td>
                    <form action="editlesson.php" method="POST" class="d-inline">
        <input type="hidden" name="lid" value="<?php echo $row['lesson_id'];?>">
        <input type="submit" class="btn btn-primary" name="edit"  value="edit">
            </form>
         <form action="" class="d-inline" method="POST">
          <input type="hidden" name="lid" value="<?php echo $row['lesson_id'];?>">
        <input type="submit" class="btn btn-primary mt-1" name="delete" value="delete">
    </form>
                    </td>
    </tr>
     <?php }?>          
                       </tbody>
       </table>

<?php
//  }
}
// else{
//       echo "no recrd";}
}
 ?> 
   <?php 
if(isset($_REQUEST['delete'])){
  $sql="DELETE from lesson  where lesson_id='".$_REQUEST['lid']."' ";
  if($con->query($sql)==TRUE){
    echo '<meta http-equiv="refresh" content="0;url=?closed"/>';
}}?>
   </div>

<?php 
// echo $_SERVER['corseid'];

if(isset($_SESSION['corseid'])){
   echo' <div>
    <a href="addlesson.php" class="btn btn-danger box"><i class="fas fa-plus fa-2x"></i></a>
</div>';
}
?>


<?php include('../includes/admnfooter.php'); ?>