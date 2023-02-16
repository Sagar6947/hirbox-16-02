-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 05, 2022 at 06:04 AM
-- Server version: 5.7.40-cll-lve
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hirboxco_hirbox_new`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_candidate_registration`
--

CREATE TABLE `tbl_candidate_registration` (
  `candidate_id` int(11) NOT NULL,
  `create_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL,
  `dob` varchar(200) NOT NULL,
  `password` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `experience` varchar(255) NOT NULL,
  `resume` varchar(250) NOT NULL,
  `about_candidate` text NOT NULL,
  `address` varchar(255) NOT NULL,
  `are_you_student` enum('1','0') NOT NULL COMMENT '1=job ,0=student',
  `job_title` varchar(255) NOT NULL,
  `job_company` varchar(255) NOT NULL,
  `not_employeed` enum('0','1') NOT NULL COMMENT '0=employeed,1=not employeed',
  `achievements` text NOT NULL,
  `college` varchar(255) NOT NULL,
  `degree` varchar(255) NOT NULL,
  `graduation_year` varchar(200) NOT NULL,
  `job_search_position` varchar(200) NOT NULL,
  `job_interest` varchar(500) NOT NULL,
  `salary` varchar(255) NOT NULL,
  `salary_currency` varchar(255) NOT NULL,
  `role_looking_for` varchar(300) NOT NULL,
  `work_location` varchar(400) NOT NULL,
  `authorized_us` varchar(110) NOT NULL,
  `sponsorship_us` varchar(255) NOT NULL,
  `seed` varchar(110) NOT NULL,
  `early` varchar(110) NOT NULL,
  `mid_size` varchar(110) NOT NULL,
  `large` varchar(110) NOT NULL,
  `very_large` varchar(110) NOT NULL,
  `massive` varchar(110) NOT NULL,
  `technologies_used` varchar(500) NOT NULL,
  `motivates_you` varchar(200) NOT NULL,
  `career_track` varchar(200) NOT NULL,
  `work_environment` varchar(300) NOT NULL,
  `important_next_job` varchar(300) NOT NULL,
  `flexible_remote_work` varchar(250) NOT NULL,
  `work_quiet_office` varchar(255) NOT NULL,
  `looking_next_job` varchar(800) NOT NULL,
  `zipcode` varchar(12) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `linkedin` varchar(255) NOT NULL,
  `website` varchar(200) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `googleplus` varchar(255) NOT NULL,
  `cstatus` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_candidate_registration`
--

INSERT INTO `tbl_candidate_registration` (`candidate_id`, `create_date`, `name`, `email`, `number`, `dob`, `password`, `designation`, `experience`, `resume`, `about_candidate`, `address`, `are_you_student`, `job_title`, `job_company`, `not_employeed`, `achievements`, `college`, `degree`, `graduation_year`, `job_search_position`, `job_interest`, `salary`, `salary_currency`, `role_looking_for`, `work_location`, `authorized_us`, `sponsorship_us`, `seed`, `early`, `mid_size`, `large`, `very_large`, `massive`, `technologies_used`, `motivates_you`, `career_track`, `work_environment`, `important_next_job`, `flexible_remote_work`, `work_quiet_office`, `looking_next_job`, `zipcode`, `city`, `state`, `country`, `facebook`, `linkedin`, `website`, `twitter`, `googleplus`, `cstatus`) VALUES
(15, '2022-11-20 07:26:19', 'Muskan jain', 'muskaanrashujain@gmail.com', '8821836573', '2022-11-11', '1112', '3', '4', '21111669032700581.pdf', '', 'bhopal', '0', 'developer', 'webangel', '0', ' hell hello                        ', 'extol', 'Mbbs', '2019', 'Ready to interview', 'Full-time Employee', '50000', '113', '1', 'bhopal', '', 'No', 'Ideal', 'Yes', 'Yes', 'Ideal', 'Ideal', 'Yes', '[\"11\",\"3\",\"1\",\"2\"]', 'Solving technical problems', 'Manager', 'Employees wear a lot of hats. Assignments often require employees to\' figure it out\' on their own.', 'Opportunities to progress within the company', 'Very important', 'Not important', '                            \r\n                                                                                    ', '', '', '', '', 'https://www.linkedin.com/feed/', 'https://www.linkedin.com/feed/', 'https://www.linkedin.com/feed/', 'https://www.linkedin.com/feed/', '', '0'),
(16, '2022-11-20 09:17:10', 'Priti Bhosale', 'bhosalepriti2707@gmail.com', '8928932214', '', '2707', '14', '8', '20111668954305825.pdf', '', 'India', '1', 'HR Manager', 'Jeevandeep Edu Pvt. Ltd. ', '1', '', 'CMCS Nashik', 'MBA - HR', '2014', 'Ready to interview', 'Full-time Employee', '0', '', 'null', 'India', 'No', 'No', '', '', '', '', '', 'Ideal', 'null', 'Building products', 'Manager', 'Employees wear a lot of hats. Assignments often require employees to\' figure it out\' on their own.', 'Challenging problems to work on', 'Important', 'Not important', 'cvblm;l', '', '', '', '', '', '', '', '', '', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_candidate_registration`
--
ALTER TABLE `tbl_candidate_registration`
  ADD PRIMARY KEY (`candidate_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_candidate_registration`
--
ALTER TABLE `tbl_candidate_registration`
  MODIFY `candidate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
