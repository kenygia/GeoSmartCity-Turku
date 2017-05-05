-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 08, 2015 at 02:44 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `geosmartcity`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `comment`) VALUES
(1, 'dsf', 'dsfs@fgnfg.fi', 'sddsf'),
(2, 'dsf', 'dsfs@fgnfg.fi', 'sddsf'),
(3, 'dsf', 'dsfs@fgnfg.fi', 'sddsf'),
(4, 'sdas', 'sas@sis.fi', 'sd');

-- --------------------------------------------------------

--
-- Table structure for table `questionnaire`
--

CREATE TABLE IF NOT EXISTS `questionnaire` (
  `id` int(11) NOT NULL,
  `age` int(11) DEFAULT NULL,
  `occupation` varchar(25) DEFAULT NULL,
  `distance` int(11) DEFAULT NULL,
  `walk` varchar(25) DEFAULT NULL,
  `bike` int(11) DEFAULT NULL,
  `car` int(11) DEFAULT NULL,
  `bus` int(11) DEFAULT NULL,
  `train` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questionnaire`
--

INSERT INTO `questionnaire` (`id`, `age`, `occupation`, `distance`, `walk`, `bike`, `car`, `bus`, `train`) VALUES
(1, 50, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questionnaire`
--
ALTER TABLE `questionnaire`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `questionnaire`
--
ALTER TABLE `questionnaire`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
