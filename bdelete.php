<?php
    
    require('connection.php');

    
    $fsrno=$_GET['id']; 
    $sql="DELETE FROM bloan WHERE srno={$fsrno}";
    $result=mysqli_query($con,$sql) or die("queary unsuccessful");
    header("Location: adminbusinessloan.php");
    mysqli_close($con);
   
?>
