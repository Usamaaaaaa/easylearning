<?php 
if(!isset($_SESSION)){

session_start();}
include('../includes/adminheader.php');
include('../dbconnection.php');
 
if(isset($_REQUEST['fdel'])){
  $sql="DELETE from feedback  where f_id='".$_REQUEST['fid']."' ";
  if($con->query($sql)==TRUE){
    echo '<meta http-equiv="refresh" content="0;url=?closed"/>';
}}
?>



<div class="col-sm-8 mt-5">
    <h3 class="bg-dark text-white text-center mt-3 py-2">feedback</h3>
<?php 
    $sql="SELECT * FROM feedback";
    $result=$con->query($sql);
?>
<table class="table">
    <thead class="bg-dark text-white">
        <tr>
            <th scope="col">feedback id</th>
            <th scope="col">content</th>
            <th scope="col">student id</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
    <?php 
        // if($res->num_rows>0){
    while($row=$result->fetch_assoc()){
    ?>
       <tr>
                   <th scope="row"><?php echo $row['f_id'];?></th>
                   <td><?php echo $row['f_content'];?></td>
                   <td> <?php  echo $row['std_id'];?></td>
                    <td>
                   
         <form action="" class="d-inline" method="POST">
          <input type="hidden" name="fid" value="<?php echo $row['f_id'];?>">
        <input type="submit" class="btn btn-primary mt-1" name="fdel" value="delete">
    </form>
                    </td>
    </tr>
     <?php }?>          
                       </tbody>
       </table>
</div>
<?php include('../includes/admnfooter.php') ?>