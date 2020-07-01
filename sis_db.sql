-- phpMyAdmin SQL Dump
-- version 4.1.10
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 17, 2019 at 02:44 PM
-- Server version: 5.1.67-andiunpam
-- PHP Version: 5.6.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sis_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `officer`
--

CREATE TABLE IF NOT EXISTS `officer` (
  `s/n` int(255) NOT NULL AUTO_INCREMENT,
  `last_name` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `badgeNo` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  PRIMARY KEY (`s/n`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `officer`
--

INSERT INTO `officer` (`s/n`, `last_name`, `first_name`, `phone_number`, `photo`, `badgeNo`, `password`, `Address`) VALUES
(1, 'Thompson', 'James', '08023227854', '', 'NP1243435', '81dc9bdb52d04dc20036dbd8313ed055', 'Ipetumodu, Ile-Ife'),
(2, 'Thompson', 'James', '08023227854', '', 'NP124344', 'c23946c050885b2de6860f47f2bf6787', 'Ipetumodu, Ile-Ife'),
(3, 'Enenche', 'Samuel', '08092345679', '', 'NP00000000', '4da16082005183be215caeaacdc054fe', 'Ipetumodu, Ile-Ife'),
(4, 'Samuel', 'John', '09034565492', '', 'NP02020202', '3e6f7568aac84d6a7dfe1b3641698697', 'Ile-Ife'),
(5, 'Sanusi', 'Waheed', '07043256792', '', 'NP00001111', 'd8420ee1c07a593566004a1dd88dd207', 'Osun state'),
(6, '', '', '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', ''),
(7, 'Segun', 'David', '', '63160.png', 'Np11111111', 'c8400628587a094c1e2e979b652d9047', 'Ile-Ife'),
(8, 'Wumi', 'Dada', '09043256782', '', 'NP22222222', 'becf608067693f792b92f705558e2bca', 'OAU, Ile-Ife'),
(9, 'ds', 'ds', '32', 'child-2218262.jpg', 'ds', '522748524ad010358705b6852b81be4c', 'fd'),
(10, 'c', 'fd', '32', '', 'sd', '4128513f18e1b9cb5299bac36502b961', 'fdf'),
(11, 'cssd', 'fdf', '32', '', 'fd', '08c6a51dde006e64aed953b94fd68f0c', 'fdf'),
(12, 'dvfd', 'dfv', '32', '', 'fdf', 'eff7d5dba32b4da32d9a67a519434d3f', 'fdv'),
(13, 'vd', 'fd', '32', '', 'cfs', '2f7e54fe9de9db73067f562bc22d6eae', 'gbgd'),
(14, 'fdf', 'fd', '32', 'AZ2cei7-bill-gates-wallpaper.jpg', 'd', '34f5159100913af62e54704b8f3dd1a9', 'd'),
(15, 'sam', 'sam', '07098756432', 'child-2218262.jpg', 'NP33333333', '332532dcfaa1cbf61e2a266bd723612c', 'lagos');

-- --------------------------------------------------------

--
-- Table structure for table `records`
--

CREATE TABLE IF NOT EXISTS `records` (
  `s_n` int(255) NOT NULL AUTO_INCREMENT,
  `complainer_lastName` varchar(255) NOT NULL,
  `complainer_firstName` varchar(255) NOT NULL,
  `complainer_phoneNo` int(255) NOT NULL,
  `complainer_address` varchar(255) NOT NULL,
  `statement_of_incidence` varchar(255) NOT NULL,
  `incidence_title` varchar(255) NOT NULL,
  `incidence_location` varchar(255) NOT NULL,
  `incidence_time` varchar(255) NOT NULL,
  `suspect1_lastName` varchar(255) NOT NULL,
  `suspect1_firstName` varchar(255) NOT NULL,
  `suspect1_phoneNo` int(255) NOT NULL,
  `suspect1_address` varchar(255) NOT NULL,
  `suspect2_lastName` varchar(255) NOT NULL,
  `suspect2_firstName` varchar(255) NOT NULL,
  `suspect2_phoneNo` int(255) NOT NULL,
  `suspect2_address` varchar(255) NOT NULL,
  `police_station` text NOT NULL,
  `city` text NOT NULL,
  `officer_in_charge` text NOT NULL,
  PRIMARY KEY (`s_n`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `records`
--

INSERT INTO `records` (`s_n`, `complainer_lastName`, `complainer_firstName`, `complainer_phoneNo`, `complainer_address`, `statement_of_incidence`, `incidence_title`, `incidence_location`, `incidence_time`, `suspect1_lastName`, `suspect1_firstName`, `suspect1_phoneNo`, `suspect1_address`, `suspect2_lastName`, `suspect2_firstName`, `suspect2_phoneNo`, `suspect2_address`, `police_station`, `city`, `officer_in_charge`) VALUES
(1, 'sc', 'vd', 232, 'vvd', 'fdvfd', 'fdf', 'vd', 'dvfd', 'vdf', 'fdv', 43242, 'dffvd', '', '', 0, '', '', '', ''),
(2, 'Daniel', 'udoh', 2147483647, 'osun, ife', 'ÄŽdfffffgggggg', 'Aad', 'Ttyy', 'Ttt', 'onibokun', 'ayomide', 2147483647, 'ikorodu lagos', '', '', 0, '', '', '', ''),
(3, 'onibokun', 'ayomide', 2147483647, 'ikorodu lagos', 'They stole my pc', 'Stealing ', 'Lagos ', '2012', 'Daniel', 'udoh', 2147483647, 'osun', '', '', 0, '', '', '', ''),
(4, 'onibokun', 'ayomide', 2147483647, 'ikorodu lagos', 'Ssksksksskszkkzkzksks to the Jews were sort of time for me some time time sort time s', 'Stealing ', 'Ttyy', '20129', 'onibokun', 'ayomide', 2147483647, 'ikorodu lagos', '', '', 0, '', '', '', 'James Thompson'),
(5, 'onibokun', 'ayomide', 2147483647, 'ikorodu lagos', 'onibokun The same as the first time in a few weeks ago ', 'Aad', 'Lagos ', '2019-08-17T06:19', 'onibokun', 'ayomide', 2147483647, 'ikorodu lagos', '', '', 0, '', '', '', 'NP1243435');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
