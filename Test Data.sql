-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2017 at 08:04 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `booking_tool_database`
--
CREATE DATABASE IF NOT EXISTS `booking_tool_database` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `booking_tool_database`;

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

DROP TABLE IF EXISTS `booking`;
CREATE TABLE IF NOT EXISTS `booking` (
  `booking_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `start_time` datetime NOT NULL,
  `end_time` datetime NOT NULL,
  PRIMARY KEY (`booking_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Truncate table before insert `booking`
--

TRUNCATE TABLE `booking`;
--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`booking_id`, `user_id`, `room_id`, `start_time`, `end_time`) VALUES
(1, 1, 8, '2017-05-22 10:00:00', '2017-05-22 10:30:00'),
(2, 1, 11, '2017-05-22 11:00:00', '2017-05-22 11:30:00'),
(3, 1, 10, '2017-05-22 11:30:00', '2017-05-22 12:00:00'),
(4, 1, 10, '2017-05-22 14:00:00', '2017-05-22 15:00:00'),
(5, 1, 7, '2017-05-22 15:00:00', '2017-05-22 16:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

DROP TABLE IF EXISTS `room`;
CREATE TABLE IF NOT EXISTS `room` (
  `room_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `occupancy` int(11) NOT NULL,
  `building` varchar(50) NOT NULL,
  PRIMARY KEY (`room_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `room`
--

TRUNCATE TABLE `room`;
--
-- Dumping data for table `room`
--

INSERT INTO `room` (`room_id`, `name`, `occupancy`, `building`) VALUES
(1, 'Room 1', 10, 'PC357'),
(2, 'Room 2', 5, 'PC357'),
(3, 'Room 1', 5, 'C34'),
(4, 'Room 2', 12, 'C34'),
(5, 'Room 1', 2, 'C6'),
(6, 'Room 1', 4, 'C7'),
(7, 'Room 1', 6, 'C8'),
(8, 'Room 1', 6, 'C11'),
(10, 'Room 1', 12, 'C12'),
(11, 'Room 3', 12, 'C12'),
(12, 'Room 2', 12, 'C12');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(250) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `user`
--

TRUNCATE TABLE `user`;
--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `name`, `email`) VALUES
(1, 'connor', 'connor.clarkson@outlok.com'),
(2, 'Jacob', 'Jacob.grimsdell');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
