<?php
    require('connection.php');
    if(isset($_POST['userlogin']))
    {
        $userid=$_POST['userid'];
        $captcha=$_POST['captcha'];
        $userpassword=$_POST['userpassword'];
        $sql =" INSERT INTO `userlogin` ( `userid`, `captcha`, `userpassword`, `subtime`) VALUES ( '$userid', '$captcha', '$userpassword', current_timestamp())";
         
            if($con->query($sql)==1)
            {
                $insert=true;
                header("location: index.php");
            }
            else 
                echo "Error:$sql<br>$con->error";
            
            $con->close();   
    }
    else if(isset($_POST['adminlogin']))
    {
        $adminid=$_POST['adminid'];
        $adminpassword=$_POST['adminpassword'];
       $sql="INSERT INTO `adminlogin` ( `adminid`, `adminpassword`, `subtime`) VALUES ( '$adminid', '$adminpassword', current_timestamp())";
         
            if($con->query($sql)==1)
            {
                $insert=true;
                header("location: admin.html");
            }
            else 
                echo "Error:$sql<br>$con->error";
            
            $con->close();   
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Forms</title>
    <script src="login.js"></script>
    <link rel="stylesheet" href="login.css">
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
    <div class="maincontainer">
        <div class="form1">
            <h3>User Login</h3>
            <form action="#" method="post">
                <label for="userid">Enter User ID</label>
                <input type="text" name="userid" id="userid"  style="margin-left: 45px;"><br>

                <label for="captcha">Enter captcha code</label>
                <input type="text" name="captcha" id="inputtext" required >
                <input type="text" name="captcha"readonly id="capt" >
                <p >Captcha not visible <img src="refresh.jpg" width="50px"  onclick="cap()" ></p>

                <label for="userpassword">Enter User Password</label>
                <input type="password" name="userpassword" id="userpassword"><br>
                
                <button value="login" name="userlogin">Login</button>

                <!-- <input type="button" value="login" name="usersubmit">                 -->
            </form>
        </div>
        <div class="form2">
            <h3>Admin Login</h3>
            <form action="#" method="post">
                <label for="adminid">Enter Admin ID</label>
                <input type="text" name="adminid" id="adminid" style="margin-left: 50px;"><br>

                <label for="adminpassword">Enter Admin Password</label>
                <input type="password" name="adminpassword" id="adminpassword"><br>
                <button value="login" name="adminlogin">Login</button>
                <!-- <input type="button" value="login" name="adminsubmit" > -->
            </form>
        </div>
    </div>
    
    <footer>
        <div class="container">
        <div class="sec-aboutus" style="border-right: 2px solid black;">
            <h2>
                <i class="fa-solid fa-infinity" style="color: #f4f5f5;"></i>
               <b>Infinity Finance</b> 
            </h2><br>
            <p>loan management bank
            </p>
            <ul class="sci">
                <li><i class="fa-brands fa-square-facebook"></i></a></li>
                <li><i class="fa-brands fa-twitter"></i></a></li>
                <li><i class="fa-brands fa-whatsapp"></i></a></li>
                <li><i class="fa-brands fa-instagram"></i></a></li>
            </ul>
        </div>
        <div class="sec-quicklinks">
            <h2>Support</h2>
            <ul>
                <li><a href="#">FAQ</a></li>
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Help</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </div>
        <div class="sec-quicklinks">
            <h2>Loans</h2>
            <ul>
                <li><a href="#">Popular Loans</a></li>
                <li><a href="#">Loan Against Asset</a></li>
                <li><a href="#">Other Loans</a></li>
            </ul>
        </div>
        <div class="sec-quicklinks1">
            <h2>Contact us</h2>
            <ul class="info">
                <li>
                    <span><i class="fa-solid fa-phone" style="padding-left:55px;"></i></span><p style="text-align: center; padding-left:70px;">020-2332-445</p>
                </li>
                <li>
                    <span><i class="fa-solid fa-envelope"></i></span><p style="text-align: center;">infinityfinance2003@gmail.com</p>
                </li>
            </ul>
        </div>


        </div>
        <div class="copyrightText">
            <p>Copyright @2023 Infinity Finance.All Rights Reserved.</p>
        </div>
    </footer>
</body>
</html>