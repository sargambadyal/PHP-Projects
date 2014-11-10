-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 05, 2014 at 05:28 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `audioshare`
--
CREATE DATABASE IF NOT EXISTS `audioshare` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `audioshare`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('sargam', 'sargam'),
('ryan', 'ryan');

-- --------------------------------------------------------

--
-- Table structure for table `audio`
--

CREATE TABLE IF NOT EXISTS `audio` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `title` varchar(20) NOT NULL,
  `artist` varchar(20) NOT NULL,
  `audio_type` varchar(20) NOT NULL,
  `description` varchar(50) NOT NULL,
  `cover` varchar(70) NOT NULL,
  `file` varchar(70) DEFAULT NULL,
  `email` varchar(30) NOT NULL,
  `likes` int(10) NOT NULL,
  `comment` int(10) NOT NULL,
  `views` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `audio`
--

INSERT INTO `audio` (`id`, `title`, `artist`, `audio_type`, `description`, `cover`, `file`, `email`, `likes`, `comment`, `views`) VALUES
(15, 'jannat1', 'falak shabeer', 'Sad', '		it s a very soothing song very nyc must listen .', 'image-slider-1.jpg', 'jannat_5_in_1.mp3', 'sera.bravo004@gmail.com', 12, 3, 15),
(16, 'Nokia_tune1', 'nokia', 'Jazz', '		awsumme 		awsumme 		awsumme 		awsumme 		awsumme ', 'back100.jpg', 'Nokia_RAP_Old_Ring_Remix.mp3', 'moody@gmail.com', 15, 1, 28),
(17, 'krishna flute', 'prasad', 'Classical', '	its very classical and nyc playing of flute						', '74354_10151236543873616_399806422_n.jpg', '12 - Krishna Theme (Flute).mp3', 'moody@gmail.com', 15, 1, 16),
(18, 'jannat one more time', 'random', 'Romantic', '	its very nycccccccccccccccccccccccccccc									 ', 'image.jpg', 'jannat2__3_in_1_dj.mp3', 'moody@gmail.com', 10, 0, 20),
(19, 'gta_vice_city', 'some guy', 'Rock', '		its ok ok..								    ', 'm5.JPG', 'gta_san_andreas.mp3', 'sera.bravo004@gmail.com', 3, 0, 4),
(20, 'long drive', 'mika singh', 'Rock', '		punjabi								    ', 'mika.jpg', 'Long Drive-[DJKANG.Com].mp3', 'sera.bravo004@gmail.com', 0, 0, 2),
(21, 'song4', 'mika singh', 'Rock', 'i love this ong', 'IMG_1704.PNG', 'Mann Mera-[DJKANG.Com].mp3', 'sera.bravo004@gmail.com', 0, 0, 2),
(22, 'xyz', 'abcd', 'Slow', '	sdmfojofm									    ', 'back100.jpg', 'Mann Mera-[DJKANG.Com].mp3', 'sera.bravo004@gmail.com', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(20) NOT NULL,
  `comment` varchar(100) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `comment`, `email`) VALUES
(15, 'its a good song', 'sargam'),
(17, 'nyc songsss', 'ryan'),
(15, 'its beautiful', 'anonynous'),
(15, 'its beautiful', 'anonynous'),
(16, 'good song', 'arjun');

-- --------------------------------------------------------

--
-- Table structure for table `playlist`
--

CREATE TABLE IF NOT EXISTS `playlist` (
  `email` varchar(30) NOT NULL,
  `id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `playlist`
--

INSERT INTO `playlist` (`email`, `id`) VALUES
('moody@gmail.com', 18),
('moody@gmail.com', 16),
('sera.bravo004@gmail.com', 16),
('sera.bravo004@gmail.com', 18);

-- --------------------------------------------------------

--
-- Table structure for table `query`
--

CREATE TABLE IF NOT EXISTS `query` (
  `name` varchar(20) NOT NULL,
  `query` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `query`
--

INSERT INTO `query` (`name`, `query`) VALUES
(':)', 'ryan'),
(':)', 'ryan'),
('i dnt like', 'sara'),
('fasdf', 'dge'),
('', 'heyy'),
('its good song', 'saaraa');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `name` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `sex` text NOT NULL,
  `dob` date NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `email`, `sex`, `dob`, `password`) VALUES
('ryan philip', 'rkp_rhino@gmail.com', 'm', '2014-11-06', 'ryan'),
('sargam', 'sera.bravo004@gmail.com', 'f', '2014-01-18', 'sargam'),
('moody', 'moody@gmail.com', 'm', '2014-02-19', 'moody'),
('arjun', 'arjun@gmail.com', 'm', '1992-04-06', 'arjun');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
