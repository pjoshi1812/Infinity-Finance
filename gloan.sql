-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 12, 2023 at 05:22 PM
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
-- Table structure for table `gloan`
--

CREATE TABLE `gloan` (
  `srno` int(11) NOT NULL,
  `prefix` text NOT NULL,
  `name` varchar(20) NOT NULL,
  `flatno1` varchar(5) NOT NULL,
  `buildingpremisesname1` text NOT NULL,
  `streetroadname1` text NOT NULL,
  `towncityvillagename1` text NOT NULL,
  `district1` text NOT NULL,
  `pincode1` int(10) NOT NULL,
  `flatno2` varchar(5) NOT NULL,
  `buildingpremisesname2` text NOT NULL,
  `streetroadname2` text NOT NULL,
  `towncityvillagename2` text NOT NULL,
  `district2` text NOT NULL,
  `pincode2` int(10) NOT NULL,
  `std` int(5) NOT NULL,
  `tel` int(8) NOT NULL,
  `mob` int(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `dob` date NOT NULL,
  `gender` text NOT NULL,
  `status` text NOT NULL,
  `income` varchar(15) NOT NULL,
  `pan` varchar(10) NOT NULL,
  `religion` text NOT NULL,
  `caste` text NOT NULL,
  `Salaried` text NOT NULL,
  `selfemployed` text NOT NULL,
  `lo` text NOT NULL,
  `purposeofloan` varchar(50) NOT NULL,
  `accholdername` text NOT NULL,
  `branchname` varchar(15) NOT NULL,
  `accountno` int(15) NOT NULL,
  `ifsccode` varchar(11) NOT NULL,
  `micrcode` int(9) NOT NULL,
  `accountopeningdate` date NOT NULL,
  `photo` varchar(200) NOT NULL,
  `aadharcard` varchar(15) NOT NULL,
  `drivinglicence` varchar(15) NOT NULL,
  `votersid` varchar(15) NOT NULL,
  `passport` varchar(15) NOT NULL,
  `doc7` varchar(15) NOT NULL,
  `signatureproof` varchar(15) NOT NULL,
  `residenceproof` varchar(15) NOT NULL,
  `amount` varchar(9) NOT NULL,
  `intrest` varchar(3) NOT NULL,
  `tenure` int(2) NOT NULL,
  `rate` int(2) NOT NULL,
  `nos` varchar(10) NOT NULL,
  `nnot` varchar(10) NOT NULL,
  `fdate` date NOT NULL,
  `place` text NOT NULL,
  `fsignature` varchar(15) NOT NULL,
  `currenttime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gloan`
--

INSERT INTO `gloan` (`srno`, `prefix`, `name`, `flatno1`, `buildingpremisesname1`, `streetroadname1`, `towncityvillagename1`, `district1`, `pincode1`, `flatno2`, `buildingpremisesname2`, `streetroadname2`, `towncityvillagename2`, `district2`, `pincode2`, `std`, `tel`, `mob`, `email`, `dob`, `gender`, `status`, `income`, `pan`, `religion`, `caste`, `Salaried`, `selfemployed`, `lo`, `purposeofloan`, `accholdername`, `branchname`, `accountno`, `ifsccode`, `micrcode`, `accountopeningdate`, `photo`, `aadharcard`, `drivinglicence`, `votersid`, `passport`, `doc7`, `signatureproof`, `residenceproof`, `amount`, `intrest`, `tenure`, `rate`, `nos`, `nnot`, `fdate`, `place`, `fsignature`, `currenttime`) VALUES
(50, 'Mrs', 'Anita Vijay Joshi', '108', 'Prathmesh Apartment', 'Sinhagad Road', 'Pune', 'Pune', 4110303, '301', 'PSIF pvt.ltd.', 'Hinjewadi', 'Pune', 'Pune', 411045, 220, 24456682, 2147483647, 'anitajoshi12@gmail.com', '1967-08-11', 'female', 'Married', '60000-120000', 'NCPJ34429	', 'hindu', 'OPEN', 'Private', 'CA/CS/Doctor', 'on', 'Marriage', 'Anita Vijay Joshi', 'Karve Road', 2147483647, 'BKID0000505', 411240055, '2013-09-12', 'Aadhar_Card.pdf', 'Aadhar_Card.pdf', 'Aadhar_Card.pdf', 'agriculture.pdf', 'Aadhar_Card.pdf', 'Aadhar_Card.pdf', 'Aadhar_Card.pdf', 'Aadhar_Card.pdf', '6000000', 'on', 24, 8, 'cash', 'rtgs', '2023-10-03', 'Pune', 'agriculture.pdf', '2023-10-03 09:36:03'),
(51, 'Mrs', 'Anita Vijay Joshi', '108', 'Prathmesh Apartment', 'Sinhagad Road', 'Pune', 'Pune', 4110303, '301', 'PSIF pvt.ltd.', 'Hinjewadi', 'Pune', 'Pune', 411045, 220, 24456682, 2147483647, 'anitajoshi12@gmail.com', '1967-08-11', 'female', 'Married', '60000-120000', 'NCPJ34429	', 'hindu', 'OPEN', 'Private', 'CA/CS/Doctor', 'on', 'Marriage', 'Anita Vijay Joshi', 'Karve Road', 2147483647, 'BKID0000505', 411240055, '2013-09-12', 'agriculture.pdf', 'agriculture.pdf', 'agriculture.pdf', 'agriculture.pdf', 'agriculture.pdf', 'agriculture.pdf', 'agriculture.pdf', 'agriculture.pdf', '6000000', 'on', 24, 8, 'cash', 'rtgs', '2023-10-12', 'Pune', 'agriculture.pdf', '2023-10-12 14:40:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gloan`
--
ALTER TABLE `gloan`
  ADD PRIMARY KEY (`srno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gloan`
--
ALTER TABLE `gloan`
  MODIFY `srno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
