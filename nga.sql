-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 17, 2019 at 08:50 PM
-- Server version: 10.2.25-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u4880303_nga_staging`
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
  `create_time` timestamp NULL DEFAULT current_timestamp(),
  `update_time` timestamp NULL DEFAULT NULL,
  `create_by` int(11) DEFAULT NULL,
  `update_by` int(11) DEFAULT NULL,
  `ip_address` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`account_id`, `name`, `gender`, `address`, `image`, `born_date`, `phone_number`, `instagram_id`, `email`, `password`, `status`, `role`, `create_time`, `update_time`, `create_by`, `update_by`, `ip_address`) VALUES
(1, 'Doni', 0, 'Madiun', 'https://images.unsplash.com/photo-1570626742839-59acd9822944?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80', NULL, NULL, NULL, 'doni@gmail.com', '2da9cd653f63c010b6d6c5a5ad73fe32', 1, 1, '2019-10-01 17:00:00', '0000-00-00 00:00:00', NULL, 0, '129.168.1.111'),
(4, 'Amad Hendro', NULL, NULL, NULL, NULL, '083845786165', NULL, 'ahendroo1@gmail.com', 'ff96d8761c12b16b93fb7405cdac8f65', NULL, 1, NULL, '0000-00-00 00:00:00', NULL, 0, NULL),
(5, 'Amad Hendro', NULL, NULL, NULL, NULL, '083845786165', NULL, 'ahendrooend@gmail.com', 'ff96d8761c12b16b93fb7405cdac8f65', NULL, NULL, NULL, '0000-00-00 00:00:00', NULL, 0, NULL);

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
  `create_time` timestamp NULL DEFAULT current_timestamp(),
  `update_time` int(11) DEFAULT NULL,
  `ip_address` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `description` text DEFAULT NULL,
  `status` smallint(6) DEFAULT NULL,
  `total_comment` int(11) DEFAULT NULL,
  `create_time` timestamp NULL DEFAULT current_timestamp(),
  `update_time` timestamp NULL DEFAULT NULL,
  `create_by` int(11) DEFAULT NULL,
  `update_by` int(11) DEFAULT NULL,
  `ip_address` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `blog_category`
--

CREATE TABLE `blog_category` (
  `blog_category_id` int(11) NOT NULL,
  `category_name` varchar(50) DEFAULT NULL,
  `total_content` varchar(11) DEFAULT NULL,
  `status` smallint(6) DEFAULT NULL,
  `create_time` timestamp NULL DEFAULT current_timestamp(),
  `update_time` timestamp NULL DEFAULT NULL,
  `create_by` int(11) DEFAULT NULL,
  `update_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `blog_comment`
--

CREATE TABLE `blog_comment` (
  `blog_comment_id` int(11) NOT NULL,
  `blog_id` int(11) DEFAULT NULL,
  `message` varchar(1000) DEFAULT NULL,
  `create_time` timestamp NULL DEFAULT current_timestamp(),
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
  `create_time` timestamp NULL DEFAULT current_timestamp(),
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
  `objective` text DEFAULT NULL,
  `eligibility` text DEFAULT NULL,
  `outline` text DEFAULT NULL,
  `status` smallint(6) DEFAULT NULL,
  `create_time` timestamp NULL DEFAULT current_timestamp(),
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
(1, 'https://images.unsplash.com/photo-1525571453712-090270b8354f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60', 'course_preview text', 'When you enter into any new area of science, you almost always find yourself with a baffling new language of technical terms to learn before you can converse with the experts. This is certainly true in astronomy both in terms of terms that refer to the cosmos and terms that describe the tools of the trade, the most prevalent being the telescope.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodoconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodoconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.', NULL, NULL, '2000-10-12 17:00:00', '2019-10-16 12:17:20', NULL, NULL, '129.168.1.111', 'Course Details Test ', 0, 'Course-Details-Test '),
(2, 'https://images.unsplash.com/photo-1525571453712-090270b8354f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60', 'course_preview text', 'When you enter into any new area of science, you almost always find yourself with a baffling new language of technical terms to learn before you can converse with the experts. This is certainly true in astronomy both in terms of terms that refer to the cosmos and terms that describe the tools of the trade, the most prevalent being the telescope.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodoconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodoconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.', NULL, NULL, '2000-10-12 17:00:00', '2019-10-16 12:17:20', NULL, NULL, '129.168.1.111', 'Two Course Details ', 0, 'Two-Course-Details-Test-1hgs');

-- --------------------------------------------------------

--
-- Table structure for table `course_category`
--

CREATE TABLE `course_category` (
  `course_category_id` int(11) NOT NULL,
  `course_category_name` varchar(50) DEFAULT NULL,
  `status` smallint(6) DEFAULT NULL,
  `create_time` timestamp NULL DEFAULT current_timestamp(),
  `update_time` timestamp NULL DEFAULT NULL,
  `create_by` int(11) DEFAULT NULL,
  `update_by` int(11) DEFAULT NULL,
  `ip_address` varchar(15) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `course_comment`
--

CREATE TABLE `course_comment` (
  `course_comment_id` int(11) NOT NULL,
  `class_id` int(11) DEFAULT NULL,
  `message` varchar(10000) DEFAULT NULL,
  `create_time` timestamp NULL DEFAULT current_timestamp(),
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
  `create_time` timestamp NULL DEFAULT current_timestamp(),
  `create_by` int(11) DEFAULT NULL,
  `update_time` timestamp NULL DEFAULT NULL,
  `update_by` int(11) DEFAULT NULL,
  `status` smallint(6) DEFAULT NULL,
  `ip_address` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mentor_rating`
--

CREATE TABLE `mentor_rating` (
  `mentor_rating_id` int(11) NOT NULL,
  `rating_category_id` int(11) DEFAULT NULL,
  `account_id` int(11) DEFAULT NULL,
  `rating` smallint(6) DEFAULT NULL,
  `create_time` timestamp NULL DEFAULT current_timestamp(),
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
  `create_time` timestamp NULL DEFAULT current_timestamp(),
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
  `create_time` timestamp NULL DEFAULT current_timestamp(),
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
  `create_time` timestamp NULL DEFAULT current_timestamp(),
  `update_time` timestamp NULL DEFAULT NULL,
  `create_by` int(11) DEFAULT NULL,
  `update_by` int(11) DEFAULT NULL,
  `ip_address` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `create_time` timestamp NULL DEFAULT current_timestamp(),
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
  MODIFY `account_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `account_activation`
--
ALTER TABLE `account_activation`
  MODIFY `activation_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `blog_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blog_category`
--
ALTER TABLE `blog_category`
  MODIFY `blog_category_id` int(11) NOT NULL AUTO_INCREMENT;

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
  MODIFY `course_category_id` int(11) NOT NULL AUTO_INCREMENT;

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
  MODIFY `schedule_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `testimonial_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
