-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Apr 07, 2021 at 11:51 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mesazh`
--

-- --------------------------------------------------------

--
-- Table structure for table `clean`
--

CREATE TABLE `clean` (
  `id` int(5) NOT NULL,
  `clean_message_id` int(5) NOT NULL,
  `clean_user_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clean`
--

INSERT INTO `clean` (`id`, `clean_message_id`, `clean_user_id`) VALUES
(26, 191, 36),
(27, 192, 37),
(28, 203, 38),
(29, 237, 39);

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `msg_id` int(34) NOT NULL,
  `message` text NOT NULL,
  `msg_type` text NOT NULL,
  `user_id` int(22) NOT NULL,
  `msg_time` datetime NOT NULL DEFAULT current_timestamp(),
  `user_id_sent` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`msg_id`, `message`, `msg_type`, `user_id`, `msg_time`, `user_id_sent`) VALUES
(227, 'fdfd', 'text', 36, '2021-04-06 11:36:34', 32),
(228, 'hello', 'text', 32, '2021-04-06 11:52:11', 36),
(229, 'xzx', 'text', 32, '2021-04-06 11:57:13', 36),
(230, 'dsds', 'text', 36, '2021-04-06 12:03:44', 32),
(231, 'dsss', 'text', 36, '2021-04-06 12:29:28', 32),
(232, 'dfdfd', 'text', 32, '2021-04-06 12:58:59', 36),
(233, 'ds', 'text', 36, '2021-04-06 13:04:53', 32),
(234, 'sd', 'text', 36, '2021-04-06 13:13:10', 32),
(235, 'rwe', 'text', 36, '2021-04-06 13:50:45', 32),
(236, 'gfg', 'text', 36, '2021-04-06 14:16:06', 32),
(237, 'hello how are are you', 'text', 39, '2021-04-06 14:21:19', 36),
(238, 'assets/emoji/emoji1.png', 'emoji', 39, '2021-04-06 14:21:22', 36),
(239, 'Book1.xlsx', 'xlsx', 39, '2021-04-06 14:21:31', 36),
(240, 'A N K I M FILLORETA ORE SHTES.docx', 'docx', 39, '2021-04-06 14:21:43', 36),
(241, 'hahha ', 'text', 36, '2021-04-06 14:22:25', 39);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(45) NOT NULL,
  `name` varchar(54) NOT NULL,
  `email` varchar(88) NOT NULL,
  `password` varchar(778) NOT NULL,
  `image` varchar(88) NOT NULL,
  `status` int(2) NOT NULL,
  `clean_status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `email`, `password`, `image`, `status`, `clean_status`) VALUES
(32, 'dardi', 'dardan.madani@gmail.com', '$2y$10$HtVFNmSFNF73RHAcxngPteY5dSWMWhYiGJV44ORrZyIMiV/WdcG0y', 'quote.jpg', 0, 1),
(35, 'yt', 'fcenolli@gmail.yahoo.com', '$2y$10$EE0olk2vFbQn.XZfEwEjNOuREbLjCDsOSh8oUMLojAKi2nMKeulYi', 'snake_header.jpg', 1, 1),
(36, 'tr23', 'fcenolli@gmail.com', '$2y$10$DB.ydIUdja7xSZZuWL.6rOQ5UX26lHsjXUOWcfDWbfPHeOKS8cz1G', 'snake_header.jpg', 0, 1),
(37, 'dard1', 'fcenolli1@gmail.com', '$2y$10$5aG0P2WyrRoWwBs.S.TT7ORT7gvpMAxrAdnErtrzTv5ZQznH/dpaG', 'iki.jpg', 0, 1),
(38, 'tr1', '2fcenolli@gmail.com', '$2y$10$KKAE14klixutrju7rY/39uIfwrrUMqOa3ZoZ6LZPeuuvj2scPyUm6', 'iki.jpg', 0, 1),
(39, 'ddd', 'f3cenolli@gmail.com', '$2y$10$FdoffgRHXWf.kHb8MtUxjOguHr7dlifT2saMo9XbrN8iOT/B634M2', 'fruit.png', 0, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clean`
--
ALTER TABLE `clean`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`msg_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clean`
--
ALTER TABLE `clean`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `msg_id` int(34) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=242;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(45) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `messages_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
