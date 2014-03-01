-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 01, 2014 at 09:16 AM
-- Server version: 5.6.14
-- PHP Version: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `yenlinh`
--

-- --------------------------------------------------------

--
-- Table structure for table `authassignment`
--

CREATE TABLE IF NOT EXISTS `authassignment` (
  `itemname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `userid` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `bizrule` text COLLATE utf8_unicode_ci,
  `data` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `authassignment`
--

INSERT INTO `authassignment` (`itemname`, `userid`, `bizrule`, `data`) VALUES
('admin', '1', NULL, 'N;'),
('admin', '1', NULL, 'N;');

-- --------------------------------------------------------

--
-- Table structure for table `authuser`
--

CREATE TABLE IF NOT EXISTS `authuser` (
  `authId` int(11) NOT NULL AUTO_INCREMENT,
  `type` int(2) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `bizrule` text COLLATE utf8_unicode_ci,
  `data` text COLLATE utf8_unicode_ci,
  `ordering` int(4) NOT NULL,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`authId`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `authuser`
--

INSERT INTO `authuser` (`authId`, `type`, `name`, `title`, `description`, `bizrule`, `data`, `ordering`, `status`) VALUES
(1, 1, 'admin', 'Administrator', NULL, NULL, NULL, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `lienhe`
--

CREATE TABLE IF NOT EXISTS `lienhe` (
  `Id` int(11) NOT NULL DEFAULT '0',
  `Ten` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `Dienthoai` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `Yahoo` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `Skype` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `object`
--

CREATE TABLE IF NOT EXISTS `object` (
  `Id` int(11) NOT NULL,
  `Value` int(11) NOT NULL,
  `Status` int(11) NOT NULL,
  `Name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `Created` datetime NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `object`
--

INSERT INTO `object` (`Id`, `Value`, `Status`, `Name`, `Created`) VALUES
(1, 1, 0, 'Loại Sản phẩm', '0000-00-00 00:00:00'),
(2, 2, 1, 'Nhóm sản phẩm', '2014-02-17 00:00:00'),
(3, 3, 1, 'Sản phẩm', '2014-02-17 00:00:00'),
(4, 4, 1, 'Banner', '2014-02-17 00:00:00'),
(5, 5, 1, 'Menu trái', '2014-02-17 00:00:00'),
(6, 6, 1, 'Menu phải', '2014-02-17 00:00:00'),
(7, 7, 1, 'Monu Top', '2014-02-05 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE IF NOT EXISTS `sanpham` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `url` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `type` int(11) NOT NULL,
  `parent` int(11) NOT NULL,
  `child` int(11) NOT NULL,
  `gia` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `tieude` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `noidung` text COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `image` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `userId` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(2) NOT NULL,
  `lastLogin` datetime NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  PRIMARY KEY (`userId`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `email`, `password`, `status`, `lastLogin`, `created`, `updated`) VALUES
(1, 'admin@yenlinh.vn', '311ce1c2ce5df5d0c6ac41536c362f15', 1, '2013-12-10 11:19:13', '2013-11-07 19:33:17', '2013-12-10 11:19:13'),
(2, '11', '11', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, '3', '3', 3, '2014-02-17 00:00:00', '2014-02-10 00:00:00', '2014-02-03 00:00:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
