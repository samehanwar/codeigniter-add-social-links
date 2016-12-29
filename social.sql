-- phpMyAdmin SQL Dump
-- version 4.4.15.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 21, 2016 at 04:21 PM
-- Server version: 5.6.30
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `social`
--

-- --------------------------------------------------------

--
-- Table structure for table `links_name`
--

CREATE TABLE IF NOT EXISTS `links_name` (
  `id` int(11) NOT NULL,
  `social_name` varchar(50) NOT NULL,
  `social_url` varchar(300) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=98 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `links_name`
--

INSERT INTO `links_name` (`id`, `social_name`, `social_url`) VALUES
(37, 'skype', 'https://www.facebook.com/egypt.ibc/'),
(57, 'flickr', 'https://www.facebook.com/egypt.ibc323565/');

-- --------------------------------------------------------

--
-- Table structure for table `social_links`
--

CREATE TABLE IF NOT EXISTS `social_links` (
  `soc_id` int(11) NOT NULL,
  `facebook` varchar(300) NOT NULL,
  `twitter` varchar(300) NOT NULL,
  `linkedin` varchar(300) NOT NULL,
  `googleplus` varchar(300) NOT NULL,
  `instagram` varchar(300) NOT NULL,
  `skype` varchar(300) NOT NULL,
  `whatsapp` varchar(300) NOT NULL,
  `vimeo` varchar(300) NOT NULL,
  `youtube` varchar(300) NOT NULL,
  `soundcloud` varchar(300) NOT NULL,
  `flickr` varchar(300) NOT NULL,
  `tumblr` varchar(300) NOT NULL,
  `pinterest` varchar(300) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `social_links`
--

INSERT INTO `social_links` (`soc_id`, `facebook`, `twitter`, `linkedin`, `googleplus`, `instagram`, `skype`, `whatsapp`, `vimeo`, `youtube`, `soundcloud`, `flickr`, `tumblr`, `pinterest`) VALUES
(1, 'facebook page ', 'twitter page ', 'linkedin page ', 'googleplus 00 ', 'instagram 99s', 'skype pah', 'whatsapp 124', 'vimeo 545', 'youtube 23', 'soundcloud 45', 'flickr 45', 'tumblr pop', 'pinterest uy');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `links_name`
--
ALTER TABLE `links_name`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_links`
--
ALTER TABLE `social_links`
  ADD PRIMARY KEY (`soc_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `links_name`
--
ALTER TABLE `links_name`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=98;
--
-- AUTO_INCREMENT for table `social_links`
--
ALTER TABLE `social_links`
  MODIFY `soc_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
