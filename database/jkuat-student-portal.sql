-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 29, 2022 at 11:20 AM
-- Server version: 8.0.31-0ubuntu0.20.04.1
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jkuat-student-portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblCollege`
--

CREATE TABLE `tblCollege` (
  `id` int NOT NULL,
  `college_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tblCollege`
--

INSERT INTO `tblCollege` (`id`, `college_name`) VALUES
(3, 'COANRE'),
(4, 'COETEC'),
(1, 'COHES'),
(5, 'COHRED'),
(2, 'COPAS');

-- --------------------------------------------------------

--
-- Table structure for table `tblCourseList`
--

CREATE TABLE `tblCourseList` (
  `id` int NOT NULL,
  `course_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `dept_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tblCourseList`
--

INSERT INTO `tblCourseList` (`id`, `course_name`, `description`, `dept_name`) VALUES
(3, 'Bsc. Computer Science', 'The course emphasizes the architecture of both the hardware and software, converting a typical Computer from a box of electronics into a sophisticated information processing tool. It focuses on the ways in which computer hardware and software are constructed, and provide an insight into the purpose of each of the major computing systems.', 'Computing'),
(4, 'Bsc. Computer Technology', 'Computer information technology (CIT) is the use and study of computers, networks, computer languages, and databases within an organization to solve real problems. The major prepares students for applications programming, networking, systems administration, and internet development.', 'Computing');

-- --------------------------------------------------------

--
-- Table structure for table `tblDepartments`
--

CREATE TABLE `tblDepartments` (
  `id` int NOT NULL,
  `dept_name` varchar(255) DEFAULT NULL,
  `school_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tblDepartments`
--

INSERT INTO `tblDepartments` (`id`, `dept_name`, `school_name`) VALUES
(1, 'Computing', 'School of Computing and Information Technology'),
(2, 'IT', 'School of Computing and Information Technology');

-- --------------------------------------------------------

--
-- Table structure for table `tblMarks`
--

CREATE TABLE `tblMarks` (
  `id` int NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `unit_code` varchar(255) DEFAULT NULL,
  `student_reg_no` varchar(255) DEFAULT NULL,
  `semester` int DEFAULT NULL,
  `year` int DEFAULT NULL,
  `date` date DEFAULT NULL,
  `marks` int DEFAULT NULL,
  `department` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tblSchool`
--

CREATE TABLE `tblSchool` (
  `id` int NOT NULL,
  `school_name` varchar(255) DEFAULT NULL,
  `college_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tblSchool`
--

INSERT INTO `tblSchool` (`id`, `school_name`, `college_name`) VALUES
(2, 'School of Computing and Information Technology', 'COPAS'),
(3, 'School of Mathematical Sciences', 'COPAS'),
(1, 'School of Physical Sciences', 'COPAS');

-- --------------------------------------------------------

--
-- Table structure for table `tblSessionReporting`
--

CREATE TABLE `tblSessionReporting` (
  `id` int NOT NULL,
  `reg_no` varchar(255) NOT NULL,
  `course_name` varchar(255) NOT NULL,
  `report_status` tinyint(1) NOT NULL,
  `session` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tblSessions`
--

CREATE TABLE `tblSessions` (
  `id` int NOT NULL,
  `session` varchar(255) NOT NULL,
  `date_from` date NOT NULL,
  `date_to` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tblSessions`
--

INSERT INTO `tblSessions` (`id`, `session`, `date_from`, `date_to`) VALUES
(1, '2022/2023', '2022-11-01', '2023-04-28');

-- --------------------------------------------------------

--
-- Table structure for table `tblTimetable`
--

CREATE TABLE `tblTimetable` (
  `id` int NOT NULL,
  `day` varchar(255) NOT NULL,
  `time_start` time NOT NULL,
  `time_end` time NOT NULL,
  `lecturer` varchar(255) NOT NULL,
  `unit_code` varchar(255) NOT NULL,
  `unit_name` varchar(255) NOT NULL,
  `course_name` varchar(255) NOT NULL,
  `year` int NOT NULL,
  `semester` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tblTimetable`
--

INSERT INTO `tblTimetable` (`id`, `day`, `time_start`, `time_end`, `lecturer`, `unit_code`, `unit_name`, `course_name`, `year`, `semester`) VALUES
(1, 'Monday', '08:00:40', '10:00:40', 'Mr Sam Witwicky', '', '', '', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblUnits`
--

CREATE TABLE `tblUnits` (
  `id` int NOT NULL,
  `unit_code` varchar(255) DEFAULT NULL,
  `unit_name` varchar(255) DEFAULT NULL,
  `unit_description` varchar(255) DEFAULT NULL,
  `course_name` varchar(255) DEFAULT NULL,
  `year` int DEFAULT NULL,
  `semester` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tblUnits`
--

INSERT INTO `tblUnits` (`id`, `unit_code`, `unit_name`, `unit_description`, `course_name`, `year`, `semester`) VALUES
(1, 'BIT 2102', 'Computer Hardware and Organization', NULL, 'Bsc. Computer Technology', 1, 1),
(2, 'BIT 2205 ', 'Networking Essentials', NULL, 'Bsc. Computer Technology', 1, 1),
(3, 'BCT 2101 ', 'Introduction to Computers and Operating Systems', NULL, 'Bsc. Computer Technology', 1, 1),
(4, 'BCT 2102', 'Software Applications-I', NULL, 'Bsc. Computer Technology', 1, 1),
(5, 'BCT 2103', 'Software Applications-II', NULL, 'Bsc. Computer Technology', 1, 1),
(6, 'BCT 2104 ', 'Principles of Programming Languages', NULL, 'Bsc. Computer Technology', 1, 1),
(7, 'BCT 2105 ', 'Accounting Software', NULL, 'Bsc. Computer Technology', 1, 1),
(8, 'BCT 2106 ', 'Internet', NULL, 'Bsc. Computer Technology', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblUsers`
--

CREATE TABLE `tblUsers` (
  `id` int NOT NULL,
  `username` varchar(255) NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `reg_no` varchar(255) DEFAULT NULL,
  `course_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `academic_year` int DEFAULT NULL,
  `semester` int DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tblUsers`
--

INSERT INTO `tblUsers` (`id`, `username`, `first_name`, `last_name`, `password`, `reg_no`, `course_name`, `academic_year`, `semester`, `created_at`) VALUES
(1, 'admin', 'John', 'Smith', 'mugambi', 'sct212-0000/2018', 'Bsc. Computer Technology', 1, 1, '2022-11-28 18:40:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblCollege`
--
ALTER TABLE `tblCollege`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `college_name` (`college_name`);

--
-- Indexes for table `tblCourseList`
--
ALTER TABLE `tblCourseList`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `course_name` (`course_name`),
  ADD UNIQUE KEY `course_name_2` (`course_name`),
  ADD KEY `dept_name` (`dept_name`);

--
-- Indexes for table `tblDepartments`
--
ALTER TABLE `tblDepartments`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `dept_name` (`dept_name`,`school_name`),
  ADD KEY `school_name` (`school_name`);

--
-- Indexes for table `tblMarks`
--
ALTER TABLE `tblMarks`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unit_code` (`unit_code`,`student_reg_no`);

--
-- Indexes for table `tblSchool`
--
ALTER TABLE `tblSchool`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `school_name` (`school_name`,`college_name`),
  ADD KEY `college_name` (`college_name`);

--
-- Indexes for table `tblSessionReporting`
--
ALTER TABLE `tblSessionReporting`
  ADD PRIMARY KEY (`id`),
  ADD KEY `session` (`session`);

--
-- Indexes for table `tblSessions`
--
ALTER TABLE `tblSessions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `session` (`session`);

--
-- Indexes for table `tblTimetable`
--
ALTER TABLE `tblTimetable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblUnits`
--
ALTER TABLE `tblUnits`
  ADD PRIMARY KEY (`id`),
  ADD KEY `course_name` (`course_name`);

--
-- Indexes for table `tblUsers`
--
ALTER TABLE `tblUsers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`,`reg_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblCollege`
--
ALTER TABLE `tblCollege`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tblCourseList`
--
ALTER TABLE `tblCourseList`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tblDepartments`
--
ALTER TABLE `tblDepartments`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tblMarks`
--
ALTER TABLE `tblMarks`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblSchool`
--
ALTER TABLE `tblSchool`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tblSessionReporting`
--
ALTER TABLE `tblSessionReporting`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblSessions`
--
ALTER TABLE `tblSessions`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblTimetable`
--
ALTER TABLE `tblTimetable`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblUnits`
--
ALTER TABLE `tblUnits`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tblUsers`
--
ALTER TABLE `tblUsers`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tblCourseList`
--
ALTER TABLE `tblCourseList`
  ADD CONSTRAINT `tblCourseList_ibfk_1` FOREIGN KEY (`dept_name`) REFERENCES `tblDepartments` (`dept_name`) ON UPDATE CASCADE;

--
-- Constraints for table `tblDepartments`
--
ALTER TABLE `tblDepartments`
  ADD CONSTRAINT `tblDepartments_ibfk_1` FOREIGN KEY (`school_name`) REFERENCES `tblSchool` (`school_name`) ON UPDATE CASCADE;

--
-- Constraints for table `tblSchool`
--
ALTER TABLE `tblSchool`
  ADD CONSTRAINT `tblSchool_ibfk_1` FOREIGN KEY (`college_name`) REFERENCES `tblCollege` (`college_name`) ON UPDATE CASCADE;

--
-- Constraints for table `tblSessionReporting`
--
ALTER TABLE `tblSessionReporting`
  ADD CONSTRAINT `tblSessionReporting_ibfk_1` FOREIGN KEY (`session`) REFERENCES `tblSessions` (`session`) ON UPDATE CASCADE;

--
-- Constraints for table `tblUnits`
--
ALTER TABLE `tblUnits`
  ADD CONSTRAINT `tblUnits_ibfk_1` FOREIGN KEY (`course_name`) REFERENCES `tblCourseList` (`course_name`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
