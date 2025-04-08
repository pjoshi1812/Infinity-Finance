<?php
    require('connection.php');
    if(isset($_POST['userlogin']))
    {
        $id=$_POST['id'];
        $captcha=$_POST['captcha'];
        $password=$_POST['password'];
        
       
        if($id=="admin")
        {
            
         
            $sql="INSERT INTO `adminlogin` ( `id`, `password`, `captcha`, `subtime`) VALUES ( '$id', '$password', '$captcha', current_timestamp())";
            if($con->query($sql)==1)
            {
                $insert=true;
                header("location: admin.php");
            }
            else 
                echo "Error:$sql<br>$con->error";
        }
        else
        {
            
            $sql="INSERT INTO `userlogin` (`id`, `password`, `captcha`, `subtime`) VALUES ('$id', '$password', '$captcha', current_timestamp())";
            if($con->query($sql)==1)
            {
                $insert=true;
                header("location: user.php");
            }
            else 
                echo "Error:$sql<br>$con->error";
            
            $con->close();   
        }
            
    }
    
?>

<!-- <i class="fa-light fa-scale-balanced"></i>
<i class="fa-solid fa-coins"></i> --> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"><title>Document</title>
    <!-- css file -->
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="footer.css">
    <!-- fontawsome link -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
         integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
            <li> <a href="index.php">Home</a></li>

            <li><a href="#">Popular Loans</a>
                <ul class ="dropdown">
                    <li><a href="hcal1.php">Home Loan</a></li>
                    <li><a href="educationinfo1.php">Education Loan</a></li>
                </ul>
            </li>

            <li><a href="#">Loan Against Asset</a>
                <ul class ="dropdown">
                    <li><a href="goldinfo1.php">Gold Loan</a></li>
                </ul>
            </li>

            <li> <a href="#">Other Loans</a>
                <ul class ="dropdown">
                    <!-- <li><a href="#">Business Loan</a></li> -->
                    <li><a href="businessinfo1.php">Business Loan</a></li>
                </ul>
            </li>

            <li><a href="FAQ.php">FAQ</a></li>

            <li><a href="bankaboutus.php">About Us</a></li>
            </ul>
        </div>
    </div>

    </div>
    <div class="slider">
        <div id="d1" class="d"><img src="s1.png" alt=""></div>
        <div id="d2" class="d"><img src="s2.png" alt=""></div>
        <div id="d3" class="d"><img src="s3.png" alt=""></div>
    </div>
    <div class="navbtn">
        <span class="dot active" onclick="changeSlide(0)"></span>
        <span class="dot"onclick="changeSlide(1)"></span>
        <span class="dot" onclick="changeSlide(2)"></span>
    </div>
    <div class="form1">
        <h3>LOGIN FORM</h3>
    <form action="#" method="post">

        <label for="id">Enter ID</label>
        <input type="text" name="id" id="userid" required><br><br>

        <label for="password">Enter Password</label>
        <input type="password" name="password" id="userpassword" required><br><br>

        <p style="padding: 0px; margin-top:0px; font-size:15px ;text-transform: uppercase">Captcha not visible <img src="refresh.jpg" width="50px"  onclick="cap()" style="cursor: pointer;padding-left: 0px;"></p>
        
        <input type="text" name="captcha"readonly id="capt"   onmousedown="return false" onselectstart="return false">
        
        <label for="captcha" style="margin-top:20px">Enter captcha code</label>
        <input type="text" name="captcha" id="inputtext" required >
        
        
                        
        <button value="login" name="userlogin" class="btn">Login</button>

                        <!-- <input type="button" value="login" name="usersubmit">                 -->
    </form>

    </div>    <span class="material-symbols-rounded" style="font-size:230px;position:relative;bottom:-750px;left:1170px;color: #3ca0e7;">
all_inclusive
</span>
  

    
    <div class="wrapper">
        <div class="row">
            <div class="column">
                <div class="cards">
                    <div class="card-img">
                        <img src="homeloan.png" alt="">
                    </div>
                    <div class="card-title">
                        Home Loan<br>
                        <a href="hcal1.php" >
                            <button class="btn1">Read More </button>
                        </a>
                    </div>
                </div>
            </div>

            <div class="column">
                <div class="cards">
                    <div class="card-img">
                        <img src="eduloan.png" alt="">
                    </div>
                    <div class="card-title">
                        Education Loan<br>
                        <a href="educationinfo1.php" >
                            <button class="btn1">Read More </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="column">
                <div class="cards">
                    <div class="card-img">
                        <img src="goldloan.png" alt="">
                    </div>
                    <div class="card-title">
                        Gold Loan<br>
                        <a href="goldinfo1.php" >
                            <button class="btn1">Read More </button>
                        </a>
                    </div>
                </div>
            </div>
            
           
            <div class="column">
                <div class="cards">
                    <div class="card-img">
                        <img src="Businessloan.png" alt="">
                    </div>
                    <div class="card-title">
                        Business Loan<br>
                        <a href="businessinfo1.php" >
                            <button class="btn1">Read More </button>
                        </a>
                    </div>
                </div>
            </div>
           
            
        </div>
        
        
        
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
                <li><a href="FAQ.php">FAQ</a></li>
                
                <li><a href="bankaboutus.php">About Us</a></li>
            </ul>
        </div>
        <div class="sec-quicklinks">
            <h2>Loans</h2>
            <ul>
            <li><a href="hcal1.php">Home Loan</a></li>
            <li><a href="educationinfo1.php">Education Loan</a></li>
            <li><a href="goldinfo1.php">Gold Loan</a></li>
            <li><a href="businessinfo1.php">Business Loan</a></li>
            </ul>
        </div>
        <div class="sec-quicklinks1">
            <h2>Contact us</h2>
            <ul class="info">
                <li>
                    <span><i class="fa-solid fa-phone" style="padding-left:55px;"></i></span><p style="text-align: center; padding-left:70px;">020-2332-445</p>
                </li><br>
                <li>
                    <span><i class="fa-solid fa-envelope"></i></span><p style="text-align: center;">infinityfinance2003@gmail.com</p>
                </li><br>
            </ul>
        </div>


        </div>
        <div class="copyrightText">
            <p>Copyright @2023 Infinity Finance.All Rights Reserved.</p>
        </div>
    </footer>


   <!-- js file -->
    <script src="index.js"></script>
   </body>

</html>