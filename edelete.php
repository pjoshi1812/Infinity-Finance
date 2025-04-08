<?php
    
    require('connection.php');

    
    $fsrno=$_GET['id']; 
    $sql="DELETE FROM eloan WHERE srno={$fsrno}";
    $result=mysqli_query($con,$sql) or die("queary unsuccessful");
    header("Location: admineducationloan.php");
    mysqli_close($con);
   
?>

