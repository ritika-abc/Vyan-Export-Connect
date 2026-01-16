-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 25, 2025 at 11:48 AM
-- Server version: 11.8.3-MariaDB-log
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u496524825_lmok`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(100) NOT NULL,
  `tag` text NOT NULL,
  `heading` varchar(200) NOT NULL,
  `content` text NOT NULL,
  `image` varchar(256) NOT NULL,
  `date` date NOT NULL,
  `slug` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pro`
--

CREATE TABLE `pro` (
  `id` int(100) NOT NULL,
  `name` text NOT NULL,
  `image` text NOT NULL,
  `content` text NOT NULL,
  `slug` text NOT NULL,
  `content_a` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pro`
--

INSERT INTO `pro` (`id`, `name`, `image`, `content`, `slug`, `content_a`) VALUES
(1, 'Spices', '1.jpg', 'LMOK Global Trade exports premium-quality Indian spices known for their rich aroma, natural color, and authentic taste. Our spices are carefully sourced from renowned agricultural regions of India and processed under strict quality standards to meet international export requirements. Major spices include Dry Red Chilly and Turmeric Powder, widely used in culinary, food processing, and pharmaceutical industries across global markets.', 'spices', 'We export a wide range of premium Indian spices, sourced from reliable growers and processed under strict quality controls. Our spices are known for their rich aroma, natural color, and strong flavor.'),
(2, 'Rice', '2.jpg', 'Our rice range includes both premium Basmati Rice and quality-tested Non-Basmati Rice varieties. Known for their superior grain structure, pleasant aroma, and excellent cooking properties, our rice products are processed in hygienic facilities and packed to preserve freshness. With reliable sourcing and strict quality control, we deliver rice that meets international standards and satisfies diverse global market requirements.', 'rice', 'LMOK Global Trade supplies high-quality Indian rice suitable for both retail and bulk consumption across global markets.'),
(3, 'Pulses', '3.jpg', 'We offer a wide range of high-quality Indian pulses that are rich in protein and essential nutrients. Our pulses are thoroughly cleaned, graded, and packed to ensure purity, long shelf life, and consistent quality. They are suitable for household consumption, bulk buyers, and food processing industries worldwide.', 'pulses', 'We offer a variety of nutritious pulses sourced from trusted farms and cleaned using modern techniques to ensure quality and safety.'),
(4, 'Ground Nuts', '4.jpg', 'LMOK Global Trade supplies premium-grade Ground Nuts sourced from high-yield farms in India. Our ground nuts are valued for their high oil content, rich taste, and uniform size, making them suitable for direct consumption, oil extraction, and food processing industries. Through careful cleaning, grading, and moisture-controlled packaging, we ensure product safety, longer shelf life, and consistent export quality.', 'nuts', 'Our ground nuts are carefully selected and processed to maintain freshness and quality.');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(50) NOT NULL,
  `name` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `password`) VALUES
(1, 'rahul', 'hghRTTYR564654@');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pro`
--
ALTER TABLE `pro`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=426;

--
-- AUTO_INCREMENT for table `pro`
--
ALTER TABLE `pro`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
