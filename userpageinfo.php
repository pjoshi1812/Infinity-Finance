<?php
    require('connection.php');
    $sql = " SELECT * FROM userlogin ORDER BY srno ";
    $result = mysqli_query($con,$sql);
   

    $sql1="SELECT * FROM hloan ORDER BY srno  ";
    $result1 = mysqli_query($con,$sql1);


    $con->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>adminpage</title>
    <link rel="stylesheet" href="admin.css">
</head>
<body>
    <div class="header">
        <!-- <i class="fas fa-rupee-sign"></i> -->
        <div class="menu">
            <div class="header">
               <div class="logo">
                 <img src="Infinity Finance your financial partner (4).png" alt="logo" srcset=" ">
               </div>
                <div class="nav">
                    <ul>
                        <li> <a href="#">Home</a></li>
                        <li><a href="#">Popular Loans</a>
                            <ul class ="dropdown">
                                <li><a href="#">Home Loan</a></li>
                                <li><a href="#">Education Loan</a></li>
                            </ul>
                        </li>
            
                        <li><a href="#">Loan Against Asset</a>
                            <ul class ="dropdown">
                                <!-- <li><a href="#">Property Loan</a></li> -->
                                <li><a href="#">Vehical Loan</a></li>
                                <li><a href="#">Gold laon</a></li>
                            </ul>
                        </li>
            
                        <li> <a href="#">Other Loans</a>
                            <ul class ="dropdown">
                                <!-- <li><a href="#">Business Loan</a></li> -->
                                <li><a href="#">Health Loan</a></li>
                            </ul>
                        </li>
            
                        <li><a href="#">FAQ</a></li>
            
                        <li><a href="#">About Us</a></li>
                    </ul>
                </div>
            </div>
    
        </div>
    </div> 
    <div class="user-login-table">
        <table>
            <tr>
                <th>srno</th>
                <th>userid</th>
                <th>captcha</th>
                <th>userpassword</th>
                <th>subtime</th>
            </tr>
            <?php
            // LOOP TILL END OF DATA
            while($rows=$result->fetch_assoc())
            {
        ?>
        <tr>
            <!-- FETCHING DATA FROM EACH
                ROW OF EVERY COLUMN -->
            <td><?php echo $rows['srno'];?></td>
            <td><?php echo $rows['userid'];?></td>
            <td><?php echo $rows['captcha'];?></td>
            <td><?php echo $rows['userpassword'];?></td>
            <td><?php echo $rows['subtime'];?></td>
        </tr>
        <?php
            }
        ?>
        </table>
    </div>
   

</body>
</html>