-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 28, 2012 at 08:59 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `contest`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `password`) VALUES
('admin', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `album`
--

CREATE TABLE IF NOT EXISTS `album` (
  `album_id` int(11) NOT NULL AUTO_INCREMENT,
  `album_name` varchar(50) NOT NULL,
  `album_info` text NOT NULL,
  `album_price` int(11) NOT NULL,
  PRIMARY KEY (`album_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `album`
--

INSERT INTO `album` (`album_id`, `album_name`, `album_info`, `album_price`) VALUES
(1, 'Dream', 'abcd', 70),
(3, 'Dangerous', 'asd as', 70),
(4, 'Careless', 'abcd', 70),
(5, 'Balam 1', 'lkjyltr', 20);

-- --------------------------------------------------------

--
-- Table structure for table `artist`
--

CREATE TABLE IF NOT EXISTS `artist` (
  `artist_id` int(11) NOT NULL AUTO_INCREMENT,
  `artist_name` varchar(50) NOT NULL,
  PRIMARY KEY (`artist_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `artist`
--

INSERT INTO `artist` (`artist_id`, `artist_name`) VALUES
(1, 'Katy Perry'),
(2, 'Michael Jackson'),
(3, 'Dave'),
(4, 'Balam');

-- --------------------------------------------------------

--
-- Table structure for table `buy`
--

CREATE TABLE IF NOT EXISTS `buy` (
  `buying_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `type` varchar(50) NOT NULL,
  `item_id` int(11) NOT NULL,
  `buying_price` int(11) NOT NULL,
  PRIMARY KEY (`buying_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `contain`
--

CREATE TABLE IF NOT EXISTS `contain` (
  `album_id` int(11) NOT NULL,
  `track_id` int(11) NOT NULL,
  PRIMARY KEY (`album_id`,`track_id`),
  KEY `track_id` (`track_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contain`
--

INSERT INTO `contain` (`album_id`, `track_id`) VALUES
(1, 5),
(1, 6),
(4, 7),
(5, 8);

-- --------------------------------------------------------

--
-- Table structure for table `credit`
--

CREATE TABLE IF NOT EXISTS `credit` (
  `credit_number` varchar(16) NOT NULL,
  `holder_name` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `spent_amount` int(11) NOT NULL,
  `remain_amount` int(11) NOT NULL,
  PRIMARY KEY (`credit_number`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `track`
--

CREATE TABLE IF NOT EXISTS `track` (
  `track_id` int(11) NOT NULL AUTO_INCREMENT,
  `track_name` varchar(50) NOT NULL,
  `track_info` text NOT NULL,
  `track_price` int(11) NOT NULL,
  `artist_id` int(11) NOT NULL,
  PRIMARY KEY (`track_id`),
  KEY `artist_id` (`artist_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `track`
--

INSERT INTO `track` (`track_id`, `track_name`, `track_info`, `track_price`, `artist_id`) VALUES
(5, 'supernatural', 'abcd', 5, 1),
(6, 'teenage dream', 'kkkkkkkkkkk', 5, 1),
(7, 'whisper', 'abcd', 5, 3),
(8, 'akash ', 'abcd', 5, 4);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `name` varchar(50) NOT NULL,
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `password` varchar(40) NOT NULL,
  `username` varchar(30) NOT NULL,
  `credit_number` varchar(16) NOT NULL,
  PRIMARY KEY (`user_id`,`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `user_id`, `password`, `username`, `credit_number`) VALUES
('Arafat', 1, '12345', 'arafat', '1234567891245265');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `buy`
--
ALTER TABLE `buy`
  ADD CONSTRAINT `buy_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `contain`
--
ALTER TABLE `contain`
  ADD CONSTRAINT `contain_ibfk_2` FOREIGN KEY (`album_id`) REFERENCES `album` (`album_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `contain_ibfk_1` FOREIGN KEY (`track_id`) REFERENCES `track` (`track_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
