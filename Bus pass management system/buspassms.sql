-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 06, 2021 at 11:40 AM
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
-- Database: `buspassms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `password` varchar(45) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `password`, `email`) VALUES
(1, 'Admin', '123456', 'admin@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `date`) VALUES
(8, '90 sitter bus', '2021-09-29'),
(7, '70 sitter bus', '2021-09-29'),
(11, '100 sitter bus', '2021-09-29'),
(12, '30 sitter bus', '2021-09-29'),
(13, '100 sitter bus', '2021-10-06');

-- --------------------------------------------------------

--
-- Table structure for table `page`
--

DROP TABLE IF EXISTS `page`;
CREATE TABLE IF NOT EXISTS `page` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(45) NOT NULL,
  `name` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `description` varchar(40) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `page`
--

INSERT INTO `page` (`id`, `title`, `name`, `email`, `subject`, `description`, `date`) VALUES
(4, 'Contact Us', 'che bernice', 'y@gmail.com', 'hahaha', 'i need a 80 sitter bus', '2021-09-30'),
(3, 'Contact Us', 'anya favour', 'aaaa@gmail.com', 'how you', 'please book a bus for me', '2021-09-30');

-- --------------------------------------------------------

--
-- Table structure for table `pass`
--

DROP TABLE IF EXISTS `pass`;
CREATE TABLE IF NOT EXISTS `pass` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pass_number` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `tel_number` int(11) NOT NULL,
  `identity_card_number` int(11) NOT NULL,
  `category` varchar(40) NOT NULL,
  `source` varchar(30) NOT NULL,
  `destination` varchar(35) NOT NULL,
  `cost` int(11) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pass`
--

INSERT INTO `pass` (`id`, `pass_number`, `name`, `tel_number`, `identity_card_number`, `category`, `source`, `destination`, `cost`, `date`) VALUES
(1, 12233344, 'SHEKINAH MANYI', 334555, 445667788, '80 sitter', 'Limbe', 'yaounde', 5000, '2021-09-29'),
(2, 45465478, 'che bernice', 24235, 3543, '70 sitteer bus', 'Douala', 'yaounde', 34556, '2021-09-29'),
(3, 33542452, 'agbor tabi', 45654332, 1134326543, 'VIP bus', 'Douala', 'edea', 1500, '2021-10-06'),
(4, 354353432, 'tabi emmanuel', 53436643, 1223445667, '70 sitteer bus', 'Douala', 'yaounde', 1345, '2021-10-06');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(45) NOT NULL,
  `subject` varchar(45) NOT NULL,
  `message` varchar(40) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `subject`, `message`, `date`) VALUES
(1, 'che bernice', 'y@gmail.com', 'hahaha', 'bus', '2021-10-01'),
(2, 'che bernice', 'aaaa@gmail.com', 'hahaha', 'book', '2021-10-06');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
