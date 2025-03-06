-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2025 at 11:13 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `covid19`
--

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `City_ID` int(11) NOT NULL,
  `City_Name` varchar(255) NOT NULL,
  `State_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`City_ID`, `City_Name`, `State_ID`) VALUES
(1, 'navsari', 1),
(2, 'bilimora', 1),
(3, 'Pune', 2),
(4, 'Nagpur', 2),
(5, 'Jaipur', 3),
(6, 'Udaipur', 3);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `Username` varchar(20) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Contact` int(20) NOT NULL,
  `Message` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`Username`, `Email`, `Contact`, `Message`) VALUES
('Rohan Patil', 'rohanpatil1963@gmail', 2147483647, 'hello'),
('XYZ', 'xyz@gmail.com', 123456, 'This is for testing'),
('Ved Panchal', 'ved@gmail.com', 456789, 'hello i am vedbhai'),
('Kashyap', 'kashyap@gmail.com', 9427586, 'hello this is demo'),
('kashyap', 'kashyap@gmail.com', 942758, 'hello this  is demo'),
('demo', 'demo@demo.com', 19555, 'jgxazxzjcajcjz'),
('Demo', 'demo@demo.com', 33552530, 'This is for the demonstration');

-- --------------------------------------------------------

--
-- Table structure for table `slots`
--

CREATE TABLE `slots` (
  `ID` int(11) NOT NULL,
  `Vaccine_Name` varchar(255) NOT NULL,
  `Slots` int(11) NOT NULL,
  `City_ID` int(11) NOT NULL,
  `Area_ID` varchar(255) NOT NULL,
  `Dose_1` int(11) NOT NULL,
  `Dose_2` int(11) NOT NULL,
  `State_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `slots`
--

INSERT INTO `slots` (`ID`, `Vaccine_Name`, `Slots`, `City_ID`, `Area_ID`, `Dose_1`, `Dose_2`, `State_ID`) VALUES
(13, '2', 100, 1, '2', 39, 40, 1),
(14, '2', 100, 3, '3', 46, 48, 2),
(15, 'Select Vaccine Name', 30, 6, '6', 9, 9, 3),
(16, '1', 20, 5, '5', 9, 8, 3);

-- --------------------------------------------------------

--
-- Table structure for table `slot_booked`
--

CREATE TABLE `slot_booked` (
  `ID` int(11) NOT NULL,
  `User_ID` int(11) NOT NULL,
  `SubUser_ID` int(11) NOT NULL,
  `City_ID` int(11) NOT NULL,
  `State_ID` int(11) NOT NULL,
  `Area_ID` varchar(255) NOT NULL,
  `Centre_Name` varchar(255) NOT NULL,
  `Dose` varchar(255) NOT NULL,
  `Vaccine_Name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `slot_booked`
--

INSERT INTO `slot_booked` (`ID`, `User_ID`, `SubUser_ID`, `City_ID`, `State_ID`, `Area_ID`, `Centre_Name`, `Dose`, `Vaccine_Name`) VALUES
(10, 65, 37, 1, 1, '2', '2', 'dose1', '2'),
(11, 65, 37, 1, 1, '2', '2', 'dose1', '2'),
(12, 65, 37, 1, 1, '2', '2', 'dose1', '2'),
(13, 65, 37, 1, 1, '2', '2', 'dose1', '2'),
(14, 65, 37, 1, 1, '2', '2', 'dose1', '2'),
(15, 65, 37, 3, 2, '3', '3', 'dose1', '2'),
(16, 65, 38, 3, 2, '3', '3', 'dose2', '1'),
(17, 65, 39, 3, 2, '3', '3', 'dose2', '1'),
(18, 65, 39, 6, 3, '6', '6', 'dose2', '1'),
(19, 65, 39, 5, 3, '5', '5', 'dose2', '1'),
(20, 67, 40, 1, 1, '2', '2', 'dose1', '1'),
(21, 68, 41, 3, 2, '3', '3', 'dose1', '2'),
(24, 68, 43, 1, 1, '2', '2', 'dose2', '2'),
(25, 68, 44, 3, 2, '3', '3', 'dose1', '2'),
(26, 69, 45, 1, 1, '2', '2', 'dose1', '2'),
(28, 68, 46, 6, 3, '6', '6', 'dose1', '1'),
(29, 65, 47, 1, 1, '2', '2', 'dose1', '2'),
(30, 71, 48, 3, 2, '3', '3', 'dose1', '2'),
(31, 71, 49, 5, 3, '5', '5', 'dose2', '1');

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `State_ID` int(11) NOT NULL,
  `State_Name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`State_ID`, `State_Name`) VALUES
(1, 'gujarat'),
(2, 'maharsatra'),
(3, 'Rajastan');

-- --------------------------------------------------------

--
-- Table structure for table `sub_user`
--

CREATE TABLE `sub_user` (
  `User_ID` varchar(255) NOT NULL,
  `SubUser_ID` int(11) NOT NULL,
  `Status` char(255) NOT NULL,
  `Dose` varchar(255) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Gender` varchar(255) NOT NULL,
  `ID_Proof` varchar(255) NOT NULL,
  `Vaccine_Name` varchar(255) NOT NULL,
  `ID_Number` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sub_user`
--

INSERT INTO `sub_user` (`User_ID`, `SubUser_ID`, `Status`, `Dose`, `Name`, `Gender`, `ID_Proof`, `Vaccine_Name`, `ID_Number`, `date`) VALUES
('46', 27, 'Pending', 'dose2', 'parth wefer', 'female', '2', 'Select Vaccine Name', '12346789', '2009-07-16'),
('46', 28, 'Pending', 'dose1', 'smit lad', 'male', '1', '1', '12346789', '1993-01-15'),
('1', 29, 'Pending', 'dose1', 'rohanbhai', 'male', '1', '2', '12346789', '2003-03-31'),
('1', 30, 'Pending', 'dose2', 'kashyap', 'male', '1', '1', '12346789', '2017-09-23'),
('61', 34, 'Pending', 'dose1', 'anu', 'female', '1', '1', '2365478910', '2011-01-15'),
('65', 35, 'Pending', 'dose1', 'xyz', '', '2', '1', '12346789', '2015-09-23'),
('65', 36, 'Pending', 'dose1', 'ved', 'male', '1', '2', '8593486', '2008-09-05'),
('65', 37, 'Pending', 'dose1', 'smit', 'male', '1', '2', '12346789', '2006-07-23'),
('65', 38, 'Pending', 'dose2', 'parth ', 'male', '2', '1', '12346789', '2009-04-23'),
('65', 39, 'Pending', 'dose2', 'RAVI TIMBER', 'male', '1', '1', '2365478910', '2022-03-17'),
('67', 40, 'Pending', 'dose1', 'smit', 'male', '1', '1', '12346789', '2013-09-23'),
('68', 41, 'Pending', 'dose1', 'abc', 'male', '1', '2', '74389346', '2009-05-04'),
('1', 43, 'Pending', 'dose2', 'vajaybhai', '', '1', '2', '2134556789', '2008-09-03'),
('68', 44, 'Pending', 'dose1', 'vedu', 'male', '1', '2', '3728368956', '2003-08-23'),
('69', 45, 'Pending', 'dose1', 'ved', 'male', '1', '2', '12345689', '3008-08-23'),
('68', 46, 'Pending', 'dose1', 'ppv', 'male', '1', '1', '375585', '1998-03-18'),
('65', 47, 'Pending', 'dose1', 'Jignesh', 'male', '2', '2', '59078', '2003-01-05'),
('71', 48, 'Pending', 'dose1', 'ghonchu', 'female', '1', '2', '7987987989898', '1689-05-23'),
('71', 49, 'Pending', 'dose2', 'tyru', 'male', '2', '1', '654654646546', '2003-02-04');

-- --------------------------------------------------------

--
-- Table structure for table `support`
--

CREATE TABLE `support` (
  `ID` int(11) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Comment` varchar(258) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `state` int(11) NOT NULL,
  `city` int(11) NOT NULL,
  `role` int(11) NOT NULL COMMENT '1=>User,2=>Admin'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `state`, `city`, `role`) VALUES
(46, 'rahul', 'rahul@gmail.com', '123456', 1, 5, 1),
(47, 'rjp', 'rjp@gmail.com', '123456', 2, 3, 1),
(55, 'admin', 'admin@gmail.com', 'admin@!23', 0, 0, 2),
(56, 'admin', 'admin@gmail.com', 'admin@!23', 0, 0, 2),
(57, 'admin', 'admin@gmail.com', 'admin@123', 0, 0, 2),
(58, 'rohanbhai', 'rohan@gmail.com', '1234', 1, 1, 1),
(59, 'kj gign', 'vedpanchal23@gmail.com', '5678', 1, 1, 1),
(60, 'veduuuuu', 'vedpanchal23@gmail.com', '12345', 1, 1, 1),
(61, 'an', 'an@gmail.com', '123456', 1, 1, 1),
(62, 'devvvvvv', 'vedpanchal23@gmail.com', '123', 3, 6, 1),
(63, 'devvvvvv', 'vedpanchal23@gmail.com', '123', 3, 6, 1),
(64, 'ved', 'v@gmail.com', '123', 2, 3, 1),
(65, 'abc', 'abc@gmail.com', '123456', 1, 1, 1),
(66, 'nihar', 'nihar@gmail.com', '1234', 3, 5, 1),
(67, 'niharr', 'vedpanchal23@gmail.com', '3456', 2, 3, 1),
(68, 'xyz', 'xyz@gmail.com', '1234', 1, 1, 1),
(69, 'darshan', 'darshan@gmail.com', '12345', 1, 2, 1),
(70, 'Ved Panchal', 'cse.220843131008@gmail.com', '123456', 1, 1, 1),
(71, 'ghonchu', 'chomu@gmail.com', 'chomu123', 2, 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `vaccination_centre`
--

CREATE TABLE `vaccination_centre` (
  `ID` int(11) NOT NULL,
  `Centre_Name` varchar(255) NOT NULL,
  `Area_ID` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vaccination_centre`
--

INSERT INTO `vaccination_centre` (`ID`, `Centre_Name`, `Area_ID`) VALUES
(1, 'Urban Health Center', 2),
(2, 'ESIC Hospital', 1),
(3, 'Vidhar Bhai Hospital', 3),
(4, 'New Civil Hospital', 4),
(5, 'Urban Health Center Jaipur', 5),
(6, 'Gokul Hospital', 6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`City_ID`);

--
-- Indexes for table `slots`
--
ALTER TABLE `slots`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `slot_booked`
--
ALTER TABLE `slot_booked`
  ADD PRIMARY KEY (`ID`,`Dose`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`State_ID`);

--
-- Indexes for table `sub_user`
--
ALTER TABLE `sub_user`
  ADD PRIMARY KEY (`SubUser_ID`);

--
-- Indexes for table `support`
--
ALTER TABLE `support`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vaccination_centre`
--
ALTER TABLE `vaccination_centre`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Area_ID` (`Area_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `slots`
--
ALTER TABLE `slots`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `slot_booked`
--
ALTER TABLE `slot_booked`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `sub_user`
--
ALTER TABLE `sub_user`
  MODIFY `SubUser_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `vaccination_centre`
--
ALTER TABLE `vaccination_centre`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `vaccination_centre`
--
ALTER TABLE `vaccination_centre`
  ADD CONSTRAINT `vaccination_centre_ibfk_1` FOREIGN KEY (`Area_ID`) REFERENCES `city` (`City_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
