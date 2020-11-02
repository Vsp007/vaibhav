-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2020 at 09:28 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `news`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `name`, `email`, `password`) VALUES
(1, 'Admin', 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(100) NOT NULL,
  `category_name` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category_name`, `description`) VALUES
(2, 'Global', 'asesd'),
(7, 'Sports', 'asdsadsad'),
(9, 'health', '');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(100) NOT NULL,
  `title` varchar(500) NOT NULL,
  `description` varchar(15000) NOT NULL,
  `date` date NOT NULL,
  `category` varchar(255) NOT NULL,
  `thumbnail` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `description`, `date`, `category`, `thumbnail`) VALUES
(1, 'Kristin Cavallari and Jay Cutler announce divorce after 10 years together - CBS News', 'This is just the situation of two people growing apart,\" they posted on Instagram.', '2020-04-01', 'Sports', 'download.jpeg'),
(2, 'Apple Delays Mass Production of 2020 Flagship iPhones - The Wall Street Journal', 'The phones, some with 5G connectivity, will vary in price and come in three sizes', '2020-04-02', 'Global', 'tree.jpg'),
(3, 'Apple Delays Mass Production of 2020 Flagship iPhones - The Wall Street Journal', 'The phones, some with 5G connectivity, will vary in price and come in three sizes', '2020-04-03', 'Global', 'tree.jpg'),
(5, 'El Paso shooting victim dies in hospital nine months after the rampage that left 23 dead at Walmart - Daily Mail', 'The fundamental laws of physics are based on symmetries that determine the interactions between charged particles, among other things. Using ultracold atoms, researchers at Heidelberg University have experimentally constructed the symmetries of quantum electr', '2020-04-06', 'Global', 'download.jpeg'),
(7, 'asdasd', 'fasdfafa', '2020-04-09', 'Global', 'download.jpeg'),
(8, 'El Paso shooting victim dies in hospital nine months after the rampage that left 23 dead at Walmart - Daily Mail', 'sefsdfdfgehe', '2020-06-18', 'Global', 'download.jpeg'),
(9, 'Rare ring of fire solar eclipse dims skies across Israel  The Times of Israel', 'Most dramatic annular eclipse in years seen from parts of Africa, Asia; only partial eclipse visible in Israel, where it peaked at 8:24 a.m. with 40% of the sun covered by the moon', '2020-06-21', 'health', 'download.jpeg'),
(11, 'El Paso shooting victim dies in hospital nine months after the rampage that left 23 dead at Walmart - Daily Mail', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.\r\n\r\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', '2020-06-22', 'health', 'tree.jpg'),
(12, 'El Paso shooting victim dies in hospital nine months after the rampage that left 23 dead at Walmart - Daily Mail', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.\r\n\r\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', '2020-06-22', 'health', 'tree.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
