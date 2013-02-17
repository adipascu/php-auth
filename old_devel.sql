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
(1, '����^����̻��J��{&G����Ց��k', '\0\0\0\0\0\0\0\0\0\0\0\0\0\0', 0, '2012-09-10 09:23:31', ''),
(3, '�\n-�md�}���[�Ps�����/\nY@{r1�', '\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', 1, '2012-10-03 09:15:03', ''),
(4, 'X�6"A_�4�y�Nl��ލh�nE�&Y����O5', '\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', 1, '2012-10-03 16:11:00', '');

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
(1, 'test', '���i�b��aR�N覈j)���_�����', '`���B6L�p���,\0M�n�����.,~i��'),
(3, 'asdasdasd', '-`�\ZGL�x?+r�i�9:�3؁��k$���A	f�', 'U�N�ö�s�!07\n��>P��ꬮ/���j�J'),
(4, 'adi', 'oF�}�2t�i�g�3����T_����e�k"�n�^', '��/>���vW��@1�L���S�@2J#?^�ɚ');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
