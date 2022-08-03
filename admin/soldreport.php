<?php include('../dbconnection.php');
include('../includes/adminheader.php'); 
if(!isset($_SESSION)){
session_start();}
?>
<div class="col-sm-9 mt-5">
    <form action="" method="post">
        <div class="form-row">
            <div class="form-group col-md-2">
                <input type="date" name="sdate" id="stdate" class="form-control">
            </div>
            <div class="form-group col-md-2">
                <input type="date" name="ldate" id="ltdate" class="form-control">
            </div>
            <div class="form-group ">
                <input type="submit" name="sm-btn" value="submit" class="form-control btn btn-danger">
            </div>
            
        </div>
    </form>

<?php 
if(isset($_REQUEST['sm-btn'])){
    $sdate=$_REQUEST['sdate'];
    $ldate=$_REQUEST['ldate'];
    $sql="SELECT * FROM order_tb where order_date between '$sdate' and '$ldate'";
    $result=$con->query($sql);
    if($result->num_rows>0)
{
    ?>


<table class="table">
    <thead class="bg-dark text-white">
        <tr>
            <th scope="col">order id</th>
            <th scope="col">course id</th>
            <th scope="col">student email</th>
            <th scope="col">status</th>
            <th scope="col">order date</th>
            <th scope="col">amount</th>
        </tr>
    </thead>
    <tbody>
<?php 
 while($row=$result->fetch_assoc()){

 
?>

<tr>
                   <th scope="row"><?php echo $row['order_id'];?></th>
                   <td><?php echo $row['course_id'];?></td>
                   <td> <?php  echo $row['std_email'];?></td>
                   <td> <?php  echo $row['status'];?></td>
                   <td> <?php  echo $row['order_date'];?></td>
                   <td> <?php  echo $row['amount'];?></td>
    </tr>
     <?php }?>
     <tr>
         <td>
         <form action="" method="post" class="d-print-none">
           <input type="button" class="btn btn-danger" value="print" onclick="window.print()">
       </form>
         </td>
     </tr>    
     
     
                       </tbody>
       </table>
</div>

<?php 
}else{
    echo "no record";
}
}
?>
