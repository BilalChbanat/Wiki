-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 12, 2024 at 12:02 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wiki`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(21, 'Electronics'),
(22, 'Clothing'),
(23, 'Home and Garden'),
(24, 'Books'),
(25, 'Toys and Games'),
(26, 'Sports and Outdoors'),
(27, 'Health and Beauty'),
(28, 'Automotive'),
(29, 'Food and Grocery');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int NOT NULL,
  `link` varchar(550) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `role`) VALUES
(1, 'author'),
(2, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tag`
--

CREATE TABLE `tag` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tag`
--

INSERT INTO `tag` (`id`, `name`) VALUES
(1, 'Technology'),
(2, 'Fashion'),
(3, 'Home Decor'),
(4, 'Literature'),
(5, 'Toys'),
(6, 'Fitness'),
(7, 'Beauty'),
(8, 'Automotive'),
(9, 'Grocery'),
(10, 'Furniture');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `img` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role_id` int DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `firstname`, `lastname`, `address`, `img`, `email`, `password`, `role_id`) VALUES
(9, 'John', 'Doe', '123 Main St', 'test', 'john.doe@email.com', 'securepassword', 2),
(10, 'Jane', 'Smith', '456 Oak St', 'test', 'jane.smith@email.com', 'strongpassword', 1),
(11, 'Bob', 'Johnson', '789 Elm St', 'test', 'bob.johnson@email.com', 'safepassword', 1),
(12, 'Alice', 'Williams', '101 Pine St', 'test', 'alice.williams@email.com', 'secret123', 1),
(13, 'Charlie', 'Brown', '202 Maple St', 'test', 'charlie.brown@email.com', 'mypassword', 1),
(14, 'Eva', 'Davis', '303 Cedar St', 'test', 'eva.davis@email.com', 'letmein123', 1),
(15, 'Frank', 'Jones', '404 Birch St', 'test', 'frank.jones@email.com', 'password123', 1),
(16, 'Grace', 'Miller', '505 Redwood St', 'test', 'grace.miller@email.com', 'securepass', 1),
(17, 'Destiny', 'Shaffer', 'Eos odit laudantium', NULL, 'bavu@mailinator.com', '$2y$10$21LWcNHIrnE9ukrd908zt.DXDumksqLsHUA1rLdmgLjXKD9sA4TeC', 1),
(18, 'Candace', 'Dotson', 'Nostrum et sapiente ', NULL, 'fozokyh@mailinator.com', '$2y$10$Eu0DtZQ3Ets7h0Tt4xzucuflnVfU3SDgNU/.ZnZg2EDZkMV42Xgsi', 1),
(19, 'Darrel', 'Mccormick', 'Consequatur sit es', NULL, 'qypisuwe@mailinator.com', '$2y$10$iq1urqexTXlDVLKdh8cqkeMCqdia6MdtuZX1Yt14kIq.gKTMz7Bf.', 1),
(20, 'Cheryl', 'Frederick', 'Velit officia ex of', NULL, 'gabifugic@mailinator.com', '$2y$10$TVU8cqPRLNnffRHgzKdpBeeOaqa2GVf2d/Q5C2bpPkLlYUj0goKIi', 1),
(21, 'Carlos', 'Olsen', 'Quas eligendi maxime', NULL, 'faloti@mailinator.com', '$2y$10$g0GnrimRukf6uOBZJVdpDOoknRxfXkTUMmzTGLxz0Hzep3IdExd5.', 1),
(22, 'Brielle', 'Lang', 'Non eum occaecat con', NULL, 'xyha@mailinator.com', '$2y$10$l8lG51uobiJEQSiVtioQcepUrwJXvRcJqPARgH5H1d5TAaATG6Y0W', 1),
(23, 'Cynthia', 'Snyder', 'Reprehenderit itaque', NULL, 'zizevu@mailinator.com', '$2y$10$aCNAaMrxqPgbA6RDqmlPD.y7Ct9nMW5k5MxA6SvtOx0ZhiRszicRC', 2);

-- --------------------------------------------------------

--
-- Table structure for table `wikis`
--

CREATE TABLE `wikis` (
  `id` int NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text,
  `img` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `statut` tinyint(1) DEFAULT '0',
  `user_id` int DEFAULT NULL,
  `category_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wikitag`
--

CREATE TABLE `wikitag` (
  `wiki_id` int DEFAULT NULL,
  `tag_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tag`
--
ALTER TABLE `tag`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `role_id` (`role_id`);

--
-- Indexes for table `wikis`
--
ALTER TABLE `wikis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `img` (`img`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `wikitag`
--
ALTER TABLE `wikitag`
  ADD KEY `wiki_id` (`wiki_id`),
  ADD KEY `tag_id` (`tag_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tag`
--
ALTER TABLE `tag`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `wikis`
--
ALTER TABLE `wikis`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `role` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `wikis`
--
ALTER TABLE `wikis`
  ADD CONSTRAINT `wikis_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `wikis_ibfk_2` FOREIGN KEY (`img`) REFERENCES `images` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `wikis_ibfk_3` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `wikitag`
--
ALTER TABLE `wikitag`
  ADD CONSTRAINT `wikitag_ibfk_1` FOREIGN KEY (`wiki_id`) REFERENCES `wikis` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `wikitag_ibfk_2` FOREIGN KEY (`tag_id`) REFERENCES `tag` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
