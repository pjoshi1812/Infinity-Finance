<?php
require('connection.php');


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>adminpage</title>
    <link rel="stylesheet" href="admin.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
         integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
 
    <style>
        html{
            overflow-x:hidden;
           
           
        }
        
footer
{  
    margin-top:auto ;
    justify-content: end;
    align-content:end;
    display: grid;
    position: relative;
    bottom: -00px;
   left:-750px;
   width: 1900px;
   height: auto;
   padding: 10px;
   background: #3ca0e7;
  
   
}
    </style>
</head>
<body>
<div class="header">
        <!-- <i class="fas fa-rupee-sign"></i> -->
        <div class="menu">
            <div class="header">
              
                <div class="nav" style="height:1200px;">
                <div class="logo">
                 <img src="Infinity Finance your financial partner (4).png" alt="logo" srcset=" ">
               </div>
               <h3>Admin Dashboard</h3>
               <ul>
               <li><a href="index.php">User Panel</a></li>
                         <li> <a href="admin.php">Admin Panel</a></li>
                         <li><a href="adminhomeloan.php">Home Loan</a></li>
                         <li><a href="admineducationloan.php">Education Loan</a></li>
                         <li><a href="admingoldloan.php">Gold Loan</a></li>
                         <li><a href="adminbusinessloan.php">Business Loan</a></li> 
                    </ul>
                </div>
            </div>
    
        </div>
    </div> 
    
    
   
        
    </div>
    <div class="wrapper">
        <div class="row">
            <div class="column" style="position:relative;top:120px;"  >
                <div class="cards" style="width: 219px; height: 178px;margin-left:250px;border-radius:30px;background-color:#EE9322 ">
                    
                <div class="counter">  
                    <h2 style="position:relative"> Business Loan User </h2>  
                    <div class="usercnt" style="font-size:30px">
                    <?php
    
                        $sql2="SELECT * FROM `bloan` ORDER BY srno";
                        if ($result=mysqli_query($con,$sql2))
                        {
                        // Return the number of fields in result set
                        $fieldcount=mysqli_num_rows($result);
                    
                        echo $fieldcount;
                        // Free result set
                        mysqli_free_result($result); 
                        }
                        // $count=$db->prepare("select * from bloan ");
                        // $count->execute();
                        // echo "Number of Columns : ". $count->columnCount();
                    ?>
                    </div>
                </div>
                <div class="column">
                <div class="cards" style="width: 219px; height: 178px; position:relative;left:205px;top:-165px;border-radius:30px;background-color:#FFB84C">
                    
                <div class="counter">   
                    <h2 style="position:relative"> Home Loan User </h2>  
                    <div class="usercnt" style="font-size:30px">
                    <?php
    
                        $sql2="SELECT * FROM `hloan` ORDER BY srno";
                        if ($result=mysqli_query($con,$sql2))
                        {
                        // Return the number of fields in result set
                        $fieldcount=mysqli_num_rows($result);
                    
                        echo $fieldcount;
                        // Free result set
                        mysqli_free_result($result);
                        }
        
                    ?>
                    </div>
                </div>
                <div class="cards" style="width: 219px; height: 178px;position:relative;left:240px;top:-120px;border-radius:30px;background-color:#FFE569">
                <h2 style="position:relative"> Education Loan User </h2>  
                    
                    <div class="counter">    
                    <div class="usercnt" style="font-size:30px">
                        <?php
        
                            $sql2="SELECT * FROM `eloan` ORDER BY srno";
                            if ($result=mysqli_query($con,$sql2))
                            {
                            // Return the number of fields in result set
                            $fieldcount=mysqli_num_rows($result);
                        
                            echo $fieldcount;
                            // Free result set
                            mysqli_free_result($result);
                            }
            
                        ?>
                    </div>
                    </div>
                    <div class="cards" style="width: 219px; height: 178px;position:relative;left:240px;top:-120px; border-radius:30px;background-color:#FBFFDC">
                    <h2 style="position:relative"> Gold Loan User </h2>  
                    
                    <div class="counter">   
                    <div class="usercnt" style="font-size:30px"> 
                        <?php
        
                            $sql2="SELECT * FROM `gloan` ORDER BY srno";
                            if ($result=mysqli_query($con,$sql2))
                            {
                            // Return the number of fields in result set
                            $fieldcount=mysqli_num_rows($result);
                        
                            echo $fieldcount;
                            // Free result set
                            mysqli_free_result($result);
                            }
            
                        ?>
                        </div>
                    </div>
            </div>
        </div>
    </div>
                
           <div class="wrapper">
        <div class="row">
            <div class="column">
                <div class="cards">
                    <div class="card-img">
                        <img src="homeloan.png" alt="">
                    </div>
                    <div class="card-title">
                        Home Loan<br>
                        <a href="adminhomeloan.php" >
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
                        <a href="admineducationloan.php" >
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
                        <a href="admingoldloan.php" >
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
                        <a href="adminbusinessloan.php" >
                            <button class="btn1">Read More </button>
                        </a>
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
                <li><a href="FAQ.php" style="color:black;text-decoration:none">FAQ</a></li>
                
                <li><a href="bankaboutus.php" style="color:black;text-decoration:none">About Us</a></li>
            </ul>
        </div>
        <div class="sec-quicklinks">
            <h2>Loans</h2>
            <ul >
            <li><a href="hcal1.php" style="color:black;text-decoration:none">Home Loan</a></li>
            <li><a href="educationinfo1.php" style="color:black;text-decoration:none">Education Loan</a></li>
            <li><a href="goldinfo1.php" style="color:black;text-decoration:none">Gold Loan</a></li>
            <li><a href="businessinfo1.php"style="color:black;text-decoration:none">Business Loan</a></li>
            </ul>
        </div>
        <div class="sec-quicklinks1">
            <h2>Contact us</h2>
            <ul class="info">
          
                    <span><i class="fa-solid fa-phone" style="padding-left:0px;"></i></span><p style="text-align: center;">020-2332-445</p>
                    <span><i class="fa-solid fa-envelope"></i></span><p style="text-align: center;">infinityfinance2003@gmail.com</p>
      
            </ul>
        </div>


        </div>
        <div class="copyrightText">
            <p>Copyright @2023 Infinity Finance.All Rights Reserved.</p>
        </div>
    </footer>



   </div> 
</body>
   </html>