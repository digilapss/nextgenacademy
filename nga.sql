-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 09, 2019 at 04:30 PM
-- Server version: 5.7.28-0ubuntu0.18.04.4
-- PHP Version: 7.3.11-1+ubuntu18.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nga`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `account_id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `gender` smallint(6) DEFAULT NULL,
  `address` varchar(1000) DEFAULT NULL,
  `image` varchar(1000) DEFAULT NULL,
  `born_date` date DEFAULT NULL,
  `phone_number` varchar(15) DEFAULT NULL,
  `instagram_id` varchar(25) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(1000) DEFAULT NULL,
  `status` smallint(6) DEFAULT NULL,
  `role` smallint(6) DEFAULT NULL,
  `about_me` text,
  `create_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `update_time` timestamp NULL DEFAULT NULL,
  `create_by` int(11) DEFAULT NULL,
  `update_by` int(11) DEFAULT NULL,
  `ip_address` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`account_id`, `name`, `gender`, `address`, `image`, `born_date`, `phone_number`, `instagram_id`, `email`, `password`, `status`, `role`, `about_me`, `create_time`, `update_time`, `create_by`, `update_by`, `ip_address`) VALUES
(1, 'Doni', 0, 'Madiun', 'https://images.unsplash.com/photo-1570626742839-59acd9822944?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80', NULL, NULL, NULL, 'doni@gmail.com', '2da9cd653f63c010b6d6c5a5ad73fe32', 1, 1, NULL, '2019-10-01 17:00:00', '0000-00-00 00:00:00', NULL, 0, '129.168.1.111'),
(4, 'Amad Hendro', NULL, NULL, NULL, NULL, '083845786165', NULL, 'ahendroo1@gmail.com', 'ff96d8761c12b16b93fb7405cdac8f65', 1, 1, NULL, NULL, '0000-00-00 00:00:00', NULL, 0, NULL),
(5, 'Amad Hendro', NULL, NULL, NULL, NULL, '083845786165', NULL, 'ahendrooend@gmail.com', 'ff96d8761c12b16b93fb7405cdac8f65', 1, 2, NULL, NULL, '0000-00-00 00:00:00', NULL, 0, NULL),
(15, 'Tom Cruise', NULL, NULL, NULL, NULL, '083845786165', NULL, 'ahendrooamad@gmail.com', 'ff96d8761c12b16b93fb7405cdac8f65', 1, 2, NULL, '2019-10-18 15:52:51', NULL, NULL, NULL, NULL),
(16, 'Risky Dwi Setiyawan', 2, 'saradan jawa timur', 'u-16-Risky-Dwi-Setiyawan1575781910.jpg', '2019-11-04', '081231111111111', '@riskyds', 'setiyawan1994@gmail.com', '29f8e047ae394462916d452bccd207e2', 1, 2, ' Mendapatkan beasiswa unggulan. Aktif organisasi. Mantapp!!!! ', '2019-11-10 08:45:38', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `account_activation`
--

CREATE TABLE `account_activation` (
  `activation_id` int(11) NOT NULL,
  `account_id` int(11) DEFAULT NULL,
  `activation_code` varchar(200) DEFAULT NULL,
  `status` smallint(6) DEFAULT NULL,
  `expire_on` timestamp NULL DEFAULT NULL,
  `create_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `update_time` int(11) DEFAULT NULL,
  `ip_address` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `achievement`
--

CREATE TABLE `achievement` (
  `achievement_id` int(20) UNSIGNED NOT NULL,
  `account_id` int(11) NOT NULL,
  `year` smallint(6) NOT NULL,
  `achievement_name` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `level` smallint(6) NOT NULL,
  `image` varchar(500) NOT NULL,
  `status` smallint(6) NOT NULL,
  `create_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_time` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `achievement`
--

INSERT INTO `achievement` (`achievement_id`, `account_id`, `year`, `achievement_name`, `description`, `level`, `image`, `status`, `create_time`, `update_time`) VALUES
(41, 16, 2014, 'asdasdsd', 'di amerika lah y', 1, 'acv-16-asdasdsd1575734643.png', 1, '2019-12-07 15:04:47', '2019-12-08 05:22:50'),
(42, 16, 2015, 'american idola', 'di amerika lah yasdasdas', 2, 'acv-16-american-idola1575734643.png', 1, '2019-12-07 15:04:47', '2019-12-08 05:22:50'),
(43, 16, 2016, 'ktp', 'di amerika lah yasdasdas', 4, 'acv-16-ktp1575734643.png', 3, '2019-12-07 15:04:47', '2019-12-07 16:05:27');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `blog_id` int(11) NOT NULL,
  `blog_category_id` int(11) DEFAULT NULL,
  `image` varchar(1000) DEFAULT NULL,
  `title` varchar(200) DEFAULT NULL,
  `tag` varchar(1000) DEFAULT NULL,
  `description` text,
  `status` smallint(6) DEFAULT NULL,
  `total_comment` int(11) DEFAULT NULL,
  `create_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `update_time` timestamp NULL DEFAULT NULL,
  `create_by` int(11) DEFAULT NULL,
  `update_by` int(11) DEFAULT NULL,
  `ip_address` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`blog_id`, `blog_category_id`, `image`, `title`, `tag`, `description`, `status`, `total_comment`, `create_time`, `update_time`, `create_by`, `update_by`, `ip_address`) VALUES
(1, 1, '/img/blog/single_blog_2.png', 'first blog on local', '#lalala #lululu #mantap', ' MCSE boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot camp when you can get the MCSE study materials yourself at a fraction of the camp price. However, who has the willpower\r\n\r\nMCSE boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot camp when you can get the MCSE study materials yourself at a fraction of the camp price. However, who has the willpower to actually sit through a self-imposed MCSE training. who has the willpower to actually ', 1, NULL, '2019-11-23 06:50:34', NULL, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `blog_category`
--

CREATE TABLE `blog_category` (
  `blog_category_id` int(11) NOT NULL,
  `category_name` varchar(50) DEFAULT NULL,
  `total_content` varchar(11) DEFAULT NULL,
  `status` smallint(6) DEFAULT NULL,
  `create_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `update_time` timestamp NULL DEFAULT NULL,
  `create_by` int(11) DEFAULT NULL,
  `update_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog_category`
--

INSERT INTO `blog_category` (`blog_category_id`, `category_name`, `total_content`, `status`, `create_time`, `update_time`, `create_by`, `update_by`) VALUES
(1, 'kuliah', '1', 1, '2019-11-23 06:30:10', NULL, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `blog_comment`
--

CREATE TABLE `blog_comment` (
  `blog_comment_id` int(11) NOT NULL,
  `blog_id` int(11) DEFAULT NULL,
  `message` varchar(1000) DEFAULT NULL,
  `create_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `create_by` int(11) DEFAULT NULL,
  `update_time` timestamp NULL DEFAULT NULL,
  `update_by` int(11) DEFAULT NULL,
  `status` smallint(6) DEFAULT NULL,
  `ip_address` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `class_id` int(11) NOT NULL,
  `schedule_id` int(11) DEFAULT NULL,
  `account_id` int(11) DEFAULT NULL,
  `payment_id` int(11) DEFAULT NULL,
  `create_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `update_time` timestamp NULL DEFAULT NULL,
  `update_by` int(11) DEFAULT NULL,
  `status` smallint(6) DEFAULT NULL,
  `ip_address` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_id` int(11) NOT NULL,
  `image_course` varchar(1000) DEFAULT NULL,
  `preview` varchar(1000) DEFAULT NULL,
  `objective` text,
  `eligibility` text,
  `outline` text,
  `status` smallint(6) DEFAULT NULL,
  `create_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `update_time` timestamp NULL DEFAULT NULL,
  `create_by` int(11) DEFAULT NULL,
  `update_by` int(11) DEFAULT NULL,
  `ip_address` varchar(15) DEFAULT NULL,
  `title` varchar(50) DEFAULT NULL,
  `course_category_id` int(11) DEFAULT NULL,
  `index_course` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `image_course`, `preview`, `objective`, `eligibility`, `outline`, `status`, `create_time`, `update_time`, `create_by`, `update_by`, `ip_address`, `title`, `course_category_id`, `index_course`) VALUES
(1, 'https://images.unsplash.com/photo-1525571453712-090270b8354f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60', 'course_preview text', 'When you enter into any new area of science, you almost always find yourself with a baffling new language of technical terms to learn before you can converse with the experts. This is certainly true in astronomy both in terms of terms that refer to the cosmos and terms that describe the tools of the trade, the most prevalent being the telescope.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodoconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodoconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.', NULL, NULL, '2000-10-12 17:00:00', '2019-10-16 12:17:20', NULL, NULL, '129.168.1.111', 'Course Details Test ', 1, 'Course-Details-Test '),
(2, 'https://images.unsplash.com/photo-1525571453712-090270b8354f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60', 'course_preview text', 'When you enter into any new area of science, you almost always find yourself with a baffling new language of technical terms to learn before you can converse with the experts. This is certainly true in astronomy both in terms of terms that refer to the cosmos and terms that describe the tools of the trade, the most prevalent being the telescope.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodoconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodoconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.', NULL, NULL, '2000-10-12 17:00:00', '2019-10-16 12:17:20', NULL, NULL, '129.168.1.111', 'Two Course Details ', 2, 'Two-Course-Details-Test-1hgs');

-- --------------------------------------------------------

--
-- Table structure for table `course_category`
--

CREATE TABLE `course_category` (
  `course_category_id` int(11) NOT NULL,
  `course_category_name` varchar(50) DEFAULT NULL,
  `status` smallint(6) DEFAULT NULL,
  `create_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `update_time` timestamp NULL DEFAULT NULL,
  `create_by` int(11) DEFAULT NULL,
  `update_by` int(11) DEFAULT NULL,
  `ip_address` varchar(15) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course_category`
--

INSERT INTO `course_category` (`course_category_id`, `course_category_name`, `status`, `create_time`, `update_time`, `create_by`, `update_by`, `ip_address`) VALUES
(1, 'Content Creator', 1, '2019-10-01 17:00:00', '2019-10-16 17:00:00', 1, 1, '129.168.1.111'),
(2, 'Retail Business', 1, '2019-10-15 17:00:00', '2019-10-08 17:00:00', 1, 1, '129.168.1.111');

-- --------------------------------------------------------

--
-- Table structure for table `course_comment`
--

CREATE TABLE `course_comment` (
  `course_comment_id` int(11) NOT NULL,
  `class_id` int(11) DEFAULT NULL,
  `message` varchar(10000) DEFAULT NULL,
  `create_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `create_by` int(11) DEFAULT NULL,
  `update_time` timestamp NULL DEFAULT NULL,
  `update_by` int(11) DEFAULT NULL,
  `status` smallint(6) DEFAULT NULL,
  `ip_address` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `course_rating`
--

CREATE TABLE `course_rating` (
  `course_rating_id` int(11) NOT NULL,
  `rating_category_id` int(11) DEFAULT NULL,
  `class_id` int(11) DEFAULT NULL,
  `rating` int(11) DEFAULT NULL,
  `create_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `create_by` int(11) DEFAULT NULL,
  `update_time` timestamp NULL DEFAULT NULL,
  `update_by` int(11) DEFAULT NULL,
  `status` smallint(6) DEFAULT NULL,
  `ip_address` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `educational`
--

CREATE TABLE `educational` (
  `educational_id` bigint(20) UNSIGNED NOT NULL,
  `account_id` int(11) NOT NULL,
  `level` smallint(6) NOT NULL,
  `year_in` smallint(6) NOT NULL,
  `year_out` smallint(6) NOT NULL,
  `institution_name` varchar(100) NOT NULL,
  `major` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `create_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_time` timestamp NULL DEFAULT NULL,
  `status` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `educational`
--

INSERT INTO `educational` (`educational_id`, `account_id`, `level`, `year_in`, `year_out`, `institution_name`, `major`, `city`, `create_time`, `update_time`, `status`) VALUES
(1, 15, 1, 2000, 2006, 'Uns Updated', 'Tik', 'Surabaya', '2019-11-24 16:38:45', '2019-12-08 05:22:50', 1),
(44, 16, 2, 2006, 2009, 'Its Kanbaaaa', 'Tik', 'Surabaya', '2019-12-07 15:04:47', '2019-12-08 05:22:50', 1),
(45, 16, 3, 2009, 2012, 'Uns', 'Tik', 'Surabaya', '2019-12-07 15:04:47', '2019-12-08 05:22:50', 1),
(46, 16, 7, 2012, 2016, 'Institut Teknologi Sepuluh Nopember', 'Teknik Informatika', 'Surabaya', '2019-12-07 15:57:37', '2019-12-08 05:22:50', 1);

-- --------------------------------------------------------

--
-- Table structure for table `mentor_rating`
--

CREATE TABLE `mentor_rating` (
  `mentor_rating_id` int(11) NOT NULL,
  `rating_category_id` int(11) DEFAULT NULL,
  `account_id` int(11) DEFAULT NULL,
  `rating` smallint(6) DEFAULT NULL,
  `create_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `create_by` int(11) DEFAULT NULL,
  `update_time` timestamp NULL DEFAULT NULL,
  `update_by` int(11) DEFAULT NULL,
  `status` smallint(6) DEFAULT NULL,
  `ip_address` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_id` int(11) NOT NULL,
  `gateway_id` smallint(6) DEFAULT NULL,
  `status` smallint(6) DEFAULT NULL,
  `payment_evidence` varchar(250) DEFAULT NULL,
  `create_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `update_time` timestamp NULL DEFAULT NULL,
  `create_by` int(11) DEFAULT NULL,
  `update_by` int(11) DEFAULT NULL,
  `ip_address` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rating_category`
--

CREATE TABLE `rating_category` (
  `rating_category_id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `type` smallint(6) DEFAULT NULL,
  `status` smallint(6) DEFAULT NULL,
  `create_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `update_time` timestamp NULL DEFAULT NULL,
  `create_by` int(11) DEFAULT NULL,
  `update_by` int(11) DEFAULT NULL,
  `ip_address` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `schedule_id` int(11) NOT NULL,
  `course_id` int(11) DEFAULT NULL,
  `account_id` int(11) DEFAULT NULL,
  `type` smallint(6) DEFAULT NULL,
  `fee` int(11) DEFAULT NULL,
  `start_time` timestamp NULL DEFAULT NULL,
  `finish_time` timestamp NULL DEFAULT NULL,
  `place` varchar(1000) DEFAULT NULL,
  `quota` int(11) DEFAULT NULL,
  `status` smallint(6) DEFAULT NULL,
  `create_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `update_time` timestamp NULL DEFAULT NULL,
  `create_by` int(11) DEFAULT NULL,
  `update_by` int(11) DEFAULT NULL,
  `ip_address` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`schedule_id`, `course_id`, `account_id`, `type`, `fee`, `start_time`, `finish_time`, `place`, `quota`, `status`, `create_time`, `update_time`, `create_by`, `update_by`, `ip_address`) VALUES
(1, 1, 1, 1, 100000, '2019-10-01 17:34:35', '2019-10-26 01:26:00', 'Madiun ', 77, 1, '2019-10-22 17:00:00', '2019-10-23 17:00:00', 1, 1, '129.168.1.111'),
(2, 2, 4, 1, 140000, '2019-10-01 17:00:00', '2019-10-24 17:00:00', 'Kab. Madiun', 22, 1, '2019-10-14 17:00:00', '2019-10-15 17:00:00', 1, 1, '129.168.1.111');

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE `testimonial` (
  `testimonial_id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `image` varchar(250) DEFAULT NULL,
  `position` varchar(25) DEFAULT NULL,
  `message` varchar(1000) DEFAULT NULL,
  `status` smallint(6) DEFAULT NULL,
  `create_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `create_by` int(11) DEFAULT NULL,
  `ip_address` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`account_id`);

--
-- Indexes for table `account_activation`
--
ALTER TABLE `account_activation`
  ADD PRIMARY KEY (`activation_id`);

--
-- Indexes for table `achievement`
--
ALTER TABLE `achievement`
  ADD PRIMARY KEY (`achievement_id`),
  ADD UNIQUE KEY `achievement_id` (`achievement_id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`blog_id`);

--
-- Indexes for table `blog_category`
--
ALTER TABLE `blog_category`
  ADD PRIMARY KEY (`blog_category_id`);

--
-- Indexes for table `blog_comment`
--
ALTER TABLE `blog_comment`
  ADD PRIMARY KEY (`blog_comment_id`);

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`class_id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `course_category`
--
ALTER TABLE `course_category`
  ADD PRIMARY KEY (`course_category_id`);

--
-- Indexes for table `course_comment`
--
ALTER TABLE `course_comment`
  ADD PRIMARY KEY (`course_comment_id`);

--
-- Indexes for table `course_rating`
--
ALTER TABLE `course_rating`
  ADD PRIMARY KEY (`course_rating_id`);

--
-- Indexes for table `educational`
--
ALTER TABLE `educational`
  ADD PRIMARY KEY (`educational_id`),
  ADD UNIQUE KEY `educational_id` (`educational_id`);

--
-- Indexes for table `mentor_rating`
--
ALTER TABLE `mentor_rating`
  ADD PRIMARY KEY (`mentor_rating_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `rating_category`
--
ALTER TABLE `rating_category`
  ADD PRIMARY KEY (`rating_category_id`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`schedule_id`);

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`testimonial_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `account_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `account_activation`
--
ALTER TABLE `account_activation`
  MODIFY `activation_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `achievement`
--
ALTER TABLE `achievement`
  MODIFY `achievement_id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `blog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `blog_category`
--
ALTER TABLE `blog_category`
  MODIFY `blog_category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `blog_comment`
--
ALTER TABLE `blog_comment`
  MODIFY `blog_comment_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `class_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `course_category`
--
ALTER TABLE `course_category`
  MODIFY `course_category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `course_comment`
--
ALTER TABLE `course_comment`
  MODIFY `course_comment_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `course_rating`
--
ALTER TABLE `course_rating`
  MODIFY `course_rating_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `educational`
--
ALTER TABLE `educational`
  MODIFY `educational_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
--
-- AUTO_INCREMENT for table `mentor_rating`
--
ALTER TABLE `mentor_rating`
  MODIFY `mentor_rating_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `rating_category`
--
ALTER TABLE `rating_category`
  MODIFY `rating_category_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `schedule_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `testimonial_id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
