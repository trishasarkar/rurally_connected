-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 03, 2021 at 04:00 AM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cva`
--

-- --------------------------------------------------------

--
-- Table structure for table `beneficiaries_details`
--

DROP TABLE IF EXISTS `beneficiaries_details`;
CREATE TABLE IF NOT EXISTS `beneficiaries_details` (
  `benef_id` int(11) NOT NULL AUTO_INCREMENT,
  `benef_name` varchar(100) NOT NULL,
  `benef_address` varchar(250) NOT NULL,
  `benef_emailid` varchar(100) NOT NULL,
  `benef_mobilenumber` bigint(11) NOT NULL,
  `benef_password` varchar(100) NOT NULL,
  `benef_location` varchar(100) NOT NULL,
  `benef_category` varchar(100) NOT NULL,
  PRIMARY KEY (`benef_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `beneficiaries_details`
--

INSERT INTO `beneficiaries_details` (`benef_id`, `benef_name`, `benef_address`, `benef_emailid`, `benef_mobilenumber`, `benef_password`, `benef_location`, `benef_category`) VALUES
(1, 'Mohit', 'Pune', 'mohit@benef.in', 9876543210, '123', 'Mumbai', 'pottery');

-- --------------------------------------------------------

--
-- Table structure for table `companies_details`
--

DROP TABLE IF EXISTS `companies_details`;
CREATE TABLE IF NOT EXISTS `companies_details` (
  `company_id` int(11) NOT NULL AUTO_INCREMENT,
  `company_name` varchar(100) NOT NULL,
  `company_address` varchar(250) NOT NULL,
  `company_emailid` varchar(100) NOT NULL,
  `company_number` bigint(11) NOT NULL,
  `company_password` varchar(100) NOT NULL,
  `company_location` varchar(50) NOT NULL,
  `company_category` varchar(100) NOT NULL,
  PRIMARY KEY (`company_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `companies_details`
--

INSERT INTO `companies_details` (`company_id`, `company_name`, `company_address`, `company_emailid`, `company_number`, `company_password`, `company_location`, `company_category`) VALUES
(1, 'company_name', 'company_address', 'company_emailid', 987654321, 'company_password1', 'company_location', 'company_category'),
(2, 'm', 'Pune', 'd@g.com', 9876543210, '1234', 'mum', 'farmproduce');

-- --------------------------------------------------------

--
-- Table structure for table `trainer`
--

DROP TABLE IF EXISTS `trainer`;
CREATE TABLE IF NOT EXISTS `trainer` (
  `trainer_id` int(11) NOT NULL AUTO_INCREMENT,
  `trainer_name` varchar(100) NOT NULL,
  `trainer_email` varchar(150) NOT NULL,
  `trainer_password` varchar(100) NOT NULL,
  `trainer_number` bigint(11) NOT NULL,
  `trainer_skills` varchar(255) NOT NULL,
  `trainer_location` varchar(255) NOT NULL,
  `trainer_img` blob,
  PRIMARY KEY (`trainer_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trainer`
--

INSERT INTO `trainer` (`trainer_id`, `trainer_name`, `trainer_email`, `trainer_password`, `trainer_number`, `trainer_skills`, `trainer_location`, `trainer_img`) VALUES
(1, 'Mohit', 'mohit@cva.in', '12345', 9876543210, 'sab aatay', 'mum', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
