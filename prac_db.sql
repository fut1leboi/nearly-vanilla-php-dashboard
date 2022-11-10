-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: db-server
-- Generation Time: Nov 10, 2022 at 04:58 PM
-- Server version: 8.0.31
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prac_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` int NOT NULL,
  `number` int NOT NULL,
  `capacity` int NOT NULL,
  `pc_amount` int NOT NULL,
  `type` varchar(255) NOT NULL,
  `responsible_person` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `number`, `capacity`, `pc_amount`, `type`, `responsible_person`) VALUES
(4, 321312321, 321321, 312321, 'dasdas', 'a'),
(5, 321312, 321321, 312321, 'dasdas', 'a'),
(6, 321312, 321321, 312321, 'dasdas', 'a'),
(7, 321312, 321321, 312321, 'dasdas', 'a'),
(8, 321312, 321321, 312321, 'dasdas', 'тыщтыщтыщ'),
(9, 321312, 321321, 312321, 'быщ?', '123'),
(10, 321312, 321321, 312321, 'dasdas', '123'),
(11, 321312, 321321, 312321, 'dasdas', '123'),
(12, 321312, 321321, 312321, 'dasdas', '123'),
(13, 321312, 321321, 312321, 'dasdas', '123'),
(14, 321312, 321321, 312321, 'dasdas', '123'),
(15, 321312, 321321, 312321, 'dasdas', '123'),
(16, 321312, 321321, 312321, 'dasdas', '123'),
(17, 321312, 321321, 312321, 'dasdas', '123'),
(19, 2, 3, 4, 'a', '123'),
(20, 2, 3, 4, 'a', '123'),
(21, 312, 321, 321321, 'dsadas', '123'),
(22, 312, 321, 321, 'sdas', '123'),
(23, 111, 111, 111, 'dsa', '123'),
(24, 1, 1, 1, 'dsa', '123'),
(25, 2, 2, 2, 'ad', '123'),
(26, 321, 21, 321, 'dsadas', '123');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int NOT NULL,
  `first_name` varchar(78) NOT NULL,
  `second_name` varchar(78) NOT NULL,
  `last_name` varchar(78) NOT NULL,
  `birth_year` int NOT NULL,
  `course` int NOT NULL,
  `group_name` char(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `entrance_year` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `first_name`, `second_name`, `last_name`, `birth_year`, `course`, `group_name`, `entrance_year`) VALUES
(3, 'вфывфывфывфывфы13232132dsadasas', 'вфы', 'вфы', 321, 6, 'выф', 321),
(6, 'dsadasd', 'das', 'das', 321, 6, 'das', 321);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
