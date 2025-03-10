-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 07, 2025 at 08:14 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `create account`
--

-- --------------------------------------------------------

--
-- Table structure for table `donorinfo`
--

CREATE TABLE `donorinfo` (
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Phone Number` int(11) NOT NULL,
  `Address` varchar(250) NOT NULL,
  `Amount Donated` int(200) NOT NULL,
  `Card Number` int(16) NOT NULL,
  `CCV` int(3) NOT NULL,
  `Type` varchar(20) NOT NULL,
  `Message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `donorinfo`
--

INSERT INTO `donorinfo` (`Name`, `Email`, `Phone Number`, `Address`, `Amount Donated`, `Card Number`, `CCV`, `Type`, `Message`) VALUES
('Christen De Castro', 'christendeacastro@gmail.com', 128899683, 'D4-G-1', 5000, 2234, 223, 'monthly', 'Fuck All This Shit'),
('Sophia Lee', 'sophie@gmail.com', 123300530, 'D4-G-1 Scot Pine Condo, Bandar Sungai Long&#13;&#10;Bandar Sungai Long', 6000, 2234, 223, 'monthly', 'I Hate black people'),
('Christen Antonio De Castro', 'christendecastro@gmail.com', 123300530, 'D4-G-1 Scot Pine Condo, Bandar Sungai Long&#13;&#10;Bandar Sungai Long', 5000, 2234, 223, 'one_time', 'sdada'),
('Christen De Castro', 'christendecastro@gmail.com', 129494273, 'D4-G-1 Scot Pine Condo, Bandar Sungai Long', 5000, 2234, 223, 'one_time', 'wqeqwe'),
('Christen Antonio De Castro', 'christendecastro@gmail.com', 1245779345, 'D4-G-1 Scot Pine Condo, Bandar Sungai Long&#13;&#10;Bandar Sungai Long', 90000, 2234, 223, 'one_time', 'Fuck You'),
('Christen', 'christendecastro@gmail.com', 123390782, 'Aidans House', 40000, 2234, 223, 'one_time', 'I Hate this website'),
('Cheh Qin Hui', 'chehqinhui@gmail.com', 18, 'satelite', 10, 111, 998, 'monthly', 'don&#39;t press my house bell ring'),
('Earth Galaxy1', 'chehqinhui@gmail.com', 18, '1', 1, 111, 998, 'one_time', '11'),
('Earth Galaxy1', 'chehqinhui@gmail.com', 18, 'qqq', 111, 111, 111, 'one_time', '111');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `Name` varchar(250) NOT NULL,
  `Email` varchar(250) NOT NULL,
  `Subject` varchar(250) NOT NULL,
  `Feedback` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`Name`, `Email`, `Subject`, `Feedback`) VALUES
('Christen', 'christendecastro@gmail.com', 'sadas', 'sada'),
('Christen', 'christendecastro@gmail.com', 'sadas', 'sada'),
('Christen', 'christendecastro@gmail.com', 'sadas', 'sada'),
('Christen', 'christendecastro@gmail.com', 'sadas', 'sada'),
('Christen', 'christendecastro@gmail.com', 'sadas', 'sada'),
('Christen', 'christendecastro@gmail.com', 'sadas', 'sada'),
('Christen', 'christendecastro@gmail.com', 'sadas', 'sada'),
('Christen Antonio De Castro', 'christendecastro@gmail.com', 'sadas', 'asdasdas'),
('das', 'sad@gmail.com', 'asda', 'asd'),
('sdad', 'christendecastro@gmail.com', 'sda', 'dasd'),
('Christen Antonio De Castro', 'christendecastro@gmail.com', 'sda', 'sda'),
('Christen Antonio De Castro', 'christendecastro@gmail.com', 'daf', 'afda'),
('Christen Antonio De Castro', 'christendecastro@gmail.com', 'sadas', 'dfsfs'),
('Christen Antonio De Castro', 'christendecastro@gmail.com', 'csada', 'sdada'),
('Christen Antonio De Castro', 'christendecastro@gmail.com', 'dsa', 'Thank You For your hardwork'),
('Aidan Go Kun Zi', 'christendecastro@gmail.com', 'black', 'I love black Guys'),
('cheh', 'tanjiangren@gmail.com', '666', 'it is a good coding for` this website '),
('Earth Galaxy1a', 'chehqinhui@gmail.com', '666', 'W');

-- --------------------------------------------------------

--
-- Table structure for table `forum_comments`
--

CREATE TABLE `forum_comments` (
  `id` int(11) NOT NULL,
  `Game` varchar(50) NOT NULL,
  `Subject` varchar(250) NOT NULL,
  `Comment` varchar(700) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `forum_comments`
--

INSERT INTO `forum_comments` (`id`, `Game`, `Subject`, `Comment`) VALUES
(1, 'Tits', 'QinHui', 'Faggot'),
(2, 'Tits', 'dsa', 'das'),
(3, 'sda', 'sdad', 'asd'),
(4, 'Christen', 'Sucks', 'Big Juicy Dick'),
(5, 'Genshin', 'Sucks', 'Dick'),
(6, 'Dark Soukls', 'black Guy', 'Cheh Qin Hui'),
(7, 'CS Go', 'racism', 'say no'),
(8, 'Genshin', 'Qinhui', 'is a bad games'),
(9, 'CSGO', '666', '888'),
(10, 'CSGO', '666', '11'),
(11, 'CSGO', '666', '111'),
(12, 'CSGO', '666', 'qqq');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Name` text NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Name`, `Email`, `Password`) VALUES
('11', '11@gmail.com', '11'),
('as', 'as@gmail.com', 'as'),
('Cheh Qin Hui', 'chehqinhui@gmail.com', 'qqq'),
('Christen', 'chris@gmail.com', '123'),
('Tent', 'christen@apu.com', '123'),
('Chris', 'heretic2@gmail.com', '123'),
('qq', 'qq@gmail.com', 'qq');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donorinfo`
--
ALTER TABLE `donorinfo`
  ADD UNIQUE KEY `Name_2` (`Name`,`Email`,`Phone Number`,`Address`,`Amount Donated`,`Card Number`,`CCV`,`Type`,`Message`) USING HASH,
  ADD KEY `Name` (`Name`),
  ADD KEY `Email` (`Email`,`Phone Number`,`Address`,`Amount Donated`,`Card Number`,`CCV`,`Type`),
  ADD KEY `Message` (`Message`);

--
-- Indexes for table `forum_comments`
--
ALTER TABLE `forum_comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `forum_comments`
--
ALTER TABLE `forum_comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
