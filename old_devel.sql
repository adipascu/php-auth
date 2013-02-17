-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 17, 2013 at 01:17 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `epb_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_active`
--

CREATE TABLE IF NOT EXISTS `user_active` (
  `id` int(20) NOT NULL,
  `session` binary(32) NOT NULL,
  `ip` binary(16) NOT NULL,
  `ipv6` tinyint(1) NOT NULL,
  `expire` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_active`
--

INSERT INTO `user_active` (`id`, `session`, `ip`, `ipv6`, `expire`, `name`) VALUES
(1, 'œ ª^ ïÀ“Ì»ÉJ¶º{&GÌòØÞÕ‘Õk', '\0\0\0\0\0\0\0\0\0\0\0\0\0\0', 0, '2012-09-10 09:23:31', ''),
(3, 'èŽ\n-Ømdœ}¼íö[¦Psž²™þò/\nY@{r1î', '\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', 1, '2012-10-03 09:15:03', ''),
(4, 'Xâ6"A_”4‘y˜NlêÊÞhÙnE¿&YõÜéóO5', '\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', 1, '2012-10-03 16:11:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_list`
--

CREATE TABLE IF NOT EXISTS `user_list` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user` varchar(30) NOT NULL,
  `pass_hash` binary(32) NOT NULL,
  `salt` binary(32) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `user` (`user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `user_list`
--

INSERT INTO `user_list` (`id`, `user`, `pass_hash`, `salt`) VALUES
(1, 'test', 'ÐÞÀißbÚ×aRÀNè¦ˆj)œÀ­_¦°¬–ž', '`ùûÛB6Lþpø§É,\0MÒn·‰‚².,~iöï'),
(3, 'asdasdasd', '-`ì\ZGL°x?+rìiÛ9:¸3ØŸõk$Š¼³A	fà', 'U·N•Ã¶Žsò!07\n°€>P‚­ê¬®/½¡jêJ'),
(4, 'adi', 'oF×}€2t¦iÅg˜3¹€¼õT_×ô¾Ðeûk"®nö^', '¯Ô/>’ø’vW÷¢@1ÚL¶²¥Sà@2J#?^÷Éš');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
