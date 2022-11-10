-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 05, 2019 at 12:39 PM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fundi_connect`
--

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

DROP TABLE IF EXISTS `clients`;
CREATE TABLE IF NOT EXISTS `clients` (
  `ID_NO` int(30) NOT NULL,
  `USERNAME` varchar(50) NOT NULL,
  `PASSWORD` varchar(50) NOT NULL,
  `FIRST_NAME` char(50) NOT NULL,
  `LAST_NAME` char(50) NOT NULL,
  `LOCATION` varchar(100) NOT NULL,
  `PHONE_NUMBER` int(12) NOT NULL,
  PRIMARY KEY (`ID_NO`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`ID_NO`, `USERNAME`, `PASSWORD`, `FIRST_NAME`, `LAST_NAME`, `LOCATION`, `PHONE_NUMBER`) VALUES
(33046947, 'Kev', '123', 'Kevin', 'Tum', 'Kisumu', 731000531),
(899632, 'Bramwel', 'Braemoo', 'Bramwel', 'Omondi', 'Kisian', 789963259),
(321, 'sila', 'sila', 'sila', 'jose', 'Kisumu', 789654895);

-- --------------------------------------------------------

--
-- Table structure for table `fundis`
--

DROP TABLE IF EXISTS `fundis`;
CREATE TABLE IF NOT EXISTS `fundis` (
  `ID_NO` int(30) NOT NULL,
  `USERNAME` varchar(50) NOT NULL,
  `PASSWORD` varchar(50) NOT NULL,
  `FIRST_NAME` char(50) NOT NULL,
  `LAST_NAME` char(50) NOT NULL,
  `LOCATION` varchar(100) NOT NULL,
  `PHONE_NUMBER` int(12) NOT NULL,
  `PROFILE_PHOTO` varchar(500) NOT NULL,
  `IMAGE_TEXT` text NOT NULL,
  `SPECIALTY` varchar(100) NOT NULL,
  `RATE_PH` float NOT NULL,
  PRIMARY KEY (`ID_NO`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fundis`
--

INSERT INTO `fundis` (`ID_NO`, `USERNAME`, `PASSWORD`, `FIRST_NAME`, `LAST_NAME`, `LOCATION`, `PHONE_NUMBER`, `PROFILE_PHOTO`, `IMAGE_TEXT`, `SPECIALTY`, `RATE_PH`) VALUES
(596896, 'Obado', 'obadopass', 'Obado', 'Marege', 'Nyakomita', 58963687, 'IMG_4838.JPG', '', 'Gardener', 500),
(989689, 'Leo', 'LeoLion', 'Leo', 'Lion', 'Kisian', 789654852, 'IMG_4835.JPG', '', 'Mover', 1000),
(898787, 'Job', 'Jobbo', 'Job', 'Makni', 'Makini', 765568897, 'bw.jpg', '', 'Tailor', 200),
(258978, 'Pichos', 'Makori', 'Makori', 'Pichos', 'Siaya', 728564123, 'IMG_4835.JPG', '', 'Gardener', 300),
(22232660, 'arnold', 'arnold', 'Arnold', 'Abeka', 'Bondo', 725580102, 'IMG_4840.JPG', '', 'Mechanic', 200),
(3698745, 'abuonji', 'abush', 'Daktari', 'Abuonji', 'Bondo', 78963254, 'IMG_4835.JPG', '', 'Mechanic', 300),
(3309586, 'kelly', 'kelly1', 'Kelly', 'Rarieda', 'Kisumu', 78965479, 'IMG_4835.JPG', '', 'Electrician', 500),
(12345, 'kevin', 'mwas', 'kevin', 'mwangi', 'Eldoret', 7896589, 'bw.jpg', 'Pro Plumber', 'Plumber', 600),
(123456, 'simon', 'siloma', 'simon', 'siloma', 'Eldoret', 7896547, 'IMG_3081.JPG', 'Cheap And Effective', 'Plumber', 250),
(654, 'izo', 'izo', 'isaac', 'obado', 'Kisumu', 721456989, 'IMG_2518.JPG', 'Quality Certified and Assured.', 'Electrician', 350);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
