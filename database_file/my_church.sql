-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 05, 2018 at 03:44 PM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `my_church`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login_details`
--

DROP TABLE IF EXISTS `tbl_login_details`;
CREATE TABLE IF NOT EXISTS `tbl_login_details` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `user_username` varchar(50) NOT NULL,
  `entry_key` varchar(500) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_login_details`
--

INSERT INTO `tbl_login_details` (`id`, `user_username`, `entry_key`, `date_created`) VALUES
(1, 'po', 'as', '2018-02-08 06:12:03'),
(2, 'flash', '$2y$12$BS1VK8hGax.3Bvqbk1zr3eTvCNpW49bIl50MZiekXHq2IJ9qZJ89q', '2018-02-08 06:22:58'),
(3, 'peter', '$2y$12$Ix/db0UNiHTG8/XNFPsJAudvIBBQMUWwcZ2V2fspS93eC/81iV1qW', '2018-02-08 14:54:38');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_my_forum`
--

DROP TABLE IF EXISTS `tbl_my_forum`;
CREATE TABLE IF NOT EXISTS `tbl_my_forum` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `given_id` int(5) NOT NULL,
  `message` mediumtext NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_my_forum_main_topic`
--

DROP TABLE IF EXISTS `tbl_my_forum_main_topic`;
CREATE TABLE IF NOT EXISTS `tbl_my_forum_main_topic` (
  `id` varchar(50) NOT NULL,
  `main_topic` mediumtext NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_my_pictures`
--

DROP TABLE IF EXISTS `tbl_my_pictures`;
CREATE TABLE IF NOT EXISTS `tbl_my_pictures` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `file_name` varchar(100) NOT NULL,
  `file_type` varchar(100) NOT NULL,
  `file_size` varchar(100) NOT NULL,
  `file_path` varchar(200) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=77 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `tbl_my_pictures`
--

INSERT INTO `tbl_my_pictures` (`id`, `file_name`, `file_type`, `file_size`, `file_path`, `date`) VALUES
(1, 'Pastor Preaching', 'JPG', '45KB', 'bower_components/image_plugin/demonstration/1.jpg', '2018-02-14 07:31:10'),
(2, 'Pointing', 'JPG', '50KB', 'bower_components/image_plugin/demonstration/2.jpg', '2018-02-14 07:38:03'),
(3, 'Pastor Preaching', 'JPG', '45KB', 'bower_components/image_plugin/demonstration/3.jpg', '2018-02-14 07:31:10'),
(4, 'Pointing', 'JPG', '50KB', 'bower_components/image_plugin/demonstration/4.jpg', '2018-02-14 07:38:03'),
(5, 'Pastor Preaching', 'JPG', '45KB', 'bower_components/image_plugin/demonstration/5.jpg', '2018-02-14 07:31:10'),
(6, 'Pointing', 'JPG', '50KB', 'bower_components/image_plugin/demonstration/6.jpg', '2018-02-14 07:38:03'),
(7, 'Pastor Preaching', 'JPG', '45KB', 'bower_components/image_plugin/demonstration/7.jpg', '2018-02-14 07:31:10'),
(8, 'Pointing', 'JPG', '50KB', 'bower_components/image_plugin/demonstration/8.jpg', '2018-02-14 07:38:03'),
(9, 'Pastor Preaching', 'JPG', '45KB', 'bower_components/image_plugin/demonstration/9.jpg', '2018-02-14 07:31:10'),
(10, 'Pointing', 'JPG', '50KB', 'bower_components/image_plugin/demonstration/10.jpg', '2018-02-14 07:38:03'),
(11, 'Pastor Preaching', 'JPG', '45KB', 'bower_components/image_plugin/demonstration/11.jpg', '2018-02-14 07:31:10'),
(12, 'Pointing', 'JPG', '50KB', 'bower_components/image_plugin/demonstration/12.jpg', '2018-02-14 07:38:03'),
(13, 'Pastor Preaching', 'JPG', '45KB', 'bower_components/image_plugin/demonstration/13.jpg', '2018-02-14 07:31:10'),
(14, 'Pointing', 'JPG', '50KB', 'bower_components/image_plugin/demonstration/14.jpg', '2018-02-14 07:38:03'),
(15, 'Pastor Preaching', 'JPG', '45KB', 'bower_components/image_plugin/demonstration/15.jpg', '2018-02-14 07:31:10'),
(16, 'Pointing', 'JPG', '50KB', 'bower_components/image_plugin/demonstration/16.jpg', '2018-02-14 07:38:03'),
(17, 'Pastor Preaching', 'JPG', '45KB', 'bower_components/image_plugin/demonstration/17.jpg', '2018-02-14 07:31:10'),
(18, 'Pointing', 'JPG', '50KB', 'bower_components/image_plugin/demonstration/18.jpg', '2018-02-14 07:38:03'),
(19, 'Pastor Preaching', 'JPG', '45KB', 'bower_components/image_plugin/demonstration/19.jpg', '2018-02-14 07:31:10'),
(20, 'Pointing', 'JPG', '50KB', 'bower_components/image_plugin/demonstration/20.jpg', '2018-02-14 07:38:03'),
(21, 'Pastor Preaching', 'JPG', '45KB', 'bower_components/image_plugin/demonstration/21.jpg', '2018-02-14 07:31:10'),
(22, 'Pointing', 'JPG', '50KB', 'bower_components/image_plugin/demonstration/22.jpg', '2018-02-14 07:38:03'),
(23, 'Pastor Preaching', 'JPG', '45KB', 'bower_components/image_plugin/demonstration/23.jpg', '2018-02-14 07:31:10'),
(24, 'Pointing', 'JPG', '50KB', 'bower_components/image_plugin/demonstration/24.jpg', '2018-02-14 07:38:03'),
(25, 'Pastor Preaching', 'JPG', '45KB', 'bower_components/image_plugin/demonstration/25.jpg', '2018-02-14 07:31:10'),
(26, 'Pointing', 'JPG', '50KB', 'bower_components/image_plugin/demonstration/26.jpg', '2018-02-14 07:38:03'),
(27, 'Pastor Preaching', 'JPG', '45KB', 'bower_components/image_plugin/demonstration/27.jpg', '2018-02-14 07:31:10'),
(28, 'Pointing', 'JPG', '50KB', 'bower_components/image_plugin/demonstration/28.jpg', '2018-02-14 07:38:03'),
(29, 'Pastor Preaching', 'JPG', '45KB', 'bower_components/image_plugin/demonstration/29.jpg', '2018-02-14 07:31:10'),
(30, 'Pointing', 'JPG', '50KB', 'bower_components/image_plugin/demonstration/30.jpg', '2018-02-14 07:38:03'),
(31, 'Pastor Preaching', 'JPG', '45KB', 'bower_components/image_plugin/demonstration/31.jpg', '2018-02-14 07:31:10'),
(32, 'Pointing', 'JPG', '50KB', 'bower_components/image_plugin/demonstration/32.jpg', '2018-02-14 07:38:03'),
(33, 'Pastor Preaching', 'JPG', '45KB', 'bower_components/image_plugin/demonstration/33.jpg', '2018-02-14 07:31:10'),
(34, 'Pointing', 'JPG', '50KB', 'bower_components/image_plugin/demonstration/34.jpg', '2018-02-14 07:38:03'),
(35, 'Pastor Preaching', 'JPG', '45KB', 'bower_components/image_plugin/demonstration/35.jpg', '2018-02-14 07:31:10'),
(36, 'Pointing', 'JPG', '50KB', 'bower_components/image_plugin/demonstration/36.jpg', '2018-02-14 07:38:03'),
(37, 'Pastor Preaching', 'JPG', '45KB', 'bower_components/image_plugin/demonstration/37.jpg', '2018-02-14 07:31:10'),
(38, 'Pointing', 'JPG', '50KB', 'bower_components/image_plugin/demonstration/38.jpg', '2018-02-14 07:38:03'),
(39, 'Pastor Preaching', 'JPG', '45KB', 'bower_components/image_plugin/demonstration/39.jpg', '2018-02-14 07:31:10'),
(40, 'Pointing', 'JPG', '50KB', 'bower_components/image_plugin/demonstration/40.jpg', '2018-02-14 07:38:03'),
(41, 'Pastor Preaching', 'JPG', '45KB', 'bower_components/image_plugin/demonstration/41.jpg', '2018-02-14 07:31:10'),
(42, 'Pointing', 'JPG', '50KB', 'bower_components/image_plugin/demonstration/42.jpg', '2018-02-14 07:38:03'),
(43, 'Pastor Preaching', 'JPG', '45KB', 'bower_components/image_plugin/demonstration/43.jpg', '2018-02-14 07:31:10'),
(44, 'Pointing', 'JPG', '50KB', 'bower_components/image_plugin/demonstration/44.jpg', '2018-02-14 07:38:03'),
(45, 'Pastor Preaching', 'JPG', '45KB', 'bower_components/image_plugin/demonstration/45.jpg', '2018-02-14 07:31:10'),
(46, 'Pointing', 'JPG', '50KB', 'bower_components/image_plugin/demonstration/46.jpg', '2018-02-14 07:38:03'),
(47, 'Pastor Preaching', 'JPG', '45KB', 'bower_components/image_plugin/demonstration/47.jpg', '2018-02-14 07:31:10'),
(48, 'Pointing', 'JPG', '50KB', 'bower_components/image_plugin/demonstration/48.jpg', '2018-02-14 07:38:03'),
(49, 'Pastor Preaching', 'JPG', '45KB', 'bower_components/image_plugin/demonstration/49.jpg', '2018-02-14 07:31:10'),
(50, 'Pointing', 'JPG', '50KB', 'bower_components/image_plugin/demonstration/50.jpg', '2018-02-14 07:38:03'),
(51, 'Pastor Preaching', 'JPG', '45KB', 'bower_components/image_plugin/demonstration/51.jpg', '2018-02-14 07:31:10'),
(52, 'Pointing', 'JPG', '50KB', 'bower_components/image_plugin/demonstration/52.jpg', '2018-02-14 07:38:03'),
(53, 'Pastor Preaching', 'JPG', '45KB', 'bower_components/image_plugin/demonstration/53.jpg', '2018-02-14 07:31:10'),
(54, 'Pointing', 'JPG', '50KB', 'bower_components/image_plugin/demonstration/54.jpg', '2018-02-14 07:38:03'),
(55, 'Pastor Preaching', 'JPG', '45KB', 'bower_components/image_plugin/demonstration/55.jpg', '2018-02-14 07:31:10'),
(56, 'Pointing', 'JPG', '50KB', 'bower_components/image_plugin/demonstration/56.jpg', '2018-02-14 07:38:03'),
(57, 'Pastor Preaching', 'JPG', '45KB', 'bower_components/image_plugin/demonstration/57.jpg', '2018-02-14 07:31:10'),
(58, 'Pointing', 'JPG', '50KB', 'bower_components/image_plugin/demonstration/58.jpg', '2018-02-14 07:38:03'),
(59, 'Pastor Preaching', 'JPG', '45KB', 'bower_components/image_plugin/demonstration/59.jpg', '2018-02-14 07:31:10'),
(60, 'Pointing', 'JPG', '50KB', 'bower_components/image_plugin/demonstration/60.jpg', '2018-02-14 07:38:03'),
(61, 'Pastor Preaching', 'JPG', '45KB', 'bower_components/image_plugin/demonstration/61.jpg', '2018-02-14 07:31:10'),
(67, '79.jpg', 'image/jpeg', '103376', 'bower_components/image_plugin/demonstration/79.jpg', '2018-02-23 14:25:02');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sermon_uploads`
--

DROP TABLE IF EXISTS `tbl_sermon_uploads`;
CREATE TABLE IF NOT EXISTS `tbl_sermon_uploads` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sermon_title` varchar(100) NOT NULL,
  `sermon_date` varchar(100) NOT NULL,
  `sermon_pastor` varchar(50) NOT NULL,
  `file_name` varchar(100) NOT NULL,
  `file_type` varchar(100) NOT NULL,
  `file_size` varchar(100) NOT NULL,
  `file_path` varchar(200) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_upcoming_events`
--

DROP TABLE IF EXISTS `tbl_upcoming_events`;
CREATE TABLE IF NOT EXISTS `tbl_upcoming_events` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `event_title` varchar(500) NOT NULL,
  `image_location` varchar(100) NOT NULL,
  `event_date` varchar(20) NOT NULL,
  `event_location` varchar(60) NOT NULL,
  `event_time` varchar(10) NOT NULL,
  `event_description` longtext NOT NULL,
  `date_recorded` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_upcoming_events`
--

INSERT INTO `tbl_upcoming_events` (`id`, `event_title`, `image_location`, `event_date`, `event_location`, `event_time`, `event_description`, `date_recorded`) VALUES
(5, 'Nam libero tempore cum soluta nobis eligendii', 'special_images/1520133700-23.jpg', '2018-02-21', 'Los', '9:00AM', 'My name is John Doe', '2018-02-06 05:03:46'),
(6, 'This is the event tile', 'special_images/1520133667-1.jpg', '2018-03-20', 'This is the event location', '5:00pm', 'This is something small to see some few things', '2018-02-24 19:09:04'),
(11, 'The House Of God Ministry', 'special_images/1519880400-8.jpg', '2018-10-10', 'Kasoa', '5:00AM', 'It Would be Gbeye', '2018-03-01 05:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_upcoming_sermons`
--

DROP TABLE IF EXISTS `tbl_upcoming_sermons`;
CREATE TABLE IF NOT EXISTS `tbl_upcoming_sermons` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `upcoming_sermon_title` varchar(500) NOT NULL,
  `upcoming_sermon_date` varchar(20) NOT NULL,
  `upcoming_sermon_location` varchar(60) NOT NULL,
  `sermon_time` varchar(10) NOT NULL,
  `sermon_description` varchar(200) NOT NULL,
  `sermon_pastor` varchar(50) NOT NULL,
  `date_recorded` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
