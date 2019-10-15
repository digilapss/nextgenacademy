-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 15 Okt 2019 pada 16.56
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
  `gender` varchar(20) DEFAULT NULL,
  `address` varchar(1000) DEFAULT NULL,
  `image` varchar(1000) DEFAULT NULL,
  `ttl` varchar(100) DEFAULT NULL,
  `phone_number` varchar(15) DEFAULT NULL,
  `line_id` varchar(1000) DEFAULT NULL,
  `email` varchar(1000) DEFAULT NULL,
  `password` varchar(1000) DEFAULT NULL,
  `status` enum('active','inactive') DEFAULT NULL,
  `role` enum('mentor','student') DEFAULT NULL,
  `create_time` date DEFAULT NULL,
  `ip_address` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `account`
--

INSERT INTO `account` (`account_id`, `name`, `gender`, `address`, `image`, `ttl`, `phone_number`, `line_id`, `email`, `password`, `status`, `role`, `create_time`, `ip_address`) VALUES
(1, 'Doni', 'Laki-laki', 'Madiun', 'https://images.unsplash.com/photo-1570626742839-59acd9822944?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80', NULL, NULL, NULL, 'doni@gmail.com', '2da9cd653f63c010b6d6c5a5ad73fe32', 'active', 'mentor', '2019-10-02', '129.168.1.111'),
(4, 'Amad Hendro', NULL, NULL, NULL, NULL, '083845786165', NULL, 'ahendroo1@gmail.com', 'ff96d8761c12b16b93fb7405cdac8f65', NULL, 'mentor', NULL, NULL),
(5, 'Amad Hendro', NULL, NULL, NULL, NULL, '083845786165', NULL, 'ahendrooend@gmail.com', 'ff96d8761c12b16b93fb7405cdac8f65', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `account_activation`
--

CREATE TABLE `account_activation` (
  `activation_id` int(11) NOT NULL,
  `account_id` varchar(1000) DEFAULT NULL,
  `activation_code` varchar(1000) DEFAULT NULL,
  `status` varchar(1000) DEFAULT NULL,
  `expire_on` varchar(1000) DEFAULT NULL,
  `create_time` varchar(20) DEFAULT NULL,
  `update_time` varchar(20) DEFAULT NULL,
  `ip_address` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `blog`
--

CREATE TABLE `blog` (
  `blog_id` int(11) NOT NULL,
  `blog_category_id` int(11) DEFAULT NULL,
  `image` varchar(1000) DEFAULT NULL,
  `title` varchar(1000) DEFAULT NULL,
  `tag` varchar(1000) DEFAULT NULL,
  `description` varchar(1000) DEFAULT NULL,
  `total_comment` varchar(20) DEFAULT NULL,
  `create_time` varchar(25) DEFAULT NULL,
  `update_time` varchar(25) DEFAULT NULL,
  `create_by` varchar(25) DEFAULT NULL,
  `update_by` varchar(25) DEFAULT NULL,
  `ip_address` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `blog_category`
--

CREATE TABLE `blog_category` (
  `blog_category_id` int(11) NOT NULL,
  `category_name` varchar(50) DEFAULT NULL,
  `total_content` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `blog_comment`
--

CREATE TABLE `blog_comment` (
  `blog_comment_id` int(11) NOT NULL,
  `blog_id` int(11) DEFAULT NULL,
  `message` varchar(1000) DEFAULT NULL,
  `create_time` varchar(25) DEFAULT NULL,
  `create_by` varchar(50) DEFAULT NULL,
  `ip_address` varchar(50) DEFAULT NULL
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
  `create_time` date DEFAULT NULL,
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
  `objective` varchar(1000) DEFAULT NULL,
  `eligibility` varchar(1000) DEFAULT NULL,
  `outline` varchar(1000) DEFAULT NULL,
  `create_time` time DEFAULT NULL,
  `update_time` time DEFAULT NULL,
  `create_by` varchar(50) DEFAULT NULL,
  `update_by` varchar(50) DEFAULT NULL,
  `ip_address` varchar(15) DEFAULT NULL,
  `title` varchar(50) DEFAULT NULL,
  `kategori` varchar(50) DEFAULT NULL,
  `index_course` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `course`
--

INSERT INTO `course` (`course_id`, `image_course`, `preview`, `objective`, `eligibility`, `outline`, `create_time`, `update_time`, `create_by`, `update_by`, `ip_address`, `title`, `kategori`, `index_course`) VALUES
(1, 'https://images.unsplash.com/photo-1525571453712-090270b8354f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60', NULL, 'When you enter into any new area of science, you almost always find yourself with a baffling new language of technical terms to learn before you can converse with the experts. This is certainly true in astronomy both in terms of terms that refer to the cosmos and terms that describe the tools of the trade, the most prevalent being the telescope.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodoconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodoconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.', NULL, '00:10:13', '19:17:20', NULL, NULL, '129.168.1.111', 'Course Details Test ', 'Content Creator', 'Course-Details-Test '),
(2, 'https://images.unsplash.com/photo-1525571453712-090270b8354f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60', NULL, 'When you enter into any new area of science, you almost always find yourself with a baffling new language of technical terms to learn before you can converse with the experts. This is certainly true in astronomy both in terms of terms that refer to the cosmos and terms that describe the tools of the trade, the most prevalent being the telescope.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodoconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodoconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.', NULL, '00:10:13', '19:17:20', NULL, NULL, '129.168.1.111', 'Two Course Details ', 'Content Creator', 'Two-Course-Details-Test-1hgs');

-- --------------------------------------------------------

--
-- Struktur dari tabel `course_comment`
--

CREATE TABLE `course_comment` (
  `course_comment_id` int(11) NOT NULL,
  `class_id` int(11) DEFAULT NULL,
  `message` varchar(10000) DEFAULT NULL,
  `create_time` varchar(25) DEFAULT NULL,
  `create_by` varchar(25) DEFAULT NULL,
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
  `rating` varchar(25) DEFAULT NULL,
  `create_time` varchar(50) DEFAULT NULL,
  `create_by` varchar(50) DEFAULT NULL,
  `ip_address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `mentor_rating`
--

CREATE TABLE `mentor_rating` (
  `mentor_rating_id` int(11) NOT NULL,
  `rating_category_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `rating` varchar(1000) DEFAULT NULL,
  `create_time` varchar(100) DEFAULT NULL,
  `create_by` varchar(100) DEFAULT NULL,
  `ip_address` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `payment`
--

CREATE TABLE `payment` (
  `payment_id` int(11) NOT NULL,
  `method` varchar(50) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `slip` varchar(1000) DEFAULT NULL,
  `create_time` varchar(25) DEFAULT NULL,
  `ip_address` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `rating_category`
--

CREATE TABLE `rating_category` (
  `rating_category_id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `type` varchar(200) DEFAULT NULL,
  `create_time` varchar(200) DEFAULT NULL,
  `update_time` varchar(25) DEFAULT NULL,
  `create_by` varchar(25) DEFAULT NULL,
  `update_by` varchar(100) DEFAULT NULL,
  `ip_address` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `shcedule`
--

CREATE TABLE `shcedule` (
  `schedule_id` int(11) NOT NULL,
  `course_id` int(11) DEFAULT NULL,
  `account_id` int(11) DEFAULT NULL,
  `type` enum('online','offline') DEFAULT NULL,
  `fee` varchar(1000) DEFAULT NULL,
  `schedule` varchar(1000) DEFAULT NULL,
  `place` varchar(1000) DEFAULT NULL,
  `quota` varchar(25) DEFAULT NULL,
  `create_time` varchar(25) DEFAULT NULL,
  `update_time` varchar(25) DEFAULT NULL,
  `ip_address` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `testimonial`
--

CREATE TABLE `testimonial` (
  `testimonial_id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `image` varchar(1000) DEFAULT NULL,
  `position` varchar(25) DEFAULT NULL,
  `message` varchar(1000) DEFAULT NULL,
  `create_time` varchar(20) DEFAULT NULL,
  `create_by` varchar(20) DEFAULT NULL,
  `ip_address` int(25) DEFAULT NULL
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
-- Indeks untuk tabel `shcedule`
--
ALTER TABLE `shcedule`
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
  MODIFY `account_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
  MODIFY `class_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `course`
--
ALTER TABLE `course`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `rating_category`
--
ALTER TABLE `rating_category`
  MODIFY `rating_category_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `shcedule`
--
ALTER TABLE `shcedule`
  MODIFY `schedule_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `testimonial_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
