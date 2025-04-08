-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 02, 2023 at 06:30 AM
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
-- Table structure for table `bloan`
--

CREATE TABLE `bloan` (
  `srno` int(11) NOT NULL,
  `title` varchar(25) NOT NULL,
  `fullname` text NOT NULL,
  `fathername` text NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(30) NOT NULL,
  `status` varchar(30) NOT NULL,
  `flatno` varchar(11) NOT NULL,
  `buildingname` varchar(25) NOT NULL,
  `streetname` varchar(25) NOT NULL,
  `city` varchar(15) NOT NULL,
  `districtname` varchar(30) NOT NULL,
  `pincode` varchar(10) NOT NULL,
  `phoneno` int(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `pancardno` varchar(25) NOT NULL,
  `aadhar` int(20) NOT NULL,
  `passportno` varchar(20) NOT NULL,
  `yearsatcurrentcity` date NOT NULL,
  `yearsatcurrentresi` date NOT NULL,
  `occupation` varchar(30) NOT NULL,
  `professional` varchar(30) NOT NULL,
  `typeofcomp` varchar(30) NOT NULL,
  `nature` varchar(30) NOT NULL,
  `prefix` varchar(30) NOT NULL,
  `typeofindustry` varchar(30) NOT NULL,
  `designation` varchar(25) NOT NULL,
  `tel` int(20) NOT NULL,
  `email1` varchar(25) NOT NULL,
  `name1` text NOT NULL,
  `panno1` varchar(25) NOT NULL,
  `contactdetails1` int(20) NOT NULL,
  `dob1` date NOT NULL,
  `edubackground1` varchar(30) NOT NULL,
  `profitsharing1` int(15) NOT NULL,
  `totalexperience1` int(15) NOT NULL,
  `name2` text NOT NULL,
  `panno2` varchar(20) NOT NULL,
  `contactdetails2` int(15) NOT NULL,
  `dob2` date NOT NULL,
  `edubackground2` text NOT NULL,
  `profitsharing2` int(15) NOT NULL,
  `totalexperience2` int(15) NOT NULL,
  `name3` text NOT NULL,
  `panno3` varchar(20) NOT NULL,
  `contactdetail3` int(15) NOT NULL,
  `dob3` date NOT NULL,
  `edubackground3` varchar(25) NOT NULL,
  `profitsharing3` int(15) NOT NULL,
  `totalexperience3` int(15) NOT NULL,
  `accholder` text NOT NULL,
  `branch` text NOT NULL,
  `accountnumber` int(25) NOT NULL,
  `ifsccode` varchar(20) NOT NULL,
  `micrcode` int(20) NOT NULL,
  `accountopeningdate` date NOT NULL,
  `photo` varchar(30) NOT NULL,
  `addharphoto` varchar(30) NOT NULL,
  `proofofcontinuity` varchar(30) NOT NULL,
  `proofofoffice` varchar(30) NOT NULL,
  `proofofqualification` varchar(30) NOT NULL,
  `loanagreement` varchar(30) NOT NULL,
  `proofofturnover` varchar(30) NOT NULL,
  `signproof` varchar(30) NOT NULL,
  `residenceproof` varchar(30) NOT NULL,
  `identityproof` varchar(30) NOT NULL,
  `postdatedcheque` varchar(30) NOT NULL,
  `acstatement` varchar(30) NOT NULL,
  `ecsmandate` varchar(30) NOT NULL,
  `intrestrate` int(15) NOT NULL,
  `processingcharges` int(15) NOT NULL,
  `detailsofsecurity` int(15) NOT NULL,
  `finaldate` varchar(30) NOT NULL,
  `finalplace` varchar(30) NOT NULL,
  `finalsign` varchar(30) NOT NULL,
  `currenttime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bloan`
--

INSERT INTO `bloan` (`srno`, `title`, `fullname`, `fathername`, `dob`, `gender`, `status`, `flatno`, `buildingname`, `streetname`, `city`, `districtname`, `pincode`, `phoneno`, `email`, `pancardno`, `aadhar`, `passportno`, `yearsatcurrentcity`, `yearsatcurrentresi`, `occupation`, `professional`, `typeofcomp`, `nature`, `prefix`, `typeofindustry`, `designation`, `tel`, `email1`, `name1`, `panno1`, `contactdetails1`, `dob1`, `edubackground1`, `profitsharing1`, `totalexperience1`, `name2`, `panno2`, `contactdetails2`, `dob2`, `edubackground2`, `profitsharing2`, `totalexperience2`, `name3`, `panno3`, `contactdetail3`, `dob3`, `edubackground3`, `profitsharing3`, `totalexperience3`, `accholder`, `branch`, `accountnumber`, `ifsccode`, `micrcode`, `accountopeningdate`, `photo`, `addharphoto`, `proofofcontinuity`, `proofofoffice`, `proofofqualification`, `loanagreement`, `proofofturnover`, `signproof`, `residenceproof`, `identityproof`, `postdatedcheque`, `acstatement`, `ecsmandate`, `intrestrate`, `processingcharges`, `detailsofsecurity`, `finaldate`, `finalplace`, `finalsign`, `currenttime`) VALUES
(1, 'Mr', '', '', '0000-00-00', 'male', 'Single', '', '', '', '', '', '', 0, '', '', 0, '', '0000-00-00', '0000-00-00', 'Salaried', 'Doctor', 'Pvt. Ltd.', 'Manufacturer', 'Pvt. Ltd.', 'Automobiles', '', 0, '', '', '', 0, '0000-00-00', '', 0, 0, '', '', 0, '0000-00-00', '', 0, 0, '', '', 0, '0000-00-00', '', 0, 0, '', '', 0, '', 0, '0000-00-00', 'D:TYBCAprojectNew folder	mpphp', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '2023-09-26 06:51:22'),
(2, 'Mr', '', '', '0000-00-00', 'male', 'Single', '', '', '', '', '', '', 0, '', '', 0, '', '0000-00-00', '0000-00-00', 'Salaried', 'Doctor', 'Pvt. Ltd.', 'Manufacturer', 'Pvt. Ltd.', 'Automobiles', '', 0, '', '', '', 0, '0000-00-00', '', 0, 0, '', '', 0, '0000-00-00', '', 0, 0, '', '', 0, '0000-00-00', '', 0, 0, '', '', 0, '', 0, '0000-00-00', 'D:TYBCAprojectNew folder	mpphp', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '2023-09-26 07:02:43'),
(3, 'Mr', '', '', '0000-00-00', 'male', 'Single', '', '', '', '', '', '', 0, '', '', 0, '', '0000-00-00', '0000-00-00', 'Salaried', 'Doctor', 'Pvt. Ltd.', 'Manufacturer', 'Pvt. Ltd.', 'Automobiles', '', 0, '', '', '', 0, '0000-00-00', '', 0, 0, '', '', 0, '0000-00-00', '', 0, 0, '', '', 0, '0000-00-00', '', 0, 0, '', '', 0, '', 0, '0000-00-00', 'D:TYBCAprojectNew folder	mpphp', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '2023-09-26 07:04:25'),
(4, 'Mr', '', '', '0000-00-00', 'male', 'Single', '', '', '', '', '', '', 0, '', '', 0, '', '0000-00-00', '0000-00-00', 'Salaried', 'Doctor', 'Pvt. Ltd.', 'Manufacturer', 'Pvt. Ltd.', 'Automobiles', '', 0, '', '', '', 0, '0000-00-00', '', 0, 0, '', '', 0, '0000-00-00', '', 0, 0, '', '', 0, '0000-00-00', '', 0, 0, '', '', 0, '', 0, '0000-00-00', 'D:TYBCAprojectNew folder	mpphp', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '2023-09-26 07:04:36'),
(5, 'Mr', '', '', '0000-00-00', 'male', 'Single', '', '', '', '', '', '', 0, '', '', 0, '', '0000-00-00', '0000-00-00', 'Salaried', 'Doctor', 'Pvt. Ltd.', 'Manufacturer', 'Pvt. Ltd.', 'Automobiles', '', 0, '', '', '', 0, '0000-00-00', '', 0, 0, '', '', 0, '0000-00-00', '', 0, 0, '', '', 0, '0000-00-00', '', 0, 0, '', '', 0, '', 0, '0000-00-00', 'D:TYBCAprojectNew folder	mpphp', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '2023-09-26 07:09:34'),
(6, 'Mr', '', '', '0000-00-00', 'male', 'Single', '', '', '', '', '', '', 0, '', '', 0, '', '0000-00-00', '0000-00-00', 'Salaried', 'Doctor', 'Pvt. Ltd.', 'Manufacturer', 'Pvt. Ltd.', 'Automobiles', '', 0, '', '', '', 0, '0000-00-00', '', 0, 0, '', '', 0, '0000-00-00', '', 0, 0, '', '', 0, '0000-00-00', '', 0, 0, '', '', 0, '', 0, '0000-00-00', 'D:TYBCAprojectNew folder	mpphp', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '2023-09-26 07:11:36'),
(7, 'Mr', '', '', '0000-00-00', 'male', 'Single', '', '', '', '', '', '', 0, '', '', 0, '', '0000-00-00', '0000-00-00', 'Salaried', 'Doctor', 'Pvt. Ltd.', 'Manufacturer', 'Pvt. Ltd.', 'Automobiles', '', 0, '', '', '', 0, '0000-00-00', '', 0, 0, '', '', 0, '0000-00-00', '', 0, 0, '', '', 0, '0000-00-00', '', 0, 0, '', '', 0, '', 0, '0000-00-00', 'D:TYBCAprojectNew folder	mpphp', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '2023-09-26 07:11:45'),
(8, 'Mr', '', '', '0000-00-00', 'male', 'Single', '', '', '', '', '', '', 0, '', '', 0, '', '0000-00-00', '0000-00-00', 'Salaried', 'Doctor', 'Pvt. Ltd.', 'Manufacturer', 'Pvt. Ltd.', 'Automobiles', '', 0, '', '', '', 0, '0000-00-00', '', 0, 0, '', '', 0, '0000-00-00', '', 0, 0, '', '', 0, '0000-00-00', '', 0, 0, '', '', 0, '', 0, '0000-00-00', 'D:TYBCAprojectNew folder	mpphp', 'D:TYBCAprojectNew folder	mpphp', 'D:TYBCAprojectNew folder	mpphp', 'D:TYBCAprojectNew folder	mpphp', 'D:TYBCAprojectNew folder	mpphp', 'D:TYBCAprojectNew folder	mpphp', 'D:TYBCAprojectNew folder	mpphp', 'D:TYBCAprojectNew folder	mpphp', 'D:TYBCAprojectNew folder	mpphp', 'D:TYBCAprojectNew folder	mpphp', 'D:TYBCAprojectNew folder	mpphp', 'D:TYBCAprojectNew folder	mpphp', 'D:TYBCAprojectNew folder	mpphp', 0, 0, 0, '', '', 'D:TYBCAprojectNew folder	mpphp', '2023-09-26 07:13:55'),
(9, 'Mr', '', '', '0000-00-00', 'male', 'Single', '', '', '', '', '', '', 0, '', '', 0, '', '0000-00-00', '0000-00-00', 'Salaried', 'Doctor', 'Pvt. Ltd.', 'Manufacturer', 'Pvt. Ltd.', 'Automobiles', '', 0, '', '', '', 0, '0000-00-00', '', 0, 0, '', '', 0, '0000-00-00', '', 0, 0, '', '', 0, '0000-00-00', '', 0, 0, '', '', 0, '', 0, '0000-00-00', '1.jpeg', 'goldform.html', 'admin.css', 'eloan.sql', 'admin.html', 'eloan.sql', 'businessloanpdf.pdf', 'me.jpg', 'bloan.sql', '001-Ram-Charit-Manas-Marathi.p', 'bloan.php', '', 'cal.html', 0, 0, 0, '', '', 'declaration.txt', '2023-09-26 08:37:07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bloan`
--
ALTER TABLE `bloan`
  ADD PRIMARY KEY (`srno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bloan`
--
ALTER TABLE `bloan`
  MODIFY `srno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
