-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 06, 2021 at 05:08 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tourist`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

DROP TABLE IF EXISTS `blog`;
CREATE TABLE IF NOT EXISTS `blog` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `image` varchar(255) NOT NULL,
  `blogname` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `image`, `blogname`, `content`) VALUES
(2, '131834868_2885211508392389_8103953128244375664_n.gif', 'hellow', 'bxc xc xc xc cx xc '),
(3, '51.jpg', 'ergrege', 'gsdgsgregreg');

-- --------------------------------------------------------

--
-- Table structure for table `car`
--

DROP TABLE IF EXISTS `car`;
CREATE TABLE IF NOT EXISTS `car` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `brand` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `seat` varchar(255) NOT NULL,
  `dailycost` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `car`
--

INSERT INTO `car` (`id`, `brand`, `model`, `type`, `seat`, `dailycost`, `image`) VALUES
(15, 'Jaguar', 'Hiace', 'Micro', '10 seats', '6000', '01709015762.JPG'),
(16, 'Toyota', 'Hiace', 'Private', '6 seats', '12000', '131834868_2885211508392389_8103953128244375664_n.gif'),
(17, 'Suzuki', 'Allion', 'Private', '4 seats', '10000', '65.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tour`
--

DROP TABLE IF EXISTS `tour`;
CREATE TABLE IF NOT EXISTS `tour` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `tourname` varchar(255) NOT NULL,
  `tourtype` varchar(255) NOT NULL,
  `tourlocation` varchar(255) NOT NULL,
  `tourprice` int(255) NOT NULL,
  `tourfeatures` varchar(255) NOT NULL,
  `tourdetails` varchar(255) NOT NULL,
  `tourimage` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tour`
--

INSERT INTO `tour` (`id`, `tourname`, `tourtype`, `tourlocation`, `tourprice`, `tourfeatures`, `tourdetails`, `tourimage`) VALUES
(4, 'ax', 'xa', 'xa', 13, 'xa', 'xa', 'eye.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `fullname`, `phone`, `address`, `pass`, `image`) VALUES
(7, 'lolipop.cse@gmail.com', 'Rajibul Islam', '01', 'P', '123', 'eye.jpg'),
(21, 'someone@gmail.com', 'kuddus', '12324214', 'dscsdcsdcsdc', 'a', '131834868_2885211508392389_8103953128244375664_n.gif'),
(22, 'lolipop.cse@yaho.com', 'Rajibul Islam', '01709015762', 'Sector 10', 'a', 'art 203 viva.JPG'),
(20, 'lolipop.cse@yahoo.com', 'Islam Raju', '01709015762', 'Sector 1', 'a', '9.jpg'),
(23, '16103404@iubat.edu', 'Jamal Uddin', '849848468', 'Ramrama, Taherpur, Bagmara, Rajshahi', 'asdf', 'tourism_silhouettes_top_order_115858_300x188.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `userbooking`
--

DROP TABLE IF EXISTS `userbooking`;
CREATE TABLE IF NOT EXISTS `userbooking` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `tourimage` varchar(255) NOT NULL,
  `tourname` varchar(255) NOT NULL,
  `tourtype` varchar(255) NOT NULL,
  `tourlocation` varchar(255) NOT NULL,
  `tourprice` int(255) NOT NULL,
  `tourfeatures` varchar(255) NOT NULL,
  `tourdetails` varchar(255) NOT NULL,
  `journeydate` varchar(255) NOT NULL,
  `returndate` varchar(255) NOT NULL,
  `userid` int(255) NOT NULL,
  `tourid` int(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userbooking`
--

INSERT INTO `userbooking` (`id`, `fullname`, `email`, `phone`, `address`, `tourimage`, `tourname`, `tourtype`, `tourlocation`, `tourprice`, `tourfeatures`, `tourdetails`, `journeydate`, `returndate`, `userid`, `tourid`) VALUES
(1, 'as', 'as', 1709015762, 'as', 'as', 'as', 'as', 'as', 12, 'as', 'as', '2012-12-12', '2013-12-11', 1, 1),
(2, 'Islam Raju', 'lolipop.cse@yahoo.com', 1709015762, 'Sector 1', 'eye.jpg', 'ax', 'xa', 'xa', 13, 'xa', 'xa', '2020-12-28', '2020-12-30', 20, 4),
(3, 'kuddus', 'someone@gmail.com', 12324214, 'dscsdcsdcsdc', 'eye.jpg', 'ax', 'xa', 'xa', 13, 'xa', 'xa', '2020-12-29', '2020-12-31', 21, 4),
(4, 'kuddus', 'someone@gmail.com', 12324214, 'dscsdcsdcsdc', 'eye.jpg', 'ax', 'xa', 'xa', 13, 'xa', 'xa', '2020-12-29', '2020-12-31', 21, 4),
(5, 'kuddus', 'someone@gmail.com', 12324214, 'dscsdcsdcsdc', 'eye.jpg', 'ax', 'xa', 'xa', 13, 'xa', 'xa', '', '', 21, 4),
(6, 'kuddus', 'someone@gmail.com', 12324214, 'dscsdcsdcsdc', 'eye.jpg', 'ax', 'xa', 'xa', 13, 'xa', 'xa', '', '', 21, 4);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
