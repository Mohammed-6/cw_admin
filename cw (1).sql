-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2020 at 08:18 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cw`
--

-- --------------------------------------------------------

--
-- Table structure for table `catalogue`
--

CREATE TABLE `catalogue` (
  `id` int(4) NOT NULL,
  `title` varchar(255) NOT NULL,
  `pdf` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `catalogue`
--

INSERT INTO `catalogue` (`id`, `title`, `pdf`, `image`) VALUES
(1, 'Tet', 'pdf.pdf', 'fmx_interior_design_co_xiamen_china_kitchen_bath_bedroom@2x.png'),
(2, 'long text', 'pdf.pdf', 'wallpaperflare.com_wallpaper.jpg'),
(3, 'long text', 'pdf.pdf', 'wallpaperflare.com_wallpaper.jpg'),
(4, 'New PDf file edit test', '', 'Group 1@2x.png'),
(6, 'Tet', 'pdf.pdf', '121613896_720241612173219_2234376716294060747_n.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `idea_cat`
--

CREATE TABLE `idea_cat` (
  `cat_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `idea_cat`
--

INSERT INTO `idea_cat` (`cat_id`, `title`) VALUES
(5, 'BedRoom'),
(6, 'Tsttttttttttt'),
(7, 'Cteagroa');

-- --------------------------------------------------------

--
-- Table structure for table `idea_sub_cat`
--

CREATE TABLE `idea_sub_cat` (
  `id` int(4) NOT NULL,
  `title` varchar(255) NOT NULL,
  `cat_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `idea_sub_cat`
--

INSERT INTO `idea_sub_cat` (`id`, `title`, `cat_id`) VALUES
(1, '', ''),
(2, 'Test', ''),
(3, 'Edit', '5'),
(4, 'LIVING SPACE CATEGORY', '<br />\r\n<b>Notice</b>:  Undefined index: id in <b>G:xampphtdocsc&wadminidea-sub-category.php</b> on line <b>95</b><br />\r\n'),
(5, 'PRODUCTS SUB CATEGORY', '7');

-- --------------------------------------------------------

--
-- Table structure for table `living_space`
--

CREATE TABLE `living_space` (
  `id` int(4) NOT NULL,
  `category` varchar(255) NOT NULL,
  `sub_category` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `catalogue` varchar(255) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`) VALUES
(2, 'cw-admin', '$2y$10$52CXTpHSEE4t2Pp/asrL2OnDxcfeF/1c148RVVHtzNrrK.qIv5GuK', '2019-07-26 10:00:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `catalogue`
--
ALTER TABLE `catalogue`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `idea_cat`
--
ALTER TABLE `idea_cat`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `idea_sub_cat`
--
ALTER TABLE `idea_sub_cat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `living_space`
--
ALTER TABLE `living_space`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `catalogue`
--
ALTER TABLE `catalogue`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `idea_cat`
--
ALTER TABLE `idea_cat`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `idea_sub_cat`
--
ALTER TABLE `idea_sub_cat`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `living_space`
--
ALTER TABLE `living_space`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
