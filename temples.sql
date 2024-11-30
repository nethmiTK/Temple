-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 30, 2024 at 11:10 AM
-- Server version: 8.2.0
-- PHP Version: 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `temples`
--

DELIMITER $$
--
-- Procedures
--
DROP PROCEDURE IF EXISTS `insert_user`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `insert_user` (IN `p_Full_Name` VARCHAR(70), IN `p_Email` VARCHAR(50), IN `p_Address` VARCHAR(70), IN `p_user_name` VARCHAR(20), IN `p_password` VARCHAR(20), IN `p_gender` VARCHAR(10), IN `p_type` VARCHAR(50), OUT `p_user_id` VARCHAR(20))   BEGIN
    DECLARE type_prefix CHAR(1);
    SET type_prefix = LEFT(p_type, 1);
    
    INSERT INTO `user` (Full_Name, Email, Address, user_name, password, gender, type)
    VALUES (p_Full_Name, p_Email, p_Address, p_user_name, p_password, p_gender, p_type);
    
    SET @last_id = LAST_INSERT_ID();
    SET p_user_id = CONCAT(type_prefix, '00', LPAD(@last_id, 2, '0'));
    UPDATE `user` SET user_id = p_user_id WHERE user_id IS NULL AND type = p_type;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `beneficiary`
--

DROP TABLE IF EXISTS `beneficiary`;
CREATE TABLE IF NOT EXISTS `beneficiary` (
  `BeneficiaryID` int NOT NULL,
  `BeneficiaryName` varchar(255) DEFAULT NULL,
  `BeneficiaryLocation` varchar(255) DEFAULT NULL,
  `ContactPhone` varchar(20) DEFAULT NULL,
  `user_id` int DEFAULT NULL,
  `rank` int NOT NULL,
  PRIMARY KEY (`BeneficiaryID`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `beneficiary`
--

INSERT INTO `beneficiary` (`BeneficiaryID`, `BeneficiaryName`, `BeneficiaryLocation`, `ContactPhone`, `user_id`, `rank`) VALUES
(2001, 'Nimal sudath', 'nugegoda road,colombo', '0777858263', 5, 2),
(2, 'ruwan predeep', 'nugegoda road,colombox', '0772516364', 2, 1),
(8, 'ruwan predeep', 'nugegoda road,colombox', '0772516364', 2, 1),
(5, 'ruwan sandeepa', 'ahngama road,galle', '0769238024', 5, 2),
(0, '', '', '', 0, 0),
(82, 'nuwangith', 'kalpada oad,panaptiya', '075896432', 5, 1),
(9, 'ruwan sampath', 'dehiwala road,colombo', '07524697', 2, 5),
(1004, 'ruwanjith kariyawasm', 'richmand road,galle', '0775896435', 2, 3),
(10000, 'ruwan kumara', 'galkaduwa road,panipitiya', '07129846589', 5, 2),
(1007, 'nuwanjith pushpakumara', 'nugegoda road,dehiwala', '075486315', 2, 1),
(2005, 'samrkn wishwjith', 'sin,n gernd,colombo', '077465078', 5, 2),
(1009, 'kalpani amarakon', 'waththala road,pannaitiya', '0782496758', 2, 2),
(2002, 'kalpa kodikara', 'wthala road,nuradpur', '075896325', 2, 2),
(3001, 'niroshan gamage', 'galle', '075893568', 8, 4),
(3005, 'ruwan pathmmakumara', 'galle', '075893454', 2, 2),
(3007, 'kasun anuthara', 'anuradapura', '05893548', 2, 2),
(1027, 'nuwangith', 'galle', '0777858263', 1027, 2);

-- --------------------------------------------------------

--
-- Table structure for table `beneficiarydonation`
--

DROP TABLE IF EXISTS `beneficiarydonation`;
CREATE TABLE IF NOT EXISTS `beneficiarydonation` (
  `BeneficiaryID` int NOT NULL,
  `DonationID` int NOT NULL,
  PRIMARY KEY (`BeneficiaryID`,`DonationID`),
  KEY `DonationID` (`DonationID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `donation`
--

DROP TABLE IF EXISTS `donation`;
CREATE TABLE IF NOT EXISTS `donation` (
  `DonationID` int NOT NULL AUTO_INCREMENT,
  `DonorID` int DEFAULT NULL,
  `DonorName` varchar(255) DEFAULT NULL,
  `DonorEmail` varchar(255) DEFAULT NULL,
  `DonationPurpose` varchar(255) DEFAULT NULL,
  `DonationAmount` decimal(10,2) DEFAULT NULL,
  `DonationDate` date DEFAULT NULL,
  `Reporting` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`DonationID`),
  KEY `DonorID` (`DonorID`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `donation`
--

INSERT INTO `donation` (`DonationID`, `DonorID`, `DonorName`, `DonorEmail`, `DonationPurpose`, `DonationAmount`, `DonationDate`, `Reporting`) VALUES
(1, NULL, 'hkj', 'ruwan@gmail.com', 'help', 6565.00, '2024-05-07', 1),
(2, NULL, 'hkj', 'ruwan@gmail.com', 'help', 6565.00, '2024-05-07', 1),
(3, NULL, 'hkj', 'ruwan@gmail.com', 'help', 6565.00, '2024-05-07', 1),
(4, NULL, 'kaweesha ', 'nuwa2@gmail.com', 'help', 250000.00, '2024-05-01', 1),
(5, 2, 'kaweesha ', 'nuwa2@gmail.com', 'help', 250000.00, '2024-05-01', 1),
(6, 2, 'kaweesha ', 'nuwa2@gmail.com', 'help', 25000.00, '2024-04-18', 1),
(7, 2, 'kaweesha ', 'nuwa2@gmail.com', 'help', 25000.00, '2024-04-18', 1),
(8, 2, 'kaweesha ', 'nuwa2@gmail.com', 'help', 25000.00, '2024-04-18', 1),
(9, 2, 'kaweesha ', 'nuwa2@gmail.com', 'help', 25000.00, '2024-04-18', 1),
(10, 2, 'kaweesha ', 'nuwa2@gmail.com', 'help', 25000.00, '2024-04-18', 1),
(11, 2, 'kaweesha ', 'nuwa2@gmail.com', 'help', 25000.00, '2024-04-18', 1),
(12, 2, 'kaweesha ', 'nuwa2@gmail.com', 'help', 25000.00, '2024-04-18', 1),
(13, 5, 'nethmi', 'ruwan@gmail.com', 'help', 500000.00, '2024-04-17', 1),
(14, 8585, 'sumudu', 'sumu55@gmail.com', 'help', 50000.00, '2024-04-29', 1),
(15, 8585, 'sumudu', 'sumu55@gmail.com', 'help', 50000.00, '2024-04-29', 1);

-- --------------------------------------------------------

--
-- Table structure for table `donationpass`
--

DROP TABLE IF EXISTS `donationpass`;
CREATE TABLE IF NOT EXISTS `donationpass` (
  `id` int NOT NULL AUTO_INCREMENT,
  `DonationAmount` decimal(10,2) NOT NULL,
  `DonationDate` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `donationpass`
--

INSERT INTO `donationpass` (`id`, `DonationAmount`, `DonationDate`) VALUES
(1, 2000.00, '0000-00-00'),
(2, 25000.00, '2024-04-28'),
(3, 1192695.00, '0000-00-00'),
(4, 25000.00, '2024-04-18'),
(5, 1192695.00, '0000-00-00'),
(6, 1192695.00, '0000-00-00'),
(7, 1174695.00, '0000-00-00'),
(8, 2500.00, '2024-04-28'),
(9, 1172195.00, '0000-00-00'),
(10, 1172190.00, '0000-00-00'),
(11, 25000.00, '2024-04-29'),
(12, 1147190.00, '0000-00-00'),
(13, 25000.00, '2024-04-24'),
(14, 1122190.00, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `festivals`
--

DROP TABLE IF EXISTS `festivals`;
CREATE TABLE IF NOT EXISTS `festivals` (
  `FestivalID` int NOT NULL AUTO_INCREMENT,
  `FestivalName` varchar(100) DEFAULT NULL,
  `Date` date DEFAULT NULL,
  `Month` varchar(20) DEFAULT NULL,
  `Location` varchar(100) DEFAULT NULL,
  `Budget` decimal(10,2) DEFAULT NULL,
  `Theme` varchar(100) DEFAULT NULL,
  `Activities` text,
  `UserID` int DEFAULT NULL,
  PRIMARY KEY (`FestivalID`),
  KEY `UserID` (`UserID`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `festivals`
--

INSERT INTO `festivals` (`FestivalID`, `FestivalName`, `Date`, `Month`, `Location`, `Budget`, `Theme`, `Activities`, `UserID`) VALUES
(13, 'poson', '2024-05-02', 'May', 'Galle', 25000.00, 'kawibana', 'somng', 1024),
(12, 'poson', '2024-04-28', 'May', 'Galle', 25000.00, 'songs', 'song', 1001),
(11, 'uduwap', '2024-11-20', 'November', 'colombo5,mahaagama widiya', 500000.00, 'mental healthy', 'mental health', 1025);

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

DROP TABLE IF EXISTS `role`;
CREATE TABLE IF NOT EXISTS `role` (
  `type` varchar(50) NOT NULL,
  `description` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`type`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`type`, `description`) VALUES
('devodee', 'who demonstrates strong commitment ');

-- --------------------------------------------------------

--
-- Table structure for table `sermonbooking`
--

DROP TABLE IF EXISTS `sermonbooking`;
CREATE TABLE IF NOT EXISTS `sermonbooking` (
  `BookingID` int NOT NULL AUTO_INCREMENT,
  `UserID` int DEFAULT NULL,
  `BookingDate` date DEFAULT NULL,
  `Address` varchar(255) DEFAULT NULL,
  `Message` varchar(255) DEFAULT NULL,
  `TotalMembers` int DEFAULT NULL,
  `SermonDateTime` datetime DEFAULT NULL,
  PRIMARY KEY (`BookingID`),
  KEY `fk_user` (`UserID`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `sermonbooking`
--

INSERT INTO `sermonbooking` (`BookingID`, `UserID`, `BookingDate`, `Address`, `Message`, `TotalMembers`, `SermonDateTime`) VALUES
(1, 5, '2024-04-10', 'nugegoda road,colombo', 'please inform the tommorow', 250, '2024-05-02 01:33:00'),
(2, 88, '2024-04-18', 'rawana ella,negambo', 'can i  have....', 550, '2024-04-19 12:34:00'),
(3, 88, '2024-04-18', 'rawana ella,negambo', 'can i  have....', 550, '2024-04-19 12:34:00'),
(4, 88, '2024-04-18', 'rawana ella,negambo', 'can i  have....', 550, '2024-04-19 12:34:00'),
(5, 1025, '2024-05-02', 'Galle', '-', 5, '2024-04-20 02:37:00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `Full_Name` varchar(70) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Email` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `user_name` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `password` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `gender` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `user_id` int NOT NULL AUTO_INCREMENT,
  `type` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`user_id`,`type`),
  KEY `fk_user_role` (`type`)
) ENGINE=MyISAM AUTO_INCREMENT=1030 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Full_Name`, `Email`, `user_name`, `password`, `gender`, `user_id`, `type`) VALUES
('Nethmi sandeepanie', 'nethmitk33@gmail.com', 'nethmi123', '123456', 'female', 2, 'devodee'),
('rashmi mendis', 'rashmi@gmail.com', 'rash123', '12345678', 'female', 3, 'devodee'),
('kaweesha gangani', 'kawee@gmail.com', 'k123', '12345678', 'female', 4, 'donator'),
('samidi ruwanima', 'sami@gmail.com', 'samidi12', '12345678', 'female', 1000, 'donator'),
('hashini dilhara', 'hashini@gmail.com', 'hashii', '12345', 'female', 1001, 'donator'),
('Disna kumudunie', 'disna@gmail.com', 'disna', '123', 'female', 1002, 'donator'),
('kawishka sandun', 'kawishka@gmail.com', 'kawishka', '12375614@gu', 'Male', 1012, 'Donator'),
('ruwan sampath', 'wath45@gmail.com', 'wathala road,colombo', '123yfj67', 'Male', 1013, 'Donator'),
('rashimaka sampath', 'sampath@gmail.com', 'nugegoda road,dehiwa', 'ghjb', 'Male', 1015, 'Donator'),
('kalani perera', 'kalani@gmail.com', 'kalani', 'k123', 'Female', 1010, 'Village Officer'),
('kalidu karunarathna', 'kalidu@gmail.com', 'kali', '123mnzksk', 'Male', 1016, 'Donator'),
('', '', '', '', '', 1017, ''),
('f', 'kawee@gmail.com', '', '123', 'Other', 1018, ''),
('f', 'kawee@gmail.com', '', '123', 'Other', 1019, ''),
('g', 'kawee@gmail.com', 'TKNethmi', '123', 'Male', 1020, 'Devotee'),
('g', 'kawee@gmail.com', 'TKNethmi', '123', 'Male', 1021, 'Devotee'),
('nikii', 'niki@gma3il.com', 'TKNethmi', '123', 'Male', 1022, 'Devotee'),
('kasuni', 'kasu@gmail.com', 'k1', 'k1', 'Female', 1023, 'Donator'),
('nawalapitiye sudath hiimi', 'nawala@gmail.com', 'thero', '1111', 'Male', 1024, 'Thero'),
('chamodi hansima karunarathna', 'chamo@gmail.com', 'chamodi', '2222', 'Female', 1025, 'Devotee'),
('ruwan pushpakumara', 'ruwan@gmail.com', 'ruwan', '3333', 'Male', 1026, 'Donator'),
('thenuwara preddep', 'thenuwara@gmail.com', 'nirwan', '4444', 'Male', 1027, 'Village Officer'),
('nethmi', 'nethmitk@gmail.com', 'nethmi', '123', 'Female', 1028, 'Devotee'),
('sumudu', 'sumu@gmail.com', 'sumudu', '55555', 'Male', 1029, 'Donator');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
