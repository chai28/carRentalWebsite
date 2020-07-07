-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Sep 21, 2019 at 10:54 PM
-- Server version: 5.7.25
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `rentacardb`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `BookingID` int(11) NOT NULL,
  `BookingDate` datetime NOT NULL,
  `End_date` datetime NOT NULL,
  `UserID` int(11) NOT NULL,
  `Details` varchar(255) NOT NULL,
  `CarID` int(11) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`BookingID`, `BookingDate`, `End_date`, `UserID`, `Details`, `CarID`, `status`) VALUES
(1, '2019-09-11 06:00:00', '2019-09-16 07:00:00', 130, '', 1, 1),
(9, '2019-09-19 00:00:00', '2019-09-23 04:00:00', 136, 'adsda', 7, 2),
(12, '2019-09-29 02:30:00', '2019-09-29 02:30:00', 130, 'please aaaaaaaa', 21, 0),
(13, '2019-09-29 01:00:00', '2019-09-30 01:30:00', 130, 'hahahahaha', 3, 0),
(14, '2019-09-29 02:30:00', '2019-09-30 00:30:00', 130, '', 5, 2);

-- --------------------------------------------------------

--
-- Table structure for table `car`
--

CREATE TABLE `car` (
  `CarID` int(11) NOT NULL,
  `CategoryID` varchar(15) NOT NULL,
  `CarModal` varchar(30) NOT NULL,
  `CarBrand` varchar(20) NOT NULL,
  `Detail` varchar(255) NOT NULL,
  `CarImg` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `car`
--

INSERT INTO `car` (`CarID`, `CategoryID`, `CarModal`, `CarBrand`, `Detail`, `CarImg`) VALUES
(1, '1', '911', 'Acura', 'Great car!', 'R8audiUk.png'),
(3, '2', '7HXSD', 'Aston Martin', '', 'rollsroyce_wraith.jpg'),
(4, '2', 'DERE56', 'Audi', '', 'MercedesBenz.jpg'),
(5, '3', '23E', 'Audi', '', 'lamborghini-aventador.jpg'),
(7, '1', '4REFR', 'Acura', '', 'Bmwi8.jpg'),
(19, '1', '34ER', 'TOYOTA', '', 'bentley.jpg'),
(20, '3', 'WE45', 'TOYOTA', '', 'ferrari-gtc.jpg'),
(21, '1', 'RT56', 'BMW', '', 'jeep.jpg'),
(22, '2', '100', 'BMW', '', 'racer-wot-hummer-h2-suv-black.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `CategoryID` varchar(15) NOT NULL,
  `CategoryNmae` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`CategoryID`, `CategoryNmae`) VALUES
('1', 'Standard'),
('2', 'Premium'),
('3', 'Special'),
('4', ' Sedan'),
('5', ' Crossover');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `Feedback_id` int(11) NOT NULL,
  `UserID` int(11) NOT NULL,
  `Message` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `Request_id` int(11) NOT NULL,
  `BookingDate` datetime NOT NULL,
  `End_date` datetime NOT NULL,
  `UserID` int(11) NOT NULL,
  `Details` varchar(225) NOT NULL,
  `CarID` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`Request_id`, `BookingDate`, `End_date`, `UserID`, `Details`, `CarID`, `status`) VALUES
(1, '2019-09-25 21:00:00', '2019-10-14 16:30:00', 3, 'include baby seat?', 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `User_ID` int(11) NOT NULL,
  `UserType` int(2) DEFAULT NULL,
  `FName` varchar(20) DEFAULT NULL,
  `LName` varchar(30) DEFAULT NULL,
  `Email` varchar(40) DEFAULT NULL,
  `Password` char(55) DEFAULT NULL,
  `ContactNum` bigint(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`User_ID`, `UserType`, `FName`, `LName`, `Email`, `Password`, `ContactNum`) VALUES
(3, 0, 'W', 'Gugu', '5646@haha.com', 'password', 1234567878),
(7, 1, 'Kevinnnnnn', 'Zhang', '2462053692@qq.com', 'password', 272394628),
(130, 0, 'Erika', 'Yaegaki', 'jackmsharphard@gmail.com', 'password', 2723946288),
(136, 1, 'Sherlock', 'Holmes', 'asdasdada@qw.com', 'password', 222222222),
(139, 0, 'yaegaki', 'chidori', '2462@qq.com', 'password', 272394628),
(143, 1, 'Erika', 'Yaegaki', 'qwfes@asa.com', 'password', 2723946288),
(145, 2, 'lol', 'lolo', '123456@qq.com', 'password', 2723946288);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`BookingID`),
  ADD KEY `fk_CarID` (`CarID`),
  ADD KEY `fk_UserID` (`UserID`);

--
-- Indexes for table `car`
--
ALTER TABLE `car`
  ADD PRIMARY KEY (`CarID`),
  ADD KEY `fk_category` (`CategoryID`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`CategoryID`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`Feedback_id`),
  ADD KEY `fk_feedback_userid` (`UserID`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`Request_id`),
  ADD KEY `fk_request_userid` (`UserID`),
  ADD KEY `fk_request_carid` (`CarID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`User_ID`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `BookingID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `car`
--
ALTER TABLE `car`
  MODIFY `CarID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `Feedback_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `Request_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `User_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=146;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `fk_CarID` FOREIGN KEY (`CarID`) REFERENCES `car` (`CarID`),
  ADD CONSTRAINT `fk_UserID` FOREIGN KEY (`UserID`) REFERENCES `user` (`User_ID`);

--
-- Constraints for table `car`
--
ALTER TABLE `car`
  ADD CONSTRAINT `fk_category` FOREIGN KEY (`CategoryID`) REFERENCES `category` (`CategoryID`);

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `fk_feedback_userid` FOREIGN KEY (`UserID`) REFERENCES `user` (`User_ID`);

--
-- Constraints for table `request`
--
ALTER TABLE `request`
  ADD CONSTRAINT `fk_request_carid` FOREIGN KEY (`CarID`) REFERENCES `car` (`CarID`),
  ADD CONSTRAINT `fk_request_userid` FOREIGN KEY (`UserID`) REFERENCES `user` (`User_ID`);
