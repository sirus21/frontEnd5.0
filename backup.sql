-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 02, 2011 at 07:16 PM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `front_end`
--

-- --------------------------------------------------------

--
-- Table structure for table `acos`
--

CREATE TABLE IF NOT EXISTS `acos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `foreign_key` int(10) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `lft` int(10) DEFAULT NULL,
  `rght` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=68 ;

--
-- Dumping data for table `acos`
--

INSERT INTO `acos` (`id`, `parent_id`, `model`, `foreign_key`, `alias`, `lft`, `rght`) VALUES
(1, NULL, NULL, NULL, 'controllers', 1, 132),
(2, 1, NULL, NULL, 'BusinessHours', 2, 13),
(3, 2, NULL, NULL, 'index', 3, 4),
(4, 2, NULL, NULL, 'view', 5, 6),
(5, 2, NULL, NULL, 'add', 7, 8),
(6, 2, NULL, NULL, 'edit', 9, 10),
(7, 2, NULL, NULL, 'delete', 11, 12),
(8, 1, NULL, NULL, 'CallSessions', 14, 27),
(9, 8, NULL, NULL, 'index', 15, 16),
(10, 8, NULL, NULL, 'loadleads', 17, 18),
(11, 8, NULL, NULL, 'view', 19, 20),
(12, 8, NULL, NULL, 'add', 21, 22),
(13, 8, NULL, NULL, 'edit', 23, 24),
(14, 8, NULL, NULL, 'delete', 25, 26),
(15, 1, NULL, NULL, 'Calls', 28, 49),
(16, 15, NULL, NULL, 'index', 29, 30),
(17, 15, NULL, NULL, 'view', 31, 32),
(18, 15, NULL, NULL, 'add', 33, 34),
(19, 15, NULL, NULL, 'edit', 35, 36),
(20, 15, NULL, NULL, 'delete', 37, 38),
(21, 15, NULL, NULL, 'admin_index', 39, 40),
(22, 15, NULL, NULL, 'admin_view', 41, 42),
(23, 15, NULL, NULL, 'admin_add', 43, 44),
(24, 15, NULL, NULL, 'admin_edit', 45, 46),
(25, 15, NULL, NULL, 'admin_delete', 47, 48),
(26, 1, NULL, NULL, 'Camps', 50, 61),
(27, 26, NULL, NULL, 'index', 51, 52),
(28, 26, NULL, NULL, 'view', 53, 54),
(29, 26, NULL, NULL, 'add', 55, 56),
(30, 26, NULL, NULL, 'edit', 57, 58),
(31, 26, NULL, NULL, 'delete', 59, 60),
(32, 1, NULL, NULL, 'Groups', 62, 73),
(33, 32, NULL, NULL, 'index', 63, 64),
(34, 32, NULL, NULL, 'view', 65, 66),
(35, 32, NULL, NULL, 'add', 67, 68),
(36, 32, NULL, NULL, 'edit', 69, 70),
(37, 32, NULL, NULL, 'delete', 71, 72),
(38, 1, NULL, NULL, 'Posts', 74, 87),
(39, 38, NULL, NULL, 'index', 75, 76),
(40, 38, NULL, NULL, 'view', 77, 78),
(41, 38, NULL, NULL, 'add', 79, 80),
(42, 38, NULL, NULL, 'edit', 81, 82),
(43, 38, NULL, NULL, 'delete', 83, 84),
(44, 38, NULL, NULL, 'build_acl', 85, 86),
(45, 1, NULL, NULL, 'Users', 88, 117),
(46, 45, NULL, NULL, 'beforeSave', 89, 90),
(47, 45, NULL, NULL, 'initDB', 91, 92),
(48, 45, NULL, NULL, 'login', 93, 94),
(49, 45, NULL, NULL, 'logout', 95, 96),
(50, 45, NULL, NULL, 'index', 97, 98),
(51, 45, NULL, NULL, 'view', 99, 100),
(52, 45, NULL, NULL, 'register', 101, 102),
(53, 45, NULL, NULL, 'resendemail', 103, 104),
(54, 45, NULL, NULL, 'forgottonPassword', 105, 106),
(55, 45, NULL, NULL, 'registrationMessage', 107, 108),
(56, 45, NULL, NULL, 'edit', 109, 110),
(57, 45, NULL, NULL, 'delete', 111, 112),
(58, 45, NULL, NULL, 'resetpword', 113, 114),
(59, 45, NULL, NULL, 'activate', 115, 116),
(60, 1, NULL, NULL, 'Widgets', 118, 129),
(61, 60, NULL, NULL, 'index', 119, 120),
(62, 60, NULL, NULL, 'view', 121, 122),
(63, 60, NULL, NULL, 'add', 123, 124),
(64, 60, NULL, NULL, 'edit', 125, 126),
(65, 60, NULL, NULL, 'delete', 127, 128),
(67, 1, NULL, NULL, 'AclExtras', 130, 131);

-- --------------------------------------------------------

--
-- Table structure for table `aros`
--

CREATE TABLE IF NOT EXISTS `aros` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `foreign_key` int(10) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `lft` int(10) DEFAULT NULL,
  `rght` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `aros`
--

INSERT INTO `aros` (`id`, `parent_id`, `model`, `foreign_key`, `alias`, `lft`, `rght`) VALUES
(1, NULL, 'Group', 4, NULL, 1, 6),
(2, NULL, 'Group', 5, NULL, 7, 8),
(3, NULL, 'Group', 6, NULL, 9, 12),
(4, 1, 'User', 32, NULL, 2, 3),
(5, 1, 'User', 33, NULL, 4, 5),
(6, 3, 'User', 34, NULL, 10, 11);

-- --------------------------------------------------------

--
-- Table structure for table `aros_acos`
--

CREATE TABLE IF NOT EXISTS `aros_acos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `aro_id` int(10) NOT NULL,
  `aco_id` int(10) NOT NULL,
  `_create` varchar(2) NOT NULL DEFAULT '0',
  `_read` varchar(2) NOT NULL DEFAULT '0',
  `_update` varchar(2) NOT NULL DEFAULT '0',
  `_delete` varchar(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `ARO_ACO_KEY` (`aro_id`,`aco_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `aros_acos`
--

INSERT INTO `aros_acos` (`id`, `aro_id`, `aco_id`, `_create`, `_read`, `_update`, `_delete`) VALUES
(1, 1, 1, '1', '1', '1', '1'),
(2, 2, 1, '-1', '-1', '-1', '-1'),
(3, 2, 38, '1', '1', '1', '1'),
(4, 2, 60, '1', '1', '1', '1'),
(5, 3, 1, '-1', '-1', '-1', '-1'),
(6, 3, 41, '1', '1', '1', '1'),
(7, 3, 42, '1', '1', '1', '1'),
(8, 3, 63, '1', '1', '1', '1'),
(9, 3, 64, '1', '1', '1', '1'),
(10, 3, 9, '1', '1', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `business_hours`
--

CREATE TABLE IF NOT EXISTS `business_hours` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `camp_id` int(11) NOT NULL,
  `day` int(11) NOT NULL,
  `open_time` time NOT NULL,
  `close_time` time NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `business_hours`
--


-- --------------------------------------------------------

--
-- Table structure for table `calls`
--

CREATE TABLE IF NOT EXISTS `calls` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `caller_phone_number` varchar(250) NOT NULL DEFAULT 'anonymous',
  `call_start_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `convo_start_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `call_end_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `number_called` varchar(16) NOT NULL,
  `tropo_sesh` varchar(100) NOT NULL,
  `button_pressed` varchar(11) NOT NULL DEFAULT '0',
  `call_session_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `calls`
--

INSERT INTO `calls` (`id`, `caller_phone_number`, `call_start_time`, `convo_start_time`, `call_end_time`, `number_called`, `tropo_sesh`, `button_pressed`, `call_session_id`) VALUES
(15, '2147483647', '2011-11-28 18:56:53', '0000-00-00 00:00:00', '2011-11-28 18:57:00', '', 'f4ea9e35c64321a338affa5abd39eba3', '', 2),
(16, '2147483647', '2011-11-28 18:56:53', '0000-00-00 00:00:00', '2011-11-28 18:57:00', '', 'f4ea9e35c64321a338affa5abd39eba3', '', 2),
(17, '2147483647', '2011-11-28 18:56:53', '0000-00-00 00:00:00', '2011-11-28 18:57:00', '', 'f4ea9e35c64321a338affa5abd39eba3', '', 2),
(18, '2147483647', '2011-11-28 18:56:53', '0000-00-00 00:00:00', '2011-11-28 18:57:00', '', 'f4ea9e35c64321a338affa5abd39eba3', '', 2),
(19, '2147483647', '2011-11-28 18:56:53', '0000-00-00 00:00:00', '2011-11-28 18:57:00', '', 'f4ea9e35c64321a338affa5abd39eba3', '', 2),
(20, '2147483647', '2011-11-28 18:56:53', '0000-00-00 00:00:00', '2011-11-28 18:57:00', '', 'f4ea9e35c64321a338affa5abd39eba3', '', 2),
(21, '2147483647', '2011-11-28 18:56:53', '0000-00-00 00:00:00', '2011-11-28 18:57:00', '', 'f4ea9e35c64321a338affa5abd39eba3', '', 2),
(22, '2147483647', '2011-11-28 18:56:53', '0000-00-00 00:00:00', '2011-11-28 18:57:00', '', 'f4ea9e35c64321a338affa5abd39eba3', '', 2),
(23, '2147483647', '2011-11-28 18:56:53', '0000-00-00 00:00:00', '2011-11-28 18:57:00', '', 'f4ea9e35c64321a338affa5abd39eba3', '', 2);

-- --------------------------------------------------------

--
-- Table structure for table `call_sessions`
--

CREATE TABLE IF NOT EXISTS `call_sessions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `caller_number` varchar(40) NOT NULL,
  `number_called` varchar(16) NOT NULL,
  `camp_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `source` varchar(6) NOT NULL DEFAULT 'phone',
  `paid` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `call_sessions`
--

INSERT INTO `call_sessions` (`id`, `created`, `caller_number`, `number_called`, `camp_id`, `user_id`, `source`, `paid`) VALUES
(2, '2011-11-30 16:00:00', '2147483647', '08450951557', 1, 1, 'phone', 1),
(3, '2011-11-30 13:00:00', '2147483647', '08450951557', 1, 1, 'phone', 0),
(4, '2011-11-30 12:00:00', '2147483647', '08450951557', 1, 1, 'phone', 1),
(5, '2011-11-29 12:00:00', '2147483647', '08450951557', 1, 1, 'phone', 0),
(6, '2011-11-28 12:00:00', '2147483647', '08450951557', 1, 1, 'phone', 0),
(7, '0000-00-00 00:00:00', '2147483647', '08450951557', 1, 1, 'phone', 0),
(8, '0000-00-00 00:00:00', '2147483647', '08450951557', 1, 1, 'phone', 1),
(9, '0000-00-00 00:00:00', '2147483647', '08450951557', 1, 1, 'phone', 0),
(10, '0000-00-00 00:00:00', '2147483647', '08450951557', 1, 1, 'phone', 1),
(11, '0000-00-00 00:00:00', '2147483647', '08450951557', 1, 1, 'phone', 0),
(12, '0000-00-00 00:00:00', '2147483647', '08450951557', 1, 1, 'phone', 1),
(13, '0000-00-00 00:00:00', '2147483647', '08450951557', 1, 1, 'phone', 0),
(14, '0000-00-00 00:00:00', '2147483647', '08450951557', 1, 1, 'phone', 0),
(15, '0000-00-00 00:00:00', '2147483647', '08450951557', 1, 1, 'phone', 1),
(16, '0000-00-00 00:00:00', '2147483647', '08450951557', 1, 1, 'phone', 0),
(17, '0000-00-00 00:00:00', '2147483647', '08450951557', 1, 1, 'phone', 0),
(18, '0000-00-00 00:00:00', '2147483647', '08450951557', 1, 1, 'phone', 1),
(19, '0000-00-00 00:00:00', '2147483647', '08450951557', 1, 1, 'phone', 0),
(20, '0000-00-00 00:00:00', '2147483647', '08450951557', 1, 1, 'phone', 0),
(21, '0000-00-00 00:00:00', '2147483647', '08450951557', 1, 1, 'phone', 1),
(22, '0000-00-00 00:00:00', '2147483647', '08450951557', 1, 1, 'phone', 0),
(23, '0000-00-00 00:00:00', '2147483647', '08450951557', 1, 1, 'phone', 0),
(24, '0000-00-00 00:00:00', '2147483647', '08450951557', 1, 1, 'phone', 0),
(25, '0000-00-00 00:00:00', '2147483647', '08450951557', 1, 1, 'phone', 0);

-- --------------------------------------------------------

--
-- Table structure for table `camps`
--

CREATE TABLE IF NOT EXISTS `camps` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `merchant_name` varchar(11) NOT NULL,
  `camp_name` varchar(5) NOT NULL,
  `camp_long_name` varchar(30) NOT NULL,
  `camp_description` longtext NOT NULL,
  `payout` int(11) NOT NULL,
  `talk_time` int(11) NOT NULL,
  `created` time NOT NULL,
  `modified` time NOT NULL,
  `forward_number` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `camps`
--

INSERT INTO `camps` (`id`, `merchant_name`, `camp_name`, `camp_long_name`, `camp_description`, `payout`, `talk_time`, `created`, `modified`, `forward_number`) VALUES
(1, 'Net Basic', 'li', 'Life Insurance Tele', 'Life insurance camp for us', 10, 3, '17:40:09', '17:40:09', '07986836915');

-- --------------------------------------------------------

--
-- Table structure for table `forgotton_passwords`
--

CREATE TABLE IF NOT EXISTS `forgotton_passwords` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `active` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `forgotton_passwords`
--

INSERT INTO `forgotton_passwords` (`id`, `user_id`, `created`, `active`) VALUES
(12, 30, '2011-11-23 12:13:31', 1),
(11, 30, '2011-11-20 11:09:30', 1);

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `created`, `modified`) VALUES
(5, 'merchant', '2011-12-02 13:17:28', '2011-12-02 13:17:28'),
(4, 'admin', '2011-12-02 13:17:05', '2011-12-02 13:17:05'),
(6, 'user', '2011-12-02 13:17:41', '2011-12-02 13:17:41');

-- --------------------------------------------------------

--
-- Table structure for table `numbers`
--

CREATE TABLE IF NOT EXISTS `numbers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `number` varchar(16) NOT NULL,
  `user_id` int(11) NOT NULL,
  `camp_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `numbers`
--

INSERT INTO `numbers` (`id`, `number`, `user_id`, `camp_id`) VALUES
(1, '08450951557', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `payment_details`
--

CREATE TABLE IF NOT EXISTS `payment_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `modified` time NOT NULL,
  `user_id` int(11) NOT NULL,
  `bank_name` varchar(100) NOT NULL,
  `account_name` varchar(100) NOT NULL,
  `bank_address1` varchar(100) NOT NULL,
  `bank_address2` varchar(100) NOT NULL,
  `town` varchar(100) NOT NULL,
  `post_code` varchar(100) NOT NULL,
  `vat_number` varchar(100) NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `payment_details`
--

INSERT INTO `payment_details` (`id`, `modified`, `user_id`, `bank_name`, `account_name`, `bank_address1`, `bank_address2`, `town`, `post_code`, `vat_number`, `created`) VALUES
(1, '18:35:34', 34, 'HSBC', 'Goodapple', '1 Belmosdosdoksd', 'sdsdsdsd', 'sdsdsdsd', 'sdsdsdsd', 'sdsdsdsdsdsdsdsd', '2011-12-02 18:35:34');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` text,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `title`, `body`, `created`, `modified`) VALUES
(3, 11, 'fdfdfdf', 'dfdfdf', '2011-11-17 16:31:09', '2011-11-17 16:31:09');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` char(40) NOT NULL,
  `group_id` int(11) NOT NULL DEFAULT '2',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `first_name` varchar(40) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `contact_number` varchar(15) NOT NULL,
  `company_name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `active` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `group_id`, `created`, `modified`, `first_name`, `last_name`, `contact_number`, `company_name`, `email`, `active`) VALUES
(33, 'smith@hotmail.com', 'a962ef093b6bde22867ac95befa26a7fb28dbfc1', 4, '2011-12-02 13:27:34', '2011-12-02 13:27:34', 'smith', 'Appleton', '07986836915', 'Goodapple', 'smith@hotmail.com', 0),
(32, 'joeappleton@goodapple.co.uk', 'a962ef093b6bde22867ac95befa26a7fb28dbfc1', 4, '2011-12-02 13:26:15', '2011-12-02 13:26:15', 'Joe', 'Appleton', '07986836915', 'Goodapple', 'joeappleton@goodapple.co.uk', 0),
(34, 'smith1@hotmail.com', 'a962ef093b6bde22867ac95befa26a7fb28dbfc1', 6, '2011-12-02 13:27:53', '2011-12-02 13:27:53', 'smith', 'Appleton', '07986836915', 'Goodapple', 'smith1@hotmail.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `widgets`
--

CREATE TABLE IF NOT EXISTS `widgets` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `part_no` varchar(12) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `widgets`
--

INSERT INTO `widgets` (`id`, `name`, `part_no`, `quantity`) VALUES
(1, 'dffddfdfdf', 'dffdfdfd', 0);
