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
    <div class="details">
      <button onclick="myFunction1()">Home loan Information</button>
      <div id="myDIV1" >
          Infinity Fianance Bank realises the importance of a home of your own and offers Home Loans that can make building your dream living space easier.Infinity Bank gives Home Loans at attractive interest rates with easy repayment facilities. You can also enjoy Infinity Bank loan offers that make financing truly simple. 
        </div>
        <button onclick="myFunction2()">Home loan Eligibility</button>
        <div id="myDIV2" style="display: none;">
          Your home loan eligibility determines whether you qualify for borrowing a home loan or not. Infinity Fianance Bank conducts this mandatory housing loan eligibility check when you apply for a home loan. Based on your documentation, credit score and financial history the lending bank is able to analyse your financial status, creditworthiness and repayment capacity. A favourable impression that you leave on the lender increases your chances of getting a home loan. That’s why, before applying for a home loan it is important that you understand the eligibility criteria and make sure you fit teh bill.
          </div>
          <button onclick="myFunction3()">Required Documentation</button>
      <div id="myDIV3" style="display: none;">
          <ul style="display: flex;">
              <li>Phothograph</li>
              <li>Signature</li>
              <li>UDI and PAN Card</li>
              <li>Light Bills (3 months)</li>
              <li>Salary Statements(3 months)</li>
              <li>ITR Statements</li>
              <li>Rent Agreement</li>
              <li>Owner's Permission</li>


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
              <input type="text" value="9.5" readonly class="interest-rate"style="margin-left: 60px;" />
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