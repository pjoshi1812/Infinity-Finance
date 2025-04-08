-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 12, 2023 at 05:23 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loan`
--

-- --------------------------------------------------------

--
-- Table structure for table `hloan`
--

CREATE TABLE `hloan` (
  `srno` int(3) NOT NULL,
  `prefix` text NOT NULL,
  `name` text NOT NULL,
  `mothername` text NOT NULL,
  `fathername` text NOT NULL,
  `flatno` int(3) NOT NULL,
  `buildingname` text NOT NULL,
  `streetname` text NOT NULL,
  `city` text NOT NULL,
  `districtname` text NOT NULL,
  `pincode` int(10) NOT NULL,
  `currentaddressis` text NOT NULL,
  `phno` int(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `dob` date NOT NULL,
  `age` int(2) NOT NULL,
  `gender` text NOT NULL,
  `maritualstatus` text NOT NULL,
  `numberofdependent` int(1) NOT NULL,
  `panno` varchar(10) NOT NULL,
  `udi` int(16) NOT NULL,
  `religion` text NOT NULL,
  `occupation` text NOT NULL,
  `monthlyincome` int(6) NOT NULL,
  `otherincome` int(6) NOT NULL,
  `cname` text NOT NULL,
  `cblockno` int(3) NOT NULL,
  `cbuildingname` text NOT NULL,
  `cstreetname` text NOT NULL,
  `ccity` text NOT NULL,
  `cdistrict` text NOT NULL,
  `cpincode` int(10) NOT NULL,
  `yrsinoccupation` int(2) NOT NULL,
  `retairementage` int(2) NOT NULL,
  `totalexp` int(2) NOT NULL,
  `eid` int(3) NOT NULL,
  `edepartment` text NOT NULL,
  `edesignation` text NOT NULL,
  `nameofaccholder` text NOT NULL,
  `bankname` text NOT NULL,
  `branchname` text NOT NULL,
  `accountnumber` int(15) NOT NULL,
  `accopeningdate` date NOT NULL,
  `micr` int(10) NOT NULL,
  `ifsc` varchar(11) NOT NULL,
  `photograph` varchar(20) NOT NULL,
  `signature` varchar(20) NOT NULL,
  `adharcard` varchar(20) NOT NULL,
  `pancard` varchar(20) NOT NULL,
  `lb1` varchar(20) NOT NULL,
  `lb2` varchar(20) NOT NULL,
  `lb3` varchar(20) NOT NULL,
  `ss1` varchar(20) NOT NULL,
  `ss2` varchar(20) NOT NULL,
  `ss3` varchar(20) NOT NULL,
  `itr1` varchar(20) NOT NULL,
  `itr2` varchar(20) NOT NULL,
  `itr3` varchar(20) NOT NULL,
  `rentagreement` varchar(20) NOT NULL,
  `ownerpermission` varchar(20) NOT NULL,
  `amount` int(9) NOT NULL,
  `term` year(4) NOT NULL,
  `installments` int(9) NOT NULL,
  `sd` date NOT NULL,
  `dd` date NOT NULL,
  `rateopt` text NOT NULL,
  `chooseloantype` text NOT NULL,
  `purposeofloan` text NOT NULL,
  `ploatcost` int(9) NOT NULL,
  `totalpurchsecost` int(9) NOT NULL,
  `incidentalcost` int(9) NOT NULL,
  `othercost` int(9) NOT NULL,
  `marketvaluecost` int(9) NOT NULL,
  `loanos` int(9) NOT NULL,
  `totalreq` int(9) NOT NULL,
  `amountalreadyspent` int(9) NOT NULL,
  `loanreq` int(9) NOT NULL,
  `saving` int(9) NOT NULL,
  `disposal` int(9) NOT NULL,
  `sale` int(9) NOT NULL,
  `providentfund` int(9) NOT NULL,
  `estsoursefund` int(9) NOT NULL,
  `typeofproperty` text NOT NULL,
  `pflatno` int(3) NOT NULL,
  `pbuildingname` text NOT NULL,
  `pstreet` text NOT NULL,
  `ptown` text NOT NULL,
  `pdistrict` text NOT NULL,
  `ppincode` int(10) NOT NULL,
  `natureofprop` text NOT NULL,
  `areaofprop` int(6) NOT NULL,
  `buituparea` int(6) NOT NULL,
  `stageofconstruction` text NOT NULL,
  `fdate` date NOT NULL,
  `place` text NOT NULL,
  `fsignature` varchar(20) NOT NULL,
  `currenttime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hloan`
--

INSERT INTO `hloan` (`srno`, `prefix`, `name`, `mothername`, `fathername`, `flatno`, `buildingname`, `streetname`, `city`, `districtname`, `pincode`, `currentaddressis`, `phno`, `email`, `dob`, `age`, `gender`, `maritualstatus`, `numberofdependent`, `panno`, `udi`, `religion`, `occupation`, `monthlyincome`, `otherincome`, `cname`, `cblockno`, `cbuildingname`, `cstreetname`, `ccity`, `cdistrict`, `cpincode`, `yrsinoccupation`, `retairementage`, `totalexp`, `eid`, `edepartment`, `edesignation`, `nameofaccholder`, `bankname`, `branchname`, `accountnumber`, `accopeningdate`, `micr`, `ifsc`, `photograph`, `signature`, `adharcard`, `pancard`, `lb1`, `lb2`, `lb3`, `ss1`, `ss2`, `ss3`, `itr1`, `itr2`, `itr3`, `rentagreement`, `ownerpermission`, `amount`, `term`, `installments`, `sd`, `dd`, `rateopt`, `chooseloantype`, `purposeofloan`, `ploatcost`, `totalpurchsecost`, `incidentalcost`, `othercost`, `marketvaluecost`, `loanos`, `totalreq`, `amountalreadyspent`, `loanreq`, `saving`, `disposal`, `sale`, `providentfund`, `estsoursefund`, `typeofproperty`, `pflatno`, `pbuildingname`, `pstreet`, `ptown`, `pdistrict`, `ppincode`, `natureofprop`, `areaofprop`, `buituparea`, `stageofconstruction`, `fdate`, `place`, `fsignature`, `currenttime`) VALUES
(41, 'Ms', 'prajakta', '', '', 0, '', '', '', '', 0, '', 0, '', '0000-00-00', 0, '', '', 0, '', 0, '', '', 0, 0, '', 0, '', '', '', '', 0, 0, 0, 0, 0, '', '', '', '', '', 0, '0000-00-00', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '0000', 0, '0000-00-00', '0000-00-00', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, '', '', '', '', 0, 'Array', 0, 0, '', '0000-00-00', '', '', '2023-10-03 09:34:07'),
(42, 'Ms', 'prajakta', '', '', 0, '', '', '', '', 0, '', 0, '', '0000-00-00', 0, '', '', 0, '', 0, '', '', 0, 0, '', 0, '', '', '', '', 0, 0, 0, 0, 0, '', '', '', '', '', 0, '0000-00-00', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '0000', 0, '0000-00-00', '0000-00-00', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, '', '', '', '', 0, 'Array', 0, 0, '', '0000-00-00', '', '', '2023-10-03 09:34:28'),
(43, 'Ms', 'Prajakta Joshi', 'sumedha', 'rajaram', 0, 'abc', 'Pune', 'Pune', 'maharastra', 4110303, 'on', 2147483647, 'prajaktajoshi2003@gmail.com', '2003-12-18', 19, 'on', 'on', 0, 'ABCPS1234A', 11112222, 'Hindu', '', 800000, 200000, '9657236189', 0, 'tcs', 'Pune', 'Pune', 'maharastra', 4110303, 12, 60, 12, 101, 'IT', 'Software Eng', 'Prajakta Joshi', 'Infinity bank', 'tilak road', 2147483647, '2023-09-13', 2147483647, '123456789', 'agriculture.pdf', 'agriculture.pdf', 'agriculture.pdf', 'agriculture.pdf', 'Aadhar_Card.pdf', 'Aadhar_Card.pdf', 'Aadhar_Card.pdf', 'Aadhar_Card.pdf', 'Aadhar_Card.pdf', 'Aadhar_Card.pdf', 'Aadhar_Card.pdf', 'Aadhar_Card.pdf', 'Aadhar_Card.pdf', 'Aadhar_Card.pdf', 'Aadhar_Card.pdf', 2147483647, '2012', 50000, '2023-10-13', '2023-10-15', 'on', 'on', 'on', 10000, 756333, 100000, 760000, 741111, 9652222, 7552222, 752220, 789654, 741236, 78965412, 4563258, 789654123, 78965412, 'on', 12, 'ramshyam', 'tilak road', 'pune', 'maharashtra', 4110303, 'Array', 789654, 78965412, 'none', '2023-10-12', 'pune', 'agriculture.pdf', '2023-10-12 14:05:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hloan`
--
ALTER TABLE `hloan`
  ADD PRIMARY KEY (`srno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hloan`
--
ALTER TABLE `hloan`
  MODIFY `srno` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
