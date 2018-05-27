-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 27, 2018 at 10:52 PM
-- Server version: 5.7.19
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `atlas`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity`
--

DROP TABLE IF EXISTS `activity`;
CREATE TABLE IF NOT EXISTS `activity` (
  `ActivityID` int(11) NOT NULL AUTO_INCREMENT,
  `CustomerID` int(11) NOT NULL,
  `Title` text NOT NULL,
  `Content` mediumblob NOT NULL,
  PRIMARY KEY (`ActivityID`),
  KEY `CustomerID` (`CustomerID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `description` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`) VALUES
(4, 'Smartphones', 'Smartphones'),
(5, 'Notebook', 'Notebook, Ultrabook, Mobile Workstations'),
(6, 'TV Audio', 'DIO Aktuelle Angebote Fernseher AV-Receiver AirPlay- & Bluetooth-Audio DJ, Musik & Recording DVD & Blu-ray Diktiergeräte & Mikrofone E-Book-Reader Heimkino-Systeme HiFi-Komponenten Kabel & Adapter Kop'),
(7, 'PC', 'All in One & Desktop PCs');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
  `CustomerID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(200) NOT NULL,
  `Surname` varchar(200) NOT NULL,
  `Company` varchar(200) NOT NULL,
  `Logo` text NOT NULL,
  `Email` varchar(200) NOT NULL,
  `Tel` varchar(200) NOT NULL,
  `Tel2` varchar(200) NOT NULL,
  `Fax` varchar(200) NOT NULL,
  `Address` varchar(200) NOT NULL,
  `Address2` varchar(200) NOT NULL,
  `Address3` varchar(200) NOT NULL,
  `RegistrationDate` date NOT NULL,
  PRIMARY KEY (`CustomerID`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`CustomerID`, `Name`, `Surname`, `Company`, `Logo`, `Email`, `Tel`, `Tel2`, `Fax`, `Address`, `Address2`, `Address3`, `RegistrationDate`) VALUES
(1, 'WIFI', 'WIFI ', 'WIFI', '', 'wifi@wifi.at', '123456789', '12345678', '1234567', 'Adresse', 'Adresse LIne 2', 'ADressen Line 3', '2018-04-24'),
(7, 'Mag Barbara', 'Schieder', 'WIFI Wien', '', 'kluger-schieder@wifiwien.at', '01 476 77 5105', '', '01 476 77 5588', '1180 Wien Waehringer Geurtel 9', '', '', '0000-00-00'),
(8, 'Thomas', 'Lichtblau', 'BIPA GmbH ', '', '', '', '', '', '', '', '', '0000-00-00'),
(9, 'Robert', 'Zadrazil', 'BANK AUSTRIA', '', '', '', '', '', '', '', '', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

DROP TABLE IF EXISTS `groups`;
CREATE TABLE IF NOT EXISTS `groups` (
  `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrator'),
(2, 'members', 'General User'),
(3, 'WIFI', 'This Group contains users from WIFI');

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

DROP TABLE IF EXISTS `login_attempts`;
CREATE TABLE IF NOT EXISTS `login_attempts` (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(45) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) UNSIGNED DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `orderline`
--

DROP TABLE IF EXISTS `orderline`;
CREATE TABLE IF NOT EXISTS `orderline` (
  `OrderLineID` int(11) NOT NULL AUTO_INCREMENT,
  `OrderID` int(11) NOT NULL,
  `ProductID` int(11) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `TotalAmount` decimal(10,0) DEFAULT NULL,
  PRIMARY KEY (`OrderLineID`),
  KEY `OrderID` (`OrderID`),
  KEY `ProductID` (`ProductID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orderline`
--

INSERT INTO `orderline` (`OrderLineID`, `OrderID`, `ProductID`, `Quantity`, `TotalAmount`) VALUES
(1, 1, 12, 1, '799'),
(2, 1, 17, 1, '2999');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `OrderID` int(11) NOT NULL AUTO_INCREMENT,
  `CustomerID` int(11) NOT NULL,
  `OrderStatusID` int(11) DEFAULT NULL,
  `UserID` int(11) DEFAULT NULL,
  `OrderDate` date NOT NULL,
  PRIMARY KEY (`OrderID`),
  KEY `OrderStatusID` (`OrderStatusID`),
  KEY `CustomerID` (`CustomerID`),
  KEY `UserID` (`UserID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`OrderID`, `CustomerID`, `OrderStatusID`, `UserID`, `OrderDate`) VALUES
(1, 9, NULL, NULL, '2018-05-27');

-- --------------------------------------------------------

--
-- Table structure for table `orderstatus`
--

DROP TABLE IF EXISTS `orderstatus`;
CREATE TABLE IF NOT EXISTS `orderstatus` (
  `OrderStatusID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(200) NOT NULL,
  PRIMARY KEY (`OrderStatusID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orderstatus`
--

INSERT INTO `orderstatus` (`OrderStatusID`, `Name`) VALUES
(1, 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `price` decimal(10,0) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `category_id` (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `category_id`, `price`) VALUES
(7, 'Samsung GALAXY S8 orchid grey 64GB Android Smartphone', 4, '525'),
(8, 'Samsung GALAXY A5', 4, '260'),
(9, 'Samsung GALAXY S7 pink gold G930F', 4, '418'),
(10, 'Samsung GALAXY S7 edge gold platinum G935F', 4, '471'),
(11, 'ArtPC PULSE', 7, '1599'),
(12, 'All in One', 7, '799'),
(13, 'Samsung GALAXY A5', 4, '255'),
(14, 'Class Q9FN QLED Smart 4K UHD TV ', 6, '3498'),
(15, 'Class Q6FN QLED Smart 4K UHD TV ', 6, '1799'),
(16, 'Class Q6F Special Edition QLED 4K TV', 6, '799'),
(17, 'Class Q8C Curved QLED 4K TV', 6, '2999'),
(18, 'Notebook 9 Pen 13', 5, '1399'),
(19, 'Notebook 9 15', 5, '1399'),
(20, 'Notebook 7 Spin', 5, '799'),
(21, 'Notebook 7 spin 15', 5, '1399'),
(22, 'Notebook 5', 5, '1099');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(45) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `salt` varchar(255) DEFAULT NULL,
  `email` varchar(254) NOT NULL,
  `activation_code` varchar(40) DEFAULT NULL,
  `forgotten_password_code` varchar(40) DEFAULT NULL,
  `forgotten_password_time` int(11) UNSIGNED DEFAULT NULL,
  `remember_code` varchar(40) DEFAULT NULL,
  `created_on` int(11) UNSIGNED NOT NULL,
  `last_login` int(11) UNSIGNED DEFAULT NULL,
  `active` tinyint(1) UNSIGNED DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`) VALUES
(1, '127.0.0.1', 'administrator', '$2y$08$lSKMVeYM7WKOg9UHdIfuE.h7UvcbQQ4B/gxH6rEG4gcG9OsIJ92G6', '', 'admin@admin.com', '', NULL, NULL, NULL, 1268889823, 1527454696, 1, 'Eray', 'YIlmaz', 'T3K Forensics', '0676 649 42 69'),
(2, '::1', 'erayyilmaz@outlook.com', '$2y$08$NEsymqNhsU13SoI0mwqfIuEP6wUs05vgvgRfTfPfeprY3k8l.Vuxq', NULL, 'erayyilmaz@outlook.com', NULL, NULL, NULL, NULL, 1523196519, NULL, 1, 'Eray', 'Yilmaz', 'Atlas', '6766494269'),
(3, '::1', 'yilmaz@outlook.com', '$2y$08$yjZ4welMTumKvX/8j3tcEOjrHCGeMKYBLDZzwfTlCvmYisa64w2uC', NULL, 'yilmaz@outlook.com', NULL, NULL, NULL, NULL, 1527284633, NULL, 1, 'Eray', 'Yilmaz', 'T3K Forensics', '+436766494269');

-- --------------------------------------------------------

--
-- Table structure for table `users_groups`
--

DROP TABLE IF EXISTS `users_groups`;
CREATE TABLE IF NOT EXISTS `users_groups` (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(11) UNSIGNED NOT NULL,
  `group_id` mediumint(8) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  KEY `fk_users_groups_users1_idx` (`user_id`),
  KEY `fk_users_groups_groups1_idx` (`group_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(7, 1, 1),
(5, 2, 3),
(6, 3, 2);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `activity`
--
ALTER TABLE `activity`
  ADD CONSTRAINT `activity_ibfk_1` FOREIGN KEY (`CustomerID`) REFERENCES `customer` (`CustomerID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `orderline`
--
ALTER TABLE `orderline`
  ADD CONSTRAINT `orderline_ibfk_1` FOREIGN KEY (`OrderID`) REFERENCES `orders` (`OrderID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `orderline_ibfk_2` FOREIGN KEY (`ProductID`) REFERENCES `product` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`OrderStatusID`) REFERENCES `orderstatus` (`OrderStatusID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`CustomerID`) REFERENCES `customer` (`CustomerID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `category_id_product` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE SET NULL ON UPDATE NO ACTION;

--
-- Constraints for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
