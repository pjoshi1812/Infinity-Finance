<?php
    
    require('connection.php');

    
    $fsrno=$_GET['id']; 
    $sql="DELETE FROM hloan WHERE srno={$fsrno}";
    $result=mysqli_query($con,$sql) or die("queary unsuccessful");
    header("Location: adminhomeloan.php");
    mysqli_close($con);
   
?>




