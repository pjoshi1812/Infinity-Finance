<?php
    
    require('connection.php');

    
    $fsrno=$_GET['id']; 
    $sql="DELETE FROM gloan WHERE srno={$fsrno}";
    $result=mysqli_query($con,$sql) or die("queary unsuccessful");
    header("Location: admingoldloan.php");
    mysqli_close($con);
   
?>

