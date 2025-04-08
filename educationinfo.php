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
      <button onclick="myFunction1()">Education loan Information</button>
      <div id="myDIV1" >
      The cost of education in India and abroad is rising each day. It has become difficult for students to afford quality education because of the ever-increasing college and school fees. The only way to cope with the rising cost is by applying for an Education Loan that has added benefits other than just paying the college fees. Let’s get to know how.
An education loan is a loan that students apply for, in order to fund their education in India or abroad. Different banks and financial institutions offer Education Loans to aspirants at competitive rates, to help them make quality education affordable. 
An Education Loan also often called a student loan is an amount you can borrow from Banks/financial instituitions towards paying for your academic fees or for that of your loved ones’. These are generally sought for higher education and/or specialised courses in esteemed institutes for located overseas or domestically.

      </div>
        <button onclick="myFunction2()">Education loan Eligibility</button>
        <div id="myDIV2" style="display: none;">
        Indian resident, between 16 and 35 years of age
Co-applicant is mandatory for all full-time programs – co-applicant could be parent/guardian, or spouse/parent in law
Student should have secured admission to a higher education course in recognized institutions in India or Abroad through Entrance Test/ Merit Based Selection process 
Approved courses leading to graduate/ post graduate degree and P G diplomas conducted by recognized colleges/ universities recognized by UGC/ Government/ AICTE/ AIBMS/ ICMR etc. 

        </div>
          <button onclick="myFunction3()">Required Documentation</button>
      <div id="myDIV3" style="display: none;">
          <ul style="display: flex;">
              <li>Marksheet and passing certificate of 10th and 12th exams</li>
              <li>Admission Letter from the respective college/university</li>
              <li>Fee structure</li>
              <li>KYC document of the applicant </li>
              <li>Income proof in some cases.</li>
              
              


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
              <input type="text" value="10.5"readonly  class="interest-rate"style="margin-left: 60px;" />
            </div>
  
            <div class="group">
              <div class="title">Tenure (in months)</div>
              <input type="text" value="240" class="loan-tenure" />
            </div>
          </form>
          <button class="calculate-btn">Calculate</button>
          <a href="eloan.php"><button value="next"class="calculate-btn" style="width:100px;margin-left:20px" >Next</button></a>
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
  <a href="eloan.php">
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
    