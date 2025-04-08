<?php
    require('connection.php');
    
    if(isset($_POST['btn']))
    {
        
      $title=$_POST['title'];
      $fullname=$_POST['fullname'];
      $fathername=$_POST['fathername'];
      $dob=$_POST['dob'];
      $gender=$_POST['gender'];
      $status=$_POST['status'];
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
      $yearsatcurrentcity=$_POST['yearsatcurrentcity'];
      $yearsatcurrentresi=$_POST['yearsatcurrentresi'];
      $occupation=$_POST['occupation'];
      $professional=$_POST['professional'];
      $typeofcomp=$_POST['typeofcomp'];
      $nature=$_POST['nature'];
      $prefix=$_POST['prefix'];
      $typeofindustry=$_POST['typeofindustry'];
      $designation=$_POST['designation'];
      $tel=$_POST['tel'];
      $email1=$_POST['email1'];
      $name1=$_POST['name1'];
      $panno1=$_POST['panno1'];
      $contactdetails1=$_POST['contactdetails1'];
      $dob1=$_POST['dob1'];
      $edubackground1=$_POST['edubackground1'];
      $profitsharing1=$_POST['profitsharing1'];
      $totalexperience1=$_POST['totalexperience1'];
      $name2=$_POST['name2'];
      $panno2=$_POST['panno2'];
      $contactdetails2=$_POST['contactdetails2'];
      $dob2=$_POST['dob2'];
      $edubackground2=$_POST['edubackground2'];
      $profitsharing2=$_POST['profitsharing2'];
      $totalexperience2=$_POST['totalexperience2'];
      $name3=$_POST['name3'];
      $panno3=$_POST['panno3'];
      $contactdetail3=$_POST['contactdetail3'];
      $dob3=$_POST['dob3'];
      $edubackground3=$_POST['edubackground3'];
      $profitsharing3=$_POST['profitsharing3'];
      $totalexperience3=$_POST['totalexperience3'];
      $accholder=$_POST['accholder'];
      $branch=$_POST['branch'];
      $accountnumber=$_POST['accountnumber'];
      $ifsccode=$_POST['ifsccode'];
      $micrcode=$_POST['micrcode'];
      $accountopeningdate=$_POST['accountopeningdate'];


      $photo=$_FILES["photo"]["name"];
      $tphoto=$_FILES["photo"]["tmp_name"];
      $fphoto="../businessloandocs/".$photo;

      $addharphoto=$_FILES["addharphoto"]["name"];
      $taddharphoto=$_FILES["addharphoto"]["tmp_name"];
      $faddharphoto="../businessloandocs/".$addharphoto;

      $proofofcontinuity=$_FILES["proofofcontinuity"]["name"];
      $tproofofcontinuity=$_FILES["proofofcontinuity"]["tmp_name"];
      $fproofofcontinuity="../businessloandocs/".$proofofcontinuity;

      $proofofoffice=$_FILES["proofofoffice"]["name"];
      $tproofofoffice=$_FILES["proofofoffice"]["tmp_name"];
      $fproofofoffice="../businessloandocs/".$proofofoffice;

      $proofofqualification=$_FILES["proofofqualification"]["name"];
      $tproofofqualification=$_FILES["proofofqualification"]["tmp_name"];
      $fproofofqualification="../businessloandocs/".$proofofqualification;

      $loanagreement=$_FILES["loanagreement"]["name"];
      $tloanagreement=$_FILES["loanagreement"]["tmp_name"];
      $floanagreement="../businessloandocs/".$loanagreement;

      $proofofturnover=$_FILES["proofofturnover"]["name"];
      $tproofofturnover=$_FILES["proofofturnover"]["tmp_name"];
      $fproofofturnover="../businessloandocs/".$proofofturnover;

      $signproof=$_FILES["signproof"]["name"];
      $tsignproof=$_FILES["signproof"]["tmp_name"];
      $fsignproof="../businessloandocs/".$signproof;

      $residenceproof=$_FILES["residenceproof"]["name"];
      $tresidenceproof=$_FILES["residenceproof"]["tmp_name"];
      $fresidenceproof="../businessloandocs/".$residenceproof;

      $identityproof=$_FILES["identityproof"]["name"];
      $tidentityproof=$_FILES["identityproof"]["tmp_name"];
      $fidentityproof="../businessloandocs/".$identityproof;

      $postdatedcheque=$_FILES["postdatedcheque"]["name"];
      $tpostdatedcheque=$_FILES["postdatedcheque"]["tmp_name"];
      $fpostdatedcheque="../businessloandocs/".$postdatedcheque;

      $acstatement=$_FILES["acstatement"]["name"];
      $tacstatement=$_FILES["acstatement"]["tmp_name"];
      $facstatement="../businessloandocs/".$acstatement;

      $ecsmandate=$_FILES["ecsmandate"]["name"];
      $tecsmandate=$_FILES["ecsmandate"]["tmp_name"];
      $fecsmandate="../businessloandocs/".$ecsmandate;

      $finalsign=$_FILES["finalsign"]["name"];
      $tfinalsign=$_FILES["finalsign"]["tmp_name"];
      $ffinalsign="../businessloandocs/".$finalsign;
      

      $intrestrate=$_POST['intrestrate'];
      $processingcharges=$_POST['processingcharges'];
      $detailsofsecurity=$_POST['detailsofsecurity'];
     $finaldate=$_POST['finaldate'];
      $finalplace=$_POST['finalplace'];
      


      $sql="INSERT INTO  `bloan`( `title`, `fullname`, `fathername`, `dob`, `gender`, `status`, `flatno`, `buildingname`, `streetname`, `city`, `districtname`, `pincode`, `phoneno`, `email`, `pancardno`, `aadhar`, `passportno`, `yearsatcurrentcity`, `yearsatcurrentresi`, `occupation`, 
     `professional`, `typeofcomp`, `nature`, `prefix`, `typeofindustry`, `designation`, `tel`, `email1`, `name1`, `panno1`, `contactdetails1`, `dob1`, `edubackground1`, `profitsharing1`, `totalexperience1`, `name2`, `panno2`, `contactdetails2`, `dob2`, `edubackground2`, `profitsharing2`, `totalexperience2`, `name3`, `panno3`, `contactdetail3`, `dob3`, `edubackground3`, `profitsharing3`, `totalexperience3`,
      `accholder`, `branch`, `accountnumber`, `ifsccode`, `micrcode`, `accountopeningdate`, `photo`, `addharphoto`, `proofofcontinuity`, `proofofoffice`, `proofofqualification`, `loanagreement`, `proofofturnover`, `signproof`, `residenceproof`, 
      `identityproof`, `postdatedcheque`, `acstatement`, `ecsmandate`, `intrestrate`, `processingcharges`, `detailsofsecurity`, `finaldate`, `finalplace`, `finalsign`,`currenttime`)
      VALUES ('$title','$fullname','$fathername','$dob','$gender','$status','$flatno','$buildingname','$streetname','$city','$districtname','$pincode','$phoneno','$email','$pancardno','$aadhar','$passportno','$yearsatcurrentcity','$yearsatcurrentresi','$occupation',
       '$professional','$typeofcomp','$nature','$prefix','$typeofindustry','$designation','$tel','$email1','$name1','$panno1','$contactdetails1','$dob1','$edubackground1','$profitsharing1','$totalexperience1','$name2','$panno2','$contactdetails2','$dob2','$edubackground2','$profitsharing2','$totalexperience2','$name3','$panno3','$contactdetail3','$dob3','$edubackground3','$profitsharing3','$totalexperience3',
       '$accholder','$branch','$accountnumber','$ifsccode','$micrcode','$accountopeningdate','$photo','$addharphoto','$proofofcontinuity','$proofofoffice','$proofofqualification','$loanagreement','$proofofturnover','$signproof','$residenceproof',
     '$identityproof','$postdatedcheque','$acstatement','$ecsmandate','$intrestrate','$processingcharges','$detailsofsecurity','$finaldate','$finalplace','$finalsign', current_timestamp())";
       
       if($con->query($sql)==1)
      {
        move_uploaded_file($tphoto, $fphoto);
        move_uploaded_file($taddharphoto, $faddharphoto);
        move_uploaded_file($tproofofcontinuity, $fproofofcontinuity);
        move_uploaded_file($tproofofoffice, $fproofofoffice);
        move_uploaded_file($tproofofqualification, $fproofofqualification);
        move_uploaded_file($tloanagreement, $floanagreement);
        move_uploaded_file($tproofofturnover, $fproofofturnover);
        move_uploaded_file($tsignproof, $fsignproof);
        move_uploaded_file($tresidenceproof, $fresidenceproof);
        move_uploaded_file($tidentityproof, $fidentityproof);
        move_uploaded_file($tpostdatedcheque, $fpostdatedcheque);
        move_uploaded_file($tacstatement, $facstatement);
        move_uploaded_file($tecsmandate, $fecsmandate);
        move_uploaded_file($tfinalsign, $ffinalsign);


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
  <link rel="stylesheet" href="bloan.css">
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
  <form data-multi-step class="multi-step-form" method="post" enctype="multipart/form-data">
    <div class="card" data-step >
      <div class="form-group" style ="display:inline">
         <h3 style="margin-left: 600px;font-weight: bolder;font-size: xx-large;">PERSONAL DETAILS</h3>
        <!-- <h3 class="step-title">Personal Information</h3> -->

        <!-- <label for ="title" >Title</label> -->
        <label for ="name" >Applicants Name</label> 
        <select name="title" id="" style="width:100px;padding:10px;margin-left: 70px;" required>
          <option value ="Mr">Mr</option>
          <option value="Ms">Ms</option>
          <option value="Mrs">Mrs</option>
        </select>
    
        <!-- <label for ="name" >Applicants Name</label> -->
        <input type="text" name="fullname" id="" style="width:700px;margin-left: 1px;"required><br>
        <label for ="name" >Fathers/Husband's Name</label>
        <input type="text" name="fathername" id="" style="width:700px; margin-left: 0px;"required><br>
        <label for ="address" >Date of Birth</label>
        <input type="date" name="dob" id="" placeholder="DD/MM/YYYY" style="width:250px;margin-left: 110px;padding: 10px;"required>
        
        <label for ="gender" >Gender:</label>
        <select name="gender" style="width:100px;padding:10px;margin-left:10px;font-weight: 200; font-size: 15px;" required>
          <option value="male">Male</option>
          <option value="female">Female</option>
        </select>
        <label for ="status" style="margin-left: 0px;margin-right: 30px;"required >Status:</label>
        <select name="status" style="width:100px;padding:10px;margin-left:10px;font-weight: 100; font-size: 15px;">
          <option value="Single">Single</option>
          <option value="Married">Married</option>
        </select>  
       <br>
       <label for ="address" >Address</label> 
       <input type="text" name="flatno" id="" placeholder="Flat no" style="width:80px;margin-left: 150px;padding: 10px;"required>
       <input type="text" name="buildingname" id="" placeholder="Building/Premises name" style="width:320px;padding: 10px;"required>
       <input type="text" name="streetname" id="" placeholder="Street/Road name" style="width:400px;padding: 10px;"required>
       <input type="text" name="city" id="" placeholder="Town/City/Village Name" style="width:400px;margin-left: 260px;padding: 10px;"required>
      
       <input type="text" name="districtname" id="" placeholder="District" style="width:300px;padding: 10px;"required>
       <input type="text" name="pincode" id="" placeholder="Pincode" style="width:100px;padding: 10px;"required><br>
       
     
        <label for="phno">Phone Number</label>
        <input type="text" name="phoneno" id="" style="margin-left:85px;margin-right: 10px; "placeholder ="9077832345"required maxlength="10"minlength="10">
        <label for ="address"  >Email</label>
        <input type="text" name="email" id="" placeholder="john12@gmail.com" style="margin-left: 0px;width: 300px;"required><br>
        <label for ="address" >Pan Card No.</label>
        <input type="text" name="pancardno" id="" placeholder="AVFSWG2501F" style="width:200px;padding: 10px;margin-left: 100px;"maxlength="10" minlength="10"required>
        <label for ="address" >UID/Aadhar card no.</label>
        <input type="text" name="aadhar" id="" placeholder="123445678765" style="width:200px;margin-left: 1px;padding: 10px;"maxlength="12"minlength="12"required>
        
        <label for ="aadhar"> Passport no </label>
        <input type="text" name="passportno" id="" placeholder="J1234567" style="width:250px;padding: 10px;"maxlength="8"minlength="8"required><br>
        <label for ="aadhar" > Years at current City </label>
        <input type="date" name="yearsatcurrentcity" id="" placeholder="dd/mm/yyyy" style="width:350px;margin-left: 35px;padding: 10px;"required>
        <label for ="aadhar" > Years at current Residence </label>
        <input type="date" name="yearsatcurrentresi" id="" placeholder="dd/mm/yyyy" style="width:350px;margin-left: 1px;padding: 10px;"required>

      </div>
      <br><br>
      <button type="button" data-next>Save & Next</button>
    </div>
    <div class="card" data-step >
      <div class="form-group" style="display: inline;">
      <h3 style="margin-left: 600px;font-weight: bolder;font-size: xx-large;">PROFESSIONAL</h3>
      <!-- <h3 style="margin-left: 600px;font-weight: bolder;font-size: xx-large;">PERSONAL DETAILS</h3> -->
      
        <label for ="occupation" >Occupation</label>
        <select name="occupation" id="" style="width:350px;padding:10px;margin-left: 55px;"  >
          <option value ="Salaried">Salaried</option>
          <option value="Self employed">Self employed</option>
          <option value="Self Employed Professional">Self Employed Professional</option>
          <option value="Retired">Retired</option>
          <option value="Housewife">Housewife</option>
          <option value="Student">Student</option>
          <option value="none">none</option>
        </select>
    
        <label for ="professional" style="margin-left: 40px;" >If Self employed professional</label>
        <select name="professional" id="" style="width:350px;padding:10px;margin-left: 40px"  >
          <option value ="Doctor">Doctor</option>
          <option value="ca">CA/CS</option>
          <option value="consultant">Consultant</option>
          <option value="architecture">Architect</option>
          <option value="none">none</option>
        </select>
        <br><br>
      
          <label for ="selfemployed" >If self employed bussinessman/Constitution</label><br><br>
          <label for ="typeofcomp" style="font-weight:100;" >Type of company</label>
          <select name="typeofcomp" id="" style="width:350px;padding:10px;margin-left: 1px;margin-right: 80px;"  >
            <option value ="Pvt. Ltd.">Pvt. Ltd.</option>
            <option value="Partnership">Partnership</option>
            <option value="Proprietor">Proprietor</option>
            <option value="Public Ltd.">Public Ltd.</option>
            <option value="Ltd liablity co.">Ltd liablity co.</option>
            <option value="none">none</option>
        </select>
  
        <label for ="nature"style="font-weight:100; ">Nature of Bussiness</label>
        <select name="nature" id="" style="width:350px;padding:10px;margin-left: 70px;"  >
          <option value ="Manufacturer">Manufacturer</option>
          <option value="Agriculturist">Agriculturist</option>
          <option value="Service Provider">Servise Provider</option>
          <option value="Trader/Distributer">Trader/Distributer</option>
          <option value="Comm. Agents">Comm. Agents</option>
          <option value="Retailers">Retailers</option>
          <option value="none">none</option>
        </select>
        <br><br>

          <label for ="salaried" >If Salaried</label><br><br>
          <label for ="typeofcomp"style="font-weight:100;" >Type of company</label>
          <select name="prefix" id="" style="width:350px;padding:10px;margin-left: 3px;margin-right:80px ;"  >
            <option value ="Pvt. Ltd.">Pvt. Ltd.</option>
            <option value="Partnership">Partnership</option>
            <option value="Proprietor">Proprietor</option>
            <option value="Public Ltd.">Public Ltd.</option>
            <option value="Retailers">Retailers</option>
            <option value="PSU">PSU</option>
            <option value="Govt.">Govt.</option>
            <option value="MNC">MNC</option>
            <option value="none">none</option>
          </select>

          <label for ="typeofindustry"style="font-weight:100;" >Type of Industry</label>
          <select name="typeofindustry" id="" style="width:350px;padding:10px;margin-left: 99px;"  >
            <option value ="Automobiles">Automobiles</option>
            <option value="Agricultural base">Agricultural based</option>
            <option value="Banking">Banking</option>
            <option value="BPO">BPO</option>
            <option value="Capital Goods">Capital Goods</option>
            <option value="Telecom">Telecom</option>
            <option value="IT">IT</option>
            <option value="Retail">Retail</option>
            <option value="Real Estate">Real Estate</option>
            <option value="Consumer Durables">Consumer Durables</option>
            <option value="FMCG">FMCG</option>
            <option value="NBFC">NBFC</option>
            <option value="Marketing/Adv">Marketing/Adv</option>
            <option value="Pharma">Pharma</option>
            <option value="Media">Media</option>
            <option value="none">none</option>
          </select>  
          <br><br><br>

          <label for ="dets" >Employers /Bussiness Details:</label><br><br>
          <label for="designation"style="font-weight:100;">Designation</label>
          <input type="text" name="designation" id="" style="margin-left:133px;width: 200px; ">
          <label for="experience"style="font-weight:100;">Experience in Current Job/Bussiness</label>
          <input type="number" name="experience" id="" style="margin-left:0px;width: 200px; "><br>
    
          <label for ="address"style="font-weight:100;" >Company/Employers Name</label> 
          <input type="text" name="compname"  style="width:200px;margin-left: 10px;padding: 10px;">
          <label for ="address"style="font-weight:100;" >Company/Employers Address</label>
          <input type="text" name="compaddr" id=""  style="width:200px;padding: 10px;margin-left: 50px;"><br>
          <label for ="address" style="font-weight:100;">City</label>
          <input type="text" name="city1" id=""  style="width:200px;margin-left: 200px;"required>
          <label for ="address" style="font-weight:100;">District</label>
          <input type="text" name="districtname1" id=""  style="width:200px;padding: 10px;margin-left: 230px;"><br>
          <label for ="address" style="font-weight:100;">Pincode</label>
          <input type="number" name="pincode1" id=""  style="width:200px;padding: 10px;margin-left: 170px;">
          <label for ="address" style="font-weight:100;">State</label>
          <input type="text" name="state1" id=""  style="width:200px;padding: 10px;margin-left: 250px;"><br>
          <label for ="address" style="font-weight:100;">Country</label>
          <input type="text" name="country1" id=""  style="width:250px;padding: 10px;margin-left: 90px;">
        
      <label for="phno"style="font-weight:100;">TEL(O)</label>
     <input type="text" name="tel" id="" style="margin-left:35px; width: 250px;"required minlength="10" maxlength="10">
     <label for ="address" style="font-weight:100;" >Official Email</label>
     <input type="text" name="email1" id="" style="margin-left: 40px;width:250px"required><br>  <br><br>  
      <div class="table1">
          <table border="2px" >
            <tr>
              <td >Name</td>
              <td>PAN no</td>
              <td>Contact Details</td>
              <td>Date of Birth</td>
              <td>Education Background</td>
              <td>Profit Sharing/Stakeholder %</td>
              <td>Total Experience</td>
              
            </tr>
            <tr>
              
              <td> <input type="text" name="name1" class="i"  ></td>
              <td> <input type="number" name="panno1" class="i" ></td>
              <td> <input type="number" name="contactdetails1" class="i"  ></td>
              <td> <input type="date" name="dob1" class="i" ></td>
              <td> <input type="text" name="edubackground1" class="i"></td>
              <td> <input type="number" name="profitsharing1"class="i" ></td>
              <td> <input type="number" name="totalexperience1" class="i"  ></td>
              </tr>
              <tr>
              
                <td> <input type="text" name="name2" class="i"  ></td>
                <td> <input type="number" name="panno2" class="i"></td>
                <td> <input type="number" name="contactdetails2" class="i"  ></td>
                <td> <input type="date" name="dob2" class="i"></td>
                <td> <input type="text" name="edubackground2"class="i" ></td>
                <td> <input type="number" name="profitsharing2" class="i" ></td>
                <td> <input type="number" name="totalexperience2" class="i" ></td>
                </tr>
                <tr>
              
                  <td> <input type="text" name="name3" class="i" ></td>
                  <td> <input type="number" name="panno3" class="i" ></td>
                  <td> <input type="number" name="contactdetail3" class="i"  ></td>
                  <td> <input type="date" name="dob3" class="i" ></td>
                  <td> <input type="text" name="edubackground3" class="i" ></td>
                  <td> <input type="number" name="profitsharing3" class="i" ></td>
                  <td> <input type="number" name="totalexperience3" class="i" ></td>
                  </tr>     
            
          </table>
      </div>
       <br>
       
      <div class="form-group" style="display: inline;">
        <h3 style="margin-left: 600px;font-weight: bolder;font-size: xx-large;">BANK  DETAILS</h3>
        <label for="acc">Name of account holder</label>
        <input type="text" name="accholder" id="acc" style="width:350px;margin-left: 0px;"required>
        <label for="br">Branch</label>
        <input type="text" name="branch" id="br" style="width:350px;margin-left: 125px;"required><br>
        <label for="no">Account no</label>
        <input type="number" name="accountnumber" id="no" style="width:350px;margin-left: 104px;" maxlength="10" minlength="10" required>
        <label for="if" style="padding-left: 24px;">IFSC Code</label>
        <input type="text" name="ifsccode" id="if" style="width:350px;margin-left: 95px;"required minlength="11" maxlength="11"><br>
        <label for="mi">MICR Code</label>
        <input type="number" name="micrcode" id="mi" style="width:350px;margin-left: 96px;"required minlength="9"maxlength="9">
        <label for="da" style="padding-left: 20px;">Account opening date</label>
        <input type="date" name="accountopeningdate" id="da" style="width:350px;margin-right: 180px;"required><br><br>


       
      </div>
      <br><br>
      <button type="button" data-previous>Previous</button>
      <button type="button" data-next>Save & Next</button>
    </div>
    </div>
    
     
       <div class="card" data-step style="height: 1500px;">
     
        <div class="form-group" style="display: inline;">
          
        <h3 style="margin-left: 600px;font-weight: bolder;font-size: xx-large;">DOCUMENTS</h3> 
        <label for="doc">Applicants Passport Size Photo</label>
      <input type="file" name="photo" id="doc" style="width:350px;margin-left: 65px;"required> 
      <label for="doc1">Aadhar Card</label>
      <input type="file" name="addharphoto" id="doc1" style="width:350px;margin-left: 10px;"required>          <br><br>
      <label for="doc6">Proof of Continuity of Current Job</label>
      <input type="file" name="proofofcontinuity" id="doc6" style="width:350px;margin-left: 30px;"required> 
      <label for="doc3">Proof of Office</label>
      <input type="file" name="proofofoffice" id="doc3" style="width:350px;margin-left: 10px;"required> <br><br>
       <label for="doc4">Proof of Qualification</label>
      <input type="file" name="proofofqualification" id="doc4" style="width:350px;margin-left: 140px;"required> 
       <label for="doc5" style="margin-left: 21px;">Loan Agreement</label>
      <input type="file" name="loanagreement" id="doc5" style="width:350px;margin-left: 0px;"required> <br><br>
      <label for="doc7">Proof of TurnOver</label>
      <input type="file" name="proofofturnover" id="doc7" style="width:350px;margin-left: 160px;"required> 
       
      <label for="doc8">Signature Proof</label>
      <input type="file" name="signproof" id="doc8" style="width:350px;margin-left: 10px;"required> <br><br> 
      <label for="doc9">Residence Proof</label>
      <input type="file" name="residenceproof" id="doc9" style="width:350px;margin-left: 180px;"required>  
      <label for="doc10">Identity Proof</label>
      <input type="file" name="identityproof" id="doc10" style="width:350px;margin-left: 10px;"required> <br>
      <label for="doc11">Post dated cheque</label>
      <input type="file" name="postdatedcheque" id="doc11" style="width:350px;margin-left: 170px;"required> 
      <label for="doc12">ECS mandate</label>
      <input type="file" name="ecsmandate" id="doc13" style="width:350px;margin-left: 10px;"required> <br><br><br>
      <label for="doc12">Loan a/c statement for balance transfer/balance transfer & top up/repayment/retention case</label>
      <input type="file" name="acstatement" id="doc12" style="width:350px;margin-left: 10px;"required> 
      
          <h3 style="font-weight: bolder;font-size: xx-large;margin-left: 400px;">SCHEDULE OF CHARGES</h3><br><br>
         <label for ="charges" >1)Stamp Duty: At actual as per applicable law.</label><br>
         <label for ="charges" > 2) Interest rate of (subject to changes as per Terms and 
          Conditions/ Agreement)</label>
           <input type="number" name="intrestrate" id=""  style="width:80px; "required>
           <label for ="charges" > %p.a.(monthly reducing).</label><br>
           <label for ="charges" >3) Processing Charges of Rs.</label>
           <input type="number" name="processingcharges" id=""  style="width:80px;"required><br>
           <label for ="charges" >3(a). Services tax on PF</label><br><br>
           
           <label for ="charges" >4) Cheque/SI/ECS return charges (without prejudice to the civil and 
            criminal rights and remedies of the Bank for the dishonor) : ` 618/- Per instance </label><br><br>
            <label for ="charges" > 5) Default Interest / Late 
              payment charges : 2% per month from unpaid EMI </label><br><br>
            <label for ="charges" > 6) CIBIL Report Copy Charges: ` 50 per copy</label><br><br>
            <label for ="charges" >7) Legal,repossession and Incidental Charges: At actual  </label><br> <br>
            <label for ="charges" >8) Duplicate Amortization/ Repayment Schedule: ` 200/-  </label><br> <br>
            <label for ="charges" >9) Cheque/SI/ECS swapping Charges : ` 500/-  </label> <br>
            <label for ="charges" >10) Details of Security  </label>
            <input type="number" name="detailsofsecurity" id=""  style="width:80px; "><br>
            <label for ="charges" > 11) Taxes at Actuals, applicable presently or in future.   </label><br> <br>
            <label for ="charges" >12) Date on which annual Outstanding balance statement will be issued: 31st May  </label><br> <br>
            <label for ="charges" > 13) Loan Cancellation Charges: NIL. Interest would be charged for the interim period between date of 
              disbursement and date of loan cancellation  </label><br> <br>
    
    
          <!-- </div> -->
         <br><br>
          <button type="button" data-previous>Previous</button>
          <button type="button" data-next>Save & Next</button>
        </div>
        </div>
        <div class="card" data-step style="height: 1200px;">
         
          <div class="form-group" style="display: inline;">
            <h3 style="font-weight: bolder;font-size: xx-large;">MOST IMPORTANT TERMS AND CONDITIONS AND DECLARATION BY THE CUSTOMER </h3>
            <h4 style="margin-right: 100px;">I/We here by apply for an educational loan from Infinity Finance Bank Limited. To the extent indicated in the loan application form. 
            
                I/We agree and confirm: (1) To the applicable schedule of charges, fees, commissions including the key facts informed to me by Infinity Finanace Bank (Bank) and as more 
                particularly mentioned in the “Schedule of Charges” of this Application.<br>
                 (2) That the bank's representative/ staff will not receive any payment in cash/ bearer cheque or 
                kind along with or in connection with this loan application from me/ us.<br> 
                (3) That no discount or free gift or any other commitment whatsoever is given to me/ us by the 
                Bank or any of its authorized representative(s) other than what is not documented in this application form the Terms and Conditions/ Agreement pursuant to the Loan. <br>
                (4) The Bank shall not process incomplete/ defective application form, for which if any loss or delay is caused to me/ us, I/We will not hold the Bank liable for such loss or 
                delay.<br>
                 (5) That Loan processing and disbursement will take at least 7 working days post submission of all requisite documents and information as may be required by 
                the Bank as per Bank's criteria.<br>
                 (6) That submission of loan application to your bank does not imply automatic approval by the Bank and the Bank will decide the 
                quantum of the loan at its sole and absolute discretion. The Bank in its sole and absolute discretion may either sanction or reject the application for granting the loan. 
                Incase of rejection, the Bank shall not be required to give any reason.<br>
                 (7) That the Bank shall have the right to make disclosure of any information relating to me/us 
                including personal information, details in relation to Loan, defaults, security, etc to the Credit Information Bureau of India (CIBIL) and/or any other 
                governmental/regulatory/statutory or private agency/entity, credit bureau, RBI, the Bank's other branches/ subsidiaries / affiliates / rating agencies, service providers, 
                other banks / financial institutions, any third parties, any assignes/potential assignees or transferees, who may need, process and publish the information in such 
                manner and through such medium as it may be deemed necessary by the publisher/ Bank/ RBI, including publishing the name as part of willful defaulter's list from time 
                to time, as also use for KYC information verification, credit risk analysis, or for other related purposes.<br>
                 (8) The Bank reserves its right to reject the loan application and 
                retain the loan application form along with the photograph, information and documents. <br>
                (9) That I/ We shall furnish any additional documents as and when required by 
                the Bank.<br>
                 (10) That I/ We have not taken any loan from any other bank/ finance company unless specifically declared by me/ us.<br>
                  (11) That there is no impediment or  restriction (whether legal or judicial) against me/ us and/or our asset filed/ reported by any other bank/ financer/ bank. <br>
                (12) That the funds shall be used for the purpose 
                for which loan has been applied and will not be used for speculative or antisocial purpose. <br>
                (13) I/ We do not have any existing customer ID or customer ID apart from the 
                one mentioned above, and incase found otherwise, Bank reserves the right to consolidate the customer IDs under a single customer ID as it may decide, without any 
                prior notice to me/ us.<br>
                 (14) That the information furnished by me/ us above is true and accurate. <br>
                Other declarations : I/ We : (1) shall advise the Infinity Finanace Bank (Bank) in writing of any change in my/ our residential or employment address.
                <br>    (2) hereby authorize  and give consent to the Bank to disclose, without notice to me/ us, information furnished by me/ us in the application form(s)/ related documents executed/ to be 
                executed in relation to the facilities to be availed by me/ us from the Bank, to the Bank's other branches/ subsidiaries/ affiliates/ Credit Bureaus/ Rating Agencies/ 
                Service Providers, banks/ financial institutions, governmental/ regulatory authorities or third parties for information verification, credit risk analysis, or for other related 
                purposes that the Bank may deem fit. I/ We waive the privilege of privacy and privity of contract.<br>
                 (3) shall credit all sums received by you in either or all the names of this account.<br>
                 (4) hereby confirm having received, read and understood the terms and conditions applicable to this loan including the application form and the Terms and 
                Conditions/ Agreement and accept the same.<br>
                 (5) hereby unconditionally, agree that these terms may be changed by the Bank at any time and I / We will be bound by the 
                amended terms and conditions.<br>
                 (6) Confirm that I/ We are citizen of India. <br>
                I / We also confirm that the executive collecting my loan Application / Document has informed me / us : (1) that services tax is applicable and will be charged in 
                connection with the loan.<br>
                 (2) all the commission/s (in the form of up front and trail commissions) payable to Infinity Finanace Bank for the insurance policy recommended to me/us. <br>
                (3) In the case of loan cancellation, the applicable pro-rata interest charges on any outstanding loan amount will have to be borne by me/us. I understand that 
                Processing Fee, Stamp Duty are non-refundable charges and would not be waived/ refunded in case of loan cancellation or where the loan has not been disbursed.<br>
                 (4)That all the post-dated cheques are to be issued favouring Infinity Finanace Bank A/c <Mention Product Name> only.<br>
                 (5) that loan related information like “welcome  letter”, “repayment schedule”, “Terms and condition”, “disbursal advice (as applicable to Personal Loan/ Business Loan)”, will be sent on the e-mail id mentioned by me/ 
                us in this loan application form. <br>
                
              </h4>
              <br>
              <br>
              <label for="da1" style="padding-left: 20px;">Date</label>
              <input type="date" name="finaldate" id="da1" style="width:350px;margin-left: 96px;"required><br>
              <label for="da2" style="padding-left: 20px;">Place</label>
              <input type="text" name="finalplace" id="da2" style="width:350px;margin-left: 96px;"required><br>
             
              <label for="da3" style="padding-left: 20px;">Signature</label>
              <input type="file" name="finalsign" id="da3" style="width:350px;margin-left: 50px;"required>
              
         
          </div>
          <br><br>
          <button type="button" data-previous>Previous</button>
          <button type="submit"  name="btn">Submit</button>
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