-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 23, 2022 at 11:28 PM
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
-- Database: `movie_site_php`
--
CREATE DATABASE IF NOT EXISTS `movie_site_php` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `movie_site_php`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'omar', '202cb962ac59075b964b07152d234b70'),
(2, 'ahmed', '202cb962ac59075b964b07152d234b70'),
(6, 'ali', '202cb962ac59075b964b07152d234b70'),
(11, 'khaled', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `post` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category_id`, `category_name`, `post`) VALUES
(1, 1, 'action', 0),
(5, 2, 'drama', 0),
(6, 3, 'horror', 0),
(9, 4, 'anime', 0),
(10, 5, 'commedy', 0);

-- --------------------------------------------------------

--
-- Table structure for table `genre`
--

CREATE TABLE `genre` (
  `id` int(11) NOT NULL,
  `genre_name` varchar(255) NOT NULL,
  `genre_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `genre`
--

INSERT INTO `genre` (`id`, `genre_name`, `genre_id`, `category_id`) VALUES
(3, 'hollywood', 1, 1),
(4, 'arabic', 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE `movie` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `genre_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `tag` varchar(255) NOT NULL,
  `link1` varchar(255) NOT NULL,
  `link2` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `the_date` date NOT NULL,
  `language` varchar(255) NOT NULL,
  `director` varchar(255) NOT NULL,
  `meta_description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`id`, `category_id`, `genre_id`, `name`, `description`, `tag`, `link1`, `link2`, `image`, `the_date`, `language`, `director`, `meta_description`) VALUES
(1, 4, 1, 'Hotel Transylvania: Transformania', 'بسبب الماكينة الجديدة التي ابتكرها فان هلسينج، يتحول دارك وعصبته من الوحوش إلى بشر، أما جوني فعلى العكس يصير وحشًا، وعلى أفراد العصبة أن يعودوا لسابق عهدهم قبل فوات اﻷوان.', 'Hotel Transylvania', 'not available', 'not available', '45ad3e3c1efeb7ab7b79a02c62d953b3.jpg', '2022-01-16', 'english', 'andy samberg', 'Hotel Transylvania movie'),
(2, 1, 1, 'Venom: Let There Be Carnage', 'يستكمل العمل أحداث الجزء الأول، حيث يحاول الصحافي إيدي بروك أن يتكيف مع مشكلة استضافة جسده للكيان المُسمى فينوم، وفي سبيل ذلك يواجه خصوم جدد في طريقه.', 'venom', 'not available', 'not available', '97c185dfead954febcfb193c977a30bd.jpg', '2022-01-16', 'english', 'tom hardy', 'venom movie'),
(4, 3, 1, 'The Jack in the Box: Awakening', 'When a vintage Jack-in-the-box is opened by a dying woman, she enters into a deal with the demon within that would see her illness cured in return for helping it claim six innocent victims.\r\n', 'The Jack in the Box', 'not available', 'not available', '160b30670220df4816ad704e1873082e.jpg', '2022-01-16', 'english', 'nicola write', 'The Jack in the Box movie'),
(5, 1, 2, 'العارف', 'تدور أحداث الفيلم حول فكرة حرب العقول الأحداث، في وقتنا المعاصر، من خلال قصة يونس الذي يعيش مع زوجته وطفلته الرضيعة في إحدى شقق وسط البلد، ويلجأ إلى سرقة أحد البنوك عن طريق الإنترنت، ويدخل في صراع مع إحدى العصابات الخطيرة.', 'فيلم العارف', 'not available', 'not available', 'de71525b67325cbaa4acc8d44144a1b8.jpg', '2022-01-10', 'arabic', 'محمود حميدة', 'العارف'),
(6, 1, 2, 'حرب كرموز', 'خلال فترة اﻷربعينات، تتعرض فتاة للاغتصاب على يد مجموعة من الجنود اﻹنجليز، فيثأر لها ثلاث شباب مصريين، يموت أحدهم، ويحتجز الجندي الانجليزي الحي في قسم شرطة كرموز الذي يرأسه الجنرال يوسف المصري، ويطالب الجنرال آدمز بتسليمه إليه، لكن يوسف يرفض، ويحرك الجنرال', 'فيلم حرب كرموز', 'not available', 'not available', '03b5e8164b14b46b2bf3cbd4d6900252.jpg', '2022-01-11', 'arabic', 'بيومي فؤاد', 'حرب كرموز'),
(7, 2, 1, 'Ray Donovan: The Movie', 'في إطار من الدراما، تدور الأحداث استكمالًا لأحداث مسلسل (Ray Donovan) حول عائلة دونوفان والتي تواجه العديد من المخاطر، حيث يُصبح ميكي في مهب الريح ويحاول راي العثور عليه وإيقافه قبل ارتكاب مذبحة.', 'Ray Donovan', 'not available', 'not available', '60d994eeae29b2268d40b9667df99c44.jpg', '2022-01-12', 'english', 'eddie marsan', 'Ray Donovan movie'),
(8, 5, 1, 'Dumb & Dumber', 'After a woman leaves a briefcase at the airport terminal, a dumb limo driver and his dumber friend set out on a hilarious cross-country road trip to Aspen to return it.\r\n', 'Dumb & Dumber movie', 'not available', 'not available', 'f773f32674751482debc5439036aba95.jpg', '1990-06-12', 'english', 'tom hardy', 'Dumb & Dumber');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `genre`
--
ALTER TABLE `genre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `movie`
--
ALTER TABLE `movie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
