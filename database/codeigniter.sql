-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 25, 2021 at 01:04 PM
-- Server version: 5.7.26
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `codeigniter`
--

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

DROP TABLE IF EXISTS `city`;
CREATE TABLE IF NOT EXISTS `city` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `s_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`id`, `s_id`, `name`) VALUES
(1, 1, 'navsari'),
(2, 2, 'surat');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

DROP TABLE IF EXISTS `country`;
CREATE TABLE IF NOT EXISTS `country` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`id`, `name`) VALUES
(1, 'india'),
(2, 'aus');

-- --------------------------------------------------------

--
-- Table structure for table `country_city`
--

DROP TABLE IF EXISTS `country_city`;
CREATE TABLE IF NOT EXISTS `country_city` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_id` int(11) NOT NULL,
  `city_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `country_city`
--

INSERT INTO `country_city` (`id`, `customer_id`, `city_id`, `name`) VALUES
(1, 1, 2, 'hello jignesh');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `name`) VALUES
(1, 'jignesh'),
(2, 'jimmy');

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

DROP TABLE IF EXISTS `image`;
CREATE TABLE IF NOT EXISTS `image` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(1000) NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`id`, `title`, `image`) VALUES
(1, '', 'pexels-daria-sannikova-558780210.jpg'),
(2, 'hello', 'pexels-daria-sannikova-558780211.jpg'),
(3, 'Quiz-2', 'Landscape-Color.jpg'),
(4, 'jigndsh', 'Landscape-Color1.jpg'),
(5, 'groww', 'Landscape-Color2.jpg'),
(6, 'groww', 'Landscape-Color12.jpg'),
(7, '17. Business plan for MAPs', 'pexels-daria-sannikova-55878021.jpg'),
(8, 'Quiz-2', 'Landscape-Color15.jpg'),
(9, 'title 1', 'Landscape-Color_1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

DROP TABLE IF EXISTS `state`;
CREATE TABLE IF NOT EXISTS `state` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `country_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`id`, `country_id`, `name`) VALUES
(3, 1, 'aus1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_insert`
--

DROP TABLE IF EXISTS `tbl_insert`;
CREATE TABLE IF NOT EXISTS `tbl_insert` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pno` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=55 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_insert`
--

INSERT INTO `tbl_insert` (`id`, `fname`, `lname`, `email`, `pno`) VALUES
(51, 'jignesh', 'Kharva', 'jignesh@gmail.com', '9898989898'),
(52, 'Hasmukh', 'Kharva', 'jigs@gmail.com', '9898989898'),
(53, 'vcvv', 'mistry', 'jignesh@gmail.com', '9898989898'),
(54, 'vcvv', 'mistry', 'jignesh@gmail.com', '9898989898');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
