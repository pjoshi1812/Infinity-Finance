<?php
    require('connection.php');
    $srno=$_GET['srno']
    if(isset($_POST['btn']))
    {
      
      $prefix=$_POST['prefix'];
      $name=$_POST['name'];
      $mothername=$_POST['mothername'];
      $fathername=$_POST['fathername'];
      $flatno=$_POST['flatno'];
      $buildingname=$_POST['buildingname'];
      $streetname=$_POST['streetname'];
      $city=$_POST['city'];
      $districtname=$_POST['districtname'];
      $pincode=$_POST['pincode'];
      $currentaddressis=$_POST['currentaddressis'];
      $phno=$_POST['phno'];
      $email=$_POST['email'];
      $dob=$_POST['dob'];
      $age=$_POST['age'];
      $gender=$_POST['gender'];
      $maritualstatus=$_POST['maritualstatus'];
      $numberofdependent=$_POST['numberofdependent'];
      $panno=$_POST['panno'];
      $udi=$_POST['udi'];
      $religion=$_POST['religion'];
      $occupation=$_POST['occupation'];
      $monthlyincome=$_POST['monthlyincome'];
      $otherincome=$_POST['otherincome'];
      $cname=$_POST['cname'];
      $cblockno=$_POST['cblockno'];
      $cbuildingname=$_POST['cbuildingname'];
      $cstreetname=$_POST['cstreetname'];
      $ccity=$_POST['ccity'];
      $cdistrict=$_POST['cdistrict'];
      $cpincode=$_POST['cpincode'];
      $yrsinoccupation=$_POST['yrsinoccupation'];
      $retairementage=$_POST['retairementage'];
      $totalexp=$_POST['totalexp'];
      $eid=$_POST['eid'];
      $edepartment=$_POST['edepartment'];
      $edesignation=$_POST['edesignation'];
      $nameofaccholder=$_POST['nameofaccholder'];
      $bankname=$_POST['bankname'];
      $branchname=$_POST['branchname'];
      $accountnumber=$_POST['accountnumber'];
      $accopeningdate=$_POST['accopeningdate'];
      $micr=$_POST['micr'];
      $ifsc=$_POST['ifsc'];

      $photograph=$_FILES["photograph"]["name"];
      $tphotograph=$_FILES["photograph"]["tmp_name"];
      $fphotograph="../homeloandocs/".$photograph;

      $signature=$_FILES["signature"]["name"];
      $tsignature=$_FILES["signature"]["tmp_name"];
      $fsignature="../homeloandocs/".$signature;

      $adharcard=$_FILES["adharcard"]["name"];
      $tadharcard=$_FILES["adharcard"]["tmp_name"];
      $fadharcard="../homeloandocs/".$adharcard;

      $pancard=$_FILES["pancard"]["name"];
      $tpancard=$_FILES["pancard"]["tmp_name"];
      $fpancard="../homeloandocs/".$pancard;

      $lb1=$_FILES["lb1"]["name"];
      $tlb1=$_FILES["lb1"]["tmp_name"];
      $flb1="../homeloandocs/".$lb1;

      $lb2=$_FILES["lb2"]["name"];
      $tlb2=$_FILES["lb2"]["tmp_name"];
      $flb2="../homeloandocs/".$lb2;

      $lb3=$_FILES["lb3"]["name"];
      $tlb3=$_FILES["lb3"]["tmp_name"];
      $flb3="../homeloandocs/".$lb3;

      $ss1=$_FILES["ss1"]["name"];
      $tss1=$_FILES["ss1"]["tmp_name"];
      $fss1="../homeloandocs/".$ss1;

      $ss2=$_FILES["ss2"]["name"];
      $tss2=$_FILES["ss2"]["tmp_name"];
      $fss2="../homeloandocs/".$ss2;

      $ss3=$_FILES["ss3"]["name"];
      $tss3=$_FILES["ss3"]["tmp_name"];
      $fss3="../homeloandocs/".$ss3;

      $itr1=$_FILES["itr1"]["name"];
      $titr1=$_FILES["itr1"]["tmp_name"];
      $fitr1="../homeloandocs/".$itr1;

      $itr2=$_FILES["itr2"]["name"];
      $titr2=$_FILES["itr2"]["tmp_name"];
      $fitr2="../homeloandocs/".$itr2;

      $itr3=$_FILES["itr3"]["name"];
      $titr3=$_FILES["itr3"]["tmp_name"];
      $fitr3="../homeloandocs/".$itr3;

      $rentagreement=$_FILES["rentagreement"]["name"];
      $trentagreement=$_FILES["rentagreement"]["tmp_name"];
      $frentagreement="../homeloandocs/".$rentagreement;

      $ownerpermission=$_FILES["ownerpermission"]["name"];
      $townerpermission=$_FILES["ownerpermission"]["tmp_name"];
      $fownerpermission="../homeloandocs/".$ownerpermission;

      $fsignature=$_FILES["fsignature"]["name"];
      $tfsignature=$_FILES["fsignature"]["tmp_name"];
      $ffsignature="../img/".$fsignature;

      // $photograph=$_POST['photograph'];
      // $signature=$_POST['signature'];
      // $adharcard=$_POST['adharcard'];
      // $pancard=$_POST['pancard'];
      // $lb1=$_POST['lb1'];
      // $lb2=$_POST['lb2'];
      // $lb3=$_POST['lb3'];
      // $ss1=$_POST['ss1'];
      // $ss2=$_POST['ss2'];
      // $ss3=$_POST['ss3'];
      // $itr1=$_POST['itr1'];
      // $itr2=$_POST['itr2'];
      // $itr3=$_POST['itr3'];
      // $rentagreement=$_POST['rentagreement'];
      // $ownerpermission=$_POST['ownerpermission'];
      $amount=$_POST['amount'];
      $term=$_POST['term'];
      $installments=$_POST['installments'];
      $sd=$_POST['sd'];
      $dd=$_POST['dd'];
      $rateopt=$_POST['rateopt'];
      $chooseloantype=$_POST['chooseloantype'];
      $purposeofloan=$_POST['purposeofloan'];
      $ploatcost=$_POST['ploatcost'];
      $totalpurchsecost=$_POST['totalpurchsecost'];
      $incidentalcost=$_POST['incidentalcost'];
      $othercost=$_POST['othercost'];
      $marketvaluecost=$_POST['marketvaluecost'];
      $loanos=$_POST['loanos'];
      $totalreq=$_POST['totalreq'];
      $amountalreadyspent=$_POST['amountalreadyspent'];
      $loanreq=$_POST['loanreq'];
      $saving=$_POST['saving'];
      $disposal=$_POST['disposal'];
      $sale=$_POST['sale'];
      $providentfund=$_POST['providentfund'];
      $estsoursefund=$_POST['estsoursefund'];
      $typeofproperty=$_POST['typeofproperty'];
      $pflatno=$_POST['pflatno'];
      $pbuildingname=$_POST['pbuildingname'];
      $pstreet=$_POST['pstreet'];
      $ptown=$_POST['ptown'];
      $pdistrict=$_POST['pdistrict'];
      $ppincode=$_POST['ppincode'];
      $natureofprop=['natureofprop'];
      $areaofprop=$_POST['areaofprop'];
      $buituparea=$_POST['buituparea'];
      $stageofconstruction=$_POST['stageofconstruction'];
      $fdate=$_POST['fdate'];
      $place=$_POST['place'];
      // $fsignature=$_POST['fsignature'];

           
       $sql="UPDATE  `hloan` ( `prefix`, `name`, `mothername`, `fathername`, `flatno`, `buildingname`, `streetname`, `city`, `districtname`, `pincode`,
        `currentaddressis`, `phno`, `email`, `dob`, `age`, `gender`, `maritualstatus`, `numberofdependent`, `panno`, `udi`, `religion`, `occupation`, `monthlyincome`,
        `otherincome`, `cname`, `cblockno`, `cbuildingname`, `cstreetname`, `ccity`, `cdistrict`, `cpincode`, `yrsinoccupation`, `retairementage`, `totalexp`, `eid`,
         `edepartment`, `edesignation`, `nameofaccholder`, `bankname`, `branchname`, `accountnumber`, `accopeningdate`, `micr`, `ifsc`, `photograph`, `signature`, 
         `adharcard`, `pancard`, `lb1`, `lb2`, `lb3`, `ss1`, `ss2`, `ss3`, `itr1`, `itr2`, `itr3`, `rentagreement`, `ownerpermission`, `amount`, `term`, `installments`, 
         `sd`, `dd`, `rateopt`, `chooseloantype`, `purposeofloan`, `ploatcost`, `totalpurchsecost`, `incidentalcost`, `othercost`, `marketvaluecost`, `loanos`, `totalreq`,
          `amountalreadyspent`, `loanreq`, `saving`, `disposal`, `sale`, `providentfund`, `estsoursefund`, `typeofproperty`, `pflatno`, `pbuildingname`,`pstreet`, `ptown`, `pdistrict`,
           `ppincode`, `natureofprop`, `areaofprop`, `buituparea`, `stageofconstruction`, `fdate`, `place`, `fsignature`, `currenttime`)
            VALUES ( '$prefix', '$name', '$mothername', '$fathername', '$flatno', '$buildingname', '$streetname', '$city', '$districtname', '$pincode', '$currentaddressis', 
            '$phno', '$email', '$dob', '$age', '$gender', '$maritualstatus', '$numberofdependent', '$panno', '$udi', '$religion', '$occupation', '$monthlyincome', 
            '$otherincome', '$cname', '$cblockno', '$cbuildingname', '$cstreetname', '$ccity', '$cdistrict', '$cpincode', '$yrsinoccupation', '$retairementage', 
            '$totalexp', '$eid', '$edepartment', '$edesignation', '$nameofaccholder', '$bankname', '$branchname', '$accountnumber', '$accopeningdate', '$micr', 
            '$ifsc', '$photograph', '$signature', '$adharcard', '$pancard', '$lb1', '$lb2', '$lb3', '$ss1', '$ss2', '$ss3', '$itr1','$itr2', '$itr3', '$rentagreement', 
            '$ownerpermission', '$amount', '$term', '$installments', '$sd', '$dd', '$rateopt', '$chooseloantype', '$purposeofloan', '$ploatcost', '$totalpurchsecost',
             '$incidentalcost', '$othercost', '$marketvaluecost', '$loanos', '$totalreq', '$amountalreadyspent', '$loanreq', '$saving', '$disposal', '$sale', 
             '$providentfund', '$estsoursefund', '$typeofproperty', '$pflatno', '$pbuildingname','$pstreet', '$ptown', '$pdistrict', '$ppincode', '$natureofprop', '$areaofprop',
              '$buituparea', '$stageofconstruction', '$fdate', '$place', '$fsignature',  current_timestamp())";

if($con->query($sql)==1)
{
   move_uploaded_file($tphotograph, $fphotograph);
   move_uploaded_file($tsignature, $fsignature);
   move_uploaded_file($tadharcard, $fadharcard);
   move_uploaded_file($tpancard, $fpancard);
   move_uploaded_file($tlb1, $flb1);
   move_uploaded_file($tlb2, $flb2);
   move_uploaded_file($tlb3, $flb3);
   move_uploaded_file($tss1, $fss1);
   move_uploaded_file($tss2, $fss2);
   move_uploaded_file($tss3, $fss3);
   move_uploaded_file($titr1, $fitr1);
   move_uploaded_file($titr2, $fitr2);
   move_uploaded_file($titr3, $fitr3);
   move_uploaded_file($trentagreement, $frentagreement);
   move_uploaded_file($townerpermission, $fownerpermission);
   move_uploaded_file($tfsignature, $ffsignature);
   
   
   

    $insert=true;
    // header("location: hcal.php");
}
else 
    echo "Error:$sql<br>$con->error";

$con->close();  
}

    
      
      


?>
<!-- 97 -->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="hloan.css">
  <script src="hloan.js" defer></script>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>
<body>
    <div class="header">
        <!-- <i class="fas fa-rupee-sign"></i> -->
        <div class="menu">
            <div class="header">
               <div class="logo">
                <img src="logo.jpg" alt="logo" srcset=" ">
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
                        <li><a href="#">Business Loan</a></li>

                    </ul>
                </li>
    
                <li><a href="#">FAQ</a></li>
    
                <li><a href="#">About Us</a></li>
                </ul>
            </div>
        </div>
  <form data-multi-step class="multi-step-form" method="post" enctype="multipart/form-data">
    <div class="card"  data-step>
        <h3 class="step-title">Personal Information</h3>
        <div class="form-group"style="display: inline;">
          <label for="name">Name</label>
          <select name="prefix" id="" style="width: 60px;padding:10px;margin-left: 100px; " required>
            <option value="Mr">Mr</option>
            <option value="Mrs">Mrs</option>
            <option value="Ms">Ms</option>
            <option value="Dr">Dr</option>
            <option value="CA">CA</option>
          </select>
          <input type="text" name="name" id="name" placeholder="Enter Full Name" style=" width:400px;" ><br>
          <!-- <label for="ckyc">CKYC</label>
          <input type="number" name="ckyc" id="" maxlength="14"><br>  -->
          <label for="name">Mother Name</label> <input type="text" name="mothername" id=""style="width: 400px;margin-left: 30px; " placeholder="Mother Name" >
          <label for="name">Father Name</label> <input type="text" name="fathername" id=""style="width: 400px; " placeholder="Father Name" ><br>
          <label for="address">Address</label>
          <input type="text" style="width:50px;padding:10px;margin-left: 80px;"placeholder="Flat no" name="flatno">
          <input type="text" style="width:300px;padding:10px; "placeholder="Bulding / Premises Name"name="buildingname">
          <input type="text" style="width:300px;padding:10px;"placeholder="Street/Road Name"name="streetname">
          <input type="text" style="width:300px;padding:10px;margin-left: 190px;"placeholder="Town/City/Village Name"name="city">
          <input type="text" style="width:300px;padding:10px;"placeholder="Distrit Name"name="districtname">
          <input type="number" style="width:100px;padding:10px;"placeholder="PinCode"name="pincode"><br>
          <label for="address">Current Address is</label>
          <label for="address" style="font-weight: 100;">Self-Owned</label>
          <input type="radio" name="currentaddressis" >
          <label for="address" style="font-weight: 100;">Rent</label>
          <input type="radio" name="currentaddressis" >
          <label for="address" style="font-weight: 100;">Family</label>
          <input type="radio" name="currentaddressis" >
          <label for="address" style="font-weight: 100;">Provided by Employee</label>
          <input type="radio" name="currentaddressis" ><br>
          <label for="phno">Phone Number</label>
          <input type="number" name="phno" id="" style="margin-left: 20px;"placeholder="9975229636"><br>
          <label for="email">Email</label>
          <input type="text" style="width:300px;padding:10px;margin-left: 100px;"placeholder="john123@gmail.com"name="email"><br>
          <label for="DOB">Date of Birth</label>
          <input type="date" style="width:300px;padding:10px;margin-left: 40px;"name="dob" onclick="agecal()" id="DOB">
          <label for="age">Age</label>
          <input type="number" style="width:50px;padding:10px;margin-left:10px;"name="age"  id="result">
          <label for="gender">Gender</label>
          <label for="gender" style="font-weight: 100;">Male</label>
          <input type="radio"  name="gender">
          <label for="gender" style="font-weight: 100;">Female</label>
          <input type="radio"  name="gender">
          <label for="gender" style="font-weight: 100;">Other</label>
          <input type="radio"  name="gender"><br>
          <label for="Ms">Maritual Status</label>
          <label for="Ms"style="font-weight: 100;">Signal</label>
          <input type="radio" name="maritualstatus">
          <label for="Ms"style="font-weight: 100;">Married</label>
          <input type="radio" name="maritualstatus">
          <label for="Ms"style="font-weight: 100;">Other</label>
          <input type="radio" name="ms">
          <label for="NOD">Number Of Dependents </label>
          <input type="number" style="width:50px;padding:10px;margin-left:10px;"name="numberofdependent"><br>
          <label for="pan">PAN Number</label>
          <input type="text" name="panno" id="" style="margin-left: 40px;" placeholder="ABCPS1234A ">
          <label for="UDI">UDI Number </label>
          <input type="number" name="udi" id="" style="margin-left: 10px;" placeholder="0000 1111 2222 "><br>
          <label for="religion ">Religion</label> 
          <input type="text" name="religion" id="" style="margin-left: 95px; width: 300px;"><br>
          <label for="occupation">Occupation</label>
          <label for="occupation" style="font-weight: 100;margin-left: 50px;">Employeed</label>
          <input type="radio" name="occupation">
          <label for="occupation" style="font-weight: 100;">Self-Employeed</label>
          <input type="radio" name="occupation">
          <label for="occupation" style="font-weight: 100;">Other</label>
          <input type="text" name="occupation"><br>
          <label for="income">Monthly Income</label>
          <input type="number" name="monthlyincome" >
          <label for="income">Other Income</label>
          <input type="number" name="otherincome" ><br>
          <label for="CN">Company Name</label>
          <input type="text" name="cname" id="" placeholder="Enter Company Name" style=" width:400px;"><br>
          <h3 style="    font-weight: bold;font-size: 20px; color: #333;padding: 10px;margin: 10px;">
             (Please mention the address of the office you are based at / operating from)</h3>
          <label for="address">Address</label>
          <input type="text" style="width:50px;padding:10px;margin-left: 80px;"placeholder="Block no" name="cblockno">
          <input type="text" style="width:300px;padding:10px; "placeholder="Bulding / Premises Name"name="cbuildingname">
          <input type="text" style="width:300px;padding:10px;"placeholder="Street/Road Name"name="cstreetname">
          <input type="text" style="width:300px;padding:10px;margin-left: 190px;"placeholder="Town/City/Village Name"name="ccity">
          <input type="text" style="width:300px;padding:10px;"placeholder="District Name"name="cdistrict">
          <input type="number" style="width:100px;padding:10px;"placeholder="PinCode"name="cpincode"><br>
          <label for="exp">Yrs in Occupation</label>
          <input type="number" name="yrsinoccupation" style="width: 50px; margin: 0;">
          <label for="exp">Retirement Age</label>
          <input type="number" name="retairementage" style="width: 50px;">
          <label for="exp">Total Experience</label>
          <input type="number" name="totalexp" style="width: 50px;"><br>
          <label for="eid">Employee ID</label>
          <input type="number" name="eid" style="width: 50px; margin-left: 45px;">
          <label for="Dept">Department</label>
          <input type="text"style="width:300px;padding:10px;"name="edepartment">
          <label for="Desi">Designation</label>
          <input type="text"style="width:300px;padding:10px;"name="edesignation"><br>
        </div>
        <div class="form-group" style="display: inline;">
        <h3 class="step-title">BANK ACCOUNT DETAILS</h3>
        <p style="text-align: center; font-weight: bold;">PLEASE MENTION DETAILS OF YOUR SALARY ACCOUNT / MAIN ACCOUNT INCASE SELF EMPLOYED</p>
          <label for="nah">Name of Account Holder</label>
          <input type="text" name="nameofaccholder" id="" style="margin-left: 50px; width: 400px;"><br>
          <label for="nab">Bank Name</label>
          <input type="text" name="bankname" id="" style="margin-left:160px; width: 400px;"><br>
          <label for="nabr">Branch Name</label>
          <input type="text" name="branchname" id="" style="margin-left: 140px; width: 400px;"><br>
          <label for="ac">Account Number</label>
          <input type="number" name="accountnumber"   id="" style="margin-left:110px ; width: 400px;"><br>
          <label for="acdate"> A/c Operated Since</label>
          <input type="date" name="accopeningdate" id="" style="margin-left: 90px; width: 200px;">
          <label for="mcode">MICR Code</label>
          <input type="number" name="micr" id="">
          <label for="icode">IFSC Code</label>
          <input type="number" name="ifsc" id="">
           

          <br>
        </div>
        <button type="button" data-next style="width:160px">Save And Next</button>
      </div>
  
    <div class="card" data-step>
      <h3 class="step-title">Documents</h3>
      <div class="form-group" style="display: inline;">
        <h3 style="font-weight: bold;font-size: 20px; color: #333;padding: 10px;margin: 10px;">
          Please Attach Applicant's Documents
        </h3><br>
        <label for="photograph" >Photograph</label>
        <input type="file" name="photograph" id="" style="width: 300px;margin-left: 180px; "><br>
        <label for="sign" >Signature</label>
        <input type="file" name="signature" id="" style="width: 300px; margin-left: 198px;"><br>
        <label for="adhar" >Aadhar Card</label>
        <input type="file" name="adharcard" id="" style="width: 300px; margin-left: 168px;"><br>
        <label for="sign" >PAN</label>
        <input type="file" name="pancard" id="" style="width: 300px; margin-left: 243px;"><br>
        <label for="LB" >Light Bill(3 Months)</label>
        <input type="file" name="lb1" id="" style="width: 240px; margin-left: 110px;">
        <input type="file" name="lb2" id="" style="width: 240px; margin-left: 10px;">
        <input type="file" name="lb3" id="" style="width: 240px; margin-left: 10px;"><br>
        <label for="SalSta">Salary Statements (3 Months)</label>
        <input type="file" name="ss1" id="" style="width: 240px; margin-left: 30px;">
        <input type="file" name="ss2" id="" style="width: 240px; margin-left: 10px;">
        <input type="file" name="ss3" id="" style="width: 240px; margin-left: 10px;"><br>
        <label for="SalSta">ITR Statements (3 Years)</label>
        <input type="file" name="itr1" id="" style="width: 250px;margin-left: 69px;">
        <input type="file" name="itr2" id="" style="width: 250px; margin-left: 10px;">
        <input type="file" name="itr3" id="" style="width: 250px; margin-left: 10px;"><br>
        <label for="rentagree" >Rent Agreement</label>
        <input type="file" name="rentagreement" id="" style="width: 300px; margin-left: 149px;"><br>
        <label for="owper" >Owner Permission</label>
        <input type="file" name="ownerpermission" id="" style="width: 300px; margin-left: 130px;"><br>

      </div>
      <button type="button" data-previous>Previous</button>
      <button type="button" data-next style="width:160px">Save And Next</button>
    </div>
    <div class="card" data-step>
      <h3 class="step-title">Loan Requested</h3>
      <div class="form-group" style="display: inline; ">
        
        <label for="amount" >Amount(rs)</label>
        <input type="number" name="amount" id="">
        <label for="amount">Term(Years)</label>
        <input type="number" name="term" id="" style="margin-left: 25px;"><br>
        <label for="instalment">Instalment you can pay to Infinity Finance Bank per month</label>
        <input type="number" name="installments" id=""><br>
        <label for="pdate">When would you prefer your loan to be:</label><br>
        <label for="sd"style="font-weight: 100;">Sanctioned</label>
        <input type="date" name="sd" id="">
        <label for="dd"style="font-weight: 100;">Disbursed</label>
        <input type="date" name="dd" id="">

        <h3 class="step-title">Type Of Loan</h3>
        <label for="Ro">Rate Option</label>
        <label for="fr" style="font-weight: 100;margin-left: 100px;">Fixed Rate</label>
        <input type="radio" name="rateopt" id="">
        <label for="ar"style="font-weight: 100;">Adjustable Rate</label>
        <input type="radio" name="rateopt" id=""><br><br>

        <label for="lo">Choose the Loan Type:</label>
        <label for="lt"style="font-weight: 100;">Home Loans</label>
        <input type="radio" name="chooseloantype" id="">
        <label for="lt"style="font-weight: 100; margin-left:70px">House Renovation Loans</label>
        <input type="radio" name="chooseloantype" id="">
        <label for="lt"style="font-weight: 100;margin-left:30px">Home Extension Loans</label>
        <input type="radio" name="chooseloantype" id=""><br>
        <label for="lt"style="font-weight: 100; margin-left:250px">Plot Purchase Loans</label>
        <input type="radio" name="chooseloantype" id="">
        <label for="lt"style="font-weight: 100;">Commercial Property Loan </label>
        <input type="radio" name="chooseloantype" id="">
        <label for="lt"style="font-weight: 100;">Plot + Construction Loans </label>
        <input type="radio" name="chooseloantype" id=""><br>



      </div>
      <button type="button" data-previous>Previous</button>
      <button type="button" data-next style="width:160px">Save And Next</button>
    </div>
    <div class="card" data-step >
        <h3 class="step-title">LOAN DETAILS</h3>
        <div class="form-group"style="display: inline;">
        <label for="pol" >Purpose of Loan </label>
        <label for="pl"style="font-weight: 100;">Construction </label>
        <input type="radio" name="purposeofloan" id="">
        <label for="pl"style="font-weight: 100; margin-left:0px">Purchase </label>
        <input type="radio" name="purposeofloan" id="">
        <label for="pl"style="font-weight: 100;margin-left:30px">Resale</label>
        <input type="radio" name="purposeofloan" id=""><br>
        <label for="pl"style="font-weight: 100; margin-left:200px">Refinance</label>
        <input type="radio" name="purposeofloan" id="">
        <label for="pl"style="font-weight: 100;">Extension </label>
        <input type="radio" name="purposeofloan" id="">
        <label for="pl"style="font-weight: 100;">Renovation  </label>
        <input type="radio" name="purposeofloan" id=""><br><br>
        
        <label for="erf">Estimate of Requirement of Funds</label><br>

        <label for="pc" style="font-weight: 100;">Plot Cost</label>
        <span class="material-symbols-outlined" style="margin-left: 250px;"> currency_rupee</span>
        <input type="number" name="ploatcost" id=""><br>

        <label for="tpc" style="font-weight: 100;">Total purchase price / construction cost</label>
        <span class="material-symbols-outlined"style="margin-left: 10px;"> currency_rupee</span>
        <input type="number" name="totalpurchsecost" id=""><br>

        <label for="ic" style="font-weight: 100;">Incidental Cost  </label>
        <span class="material-symbols-outlined"style="margin-left: 200px;"> currency_rupee</span>
        <input type="number" name="incidentalcost" id=""><br>

        <label for="oc" style="font-weight: 100;">Other costs  </label>
        <span class="material-symbols-outlined"style="margin-left: 235px;"> currency_rupee</span>
        <input type="number" name="othercost" id=""><br>

        <label for="mvc" style="font-weight: 100;"> Market value of property</label>
        <span class="material-symbols-outlined"style="margin-left: 120px;"> currency_rupee</span>
        <input type="number" name="marketvaluecost" id=""><br>

        <label for="lo" style="font-weight: 100;">Loan outstanding</label>
        <span class="material-symbols-outlined"style="margin-left: 180px;"> currency_rupee</span>
        <input type="number" name="loanos" id=""><br>
     
        <label for="trf">Total requirement of funds (Total)</label>
        <span class="material-symbols-outlined"style="margin-left: 30px;"> currency_rupee</span>
        <input type="number" name="totalreq" id=""><br>

        <label for="as">Amount already spent</label>
        <span class="material-symbols-outlined"style="margin-left: 130px;"> currency_rupee</span>
        <input type="number" name="amountalreadyspent" id=""><br>
        <div class="form-group" style="position: absolute; top:140px;left:650px ;display: inline;">
          <label for="esrf">Estimate of sources to meet requirement of funds</label><br>

          <label for="lreq" style="font-weight: 100;">Loan requested from Infinity Finance Bank</label>
          <span class="material-symbols-outlined"style="margin-left: 20px;"> currency_rupee</span>
          <input type="number" name="loanreq" id=""><br>

          <label for="sa" style="font-weight: 100;">Savings from Bank</label>
          <span class="material-symbols-outlined"style="margin-left: 215px;"> currency_rupee</span>
          <input type="number" name="saving" id=""><br>

          <label for="di" style="font-weight: 100;">Disposal of investments</label>
          <span class="material-symbols-outlined"style="margin-left: 180px;"> currency_rupee</span>
          <input type="number" name="disposal" id=""><br>

          <label for="sp" style="font-weight: 100;">Sale of Property </label>
          <span class="material-symbols-outlined"style="margin-left: 245px;"> currency_rupee</span>
          <input type="number" name="sale" id=""><br>      
          
          <label for="pf" style="font-weight: 100;">Provident Fund </label>
          <span class="material-symbols-outlined"style="margin-left: 250px;"> currency_rupee</span>
          <input type="number" name="providentfund" id=""><br>   

          <label for="estsoursefund">Estimate of sources of funds (Total) </label>
          <span class="material-symbols-outlined"style="margin-left: 70px;"> currency_rupee</span>
          <input type="number" name="estsoursefund" id=""><br>
          
        </div>

        <br>
        </div>
      
        <button type="button" data-previous>Previous</button>
        <button type="button" data-next style="width:160px">Save And Next</button>

      </div>
      <div class="card" data-step>
        <h3 class="step-title">DETAILS OF PROPERTY</h3>
        <div class="form-group" style="display: inline;">
          <p style="text-align: center; font-weight: bold;">(TO BE PURCHASED/ CONSTRUCTED/ RENOVATED/ OFFERED AS SECURITY)</p>
         <label for="top">Type Of Property</label>
         <label for="top" style="font-weight: 100;">Flat</label>
         <input type="radio" name="typeofproperty" id="">
         <label for="top" style="font-weight: 100;">Row House</label>
         <input type="radio" name="typeofproperty" id="">
         <label for="top" style="font-weight: 100;">Bungalow</label>
         <input type="radio" name="typeofproperty" id="">
         <label for="top" style="font-weight: 100;">Shop</label>
         <input type="radio" name="typeofproperty" id="">
         <label for="top" style="font-weight: 100;">Plot</label>
         <input type="radio" name="typeofproperty" id="">
         <label for="top" style="font-weight: 100;">Office</label>
         <input type="radio" name="typeofproperty" id="">
         <label for="top" style="font-weight: 100;"> Hotel</label>
         <input type="radio" name="typeofproperty" id=""><br><br>

         <label for="aop">Adress of Propety</label>
          <input type="text" style="width:50px;padding:10px;margin-left: 0px;"placeholder="Flat no" name="pflatno">
          <input type="text" style="width:300px;padding:10px; "placeholder="Bulding / Premises Name"name="pbuildingname">
          <input type="text" style="width:300px;padding:10px;"placeholder="Street/Road Name"name="pstreet">
          <input type="text" style="width:300px;padding:10px;margin-left: 190px;"placeholder="Town/City/Village Name"name="ptown">
          <input type="text" style="width:300px;padding:10px;"placeholder="Distrit Name"name="pdistrict">
          <input type="number" style="width:100px;padding:10px;"placeholder="PinCode"name="ppincode"><br>

          <label for="natureofprop">Nature OF Property</label>
          <label for="natureofprop" style="font-weight: 100; ">Residential</label>
          <input type="radio" name="natureofprop" id="">
          <label for="natureofprop" style="font-weight: 100;">Commercial</label>
          <input type="radio" name="natureofprop" id=""><br>

          <label for="aop">Area Of Property </label>
          <input type="number" name="areaofprop" id="" style="margin-left: 45px;">Sq.M <br>

          <label for="bua">Built-up area</label>
          <input type="number" name="buituparea" id="" style="margin-left: 80px;">Sq.M <br>

          <label for="soc">Stage of Construction</label>
          <input type="text" name="stageofconstruction" id="" style="width: 500px;"><br>


        </div>
       
        <button type="button" data-previous>Previous</button>
        <button type="button" data-next style="width:160px">Save And Next</button>

      </div>
      <div class="card" data-step>
        <h3 class="step-title">Declaration</h3>
        <div class="form-group">
            <ol>
              <li>I declare that we are citizens of India and all the particulars and information given in the application form is true, correct and complete and no material information has been withheld/suppressed.</li>
              <li>I shall advise Infinity Finance Bank in writing of any change in my residential or employment/ business address.</li>
              <li>I conﬁrm that the funds shall be used for the stated purpose and will not be used for speculative or anti-social purpose.</li>
              <li>I declare that I have not been in violation and shall not violate any provisions of the Prevention of Money Laundering Act, 2002 and/ or any applicable law, rules, guidelines and circulars issued by the Reserve Bank of India and/or any other statutory authority.</li>
              <li>I authorise Infinity Finance Bank to make any enquiries regarding my application, including with other ﬁnance companies/registered credit bureau.</li>
              <li>Infinity Finance Bank reserves the right to retain the photographs and documents submitted with this application and will not return the same to the applicant/s.</li>
              <li>I have read the application form/ brochures and am aware of all the terms and conditions of availing ﬁnance from Infinity Finance Bank.</li>
              <li>I understand that the sanction of this loan is at the sole discretion of Infinity Finance Bank and upon my executing necessary security (ies) and other formalities as required by Infinity Finance Bank and no commitment has been given regarding the same</li>
              <li>I authorise Infinity Finance Bank to conduct such credit checks as it considers necessary in its sole discretion and also authorise Infinity Finance Bank to release such or any other information in its records for the purpose of credit appraisal/sharing for any other purpose. I   further agree that my loan shall be governed by the rules of Infinity Finance Bank which may be in force from time to time.</li>
              <li>I am aware that the upfront Legal and Technical fees and the applicable taxes collected from me at the time of the application is non-refundable under any circumstances</li>
              <li>I am aware that Infinity Finance Bank does not accept any payment in cash. No payment in connection with the loan processing, sanction, disbursement, prepayment and repayment of loan shall be made to / in favour of any of Infinity Finance Bank’s intermediaries or any third party (ies) in cash or bearer cheque or in any other manner whatsoever.</li>
              <li>No discount/free gift or any other commitment whatsoever has been which is not documented in the loan agreement by Infinity Finance Bank or any of its authorised representatives</li>
              <li>I conﬁrm that I have no insolvency proceedings initiated/pending against me nor have I ever been adjudicated insolvent.</li>
              <li>The tenure/repayment/interest/other terms and conditions of the loan are subject to change as a consequence to any change in the money market conditions or on account of any other statutory or regulatory requirements or at Infinity Finance Bank's discretion. Infinity Finance Bank reserves the right to review and amend the terms of the loan in such manner and to such extent as it may deem ﬁt.</li>
              <li>I hereby declare and conﬁrm if any detail or declaration made by me, if found to be false, then Infinity Finance Bank will be entitled to revoke and/or recall the credit facility.</li>
              <li>I hereby declare and conﬁrm that any purchase by me of any insurance product is purely voluntary and is not linked to availing of any credit facility from Infinity Finance Bank.</li>
              <li>I hereby declare that the details furnished above are true and correct to the best of my/our knowledge and belief and I   undertake to inform you of any changes therein, immediately. In case any of the above information is found to be false or untrue or misleading or misrepresenting, I am aware that I may be held liable for it.</li>
              <li>I hereby consent to receiving information from Central KYC Registry through SMS/email on the above registered number / email address.</li>
            
            </ol>
            
        </div>
        <div class="form-group" style="display: inline;">
          <label for="sd">Date</label>
          <input type="date" name="fdate" id="" style="margin-left: 50px; width: 250px;"><br>
          <label for="plc">Place</label>
          <input type="text" name="place" id="" style="margin-left: 50px; width: 250px;"><br>
          <label for="Signature">Signature</label>
          <input type="file" name="fsignature" id="" style="margin-left: 20px; width: 250px;"><br>
        </div>
        <button type="button" data-previous>Previous</button>
        <button type="submit" data name="btn">update</button>

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
