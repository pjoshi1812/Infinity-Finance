<?php
  require('connection.php');
  if(isset($_POST['btn']))
  {

      $prefix=$_POST['prefix'];
      $name=$_POST['name'];
      $flatno1=$_POST['flatno1'];
      $buildingpremisesname1=$_POST['buildingpremisesname1'];
      $streetroadname1=$_POST['streetroadname1'];
      $towncityvillagename1=$_POST['towncityvillagename1'];
      $district1=$_POST['district1'];
      $pincode1=$_POST['pincode1'];
      $flatno2=$_POST['flatno2'];
      $buildingpremisesname2=$_POST['buildingpremisesname2'];
      $streetroadname2=$_POST['streetroadname2'];
      $towncityvillagename2=$_POST['towncityvillagename2'];
      $district2=$_POST['district2'];
      $pincode2=$_POST['pincode2'];
      $std=$_POST['std'];
      $tel=$_POST['tel'];
      $mob=$_POST['mob'];
      $email=$_POST['email'];
      $dob=$_POST['dob'];
      $gender=$_POST['gender'];
      $status=$_POST['status'];
      $income=$_POST['income'];
      $pan=$_POST['pan'];
      $religion=$_POST['religion'];
      $caste=$_POST['caste'];
      $Salaried=$_POST['Salaried'];
      $selfemployed=$_POST['selfemployed'];
      $lo=$_POST['lo'];
      $purposeofloan=$_POST['purposeofloan'];
      $accholdername=$_POST['accholdername'];
      $branchname=$_POST['branchname'];
      $accountno=$_POST['accountno'];
      $ifsccode=$_POST['ifsccode'];
      $micrcode=$_POST['micrcode'];
      $accountopeningdate=$_POST['accountopeningdate'];

     
      $photo=$_FILES["photo"]["name"];
      $tphoto=$_FILES["photo"]["tmp_name"];
      $fp="../goldloandocs/".$photo;

      $aadharcard=$_FILES["aadharcard"]["name"];
      $tadhar=$_FILES["aadharcard"]["tmp_name"];
      $fa="../goldloandocs/".$aadharcard;

      $drivinglicence=$_FILES["drivinglicence"]["name"];
      $tdriving=$_FILES["drivinglicence"]["tmp_name"];
      $fd="../goldloandocs/".$drivinglicence;

      $votersid=$_FILES["votersid"]["name"];
      $tvotersid=$_FILES["votersid"]["tmp_name"];
      $fv="../goldloandocs/".$votersid;

      $passport=$_FILES["passport"]["name"];
      $tpassport=$_FILES["passport"]["tmp_name"];
      $fpassport="../goldloandocs/".$passport;

      $doc7=$_FILES["doc7"]["name"];
      $tdoc7=$_FILES["doc7"]["tmp_name"];
      $fdoc="../goldloandocs/".$doc7;

      $signatureproof=$_FILES["signatureproof"]["name"];
      $tsignatureproof=$_FILES["signatureproof"]["tmp_name"];
      $fsignatureproof="../goldloandocs/".$signatureproof;

      $residenceproof=$_FILES["residenceproof"]["name"];
      $tresidenceproof=$_FILES["residenceproof"]["tmp_name"];
      $fresidenceproof="../goldloandocs/".$residenceproof;

      $fsignature=$_FILES["fsignature"]["name"];
      $tfsignature=$_FILES["fsignature"]["tmp_name"];
      $ffsignature="../goldloandocs/".$fsignature;
      $amount=$_POST['amount'];
      $intrest=$_POST['intrest'];
      $tenure=$_POST['tenure'];
      $rate=$_POST['rate'];
      $nos=$_POST['nos'];
      $nnot=$_POST['nnot'];
      $fdate=$_POST['fdate'];
      $place=$_POST['place'];
     

     
    $sql="INSERT INTO `gloan` ( `prefix`, `name`, `flatno1`, `buildingpremisesname1`, `streetroadname1`, `towncityvillagename1`, `district1`, `pincode1`, `flatno2`, `buildingpremisesname2`, `streetroadname2`, `towncityvillagename2`, `district2`, `pincode2`, `std`, `tel`, `mob`, `email`, `dob`, `gender`, `status`, `income`, `pan`, `religion`, `caste`, `Salaried`, `selfemployed`,`lo`, `purposeofloan`, `accholdername`, `branchname`, `accountno`, `ifsccode`, `micrcode`, `accountopeningdate`, `photo`, `aadharcard`, `drivinglicence`, `votersid`, `passport`, `doc7`, `signatureproof`, `residenceproof`, `amount`, `intrest`, `tenure`, `rate`, `nos`,`nnot`, `fdate`, `place`, `fsignature`, `currenttime`) 
    VALUES ( '$prefix', '$name', '$flatno1', '$buildingpremisesname1', '$streetroadname1', '$towncityvillagename1', '$district1', '$pincode1', '$flatno2', '$buildingpremisesname2', '$streetroadname2', '$towncityvillagename2', '$district2', '$pincode2', '$std', '$tel', '$mob', '$email', '$dob', '$gender', '$status', '$income', '$pan', '$religion', '$caste', '$Salaried','$selfemployed', '$lo', '$purposeofloan', '$accholdername', '$branchname', '$accountno', '$ifsccode', '$micrcode', '$accountopeningdate', '$photo', '$aadharcard', '$drivinglicence', '$votersid', '$passport', '$doc7', '$signatureproof', '$residenceproof', '$amount', '$intrest', '$tenure', '$rate', '$nos','$nnot', '$fdate', '$place', '$fsignature', current_timestamp())";
    if($con->query($sql)==1)
    {
       move_uploaded_file($tphoto, $fp);
       move_uploaded_file($tadhar, $fa);
       move_uploaded_file($tdriving, $fd);
       move_uploaded_file($tvotersid, $fv);
       move_uploaded_file($tpassport, $fpassport);
       move_uploaded_file($tdoc7, $fdoc);
       move_uploaded_file($tsignatureproof, $fsignatureproof);
       move_uploaded_file($tresidenceproof, $fresidenceproof);
       move_uploaded_file($tfsignature, $ffsignature);

       

        $insert=true;
        header("location: lastpage.php");
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
  <title>Gold Loan</title>
  <link rel="stylesheet" href="hloan.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
         integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
 
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <script src="eduform.js" defer></script>
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
  <form data-multi-step class="multi-step-form" method="post" enctype="multipart/form-data"  >
    <div class="card" data-step  style="height: 900px;">
      <h3 class="step-title">Personal Details</h3>
      <div class="form-group"style="display: inline;">

        <label for ="bname" >Borrower's name</label>
        <select name="prefix" id="" style="width:70px;padding:10px;margin-left: 34px;" required >
          <option value="Mrs">Mrs</option>
          <option value="Ms">Ms</option>
          <option value ="Mr">Mr</option>
        </select>
        <input type="text" name="name" id="" placeholder="Borrower name" style="width:600px;" value="Anita Vijay Joshi" required><br>

        <label for ="address1" >Address:</label>
        <input type="text" name="flatno1" id="" placeholder="Flat no" style="width:50px;margin-left: 100px;padding: 10px;" value="108"required>
        <input type="text" name="buildingpremisesname1" id="" placeholder="Building/Premises name" style="width:320px;padding: 10px;" value="Prathmesh Apartment"required>
        <input type="text" name="streetroadname1" id="" placeholder="Street/Road name" style="width:400px;padding: 10px;"value="Sinhagad Road"required>
        <input type="text" name="towncityvillagename1" id="" placeholder="Town/City/Village Name" style="width:400px;margin-left: 220px;padding: 10px;" value="Pune"required>
        <input type="text" name="district1" id="" placeholder="District" style="width:300px;padding: 10px;" value="Pune"required>
        <input type="text" name="pincode1" id="" placeholder="Pincode" style="width:100px;padding: 10px;" value="4110303"required><br>

        <label for ="off" >Office Address:</label>
        <input type="text" name="flatno2" id="" placeholder="Flat no" style="width:50px;margin-left: 100px;padding: 10px;" value="301"required>
        <input type="text" name="buildingpremisesname2" id="" placeholder="Building/Premises name" style="width:320px;padding: 10px;" value="PSIF pvt.ltd."required>
        <input type="text" name="streetroadname2" id="" placeholder="Street/Road name" style="width:400px;padding: 10px;"value="Hinjewadi"required>
        <input type="text" name="towncityvillagename2" id="" placeholder="Town/City/Village Name" style="width:400px;margin-left: 220px;padding: 10px;"value="Pune"required>
        <input type="text" name="district2" id="" placeholder="District" style="width:300px;padding: 10px;"value="Pune"required>
        <input type="text" name="pincode2" id="" placeholder="Pincode" style="width:100px;padding: 10px;"value="411045"required><br>


        <label for ="std" >STD Code:</label>
        <input type="number" name="std" id=""  style="width:70px;padding: 10px;margin-left: 75px; margin-right: 30px;"  minlength="3" maxlength="3"value="220" required>
        <label for ="tel" >Tel no:</label>
        <input type="number" name="tel" id=""  style="width:170px;padding: 10px;margin-left: 31px;" value="24456682" minlength="8" maxlength="8"required>
        <label for ="mob" >Mobile no:</label>
        <input type="number" name="mob" id=""  style="width:150px;padding: 10px;" value="9657236189" minlength="10" maxlength="10"required>
        <label for ="email" >Email:</label>
        <input type="email" name="email" id=""  style="width:200px;padding: 10px;" value="anitajoshi12@gmail.com"required><br>

        <label for ="dob" >Date Of Birth</label>
        <input type="date" name="dob" id=""  style="width:200px;padding: 20px;margin-left: 55px;margin-right: 40px;" value="1967-08-11"required><br>

        <label for ="gender" >Gender:</label>
          <select name="gender" style="width:100px;padding:10px;margin-left:100px;font-weight: 200; font-size: 15px;" required>
            <option value="female">Female</option>
            <option value="male">Male</option>
          </select>

        <label for ="status" style="margin-left: 80px;margin-right: 30px;" >Status:</label>
          <select name="status" style="width:100px;padding:10px;margin-left:10px;font-weight: 100; font-size: 15px;"required>
            <option value="Married">Married</option>
            <option value="Single">Single</option>
          </select>
        
        <label for="income"style="margin-left: 60px;margin-right: 0px;" >Net Annual Income:</label>
          <select name="income" style="width:200px;padding:10px;margin-left:10px;font-weight: 100; font-size: 15px;"required>
            <option value="60000-120000">60000-120000</option>
            <option value="0-60000">0-60000</option>
            <option value="120000-150000">120000-150000</option>
            <option value=">150000">>150000</option>
          </select>

        <br>
        <label for ="pan" >PAN No:</label>
        <input type="text" name="pan" id="" class="pan" style="width:400px; margin-left:90px;margin-right: 40px;" value="NCPJ34429	" minlength="9" maxlength="9" required >
        <label for ="religion" >Religion:</label>
        <input type="text" name="religion" id=""  style="width:150px;margin-left: 0px;"value="hindu"required>
  
  
        <label for="caste"style="margin-left: 10px;margin-right: 0px;" > Caste</label>
          <select name="caste" style="width:200px;padding:10px;margin-left:10px;font-weight: 100; font-size: 15px;" required>
            <option value="OPEN">Open</option>
            <option value="SC">SC</option>
            <option value="ST">ST</option>
            <option value="OBC">OBC</option>
            <option value="other"> Other</option>
          </select><br>

            <label for="profession">Profession</label>
            <label for="Salaried" style="font-weight: 100;margin-left: 70px;">Salaried:</label>
            <select name="Salaried"style="width:200px;padding:10px;margin-left:10px;font-weight: 100; font-size: 15px;" id=""required>
              <option value="Private">Private</option>
              <option value="Public">Public</option>
              <option value="Goverment">Goverment</option>
              <option value="wagecontract">Wage worker/Contract employee</option>
            </select>

            <label for="selfemployed:" style="font-weight: 100;margin-left: 0px;">Self-Employed:</label>
            <select name="selfemployed"style="width:200px;padding:10px;margin-left:10px;font-weight: 100; font-size: 15px;" id=""required>
              <option value="CA/CS/Doctor">CA/CS/Doctor</option>
              <option value="Agriculturist">Agriculturist</option>
              <option value="Manufacturer">Manufacturer</option>
              <option value="ServiceProvider">Service Provider</option>
              <option value="Trader">Trader</option>
              <input type="text" name="self-Employed" id="" placeholder="other">
            </select>
          <br><br>
            <label for ="lo" style="margin-right: 30px;">Have You availed loan from any bank:</label>
            <input type="radio" name="lo" id=""  style="width:18px;"required>
            <label for ="lo"  style="font-weight: 100;">YES</label>
            <input type="radio" name="lo" id=""  style="width:18px;"required>
            <label for ="lo" style="font-weight: 100;">NO</label><br>

            <label for="purposeofloan">Purpose of Loan</label>
            <select name="purposeofloan" id=""style="width:200px;padding:10px;margin-left:10px;font-weight: 100; font-size: 15px;" required>
              <option value="Marriage">Marriage</option> 
              <option value="Agriculture">Agriculture</option>
              <option value="BusinessExpansion">Business Expansion</option>
              <option value="RepayLoansToInformalSector">Repay Loans To Informal Sector</option> 
              <option value="Education">Education</option> 
              <!-- <input type="text" name="purposeofloan" id="" placeholder="other"> -->
            </select>
          
        <br><br>

        
      </div>
      <button type="button" data-next style="width:160px">Save And Next</button>
      
    </div>
    <div class="card" data-step>
      <h3 class="step-title">Bank Details</h3>
      <div class="form-group" style="display: inline;">
        <label for="accholdername">Name of account holder</label>
        <input type="text" name="accholdername" id="acc" style="width:350px;margin-left: 0px;" value="Anita Vijay Joshi"required>
        <label for="branchname" style="margin-left: 30px;">Branch</label>
        <input type="text" name="branchname" id="branchname" style="width:350px;margin-left: 119px;" value="Karve Road"required><br>
        <label for="accountno">Account no</label>
        <input type="number" name="accountno" id="no" style="width:350px;margin-left: 104px;" value="2715500356"maxlength="10" minlength="10"required>
        <label for="ifsccode" style="padding-left: 24px;">IFSC Code</label>
        <input type="text" name="ifsccode" id="if" style="width:350px;margin-left: 95px;" value="BKID0000505"minlength="11" maxlength="11"required><br>
        <label for="micrcode">MICR Code</label>
        <input type="number" name="micrcode" id="mi" style="width:350px;margin-left: 96px;" value="411240055"minlength="9"maxlength="9"required>
        <label for="accountopeningdate" style="padding-left: 20px;">Account opening date</label>
        <input type="date" name="accountopeningdate" id="da" style="width:300px;margin-right: 180px;" value="2013-09-12"required><br><br> 
      </div>
      <h3 class="step-title">Documents</h3>
      <div class="form-group" style="display: inline;">
        <label for="photo">Applicants Passport Size Photo</label>
        <input type="file" name="photo" id="photo" style="width:350px;margin-left: 0px;"required> 
        <label for="Aadharcard">Aadhar Card</label>
        <input type="file" name="aadharcard" id="doc2" style="width:350px;margin-left: 50px;"required>          <br><br>
        <label for="drivinglicence">Driving Licence</label>
        <input type="file" name="drivinglicence" id="drivinglicence" style="width:350px;margin-left: 124px;"required> 
        <label for="votersid">Voters ID</label>
        <input type="file" name="votersid" id="doc4" style="width:350px;margin-left: 85px;"required> <br><br>
         <label for="passport">Passport</label>
        <input type="file" name="passport" id="doc5" style="width:350px;margin-left: 192px;"> <br>

        <label for="doc7">Agri Allied Occupation Documentation( in case of bullet repayment for agriculture customers)</label>
        <input type="file" name="doc7" id="doc7" style="width:350px;margin-left: 54px;">  <br>
        <label for="SignatureProof">Signature Proof</label>
        <input type="file" name="signatureproof" id="doc8" style="width:350px;margin-left: 130px;"required> 
        <label for="ResidenceProof">Residence Proof</label>
        <input type="file" name="residenceproof" id="doc9" style="width:350px;margin-left: 24px;"required>  <br>
      </div>
     
    
      <button type="button" data-previous>Previous</button>
      <button type="button" data-next style="width:160px">Save And Next</button>

    </div>
    <div class="card" data-step>
      <h3 class="step-title">LOAN DETAILS</h3>
      <div class="form-group"style="display: inline;">
        
      </div>
      <div class="form-group"style="display: inline;">
          <label for="amount">Amount(RS)</label>
        <input type="number" name="amount" id="am" style="width:350px;margin-left: 22px;" value="6000000"required>
        <label for="Intrest"style="margin-left: 80px;margin-right: 30px;">Intrest Payment Mode</label>
        <input type="radio" name="intrest" id="" required >
        <label for ="Intrest" >Monthly</label>
        <input type="radio" name="intrest" id="" required >
        <label for ="Intrest" >Front ended</label><br>
        <label for="Tenure">Tenure</label>
        <input type="number" name="tenure" id="ten" style="width:350px;margin-left: 70px;" value="24"required>
        <label for="rate" style="margin-left: 80px;margin-right: 30px;">Rate of Intrest(% p.a)</label>
        <input type="number" name="rate" id="rate" style="width:350px;margin-left: 45px;" value="7.5"required>
        <br><br>
          <h3 style="margin-left: 600px;font-weight: bolder;font-size: xx-large;">Mode Of Disbursement</h3><br><br>
        <label for="nos" style="font-weight: bold;font-size: larger;">DD in favour old payable at for Amount RS. </label>
        <span class="material-symbols-outlined"style="padding-left:78px;" > currency_rupee</span>
        <select name="nos" id=""style="width:200px;padding:10px;margin-left:50px;font-weight: 100; font-size: 15px;" required>
              <option value="cash">cash</option> 
              <option value="cheque">cheque</option>
        </select>
        <br><br>
        <label for="nnot" style="font-weight: bold;font-size: larger;">T.T Swift Code/RTGS/NEFT</label>
        <span class="material-symbols-outlined" style="padding-left:200px;"> currency_rupee</span>
        <select name="nnot" id=""style="width:200px;padding:10px;margin-left:50px;font-weight: 100; font-size: 15px;" required>
              <option value="rtgs">RTGS</option> 
              <option value="tt">TT</option> 
              <option value="neft">NEFT</option>
        </select>
        <br><br><br>

     
      </div>
      <div class="form-group"style="display: inline;">
        <h3 class="step-title">Addional Information</h3>
        <h4><b>*</b>Payment: No cash/bearer cheque has been collected from you up-front towards processing the loan application. Details with respect to the EMI 
          presentation dates, number of EMIs and amount will be communicated separately through a welcome letter post disbursement of loan. No 
          discount/free gift or any other commitment is given whatsoever which is not documented in the loan agreement by Infinity Finance Bank or any of its authorized 
          representative(s). The loan amount and disbursal is at the sole discretion of Infinity Finance Bank and no commitment has been given regarding the same. Terms and 
          conditions of the loan agreement shall be provided on request. <br>
          <b>*</b>Application processing and loan disbursement: Should take around 17 working days from the time of completion and submission of all relevant loan documents 
          as per Bank's criteria. Stamping cost, Documentation Charge applicable as per the State 
          Stamp Duty Act would be deducted from the disbursal amount. Charges which are in nature of fees are EXCLUSIVE of service tax. Service tax and other 
          government levies, as applicable, would be charged additionally.</h4>
    </div>
      <button type="button" data-previous>Previous</button>
      <button type="button" data-next style="width:160px">Save And Next</button>
    </div>
    <div class="card" data-step style="height: 1900px;">
     
      <div class="form-group" style="display: inline;">
        <h3 class="step-title">DECLARATION</h3>
        <h4 style="margin-left: 100px;margin-right: 100px;">I/We hereby agree to abide by the following terms and 
          conditions:-<br>
          1. All particulars/information given in the application form are 
          true and complete and no material information has been 
          suppressed / withheld. I/We acknowledge that Infinity Finance Bank
          Limited ("the Bank") shall have no liability for any 
          consequences arising out of any erroneous details provided 
          by me/us. I/We authorize the Bank to carry out such credit 
          checks and at such time as it may deem necessary. The 
          Bank may sanction this Loan at its sole discretion.<br>
          2. I/We am/are the owner/joint-owners and am/are in
          possession of certain gold jewellery/ornaments ("Gold 
          Security") over which I/We will create a first and exclusive 
          charge by way of pledge in favour of the Bank by depositing 
          the same with the Bank in a sealed packet to be kept with the 
          Bank during the tenor of the Loan. I/We agree that the Bank 
          shall be entitled to open such sealed packet during the tenor 
          of the Loan and conduct investigation in connection with the 
          quality of Gold Security at my/our cost at any time. <br>
          3. The valuation of the Gold Security shall be done by an 
          independent assayer appointed by the Bank and the Loan 
          amount shall be determined by the Bank on the basis of the 
          value of the Gold Security as set out in the valuation report 
          supplied by the assayer. Such value shall be subject to the 
          market price of the Gold Security from time to time. The 
          amount of the Loan will be conveyed to me/us by and under 
          a sanction letter. I/We agree to abide by the terms and 
          conditions of the sanction letter.<br>
          4. Upon maturity, I/We shall either repay the Loan alongwith 
          interest, and such other dues as are payable by me/us to the 
          Bank ("Dues") or I/We may, at any time, request a 
          renewal/enhancement of the Loan which the Bank may 
          grant us at its sole and absolute discretion, subject to the 
          continuation of the pledge over the Gold Security in favour of 
          the Bank and provision of such other security and in such 
          form as the Bank may require and such variations in the rate 
          of interest as the Bank may prescribe as per its policies 
          prevailing at the time of such renewal/enhancement. <br>
          5. At the time of renewal of the Loan whether during or after the 
          expiry of the tenure of the Loan, I/We may request the Bank 
          to grant the renewal to me/us on a higher/lower loan-to-value ratio or any other term which the Bank may allow at its 
          sole and absolute discretion subject to payment of a such 
          fee as the Bank may prescribe.<br>
          6. The interest payable on the Loan shall be charged on 
          actual/reducing basis shall be computed on the basis of a 
          year of three hundred and sixty- five days. Subject to 
          prevailing policy of the Bank with regard to (a) the Loan 
          amount applied by us and sanctioned to us; and/or (b) loan-to-value, I/We may be required by the Bank to pay the 
          interest amount either on front-end basis or monthly basis. 
          The Bank may, at its sole discretion, shall also be entitled to 
          deduct, prior to the disbursement of any funds under the 
          Loan, from the total amount of funds made available to 
          me/us under the Loan, the total amount of interest payable 
          with respect to the Loan, including interest tax (if any).<br>
          7. I/We agree that the Loan may be prepaid, in whole or in part, 
          by me/us with the prior written consent of the Bank which 
          written consent, the Bank may grant on such conditions as it 
          may deem fit, including without limitation the payment of 
          prepayment or part payment charges as the case may be, as 
          stipulated by the Bank, which prepayment and/or part 
          payment charges may be applied and collected by the Bank 
          either at the time of maturity or closure or renewal, whichever 
          is earlier. Without prejudice to any other rights that the Bank 
          may have under law, in case of non-payment of any dues, I / 
          We shall be liable to pay additional interest/default interest at 
          such rate as may be prescribed by the Bank on the entire 
          Loan plus the interest due on that date. 
          8. I/We shall pay all costs, charges and expenses, including 
          stamp duty and legal costs on actual basis and other 
          charges and expenses which may be incurred in preparation 
          of any documents related and/or incidental to the Loan, as 
          also for the enforcement or attempted enforcement of the 
          security created. I/We authorise you to debit / credit my/our 
          account(s) kept with Bank towards any charges / servicing 
          the Gold Loan. <br>
          9. I/We hereby authorise Bank to carry out the RTGS / NEFT
          transaction as per detail mentioned in the application. I/We 
          understand that RTGS / NEFT request is subject to the RBI 
          regulations and guidelines governing the same. I/We further 
          acknowledge that Bank accepts no liability for any 
          consequences arising out of erroneous details provided by 
          me / us. <br>
          10. The Gold Security and any other security furnished by me/us 
          to the Bank will be released only upon payment in full of the 
          said Dues by me/us to the Bank. In case the value of Gold 
          Security falls lower than the required margin of the Bank as 
          applicable from time to time, without prejudice to the right to 
          declare an Event of Default under Clause 13 and/or to right 
          to sell the Gold Security and/or exercise any other right or 
          remedies available with the Bank hereunder or under law, 
          I/We shall, within 7 (seven) days of a notice from the Bank in 
          this regard, at the Bank's sole discretion, deposit with the 
          Bank, such additional security, as may be required. <br>
          11. I / We hereby represent(s) and warrant(s) that:
          (a) I / We declare that I / We am/are citizen(s) of India. 
          (b) I / We confirm(s) that my/our title to the gold 
          jewellery/ornaments deposited/to be deposited by 
          me/us as security is not defective/challenged by any 
          person in any manner nor is it spurious or of inferior 
          quality as it has been acquired by me/us from genuine 
          sources, is my/our bonafide property and no other 
          person has any claim, lien or charge against it.
          (c) I / We confirm(s) that the value of the Gold Security as 
          determined by the assayer and set out in the valuation 
          report is acceptable and final and binding on me/us.
          (d) I / We shall utilize the Loan solely for the purpose stated 
          in the application and will not be used for any speculative 
          or anti-social purpose.
          (e) I /We shall perform and is/are bound by all the 
          covenants/conditions set out herein, in the sanction 
          letter and any further conditions as may be prescribed by 
          the Bank.<br>
          12. The Bank may, without assigning any reason and upon 
          written notice mailed or delivered to me/us cancel in full or in 
          part the Loan and demand repayment thereof. Upon such 
          notice, the said Dues shall become forthwith due and 
          payable by me/us to the Bank.<br>
          
          13. The following events shall constitute events of default under 
          this Agreement ("Events of Default"), upon the occurrence of 
          which the said Dues shall become immediately due and 
          payable by me /us to the Bank and further enable the Bank to 
          enforce the Gold Security and any other security furnished 
          hereunder and sell the same:
          (a) Failure on my/our part to perform any of its obligations 
          hereunder or under the sanction letter or if any 
          circumstance or event occurs which adversely affects 
          my/our capacity to repay the Loan or any part thereof or 
          perform any of my/our obligations.
          (b) If any of the representations or statements or particulars 
          made by me/us in its application, or herein are found to 
          be false, misleading or incorrect.
          (c) If the Loan is not repaid on the date of maturity. 
          (d) In the event of non-servicing of interest by me /us on the 
          due date.
          (e) Upon detection of any systemic fraud in relation to the 
          quality of the gold by the Bank.
          (f) If the value of the said Gold Security falls lower than the 
          required margin of the Bank as applicable from time to 
          time, due to change in market price (whether actual or 
          reasonably anticipated) or any other reason or if there is 
          any deterioration or impairment of any security or any 
          part thereof, which causes the security in the judgment 
          of the Bank to become unsatisfactory in character or 
          value.
          (g) If it is discovered that there is any collusion between the 
          assayer and me/us resulting in a fraudulent and 
          erroneous valuation of the Gold Security or in case the 
          Bank has a reasonable suspicion in this regard. 
          (h) If any attachment, distress, execution or other process 
          against me /us or any of the security is enforced or levied 
          upon;
          (i) In the event of death, insolvency, failure in business, 
          commission of an act of bankruptcy of either of us 
          Borrower(s);
          (j) An attempt by me/us, without prior written consent of the 
          Bank, to create any charge, lien, mortgage or any other 
          encumbrance over the security.<br>
          14. I/We hereby confirm that the official of the Bank have read 
          and translated accurately the aforesaid terms and
          conditions in my/our vernacular language and I / We have 
          completely understood the same. <br>
          
          15. I/We agree that any notice (including notice of sale of Gold 
          Security) be addressed at my/our address mentioned in the 
          application form and may be sent via (a) Register AD; (b) 
          hand delivered; or (c) sent via email to the email address 
          mentioned in the application form; (d), short message 
          service (sms) to my/our mobile phone(s). Such service shall 
          be deemed to have been effected in case of delivery by hand 
          on the date on which it is delivered, in case of delivery by 
          Registered AD, post the expiry of the 4th day of such posting 
          and in the case of email, short message service (sms) or fax 
          on receiving the delivery report of the same. The time 
          required for delivery will be included in the notice period 
          provided in Clause 14 hereinabove and shall not be in 
          addition to the said notice period. <br>
          16. In addition to any general lien or similar right to which the 
          Bank as bankers may be entitled by law, the Bank may at any 
          time and without notice to me/us combine or consolidate all 
          or any of the my/our accounts with and liabilities to the Bank 
          and set off or transfer any sum or sums standing to the credit 
          of any one or more of such accounts in or towards 
          satisfaction of any of the my/our liabilities to the Bank on any 
          other account or in any other respect, whether such liabilities 
          be actual or contingent, primary or collateral and several or 
          joint.<br>
          17. The Bank shall have the right to stipulate any other and 
          further terms and conditions that it may deem fit at any time 
          prior to or after the grant of the Loan, which shall be binding 
          on me/us. All rights of the Bank stipulated herein shall be in 
          addition to the rights, powers and remedies available to the 
          Bank under law. The Bank reserves the right to retain the 
          photographs and documents submitted with this application 
          and will not return the same to the applicant. <br>
          18. All disputes arising out of and/or relating to this including any 
          collateral document shall be subject to the exclusive 
          jurisdiction of the Courts/Tribunals of the city in which the 
          branch of the Bank granting the Loan is situated.
          19. I/We understand that the sanction of this Loan is at the 
          discretion of the Bank and upon my executing necessary 
          security and other formalities as required by the Bank. I//We 
          authorise the Bank to conduct such credit checks as it 
          considers necessary in its sole discretion and also authorise 
          the Bank to release such or any other information in its 
          records for the purpose of credit of appraisal / sharing or for 
          any other purpose. I/ We further authorise the Bank to make 
          any enquiries with any other finance company / bank / 
          registered credit bureau regarding my credit history with 
          them and also authorise Bank to provide details of my credit 
          history to any other bank / finance company / registered 
          credit bureau. <br>
          20. The Bank shall have the right to make disclosure of 
          information relating to me/us to the Credit Information 
          Bu r e a u o f I n d i a ( C IBI L ) a n d / o r a n y o t h e r
          governmental/regulatory/statutory or private agency as 
          required under law from time to time. I / We hereby authorise 
          & give consent to the Bank to disclose, without notice to me, 
          information furnished by me in application form(s) / related 
          documents executed / to be executed in relation to the 
          facilities availed from the Bank, to the Bank's other 
          branches / Subsidiaries / affiliates / Credit bureau / Rating 
          Agencies, Service Providers, banks / financial institution, 
          governmental / regulatory authorities or third parties for KYC 
          information verification, credit risk analysis, or for other 
          related purposes that the Bank may deem fit. I/We waive the 
          privilege of privacy and privity of contract. <br>
          21. I/We confirm having received, read and understood the 
          terms and conditions applicable to this Loan and accept 
          hereby without notice the terms and conditions
          unconditionally and agree that this terms and conditions 
          may be changed by the Bank at any time and will be bound 
          by amended terms and conditions. <br>
       
          </h4>
          <br>
          <br>
          <label for="da1" style="padding-left: 20px;">Date</label>
          <input type="date" name="fdate" id="da1" style="width:350px;margin-left: 76px;"required><br><br>
          <label for="Place" style="padding-left: 20px;">Place</label>
          <input type="text" name="place" id="da2" style="width:350px;margin-left: 79px;" value="Pune"required><br><br>
         
          <label for="Signature" style="padding-left: 20px;">Signature</label>
          <input type="file" name="fsignature" id="da3" style="width:350px;margin-left: 50px;"required><br>
          
        </div>
      
      <br><br>
    
      <button type="button" data-previous>Previous</button>
       <button type="submit" name="btn">Submit</button>
      </div>
  </form>
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


</body>
<script type="text/javascript">    
$(document).ready(function(){     
        
$(".pan").change(function () {      
var inputvalues = $(this).val();      
  var regex = /[A-Z]{5}[0-9]{4}[A-Z]{1}$/;    
  if(!regex.test(inputvalues)){      
  $(".pan").val("");    
  alert("invalid PAN no");    
  return regex.test(inputvalues);    
  }    
});      
    
});    
</script>  
</html>