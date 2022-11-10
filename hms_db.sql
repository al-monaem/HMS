-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2022 at 08:30 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` varchar(10) NOT NULL,
  `uname` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `firstname` varchar(10) NOT NULL,
  `middlename` varchar(10) DEFAULT '',
  `lastname` varchar(10) NOT NULL,
  `address` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `nid` varchar(20) NOT NULL,
  `age` varchar(5) NOT NULL,
  `registeredBy` varchar(20) NOT NULL,
  `designation` varchar(20) NOT NULL DEFAULT 'Admin',
  `image` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `uname`, `password`, `firstname`, `middlename`, `lastname`, `address`, `email`, `gender`, `contact`, `nid`, `age`, `registeredBy`, `designation`, `image`) VALUES
('A-1', 'Bishop', '123', 'Shanto', '', 'Khan', '533/4, Kafrul, Dhaka', 'abysswalkr01@gmail.com', 'male', '01875609450', '1234567891234', '21', 'A-1', 'Admin', NULL),
('A-2', 'Shanto', '123', 'Shanto', '', 'Khan', '533/4, Bou Bazar, North Ibrahimpur, Kafrul', '20-42650-1@student.aiub.edu', 'Male', '1234567890', '2805496383', '21', 'A-1', 'Admin', ''),
('A-3', 'Tamanna', '123', 'Tamanna', '', 'Hossain', '533/4, Bou Bazar, North Ibrahimpur, Kafrul', 'asd@sd.com', 'Female', '1234567890', '2805496383', '21', 'A-1', 'Admin', ''),
('A-4', 'asd', '123', 'Md', 'Raufur', 'Rahim', 'saderqe', 'raufurrahim2000@gmail.com', 'Male', '4814165', '23423', '12', 'A-1', 'Admin', '');

-- --------------------------------------------------------

--
-- Table structure for table `appointmentdetails`
--

CREATE TABLE `appointmentdetails` (
  `apid` varchar(50) NOT NULL,
  `pid` varchar(50) NOT NULL,
  `id` int(11) NOT NULL,
  `date` varchar(50) NOT NULL,
  `symp` varchar(100) NOT NULL,
  `remarks` varchar(100) NOT NULL,
  `visitstatus` varchar(50) NOT NULL DEFAULT 'no',
  `did` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointmentdetails`
--

INSERT INTO `appointmentdetails` (`apid`, `pid`, `id`, `date`, `symp`, `remarks`, `visitstatus`, `did`) VALUES
('AP-1', 'P-2', 1, '12-03-2022', 'Low BP,High Fever', 'Asthma ', 'yes', ''),
('AP-2', 'P-3', 2, '10-03-2022', 'High Pressure', 'A', 'yes', 'D-1'),
('AP-10', 'P-4', 3, '12-10-2022', 'Leg Injury', 'Left leg broken', 'no', ''),
('AP-7', 'P-5', 4, '10-10-2022', 'Leg Injury', 'Left leg broken', 'no', '');

-- --------------------------------------------------------

--
-- Table structure for table `archive`
--

CREATE TABLE `archive` (
  `id` int(11) NOT NULL,
  `userid` varchar(10) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `archivedBy` varchar(10) NOT NULL,
  `time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `archive`
--

INSERT INTO `archive` (`id`, `userid`, `uname`, `email`, `address`, `archivedBy`, `time`) VALUES
(1, 'D-1', '', 'abysswalkr01@gmail.com', '533/4, Kafrul, Dhaka', 'A-1', '2022-04-20 16:56:52'),
(2, 'D-2', 'asd', 'abysswalkr01@gmail.com', '533/4, Kafrul, Dhaka', 'A-1', '2022-04-20 23:15:18'),
(3, 'D-3', 'asd', 'abysswalkr01@gmail.com', '533/4, Kafrul, Dhaka', 'A-1', '2022-04-21 11:14:09'),
(4, 'N-3', 'AUTHO', 'aurtho123@gmail.com', '12/SA-1', 'A-1', '2022-04-21 11:16:43'),
(5, 'N-6', 'shanto', 'abujhbalok379@gmail.com', '481/4/A-165', 'A-1', '2022-04-21 12:16:37');

-- --------------------------------------------------------

--
-- Table structure for table `availableinfo`
--

CREATE TABLE `availableinfo` (
  `id` int(100) NOT NULL,
  `did` varchar(50) NOT NULL,
  `availdate` varchar(50) NOT NULL,
  `availTime` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `availableinfo`
--

INSERT INTO `availableinfo` (`id`, `did`, `availdate`, `availTime`) VALUES
(1, 'D-1', '21-04-2022', '12AM-8AM'),
(0, 'D-1', '25-04-2022', '12AM-8AM');

-- --------------------------------------------------------

--
-- Table structure for table `billing`
--

CREATE TABLE `billing` (
  `bid` int(10) NOT NULL,
  `amount` int(100) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'unpaid',
  `apid` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `billing`
--

INSERT INTO `billing` (`bid`, `amount`, `status`, `apid`) VALUES
(1, 1500, 'unpaid', 'AP-2');

-- --------------------------------------------------------

--
-- Table structure for table `blood`
--

CREATE TABLE `blood` (
  `bid` varchar(50) NOT NULL,
  `dName` varchar(50) NOT NULL,
  `bGroup` varchar(50) NOT NULL,
  `dcontact` varchar(50) NOT NULL,
  `daddress` varchar(50) NOT NULL,
  `demail` varchar(50) NOT NULL,
  `dgender` varchar(50) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blood`
--

INSERT INTO `blood` (`bid`, `dName`, `bGroup`, `dcontact`, `daddress`, `demail`, `dgender`, `id`) VALUES
('B-1', 'Komol', 'AB(+ve)', '012312321312', 'house 100100', 'asdada1dsad34@gmail.com', 'male', 19),
('B-2', 'Komola', 'AB(+ve)', '012312321312', 'house 100100', 'asdada1dsad34@gmail.com', 'female', 21),
('B-3', 'Shanto', 'AB(-ve)', '01717880815', 'House-12', 'shanto2@gmail.com', 'male', 22);

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` varchar(50) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` varchar(11) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `salary` int(50) NOT NULL DEFAULT 100000,
  `designation` varchar(50) NOT NULL DEFAULT 'doctor',
  `address` varchar(50) NOT NULL,
  `nid` varchar(20) NOT NULL,
  `specialization` varchar(50) NOT NULL,
  `image` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `uname`, `email`, `contact`, `gender`, `password`, `salary`, `designation`, `address`, `nid`, `specialization`, `image`) VALUES
('D-1', 'asd', 'raufurrahim2000@gmail.com', '4814165', 'male', '123', 0, 'doctor', 'saderqe', '', 'Neuro Surgeon', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `health`
--

CREATE TABLE `health` (
  `patId` varchar(50) NOT NULL,
  `patName` varchar(50) NOT NULL,
  `patGender` varchar(50) NOT NULL,
  `bloodPressure` varchar(50) NOT NULL,
  `heartBeat` varchar(50) NOT NULL,
  `pulse` varchar(50) NOT NULL,
  `diabetes` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `health`
--

INSERT INTO `health` (`patId`, `patName`, `patGender`, `bloodPressure`, `heartBeat`, `pulse`, `diabetes`) VALUES
('P-8', 'Nikki', 'male', '80/120', '70/110', '80', '6.6/8'),
('P-22', 'Kamal', 'male', '70/120', '65', '80', '6.6/8');

-- --------------------------------------------------------

--
-- Table structure for table `labtest`
--

CREATE TABLE `labtest` (
  `id` int(50) NOT NULL,
  `did` varchar(50) NOT NULL,
  `Testname` varchar(5050) NOT NULL,
  `pid` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `labtest`
--

INSERT INTO `labtest` (`id`, `did`, `Testname`, `pid`) VALUES
(1, 'D-1', 'BLOOD ANALYSIS,PROTEIN-BOUND IODINE TEST,TOXICOLOGY TEST', 'P-11'),
(2, 'D-1', 'BLOOD ANALYSIS,GASTRIC FLUID ANALYSIS', 'P-1');

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `id` varchar(10) NOT NULL,
  `time` datetime NOT NULL DEFAULT current_timestamp(),
  `uname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`id`, `time`, `uname`, `email`) VALUES
('D-1', '2022-04-15 21:42:41', '', ''),
('D-1', '2022-04-15 22:02:54', '', ''),
('N-1', '2022-04-16 15:50:17', '', ''),
('N-1', '2022-04-16 15:58:09', '', ''),
('N-1', '2022-04-20 13:53:14', '', ''),
('D-3', '2022-04-20 23:18:31', '', ''),
('N-1', '2022-04-20 23:19:20', '', ''),
('D-3', '2022-04-20 23:22:17', 'asd', 'abysswalkr01@gmail.com'),
('D-1', '2022-04-21 11:22:22', 'asd', 'raufurrahim2000@gmail.com'),
('D-1', '2022-04-21 11:24:21', 'asd', 'raufurrahim2000@gmail.com'),
('N-1', '2022-04-21 11:39:17', '', ''),
('N-1', '2022-04-21 11:47:11', '', ''),
('N-1', '2022-04-21 12:00:33', '', ''),
('N-1', '2022-04-21 12:11:33', '', ''),
('D-1', '2022-04-21 12:18:32', 'asd', 'raufurrahim2000@gmail.com'),
('N-1', '2022-04-21 12:19:22', '', ''),
('N-1', '2022-04-21 12:20:34', '', ''),
('N-1', '2022-04-21 12:21:37', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `nurses`
--

CREATE TABLE `nurses` (
  `id` varchar(50) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` varchar(11) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `salary` int(50) NOT NULL,
  `designation` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `nid` int(20) NOT NULL,
  `image` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `nurses`
--

INSERT INTO `nurses` (`id`, `uname`, `email`, `contact`, `gender`, `password`, `salary`, `designation`, `address`, `nid`, `image`) VALUES
('N-1', 'AUTHO', 'aurtho123@gmail.com', '01717828282', 'female', '123', 6000, 'nurse', '12/SA-1', 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ot`
--

CREATE TABLE `ot` (
  `id` int(11) NOT NULL,
  `pid` varchar(20) NOT NULL,
  `otid` varchar(20) NOT NULL,
  `equipments` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ot`
--

INSERT INTO `ot` (`id`, `pid`, `otid`, `equipments`) VALUES
(1, 'pid', 'a', 'Anesthesia Machine |Anesthesia Cart'),
(2, 'P-1', 'OT-1', 'Anesthesia Machine |Anesthesia Cart |Anesthesia Circuits'),
(3, 's', 'a', 'Anesthesia Machine'),
(11, 's', 's', 'Anesthesia Machine,Anesthesia Cart'),
(12, 'P-11', 'OT-2', 'Anesthesia Machine,Anesthesia Cart,Vital Signs Monitor,Linen Hamper'),
(13, 'SSS', 'EDR', 'Anesthesia Machine,Anesthesia Cart,Anesthesia Circuits'),
(17, 'P-1', 'OT-5', 'Anesthesia Machine,Anesthesia Cart');

-- --------------------------------------------------------

--
-- Table structure for table `patientallocation`
--

CREATE TABLE `patientallocation` (
  `pid` varchar(50) NOT NULL,
  `pName` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `floorNo` varchar(50) NOT NULL,
  `wardNo` varchar(50) NOT NULL,
  `bedNo` varchar(50) NOT NULL,
  `cabinNo` varchar(50) NOT NULL,
  `allDateTime` varchar(50) NOT NULL,
  `id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patientallocation`
--

INSERT INTO `patientallocation` (`pid`, `pName`, `type`, `floorNo`, `wardNo`, `bedNo`, `cabinNo`, `allDateTime`, `id`) VALUES
('p-4', 'asd', 'ward', '5', '12', '4', '', '10-10-10', 3),
('P-7', 'Asd', 'Ward', '05', '12', '07', '', '2022-04-19T17:33', 18),
('P-2', 'Karim', 'Cabbin', '02', '', '', '07', '2022-04-12T14:57', 19),
('P-1', 'Hasan', 'Ward', '8', '4', '15', '', '2022-04-05T12:05', 20);

-- --------------------------------------------------------

--
-- Table structure for table `patienthistory`
--

CREATE TABLE `patienthistory` (
  `pid` varchar(10) NOT NULL,
  `covidinfo` varchar(3) NOT NULL,
  `covidvac` varchar(3) NOT NULL,
  `prevsickness` varchar(50) DEFAULT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patienthistory`
--

INSERT INTO `patienthistory` (`pid`, `covidinfo`, `covidvac`, `prevsickness`, `id`) VALUES
('P-1', 'Yes', 'No', 'Typhoid,Covid,Brucellosis', 1),
('P-2', 'Yes', 'No', 'Cholera', 2),
('P-3', 'Yes', 'No', 'Dengue', 3),
('P-4', 'Yes', 'No', 'Fever', 4),
('P-5', 'Yes', 'No', 'Dengue', 5);

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `id` varchar(50) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` varchar(11) NOT NULL,
  `contact2` varchar(11) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `occupation` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`id`, `uname`, `email`, `contact`, `contact2`, `gender`, `password`, `occupation`, `address`) VALUES
('P-1', 'Hasan', 'HAS@M.COM', '18788985985', '18788915985', 'male', '123', 'STUDENT', 'STREET-10'),
('P-10', 'Harun', 'hasan23@gmail.com', '01232131232', '01909876543', 'male', '111', 'student', 'house 12222'),
('P-2', 'Hasib', 'HAS@M.COM', '18788985985', '18788915985', 'male', '123', 'STUDENT', 'STREET-10'),
('P-3', 'Shorif', 'HAS@M.COM', '18788985985', '18788915985', 'male', '123', 'STUDENT', 'STREET-10'),
('P-8', 'Niiki', 'nikku2@gmail.com', '01789434523', '01909876543', 'female', '456', 'student', 'house 2. road 11'),
('P-9', 'Jhon12', 'moon323@gmail.com', '0123213123', '01978456123', 'female', '456', 'bleh', 'house 12');

-- --------------------------------------------------------

--
-- Table structure for table `prescriptiondetails`
--

CREATE TABLE `prescriptiondetails` (
  `id` int(11) NOT NULL,
  `apid` varchar(11) NOT NULL,
  `meds` varchar(11) NOT NULL,
  `dosage` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prescriptiondetails`
--

INSERT INTO `prescriptiondetails` (`id`, `apid`, `meds`, `dosage`) VALUES
(97, 'AP-2', 'NAPA,ACE', '1+0+1,1+0+1'),
(99, 'AP-5', 'NAPA', '1+0+0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointmentdetails`
--
ALTER TABLE `appointmentdetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `archive`
--
ALTER TABLE `archive`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `billing`
--
ALTER TABLE `billing`
  ADD PRIMARY KEY (`bid`);

--
-- Indexes for table `blood`
--
ALTER TABLE `blood`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `labtest`
--
ALTER TABLE `labtest`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nurses`
--
ALTER TABLE `nurses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ot`
--
ALTER TABLE `ot`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patientallocation`
--
ALTER TABLE `patientallocation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patienthistory`
--
ALTER TABLE `patienthistory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prescriptiondetails`
--
ALTER TABLE `prescriptiondetails`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointmentdetails`
--
ALTER TABLE `appointmentdetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `archive`
--
ALTER TABLE `archive`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `billing`
--
ALTER TABLE `billing`
  MODIFY `bid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blood`
--
ALTER TABLE `blood`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `labtest`
--
ALTER TABLE `labtest`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ot`
--
ALTER TABLE `ot`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `patientallocation`
--
ALTER TABLE `patientallocation`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `prescriptiondetails`
--
ALTER TABLE `prescriptiondetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
