-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: database
-- Generation Time: Jul 25, 2023 at 05:36 AM
-- Server version: 10.6.7-MariaDB-1:10.6.7+maria~focal-log
-- PHP Version: 8.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `needful_contacts`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `nId` int(11) NOT NULL,
  `sName` varchar(255) DEFAULT NULL,
  `sEmail` varchar(255) DEFAULT NULL,
  `sAuthorization` varchar(255) DEFAULT NULL,
  `sPassword` varchar(255) DEFAULT NULL,
  `nPhoneNumber` bigint(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`nId`, `sName`, `sEmail`, `sAuthorization`, `sPassword`, `nPhoneNumber`) VALUES
(1, 'admin', 'admin@gmail.com', 'Tapovan', 'admin', 7046379223),
(2, 'Dhara Prajapati', 'dhara@gmail.com', 'B.M. School', 'dhara@123', 7845129865),
(3, 'Jatin Wadhavani', 'jatin@gmail.com', 'St. Xavier\'s', 'jatin', 9865328754),
(4, 'Nensi Darji', 'ndnensidarji@gmail.com', 'Little Star', 'Admin', 7898456512),
(5, 'Parth Darji', 'parth@gamil.com', 'Little Star', 'parth', 7099982555),
(6, 'dhruvil Panchal', 'dhruvil@gmail.com', 'Shisumandir', 'dhruvil', 7845127845),
(7, 'Abhishek agrawal', 'abhi@gmail.com', 'Unnati Viddhyalay', 'abhi', 9865329865),
(8, 'kevin Tank', 'tank@gmail.com', 'saraswati school', 'tank', 9265428244),
(14, 'ROHAN CHAVDA', 'rc3legacy@gmail.com', 'RC', 'Radixweb8', 7990420282),
(13, 'nen', 'ndnensidarji@gmail.com', 'patan', 'Admin', 7046379245),
(15, 'aniket', 'adshindeaniket@gmail.com', 'dgdgfghdf', 'aniket2012', 8140763107);

-- --------------------------------------------------------

--
-- Table structure for table `business_details`
--

CREATE TABLE `business_details` (
  `nId` int(11) NOT NULL,
  `nServiceDetailId` int(11) DEFAULT NULL,
  `nProviderId` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `business_details`
--

INSERT INTO `business_details` (`nId`, `nServiceDetailId`, `nProviderId`) VALUES
(1, 1, 1),
(2, 2, 2),
(3, 6, 2),
(4, 7, 2),
(13, 5, 7),
(6, 5, 3),
(7, 5, 4),
(12, 10, 6),
(15, 19, 8),
(14, 2, 7),
(16, 6, 8);

-- --------------------------------------------------------

--
-- Table structure for table `service_details`
--

CREATE TABLE `service_details` (
  `nId` int(11) NOT NULL,
  `sServiceName` varchar(255) DEFAULT NULL,
  `sDescription` text DEFAULT NULL,
  `dCreatedDate` date DEFAULT NULL,
  `dModifiedDate` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service_details`
--

INSERT INTO `service_details` (`nId`, `sServiceName`, `sDescription`, `dCreatedDate`, `dModifiedDate`) VALUES
(1, 'Doctor', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '2022-06-07', '2022-06-13'),
(2, 'Plumber', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', '2022-06-07', '2022-06-07'),
(5, 'Interior Decorators', 'It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', '2022-06-07', '2022-06-07'),
(6, 'Electrical Repairs', ' Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. ', '2022-06-07', '2022-06-07'),
(7, 'Carpenter', 'It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2022-06-07', '2022-06-07'),
(8, 'Mechanic', 'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', '2022-06-07', '2022-06-07'),
(9, 'House Painter', ' It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry. ', '2022-06-07', '2022-06-07'),
(10, 'Restaurants', 'A good restaurant is like a vacation; it transports you, and it becomes a lot more than just about the food.', '2022-06-09', '2022-06-09'),
(19, 'AC Repairs', 'Performs repairs for the heating, ventilation, air-conditioning and refrigeration systems.', '2022-06-10', '2022-06-10');

-- --------------------------------------------------------

--
-- Table structure for table `service_provider`
--

CREATE TABLE `service_provider` (
  `nId` int(11) NOT NULL,
  `sName` varchar(255) DEFAULT NULL,
  `sEmail` varchar(255) DEFAULT NULL,
  `nPhoneNumber` bigint(20) DEFAULT NULL,
  `sAddress` text DEFAULT NULL,
  `sCity` varchar(255) DEFAULT NULL,
  `nPincode` int(11) DEFAULT NULL,
  `sSmPic` varchar(255) NOT NULL,
  `sLgPic` varchar(255) NOT NULL,
  `bStatus` enum('1','0') NOT NULL,
  `dCreatedDate` date DEFAULT NULL,
  `dModifiedDate` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service_provider`
--

INSERT INTO `service_provider` (`nId`, `sName`, `sEmail`, `nPhoneNumber`, `sAddress`, `sCity`, `nPincode`, `sSmPic`, `sLgPic`, `bStatus`, `dCreatedDate`, `dModifiedDate`) VALUES
(1, 'Medicus Multicare Clinic', 'clinic@gmail.com', 9558785505, 'FF-14, Vandematram Fabula, Chharodi', 'Ahmdebad', 382481, 'hotel1.jpeg', 'hotel5.jpeg', '1', '2022-06-07', '2022-06-22'),
(2, 'Aaryan House Services', 'aaryan@gmail.com', 9809894949, 'A-1001, Tulsi Status, opp. Samvaad Sonet, Tragad', 'Ahmdebad', 382470, 'hotel2.jpeg', 'hotel3.jpeg', '1', '2022-06-07', '2022-06-08'),
(3, 'Fortune Architects', 'fortune@gmail.com', 9173232909, 'Sayona Circle, B-412, S-One Complex, R.C. Technical Rd, Ghatlodiya', 'Ahmdebad', 380061, 'hotel5.jpeg', 'hotel7.jpeg', '1', '2022-06-07', '2022-06-08'),
(4, 'Galaxy Infra Interior Design Consultants Pvt Ltd', 'galaxy@gmail.com', 9824011921, ' 403, Fortune business hub, Science City Rd, beside shall petrol pump, Sola', 'Ahmdebad', 380061, 'hotel11.jpeg', 'hotel12.jpeg', '0', '2022-06-07', '2022-08-26'),
(6, 'Katori Kitchens', 'katori@gmail.com', 7621869716, 'GF-15 Malabar County - 2, behind Nirma University, chharodi', 'Ahmdebad', 382470, 'hotel6.jpeg', 'hotel10.jpeg', '1', '2022-06-09', '2022-06-09'),
(7, 'Design BIM Studio', 'bmi@gmail.com', 7948420043, '506, Palladium Business Hub Opp. 4d Square, Sabarmati, Gandhinagar Hwy, above Pantaloons Sabarmati, Motera', 'Ahmdebad', 380005, 'arch.jpg', 'hotel9.jpeg', '1', '2022-06-10', '2022-06-10'),
(8, 'Ac Manibhadra Enterprise one point all solution', 'ac@gmail.com', 7600582534, 'A 1 green park vibhag 2, Chandkheda', 'Ahmdebad', 382470, 'hotel12.jpeg', 'hotel11.jpeg', '1', '2022-06-10', '2022-08-26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`nId`);

--
-- Indexes for table `business_details`
--
ALTER TABLE `business_details`
  ADD PRIMARY KEY (`nId`);

--
-- Indexes for table `service_details`
--
ALTER TABLE `service_details`
  ADD PRIMARY KEY (`nId`);

--
-- Indexes for table `service_provider`
--
ALTER TABLE `service_provider`
  ADD PRIMARY KEY (`nId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `nId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `business_details`
--
ALTER TABLE `business_details`
  MODIFY `nId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `service_details`
--
ALTER TABLE `service_details`
  MODIFY `nId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `service_provider`
--
ALTER TABLE `service_provider`
  MODIFY `nId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
