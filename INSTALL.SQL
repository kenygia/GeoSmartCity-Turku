SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Create User 
--

CREATE USER 'UserGeoSmartCity'@'localhost' IDENTIFIED BY 'GeoSmartCityPassword';

--
-- Create Database and Give the User all privileges on the database
--
CREATE DATABASE IF NOT EXISTS `GeoSmartCityDB`;
GRANT ALL PRIVILEGES ON `GeoSmartCityDB`.* TO 'UserGeoSmartCity'@'localhost';
USE `GeoSmartCityDB`;

-- --------------------------------------------------------

--
-- Create table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
`cid` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `name` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Fill table `category`
--

INSERT INTO `category` (`cid`, `name`) VALUES
(1, 'event'),
(2, 'problem'),
(3, 'information'),
(4, 'other');

-- --------------------------------------------------------

--
-- Create table `marker`
--

CREATE TABLE IF NOT EXISTS `marker` (
`mid` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `d_start` datetime NOT NULL,
  `d_end` datetime NOT NULL,
  `position` text NOT NULL COMMENT 'serialized geojson',
  `description` varchar(300) NOT NULL,
  `category` int(11) NOT NULL,
  `visible` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Create table `report`
--

CREATE TABLE IF NOT EXISTS `report` (
`rid` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `marker_id` int(11) NOT NULL,
  `comment` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
