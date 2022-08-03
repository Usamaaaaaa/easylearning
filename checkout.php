<?php 
include('dbconnection.php');
include('includes/header.php');
if(!isset($_SESSION)){
session_start();}
if(!isset($_SESSION['std_login'])){
 echo '<script> location.href="logorsign.php" </script>';
}else{
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<?php }?>
