-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 20, 2021 at 02:50 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `agent`
--

CREATE TABLE `agent` (
  `ID` int(11) NOT NULL,
  `Name` varchar(45) NOT NULL,
  `Email` text NOT NULL,
  `Phone` int(11) NOT NULL,
  `Age` int(11) NOT NULL,
  `Password` varchar(300) NOT NULL,
  `Bank_ID` int(11) NOT NULL,
  `Bank_Name` text NOT NULL,
  `NID` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `agent`
--

INSERT INTO `agent` (`ID`, `Name`, `Email`, `Phone`, `Age`, `Password`, `Bank_ID`, `Bank_Name`, `NID`) VALUES
(4, 'Alvi', 'Alvi@gmail.com', 1816388425, 23, '8969', 1, 'Prime Bank', '0'),
(5, 'Scottyy', 'Scottyy@yahoo.com', 56456, 32, '231234', 4, 'HSBC', '0'),
(6, 'Nazim', 'Nazim@yahoo.com', 6975546, 67, '1', 5, 'Islami Bank', '0'),
(7, 'nazim', 'Nazim@yahoo.com', 343434, 22, '0', 2, 'Islami Bank', '0'),
(8, 'Auno', 'Auno@gmail.com', 345234, 55, '674', 6, 'Primeasia', '0'),
(9, 'LOL', 'LOL@gmail.com', 66665, 33, '90000000', 9, 'HSBC Bank', '0'),
(12, 'kawsar ahmed', 'support1@gmail.com.bd', 1858969247, 12, '20784f6187084788d5184fe39d9658', 12, '12', '0'),
(13, 'hamd hasan', 'hamid@gamil.com', 1858969247, 23, '48e3173fb54a18bbd19d35e52f5611', 21, '2312', '0'),
(14, 'Alam alam', 'a.b123kwsar@gmail.com', 1858969247, 234, 'bc9e161f641dc38ad680fbfaac0739', 3453, '34543', '0'),
(15, 'samim', 'samnone@gmail.com', 1858963436, 12, 'f5f1c26d5bb60cc24cf1c63cafe227', 1858963436, '01858963436', '0'),
(16, 'hamid hamid', 'kawsar2@gmail.com', 1858969247, 23, '37693cfc748049e45d87b8c7d8b9aa', 234324, '01858963436', '0'),
(17, 'Riyad Arefin', 'arefin@gmail.com', 1789383300, 22, '4eae18cf9e54a0f62b44176d074cbe2f', 1212, 'Prime', 'NID'),
(18, 'Mofij Uddin', 'mofij@uddin.com', 1789383344, 21, '202cb962ac59075b964b07152d234b70', 4, 'HSBC', 'NID'),
(19, 'abirY', 'abirY@gmail.com', 1736835234, 28, '827ccb0eea8a706c4c34a16891f84e7b', 3, 'Islami Bank', 'NID');

-- --------------------------------------------------------

--
-- Table structure for table `banks`
--

CREATE TABLE `banks` (
  `ID` int(11) NOT NULL,
  `bName` varchar(45) NOT NULL,
  `Website` varchar(35) NOT NULL,
  `Contact` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `banks`
--

INSERT INTO `banks` (`ID`, `bName`, `Website`, `Contact`) VALUES
(1, 'Prime Bank', 'https://www.primebank.com.bd/', 'info@primebank.com.bd'),
(2, 'Basic Bank Limited', 'https://www.basicbanklimited.com/en', 'basic@bank.com'),
(3, 'Islami Bank ', 'https://www.islamibankbd.com/', 'islamibank@gmail.com'),
(4, 'HSBC Bank ', 'https://www.hsbc.com.bd/1/2/', 'contact@hsbc.com'),
(5, 'Grameen Bank Limited', 'https://grameenbank.org/', 'info@grameenbank.org');

-- --------------------------------------------------------

--
-- Table structure for table `moderator`
--

CREATE TABLE `moderator` (
  `ID` int(11) NOT NULL,
  `Name` varchar(35) NOT NULL,
  `Email` varchar(35) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Notes` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ques_and`
--

CREATE TABLE `ques_and` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) DEFAULT NULL,
  `question` text DEFAULT NULL,
  `ans` text DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `current` int(11) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ques_and`
--

INSERT INTO `ques_and` (`id`, `user_name`, `question`, `ans`, `date`, `current`, `status`) VALUES
(1, 'alam', 'hello how are you', NULL, '2021-09-15 15:17:25', NULL, 'User'),
(5, 'Alam alam', NULL, 'hello ans', '2021-09-15 15:17:25', NULL, 'User'),
(6, 'Alam alam', NULL, 'Ans hello', '2021-09-15 15:17:25', NULL, 'Admin'),
(7, 'Alam alam', NULL, 'vvzxcxzc', '2021-09-15 15:19:02', NULL, 'Admin'),
(8, 'Alam alam', NULL, 'fafsddf', '2021-09-15 15:19:36', NULL, 'Admin'),
(10, 'Alam alam', NULL, 'gdtfg', '2021-09-15 15:30:11', 5, 'Admin'),
(11, 'Alam alam', NULL, 'sdfdsfsdf', '2021-09-15 15:32:05', 5, 'Agent'),
(12, 'alam', 'kemon asen', NULL, '2021-09-15 15:56:42', NULL, 'User'),
(13, 'Alam alam', NULL, 'valo', '2021-09-15 16:01:08', 12, 'Agent'),
(14, 'Alam alam', NULL, 'nice', '2021-09-16 10:36:32', 1, 'Agent'),
(15, 'Alam alam', NULL, 'tow now', '2021-09-16 10:36:53', 1, 'Agent'),
(16, 'Alam alam', NULL, 'valo asi', '2021-09-16 15:07:47', 12, 'Agent'),
(17, 'Alam alam', NULL, 'testing', '2021-09-16 15:13:56', 12, 'Agent'),
(18, 'alam', 'hello testing message', NULL, '2021-09-16 15:18:11', NULL, 'User'),
(19, 'Riyad Arefin', NULL, 'ttt', '2021-09-16 15:54:08', 1, 'Agent'),
(20, '', NULL, 'rrr', '2021-09-16 15:54:13', 5, 'Agent'),
(21, 'Riyad Arefin', NULL, 'vd', '2021-09-16 16:22:48', 1, 'Agent'),
(22, 'abirY', NULL, 'yes', '2021-09-20 00:40:08', 18, 'Agent'),
(23, 'Sam', 'Hello test message urgent', NULL, '2021-09-20 00:42:12', NULL, 'User'),
(24, 'abirY', NULL, 'Urgent reply 2', '2021-09-20 00:42:27', 23, 'Agent');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID` int(11) NOT NULL,
  `Name` varchar(40) NOT NULL,
  `Email` varchar(35) NOT NULL,
  `Phone` int(11) NOT NULL,
  `Age` int(11) NOT NULL,
  `Password` text NOT NULL,
  `Bkash` int(11) NOT NULL,
  `TRLX` varchar(20) NOT NULL,
  `Date_Time` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `Name`, `Email`, `Phone`, `Age`, `Password`, `Bkash`, `TRLX`, `Date_Time`) VALUES
(1, 'Rifat Bin Yusuf', 'rifat.nsu@gmail.com', 1872232838, 23, '5f4dcc3b5aa765d61d8327deb882cf99', 1872232838, 'abcd1234', '09-08-2021'),
(2, 'Azim', 'Azim@gmail.com', 194854, 22, '5f4dcc3b5aa765d61d8327deb882cf99', 194854, '34534', '23'),
(4, 'Abir', 'Abir@gmail.com', 199875, 55, '8969', 199875, '654', '224'),
(5, 'Yusuf', 'Yusuf@gmail.com', 2323434, 22, '46d045ff5190f6ea93739da6c0aa19bc', 2323434, '2324', '232255'),
(6, 'tazrin', 'tazrin@gmail.com', 18454545, 55, '912e79cd13c64069d91da65d62fbb78c', 18454545, 'kol', '66'),
(7, 'alam', 'a.b123kwsar@gmail.com', 1858969247, 34, 'bc9e161f641dc38ad680fbfaac0739aa', 0, '', ''),
(8, 'samim soker', 'samim@gmail.com', 185896923, 34, 'f461608b062468cad78c4fa26c5fdcc5', 0, '', ''),
(9, 'nahiid akter', 'nahid@gmail.com', 1858963454, 34, '7ce4d9027ea9a2986e3eea1db4d1f532', 0, '', ''),
(10, 'Sam', 'sam@gmail.com', 23252, 25, '81dc9bdb52d04dc20036dbd8313ed055', 0, '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agent`
--
ALTER TABLE `agent`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `ques_and`
--
ALTER TABLE `ques_and`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agent`
--
ALTER TABLE `agent`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `ques_and`
--
ALTER TABLE `ques_and`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
