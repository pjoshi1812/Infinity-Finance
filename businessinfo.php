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
      <button onclick="myFunction1()">Business loan Information</button>
      <div id="myDIV1" >
      For every business, funding is a key concern and a requisite for scaling up. But getting loans is not that simple, especially for small businesses. This is where Infinity Finance Bank Bussiness Loan promises to support. Our financial services are aimed at helping you overcome financial constraints and realise your business goals.
Are you a manufacturer, retailer, trader or a professional running your own business? Then you would be aware about the challenges of managing your daily operations on one hand while trying to expand with the other. Today, liquidity for a self-employed is of supreme importance. Moreover, meeting your growing business requirements doesn’t come to you on a platter. This is where we play a role. Infinity Finance Bank now offers collateral-free EMI-based Business Loans for the self-employed with minimum documentation. While you decide whether to use the amount for the entire tenure or to pre-close it faster, we help you to mitigate your immediate liquidity requirements while keeping your business adequately funded to prosper. You can apply and avail the loan online and then repay in easy instalments as convenient.

      </div>
        <button onclick="myFunction2()">Business loan Eligibility</button>
        <div id="myDIV2" style="display: none;">
        The following people are eligible to apply for a Business Loan: <br>
•	Self employed individuals, proprietors, private ltd. co. and partnership firms involved in the business of manufacturing, trading or services. <br>
•	The business should have a minimum turnover of ₹40 lakhs <br>
•	Individuals who have been in the current business for a minimum of 3 years, with 5 years total business experience. <br>
•	Those whose business has been profit-making for the previous 2 years <br>
•	The business should have a Minimal Annual Income (ITR) of ₹1.5 lakhs per annum <br>
•	The applicant should be at least 21 years at the time of applying for the loan, and should be not older than 65 years at the time of loan maturity.

        </div>
          <button onclick="myFunction3()">Required Documentation</button>
      <div id="myDIV3" style="display: none;">
          <ul style="display: flex;">
              <li>Passport size Photograph</li>
              <li>PAN Card</li>
              <li>Aadhaar Card</li>
              <li>Passport</li>
              <li>Proof of continuation (ITR/Trade license/Establishment/Sales Tax Certificate)</li>
              <li>ITR along with computation of income</li>
              


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
              <input type="text" value="13.5"readonly  class="interest-rate"style="margin-left: 60px;" />
            </div>
  
            <div class="group">
              <div class="title">Tenure (in months)</div>
              <input type="text" value="240" class="loan-tenure" />
            </div>
          </form>
          <button class="calculate-btn">Calculate</button>
          <a href="bloan.php"><button value="next"class="calculate-btn" style="width:100px;margin-left:20px" >Next</button></a>
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
<!--   
      <div class="declare">
        
      
          
  <input type="checkbox" id="d1" name="d1" value="d1">
    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptate facere doloribus temporibus est eaque, assumenda repellat. Nobis alias sunt rem saepe qui doloremque voluptatum repudiandae inventore. Blanditiis, asperiores alias? At.</label><br><br>
   <input type="checkbox" id="d1" name="d1" value="d1">
  <label for="d1"> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptate facere doloribus temporibus est eaque, assumenda repellat. Nobis alias sunt rem saepe qui doloremque voluptatum repudiandae inventore. Blanditiis, asperiores alias? At.</label><br><br>
  <input type="checkbox" id="d1" name="d1" value="d1">
  <label for="d1"> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptate facere doloribus temporibus est eaque, assumenda repellat. Nobis alias sunt rem saepe qui doloremque voluptatum repudiandae inventore. Blanditiis, asperiores alias? At.</label><br><br>
  <a href="hloan.php">
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
    