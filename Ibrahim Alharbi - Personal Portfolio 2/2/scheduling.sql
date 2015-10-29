-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 28, 2015 at 12:17 PM
-- Server version: 5.5.44-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ifb299db`
--

-- --------------------------------------------------------

--
-- Table structure for table `scheduling`
--

CREATE TABLE IF NOT EXISTS `scheduling` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dateofduty` date NOT NULL,
  `volunteer_id` int(11) NOT NULL,
  `request` int(11) NOT NULL,
  `reqdate` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `scheduling`
--

INSERT INTO `scheduling` (`id`, `dateofduty`, `volunteer_id`, `request`, `reqdate`) VALUES
(15, '2015-10-13', 229, 0, '0000-00-00'),
(16, '2015-10-13', 233, 0, '0000-00-00'),
(17, '2015-10-14', 229, 0, '0000-00-00'),
(18, '2015-10-15', 229, 0, '0000-00-00'),
(22, '2015-10-26', 229, 0, '0000-00-00'),
(23, '2015-10-20', 229, 0, '0000-00-00'),
(24, '2015-10-28', 229, 2, '2015-10-29'),
(25, '2015-10-27', 233, 0, '0000-00-00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
