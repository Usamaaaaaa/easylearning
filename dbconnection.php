<?php 
$host="localhost";
$user="root";
$password="";
$dbname="elearning";
$con=new mysqli($host,$user,$password,$dbname);
if($con->connect_error){
    die("connection failed");
}
// else{
//     echo "connect";
// }s



?>