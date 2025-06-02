-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2024 at 06:42 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sellerms`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_information`
--

CREATE TABLE `contact_information` (
  `ID` int(4) NOT NULL,
  `Full_Name` varchar(30) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Telephone` int(15) NOT NULL,
  `Mobile` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_information`
--

INSERT INTO `contact_information` (`ID`, `Full_Name`, `Email`, `Telephone`, `Mobile`) VALUES
(45, 'Dinuka D. Kirindage', 'dinukadk@gmail.com', 742325758, '0752325758'),
(46, 'sfdg', 'fhfh@gmail.com', 54535, '1655244'),
(47, 'sfdg', 'fhfh@gmail.com', 54535, '1655244'),
(48, 'sfdg', 'fhfh@gmail.com', 54535, '1655244'),
(49, 'sfdg', 'fhfh@gmail.com', 54535, '1655244'),
(50, 'sdfsdfsd', 'fhfh@gmail.codsfdm', 5453524, '16552445345'),
(51, 'dfg uchg', 'fhfh@gmail.com', 742325758, '1655244'),
(52, 'dfg uchg', 'fhfh@gmail.com', 742325758, '1655244'),
(53, 'dfg uchg', 'fhfh@gmail.com', 742325758, '1655244'),
(54, 'dfg uchg', 'fhfh@gmail.com', 742325758, '1655244'),
(55, 'dfg uchg', 'fhfh@gmail.com', 742325758, '1655244'),
(56, 'dfg uchg', 'fhfh@gmail.com', 742325758, '1655244'),
(57, 'dfg uchg', 'fhfh@gmail.com', 742325758, '1655244'),
(58, 'dfg uchg', 'fhfh@gmail.com', 742325758, '1655244'),
(59, 'dfg uchg', 'fhfh@gmail.com', 742325758, '1655244'),
(60, 'dfg uchg', 'fhfh@gmail.com', 742325758, '1655244'),
(61, 'dfg uchg', 'fhfh@gmail.com', 51454865, '36878948'),
(62, 'aaaaaaaaaaaaaaaaaaaaaaaa', 'aaaaaaaaa@aaa.aa', 2147483647, '6666666666666'),
(63, 'aaaaaaaaaaaaaaaaaaaaaaaa', 'aaaaaaaaa@aaa.aa', 2147483647, '6666666666666'),
(64, '', '', 0, ''),
(65, 'Dinuka D. Kirindage', 'dinukadkirindage@gmail.com', 4628763, '23678967'),
(66, 'Dinuka D. Kirindage', 'dinukadkirindage@gmail.com', 4628763, '23678967'),
(67, 'dsfhjsdfds', 'dfusdhfsdj@gmail.com', 2147483647, '982264684'),
(68, 'Dinuka D. Kirindage', 'fhfh@gmail.com', 742325758, '0752325758'),
(69, 'jfjdhfuh ', 'dfd@ysgfyh.dsf', 2682874, '1654'),
(70, 'cccccccccccccccccccccccccccccc', 'ccccccccccccccccccc@gmail.com', 2365488, '36186415'),
(71, 'Dinuka D. Kirindage', 'dinukadk@gmail.com', 742325758, '0752325758'),
(72, 'dgfdg', 'sdg@gmial.com', 2682874, '1654'),
(73, 'jfjdhfuh ', 'dinukadk@gmail.com', 2147483647, '62468489'),
(74, 'hvhjhs', 'jkxcjx@gmail.com', 0, 'djnvsldk');

-- --------------------------------------------------------

--
-- Table structure for table `land_information`
--

CREATE TABLE `land_information` (
  `Land_ID` int(4) NOT NULL,
  `Description` varchar(150) NOT NULL,
  `City/Town` varchar(10) NOT NULL,
  `Location` varchar(50) NOT NULL,
  `Extent` int(3) NOT NULL,
  `Price` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `land_information`
--

INSERT INTO `land_information` (`Land_ID`, `Description`, `City/Town`, `Location`, `Extent`, `Price`) VALUES
(48, 'sssvbhjjj jhmnbh bkyuhkjysssvbhjjj jhmnbh bkyuhkjysssvbhjjj jhmnbh bkyuhkjysssvbhjjj jhmnbh bkyuhkjy', 'badulla', 'ertvevwf', 12, '333333333333333'),
(49, 'sssvbhjjj jhmnbh bkyuhkjysssvbhjjj jhmnbh bkyuhkjysssvbhjjj jhmnbh bkyuhkjysssvbhjjj jhmnbh bkyuhkjy', 'badulla', 'ertvevwf', 12, '333333333333333'),
(50, 'sssvbhjjj jhmnbh bkyuhkjysssvbhjjj jhmnbh bkyuhkjysssvbhjjj jhmnbh bkyuhkjysssvbhjjj jhmnbh bkyuhkjy', 'badulla', 'ertvevwf', 12, '333333333333333'),
(51, 'sssvbhjjj jhmnbh bkyuhkjysssvbhjjj jhmnbh bkyuhkjysssvbhjjj jhmnbh bkyuhkjysssvbhjjj jhmnbh bkyuhkjy', 'badulla', 'ertvevwf', 12, '333333333333333'),
(52, 'sssvbhjjj jhmgh fghfghfdcgfgrfnbh bkyuhkjysssvbhjjj jhmnbh bkyuhkjysssvbhjjj jhmnbh bkyuhkjysssvbhjjj jhmnbh bkyuhkjy', 'badullarg', 'ertvevwffdgdfnb ghbgh', 125, '333334444443'),
(53, 'csdfuygxysud fguyndcsuyfdxd suymxfg', 'badulla', 'pinnaduwa, walahanduwa, galle.', 12, '5000000'),
(54, 'csdfuygxysud fguyndcsuyfdxd suymxfg', 'badulla', 'pinnaduwa, walahanduwa, galle.', 12, '5000000'),
(55, 'csdfuygxysud fguyndcsuyfdxd suymxfg', 'badulla', 'pinnaduwa, walahanduwa, galle.', 12, '5000000'),
(56, 'csdfuygxysud fguyndcsuyfdxd suymxfg', 'badulla', 'pinnaduwa, walahanduwa, galle.', 12, '5000000'),
(58, 'csdfuygxysud fguyndcsuyfdxd suymxfg', 'badulla', 'pinnaduwa, walahanduwa, galle.', 12, '5000000'),
(59, 'csdfuygxysud fguyndcsuyfdxd suymxfg', 'badulla', 'pinnaduwa, walahanduwa, galle.', 12, '5000000'),
(60, 'csdfuygxysud fguyndcsuyfdxd suymxfg', 'badulla', 'pinnaduwa, walahanduwa, galle.', 12, '5000000'),
(63, 'dsfhbds dsfbmusydghfuy sydiufxgmysuhf uyfgxnsdyfh sdyufxjsu sdofuim', 'badulla', 'sdgdfx.,sdfhxsudf,fxsjf', 12, '5000000'),
(66, '', '', '', 0, ''),
(67, 'hcfdsunfci ifunfciusdf iufnciu', 'galle', 'ertvevwf', 54, 'RS. 5000015'),
(68, 'hcfdsunfci ifunfciusdf iufnciu', 'galle', 'ertvevwf', 54, 'RS. 5000015');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_information`
--
ALTER TABLE `contact_information`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `land_information`
--
ALTER TABLE `land_information`
  ADD PRIMARY KEY (`Land_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_information`
--
ALTER TABLE `contact_information`
  MODIFY `ID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `land_information`
--
ALTER TABLE `land_information`
  MODIFY `Land_ID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
