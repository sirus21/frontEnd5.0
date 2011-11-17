-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 17, 2011 at 06:06 PM
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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=36 ;

--
-- Dumping data for table `acos`
--

INSERT INTO `acos` (`id`, `parent_id`, `model`, `foreign_key`, `alias`, `lft`, `rght`) VALUES
(1, NULL, NULL, NULL, 'controllers', 1, 64),
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
(15, 1, NULL, NULL, 'Users', 28, 49),
(16, 15, NULL, NULL, 'index', 29, 30),
(17, 15, NULL, NULL, 'view', 31, 32),
(19, 15, NULL, NULL, 'edit', 33, 34),
(20, 15, NULL, NULL, 'delete', 35, 36),
(21, 1, NULL, NULL, 'Widgets', 50, 61),
(22, 21, NULL, NULL, 'index', 51, 52),
(23, 21, NULL, NULL, 'view', 53, 54),
(24, 21, NULL, NULL, 'add', 55, 56),
(25, 21, NULL, NULL, 'edit', 57, 58),
(26, 21, NULL, NULL, 'delete', 59, 60),
(35, 1, NULL, NULL, 'AclExtras', 62, 63),
(28, 15, NULL, NULL, 'initDB', 37, 38),
(29, 15, NULL, NULL, 'login', 39, 40),
(30, 15, NULL, NULL, 'logout', 41, 42),
(32, 15, NULL, NULL, 'beforeSave', 43, 44),
(33, 15, NULL, NULL, 'register', 45, 46),
(34, 15, NULL, NULL, 'activate', 47, 48);

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `aros`
--

INSERT INTO `aros` (`id`, `parent_id`, `model`, `foreign_key`, `alias`, `lft`, `rght`) VALUES
(1, NULL, 'Group', 1, NULL, 1, 4),
(2, NULL, 'Group', 2, NULL, 5, 24),
(3, NULL, 'Group', 3, NULL, 25, 26),
(19, 2, 'User', 16, NULL, 16, 17),
(21, 2, 'User', 18, NULL, 20, 21),
(20, 2, 'User', 17, NULL, 18, 19),
(18, 2, 'User', 15, NULL, 14, 15),
(17, 2, 'User', 14, NULL, 12, 13),
(14, 2, 'User', 11, NULL, 6, 7),
(15, 2, 'User', 12, NULL, 8, 9),
(16, 2, 'User', 13, NULL, 10, 11),
(22, 2, 'User', 19, NULL, 22, 23),
(24, 1, 'User', 21, NULL, 2, 3);

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `group_id`, `created`, `modified`, `first_name`, `last_name`, `contact_number`, `company_name`, `email`, `active`) VALUES
(15, 'joeappleton@goodappldfdfdfdfdfe.co.uk', '229fa324796bfe2bf778039a4b6e6afeafac0b92', 2, '2011-11-17 10:55:38', '2011-11-17 10:55:38', 'joe appleton', '', '07986836915', '', 'joeappleton@goodappldfdfdfdfdfe.co.uk', 0),
(14, 'joeappleton@godgdgdodapple.co.uk', 'b6e92fe2d806540b8e0fe9efe5cb20080ef55fdc', 2, '2011-11-17 09:21:32', '2011-11-17 09:21:32', 'Joe appleton', '', '07986836915', '', 'joeappleton@godgdgdodapple.co.uk', 0),
(11, 'user', 'a962ef093b6bde22867ac95befa26a7fb28dbfc1', 2, '2011-11-11 16:30:43', '2011-11-11 16:30:43', '', '', '', '', '', 0),
(12, 'joeappleton@goodapple.co.uk', '137d740cb1a99768dac4ee134845b5ca454fdfd5', 2, '2011-11-16 18:27:28', '2011-11-16 18:27:28', 'joe appleton', '', '0798683691', '', 'joeappleton@goodapple.co.uk', 0),
(13, 'joeappleton@goodadfdfdfdfpple.co.uk', 'd4905561c8f8075934101e0a1ddf0d3516b20e05', 2, '2011-11-16 18:28:27', '2011-11-16 18:28:27', 'joe appleton', '', '0798683691', '', 'joeappleton@goodadfdfdfdfpple.co.uk', 0),
(16, 'joeappelton@gooddfdfdfapple.co.uk', 'a962ef093b6bde22867ac95befa26a7fb28dbfc1', 2, '2011-11-17 11:19:54', '2011-11-17 11:19:54', 'Joe Appleton', '', '07986836915', '', 'joeappelton@gooddfdfdfapple.co.uk', 0),
(17, 'joeappleton@good1apple.co.uk', 'a962ef093b6bde22867ac95befa26a7fb28dbfc1', 2, '2011-11-17 12:36:19', '2011-11-17 12:36:19', 'Joe Appleton', '', '07986836915', '', 'joeappleton@good1apple.co.uk', 0),
(18, 'joeappleton18@hotmail.com', 'a962ef093b6bde22867ac95befa26a7fb28dbfc1', 2, '2011-11-17 12:41:28', '2011-11-17 12:41:28', 'joe', '', '07986836915', '', 'joeappleton18@hotmail.com', 0),
(19, 'joegoodson@goodapple.co.uk', 'a962ef093b6bde22867ac95befa26a7fb28dbfc1', 2, '2011-11-17 13:37:02', '2011-11-17 13:37:02', 'Joe', 'Goodson', '07986836915', 'Goodapple Media Ltd', 'joegoodson@goodapple.co.uk', 0),
(21, 'mrsmith@hotmail.com', 'a962ef093b6bde22867ac95befa26a7fb28dbfc1', 1, '2011-11-17 17:59:23', '2011-11-17 17:59:23', 'Joe', 'Appleton', '07986836915', 'goodaple', 'mrsmith@hotmail.com', 1);

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
