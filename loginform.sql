-- phpMyAdmin SQL Dump
-- version 2.11.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 06, 2018 at 04:16 PM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `registr`
--

-- --------------------------------------------------------

--
-- Table structure for table `loginform`
--

CREATE TABLE `loginform` (
  `id` int(11) NOT NULL auto_increment,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `loginform`
--

INSERT INTO `loginform` (`id`, `username`, `email`, `password`) VALUES
(1, 'ink', 'ink@ink.com', '0a16bc32f55683128983f223de242942'),
(2, 'het', 'het@het.com', 'c66133177cd4d5050a02ff2bb947475c'),
(3, 'Ahtasham', 'ahtashamansari26@gmail.com', '0de9f629377c9794b3a30f705bf99f5b'),
(4, 'ubaid', 'ubaid@gmail.com', '6c474b7fe72b60d28857f5ee1d300045'),
(5, 'we', 'we@gmail.com', 'ff1ccf57e98c817df1efcd9fe44a8aeb'),
(6, 'ab', 'ab@gmail.com', '187ef4436122d1cc2f40dc2b92f0eba0');
