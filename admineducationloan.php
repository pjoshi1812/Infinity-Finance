<?php
    require('connection.php');
   
    $sql2="SELECT * FROM `eloan` ORDER BY srno";
    $result2=mysqli_query($con,$sql2);

   

    $con->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin education</title>
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
    
        <p>Education Loan Form Filled Details </p>
        <a href="eloan.php">
        <button type="button">Add</button></a>
        <table border=1>
            <tr>
                <div class="t1">
                <th>srno</th>
                <th>prefix</th>
                <th>fullname</th>
                <th>mothername</th>
                <th>fathername</th>
                <th>flatno</th>
                <th>buildingname</th>
                <th>streetname</th>
                <th>city</th>
                <th>districtname</th>
                <th>pincode</th>
                <th>phoneno</th>
                <th>email</th>
                <th>pancardno</th>
                <th>aadhar</th>
                <th>passportno</th>
                <th>exampasseda</th>
                <th>universitynamea</th>
                <th>mediuma</th>
                <th>yearofpassinga</th></div>
                <th>attempta</th>
                <th>aggregatea</th>
                <th>percentagea</th>
                <th>exampassedb</th>
                <th>universitynameb</th>
                <th>mediumb</th>
                <th>yearofpassingb</th>
                <th>attemptb</th>
                <th>aggregateb</th>
                <th>percentageb</th>
                <th>exampassedc</th>
                <th>universitynamec</th>
                <th>mediumc</th>
                <th>yearofpassingc</th>
                <th>attemptc</th>
                <th>aggregatec</th>
                <th>percentagec</th>
                <th>collegenameaddr</th>
                <th>uniname</th>
                <th>accholder</th>
                <th>branch</th>
                <th>accountnumber</th>
                <th>ifsccode</th>
                <th>micrcode</th>
                <th>accountopeningdate</th>
                <th>photo</th>
                <th>aadharphoto</th>
                <th>addmissionletter</th>
                <th>ssc</th>
                <th>hsc</th>
                <th>graduation</th>
                <th>ageproof</th>
                <th>signproof</th>
                <th>residenceproof</th>
                <th>identityproof</th>
                <th>coursefee</th>
                <th>feepersemester</th>
                <th>noofsemester</th>
                <th>accomodationfee	</th>
                <th>expense</th>
                <th>travelexpense</th>
                <th>cautiondeposit</th>
                <th>total</th>
                <th>dd</th>
                <th>neft</th>
                <th>universityaccountnumber	</th>
                <th>fdate</th>
                <th>place</th>
                <th>fsignature</th>
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
            <td><?php echo $rows['prefix'];?></td>
            <td><?php echo $rows['fullname'];?></td>
            <td><?php echo $rows['mothername'];?></td>
            <td><?php echo $rows['fathername'];?></td>
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
            <td><?php echo $rows['exampasseda'];?></td>
            <td><?php echo $rows['universitynamea'];?></td>
            <td><?php echo $rows['mediuma'];?></td>
            <td><?php echo $rows['yearofpassinga'];?></td>
            <td><?php echo $rows['attempta'];?></td>
            <td><?php echo $rows['aggregatea'];?></td>
            <td><?php echo $rows['percentagea'];?></td>
            <td><?php echo $rows['exampassedb'];?></td>
            <td><?php echo $rows['universitynameb'];?></td>
            <td><?php echo $rows['mediumb'];?></td>
            <td><?php echo $rows['yearofpassingb'];?></td>
            <td><?php echo $rows['attemptb'];?></td>
            <td><?php echo $rows['aggregateb'];?></td>
            <td><?php echo $rows['percentageb'];?></td>
            <td><?php echo $rows['exampassedc'];?></td>
            <td><?php echo $rows['universitynamec'];?></td>
            <td><?php echo $rows['mediumc'];?></td>
            <td><?php echo $rows['yearofpassingc'];?></td>
            <td><?php echo $rows['attemptc'];?></td>
            <td><?php echo $rows['aggregatec'];?></td>
            <td><?php echo $rows['percentagec'];?></td>
            <td><?php echo $rows['collegenameaddr'];?></td>
            <td><?php echo $rows['uniname'];?></td>
            <td><?php echo $rows['accholder'];?></td>
            <td><?php echo $rows['branch'];?></td>
            <td><?php echo $rows['accountnumber'];?></td>
            <td><?php echo $rows['ifsccode'];?></td>
            <td><?php echo $rows['micrcode'];?></td>
            <td><?php echo $rows['accountopeningdate'];?></td>
            <td><?php echo $rows['photo'];?></td>
            <td><?php echo $rows['aadharphoto'];?></td>
            <td><?php echo $rows['addmissionletter'];?></td>
            <td><?php echo $rows['ssc'];?></td>
            <td><?php echo $rows['hsc'];?></td>
            <td><?php echo $rows['graduation'];?></td>
            <td><?php echo $rows['ageproof'];?></td>
            <td><?php echo $rows['signproof'];?></td>
            <td><?php echo $rows['residenceproof'];?></td>
            <td><?php echo $rows['identityproof'];?></td>
            <td><?php echo $rows['coursefee'];?></td>
            <td><?php echo $rows['feepersemester'];?></td>
            <td><?php echo $rows['noofsemester'];?></td>
            <td><?php echo $rows['accomodationfee'];?></td>
            <td><?php echo $rows['expense'];?></td>
            <td><?php echo $rows['travelexpense'];?></td>
            <td><?php echo $rows['cautiondeposit'];?></td>
            <td><?php echo $rows['total'];?></td>
            <td><?php echo $rows['dd'];?></td>
            <td><?php echo $rows['neft'];?></td>
            <td><?php echo $rows['universityaccountnumber'];?></td>
            <td><?php echo $rows['fdate'];?></td>
            <td><?php echo $rows['place'];?></td>
            <td><?php echo $rows['fsignature'];?></td>
            <td>
                <a href="edelete.php?id=<?php echo $rows['srno'];?>">delete</a>
                
            </td>
            
        </tr>
        <?php
            }
        ?>
        </table>
    </div>

    </body>
</html>