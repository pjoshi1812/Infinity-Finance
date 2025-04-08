<?php
require("connection.php"); 
    if(isset($_POST['btn']))
    {
      $prefix=$_POST['prefix'];
      $fullname=$_POST['fullname'];
      $mothername=$_POST['mothername'];
      $fathername=$_POST['fathername'];
      $flatno=$_POST['flatno'];
      $buildingname=$_POST['buildingname'];
      $streetname=$_POST['streetname'];
      $city=$_POST['city'];
      $districtname=$_POST['districtname'];
      $pincode=$_POST['pincode'];
      $phoneno=$_POST['phoneno'];
      $email=$_POST['email'];
      $pancardno=$_POST['pancardno'];
      $aadhar=$_POST['aadhar'];
      $passportno=$_POST['passportno'];
      $exampasseda=$_POST['exampasseda'];
      $universitynamea=$_POST['universitynamea'];
      $mediuma=$_POST['mediuma'];
      $yearofpassinga=$_POST['yearofpassinga'];
      $attempta=$_POST['attempta'];
      $aggregatea=$_POST['aggregatea'];
      $percentagea=$_POST['percentagea'];
      $exampassedb=$_POST['exampassedb'];
      $universitynameb=$_POST['universitynameb'];
      $mediumb=$_POST['mediumb'];
      $yearofpassingb=$_POST['yearofpassingb'];
      $attemptb=$_POST['attemptb'];
      $aggregateb=$_POST['aggregateb'];
      $percentageb=$_POST['percentageb'];
      $exampassedc=$_POST['exampassedc'];
      $universitynamec=$_POST['universitynamec'];
      $mediumc=$_POST['mediumc'];
      $yearofpassingc=$_POST['yearofpassingc'];
      $attemptc=$_POST['attemptc'];
      $aggregatec=$_POST['aggregatec'];
      $percentagec=$_POST['percentagec'];
      $collegenameaddr=$_POST['collegenameaddr'];
      $uniname=$_POST['uniname'];
      $accholder=$_POST['accholder'];
      $branch=$_POST['branch'];
      $accountnumber=$_POST['accountnumber'];
      $ifsccode=$_POST['ifsccode'];
      $micrcode=$_POST['micrcode'];
      $accountopeningdate=$_POST['accountopeningdate'];

      $photo=$_FILES["photo"]["name"];
      $tphoto=$_FILES["photo"]["tmp_name"];
      $fp="../educationloandocs/".$photo;

      $aadharphoto=$_FILES["aadharphoto"]["name"];
      $tadhar=$_FILES["aadharphoto"]["tmp_name"];
      $fa="../educationloandocs/".$aadharphoto;

      $addmissionletter=$_FILES["addmissionletter"]["name"];
      $taddmissionletter=$_FILES["aadharphoto"]["tmp_name"];
      $faddmissionletter="../educationloandocs/".$addmissionletter;

      $ssc=$_FILES["ssc"]["name"];
      $tssc=$_FILES["ssc"]["tmp_name"];
      $fssc="../educationloandocs/".$ssc;

      $hsc=$_FILES["hsc"]["name"];
      $thsc=$_FILES["hsc"]["tmp_name"];
      $fhsc="../educationloandocs/".$hsc;

      $graduation=$_FILES["graduation"]["name"];
      $tgraduation=$_FILES["graduation"]["tmp_name"];
      $fgraduation="../educationloandocs/".$graduation;

      $ageproof=$_FILES["ageproof"]["name"];
      $tageproof=$_FILES["ageproof"]["tmp_name"];
      $fageproof="../educationloandocs/".$ageproof;

      $signproof=$_FILES["signproof"]["name"];
      $tsignproof=$_FILES["signproof"]["tmp_name"];
      $fsignproof="../educationloandocs/".$signproof;

      $residenceproof=$_FILES["residenceproof"]["name"];
      $tresidenceproof=$_FILES["residenceproof"]["tmp_name"];
      $fresidenceproof="../educationloandocs/".$residenceproof;

      $identityproof=$_FILES["identityproof"]["name"];
      $tidentityproof=$_FILES["identityproof"]["tmp_name"];
      $fidentityproof="../educationloandocs/".$identityproof;

      $fsignature=$_FILES["fsignature"]["name"];
      $tfsignature=$_FILES["fsignature"]["tmp_name"];
      $ffsignature="../img/".$fsignature;
      // $photo=$_POST['photo'];
      // $aadharphoto=$_POST['aadharphoto'];
      // $addmissionletter=$_POST['addmissionletter'];
      // $ssc=$_POST['ssc'];
      // $hsc=$_POST['hsc'];
      // $graduation=$_POST['graduation'];
      // $ageproof=$_POST['ageproof'];
      // $signproof=$_POST['signproof'];
      // $residenceproof=$_POST['residenceproof'];
      // $identityproof=$_POST['identityproof'];
      $coursefee=$_POST['coursefee'];
      $feepersemester=$_POST['feepersemester'];
      $noofsemester=$_POST['noofsemester'];
      $accomodationfee=$_POST['accomodationfee'];
      $expense=$_POST['expense'];
      $travelexpense=$_POST['travelexpense'];
      $cautiondeposit=$_POST['cautiondeposit'];
      $total=$_POST['total'];
      $dd=$_POST['dd'];
      $neft=$_POST['neft'];
      $universityaccountnumber=$_POST['universityaccountnumber'];
     $fdate=$_POST['fdate'];
      $place=$_POST['place'];
      //$fsignature=$_POST['fsignature'];

     

$sql="INSERT INTO `eloan` (`prefix`, `fullname`, `mothername`, `fathername`, `flatno`, `buildingname`, `streetname`, `city`, `districtname`, `pincode`,  `phoneno`, `email`, `pancardno`, `aadhar`,  `passportno`, `exampasseda`, `universitynamea`, `mediuma`, `yearofpassinga`, `attempta`, `aggregatea`, `percentagea`, `exampassedb`, `universitynameb`, `mediumb`, `yearofpassingb`, `attemptb`, `aggregateb`, `percentageb`, `exampassedc`, `universitynamec`, `mediumc`, `yearofpassingc`, `attemptc`, `aggregatec`, `percentagec`, `collegenameaddr`, `uniname`, `accholder`, `branch`, `accountnumber`, `ifsccode`, `micrcode`, `accountopeningdate`, `photo`, `aadharphoto`, `addmissionletter`, `ssc`, `hsc`, `graduation`, `ageproof`, `signproof`, `residenceproof`, `identityproof`, `coursefee`, `feepersemester`, `noofsemester`, `accomodationfee`, `expense`, `travelexpense`, `cautiondeposit`, `total`, `dd`, `neft`, `universityaccountnumber`, `fdate`, `place`, `fsignature`) 
VALUES ('$prefix', '$fullname', '$mothername', '$fathername', '$flatno', '$buildingname',  '$streetname', '$city', '$districtname', '$pincode',  '$phoneno', '$email', '$pancardno', '$aadhar', '$passportno', '$exampasseda', '$universitynamea', '$mediuma', '$yearofpassinga', '$attempta', '$aggregatea', '$percentagea', '$exampassedb', '$universitynameb', '$mediumb', '$yearofpassingb', '$attemptb', '$aggregateb', '$percentageb', '$exampassedc', '$universitynamec', '$mediumc', '$yearofpassingc', '$attemptc', '$aggregatec', '$percentagec', '$collegenameaddr', '$uniname', '$accholder', '$branch', '$accountnumber', '$ifsccode', '$micrcode', '$accountopeningdate', '$photo', '$aadharphoto', '$addmissionletter', '$ssc', '$hsc', '$graduation', '$ageproof', '$signproof', '$residenceproof', '$identityproof', '$coursefee', '$feepersemester', '$noofsemester', '$accomodationfee', '$expense', '$travelexpense', '$cautiondeposit', '$total', '$dd', '$neft', '$universityaccountnumber', '$fdate', '$place', '$fsignature')";


       if($con->query($sql)==1)
       {
        move_uploaded_file($tphoto, $fp);
        move_uploaded_file($tadhar, $fa);
        move_uploaded_file($taddmissionletter, $faddmissionletter);
        move_uploaded_file($tssc, $fssc);
        move_uploaded_file($thsc, $fhsc);
        move_uploaded_file($tgraduation, $fgraduation);
        move_uploaded_file($tphoto, $fp);
        move_uploaded_file($tadhar, $fa);
        move_uploaded_file($taddmissionletter, $faddmissionletter);
        move_uploaded_file($tageproof, $fageproof);
        move_uploaded_file($tsignproof, $fsignproof);
        
        move_uploaded_file($tresidenceproof, $fresidenceproof);
        move_uploaded_file($tidentityproof, $fidentityproof);
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
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <!-- <link rel="stylesheet" href="index.css"> -->
  <link rel="stylesheet" href="hloan.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

  <script src="eduform.js" defer></script>
  <style>
      table , tr, th , td, .i{
    margin:5px;
    padding:5px;
    text-align: center;
  }
  </style>
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
  <form data-multi-step class="multi-step-form" method="post" enctype="multipart/form-data">
    <div class="card" data-step >
     
      <div class="form-group" style ="display:inline">
        <h3 style="margin-left: 600px;font-weight: bolder;font-size: xx-large;">PERSONAL DETAILS</h3>
      <label for ="name" >Enter name</label>
      <select name="prefix" id="" style="width:60px;padding:10px;margin-left: 80px;" required >
      <option value ="Mr">Mr</option>
      <option value="Ms">Ms</option>
      <option value="Mrs">Mrs</option>
      
    </select>
     <input type="text" name="fullname" id="" placeholder="Full name" style="width:400px;"required><br>
       <label for ="name" >Mother's name</label>
       <input type="text" name="mothername" id="" placeholder="Full name" style="width:413px; margin-left: 50px;"required>
       <label for ="name" >Fathers's name</label>
       <input type="text" name="fathername" id="" placeholder="Full name" style="width:400px;"required><br>
       <label for ="address" >Address</label>
       <input type="text" name="flatno" id="" placeholder="Flat no" style="width:50px;margin-left: 110px;padding: 10px;"required>
       <input type="text" name="buildingname" id="" placeholder="Building/Premises name" style="width:320px;padding: 10px;"required>
       <input type="text" name="streetname" id="" placeholder="Street/Road name" style="width:400px;padding: 10px;"required>
       <input type="text" name="city" id="" placeholder="Town/City/Village Name" style="width:400px;margin-left: 220px;padding: 10px;"required>
      
       <input type="text" name="districtname" id="" placeholder="District" style="width:300px;padding: 10px;"required>
       <input type="text" name="pincode" id="" placeholder="Pincode" style="width:100px;padding: 10px;"required><br>
      
       <label for="phno">Phone Number</label>
      <input type="number" name="phoneno" id="" style="margin-left:50px; "placeholder ="9077832345"  minlength="10" maxlength="10" required><br>
      <label for ="address"  >Email</label>
      <input type="text" name="email" id="" placeholder="john12@gmail.com" style="margin-left: 130px;"required><br>
      <label for ="address" >Pan Card No.</label>
      <input type="text" name="pancardno" id="" placeholder="AVFSW2501F" style="width:300px;padding: 10px;margin-left: 60px;"  minlength="10" maxlength="10"required>
      <label for ="aadhar" >UID/Aadhar card no.</label>
      <input type="number" name="aadhar" id="" placeholder="1234 4567 8765" style="width:300px;margin-left: 1px;padding: 10px;" minlength="12" maxlength="12" required><br>
   
      <label for ="aadhar" style="padding-left: 10px;"> Passport no </label>
      <input type="text" name="passportno" id="" placeholder="J1234567" style="width:350px;margin-left: 65px;padding: 10px; " minlength="8" maxlength="8"><br>
       <label for ="aadhar" > Passport expiry date </label>
        <input type="date" name="passportexpiry" id="" placeholder="11/12/2023" style="width:350px;margin-left: 1px;padding: 10px;">


      </div>
      <br><br>
      <button type="button" data-next>Save & Next</button>
    </div>
    <div class="card" data-step >
      
      <div class="form-group" style="display: inline;">
        <table border="2px"  >
          <tr>
            <td >examination passed</td>
            <td>Institution & University</td>
            <td>Medium of Instruction</td>
            <td>Year of Passing</td>
            <td>Whether passed in first attempt</td>
            <td>Aggregate marks First attempt</td>
            <td>Percentage of marks</td>
            
          </tr>
          <tr>
            
            <td> <input type="text" name="exampasseda" id=""  class="i"></td>
            <td> <input type="text" name="universitynamea" id="" class="i" ></td>
            <td> <input type="text" name="mediuma" id=""class="i" ></td>
            <td> <input type="number" name="yearofpassinga" id="" class="i" ></td>
            <td> <input type="text" name="attempta" id=""  class="i"></td>
            <td> <input type="number" name="aggregatea" id=""  class="i"></td>
            <td> <input type="number" name="percentagea" id=""  class="i"></td>
            

             
          </tr>
          <tr>
            
            <td> <input type="text" name="exampassedb" id="" class="i" ></td>
            <td> <input type="text" name="universitynameb" id=""  class="i"></td>
            <td> <input type="text" name="mediumb" id=""  class="i"></td>
            <td> <input type="number" name="yearofpassingb" id="" class="i" ></td>
            <td> <input type="text" name="attemptb" id="" class="i"></td>
            <td> <input type="number" name="aggregateb" id=""class="i" ></td>
            <td> <input type="number" name="percentageb" id="" class="i" ></td>
            

             
          </tr>
          <tr>
            
            <td> <input type="text" name="exampassedc" id="" class="i" ></td>
            <td> <input type="text" name="universitynamec" id=""  class="i"></td>
            <td> <input type="text" name="mediumc" id="" class="i" ></td>
            <td> <input type="number" name="yearofpassingc" id="" class="i" ></td>
            <td> <input type="text" name="attemptc" id=""class="i" ></td>
            <td> <input type="number" name="aggregatec" id=""  class="i"></td>
            <td> <input type="number" name="percentagec" id=""  class="i"></td>
            
            

             
          </tr>
        </table>
       <br>
        <label for="address">Name and Address of College / Institution in which the Student intends to join</label>
        <textarea id="te" name="collegenameaddr" rows="4" cols="14" placeholder="MES Garware College of Commerce,Karve Road,Pune"required></textarea>
       <br><br>
         <label for="uni">Name of University</label>
         <input type="text" name="uniname" id="uni" placeholder="Building/Premises name" style="width:320px;"required>
         </div><br><br>
      <div class="form-group" style="display: inline;">
        <h3 style="margin-left: 600px;font-weight: bolder;font-size: xx-large;">BANK  DETAILS</h3>
        <label for="acc">Name of account holder</label>
        <input type="text" name="accholder" id="acc" style="width:350px;margin-left: 0px;"required>
        <label for="br">Branch</label>
        <input type="text" name="branch" id="br" style="width:350px;margin-left: 125px;"required><br>
        <label for="no">Account no</label>
        <input type="number" name="accountnumber" id="no" style="width:350px;margin-left: 104px;"required>
        <label for="if" style="padding-left: 24px;">IFSC Code</label>
        <input type="text" name="ifsccode" id="if" style="width:350px;margin-left: 95px;"  minlength="11" maxlength="11" required><br>
        <label for="mi">MICR Code</label>
        <input type="number" name="micrcode" id="mi" style="width:350px;margin-left: 96px;" minlength="9" maxlength="9"required>
        <label for="da" style="padding-left: 20px;">Account opening date</label>
        <input type="date" name="accountopeningdate" id="da" style="width:350px;margin-right: 180px;"required><br><br>

        <h3 style="margin-left: 600px;font-weight: bolder;font-size: xx-large;">DOCUMENTS</h3> 
          <label for="doc">Applicants Passport Size Photo</label>
        <input type="file" name="photo" id="doc" style="width:350px;margin-left: 0px;"required> 
        <label for="aadharphoto">Aadhar Card</label>
        <input type="file" name="aadharphoto" id="doc1" style="width:350px;margin-left: 100px;"required>          <br><br>
        <label for="doc6">Institute Addmission Letter</label>
        <input type="file" name="addmissionletter" id="doc6" style="width:350px;margin-left: 30px;"required> 
        <label for="doc3">SSC Marksheet</label>
        <input type="file" name="ssc" id="doc3" style="width:350px;margin-left: 85px;"required> <br><br>
         <label for="doc4">HSC Marksheet</label>
        <input type="file" name="hsc" id="doc4" style="width:350px;margin-left: 130px;"required> 
         <label for="doc5" style="margin-left: 21px;">Graduation Marksheet</label>
        <input type="file" name="graduation" id="doc5" style="width:350px;margin-left: 10px;"> <br><br>
        <label for="doc7">Age Proof</label>
        <input type="file" name="ageproof" id="doc7" style="width:350px;margin-left: 180px;"required>  
        <label for="doc8">Signature Proof</label>
        <input type="file" name="signproof" id="doc8" style="width:350px;margin-left: 85px;"required> <br><br> 
        <label for="doc9">Residence Proof</label>
        <input type="file" name="residenceproof" id="doc9" style="width:350px;margin-left: 130px;"required>  
        <label for="doc10">Identity Proof</label>
        <input type="file" name="identityproof" id="doc10" style="width:350px;margin-left: 100px;"required> 

       
      </div>
      <br><br>
      <button type="button" data-previous>Previous</button>
      <button type="button" data-next>Save & Next</button>
    </div>
    <div class="card" data-step style="height: 1300px;">
    
      <centre><div class="form-group" style="display: inline;">
        <h3 style="margin-left: 600px;font-weight: bolder;font-size: xx-large;">LOAN DETAILS</h3><br><br>
        <b><h3>Details of the fees and charges paid to the institute</b></h3><br>
        
          <label for="no">1.Total course fees</label><span class="material-symbols-outlined"style="padding-left:240px;" > currency_rupee</span>
           <input type="number" name="coursefee" id="no" style="width:350px;margin-left: 10px; "required>
        <br>
        
          <label for="fee">a.Course Fee Per Semester</label><span class="material-symbols-outlined"style="padding-left:170px;" > currency_rupee</span>
        <input type="number" name="feepersemester" id="fee"  style="width:350px;margin-left: 5px;"required><br>
       <label for="fee">b. No. of Semester</label><span class="material-symbols-outlined"style="padding-left:240px;" > currency_rupee</span>
          <input type="number" name="noofsemester" id="fee"  style="width:350px;margin-left: 16px;"required>
          <br>
        
        
          <label for="no">2.Accomodation Fees</label><span class="material-symbols-outlined"style="padding-left:215px;" > currency_rupee</span>
            <input type="number"  name="accomodationfee" id="no" style="width:350px;margin-left: 13px;"required>
        <br>
          
          
         <label for="no">Expenses for purchase of books / equipments</label><span class="material-symbols-outlined"style="padding-left:10px;" > currency_rupee</span>
             <input type="number"  name="expense" id="no" style="width:350px;margin-left : 10px;"required>
        <br>
       
        <label for="no">Travelling Expenses</label><span class="material-symbols-outlined"style="padding-left:225px;" > currency_rupee</span>
     <input type="number"  name="travelexpense" id="no" style="width:350px;margin-left: 9px;"required><br>
     <label for="no">Caution Deposit /Building Fund</label><span class="material-symbols-outlined"style="padding-left:125px;" > currency_rupee</span>
     <input type="number"  name="cautiondeposit" id="no" style="width:350px;margin-left: 11px;"required>
    <br>
     <br> 
     <label for="no" style="margin-left: 150px;"><b>TOTAL<b></b></label><span class="material-symbols-outlined"style="padding-left:187px;" > currency_rupee</span>
    <input type="number"  name="total" id="no" style="width:350px;margin-left: 14px;padding: 11px;">
    <br>
       <br>
       <br>      
       <h3 style="margin-left: 600px;font-weight: bolder;font-size: xx-large;">Mode Of Disbursement</h3><br><br>
       <label for="nos" style="font-weight: bold;font-size: larger;">DD in favour old payable at for Amount RS. </label><span class="material-symbols-outlined"style="padding-left:78px;" > currency_rupee</span>
       <input type="number" name="dd" id="nos" style="width:350px;margin-left: 50px;padding:16px;"required><br><br><br>
       <label for="no" style="font-weight: bold;font-size: larger;">T.T Swift Code/RTGS/NEFT</label><span class="material-symbols-outlined" style="padding-left:200px;"> currency_rupee</span>
       <input type="text"  name="neft" id="no" style="width:350px;margin-left: 50px;padding:16px;"required>
      <br><br><br>
      <label for="universityaccountnumber" style="font-weight: bold;font-size: larger;">University Account Number</label>
      <input type="number"  name="universityaccountnumber" id="no" style="width:350px;padding:16px;margin-left: 49px;"required>
     <br> <br><br>    

     <h3 style="margin-left: 600px;font-weight: bolder;font-size: xx-large;">Addional Information</h3><br><br>
    <h4><b>*</b>Payment: No cash/bearer cheque has been collected from you up-front towards processing the loan application. Details with respect to the EMI 
presentation dates, number of EMIs and amount will be communicated separately through a welcome letter post disbursement of loan. No 
discount/free gift or any other commitment is given whatsoever which is not documented in the loan agreement by HDFC Bank or any of its authorized 
representative(s). The loan amount and disbursal is at the sole discretion of Infinity Finance Bank and no commitment has been given regarding the same. Terms and 
conditions of the loan agreement shall be provided on request. <br>
<b>*</b>Application processing and loan disbursement: Should take around 17 working days from the time of completion and submission of all relevant loan documents 
as per Bank's criteria. Stamping cost, Documentation Charge applicable as per the State 
Stamp Duty Act would be deducted from the disbursal amount. Charges which are in nature of fees are EXCLUSIVE of service tax. Service tax and other 
government levies, as applicable, would be charged additionally.</h4>
      </div>
     <br><br>
      <button type="button" data-previous>Previous</button>
      <button type="button" data-next>Save & Next</button>
    
    </div>
    <div class="card" data-step style="height: 1300px;">
     
      <div class="form-group" style="display: inline;">
        <h3 style="margin-left: 600px;font-weight: bolder;font-size: xx-large;">Declaration</h3>
        <h4 style="margin-left: 100px;margin-right: 100px;">I/We here by apply for an educational loan from Infinity Finance Bank Limited. To the extent indicated in the loan application form. 
        
          1)I/We declare that the foregoing particulars and information furnished in this agreement/applicationare true, complete and they 
          along with the applicant’s future income post completion of the course, co-applicant's / guarantor income details shall form the 
          basis of any loan Infinity Finance Bank may decide to sanction. I agree that the Bank shall have the sole discretion to reject the application 
          or reduce the loan amount without assigning any reason there of. I / We confirm that I / We have no insolvency proceedings 
          against me/us nor have I/we been adjudicated insolvent.<br>
          2)I/We agree that Infinity Finance Bankk may at its discretion conduct enquiries in respect of the application. I / We shall provide any further 
          information that the Bank may require in the future.Infinity Finance Bank will be at liberty to take such action, as it may deem necessary if 
          the statement / information provided by me / us is found to be untrue/incorrect.<br>
          3)I/ We further agree that my/our loan transactions are governed by the rules of Infinity Finance Bank Limited that may be in force from time 
          to time and shall abide by the terms and conditions governing the grant of loan under this agreement.<br>
         4) I/We further agree that the loan shall be disbursed in tranches semester wise/year wise and that Infinity Finance Bank shall disburse the 
          loan amount directly to my/our educational institute and I / We shall be liable to Infinity Finance Bankfor the repayment.<br>
         5) I/We further agree to appraise Infinity Finance Bank, details about my academic progress, details of aid/financial assistance received if 
          any during the course period, completion ofcourse and job placement.<br>
         6) I/We shall advise the bank in writing of any change in my/our Residential or Employment address. 
          Please credit all sums received by you in either or all the names of this account.<br>
          7)I/We confirm that the funds shall be used for the stated purpose and will not be used for speculative or antisocial purpose.<br>
         8) I/We certify that we are citizens of India. I / we certify that the information furnished above is true and accurate.
          I/We authorize Infinity Finance BankLtd. to make any enquiries regarding my/our application. <br>
         9) I/We authorize Infinity Finance BankLtd. to make any enquiries with any other finance co. / bank / registered credit bureau regarding 
          my/our credit history with them and also authorize Infinity Finance Bank Ltd. to provide details of my/our credit history to any other bank / 
          finance co. / registered credit bureau.<br>
         10) In case my / our application is rejected, I / We reserve no right to appeal and accept that no reason could be given for rejection.
          I/We confirm having received, read and understood, the terms and condition applicable to this loan and accept hereby without 
          notice, the terms and conditions unconditionally and agree that these terms and conditions may be changed by Infinity Finance Bank Ltd., 
          at any time and will be bound by the amended terms and conditions.<br>
          11)Infinity Finance Bank Ltd. reserves the rights to retain the photo graphs and documents submitted within this application and will not 
          return the same to the applicant. There are no pending litigations against me / us by any other financer / bank.<br>
          I/We confirm that I/We do not have any existing customer ID or customer ID apart from the one mentioned in the application 
          form, and in case found otherwise, Bank reserves the right to consolidate the customer ID’s under a single customer ID as it may 
          decide, without any prior notice to me/us.<br>
          12)I / We consent / do not consent to receive information / services etc. for Marketing purposes through Telephone / 
          Mobile / SMS / Emails by the Bank / its agent. I / We agree and acknowledge that only direct telephone numbers (not board / 
          general telephone numbers of offices / corporates / employers) will be accepted for registration of "Do Not Call". I / We am / are 
          aware that post registration, I / We may receive a call from the Bank to verify the correctness of the request for registration, I / 
          We confirm that I / We have read and understood the Declaration, and that all the details provided on the form are true and 
          correct.<br>
          13)I/We have not applied to any other Bank for an Education Loan.<br>
         14) I/We have read and verified the entire contents of the aforesaid Loan Application Form including the information, the Most Important 
          Terms and Conditions , the Declarations being Part I to Part VII and I/We hereby irrevocably represent, confirm and declare that all the 
          information given thereunder are completely true and correct and further agree,acknowledge,accept and confirm the same.<br>
          </h4>
          <br>
          <br>
          <label for="da1" style="padding-left: 20px;">Date</label>
          <input type="date" name="fdate" id="da1" style="width:350px;margin-left: 96px;"required><br>
          <label for="da2" style="padding-left: 20px;">Place</label>
          <input type="text" name="place" id="da2" style="width:350px;margin-left: 96px;"required><br>
         
          <label for="da3" style="padding-left: 20px;">Signature</label>
          <input type="file" name="fsignature" id="da3" style="width:350px;margin-left: 50px;"required>
          
     
      </div>
      <br><br>
      <button type="button" data-previous>Previous</button>
      <button type="submit" data name="btn">Submit</button>
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
</html>