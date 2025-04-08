<?php
    require('connection.php');
    $sql2="SELECT * FROM `bloan` ORDER BY srno";
    $result2=mysqli_query($con,$sql2);

    $con->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin business</title>
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
    
    <p>Business Loan Form Filled Details </p>
    <a href="bloan.php">
    <button type="button">Add</button></a>
    <table border=1>
        <tr>
            <div class="t1">
            <th>srno</th>
            <th>title</th>
            <th>fullname</th>
            <th>fathername</th>
            <th>dob</th>
            <th>gender</th>
            <th>status</th>
            <th>flatno</th>
            <th>buildingname</th>
            <th>city</th>
            <th>districtname</th>
            <th>pincode</th>
            <th>phoneno</th>
            <th>email</th>
            <th>pancardno</th>
            <th>aadhar</th>
            <th>passportno</th>
            <th>yearsatcurrentcity</th>
            <th>yearsatcurrentresi</th>
            <th>occupation</th>
            <th>professional</th></div>
            <th>typeofcomp</th>
            <th>nature</th>
            <th>prefix</th>
            <th>typeofindustry</th>
            <th>designation</th>
            <th>tel	</th>
            <th>email1</th>
            <th>name1</th>
            <th>panno1</th>
            <th>contactdetails1</th>
            <th>dob1</th>
            <th>edubackground1</th>
            <th>totalexperience1</th>
            <th>name2</th>
            <th>panno2</th>
            <th>contactdetails2</th>
            <th>dob2</th>
            <th>edubackground2</th>
            <th>profitsharing2</th>
            <th>totalexperience2</th>
            <th>name3</th>
            <th>panno3</th>
            <th>contactdetail3</th>
            <th>dob3</th>
            <th>edubackground3</th>
            <th>profitsharing3</th>
            <th>totalexperience3</th>
            <th>accholder</th>
            <th>branch</th>
            <th>accountnumber</th>
            <th>micrcode</th>
            <th>accountopeningdate</th>
            <th>photo</th>
            <th>addharphoto</th>
            <th>proofofcontinuity</th>
            <th>proofofoffice</th>
            <th>proofofqualification</th>
            <th>loanagreement</th>
            <th>proofofturnover</th>
            <th>residenceproof</th>
            <th>identityproof</th>
            <th>postdatedcheque</th>
            <th>acstatement</th>
            <th>ecsmandate</th>
            <th>intrestrate	</th>
            <th>processingcharges</th>
            <th>detailsofsecurity</th>
       
            
            <th>finaldate</th>
            <th>finalplace</th>
            <th>finalsign</th>
            <th>Action</th>
            
        </tr>
        <?php
        // LOOP TILL END OF DATA
        while($rows=$result2->fetch_assoc())
        {
    ?>
    <tr>
        <!-- FETCHING DATA FROM EACH
            ROW OF EVERY COLUMN -->
        <td><?php echo $rows['srno'];?></td>
        <td><?php echo $rows['title'];?></td>
        <td><?php echo $rows['fullname'];?></td>
        <td><?php echo $rows['fathername'];?></td>
        <td><?php echo $rows['dob'];?></td>
        <td><?php echo $rows['gender'];?></td>
        <td><?php echo $rows['status'];?></td>
        <td><?php echo $rows['flatno'];?></td>
        <td><?php echo $rows['buildingname'];?></td>
        <td><?php echo $rows['streetname'];?></td>
        <td><?php echo $rows['city'];?></td>
        <td><?php echo $rows['districtname'];?></td>
        <td><?php echo $rows['pincode'];?></td>
        <td><?php echo $rows['phoneno'];?></td>
        <td><?php echo $rows['email'];?></td>
        <td><?php echo $rows['pancardno'];?></td>
        <td><?php echo $rows['aadhar'];?></td>
        <td><?php echo $rows['passportno'];?></td>
        <td><?php echo $rows['yearsatcurrentcity'];?></td>
        <td><?php echo $rows['occupation'];?></td>
        <td><?php echo $rows['professional'];?></td>
        <td><?php echo $rows['typeofcomp'];?></td>
        <td><?php echo $rows['nature'];?></td>
        <td><?php echo $rows['prefix'];?></td>
        <td><?php echo $rows['typeofindustry'];?></td>
        <td><?php echo $rows['designation'];?></td>
        <td><?php echo $rows['tel'];?></td>
        <td><?php echo $rows['email1'];?></td>
        <td><?php echo $rows['name1'];?></td>
        <td><?php echo $rows['panno1'];?></td>
        <td><?php echo $rows['contactdetails1'];?></td>
        <td><?php echo $rows['dob1'];?></td>
        <td><?php echo $rows['edubackground1'];?></td>
        <td><?php echo $rows['totalexperience1'];?></td>
        <td><?php echo $rows['name2'];?></td>
        <td><?php echo $rows['panno2'];?></td>
        <td><?php echo $rows['contactdetails2'];?></td>
        <td><?php echo $rows['dob2'];?></td>
        <td><?php echo $rows['edubackground2'];?></td>
        <td><?php echo $rows['profitsharing2'];?></td>
        <td><?php echo $rows['totalexperience2'];?></td>
        <td><?php echo $rows['name3'];?></td>
        <td><?php echo $rows['panno3'];?></td>
        <td><?php echo $rows['contactdetail3'];?></td>
        <td><?php echo $rows['dob3'];?></td>
        <td><?php echo $rows['edubackground3'];?></td>
        <td><?php echo $rows['profitsharing3'];?></td>
        <td><?php echo $rows['totalexperience3'];?></td>
        <td><?php echo $rows['accholder'];?></td>
        <td><?php echo $rows['branch'];?></td>
        <td><?php echo $rows['accountnumber'];?></td>
        <td><?php echo $rows['micrcode'];?></td>
        <td><?php echo $rows['accountopeningdate'];?></td>
        <td><?php echo $rows['photo'];?></td>
        <td><?php echo $rows['addharphoto'];?></td>
        <td><?php echo $rows['proofofcontinuity'];?></td>
        <td><?php echo $rows['proofofoffice'];?></td>
        <td><?php echo $rows['proofofqualification'];?></td>
        <td><?php echo $rows['loanagreement'];?></td>
        <td><?php echo $rows['proofofturnover'];?></td>
        <td><?php echo $rows['residenceproof'];?></td>
    
        <td><?php echo $rows['identityproof'];?></td>
        <td><?php echo $rows['postdatedcheque'];?></td>
        <td><?php echo $rows['acstatement'];?></td>
        <td><?php echo $rows['ecsmandate'];?></td>
        <td><?php echo $rows['intrestrate'];?></td>
        <td><?php echo $rows['processingcharges'];?></td>
        <td><?php echo $rows['detailsofsecurity'];?></td>

    
        <td><?php echo $rows['finaldate'];?></td>
        <td><?php echo $rows['finalplace'];?></td>
        <td><?php echo $rows['finalsign'];?></td>
        <td>
            <a href="bdelete.php?id=<?php echo $rows['srno'];?>">delete</a>
            
        </td>
        
    </tr>
    <?php
        }
    ?>
    </table>
</div>
        
</body>
</html>