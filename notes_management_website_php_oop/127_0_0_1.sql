-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 23, 2022 at 11:29 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `notes_management`
--
CREATE DATABASE IF NOT EXISTS `notes_management` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `notes_management`;

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `note` mediumtext NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`id`, `user_id`, `title`, `note`, `created_at`, `updated_at`) VALUES
(1, 8, 'college', 'great college i have', '2022-04-26 19:43:50', '2022-04-26 19:43:50'),
(2, 8, 'Regional Web Engineer', 'Incidunt ullam quisquam voluptas quos doloremque.', '2022-04-26 19:52:27', '2022-04-26 19:52:27'),
(3, 8, 'Human Branding Architect', 'Odio qui iusto eum aut aliquid impedit impedit.', '2022-04-26 19:52:54', '2022-04-26 19:52:54'),
(4, 8, 'National Division Orchestrator', 'Maiores facere accusantium commodi qui fugit cum suscipit.', '2022-04-26 19:54:23', '2022-04-26 19:54:23'),
(5, 8, 'Regional Metrics Director', 'Ex qui nam asperiores quis voluptas quasi provident rem dolor.', '2022-04-26 19:55:01', '2022-04-26 19:55:01'),
(6, 8, 'Product Response Officer', 'Doloribus quia maxime quo blanditiis quia.loremLorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem, consectetur ullam ipsum similique nulla porro pariatur sed laboriosam illum atque voluptatum distinctio voluptatibus ratione aut dolorem itaque natus quisquam magni. Lorem, ipsum dolor sit amet consectetur, adipisicing elit. Nemo, unde illo eveniet? Consequuntur, rerum reiciendis corporis eos possimus sapiente explicabo asperiores enim mollitia, dolore ipsam placeat quaerat autem omnis obcaecati. Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur eos, laudantium, dicta voluptatum temporibus ratione dolores quas modi accusantium unde aliquam dolore quaerat distinctio quibusdam rem quo ipsa excepturi debitis?', '2022-04-26 20:30:24', '2022-04-26 20:30:24'),
(7, 8, 'Product Operations Engineer', 'Dolores vitae doloribus corrupti ut aut numquam magni magnam nisi.', '2022-04-26 20:34:22', '2022-04-26 20:34:22'),
(8, 8, 'Human Creative Agent', 'Aut atque corrupti.', '2022-04-26 20:34:43', '2022-04-26 20:34:43'),
(9, 8, 'Product Identity Planner', 'Doloribus velit nobis in tenetur enim.', '2022-04-26 20:35:05', '2022-04-26 20:35:05'),
(10, 8, 'Senior Accounts Agent', 'Auto delectus et.', '2022-04-26 20:35:33', '2022-04-27 07:45:14'),
(11, 8, 'Future Functionality Specialist', 'Vitae accusantium iste adipisci.', '2022-04-26 20:35:54', '2022-04-26 20:35:54'),
(12, 8, 'Dynamic Usability  Liaison', 'Debitis voluptatem molestias alias et rerum adipisci aut aliquid tenetur.', '2022-04-26 20:36:01', '2022-04-27 08:31:41'),
(15, 8, 'Principal Applications Engineer', 'Atque provident vitae alias sed aut recusandae nam velit dicta.', '2022-04-27 22:42:40', '2022-04-27 22:42:40'),
(16, 8, '2product Intranet Supervisor', 'Omnis suscipit culpa rerum animi qui voluptatem quo.', '2022-04-27 22:42:49', '2022-04-28 04:32:15');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `token_expire` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `verified` tinyint(4) NOT NULL DEFAULT 0,
  `deleted` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `phone`, `gender`, `dob`, `photo`, `token`, `token_expire`, `created_at`, `verified`, `deleted`) VALUES
(1, 'khalid', 'khaled@gmail.com', '$2y$10$8L8B8dCXtq2JvDLvHVgJOOKihQSLbkkgiLbyhzYDVT6OKLVrnUYeu', '', '', '', '', '', '2022-04-22 13:28:24', '2022-04-22 13:28:24', 0, 1),
(8, 'omar1', 'omtb1990@gmail.com', '$2y$10$3D7zIBZxjYCnbj2DSxB3bORDi0ytRLfcnk8TcywcaSbXaeFIWPCaq', '01065242790', 'Male', '2002-04-17', 'uploads/IMG-20201215-WA0003.jpg', '6cd16526ce764', '2022-07-14 20:54:19', '2022-04-24 09:41:01', 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `notes`
--
ALTER TABLE `notes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `notes`
--
ALTER TABLE `notes`
  ADD CONSTRAINT `notes_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
