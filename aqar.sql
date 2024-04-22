-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2024 at 01:49 AM
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
-- Database: `aqar`
--

-- --------------------------------------------------------

--
-- Table structure for table `studentform`
--

CREATE TABLE `studentform` (
  `id` int(100) NOT NULL,
  `studentName` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `category` varchar(50) NOT NULL,
  `stateDomicile` varchar(100) NOT NULL,
  `nationality` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `enrolmentID` int(10) NOT NULL,
  `mobileNumber` int(15) NOT NULL,
  `joiningYear` int(10) NOT NULL,
  `programmeCode` varchar(100) NOT NULL,
  `programmeName` varchar(100) NOT NULL,
  `yearOfIntroduction` int(10) NOT NULL,
  `implementationStatus` varchar(100) NOT NULL,
  `yearOfRevision` int(10) NOT NULL,
  `percentageContentChange` int(10) NOT NULL,
  `courseName` int(50) NOT NULL,
  `courseCode` varchar(10) NOT NULL,
  `courseContent` int(10) NOT NULL,
  `studentProjects` varchar(100) NOT NULL,
  `internshipName` varchar(255) NOT NULL,
  `internshipPlace` varchar(255) NOT NULL,
  `documentLink` varchar(100) NOT NULL,
  `addedCourse` varchar(10) NOT NULL,
  `yearOffer` int(10) NOT NULL,
  `timesOffered` varchar(10) NOT NULL,
  `durationCourse` int(10) NOT NULL,
  `studentEnrolled` int(10) NOT NULL,
  `completingCourse` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `studentform`
--

INSERT INTO `studentform` (`id`, `studentName`, `gender`, `category`, `stateDomicile`, `nationality`, `email`, `enrolmentID`, `mobileNumber`, `joiningYear`, `programmeCode`, `programmeName`, `yearOfIntroduction`, `implementationStatus`, `yearOfRevision`, `percentageContentChange`, `courseName`, `courseCode`, `courseContent`, `studentProjects`, `internshipName`, `internshipPlace`, `documentLink`, `addedCourse`, `yearOffer`, `timesOffered`, `durationCourse`, `studentEnrolled`, `completingCourse`) VALUES
(1, 'Bindesh Suresh  Gupta', 'Male', '34', '34', '34', 'abc@gmail.com ', 42, 2147483647, 53, '536', 'Node_js', 536, 'Yes', 537, 5733, 57, '21', 577777777, 'fdrtbz', '', '', 'https://www.youtube.com/watch?v=pPzUAp9YN1A', '', 0, '', 0, 0, 0),
(2, 'abc', 'Female', '34', '34', '34', 'abc@gmail.com ', 42, 2147483647, 53, '536', 'python ', 536, 'Yes', 537, 5733, 57, '21', 577777777, 'fdrtbz', '', '', 'ssssssf', '', 0, '', 0, 0, 0),
(3, 'abc', 'Female', '34', '34', '34', 'abc@gmail.com ', 42, 2147483647, 53, '536', 'python ', 536, 'Yes', 537, 5733, 57, '21', 577777777, 'fdrtbz', '', '', 'ssssssf', '', 0, '', 0, 0, 0),
(4, 'abc', 'Female', '34', '34', '34', 'dummy@gmail.com', 6, 2147483647, 325, '13', '352', 12355, 'No', 31525, 325, 325, '352', 325, '4e6terdgfhse5uy6u', '', '', '', '', 0, '', 0, 0, 0),
(5, 'sangeeta', 'Female', 'var', '134', 'indian', 'rachana@123gmail.com', 3, 11, 2023, '1', 'python ', 2023, 'Yes', -6, 89809, 0, '352', 0, 'i9ou78ihjbmn', '', '', '', '', 0, '', 0, 0, 0),
(6, 'bhola', 'Male', 'int', '134', 'indian', 'rachana@gmail.com', 31, 2147483647, 213, 'c1dw', '1234', 123, '', 124, 43, 0, '21', 0, 'gaefer', '', '', '', '', 0, '', 0, 0, 0),
(7, 'bhola', 'Male', 'int', '134', 'indian', 'rachana@gmail.com', 31, 2147483647, 213, 'c1dw', '1234', 123, '', 124, 43, 0, '21', 0, 'gaefer', '', '', '', '', 0, '', 0, 0, 0),
(8, 'preet', 'Female', 'int', '34', 'indian', 'rachana@123gmail.com', 34, 2147483647, 324, '4', '324', 32432, '', 325, 253, 523, '235', 235, 'ewrrrrrrrrrrrrrrrrr', '', '', '', '', 0, '', 0, 0, 0),
(9, 'Bindesh', 'Male', 'bsc', 'Maharashtra', 'india', 'aaa@gmail.com', 12456, 1234567890, 2024, '101', 'node_js', -2, 'Yes', 12, 91, 0, '111', 0, 'nnnnnnn', '', '', 'https://www.youtube.com/watch?v=pPzUAp9YN1A', '', 0, '', 0, 0, 0),
(10, 'Varsha', 'Female', 'int', '34', 'indian', 'dummy@gmail.com', 14, 243112341, 134, '134', 'python ', 134, 'Yes', 143, 134, 134, '143', 2147483647, '14333333333333', '', '', '13444444444', '', 0, '', 0, 0, 0),
(11, 'pinkuu', 'Male', 'ASDFGH', 'sfss', 'ertdr', 'pinku@gmail.com', 23, 2147483647, 123, '34', ' bmngjh', 132434, 'Yes', 21432, 43, 0, '45', 2147483647, 'arewstsgfdc gvtfgtfvgtfdftdf', '', '', '646sdfgfytr', '', 0, '', 0, 0, 0),
(12, 'pinkuu', 'Male', 'ASDFGH', 'sfss', 'ertdr', 'pinku@gmail.com', 12, 123243647, 123, '21', ' bmngjh', 132, 'Yes', 123, 23, 0, '5657', 2, 'dfggfx', '', '', 'gwdf2ddf5r6er5ed', '', 0, '', 0, 0, 0),
(13, 'pinkuuuuuuuuuuuuuuuuuuuuuuuuu', 'Female', 'ASDFGH', 'sfss', 'Indian ', 'pinku@gmail.com', 34, 2147483647, 234, '21', 'cfcgfc', 23, 'Yes', 34, 324, 0, '34', 0, 'plxxxxxxxxxxxxxxxxxxx', '', '', 'fgfgdsffsfsgdf', '456', 453, '43', 46, 23, 234);

-- --------------------------------------------------------

--
-- Table structure for table `teacherform`
--

CREATE TABLE `teacherform` (
  `teacher_id` int(10) NOT NULL,
  `teacherName` varchar(100) NOT NULL,
  `pan` varchar(100) NOT NULL,
  `designation` varchar(50) NOT NULL,
  `appointmentYear` int(40) NOT NULL,
  `appointmentNature` varchar(100) NOT NULL,
  `departmentName` varchar(70) NOT NULL,
  `experienceYears` int(10) NOT NULL,
  `stillServing1` varchar(100) NOT NULL,
  `teacherNamePhD` varchar(100) NOT NULL,
  `qualificationYear` varchar(10) NOT NULL,
  `recognizedGuide` varchar(10) NOT NULL,
  `recognitionYear` int(10) NOT NULL,
  `stillServing2` varchar(10) NOT NULL,
  `researchScholar` varchar(100) NOT NULL,
  `registrationYear` int(10) NOT NULL,
  `guideAllotmentLink` date NOT NULL,
  `programmeName` varchar(50) NOT NULL,
  `programmeCode` varchar(50) NOT NULL,
  `semesterYear` varchar(10) NOT NULL,
  `lastExamDate` date NOT NULL,
  `resultDate` date NOT NULL,
  `programCode` varchar(10) NOT NULL,
  `programName` varchar(100) NOT NULL,
  `studentsAppeared` int(100) NOT NULL,
  `studentsPassed` int(100) NOT NULL,
  `teacherNameSeedMoney` varchar(100) NOT NULL,
  `seedAmount` int(10) NOT NULL,
  `yearReceived` int(10) NOT NULL,
  `policyLink` varchar(100) NOT NULL,
  `teacherNameAward` varchar(100) NOT NULL,
  `awardName` varchar(100) NOT NULL,
  `awardYear` int(10) NOT NULL,
  `awardingAgency` varchar(100) NOT NULL,
  `roomName` varchar(255) NOT NULL,
  `ictFacility` varchar(255) NOT NULL,
  `photoLink` varchar(255) NOT NULL,
  `timetable` varchar(255) NOT NULL,
  `year` varchar(10) NOT NULL,
  `budget` int(10) NOT NULL,
  `expenditure` int(10) NOT NULL,
  `totalExpenditure` int(10) NOT NULL,
  `maintenanceAcademic` int(10) NOT NULL,
  `maintenancePhysical` int(10) NOT NULL,
  `module` varchar(255) NOT NULL,
  `platform` varchar(255) NOT NULL,
  `launchDate` date NOT NULL,
  `documentLink` varchar(255) NOT NULL,
  `facility` varchar(255) NOT NULL,
  `developmentFacility` varchar(255) NOT NULL,
  `videoLink` varchar(255) NOT NULL,
  `scheme_name` varchar(255) NOT NULL,
  `gov_students` int(11) NOT NULL,
  `gov_amount` decimal(10,2) NOT NULL,
  `ngo_students` int(11) NOT NULL,
  `ngo_amount` decimal(10,2) NOT NULL,
  `ngo_name` varchar(255) NOT NULL,
  `capacity_programme` varchar(255) NOT NULL,
  `implementationDate` date NOT NULL,
  `enrolledStudents` int(11) NOT NULL,
  `agencies` text NOT NULL,
  `activity_name` varchar(255) NOT NULL,
  `students_attended` int(11) NOT NULL,
  `students_placed` int(11) NOT NULL,
  `eventDate` date NOT NULL,
  `teamIndividual` varchar(255) NOT NULL,
  `competitionLevel` varchar(255) NOT NULL,
  `eventName` varchar(255) NOT NULL,
  `pi_co_pi_name` varchar(255) NOT NULL,
  `funding_agency` varchar(255) NOT NULL,
  `type` varchar(100) NOT NULL,
  `department` varchar(255) NOT NULL,
  `funds_provided` int(10) NOT NULL,
  `duration` varchar(100) NOT NULL,
  `workshop_name` varchar(255) NOT NULL,
  `participants` int(11) NOT NULL,
  `date` varchar(100) NOT NULL,
  `activity_report_link` varchar(255) NOT NULL,
  `author_name` varchar(255) NOT NULL,
  `journal_name` varchar(255) NOT NULL,
  `publication_year` int(11) NOT NULL,
  `issn_number` varchar(255) NOT NULL,
  `journal_website` varchar(255) NOT NULL,
  `article_link` varchar(255) NOT NULL,
  `listing_status` varchar(255) NOT NULL,
  `teacher_consultants` varchar(255) NOT NULL,
  `project_name` varchar(255) NOT NULL,
  `agency_details` varchar(255) NOT NULL,
  `revenue_generated` decimal(10,2) NOT NULL,
  `trainees` int(11) NOT NULL,
  `teachers_staff_names` varchar(255) NOT NULL,
  `facilities_name_department` varchar(255) NOT NULL,
  `consultancy_name` varchar(255) NOT NULL,
  `total_amount_spent` int(10) NOT NULL,
  `organizing_unit` varchar(255) NOT NULL,
  `role` varchar(50) NOT NULL,
  `year_placement` varchar(4) NOT NULL,
  `studentName_placement` varchar(255) NOT NULL,
  `programGraduated_placement` varchar(255) NOT NULL,
  `employerName` varchar(255) NOT NULL,
  `payPackage` varchar(255) NOT NULL,
  `studentName_higher_education` varchar(255) NOT NULL,
  `institutionJoined` varchar(255) NOT NULL,
  `programAdmitted` varchar(255) NOT NULL,
  `e_governance` varchar(255) NOT NULL,
  `conference_name` varchar(255) NOT NULL,
  `conferenceName` varchar(255) NOT NULL,
  `professionalBody` varchar(255) NOT NULL,
  `amount` int(10) NOT NULL,
  `roles` varchar(255) NOT NULL,
  `from_date` date NOT NULL,
  `to_date` date NOT NULL,
  `program_title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teacherform`
--

INSERT INTO `teacherform` (`teacher_id`, `teacherName`, `pan`, `designation`, `appointmentYear`, `appointmentNature`, `departmentName`, `experienceYears`, `stillServing1`, `teacherNamePhD`, `qualificationYear`, `recognizedGuide`, `recognitionYear`, `stillServing2`, `researchScholar`, `registrationYear`, `guideAllotmentLink`, `programmeName`, `programmeCode`, `semesterYear`, `lastExamDate`, `resultDate`, `programCode`, `programName`, `studentsAppeared`, `studentsPassed`, `teacherNameSeedMoney`, `seedAmount`, `yearReceived`, `policyLink`, `teacherNameAward`, `awardName`, `awardYear`, `awardingAgency`, `roomName`, `ictFacility`, `photoLink`, `timetable`, `year`, `budget`, `expenditure`, `totalExpenditure`, `maintenanceAcademic`, `maintenancePhysical`, `module`, `platform`, `launchDate`, `documentLink`, `facility`, `developmentFacility`, `videoLink`, `scheme_name`, `gov_students`, `gov_amount`, `ngo_students`, `ngo_amount`, `ngo_name`, `capacity_programme`, `implementationDate`, `enrolledStudents`, `agencies`, `activity_name`, `students_attended`, `students_placed`, `eventDate`, `teamIndividual`, `competitionLevel`, `eventName`, `pi_co_pi_name`, `funding_agency`, `type`, `department`, `funds_provided`, `duration`, `workshop_name`, `participants`, `date`, `activity_report_link`, `author_name`, `journal_name`, `publication_year`, `issn_number`, `journal_website`, `article_link`, `listing_status`, `teacher_consultants`, `project_name`, `agency_details`, `revenue_generated`, `trainees`, `teachers_staff_names`, `facilities_name_department`, `consultancy_name`, `total_amount_spent`, `organizing_unit`, `role`, `year_placement`, `studentName_placement`, `programGraduated_placement`, `employerName`, `payPackage`, `studentName_higher_education`, `institutionJoined`, `programAdmitted`, `e_governance`, `conference_name`, `conferenceName`, `professionalBody`, `amount`, `roles`, `from_date`, `to_date`, `program_title`) VALUES
(1, '14', '123', '213', 231, '231', 'computer science ', 231, '', '', '142', '14', 14, '', '124', 124, '0000-00-00', 'CS', '342', '414', '2024-01-07', '2024-01-07', '214', 'CS', 21, 412, '', 1423, 144, '14', '', '14', 14, '14', '', '', '', '', '', 0, 0, 0, 0, 0, '', '', '0000-00-00', '', '', '', '', '', 0, 0.00, 0, 0.00, '', '', '0000-00-00', 0, '', '', 0, 0, '0000-00-00', '', '', '', '', '', '', '', 0, '', '', 0, '', '', '', '', 0, '', '', '', '', '', '', '', 0.00, 0, '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '0000-00-00', '0000-00-00', ''),
(2, '', '', '', 0, '', '', 0, '', '', '', '', 0, '', '', 0, '0000-00-00', '', '21', '', '0000-00-00', '0000-00-00', '', '', 0, 0, '', 0, 0, '', '', '', 0, '', '', '', '', '', '', 0, 0, 0, 0, 0, '', '', '0000-00-00', '', '', '', '', '', 0, 0.00, 0, 0.00, '', '', '0000-00-00', 0, '', '', 0, 0, '0000-00-00', '', '', '', '', '', '', '', 0, '', '', 0, '', '', '', '', 0, '', '', '', '', '', '', '', 0.00, 0, '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '0000-00-00', '0000-00-00', ''),
(3, '', '', '', 0, '', '', 0, '', '', '', '', 0, '', '', 0, '0000-00-00', '', '21', '', '0000-00-00', '0000-00-00', '', '', 0, 0, '', 0, 0, '', '', '', 0, '', '', '', '', '', '', 0, 0, 0, 0, 0, '', '', '0000-00-00', '', '', '', '', '', 0, 0.00, 0, 0.00, '', '', '0000-00-00', 0, '', '', 0, 0, '0000-00-00', '', '', '', '', '', '', '', 0, '', '', 0, '', '', '', '', 0, '', '', '', '', '', '', '', 0.00, 0, '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '0000-00-00', '0000-00-00', ''),
(4, '', '', '', 0, '', '', 0, '', '', '', '', 0, '', '', 0, '0000-00-00', '', '9897867', '', '0000-00-00', '0000-00-00', '', '', 0, 0, '', 0, 0, '', '', '', 0, '', '', '', '', '', '', 0, 0, 0, 0, 0, '', '', '0000-00-00', '', '', '', '', '', 0, 0.00, 0, 0.00, '', '', '0000-00-00', 0, '', '', 0, 0, '0000-00-00', '', '', '', '', '', '', '', 0, '', '', 0, '', '', '', '', 0, '', '', '', '', '', '', '', 0.00, 0, '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '0000-00-00', '0000-00-00', ''),
(5, '', '', '', 0, '', '', 0, '', '', '', '', 0, '', '', 0, '0000-00-00', '', '', '', '0000-00-00', '0000-00-00', '', '', 0, 0, '', 0, 0, '', '', '', 0, '', '', '', '', '', '', 0, 0, 0, 0, 0, '', '', '0000-00-00', '', '', '', '', '', 0, 0.00, 0, 0.00, '', '', '0000-00-00', 0, '', '', 0, 0, '0000-00-00', 'Administration', '', '', '', '', '', '', 0, '', '', 0, '', '', '', '', 0, '', '', '', '', '', '', '', 0.00, 0, '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '0000-00-00', '0000-00-00', ''),
(6, '', '', '', 0, '', '', 0, '', '', '', '', 0, '', '', 0, '0000-00-00', '', '57', '', '0000-00-00', '0000-00-00', '', '', 0, 0, '', 0, 0, '', '', '', 0, '', '', '', '', '', '', 0, 0, 0, 0, 0, '', '', '0000-00-00', '', '', '', '', '', 0, 0.00, 0, 0.00, '', '', '0000-00-00', 0, '', '', 0, 0, '0000-00-00', 'Administration', '', '', '', '', '', '', 0, '', '', 0, '', '', '', '', 0, '', '', '', '', '', '', '', 0.00, 0, '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '0000-00-00', '0000-00-00', ''),
(7, '', '', '', 0, '', '', 0, '', '', '', '', 0, '', '', 0, '0000-00-00', '', '57', '', '0000-00-00', '0000-00-00', '', '', 0, 0, '', 0, 0, '', '', '', 0, '', '', '', '', '', '', 0, 0, 0, 0, 0, '', '', '0000-00-00', '', '', '', '', '', 0, 0.00, 0, 0.00, '', '', '0000-00-00', 0, '', '', 0, 0, '0000-00-00', 'Administration', '', '', '', '', '', '', 0, '', '', 0, '', '', '', '', 0, '', '', '', '', '', '', '', 0.00, 0, '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '0000-00-00', '0000-00-00', ''),
(8, '', '', '', 0, '', '', 0, '', '', '', '', 0, '', '', 0, '0000-00-00', '', '9372451657', '', '0000-00-00', '0000-00-00', '', '', 0, 0, '', 0, 0, '', '', '', 0, '', '', '', '', '', '', 0, 0, 0, 0, 0, '', '', '0000-00-00', '', '', '', '', '', 0, 0.00, 0, 0.00, '', '', '0000-00-00', 0, '', '', 0, 0, '0000-00-00', 'Administration', '', '', '', '', '', '', 0, '', '', 0, '', '', '', '', 0, '', '', '', '', '', '', '', 0.00, 0, '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '0000-00-00', '0000-00-00', ''),
(9, '', '', '', 0, '', '', 0, '', '', '', '', 0, '', '', 0, '0000-00-00', '', '21', '', '0000-00-00', '0000-00-00', '', '', 0, 0, '', 0, 0, '', '', '', 0, '', '', '', '', '', '', 0, 0, 0, 0, 0, '', '', '0000-00-00', '', '', '', '', '', 0, 0.00, 0, 0.00, '', '', '0000-00-00', 0, '', '', 0, 0, '0000-00-00', 'Administration', '', '', '', '', '', '', 0, '', '', 0, '', '', '', '', 0, '', '', '', '', '', '', '', 0.00, 0, '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '0000-00-00', '0000-00-00', ''),
(10, '', '', '', 0, '', '', 0, '', '', '', '', 0, '', '', 0, '0000-00-00', '', '21', '', '0000-00-00', '0000-00-00', '', '', 0, 0, '', 0, 0, '', '', '', 0, '', '', '', '', '', '', 0, 0, 0, 0, 0, '', '', '0000-00-00', '', '', '', '', '', 0, 0.00, 0, 0.00, '', '', '0000-00-00', 0, '', '', 0, 0, '0000-00-00', '', '', '', '', '', '', '', 0, '', '', 0, '', '', '', '', 0, '', '', '', '', '', '', '', 0.00, 0, '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '0000-00-00', '0000-00-00', ''),
(11, '', '', '', 0, '', '', 0, '', '', '', '', 0, '', '', 0, '0000-00-00', '', '21', '', '0000-00-00', '0000-00-00', '', '', 0, 0, '', 0, 0, '', '', '', 0, '', '', '', '', '', '', 0, 0, 0, 0, 0, '', '', '0000-00-00', '', '', '', '', '', 0, 0.00, 0, 0.00, '', '', '0000-00-00', 0, '', '', 0, 0, '0000-00-00', '', '', '', '', '', '', '', 0, '', '', 0, '', '', '', '', 0, '', '', '', '', '', '', '', 0.00, 0, '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '0000-00-00', '0000-00-00', ''),
(12, '', '', '', 0, '', '', 0, '', '', '', '', 0, '', '', 0, '0000-00-00', '', '21', '', '0000-00-00', '0000-00-00', '', '', 0, 0, '', 0, 0, '', '', '', 0, '', '', '', '', '', '', 0, 0, 0, 0, 0, '', '', '0000-00-00', '', '', '', '', '', 0, 0.00, 0, 0.00, '', '', '0000-00-00', 0, '', '', 0, 0, '0000-00-00', '', '', '', '', '', '', '', 0, '', '', 0, '', '', '', '', 0, '', '', '', '', '', '', '', 0.00, 0, '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '0000-00-00', '0000-00-00', ''),
(13, '', '', '', 0, '', '', 0, 'yes', '', '', '', 0, '', '', 0, '0000-00-00', '', '21', '', '0000-00-00', '0000-00-00', '', '', 0, 0, '', 0, 0, '', '', '', 2024, 'Preet', '', '', '', '', '', 0, 0, 0, 0, 0, '', '', '0000-00-00', '', '', '', '', '', 0, 0.00, 0, 0.00, '', '', '0000-00-00', 0, '', '', 0, 0, '0000-00-00', '', '', '', '', '', '', '', 0, '', '', 0, '', '', '', '', 0, '', '', '', '', '', '', '', 0.00, 0, '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '0000-00-00', '0000-00-00', ''),
(14, '', '12345678', 'WE', 24, 'permanent', 'IT', 1, 'yes', '', '', '', 0, '', '', 0, '0000-00-00', '', '21', '', '0000-00-00', '0000-00-00', '', '', 0, 0, '', 0, 0, '', '', '', 2024, 'Preet', '', '', '', '', '', 0, 0, 0, 0, 0, '', '', '0000-00-00', '', '', '', '', '', 0, 0.00, 0, 0.00, '', '', '0000-00-00', 0, '', '', 0, 0, '0000-00-00', '', '', '', '', '', '', '', 0, '', '', 0, '', '', '', '', 0, '', '', '', '', '', '', '', 0.00, 0, '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '0000-00-00', '0000-00-00', ''),
(15, '', '12345678', 'WE', 24, 'permanent', 'IT', 1, 'no', '', '', '', 0, '', '', 0, '0000-00-00', '', '', '6', '2024-04-22', '2024-04-22', '', '', 118, 110, '', 0, 0, '', '', '', 0, '', '', '', '', '', '', 0, 0, 0, 0, 0, '', '', '0000-00-00', '', '', '', '', '', 0, 0.00, 0, 0.00, '', '', '0000-00-00', 0, '', '', 0, 0, '0000-00-00', '', '', '', '', '', '', '', 0, '', '', 0, '', '', '', '', 0, '', '', '', '', '', '', '', 0.00, 0, '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '0000-00-00', '0000-00-00', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userid` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `usertype` varchar(80) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `username`, `password`, `usertype`, `created_date`) VALUES
(3, 'student', 'student123', 'Student', '2024-03-24 18:15:15'),
(4, 'Teacher', 'Teacher123', 'Teacher', '2024-03-24 18:25:21'),
(16, 'Admin', 'admin123', 'Admin', '2024-04-16 14:23:42');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `full_name`, `email`, `password`) VALUES
(8, 'abc', 'abc@gmail.com', '$2y$10$nHFgZf3f5b908yXH6eoDg.74.39msiwBGc6rJnj4EKnWtrfYwkCre'),
(9, 'ashish', 'ashish@gmail.com', '12345678'),
(10, 'varsha', 'varsha@gmail.com', '12345678'),
(11, 'admin', 'admin@gmail.com', 'admin123'),
(12, 'teacher', 'teacher@gmail.com', 'teacher123');

-- --------------------------------------------------------

--
-- Table structure for table `yesno`
--

CREATE TABLE `yesno` (
  `id` int(11) NOT NULL,
  `stillServing` enum('yes','no') DEFAULT NULL,
  `activity` varchar(255) DEFAULT NULL,
  `award` varchar(255) DEFAULT NULL,
  `awardingBody` varchar(255) DEFAULT NULL,
  `year` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `studentform`
--
ALTER TABLE `studentform`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacherform`
--
ALTER TABLE `teacherform`
  ADD PRIMARY KEY (`teacher_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `yesno`
--
ALTER TABLE `yesno`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `studentform`
--
ALTER TABLE `studentform`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `teacherform`
--
ALTER TABLE `teacherform`
  MODIFY `teacher_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `yesno`
--
ALTER TABLE `yesno`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
