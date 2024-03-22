-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 22, 2024 at 03:26 PM
-- Server version: 8.2.0
-- PHP Version: 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `brieftodo`
--

-- --------------------------------------------------------

--
-- Table structure for table `todo_task`
--

DROP TABLE IF EXISTS `todo_task`;
CREATE TABLE IF NOT EXISTS `todo_task` (
  `Id_Task` int NOT NULL AUTO_INCREMENT,
  `Name` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Description` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `_Date` date NOT NULL,
  `Id_Priority` int NOT NULL,
  `Id_Users` int NOT NULL,
  PRIMARY KEY (`Id_Task`),
  KEY `Id_Priority` (`Id_Priority`),
  KEY `Id_Users` (`Id_Users`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `todo_task`
--

INSERT INTO `todo_task` (`Id_Task`, `Name`, `Description`, `_Date`, `Id_Priority`, `Id_Users`) VALUES
(1, 'Justine', 'job', '0000-00-00', 0, 0),
(2, 'Justine', 'job', '0000-00-00', 0, 0),
(3, 'Justine', 'yhytfcd', '0000-00-00', 0, 0),
(5, '$newTask->getName()', 'test', '0000-00-00', 1, 0),
(6, 'test', 'test', '0000-00-00', 2024, 0),
(7, 'date', 'date', '0000-00-00', 2024, 0),
(8, 'date', 'date', '0000-00-00', 2024, 0),
(9, 'date', 'date', '0000-00-00', 2024, 0),
(10, 'test', 'date', '2024-02-22', 1, 0),
(11, 'ok', 'ok', '2024-02-22', 1, 0),
(12, 'ok', 'ok', '2024-02-22', 2, 0),
(13, 'ok', 'ok', '2024-02-22', 3, 0),
(14, 'ok', 'ok', '2024-02-22', 3, 0),
(15, 'ok', 'ok', '2024-02-22', 3, 0),
(16, 'ok', 'ok', '2024-02-25', 3, 0),
(17, 'add', 'green', '2024-02-22', 3, 0),
(18, '', '', '2024-02-22', 2, 0),
(19, '', '', '2024-02-22', 2, 0),
(20, '', '', '2024-02-22', 2, 0),
(21, '', '', '2024-02-22', 2, 0),
(22, '', '', '2024-02-22', 2, 0),
(23, '', '', '2024-02-22', 2, 0),
(24, '', '', '2024-02-22', 2, 0),
(25, '', '', '2024-02-22', 2, 0),
(26, '', '', '2024-02-22', 2, 0),
(27, '', '', '2024-02-22', 3, 0),
(28, '', '', '2024-02-22', 2, 0),
(29, '', '', '2024-02-22', 2, 0),
(30, '', '', '2024-02-22', 2, 0),
(31, '', '', '2024-02-22', 2, 0),
(32, '', '', '2024-02-22', 2, 0),
(33, '', '', '2024-02-22', 2, 0),
(34, '', '', '2024-02-22', 1, 0),
(35, '', '', '2024-02-22', 2, 0),
(36, '', '', '2024-02-22', 2, 0),
(37, '', '', '2024-02-22', 2, 0),
(38, '', '', '2024-02-22', 2, 0),
(39, '', '', '2024-02-22', 3, 0),
(40, '', '', '2024-02-22', 3, 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
