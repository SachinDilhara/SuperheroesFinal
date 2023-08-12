-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 10, 2023 at 12:43 PM
-- Server version: 5.7.40
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `superheroes`
--

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

DROP TABLE IF EXISTS `project`;
CREATE TABLE IF NOT EXISTS `project` (
  `ID` int(4) NOT NULL AUTO_INCREMENT,
  `Title` varchar(255) NOT NULL,
  `Description` text NOT NULL,
  `Image` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`ID`, `Title`, `Description`, `Image`) VALUES
(1, 'Superman', 'Bird, Plane, Superman', 'superman.jpg'),
(22, 'batmam', 'The Dark Knight', 'batman1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `First_Name` text NOT NULL,
  `Last_Name` text NOT NULL,
  `Email` text NOT NULL,
  `User_Name` text NOT NULL,
  `Password` text NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `First_Name`, `Last_Name`, `Email`, `User_Name`, `Password`) VALUES
(23, 'Sachin', 'Dilhara', 'sac2@gmail.com', 'sachi2', '$2y$10$1Hsty2bZD9amogPHyCB21.05GMpixm.nnuaucpIvp/2OLIRM7CiBm'),
(22, 'Sachin', 'Dilhara', 'sachin@gmail.com', '123', '$2y$10$NPg5iQzRIFnqioMJeJLXJOo8kayWwcSeBGm7CTSyKN8KUUAn2DhQ6'),
(21, 'Sachin', 'Dilhara', 'sac@gmail.com', 'sachi', '$2y$10$2VNrSNv/kb.J9Du0iFSmQek9o17I3wWFo29yfnUIkL.of.Ny6lqv.');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
