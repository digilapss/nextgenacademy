-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 23 Okt 2019 pada 16.15
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
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
-- Struktur dari tabel `account`
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
-- Dumping data untuk tabel `account`
--

INSERT INTO `account` (`account_id`, `name`, `gender`, `address`, `image`, `born_date`, `phone_number`, `instagram_id`, `email`, `password`, `status`, `role`, `create_time`, `update_time`, `create_by`, `update_by`, `ip_address`) VALUES
(1, 'Doni', 0, 'Madiun', 'https://images.unsplash.com/photo-1570626742839-59acd9822944?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80', NULL, NULL, NULL, 'doni@gmail.com', '2da9cd653f63c010b6d6c5a5ad73fe32', 1, 1, '2019-10-01 17:00:00', '0000-00-00 00:00:00', NULL, 0, '129.168.1.111'),
(4, 'Amad Hendro', NULL, NULL, NULL, NULL, '083845786165', NULL, 'ahendroo1@gmail.com', 'ff96d8761c12b16b93fb7405cdac8f65', 1, 1, NULL, '0000-00-00 00:00:00', NULL, 0, NULL),
(5, 'Amad Hendro', NULL, NULL, NULL, NULL, '083845786165', NULL, 'ahendrooend@gmail.com', 'ff96d8761c12b16b93fb7405cdac8f65', 1, 2, NULL, '0000-00-00 00:00:00', NULL, 0, NULL),
(15, 'Tom Cruise', NULL, NULL, NULL, NULL, '083845786165', NULL, 'ahendrooamad@gmail.com', 'ff96d8761c12b16b93fb7405cdac8f65', 1, 2, '2019-10-18 15:52:51', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `account_activation`
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
-- Struktur dari tabel `blog`
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
-- Struktur dari tabel `blog_category`
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
-- Struktur dari tabel `blog_comment`
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
-- Struktur dari tabel `class`
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
-- Struktur dari tabel `course`
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
-- Dumping data untuk tabel `course`
--

INSERT INTO `course` (`course_id`, `image_course`, `preview`, `objective`, `eligibility`, `outline`, `status`, `create_time`, `update_time`, `create_by`, `update_by`, `ip_address`, `title`, `course_category_id`, `index_course`) VALUES
(1, 'https://images.unsplash.com/photo-1525571453712-090270b8354f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60', 'course_preview text', 'When you enter into any new area of science, you almost always find yourself with a baffling new language of technical terms to learn before you can converse with the experts. This is certainly true in astronomy both in terms of terms that refer to the cosmos and terms that describe the tools of the trade, the most prevalent being the telescope.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodoconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodoconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.', NULL, NULL, '2000-10-12 17:00:00', '2019-10-16 12:17:20', NULL, NULL, '129.168.1.111', 'Course Details Test ', 1, 'Course-Details-Test '),
(2, 'https://images.unsplash.com/photo-1525571453712-090270b8354f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60', 'course_preview text', 'When you enter into any new area of science, you almost always find yourself with a baffling new language of technical terms to learn before you can converse with the experts. This is certainly true in astronomy both in terms of terms that refer to the cosmos and terms that describe the tools of the trade, the most prevalent being the telescope.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodoconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodoconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.', NULL, NULL, '2000-10-12 17:00:00', '2019-10-16 12:17:20', NULL, NULL, '129.168.1.111', 'Two Course Details ', 2, 'Two-Course-Details-Test-1hgs');

-- --------------------------------------------------------

--
-- Struktur dari tabel `course_category`
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

--
-- Dumping data untuk tabel `course_category`
--

INSERT INTO `course_category` (`course_category_id`, `course_category_name`, `status`, `create_time`, `update_time`, `create_by`, `update_by`, `ip_address`) VALUES
(1, 'Content Creator', 1, '2019-10-01 17:00:00', '2019-10-16 17:00:00', 1, 1, '129.168.1.111'),
(2, 'Retail Business', 1, '2019-10-15 17:00:00', '2019-10-08 17:00:00', 1, 1, '129.168.1.111');

-- --------------------------------------------------------

--
-- Struktur dari tabel `course_comment`
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
-- Struktur dari tabel `course_rating`
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
-- Struktur dari tabel `mentor_rating`
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
-- Struktur dari tabel `payment`
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

--
-- Dumping data untuk tabel `payment`
--

INSERT INTO `payment` (`payment_id`, `gateway_id`, `status`, `payment_evidence`, `create_time`, `update_time`, `create_by`, `update_by`, `ip_address`) VALUES
(18, 0, 1, '', '2019-10-23 06:56:27', '2019-10-23 06:56:27', 2, NULL, '::1'),
(19, 0, 1, '', '2019-10-23 06:57:25', '2019-10-23 06:57:25', 2, NULL, '::1'),
(20, 0, 1, '', '2019-10-23 07:13:31', '2019-10-23 07:13:31', 2, NULL, '::1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rating_category`
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
-- Struktur dari tabel `schedule`
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
  `quota` smallint(11) DEFAULT NULL,
  `status` smallint(6) DEFAULT NULL,
  `create_time` timestamp NULL DEFAULT current_timestamp(),
  `update_time` timestamp NULL DEFAULT NULL,
  `create_by` int(11) DEFAULT NULL,
  `update_by` int(11) DEFAULT NULL,
  `ip_address` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `schedule`
--

INSERT INTO `schedule` (`schedule_id`, `course_id`, `account_id`, `type`, `fee`, `start_time`, `finish_time`, `place`, `quota`, `status`, `create_time`, `update_time`, `create_by`, `update_by`, `ip_address`) VALUES
(1, 1, 1, 1, 0, '2019-10-01 17:34:35', '2019-10-26 01:26:00', 'Madiun ', 77, 1, '2019-10-22 17:00:00', '2019-10-23 17:00:00', 1, 1, '129.168.1.111'),
(2, 2, 4, 1, 140000, '2019-10-01 17:00:00', '2019-10-24 17:00:00', 'Kab. Madiun', 18, 1, '2019-10-14 17:00:00', '2019-10-15 17:00:00', 1, 1, '129.168.1.111');

-- --------------------------------------------------------

--
-- Struktur dari tabel `testimonial`
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
-- Indeks untuk tabel `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`account_id`);

--
-- Indeks untuk tabel `account_activation`
--
ALTER TABLE `account_activation`
  ADD PRIMARY KEY (`activation_id`);

--
-- Indeks untuk tabel `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`blog_id`);

--
-- Indeks untuk tabel `blog_category`
--
ALTER TABLE `blog_category`
  ADD PRIMARY KEY (`blog_category_id`);

--
-- Indeks untuk tabel `blog_comment`
--
ALTER TABLE `blog_comment`
  ADD PRIMARY KEY (`blog_comment_id`);

--
-- Indeks untuk tabel `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`class_id`);

--
-- Indeks untuk tabel `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_id`);

--
-- Indeks untuk tabel `course_category`
--
ALTER TABLE `course_category`
  ADD PRIMARY KEY (`course_category_id`);

--
-- Indeks untuk tabel `course_comment`
--
ALTER TABLE `course_comment`
  ADD PRIMARY KEY (`course_comment_id`);

--
-- Indeks untuk tabel `course_rating`
--
ALTER TABLE `course_rating`
  ADD PRIMARY KEY (`course_rating_id`);

--
-- Indeks untuk tabel `mentor_rating`
--
ALTER TABLE `mentor_rating`
  ADD PRIMARY KEY (`mentor_rating_id`);

--
-- Indeks untuk tabel `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indeks untuk tabel `rating_category`
--
ALTER TABLE `rating_category`
  ADD PRIMARY KEY (`rating_category_id`);

--
-- Indeks untuk tabel `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`schedule_id`);

--
-- Indeks untuk tabel `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`testimonial_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `account`
--
ALTER TABLE `account`
  MODIFY `account_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `account_activation`
--
ALTER TABLE `account_activation`
  MODIFY `activation_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `blog`
--
ALTER TABLE `blog`
  MODIFY `blog_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `blog_category`
--
ALTER TABLE `blog_category`
  MODIFY `blog_category_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `blog_comment`
--
ALTER TABLE `blog_comment`
  MODIFY `blog_comment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `class`
--
ALTER TABLE `class`
  MODIFY `class_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `course`
--
ALTER TABLE `course`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `course_category`
--
ALTER TABLE `course_category`
  MODIFY `course_category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `course_comment`
--
ALTER TABLE `course_comment`
  MODIFY `course_comment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `course_rating`
--
ALTER TABLE `course_rating`
  MODIFY `course_rating_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `mentor_rating`
--
ALTER TABLE `mentor_rating`
  MODIFY `mentor_rating_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `payment`
--
ALTER TABLE `payment`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `rating_category`
--
ALTER TABLE `rating_category`
  MODIFY `rating_category_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `schedule`
--
ALTER TABLE `schedule`
  MODIFY `schedule_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `testimonial_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
