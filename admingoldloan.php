<?php
    require('connection.php');

  
    $sql3="SELECT * FROM `gloan` ORDER BY srno";
    $result3=mysqli_query($con,$sql3);

    $con->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>adminpage gold loan</title>
    <link rel="stylesheet" href="admin.css">
    <style>
        table{
            width:22850px;

        }
    </style>
      
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
        
        <p>Gold Loan Form Filled Details </p>
        <a href="goldform.php">
        <button type="button">Add</button></a>
        <table border=1>
            <tr>
                <div class="t1">
                <th>srno</th>
                <th>prefix</th>
                <th>name</th>
                <th>flatno1</th>
                <th>buildingpremisesname1</th>
                <th>streetroadname1</th>
                <th>towncityvillagename1</th>
                <th>district1</th>
                <th>pincode1</th>
                <th>flatno2</th>
                <th>buildingpremisesname2</th>
                <th>streetroadname2</th>
                <th>towncityvillagename2</th>
                <th>district2</th>
                <th>pincode2</th>
                <th>std</th>
                <th>tel</th>
                <th>mob</th>
                <th>email</th>
                <th>dob</th></div>
                <th>gender</th>
                <th>status</th>
                <th>income</th>
                <th>pan</th>
                <th>religion</th>
                <th>caste</th>
                <th>Salaried</th>
                <th>self-employed</th>
                <th>lo</th>
                <th>purposeofloan</th>
                <th>accholdername</th>
                <th>branchname</th>
                <th>accountno</th>
                <th>ifsccode</th>
                <th>micrcode</th>
                <th>accountopeningdate</th>
                <th>photo</th>

                <th>aadharcard</th>
                <th>drivinglicence</th>
                <th>votersid</th>
                <th>passport</th>
                <th>doc7</th>
                <th>signatureproof</th>
                <th>residenceproof</th>
                <th>amount</th>
                <th>intrest</th>
                <th>tenure</th>
                <th>rate</th>
                <th>nos</th>
                <th>nnot</th>
                <th>fdate</th>
                <th>place</th>
                <th>fsignature</th>
                <th>currenttime</th>
                <th>action</th>
                
            </tr>
            <?php
            // LOOP TILL END OF DATA
            while($rows=$result3->fetch_assoc())
            {
        ?>
        <tr >
            <!-- FETCHING DATA FROM EACH
                ROW OF EVERY COLUMN -->
            <td><?php echo $rows['srno'];?></td>
            <td><?php echo $rows['prefix'];?></td>
            <td><?php echo $rows['name'];?></td>
            <td><?php echo $rows['flatno1'];?></td>
            <td><?php echo $rows['buildingpremisesname1'];?></td>
            <td><?php echo $rows['streetroadname1'];?></td>
            <td><?php echo $rows['towncityvillagename1'];?></td>
            <td><?php echo $rows['district1'];?></td>
            <td><?php echo $rows['pincode1'];?></td>
            <td><?php echo $rows['flatno2'];?></td>
            <td><?php echo $rows['buildingpremisesname2'];?></td>
            <td><?php echo $rows['streetroadname2'];?></td>
            <td><?php echo $rows['towncityvillagename2'];?></td>
            <td><?php echo $rows['district2'];?></td>
            <td><?php echo $rows['pincode2'];?></td>
            <td><?php echo $rows['std'];?></td>
            <td><?php echo $rows['tel'];?></td>
            <td><?php echo $rows['mob'];?></td>
            <td><?php echo $rows['email'];?></td>
            <td><?php echo $rows['dob'];?></td>
            <td><?php echo $rows['gender'];?></td>
            <td><?php echo $rows['status'];?></td>
            <td><?php echo $rows['income'];?></td>
            <td><?php echo $rows['pan'];?></td>
            <td><?php echo $rows['religion'];?></td>
            <td><?php echo $rows['caste'];?></td>
            <td><?php echo $rows['Salaried'];?></td>
            <td><?php echo $rows['selfemployed'];?></td>
            <td><?php echo $rows['lo'];?></td>
            <td><?php echo $rows['purposeofloan'];?></td>
            <td><?php echo $rows['accholdername'];?></td>
            <td><?php echo $rows['branchname'];?></td>
            <td><?php echo $rows['accountno'];?></td>
            <td><?php echo $rows['ifsccode'];?></td>
            <td><?php echo $rows['micrcode'];?></td>
            <td><?php echo $rows['accountopeningdate'];?></td>
            <td><?php echo $rows['photo'];?></td>
            <td><?php echo $rows['aadharcard'];?></td>
            <td><?php echo $rows['drivinglicence'];?></td>
            <td><?php echo $rows['votersid'];?></td>
            <td><?php echo $rows['passport'];?></td>
            <td><?php echo $rows['doc7'];?></td>
            <td><?php echo $rows['signatureproof'];?></td>
            <td><?php echo $rows['residenceproof'];?></td>
            <td><?php echo $rows['amount'];?></td>
            <td><?php echo $rows['intrest'];?></td>
            <td><?php echo $rows['tenure'];?></td>
            <td><?php echo $rows['rate'];?></td>
            <td><?php echo $rows['nos'];?></td>
            <td><?php echo $rows['nnot'];?></td>
            <td><?php echo $rows['fdate'];?></td>
            <td><?php echo $rows['place'];?></td>
            <td><?php echo $rows['fsignature'];?></td>

            <td><?php echo $rows['currenttime'];?></td>
            <td>
                <a href="gdelete.php?id=<?php echo $rows['srno'];?>">delete</a>
                
            </td>
           
            
        </tr>
        <?php
            }
        ?>
        </table>
    </div>
   

</body>
</html>