-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 27, 2016 at 01:06 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sociomar__23`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(256) DEFAULT NULL,
  `email` varchar(256) DEFAULT NULL,
  `query` varchar(125) DEFAULT NULL,
  `subject` varchar(256) DEFAULT NULL,
  `template` varchar(256) DEFAULT NULL,
  `message` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `reg`
--

CREATE TABLE IF NOT EXISTS `reg` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(125) DEFAULT NULL,
  `password` varchar(256) DEFAULT NULL,
  `verify` varchar(125) NOT NULL DEFAULT '0',
  `ban` varchar(125) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `reg`
--

INSERT INTO `reg` (`id`, `email`, `password`, `verify`, `ban`) VALUES
(7, 'utpal@sociomarker.com', '3783f21f4a26ac94f7b4dd599be6b4d3', '1', '0');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE IF NOT EXISTS `sales` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `payment_id` varchar(256) DEFAULT NULL,
  `quantity` varchar(256) DEFAULT NULL,
  `status` varchar(256) DEFAULT NULL,
  `offer_slug` varchar(256) DEFAULT NULL,
  `offer_title` varchar(256) DEFAULT NULL,
  `buyer` varchar(256) DEFAULT NULL,
  `unit_price` varchar(256) DEFAULT NULL,
  `amount` varchar(256) DEFAULT NULL,
  `fees` varchar(256) DEFAULT NULL,
  `mac` varchar(256) DEFAULT NULL,
  `currency` varchar(256) DEFAULT NULL,
  `e1` varchar(256) DEFAULT NULL,
  `e2` varchar(256) DEFAULT NULL,
  `e3` varchar(256) DEFAULT NULL,
  `e4` varchar(256) DEFAULT NULL,
  `e5` varchar(256) DEFAULT NULL,
  `e6` varchar(256) DEFAULT NULL,
  `e7` varchar(256) DEFAULT NULL,
  `e8` varchar(256) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE IF NOT EXISTS `tags` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `tags` varchar(125) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `tags`) VALUES
(18, 'Simple'),
(19, 'Corporate');

-- --------------------------------------------------------

--
-- Table structure for table `temps`
--

CREATE TABLE IF NOT EXISTS `temps` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `reg_id` varchar(11) DEFAULT NULL,
  `name` varchar(256) DEFAULT NULL,
  `price` varchar(256) DEFAULT NULL,
  `descriptions` text,
  `preview_link` text,
  `buy_link` varchar(9999) DEFAULT NULL,
  `columns` text,
  `browser_compatible` text,
  `software` text,
  `documentation` text,
  `layout` text,
  `file_list` text,
  `extended_support` varchar(125) DEFAULT NULL,
  `tags` text,
  `screenshot` varchar(256) DEFAULT NULL,
  `other` varchar(256) DEFAULT NULL,
  `other2` varchar(256) DEFAULT NULL,
  `other3` varchar(256) DEFAULT NULL,
  `other4` varchar(256) DEFAULT NULL,
  `other5` varchar(256) DEFAULT NULL,
  `other6` varchar(256) DEFAULT NULL,
  `other7` varchar(256) DEFAULT NULL,
  `other8` varchar(256) DEFAULT NULL,
  `other9` varchar(256) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `temps`
--

INSERT INTO `temps` (`id`, `reg_id`, `name`, `price`, `descriptions`, `preview_link`, `buy_link`, `columns`, `browser_compatible`, `software`, `documentation`, `layout`, `file_list`, `extended_support`, `tags`, `screenshot`, `other`, `other2`, `other3`, `other4`, `other5`, `other6`, `other7`, `other8`, `other9`) VALUES
(12, 'reg_id ', 'Testing Template', '1000', '<span style="font-family: Arial, Verdana; font-size: 13.3333px;">Testing Template&nbsp;</span><span style="font-family: Arial, Verdana; font-size: 13.3333px;">Testing Template&nbsp;</span><span style="font-family: Arial, Verdana; font-size: 13.3333px;">Testing Template&nbsp;</span><span style="font-family: Arial, Verdana; font-size: 13.3333px;">Testing Template&nbsp;</span><span style="font-family: Arial, Verdana; font-size: 13.3333px;">Testing Template&nbsp;</span><span style="font-family: Arial, Verdana; font-size: 13.3333px;">Testing Template&nbsp;</span><span style="font-family: Arial, Verdana; font-size: 13.3333px;">Testing Template&nbsp;</span><span style="font-family: Arial, Verdana; font-size: 13.3333px;">Testing Template&nbsp;</span><span style="font-family: Arial, Verdana; font-size: 13.3333px;">Testing Template&nbsp;</span><span style="font-family: Arial, Verdana; font-size: 13.3333px;">Testing Template&nbsp;</span><span style="font-family: Arial, Verdana; font-size: 13.3333px;">Testing Template&nbsp;</span><span style="font-family: Arial, Verdana; font-size: 13.3333px;">Testing Template&nbsp;</span><span style="font-family: Arial, Verdana; font-size: 13.3333px;">Testing Template&nbsp;</span><span style="font-family: Arial, Verdana; font-size: 13.3333px;">Testing Template&nbsp;</span><span style="font-family: Arial, Verdana; font-size: 13.3333px;">Testing Template&nbsp;</span><span style="font-family: Arial, Verdana; font-size: 13.3333px;">Testing Template&nbsp;</span><span style="font-family: Arial, Verdana; font-size: 13.3333px;">Testing Template&nbsp;</span><span style="font-family: Arial, Verdana; font-size: 13.3333px;">Testing Template&nbsp;</span><span style="font-family: Arial, Verdana; font-size: 13.3333px;">Testing Template&nbsp;</span><span style="font-family: Arial, Verdana; font-size: 13.3333px;">Testing Template&nbsp;</span><span style="font-family: Arial, Verdana; font-size: 13.3333px;">Testing Template&nbsp;</span><span style="font-family: Arial, Verdana; font-size: 13.3333px;">Testing Template&nbsp;</span><span style="font-family: Arial, Verdana; font-size: 13.3333px;">Testing Template&nbsp;</span><span style="font-family: Arial, Verdana; font-size: 13.3333px;">Testing Template&nbsp;</span><span style="font-family: Arial, Verdana; font-size: 13.3333px;">Testing Template&nbsp;</span><span style="font-family: Arial, Verdana; font-size: 13.3333px;">Testing Template&nbsp;</span><span style="font-family: Arial, Verdana; font-size: 13.3333px;">Testing Template&nbsp;</span><span style="font-family: Arial, Verdana; font-size: 13.3333px;">Testing Template&nbsp;</span><div><span style="font-family: Arial, Verdana; font-size: 13.3333px;"><br></span></div><div><span style="font-family: Arial, Verdana; font-size: 13.3333px;"><br></span></div><div><span style="font-family: Arial, Verdana; font-size: 13.3333px;">Testing Template&nbsp;</span><span style="font-family: Arial, Verdana; font-size: 13.3333px;">Testing Template&nbsp;</span><span style="font-family: Arial, Verdana; font-size: 13.3333px;">Testing Template&nbsp;</span><span style="font-family: Arial, Verdana; font-size: 13.3333px;">Testing Template&nbsp;</span><span style="font-family: Arial, Verdana; font-size: 13.3333px;">Testing Template&nbsp;</span><span style="font-family: Arial, Verdana; font-size: 13.3333px;">Testing Template&nbsp;</span><span style="font-family: Arial, Verdana; font-size: 13.3333px;">Testing Template&nbsp;</span><span style="font-family: Arial, Verdana; font-size: 13.3333px;">Testing Template&nbsp;</span><span style="font-family: Arial, Verdana; font-size: 13.3333px;">Testing Template&nbsp;</span><span style="font-family: Arial, Verdana; font-size: 13.3333px;">Testing Template&nbsp;</span><span style="font-family: Arial, Verdana; font-size: 13.3333px;">Testing Temp<span style="background-color: rgb(255, 0, 0);">late&nbsp;</span></span><span style="background-color: rgb(255, 0, 0);"><span style="font-family: Arial, Verdana; font-size: 13.3333px;">Testing Template&nbsp;</span><span style="font-family: Arial, Verdana; font-size: 13.3333px;">Testing Template&nbsp;</span><span style="font-family: Arial, Verdana; font-size: 13.3333px;">Testing Template&nbsp;</span><span style="font-family: Arial, Verdana; font-size: 13.3333px;">Testing Template&nbsp;</span><span style="font-family: Arial, Verdana; font-size: 13.3333px;">Testing Template&nbsp;</span><span style="font-family: Arial, Verdana; font-size: 13.3333px;">Testing Template&nbsp;</span><span style="font-family: Arial, Verdana; font-size: 13.3333px;">Testing Template&nbsp;</span><span style="font-family: Arial, Verdana; font-size: 13.3333px;">Testing Template&nbsp;</span></span><span style="font-family: Arial, Verdana; font-size: 13.3333px;"><span style="background-color: rgb(255, 0, 0);">Te</span>sting Template&nbsp;</span><span style="font-family: Arial, Verdana; font-size: 13.3333px;">Testing Template&nbsp;</span><span style="font-family: Arial, Verdana; font-size: 13.3333px;">Testing Template&nbsp;</span><span style="font-family: Arial, Verdana; font-size: 13.3333px;">Testing Template&nbsp;</span><span style="font-family: Arial, Verdana; font-size: 13.3333px;">Testing Template&nbsp;</span><span style="font-family: Arial, Verdana; font-size: 13.3333px;">Testing Template&nbsp;</span></div><div><span style="font-family: Arial, Verdana; font-size: 13.3333px;"><br></span></div><div><span style="font-family: Arial, Verdana; font-size: 13.3333px;">Testing Template&nbsp;</span><span style="font-family: Arial, Verdana; font-size: 13.3333px;">Testing Template&nbsp;</span><span style="font-family: Arial, Verdana; font-size: 13.3333px;">Testing Template&nbsp;</span><span style="font-family: Arial, Verdana; font-size: 13.3333px;">Testing Template&nbsp;</span><span style="font-family: Arial, Verdana; font-size: 13.3333px;">Testing Template&nbsp;</span><span style="font-family: Arial, Verdana; font-size: 13.3333px;">Testing Template&nbsp;</span><span style="font-family: Arial, Verdana; font-size: 13.3333px;">Testing Template&nbsp;</span><span style="font-family: Arial, Verdana; font-size: 13.3333px;">Testing Template&nbsp;</span><span style="font-family: Arial, Verdana; font-size: 13.3333px;">Testing Template&nbsp;</span><span style="font-family: Arial, Verdana; font-size: 13.3333px;">Testing Template&nbsp;</span><span style="font-family: Arial, Verdana; font-size: 13.3333px;">Testing Template&nbsp;</span><span style="font-family: Arial, Verdana; font-size: 13.3333px;">Testing Template&nbsp;</span><span style="font-family: Arial, Verdana; font-size: 13.3333px;">Testing Template&nbsp;</span><span style="font-family: Arial, Verdana; font-size: 13.3333px;">Testing Template&nbsp;</span><span style="font-family: Arial, Verdana; font-size: 13.3333px;">Testing Template&nbsp;</span><b><span style="font-family: Arial, Verdana; font-size: 13.3333px;">Testing Template&nbsp;</span><span style="font-family: Arial, Verdana; font-size: 13.3333px;">Testing Template&nbsp;</span><span style="font-family: Arial, Verdana; font-size: 13.3333px;">Testing Template&nbsp;</span><span style="font-family: Arial, Verdana; font-size: 13.3333px;">Testing Template&nbsp;</span><span style="font-family: Arial, Verdana; font-size: 13.3333px;">Testing Template&nbsp;</span><span style="font-family: Arial, Verdana; font-size: 13.3333px;">Testing Template&nbsp;</span><span style="font-family: Arial, Verdana; font-size: 13.3333px;">Testing Template&nbsp;</span><span style="font-family: Arial, Verdana; font-size: 13.3333px;">Testing Template&nbsp;</span></b></div>', 'www.google.com', 'www.gmail.com', '10', 'Firefox', '10', 'Yes', 'Fixed', 'HTML, CSS and Javascript', 'Yes', 'Simple , Corporate', '40g1.jpg', '27-02-2016', '12', '40g2.jpg', '40g6.jpg', '40g4.jpg', '', '', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
