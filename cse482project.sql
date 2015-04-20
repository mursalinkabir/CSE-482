-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2015 at 06:10 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cse482project`
--

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE IF NOT EXISTS `images` (
`image_id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `image_content` blob NOT NULL,
  `image_upload_date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `registered_user`
--

CREATE TABLE IF NOT EXISTS `registered_user` (
  `fname` text,
  `mname` text,
  `lname` text NOT NULL,
  `dob` text NOT NULL,
  `gender` text NOT NULL,
  `type` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
`userId` bigint(20) unsigned NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registered_user`
--

INSERT INTO `registered_user` (`fname`, `mname`, `lname`, `dob`, `gender`, `type`, `email`, `password`, `userId`) VALUES
('faridur', 'rahman', 'dda', '06/11/1991', 'Male', 'EMPLOYER/HIRER', 'hridoyrahman611@gmail.com', 'hridoy', 12),
('Faisal', 'Shahriar', 'Ratul', '06/11/1991', 'Male', 'PHOTOGRAPHER', 'alienrat@gmail.com', 'asdf', 13),
('Setwie', 'K.', 'Griffin', '27/10/1991', 'Male', 'PHOTOGRAPHER', 'stewie@gmail.com', 'asdfghjkl', 14),
('asdsadsada', 'asdsadsad', 'asdasdasd', '27/10/1991', 'Male', 'PHOTOGRAPHER', 'asdasdsadsa@asdasdsad.com', 'asdf', 15);

-- --------------------------------------------------------

--
-- Table structure for table `uploadedimage`
--

CREATE TABLE IF NOT EXISTS `uploadedimage` (
  `userId` bigint(20) NOT NULL,
  `imagePath` text NOT NULL,
  `uploadDate` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `uploadedimage`
--

INSERT INTO `uploadedimage` (`userId`, `imagePath`, `uploadDate`) VALUES
(14, '142954587314diet_c_161076.jpg', '06:04:33 pm, 20/04/2015'),
(14, '142954587314exercise-meme.gif', '06:04:33 pm, 20/04/2015'),
(14, '142954587314funnyHorse.jpg', '06:04:33 pm, 20/04/2015'),
(14, '142954588114philosoraptor-meme-generator-but-if-i-fail-at-failing-do-i-win-b78c6e.jpg', '06:04:41 pm, 20/04/2015'),
(14, '1429545881141907750_10153374199786840_3428863346157490207_n.jpg', '06:04:41 pm, 20/04/2015'),
(14, '1429545923141907750_10153374199786840_3428863346157490207_n.jpg', '06:05:23 pm, 20/04/2015'),
(14, '142954592314diet_c_161076.jpg', '06:05:23 pm, 20/04/2015'),
(14, '142954592314exercise-meme.gif', '06:05:23 pm, 20/04/2015'),
(14, '142954592414funnyHorse.jpg', '06:05:24 pm, 20/04/2015'),
(14, '142954592414philosoraptor-meme-generator-but-if-i-fail-at-failing-do-i-win-b78c6e.jpg', '06:05:24 pm, 20/04/2015');

-- --------------------------------------------------------

--
-- Table structure for table `user_profile`
--

CREATE TABLE IF NOT EXISTS `user_profile` (
  `userId` bigint(20) NOT NULL,
  `school` text,
  `college` text,
  `university` text,
  `workExperience` text NOT NULL,
  `notableWorks` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `images`
--
ALTER TABLE `images`
 ADD PRIMARY KEY (`image_id`);

--
-- Indexes for table `registered_user`
--
ALTER TABLE `registered_user`
 ADD PRIMARY KEY (`userId`), ADD UNIQUE KEY `userId` (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
MODIFY `image_id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `registered_user`
--
ALTER TABLE `registered_user`
MODIFY `userId` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
