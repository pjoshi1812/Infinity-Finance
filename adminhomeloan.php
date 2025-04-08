<?php
    require('connection.php');

    

    $sql1="SELECT * FROM hloan ORDER BY srno  ";
    $result1 = mysqli_query($con,$sql1);

  


    $con->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>adminpage</title>
    <link rel="stylesheet" href="admin.css">
   
</head>
<body>
<br><br>
<div class="header">
        <!-- <i class="fas fa-rupee-sign"></i> -->
        <div class="menu">
            <div class="header">
              
                <div class="nav">
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
    
   
    <div class="Education-form-info">
        
        <p>Home Loan Form Filled Details </p>
        <table border=1>
          <a href="hloan.php">
        <button type="button">Add</button>
        </a>  
            <tr>
                <div class="t1">
                <th>srno</th>
                <th>prefix</th>
                <th>name</th>
                <th>mothername</th>
                <th>fathername</th>
                <th>flatno</th>
                <th>buildingname</th>
                <th>streetname</th>
                <th>city</th>
                <th>districtname</th>
                <th>pincode</th>
                <th>currentaddressis</th></div>
                <div class="t1">
                <th>phno</th>
                <th>email</th>
                <th>dob</th>
                <th>age</th>
                <th>gender</th>
                <th>maritualstatus</th>
                <th>numberofdependent</th>
                <th>panno</th></div>
                <th>udi</th>
                <th>religion</th>
                <th>occupation</th>
                <th>monthlyincome</th>
                <th>otherincome</th>
                <th>cname</th>
                <th>cblockno</th>
                <th>cbuildingname</th>
                <th>cstreetname</th>
                <th>ccity</th>
                <th>cdistrict</th>
                <th>cpincode</th>
                <th>yrsinoccupation</th>
                <th>retairementage</th>
                <th>totalexp</th>
                <th>eid</th>
                <th>edepartment</th>
                <th>edesignation</th>
                <th>nameofaccholder</th>
                <th>bankname</th>
                <th>branchname</th>
                <th>accountnumber</th>
                <th>accopeningdate</th>
                <th>micr</th>
                <th>ifsc</th>
                <th>photograph</th>
                <th>signature</th>
                <th>adharcard</th>
                <th>pancard</th>
                <th>lb1</th>
                <th>lb2</th>
                <th>lb3</th>
                <th>ss1</th>
                <th>ss2</th>
                <th>ss3</th>
                <th>itr1</th>
                <th>itr2</th>
                <th>itr3</th>
                <th>rentagreement	</th>
                <th>ownerpermission</th>
                <th>term</th>
                <th>installments</th>
                <th>sd</th>
                <th>dd</th>
                <th>rateopt</th>
                <th>chooseloantype	</th>
                <th>purposeofloan</th>
                <th>ploatcost</th>
                <th>totalpurchsecost</th>
                <th>incidentalcost</th>
                <th>othercost</th>
                <th>marketvaluecost</th>
                <th>loanos</th>
                <th>totalreq</th>
                <th>amountalreadyspent</th>
                <th>loanreq</th>
                <th>saving</th>
                <th>disposal</th>
                <th>sale</th>
                <th>providentfund</th>
                <th>estsoursefund</th>
                <th>typeofproperty</th>
                <th>pflatno</th>
                <th>pbuildingname</th>
                <th>pstreet</th>
                <th>ptown	</th>
                <th>pdistrict	</th>
                <th>ppincode</th>
                <th>natureofprop</th>
                <th>areaofprop</th>
                <th>buituparea</th>
                <th>stageofconstruction</th>
                <th>fdate</th>
                <th>place</th>
                <th>fsignature</th>
                <th>currenttime</th>
                <th>action</th>
        
                
            </tr>
            <?php
            // LOOP TILL END OF DATA
            while($rows=$result1->fetch_assoc())
            {
        ?>
        <tr>
            <!-- FETCHING DATA FROM EACH
                ROW OF EVERY COLUMN -->
            <td><?php echo $rows['srno'];?></td>
            <td><?php echo $rows['prefix'];?></td>
            <td><?php echo $rows['name'];?></td>
            <td><?php echo $rows['mothername'];?></td>
            <td><?php echo $rows['fathername'];?></td>
            <td><?php echo $rows['flatno'];?></td>
            <td><?php echo $rows['buildingname'];?></td>
            <td><?php echo $rows['streetname'];?></td>
            <td><?php echo $rows['city'];?></td>
            <td><?php echo $rows['districtname'];?></td>
            <td><?php echo $rows['pincode'];?></td>
            <td><?php echo $rows['currentaddressis'];?></td>
            <td><?php echo $rows['phno'];?></td>
            <td><?php echo $rows['email'];?></td>
            <td><?php echo $rows['dob'];?></td>
            <td><?php echo $rows['age'];?></td>
            <td><?php echo $rows['gender'];?></td>
            <td><?php echo $rows['maritualstatus'];?></td>
            <td><?php echo $rows['numberofdependent'];?></td>
            <td><?php echo $rows['panno'];?></td>
            <td><?php echo $rows['udi'];?></td>
            <td><?php echo $rows['religion'];?></td>
            <td><?php echo $rows['occupation'];?></td>
            <td><?php echo $rows['monthlyincome'];?></td>
            <td><?php echo $rows['otherincome'];?></td>
            <td><?php echo $rows['cname'];?></td>
            <td><?php echo $rows['cblockno'];?></td>
            <td><?php echo $rows['cbuildingname'];?></td>
            <td><?php echo $rows['cstreetname'];?></td>
            <td><?php echo $rows['ccity'];?></td>
            <td><?php echo $rows['cdistrict'];?></td>
            <td><?php echo $rows['cpincode'];?></td>
            <td><?php echo $rows['yrsinoccupation'];?></td>
            <td><?php echo $rows['retairementage'];?></td>
            <td><?php echo $rows['totalexp'];?></td>
            <td><?php echo $rows['eid'];?></td>
            <td><?php echo $rows['edepartment'];?></td>
            <td><?php echo $rows['edesignation'];?></td>
            <td><?php echo $rows['nameofaccholder'];?></td>
            <td><?php echo $rows['bankname'];?></td>
            <td><?php echo $rows['branchname'];?></td>
            <td><?php echo $rows['accountnumber'];?></td>
            <td><?php echo $rows['accopeningdate'];?></td>
            <td><?php echo $rows['micr'];?></td>
            <td><?php echo $rows['ifsc'];?></td>
            <td><?php echo $rows['photograph'];?></td>
            <td><?php echo $rows['signature'];?></td>
            <td><?php echo $rows['adharcard'];?></td>
            <td><?php echo $rows['pancard'];?></td>
            <td><?php echo $rows['lb1'];?></td>
            <td><?php echo $rows['lb2'];?></td>
            <td><?php echo $rows['lb3'];?></td>
            <td><?php echo $rows['ss1'];?></td>
            <td><?php echo $rows['ss2'];?></td>
            <td><?php echo $rows['ss3'];?></td>
            <td><?php echo $rows['itr1'];?></td>
            <td><?php echo $rows['itr2'];?></td>
            <td><?php echo $rows['itr3'];?></td>
            <td><?php echo $rows['rentagreement'];?></td>
            <td><?php echo $rows['ownerpermission'];?></td>
            <td><?php echo $rows['term'];?></td>
            <td><?php echo $rows['installments'];?></td>
            <td><?php echo $rows['sd'];?></td>
            <td><?php echo $rows['dd'];?></td>
            <td><?php echo $rows['rateopt'];?></td>
            <td><?php echo $rows['chooseloantype'];?></td>
            <td><?php echo $rows['purposeofloan'];?></td>
            <td><?php echo $rows['ploatcost'];?></td>
            <td><?php echo $rows['totalpurchsecost'];?></td>
            <td><?php echo $rows['incidentalcost'];?></td>
            <td><?php echo $rows['othercost'];?></td>
            <td><?php echo $rows['marketvaluecost'];?></td>
            <td><?php echo $rows['loanos'];?></td>
            <td><?php echo $rows['totalreq'];?></td>
            <td><?php echo $rows['amountalreadyspent'];?></td>
            <td><?php echo $rows['loanreq'];?></td>
            <td><?php echo $rows['saving'];?></td>
            <td><?php echo $rows['disposal'];?></td>
            <td><?php echo $rows['sale'];?></td>
            <td><?php echo $rows['providentfund'];?></td>
            <td><?php echo $rows['estsoursefund'];?></td>
            <td><?php echo $rows['typeofproperty'];?></td>
            <td><?php echo $rows['pflatno'];?></td>
            <td><?php echo $rows['pbuildingname'];?></td>
            <td><?php echo $rows['pstreet'];?></td>
            <td><?php echo $rows['ptown'];?></td>
            <td><?php echo $rows['pdistrict'];?></td>
            <td><?php echo $rows['ppincode'];?></td>
            <td><?php echo $rows['natureofprop'];?></td>
            <td><?php echo $rows['areaofprop'];?></td>
            <td><?php echo $rows['buituparea'];?></td>
            <td><?php echo $rows['stageofconstruction'];?></td>
            <td><?php echo $rows['fdate'];?></td>
            <td><?php echo $rows['place'];?></td>
            <td><?php echo $rows['fsignature'];?></td>
            <td><?php echo $rows['currenttime'];?></td>
            <td>
                
                <a href="hdelete.php?id=<?php echo $rows['srno'];?>">delete</a>
                
            </td>
            
           
        </tr>
        <?php
            }
        ?>
        </table>
    </div>

</body>
</html>