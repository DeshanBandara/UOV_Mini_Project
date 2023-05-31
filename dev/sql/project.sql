-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2023 at 01:30 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `agenda`
--

CREATE TABLE `agenda` (
  `id` int(11) NOT NULL,
  `time1` time NOT NULL,
  `event1` varchar(255) NOT NULL,
  `time2` time NOT NULL,
  `event2` varchar(255) NOT NULL,
  `time3` time NOT NULL,
  `event3` varchar(255) NOT NULL,
  `time4` time NOT NULL,
  `event4` varchar(255) NOT NULL,
  `time5` time NOT NULL,
  `event5` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `agenda`
--

INSERT INTO `agenda` (`id`, `time1`, `event1`, `time2`, `event2`, `time3`, `event3`, `time4`, `event4`, `time5`, `event5`) VALUES
(1, '00:00:00', 'fghjk', '11:36:00', 'hnvn', '22:36:00', 'jkllh', '23:10:00', 'ewesr', '01:22:23', 'asdzsz'),
(2, '00:00:00', 'fghjk', '11:36:00', 'hnvn', '22:36:00', 'jkllh', '23:10:00', 'ewesr', '01:22:23', 'asdzsz'),
(3, '00:00:00', 'eqrqtt', '11:36:00', 'mgnbmm', '13:00:00', 'saZ', '14:00:00', 'oipk', '15:00:00', 'kshio');

-- --------------------------------------------------------

--
-- Table structure for table `budget`
--

CREATE TABLE `budget` (
  `id` int(11) NOT NULL,
  `reaason1` varchar(255) NOT NULL,
  `value1` varchar(255) NOT NULL,
  `reaason2` varchar(255) NOT NULL,
  `value2` varchar(255) NOT NULL,
  `reaason3` varchar(255) NOT NULL,
  `value3` varchar(255) NOT NULL,
  `reaason4` varchar(255) NOT NULL,
  `value4` varchar(255) NOT NULL,
  `reaason5` varchar(255) NOT NULL,
  `value5` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `budget`
--

INSERT INTO `budget` (`id`, `reaason1`, `value1`, `reaason2`, `value2`, `reaason3`, `value3`, `reaason4`, `value4`, `reaason5`, `value5`) VALUES
(1, '', '1000.10', 'Vvgb', '500', 'zcv', '12.32', 'jkug,', '4252', 'awda', '   gdhh'),
(2, '', '1000.10', 'Vvgb', '500', 'zcv', '12.32', 'jkug,', '4252', 'awda', '4'),
(3, '', '50000', 'tent', '3000', 'colors', '80000', 'lights', '20000', 'DJ', '45000');

-- --------------------------------------------------------

--
-- Table structure for table `event_form`
--

CREATE TABLE `event_form` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `president` varchar(255) NOT NULL,
  `reg_no` varchar(255) NOT NULL,
  `batch` varchar(255) NOT NULL,
  `faculty` varchar(255) NOT NULL DEFAULT 'Faculty of Technological Studies',
  `contact_no` int(11) NOT NULL,
  `program_date` date NOT NULL,
  `venue` varchar(255) NOT NULL,
  `commencement_time` time NOT NULL,
  `expected_time` time NOT NULL,
  `participant_faculties` varchar(255) NOT NULL,
  `participant_departments` varchar(255) NOT NULL,
  `num_student` int(11) NOT NULL,
  `num_ac_stf` int(11) NOT NULL,
  `num_nonac_stf` int(11) NOT NULL,
  `commitee_president` varchar(255) NOT NULL,
  `commitee_vice_president` varchar(255) NOT NULL,
  `commitee_secretary` varchar(255) NOT NULL,
  `commitee_vice_secretary` varchar(255) NOT NULL,
  `commitee_senior_treasure` varchar(255) NOT NULL,
  `commitee_treasure` varchar(255) NOT NULL,
  `agre` varchar(100) NOT NULL,
  `status` int(11) DEFAULT 0,
  `message` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `event_form`
--

INSERT INTO `event_form` (`id`, `title`, `president`, `reg_no`, `batch`, `faculty`, `contact_no`, `program_date`, `venue`, `commencement_time`, `expected_time`, `participant_faculties`, `participant_departments`, `num_student`, `num_ac_stf`, `num_nonac_stf`, `commitee_president`, `commitee_vice_president`, `commitee_secretary`, `commitee_vice_secretary`, `commitee_senior_treasure`, `commitee_treasure`, `agre`, `status`, `message`) VALUES
(1, 'welcome function 2022', 'T.I.T.Piris', '2018ICTS44', '3rd Year', 'fot', 798353383, '2022-01-24', 'technology studies faculty premises', '00:00:05', '00:00:11', 'tec', 'ICT', 500, 50, 15, 'Piris', 'Thanushiyanthan', 'pani', 'kidila', 'HOD', 'vika', 'agreed', 1, 'Due to lack of information '),
(2, 'thanking', 'dimalsha', '2018ICTS44', '3rd Year', 'fas', 798353375, '2022-04-24', 'punewa navy base', '00:00:05', '00:00:11', 'applied', 'Bio', 630, 50, 15, 'Dimalsha', 'Lahiru', 'Pramodya', 'Lakmi', 'HOD', 'Lahiru', 'agreed', 1, NULL),
(4, 'Holly', 'Pavani', '2018ICTS44', '3rd Year', 'fot', 785246332, '2022-04-24', 'Faculty of Business Studies', '12:32:00', '18:00:00', 'All three faculties', 'All departments', 1500, 120, 50, 'shen', 'ashen', 'gamage', 'neran', 'FOT Dean', 'lahiru', 'agreed', 2, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `image_url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `login_form`
--

CREATE TABLE `login_form` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL DEFAULT 'user',
  `reg_no` varchar(80) DEFAULT NULL,
  `faculty` varchar(100) DEFAULT NULL,
  `mobile_no` varchar(15) DEFAULT NULL,
  `department` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login_form`
--

INSERT INTO `login_form` (`id`, `name`, `email`, `password`, `user_type`, `reg_no`, `faculty`, `mobile_no`, `department`) VALUES
(3, 'sunethra', 'sunethra@gmail.com', '1f5532f7f3d683092f484c6951ebaad4', 'user', NULL, NULL, NULL, NULL),
(4, 'user_01', 'user_01@xample.com', '7732269360447eb72e868a212b37b75a', 'user', NULL, NULL, NULL, NULL),
(5, 'dinusha', 'dinusha@xample.com', '59bd9459e7b3548fcb0708d3fd200c56', 'user', NULL, NULL, NULL, NULL),
(6, 'safkan', 'safkan@xample.com', '1f5532f7f3d683092f484c6951ebaad4', 'user', NULL, NULL, NULL, NULL),
(7, 'pavani', 'pavani@xample.com', '6661ac1e3356838f0a6fd6dcb2b84db0', 'user', NULL, NULL, NULL, NULL),
(8, 'user_02', 'user_02@xample.com', '7732269360447eb72e868a212b37b75a', 'user', NULL, NULL, NULL, NULL),
(9, 'Tharindu Wijayarathna', 'tharinduwijayarathne87@gmail.com', '9ff77724b6db316d27ac84cfb02e4a96', 'admin', NULL, NULL, NULL, NULL),
(10, 'Acosta', 'sendmyemailstoyou@gmail.com', '9ff77724b6db316d27ac84cfb02e4a96', 'user', NULL, NULL, NULL, NULL),
(11, 'Electronics', 'ex@gmail.com', '9ff77724b6db316d27ac84cfb02e4a96', 'user', NULL, NULL, NULL, NULL),
(12, 'Electronics', 'ks@gmai.com', '9ff77724b6db316d27ac84cfb02e4a96', 'user', NULL, NULL, NULL, NULL),
(14, 'kasun', 'kasun@gmail.com', '9ff77724b6db316d27ac84cfb02e4a96', 'user', '2018ICTS44', '123', '0765787896', 'sdasd'),
(15, 'admin', 'admin@example.com', '0192023a7bbd73250516f069df18b500', 'admin', NULL, NULL, NULL, NULL),
(16, 'mithu', 'mithu@gmail.com', '3325077dbb24f8677996cdab546fd307', 'user', '2018icts16', 'bs', '0159326598', 'pm');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_reservation`
--

CREATE TABLE `vehicle_reservation` (
  `id` int(11) NOT NULL,
  `applicant_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mo_num` int(11) NOT NULL,
  `faculty` varchar(255) NOT NULL DEFAULT 'Faculty of Technological Studies',
  `reg_num` varchar(255) NOT NULL,
  `purpose` varchar(255) NOT NULL,
  `vehicle_type` varchar(255) NOT NULL DEFAULT 'bus',
  `num_person` int(11) NOT NULL,
  `date` date NOT NULL,
  `traval_date` date NOT NULL,
  `l_from` varchar(255) NOT NULL,
  `l_to` varchar(255) NOT NULL,
  `other_places` varchar(255) NOT NULL,
  `dep_time` time NOT NULL,
  `ret_time` time NOT NULL,
  `status` int(11) DEFAULT 0,
  `message` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vehicle_reservation`
--

INSERT INTO `vehicle_reservation` (`id`, `applicant_name`, `email`, `mo_num`, `faculty`, `reg_num`, `purpose`, `vehicle_type`, `num_person`, `date`, `traval_date`, `l_from`, `l_to`, `other_places`, `dep_time`, `ret_time`, `status`, `message`) VALUES
(1, 'Deshan', 'deshan@xample.com', 768353386, 'fot', '2018ICTS96', 'For a rugby match', 'van', 15, '2023-04-20', '2023-05-21', 'vavuniya university', 'colombo university', 'moratuwa university', '00:00:03', '00:00:11', 2, '123'),
(2, 'Dinusha', 'dinusha@xample.com', 771234568, 'bs', '2018ICTS64', 'Funeral', 'bus', 75, '2023-04-20', '2023-05-21', 'vavuniya university', 'Kandy', 'Dambulla', '05:30:00', '23:30:00', 2, '123123'),
(9, 'Dinusha', 'dinusha@xample.com', 771234568, 'bs', '2018ICTS64', 'Funeral', 'bus', 75, '2023-04-20', '2023-05-21', 'vavuniya university', 'Kandy', 'Dambulla', '05:30:00', '23:30:00', 2, NULL),
(10, 'bandara', 'bandara@example.com', 768353386, 'fas', '2018ICTS42', 'go home', 'cab', 3, '2023-04-20', '2023-05-26', 'vavuniya university', 'home', 'town', '07:00:00', '22:00:00', 0, NULL),
(11, 'sudheera', 'saneef@example.com', 112365489, 'fot', '2018ICTS44', 'For a rugby match', 'three_wheeler', 100, '2023-04-20', '2023-05-26', 'vavuniya university', 'Kandy', 'moratuwa university', '05:30:00', '23:30:00', 0, NULL),
(12, 'liyeygfhlwkbsf', 'mithu@gmail.com', 112865256, 'fot', '2018ICTS28', 'For a rugby match', 'bus', 100, '2023-04-20', '2023-05-26', 'vavuniya university', 'Rameshwaram India', 'moratuwa university', '05:30:00', '22:00:00', 1, 'no mentioned any name');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agenda`
--
ALTER TABLE `agenda`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `budget`
--
ALTER TABLE `budget`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event_form`
--
ALTER TABLE `event_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_form`
--
ALTER TABLE `login_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vehicle_reservation`
--
ALTER TABLE `vehicle_reservation`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agenda`
--
ALTER TABLE `agenda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `budget`
--
ALTER TABLE `budget`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `event_form`
--
ALTER TABLE `event_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `login_form`
--
ALTER TABLE `login_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `vehicle_reservation`
--
ALTER TABLE `vehicle_reservation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
