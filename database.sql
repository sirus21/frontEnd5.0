-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 14, 2011 at 04:43 PM
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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

--
-- Dumping data for table `acos`
--

INSERT INTO `acos` (`id`, `parent_id`, `model`, `foreign_key`, `alias`, `lft`, `rght`) VALUES
(1, NULL, NULL, NULL, 'controllers', 1, 60),
(2, 1, NULL, NULL, 'Groups', 2, 13),
(3, 2, NULL, NULL, 'index', 3, 4),
(4, 2, NULL, NULL, 'view', 5, 6),
(5, 2, NULL, NULL, 'add', 7, 8),
(6, 2, NULL, NULL, 'edit', 9, 10),
(7, 2, NULL, NULL, 'delete', 11, 12),
(8, 1, NULL, NULL, 'Posts', 14, 27),
(9, 8, NULL, NULL, 'index', 15, 16),
(10, 8, NULL, NULL, 'view', 17, 18),
(11, 8, NULL, NULL, 'add', 19, 20),
(12, 8, NULL, NULL, 'edit', 21, 22),
(13, 8, NULL, NULL, 'delete', 23, 24),
(14, 8, NULL, NULL, 'build_acl', 25, 26),
(15, 1, NULL, NULL, 'Users', 28, 45),
(16, 15, NULL, NULL, 'index', 29, 30),
(17, 15, NULL, NULL, 'view', 31, 32),
(18, 15, NULL, NULL, 'add', 33, 34),
(19, 15, NULL, NULL, 'edit', 35, 36),
(20, 15, NULL, NULL, 'delete', 37, 38),
(21, 1, NULL, NULL, 'Widgets', 46, 57),
(22, 21, NULL, NULL, 'index', 47, 48),
(23, 21, NULL, NULL, 'view', 49, 50),
(24, 21, NULL, NULL, 'add', 51, 52),
(25, 21, NULL, NULL, 'edit', 53, 54),
(26, 21, NULL, NULL, 'delete', 55, 56),
(31, 1, NULL, NULL, 'AclExtras', 58, 59),
(28, 15, NULL, NULL, 'initDB', 39, 40),
(29, 15, NULL, NULL, 'login', 41, 42),
(30, 15, NULL, NULL, 'logout', 43, 44);

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `aros`
--

INSERT INTO `aros` (`id`, `parent_id`, `model`, `foreign_key`, `alias`, `lft`, `rght`) VALUES
(1, NULL, 'Group', 1, NULL, 1, 14),
(2, NULL, 'Group', 2, NULL, 15, 18),
(3, NULL, 'Group', 3, NULL, 19, 20),
(11, 1, 'User', 8, NULL, 8, 9),
(5, 1, 'User', 1, NULL, 2, 3),
(9, 1, 'User', 6, NULL, 4, 5),
(10, 1, 'User', 7, NULL, 6, 7),
(12, 1, 'User', 9, NULL, 10, 11),
(13, 1, 'User', 10, NULL, 12, 13),
(14, 2, 'User', 11, NULL, 16, 17);

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `aros_acos`
--

INSERT INTO `aros_acos` (`id`, `aro_id`, `aco_id`, `_create`, `_read`, `_update`, `_delete`) VALUES
(1, 1, 1, '1', '1', '1', '1'),
(2, 2, 1, '-1', '-1', '-1', '-1'),
(3, 2, 8, '1', '1', '1', '1'),
(4, 2, 21, '1', '1', '1', '1'),
(5, 3, 1, '-1', '-1', '-1', '-1'),
(6, 3, 11, '1', '1', '1', '1'),
(7, 3, 12, '1', '1', '1', '1'),
(8, 3, 24, '1', '1', '1', '1'),
(9, 3, 25, '1', '1', '1', '1');

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `created`, `modified`) VALUES
(1, 'administrator', '2011-11-10 15:23:23', '2011-11-10 15:23:23'),
(2, 'user', '2011-11-10 15:23:37', '2011-11-10 15:23:37'),
(3, 'merchant', '2011-11-10 15:25:18', '2011-11-10 15:25:18');

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `title`, `body`, `created`, `modified`) VALUES
(1, 1, 'fvgfgfgfggf', 'gfgfgfgfgfgfgfgfgfgf', '2011-11-11 10:40:52', '2011-11-11 10:40:52');

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
  `full_name` varchar(40) NOT NULL,
  `contact_number` varchar(15) NOT NULL,
  `email` varchar(250) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `group_id`, `created`, `modified`, `full_name`, `contact_number`, `email`) VALUES
(1, 'Goodapple', 'Password1', 1, '2011-11-10 15:26:26', '2011-11-11 12:49:54', '', '', ''),
(6, 'Punter', 'Password1', 1, '2011-11-11 13:56:58', '2011-11-11 13:56:58', '', '', ''),
(7, 'joeappleton19', 'Password1', 1, '2011-11-11 15:47:43', '2011-11-11 15:47:43', '', '', ''),
(8, 'joeappleton199', 'Password1', 1, '2011-11-11 15:50:17', '2011-11-11 15:50:17', '', '', ''),
(9, 'joeappleton199lllll', 'a962ef093b6bde22867ac95befa26a7fb28dbfc1', 1, '2011-11-11 15:51:02', '2011-11-11 15:51:02', '', '', ''),
(10, 'Smith', 'a962ef093b6bde22867ac95befa26a7fb28dbfc1', 1, '2011-11-11 15:51:23', '2011-11-11 15:51:23', '', '', ''),
(11, 'user', 'a962ef093b6bde22867ac95befa26a7fb28dbfc1', 2, '2011-11-11 16:30:43', '2011-11-11 16:30:43', '', '', '');

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