<?php
    // require('connection.php');
    if(isset($_POST['submit']))
    {
        // $userid=$_POST['userid'];
        // $spassword=$_POST['spassword'];
        // $captcha=$_POST['captcha'];
        // $sql="INSERT INTO `loginform` ( `userid`, `spassword`, `captcha`, `datetime`) VALUES ( '$userid', '$spassword', '$captcha', current_timestamp())";
         
            // if($con->query($sql)==1)
            // {
            //     $insert=true;
                header("location: hloan.php");
            // }
            // else 
            //     echo "Error:$sql<br>$con->error";
            
            $con->close();   
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"><title>Document</title>
    <!-- css file -->
    <link rel="stylesheet" href="hcal1.css">
    <!-- fontawsome link -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
         integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
 
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
    <div class="details">
      <button onclick="myFunction1()">Gold loan Information</button>
      <div id="myDIV1" >
      The Infinity Finance Bank Gold Loan is your definitive solution to meet your imperative financial needs. Whatever your reason may be, education, business expansion, personal requirement, medical crisis or any other specified end-use, our Loan against Gold is all you need.
In volatile times and during a contingency you can take a Loan on Gold, for any use other than to purchase jewellery. Infinity Gold Loan can be availed by pledge of gold ornaments including gold coins sold by Banks with minimum paper work and low interest rate.
Gold is a valuable asset, and with it comes surety and stability, so why not let it work for you? With minimal documentation and quick disbursal, a Gold Loan is a seamless solution. You can avail a Loan against Gold at any time. Our flexible tenure and repayment options ensure that your monthly outgoings are within your budget.

      </div>
        <button onclick="myFunction2()">Gold loan Eligibility</button>
        <div id="myDIV2" style="display: none;">
        An Indian Resident between the age of 18 and 75 years who is a businessman, trader, farmer, a salaried or self-employed individual is eligible to apply for a Gold Loan through Infinity finance Bank. You can check your eligibility through our Gold Loan eligibility calculator.Profession : Any individual (singly or jointly) with Steady source of income including: Bank’s Employees, Pensioners. 

        </div>
          <button onclick="myFunction3()">Required Documentation</button>
      <div id="myDIV3" style="display: none;">
          <ul style="display: flex;">
              <li>Passport Size Photograph</li>
              <li>Voters’ ID Card</li>
              <li>UDI and PAN Card</li>
              <li>Driving license </li>
              <li>residenceproof</li>
              <li>Agri Allied Occupation Documentation( in case of bullet repayment for agriculture customers)</li>
              


          </ul>
        </div>
  
</div>
    <div class="loan-calculator" >
        <div class="left">
          <h2>Loan Calculator</h2>
  
          <form action="#">
            <div class="group">
              <div class="title">Amount</div>
              <input type="text" value="30000" class="loan-amount" style="margin-left: 95px;" >
            </div>
  
            <div class="group">
              <div class="title">Interest Rate</div>
              <input type="text" value="7.5" readonly class="interest-rate"style="margin-left: 60px;" />
            </div>
  
            <div class="group">
              <div class="title">Tenure (in months)</div>
              <input type="text" value="240" class="loan-tenure" />
            </div>
          </form>
          <button class="calculate-btn">Calculate</button>
        </div>
  
        <!-- <div class="result"> -->
          <div class="middel">
            <div class="loan-emi">
              <p>Loan EMI</p>
              <div class="value"  style="margin-left:95px">123</div>
            </div>
  
            <div class="total-interest">
              <p>Total Interest Payable</p>
              <div class="value">1234</div>
            </div>
  
            <div class="total-amount">
              <p>Total Amount</p>
              <div class="value"style="margin-left:75px">12345</div>
            </div>
  
          </div>
  
          <div class="right">
            <canvas id="myChart" width="100" height="500"></canvas>
          </div>
        </div>
      </div>
  
      <!-- <div class="declare">
        
      
          
  <input type="checkbox" id="d1" name="d1" value="d1">
    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptate facere doloribus temporibus est eaque, assumenda repellat. Nobis alias sunt rem saepe qui doloremque voluptatum repudiandae inventore. Blanditiis, asperiores alias? At.</label><br><br>
   <input type="checkbox" id="d1" name="d1" value="d1">
  <label for="d1"> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptate facere doloribus temporibus est eaque, assumenda repellat. Nobis alias sunt rem saepe qui doloremque voluptatum repudiandae inventore. Blanditiis, asperiores alias? At.</label><br><br>
  <input type="checkbox" id="d1" name="d1" value="d1">
  <label for="d1"> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptate facere doloribus temporibus est eaque, assumenda repellat. Nobis alias sunt rem saepe qui doloremque voluptatum repudiandae inventore. Blanditiis, asperiores alias? At.</label><br><br>
  <a href="goldform.php">
    <button value="submit" name="submit" id="btn2">submit</button>
  </a>
  <!-- <input type="submit" value="Submit" id="sub" name="submit"> 
      </div> -->
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
                    <span><i class="fa-solid fa-phone" style="padding-left:77px;"></i></span><br>
                    <p style="text-align: center; padding-left:87px;">020-2332-445</p>
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

      <script src="https://cdn.jsdelivr.net/npm/chart.js@3.6.2/dist/chart.min.js"></script>
  
      <script src="hcal.js"></script>
    </body>
  </html>
    