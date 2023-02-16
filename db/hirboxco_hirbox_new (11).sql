-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 16, 2023 at 01:08 AM
-- Server version: 5.7.41-cll-lve
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
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(11) NOT NULL,
  `create_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `create_date`, `username`, `password`) VALUES
(1, '2022-09-19 15:59:26', 'hirbox@gmail.com', 'hirbox#2022');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_applied_candidate`
--

CREATE TABLE `tbl_applied_candidate` (
  `acid` int(11) NOT NULL,
  `create_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `company_id` varchar(255) NOT NULL,
  `job_id` varchar(255) NOT NULL,
  `candidate_id` varchar(255) NOT NULL,
  `hr_note` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_applied_candidate`
--

INSERT INTO `tbl_applied_candidate` (`acid`, `create_date`, `company_id`, `job_id`, `candidate_id`, `hr_note`) VALUES
(32, '2022-12-27 15:48:42', '1', '2', '2', ''),
(33, '2023-01-05 23:58:49', '1', '2', '7', ''),
(34, '2023-01-22 06:28:15', '1', '2', '12', 'xyz');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_candidate_academic`
--

CREATE TABLE `tbl_candidate_academic` (
  `ace_id` int(11) NOT NULL,
  `create_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_date` datetime DEFAULT NULL,
  `candidate_id` int(11) NOT NULL,
  `degree` varchar(250) NOT NULL,
  `specialization` varchar(250) NOT NULL,
  `institute` varchar(500) NOT NULL,
  `city` varchar(250) NOT NULL,
  `pass_year` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_candidate_academic`
--

INSERT INTO `tbl_candidate_academic` (`ace_id`, `create_date`, `update_date`, `candidate_id`, `degree`, `specialization`, `institute`, `city`, `pass_year`) VALUES
(3, '2023-01-05 23:56:07', NULL, 7, 'MBA', 'HR', 'CMCS', 'Nashik', '2014'),
(4, '2023-01-06 00:53:29', NULL, 8, 'National Diploma (Mechanical Engineering)', 'Automobile', 'Federal Polytechnic Idah', 'Lokoja/Kogi State', '2016'),
(5, '2023-01-06 00:54:15', NULL, 8, 'National Diploma (Mechanical Engineering)', 'Automobile', 'Federal Polytechnic Idah', 'Lokoja/Kogi State', '2016'),
(6, '2023-01-06 01:04:08', NULL, 8, 'Computer Science', 'Software/Graphics', 'Federal University Lokoja', 'Lokoja, Kogi State - Nigeria', '2023'),
(7, '2023-01-21 02:10:59', NULL, 10, '12', 'testing', 'testing', 'teesitn', '201'),
(8, '2023-01-22 06:30:55', NULL, 12, 'MBA - HR', 'HR', 'IMRT Institute, Nashik', 'Nashik', '2014'),
(9, '2023-01-22 06:31:28', NULL, 12, 'Bcom', 'Accounting', 'CMCS', 'Nashik', '2012'),
(10, '2023-01-22 09:38:41', NULL, 13, '12', 'cebe', 'mmbai collage', 'mumbai', '2022'),
(13, '2023-02-01 05:38:43', NULL, 27, 'sdfs', 'sdfasd', 'sadfsa', 'asfsa', 'sadf'),
(14, '2023-02-06 15:16:59', NULL, 2, '12th', 'Test Board', 'My Institute', 'India', '2020');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_candidate_experience`
--

CREATE TABLE `tbl_candidate_experience` (
  `exp_id` int(11) NOT NULL,
  `create_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_date` datetime DEFAULT NULL,
  `candidate_id` int(11) NOT NULL,
  `company` varchar(500) NOT NULL,
  `role` varchar(500) NOT NULL,
  `expotherrole` varchar(255) NOT NULL,
  `industry_company` varchar(500) NOT NULL,
  `joining_date` varchar(500) NOT NULL,
  `stillwork` varchar(255) NOT NULL,
  `leaving_date` varchar(500) NOT NULL,
  `key_skill` varchar(800) NOT NULL,
  `notice_period` varchar(800) NOT NULL,
  `description` varchar(800) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_candidate_experience`
--

INSERT INTO `tbl_candidate_experience` (`exp_id`, `create_date`, `update_date`, `candidate_id`, `company`, `role`, `expotherrole`, `industry_company`, `joining_date`, `stillwork`, `leaving_date`, `key_skill`, `notice_period`, `description`) VALUES
(2, '2023-01-05 23:53:22', NULL, 7, 'xxyyzz', '3', '', '57', '2019-07-06', '', '2021-10-07', '[\"8\"]', '30', 'djhlvhn'),
(3, '2023-01-06 00:56:35', NULL, 8, '', '14', '', '66', '2016-03-07', '', '2022-12-29', 'null', '5', ''),
(4, '2023-01-22 06:36:08', NULL, 12, 'Valad Business Solution', '14', '', '48', '2021-06-15', '', '2023-01-22', '[\"5\"]', '30', 'xyz'),
(5, '2023-01-22 06:36:46', NULL, 12, 'Hirbox Inc.', '14', '', '48', '2023-01-19', '', '2023-01-22', '[\"4\"]', '60', 'abc'),
(6, '2023-01-22 09:42:18', NULL, 13, 'think digital', '14', '', '48', '2022-12-30', '', '2023-01-17', '[\"11\"]', '2342', 'this is testing'),
(7, '2023-01-22 09:42:46', NULL, 13, 'Webangeltech', '14', '', '48', '2023-01-11', '', '2023-01-19', '[\"5\"]', '32', 'testing\r\n'),
(10, '2023-02-06 15:20:00', NULL, 2, 'ST World', '3', '', '48', '2023-02-06', '1', '2023-02-11', '[\"1\",\"5\",\"4\",\"3\",\"13\",\"12\"]', '2342', 'this is tesitng');

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
  `country_code` varchar(255) NOT NULL,
  `dob` varchar(200) NOT NULL,
  `image` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `fre_exp` varchar(255) NOT NULL,
  `other_role` varchar(255) NOT NULL,
  `profile_summary` text NOT NULL,
  `exp_year` varchar(255) NOT NULL,
  `exp_months` varchar(255) NOT NULL,
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
  `industries` varchar(255) NOT NULL,
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
  `cstatus` enum('0','1') NOT NULL COMMENT '0 - Active, 1 - Deactive',
  `activationcode` varchar(255) NOT NULL,
  `email_verify` enum('0','1') NOT NULL COMMENT '0 - not verifed, 1 - verifed'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_candidate_registration`
--

INSERT INTO `tbl_candidate_registration` (`candidate_id`, `create_date`, `name`, `email`, `number`, `country_code`, `dob`, `image`, `password`, `designation`, `fre_exp`, `other_role`, `profile_summary`, `exp_year`, `exp_months`, `resume`, `about_candidate`, `address`, `are_you_student`, `job_title`, `job_company`, `not_employeed`, `achievements`, `college`, `degree`, `graduation_year`, `job_search_position`, `job_interest`, `salary`, `salary_currency`, `role_looking_for`, `industries`, `work_location`, `authorized_us`, `sponsorship_us`, `seed`, `early`, `mid_size`, `large`, `very_large`, `massive`, `technologies_used`, `motivates_you`, `career_track`, `work_environment`, `important_next_job`, `flexible_remote_work`, `work_quiet_office`, `looking_next_job`, `zipcode`, `city`, `state`, `country`, `facebook`, `linkedin`, `website`, `twitter`, `googleplus`, `cstatus`, `activationcode`, `email_verify`) VALUES
(2, '2022-11-20 07:26:19', 'Muskan jain', 'muskaanrashujain@gmail.com', '8821836573', '1', '2022-11-11', '', '1112', '14', '0', 'other role', 'Resourceful Developer with 11+ years of experience in designing and developing user interfaces, testing and training employees. Skilled at utilizing a wide variety of tools and programs to provide effective applications.    ', '5', '4', '26121672040594940.pdf', '', 'bhopal', '1', 'Developer', 'Think Digital', '0', ' hell hello                               ', 'extol', 'Mbbs', '2019', 'Open to offers', 'Part-time Employee', '500000000', '113', 'null', 'null', 'India', 'No', 'No', 'Ideal', 'Yes', 'Ideal', 'Ideal', 'Ideal', 'Yes', '[\"1\",\"5\",\"13\",\"6\"]', 'Solving technical problems', 'Manager', 'Employees wear a lot of hats. Assignments often require employees to\' figure it out\' on their own.', 'Opportunities to progress within the company', 'Very important', 'Not important', '                                 \r\n                                                                                         ', '', 'bhopal', 'Madhya Pradesh', 'bhopal', 'https://www.linkedin.com/feed/', 'https://www.linkedin.com/feed/', 'https://www.linkedin.com/feed/', 'https://www.linkedin.com/feed/', '', '0', '', '1'),
(3, '2022-11-20 09:17:10', 'Priti Bhosale', 'bhosalepriti2707@gmail.com', '8928932214', '', '', '', '2707', '14', '', '', '', '8', '', '20111668954305825.pdf', '', 'India', '1', 'HR Manager', 'Jeevandeep Edu Pvt. Ltd. ', '1', '', 'CMCS Nashik', 'MBA - HR', '2014', 'Ready to interview', 'Full-time Job', '0', '', 'null', '', 'India', 'No', 'No', '', '', '', '', '', 'Ideal', 'null', 'Building products', 'Manager', 'Employees wear a lot of hats. Assignments often require employees to\' figure it out\' on their own.', 'Challenging problems to work on', 'Important', 'Not important', 'cvblm;l', '', 'Bhopal', 'Madhya Pradesh', '', '', '', '', '', '', '0', '', '0'),
(6, '2023-01-04 00:04:29', 'Hassan ', 'salihuh99@gmail.com', '08168274763', '156', '', '', 'mega390048', '14', '', '', ' ', '1', '3', '04011672809511058.pdf', '', '', '0', 'shedule Officer ', 'Accountant general of the federation office ', '1', ' ', '', '', '', 'Ready to interview', 'Intern', '50,000', '76', '[\"14\"]', '[\"66\",\"62\",\"59\",\"52\",\"50\"]', 'Abuja, Nigeria', 'No', 'No', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', '', '[\"14\"]', 'Solving technical problems', 'Individual contributor', 'Clear role and set of responsibilities. Consistent feedback from management.', 'Team members I can learn from', 'Very important', '', '', '', '', '', '', '', '', '', '', '', '0', '', '0'),
(7, '2023-01-05 00:37:17', 'Amar', 'yogesh727@gmail.com', '9768650317', '99', '1991-10-13', '', 'Amar@727', '3', '', '', ' I am xyz', '7', '3', '05011672897420881.docx', '', '', '1', 'Accounts Manager', 'Asta impex Pvt. Ltd.', '0', ' Bla bla bla', '', '', '', 'Ready to interview', 'Full-time Employee', '20000', '90', 'null', '[\"1\"]', 'Qatar', 'Yes', 'Yes', '', '', '', '', '', 'Ideal', '[\"11\",\"3\",\"4\",\"1\",\"9\"]', 'Building products', 'Individual contributor', 'Employees wear a lot of hats. Assignments often require employees to\' figure it out\' on their own.', 'Mentorship opportunities', 'Very important', '', '', '', 'Panvel', '', 'India', '', '', '', '', '', '0', '', '0'),
(8, '2023-01-06 00:35:15', 'OJO Daniel Temitope', 'daniboyonline8@gmail.com', '8106759178', '156', '', '', 'Hirbox@22', '14', '', '', '', '9', '6', '', '', '', '0', 'Graphic Designer', 'DGConcept', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Lokoja', '', 'Nigeria', '', '', '', '', '', '0', '', '0'),
(11, '2023-01-18 17:07:42', 'Testing', 'hirboxcandidate@gmail.com', '1234567890', '99', '', '', '1111', '', '', '', '', '', '', '', '', '', '1', '', '', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', '', '0'),
(12, '2023-01-22 06:17:44', 'Priti Joshi', 'ptyjoshi1327@gmail.com', '9011429294', '99', '1991-07-27', '', '8928932214', '14', '', 'Human Resourse Manager', 'abc  ', '9', '5', '22011674386823595.docx', '', '', '1', '', '', '0', '', '', '', '', 'Open to offers', 'Part-time Employee', '800000', '47', '[\"14\"]', 'null', 'India , USA, Dubai', 'Yes', 'Yes', '', '', '', '', '', 'Ideal', 'null', '', '', '', 'A company with a good growth trajectory', 'Not important', '', '', '', 'Nashik', '', 'India', '', '', '', '', '', '0', '', '0'),
(31, '2023-02-01 11:14:52', 'Sagar Thakur', 'sagarthakur6947@gmail.com', '6265965711', '99', '', '', 'ssss', '', '', '', '', '', '', '', '', '', '1', '', '', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', '9f59090007b13be29d98dd86e2e28793', '1'),
(32, '2023-02-03 03:49:01', 'Bhakti', 'bhakti@hirbox.com', '9176336445', '226', '', '', 'bhakti@12', '', '', '', '', '', '', '', '', '', '1', '', '', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', '8cad8562b40804ba9e98f434f0316025', '1'),
(33, '2023-02-03 04:00:36', 'Farulian Resti ', 'farulian.resti@gmail.com', '85966177726', '100', '', '', 'Farulian26', '', '', '', '', '', '', '', '', '', '1', '', '', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', 'a7bf16999582af9b0d81d4fec56bd725', '1'),
(34, '2023-02-14 10:03:28', 'OJO Daniel Temitope', 'daniel@hirbox.com', '08106759178', '156', '', '', 'Hirbox@22', '', '', '', '', '', '', '', '', '', '1', '', '', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', '6cce2b05a0154e64dc36703cf0b1d2c5', '0');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cities`
--

CREATE TABLE `tbl_cities` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `state_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_cities`
--

INSERT INTO `tbl_cities` (`id`, `name`, `state_id`) VALUES
(1, 'Bombuflat', 1),
(2, 'Garacharma', 1),
(3, 'Port Blair', 1),
(4, 'Rangat', 1),
(5, 'Addanki', 2),
(6, 'Adivivaram', 2),
(7, 'Adoni', 2),
(8, 'Aganampudi', 2),
(9, 'Ajjaram', 2),
(10, 'Akividu', 2),
(11, 'Akkarampalle', 2),
(12, 'Akkayapalle', 2),
(13, 'Akkireddipalem', 2),
(14, 'Alampur', 2),
(15, 'Amalapuram', 2),
(16, 'Amudalavalasa', 2),
(17, 'Amur', 2),
(18, 'Anakapalle', 2),
(19, 'Anantapur', 2),
(20, 'Andole', 2),
(21, 'Atmakur', 2),
(22, 'Attili', 2),
(23, 'Avanigadda', 2),
(24, 'Badepalli', 2),
(25, 'Badvel', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_company_members`
--

CREATE TABLE `tbl_company_members` (
  `member_id` int(11) NOT NULL,
  `cerate_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `company_id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `access` enum('0','1') NOT NULL COMMENT '0 - read, 1- write'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_company_members`
--

INSERT INTO `tbl_company_members` (`member_id`, `cerate_date`, `company_id`, `name`, `email`, `number`, `role`, `password`, `access`) VALUES
(10, '2022-09-14 12:32:12', '1', 'Sagar Thakur', 'sagarthakur6252@gmail.com', '7771864467', 'Member', 'sagar@11', '0');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_company_registration`
--

CREATE TABLE `tbl_company_registration` (
  `company_id` int(11) NOT NULL,
  `create_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `company_name` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL,
  `country_code` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `cpassword` varchar(255) NOT NULL,
  `size` varchar(255) NOT NULL,
  `website_url` varchar(255) NOT NULL,
  `extension` varchar(255) NOT NULL,
  `industry` varchar(255) NOT NULL,
  `logo_image` varchar(255) NOT NULL,
  `company_image` varchar(255) NOT NULL,
  `about_company` text NOT NULL,
  `address` varchar(255) NOT NULL,
  `zipcode` varchar(12) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `linkedin` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `googleplus` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_company_registration`
--

INSERT INTO `tbl_company_registration` (`company_id`, `create_date`, `company_name`, `first_name`, `last_name`, `email`, `number`, `country_code`, `password`, `cpassword`, `size`, `website_url`, `extension`, `industry`, `logo_image`, `company_image`, `about_company`, `address`, `zipcode`, `city`, `state`, `country`, `facebook`, `linkedin`, `twitter`, `googleplus`) VALUES
(1, '2022-09-13 12:53:32', 'Think Digital', 'Sagar', 'Thakur', 'sagarthakur@gmail.com', '6265965711', '', 'sagar@11', 'sagar@11', '500', 'https://webangeltech.com/', '+91', 'Information Technology', '13091663071162744.png', '13091663071162804.jpg', '<p>this is about</p>', '786, New Market, Bhopal', '462003', 'Select city', 'Madhya Pradesh', 'india', 'facebook.com', 'linkedin.com', 'twitter.com', 'google.com'),
(8, '2022-09-14 11:31:04', 'Sagar', '', '', 'sagarthakur6947@gmail.com', '6265965711', '', 'sagar@11', 'sagar@11', '', '', '', 'Information Technology', '', '', '', '', '', '', '', '', '', '', '', ''),
(9, '2022-09-14 11:32:54', 'Think Digital ', '', '', 'admin@thinkdigitalindia.in', '8411854268', '', 'Nikhil@123', 'Nikhil@123', '', '', '', 'Information Technology', '', '', '', '', '', 'Nashik', 'Maharashtra', 'India', '', '', '', ''),
(10, '2022-10-09 10:06:11', 'hirbox', '', '', 'rbbhakti@gmail.com', '9892341204', '', 'bhakti@12', 'bhakti@12', '', '', '', 'Information Technology', '', '', '', '', '', '', '', '', '', '', '', ''),
(11, '2022-10-17 02:04:42', 'hirbox', '', '', 'hirboxrecruitment@gmail.com', '9892341204', '', 'bhakti@12', 'bhakti@12', '', '', '', 'Information Technology', '', '', '', '', '', '', '', '', '', '', '', ''),
(12, '2022-10-26 05:14:49', 'Test', '', '', 'test@gmail.com', '9301619582', '', '12345', '12345', '', '', '', 'Information Technology', '', '', '', '', '', '', '', '', '', '', '', ''),
(13, '2022-11-29 00:51:24', 'Nikhil', '', '', 'nikhilpande09@gmail.com', '8411854268', '', 'Nikhil@123', 'Nikhil@123', '', '', '', 'Information Technology', '', '', '', '', '', '', '', '', '', '', '', ''),
(14, '2023-01-30 04:18:23', 'Hirbox Inc', '', '', 'priti@hirbox.com', '8928932214', '', '8928932214', '8928932214', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(15, '2023-01-30 04:21:13', 'Rydershipping', '', '', 'bhosalepriti2707@gmail.com', '8928932214', '', '8928932214', '8928932214', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(16, '2023-02-02 07:05:56', 'Firstly', '', '', 'bhaktibhosale12@gmail.com', '9892341204', '', 'bhakti@13', 'bhakti@13', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(17, '2023-02-03 05:53:02', 'S World', '', '', 'mail@sagarthakur.com', '6265965711', '99', 'sagar@11', 'sagar@11', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact_details`
--

CREATE TABLE `tbl_contact_details` (
  `cid` int(11) NOT NULL,
  `create_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_date` datetime DEFAULT NULL,
  `mobile` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_contact_details`
--

INSERT INTO `tbl_contact_details` (`cid`, `create_date`, `update_date`, `mobile`, `email`, `address`) VALUES
(1, '2022-11-23 04:59:21', NULL, '2345678902', 'hirbox@gmail.com', 'somewhere');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_country`
--

CREATE TABLE `tbl_country` (
  `id` int(11) NOT NULL,
  `iso` char(2) NOT NULL,
  `name` varchar(80) NOT NULL,
  `nicename` varchar(80) NOT NULL,
  `iso3` char(3) DEFAULT NULL,
  `numcode` smallint(6) DEFAULT NULL,
  `phonecode` int(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_country`
--

INSERT INTO `tbl_country` (`id`, `iso`, `name`, `nicename`, `iso3`, `numcode`, `phonecode`) VALUES
(1, 'AF', 'AFGHANISTAN', 'Afghanistan', 'AFG', 4, 93),
(2, 'AL', 'ALBANIA', 'Albania', 'ALB', 8, 355),
(3, 'DZ', 'ALGERIA', 'Algeria', 'DZA', 12, 213),
(4, 'AS', 'AMERICAN SAMOA', 'American Samoa', 'ASM', 16, 1684),
(5, 'AD', 'ANDORRA', 'Andorra', 'AND', 20, 376),
(6, 'AO', 'ANGOLA', 'Angola', 'AGO', 24, 244),
(7, 'AI', 'ANGUILLA', 'Anguilla', 'AIA', 660, 1264),
(8, 'AQ', 'ANTARCTICA', 'Antarctica', NULL, NULL, 0),
(9, 'AG', 'ANTIGUA AND BARBUDA', 'Antigua and Barbuda', 'ATG', 28, 1268),
(10, 'AR', 'ARGENTINA', 'Argentina', 'ARG', 32, 54),
(11, 'AM', 'ARMENIA', 'Armenia', 'ARM', 51, 374),
(12, 'AW', 'ARUBA', 'Aruba', 'ABW', 533, 297),
(13, 'AU', 'AUSTRALIA', 'Australia', 'AUS', 36, 61),
(14, 'AT', 'AUSTRIA', 'Austria', 'AUT', 40, 43),
(15, 'AZ', 'AZERBAIJAN', 'Azerbaijan', 'AZE', 31, 994),
(16, 'BS', 'BAHAMAS', 'Bahamas', 'BHS', 44, 1242),
(17, 'BH', 'BAHRAIN', 'Bahrain', 'BHR', 48, 973),
(18, 'BD', 'BANGLADESH', 'Bangladesh', 'BGD', 50, 880),
(19, 'BB', 'BARBADOS', 'Barbados', 'BRB', 52, 1246),
(20, 'BY', 'BELARUS', 'Belarus', 'BLR', 112, 375),
(21, 'BE', 'BELGIUM', 'Belgium', 'BEL', 56, 32),
(22, 'BZ', 'BELIZE', 'Belize', 'BLZ', 84, 501),
(23, 'BJ', 'BENIN', 'Benin', 'BEN', 204, 229),
(24, 'BM', 'BERMUDA', 'Bermuda', 'BMU', 60, 1441),
(25, 'BT', 'BHUTAN', 'Bhutan', 'BTN', 64, 975),
(26, 'BO', 'BOLIVIA', 'Bolivia', 'BOL', 68, 591),
(27, 'BA', 'BOSNIA AND HERZEGOVINA', 'Bosnia and Herzegovina', 'BIH', 70, 387),
(28, 'BW', 'BOTSWANA', 'Botswana', 'BWA', 72, 267),
(29, 'BV', 'BOUVET ISLAND', 'Bouvet Island', NULL, NULL, 0),
(30, 'BR', 'BRAZIL', 'Brazil', 'BRA', 76, 55),
(31, 'IO', 'BRITISH INDIAN OCEAN TERRITORY', 'British Indian Ocean Territory', NULL, NULL, 246),
(32, 'BN', 'BRUNEI DARUSSALAM', 'Brunei Darussalam', 'BRN', 96, 673),
(33, 'BG', 'BULGARIA', 'Bulgaria', 'BGR', 100, 359),
(34, 'BF', 'BURKINA FASO', 'Burkina Faso', 'BFA', 854, 226),
(35, 'BI', 'BURUNDI', 'Burundi', 'BDI', 108, 257),
(36, 'KH', 'CAMBODIA', 'Cambodia', 'KHM', 116, 855),
(37, 'CM', 'CAMEROON', 'Cameroon', 'CMR', 120, 237),
(38, 'CA', 'CANADA', 'Canada', 'CAN', 124, 1),
(39, 'CV', 'CAPE VERDE', 'Cape Verde', 'CPV', 132, 238),
(40, 'KY', 'CAYMAN ISLANDS', 'Cayman Islands', 'CYM', 136, 1345),
(41, 'CF', 'CENTRAL AFRICAN REPUBLIC', 'Central African Republic', 'CAF', 140, 236),
(42, 'TD', 'CHAD', 'Chad', 'TCD', 148, 235),
(43, 'CL', 'CHILE', 'Chile', 'CHL', 152, 56),
(44, 'CN', 'CHINA', 'China', 'CHN', 156, 86),
(45, 'CX', 'CHRISTMAS ISLAND', 'Christmas Island', NULL, NULL, 61),
(46, 'CC', 'COCOS (KEELING) ISLANDS', 'Cocos (Keeling) Islands', NULL, NULL, 672),
(47, 'CO', 'COLOMBIA', 'Colombia', 'COL', 170, 57),
(48, 'KM', 'COMOROS', 'Comoros', 'COM', 174, 269),
(49, 'CG', 'CONGO', 'Congo', 'COG', 178, 242),
(50, 'CD', 'CONGO, THE DEMOCRATIC REPUBLIC OF THE', 'Congo, the Democratic Republic of the', 'COD', 180, 242),
(51, 'CK', 'COOK ISLANDS', 'Cook Islands', 'COK', 184, 682),
(52, 'CR', 'COSTA RICA', 'Costa Rica', 'CRI', 188, 506),
(53, 'CI', 'COTE D\'IVOIRE', 'Cote D\'Ivoire', 'CIV', 384, 225),
(54, 'HR', 'CROATIA', 'Croatia', 'HRV', 191, 385),
(55, 'CU', 'CUBA', 'Cuba', 'CUB', 192, 53),
(56, 'CY', 'CYPRUS', 'Cyprus', 'CYP', 196, 357),
(57, 'CZ', 'CZECH REPUBLIC', 'Czech Republic', 'CZE', 203, 420),
(58, 'DK', 'DENMARK', 'Denmark', 'DNK', 208, 45),
(59, 'DJ', 'DJIBOUTI', 'Djibouti', 'DJI', 262, 253),
(60, 'DM', 'DOMINICA', 'Dominica', 'DMA', 212, 1767),
(61, 'DO', 'DOMINICAN REPUBLIC', 'Dominican Republic', 'DOM', 214, 1809),
(62, 'EC', 'ECUADOR', 'Ecuador', 'ECU', 218, 593),
(63, 'EG', 'EGYPT', 'Egypt', 'EGY', 818, 20),
(64, 'SV', 'EL SALVADOR', 'El Salvador', 'SLV', 222, 503),
(65, 'GQ', 'EQUATORIAL GUINEA', 'Equatorial Guinea', 'GNQ', 226, 240),
(66, 'ER', 'ERITREA', 'Eritrea', 'ERI', 232, 291),
(67, 'EE', 'ESTONIA', 'Estonia', 'EST', 233, 372),
(68, 'ET', 'ETHIOPIA', 'Ethiopia', 'ETH', 231, 251),
(69, 'FK', 'FALKLAND ISLANDS (MALVINAS)', 'Falkland Islands (Malvinas)', 'FLK', 238, 500),
(70, 'FO', 'FAROE ISLANDS', 'Faroe Islands', 'FRO', 234, 298),
(71, 'FJ', 'FIJI', 'Fiji', 'FJI', 242, 679),
(72, 'FI', 'FINLAND', 'Finland', 'FIN', 246, 358),
(73, 'FR', 'FRANCE', 'France', 'FRA', 250, 33),
(74, 'GF', 'FRENCH GUIANA', 'French Guiana', 'GUF', 254, 594),
(75, 'PF', 'FRENCH POLYNESIA', 'French Polynesia', 'PYF', 258, 689),
(76, 'TF', 'FRENCH SOUTHERN TERRITORIES', 'French Southern Territories', NULL, NULL, 0),
(77, 'GA', 'GABON', 'Gabon', 'GAB', 266, 241),
(78, 'GM', 'GAMBIA', 'Gambia', 'GMB', 270, 220),
(79, 'GE', 'GEORGIA', 'Georgia', 'GEO', 268, 995),
(80, 'DE', 'GERMANY', 'Germany', 'DEU', 276, 49),
(81, 'GH', 'GHANA', 'Ghana', 'GHA', 288, 233),
(82, 'GI', 'GIBRALTAR', 'Gibraltar', 'GIB', 292, 350),
(83, 'GR', 'GREECE', 'Greece', 'GRC', 300, 30),
(84, 'GL', 'GREENLAND', 'Greenland', 'GRL', 304, 299),
(85, 'GD', 'GRENADA', 'Grenada', 'GRD', 308, 1473),
(86, 'GP', 'GUADELOUPE', 'Guadeloupe', 'GLP', 312, 590),
(87, 'GU', 'GUAM', 'Guam', 'GUM', 316, 1671),
(88, 'GT', 'GUATEMALA', 'Guatemala', 'GTM', 320, 502),
(89, 'GN', 'GUINEA', 'Guinea', 'GIN', 324, 224),
(90, 'GW', 'GUINEA-BISSAU', 'Guinea-Bissau', 'GNB', 624, 245),
(91, 'GY', 'GUYANA', 'Guyana', 'GUY', 328, 592),
(92, 'HT', 'HAITI', 'Haiti', 'HTI', 332, 509),
(93, 'HM', 'HEARD ISLAND AND MCDONALD ISLANDS', 'Heard Island and Mcdonald Islands', NULL, NULL, 0),
(94, 'VA', 'HOLY SEE (VATICAN CITY STATE)', 'Holy See (Vatican City State)', 'VAT', 336, 39),
(95, 'HN', 'HONDURAS', 'Honduras', 'HND', 340, 504),
(96, 'HK', 'HONG KONG', 'Hong Kong', 'HKG', 344, 852),
(97, 'HU', 'HUNGARY', 'Hungary', 'HUN', 348, 36),
(98, 'IS', 'ICELAND', 'Iceland', 'ISL', 352, 354),
(99, 'IN', 'INDIA', 'India', 'IND', 356, 91),
(100, 'ID', 'INDONESIA', 'Indonesia', 'IDN', 360, 62),
(101, 'IR', 'IRAN, ISLAMIC REPUBLIC OF', 'Iran, Islamic Republic of', 'IRN', 364, 98),
(102, 'IQ', 'IRAQ', 'Iraq', 'IRQ', 368, 964),
(103, 'IE', 'IRELAND', 'Ireland', 'IRL', 372, 353),
(104, 'IL', 'ISRAEL', 'Israel', 'ISR', 376, 972),
(105, 'IT', 'ITALY', 'Italy', 'ITA', 380, 39),
(106, 'JM', 'JAMAICA', 'Jamaica', 'JAM', 388, 1876),
(107, 'JP', 'JAPAN', 'Japan', 'JPN', 392, 81),
(108, 'JO', 'JORDAN', 'Jordan', 'JOR', 400, 962),
(109, 'KZ', 'KAZAKHSTAN', 'Kazakhstan', 'KAZ', 398, 7),
(110, 'KE', 'KENYA', 'Kenya', 'KEN', 404, 254),
(111, 'KI', 'KIRIBATI', 'Kiribati', 'KIR', 296, 686),
(112, 'KP', 'KOREA, DEMOCRATIC PEOPLE\'S REPUBLIC OF', 'Korea, Democratic People\'s Republic of', 'PRK', 408, 850),
(113, 'KR', 'KOREA, REPUBLIC OF', 'Korea, Republic of', 'KOR', 410, 82),
(114, 'KW', 'KUWAIT', 'Kuwait', 'KWT', 414, 965),
(115, 'KG', 'KYRGYZSTAN', 'Kyrgyzstan', 'KGZ', 417, 996),
(116, 'LA', 'LAO PEOPLE\'S DEMOCRATIC REPUBLIC', 'Lao People\'s Democratic Republic', 'LAO', 418, 856),
(117, 'LV', 'LATVIA', 'Latvia', 'LVA', 428, 371),
(118, 'LB', 'LEBANON', 'Lebanon', 'LBN', 422, 961),
(119, 'LS', 'LESOTHO', 'Lesotho', 'LSO', 426, 266),
(120, 'LR', 'LIBERIA', 'Liberia', 'LBR', 430, 231),
(121, 'LY', 'LIBYAN ARAB JAMAHIRIYA', 'Libyan Arab Jamahiriya', 'LBY', 434, 218),
(122, 'LI', 'LIECHTENSTEIN', 'Liechtenstein', 'LIE', 438, 423),
(123, 'LT', 'LITHUANIA', 'Lithuania', 'LTU', 440, 370),
(124, 'LU', 'LUXEMBOURG', 'Luxembourg', 'LUX', 442, 352),
(125, 'MO', 'MACAO', 'Macao', 'MAC', 446, 853),
(126, 'MK', 'MACEDONIA, THE FORMER YUGOSLAV REPUBLIC OF', 'Macedonia, the Former Yugoslav Republic of', 'MKD', 807, 389),
(127, 'MG', 'MADAGASCAR', 'Madagascar', 'MDG', 450, 261),
(128, 'MW', 'MALAWI', 'Malawi', 'MWI', 454, 265),
(129, 'MY', 'MALAYSIA', 'Malaysia', 'MYS', 458, 60),
(130, 'MV', 'MALDIVES', 'Maldives', 'MDV', 462, 960),
(131, 'ML', 'MALI', 'Mali', 'MLI', 466, 223),
(132, 'MT', 'MALTA', 'Malta', 'MLT', 470, 356),
(133, 'MH', 'MARSHALL ISLANDS', 'Marshall Islands', 'MHL', 584, 692),
(134, 'MQ', 'MARTINIQUE', 'Martinique', 'MTQ', 474, 596),
(135, 'MR', 'MAURITANIA', 'Mauritania', 'MRT', 478, 222),
(136, 'MU', 'MAURITIUS', 'Mauritius', 'MUS', 480, 230),
(137, 'YT', 'MAYOTTE', 'Mayotte', NULL, NULL, 269),
(138, 'MX', 'MEXICO', 'Mexico', 'MEX', 484, 52),
(139, 'FM', 'MICRONESIA, FEDERATED STATES OF', 'Micronesia, Federated States of', 'FSM', 583, 691),
(140, 'MD', 'MOLDOVA, REPUBLIC OF', 'Moldova, Republic of', 'MDA', 498, 373),
(141, 'MC', 'MONACO', 'Monaco', 'MCO', 492, 377),
(142, 'MN', 'MONGOLIA', 'Mongolia', 'MNG', 496, 976),
(143, 'MS', 'MONTSERRAT', 'Montserrat', 'MSR', 500, 1664),
(144, 'MA', 'MOROCCO', 'Morocco', 'MAR', 504, 212),
(145, 'MZ', 'MOZAMBIQUE', 'Mozambique', 'MOZ', 508, 258),
(146, 'MM', 'MYANMAR', 'Myanmar', 'MMR', 104, 95),
(147, 'NA', 'NAMIBIA', 'Namibia', 'NAM', 516, 264),
(148, 'NR', 'NAURU', 'Nauru', 'NRU', 520, 674),
(149, 'NP', 'NEPAL', 'Nepal', 'NPL', 524, 977),
(150, 'NL', 'NETHERLANDS', 'Netherlands', 'NLD', 528, 31),
(151, 'AN', 'NETHERLANDS ANTILLES', 'Netherlands Antilles', 'ANT', 530, 599),
(152, 'NC', 'NEW CALEDONIA', 'New Caledonia', 'NCL', 540, 687),
(153, 'NZ', 'NEW ZEALAND', 'New Zealand', 'NZL', 554, 64),
(154, 'NI', 'NICARAGUA', 'Nicaragua', 'NIC', 558, 505),
(155, 'NE', 'NIGER', 'Niger', 'NER', 562, 227),
(156, 'NG', 'NIGERIA', 'Nigeria', 'NGA', 566, 234),
(157, 'NU', 'NIUE', 'Niue', 'NIU', 570, 683),
(158, 'NF', 'NORFOLK ISLAND', 'Norfolk Island', 'NFK', 574, 672),
(159, 'MP', 'NORTHERN MARIANA ISLANDS', 'Northern Mariana Islands', 'MNP', 580, 1670),
(160, 'NO', 'NORWAY', 'Norway', 'NOR', 578, 47),
(161, 'OM', 'OMAN', 'Oman', 'OMN', 512, 968),
(162, 'PK', 'PAKISTAN', 'Pakistan', 'PAK', 586, 92),
(163, 'PW', 'PALAU', 'Palau', 'PLW', 585, 680),
(164, 'PS', 'PALESTINIAN TERRITORY, OCCUPIED', 'Palestinian Territory, Occupied', NULL, NULL, 970),
(165, 'PA', 'PANAMA', 'Panama', 'PAN', 591, 507),
(166, 'PG', 'PAPUA NEW GUINEA', 'Papua New Guinea', 'PNG', 598, 675),
(167, 'PY', 'PARAGUAY', 'Paraguay', 'PRY', 600, 595),
(168, 'PE', 'PERU', 'Peru', 'PER', 604, 51),
(169, 'PH', 'PHILIPPINES', 'Philippines', 'PHL', 608, 63),
(170, 'PN', 'PITCAIRN', 'Pitcairn', 'PCN', 612, 0),
(171, 'PL', 'POLAND', 'Poland', 'POL', 616, 48),
(172, 'PT', 'PORTUGAL', 'Portugal', 'PRT', 620, 351),
(173, 'PR', 'PUERTO RICO', 'Puerto Rico', 'PRI', 630, 1787),
(174, 'QA', 'QATAR', 'Qatar', 'QAT', 634, 974),
(175, 'RE', 'REUNION', 'Reunion', 'REU', 638, 262),
(176, 'RO', 'ROMANIA', 'Romania', 'ROM', 642, 40),
(177, 'RU', 'RUSSIAN FEDERATION', 'Russian Federation', 'RUS', 643, 70),
(178, 'RW', 'RWANDA', 'Rwanda', 'RWA', 646, 250),
(179, 'SH', 'SAINT HELENA', 'Saint Helena', 'SHN', 654, 290),
(180, 'KN', 'SAINT KITTS AND NEVIS', 'Saint Kitts and Nevis', 'KNA', 659, 1869),
(181, 'LC', 'SAINT LUCIA', 'Saint Lucia', 'LCA', 662, 1758),
(182, 'PM', 'SAINT PIERRE AND MIQUELON', 'Saint Pierre and Miquelon', 'SPM', 666, 508),
(183, 'VC', 'SAINT VINCENT AND THE GRENADINES', 'Saint Vincent and the Grenadines', 'VCT', 670, 1784),
(184, 'WS', 'SAMOA', 'Samoa', 'WSM', 882, 684),
(185, 'SM', 'SAN MARINO', 'San Marino', 'SMR', 674, 378),
(186, 'ST', 'SAO TOME AND PRINCIPE', 'Sao Tome and Principe', 'STP', 678, 239),
(187, 'SA', 'SAUDI ARABIA', 'Saudi Arabia', 'SAU', 682, 966),
(188, 'SN', 'SENEGAL', 'Senegal', 'SEN', 686, 221),
(189, 'CS', 'SERBIA AND MONTENEGRO', 'Serbia and Montenegro', NULL, NULL, 381),
(190, 'SC', 'SEYCHELLES', 'Seychelles', 'SYC', 690, 248),
(191, 'SL', 'SIERRA LEONE', 'Sierra Leone', 'SLE', 694, 232),
(192, 'SG', 'SINGAPORE', 'Singapore', 'SGP', 702, 65),
(193, 'SK', 'SLOVAKIA', 'Slovakia', 'SVK', 703, 421),
(194, 'SI', 'SLOVENIA', 'Slovenia', 'SVN', 705, 386),
(195, 'SB', 'SOLOMON ISLANDS', 'Solomon Islands', 'SLB', 90, 677),
(196, 'SO', 'SOMALIA', 'Somalia', 'SOM', 706, 252),
(197, 'ZA', 'SOUTH AFRICA', 'South Africa', 'ZAF', 710, 27),
(198, 'GS', 'SOUTH GEORGIA AND THE SOUTH SANDWICH ISLANDS', 'South Georgia and the South Sandwich Islands', NULL, NULL, 0),
(199, 'ES', 'SPAIN', 'Spain', 'ESP', 724, 34),
(200, 'LK', 'SRI LANKA', 'Sri Lanka', 'LKA', 144, 94),
(201, 'SD', 'SUDAN', 'Sudan', 'SDN', 736, 249),
(202, 'SR', 'SURINAME', 'Suriname', 'SUR', 740, 597),
(203, 'SJ', 'SVALBARD AND JAN MAYEN', 'Svalbard and Jan Mayen', 'SJM', 744, 47),
(204, 'SZ', 'SWAZILAND', 'Swaziland', 'SWZ', 748, 268),
(205, 'SE', 'SWEDEN', 'Sweden', 'SWE', 752, 46),
(206, 'CH', 'SWITZERLAND', 'Switzerland', 'CHE', 756, 41),
(207, 'SY', 'SYRIAN ARAB REPUBLIC', 'Syrian Arab Republic', 'SYR', 760, 963),
(208, 'TW', 'TAIWAN, PROVINCE OF CHINA', 'Taiwan, Province of China', 'TWN', 158, 886),
(209, 'TJ', 'TAJIKISTAN', 'Tajikistan', 'TJK', 762, 992),
(210, 'TZ', 'TANZANIA, UNITED REPUBLIC OF', 'Tanzania, United Republic of', 'TZA', 834, 255),
(211, 'TH', 'THAILAND', 'Thailand', 'THA', 764, 66),
(212, 'TL', 'TIMOR-LESTE', 'Timor-Leste', NULL, NULL, 670),
(213, 'TG', 'TOGO', 'Togo', 'TGO', 768, 228),
(214, 'TK', 'TOKELAU', 'Tokelau', 'TKL', 772, 690),
(215, 'TO', 'TONGA', 'Tonga', 'TON', 776, 676),
(216, 'TT', 'TRINIDAD AND TOBAGO', 'Trinidad and Tobago', 'TTO', 780, 1868),
(217, 'TN', 'TUNISIA', 'Tunisia', 'TUN', 788, 216),
(218, 'TR', 'TURKEY', 'Turkey', 'TUR', 792, 90),
(219, 'TM', 'TURKMENISTAN', 'Turkmenistan', 'TKM', 795, 7370),
(220, 'TC', 'TURKS AND CAICOS ISLANDS', 'Turks and Caicos Islands', 'TCA', 796, 1649),
(221, 'TV', 'TUVALU', 'Tuvalu', 'TUV', 798, 688),
(222, 'UG', 'UGANDA', 'Uganda', 'UGA', 800, 256),
(223, 'UA', 'UKRAINE', 'Ukraine', 'UKR', 804, 380),
(224, 'AE', 'UNITED ARAB EMIRATES', 'United Arab Emirates', 'ARE', 784, 971),
(225, 'GB', 'UNITED KINGDOM', 'United Kingdom', 'GBR', 826, 44),
(226, 'US', 'UNITED STATES', 'United States', 'USA', 840, 1),
(227, 'UM', 'UNITED STATES MINOR OUTLYING ISLANDS', 'United States Minor Outlying Islands', NULL, NULL, 1),
(228, 'UY', 'URUGUAY', 'Uruguay', 'URY', 858, 598),
(229, 'UZ', 'UZBEKISTAN', 'Uzbekistan', 'UZB', 860, 998),
(230, 'VU', 'VANUATU', 'Vanuatu', 'VUT', 548, 678),
(231, 'VE', 'VENEZUELA', 'Venezuela', 'VEN', 862, 58),
(232, 'VN', 'VIET NAM', 'Viet Nam', 'VNM', 704, 84),
(233, 'VG', 'VIRGIN ISLANDS, BRITISH', 'Virgin Islands, British', 'VGB', 92, 1284),
(234, 'VI', 'VIRGIN ISLANDS, U.S.', 'Virgin Islands, U.s.', 'VIR', 850, 1340),
(235, 'WF', 'WALLIS AND FUTUNA', 'Wallis and Futuna', 'WLF', 876, 681),
(236, 'EH', 'WESTERN SAHARA', 'Western Sahara', 'ESH', 732, 212),
(237, 'YE', 'YEMEN', 'Yemen', 'YEM', 887, 967),
(238, 'ZM', 'ZAMBIA', 'Zambia', 'ZMB', 894, 260),
(239, 'ZW', 'ZIMBABWE', 'Zimbabwe', 'ZWE', 716, 263);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_currency`
--

CREATE TABLE `tbl_currency` (
  `c_id` int(11) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `code` varchar(3) DEFAULT NULL,
  `symbol` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_currency`
--

INSERT INTO `tbl_currency` (`c_id`, `name`, `code`, `symbol`) VALUES
(1, 'Leke', 'ALL', 'Lek'),
(2, 'Dollars', 'USD', '$'),
(3, 'Afghanis', 'AFN', '؋'),
(4, 'Pesos', 'ARS', '$'),
(5, 'Guilders', 'AWG', 'ƒ'),
(6, 'Dollars', 'AUD', '$'),
(7, 'New Manats', 'AZN', 'ман'),
(8, 'Dollars', 'BSD', '$'),
(9, 'Dollars', 'BBD', '$'),
(10, 'Rubles', 'BYR', 'p.'),
(11, 'Euro', 'EUR', '€'),
(12, 'Dollars', 'BZD', 'BZ$'),
(13, 'Dollars', 'BMD', '$'),
(14, 'Bolivianos', 'BOB', '$b'),
(15, 'Convertible Marka', 'BAM', 'KM'),
(16, 'Pula', 'BWP', 'P'),
(17, 'Leva', 'BGN', 'лв'),
(18, 'Reais', 'BRL', 'R$'),
(19, 'Pounds', 'GBP', '£'),
(20, 'Dollars', 'BND', '$'),
(21, 'Riels', 'KHR', '៛'),
(22, 'Dollars', 'CAD', '$'),
(23, 'Dollars', 'KYD', '$'),
(24, 'Pesos', 'CLP', '$'),
(25, 'Yuan Renminbi', 'CNY', '¥'),
(26, 'Pesos', 'COP', '$'),
(27, 'Colón', 'CRC', '₡'),
(28, 'Kuna', 'HRK', 'kn'),
(29, 'Pesos', 'CUP', '₱'),
(30, 'Koruny', 'CZK', 'Kč'),
(31, 'Kroner', 'DKK', 'kr'),
(32, 'Pesos', 'DOP', 'RD$'),
(33, 'Dollars', 'XCD', '$'),
(34, 'Pounds', 'EGP', '£'),
(35, 'Colones', 'SVC', '$'),
(36, 'Pounds', 'FKP', '£'),
(37, 'Dollars', 'FJD', '$'),
(38, 'Cedis', 'GHC', '¢'),
(39, 'Pounds', 'GIP', '£'),
(40, 'Quetzales', 'GTQ', 'Q'),
(41, 'Pounds', 'GGP', '£'),
(42, 'Dollars', 'GYD', '$'),
(43, 'Lempiras', 'HNL', 'L'),
(44, 'Dollars', 'HKD', '$'),
(45, 'Forint', 'HUF', 'Ft'),
(46, 'Kronur', 'ISK', 'kr'),
(47, 'Rupees', 'INR', 'Rp'),
(48, 'Rupiahs', 'IDR', 'Rp'),
(49, 'Rials', 'IRR', '﷼'),
(50, 'Pounds', 'IMP', '£'),
(51, 'New Shekels', 'ILS', '₪'),
(52, 'Dollars', 'JMD', 'J$'),
(53, 'Yen', 'JPY', '¥'),
(54, 'Pounds', 'JEP', '£'),
(55, 'Tenge', 'KZT', 'лв'),
(56, 'Won', 'KPW', '₩'),
(57, 'Won', 'KRW', '₩'),
(58, 'Soms', 'KGS', 'лв'),
(59, 'Kips', 'LAK', '₭'),
(60, 'Lati', 'LVL', 'Ls'),
(61, 'Pounds', 'LBP', '£'),
(62, 'Dollars', 'LRD', '$'),
(63, 'Switzerland Francs', 'CHF', 'CHF'),
(64, 'Litai', 'LTL', 'Lt'),
(65, 'Denars', 'MKD', 'ден'),
(66, 'Ringgits', 'MYR', 'RM'),
(67, 'Rupees', 'MUR', '₨'),
(68, 'Pesos', 'MXN', '$'),
(69, 'Tugriks', 'MNT', '₮'),
(70, 'Meticais', 'MZN', 'MT'),
(71, 'Dollars', 'NAD', '$'),
(72, 'Rupees', 'NPR', '₨'),
(73, 'Guilders', 'ANG', 'ƒ'),
(74, 'Dollars', 'NZD', '$'),
(75, 'Cordobas', 'NIO', 'C$'),
(76, 'Nairas', 'NGN', '₦'),
(77, 'Krone', 'NOK', 'kr'),
(78, 'Rials', 'OMR', '﷼'),
(79, 'Rupees', 'PKR', '₨'),
(80, 'Balboa', 'PAB', 'B/.'),
(81, 'Guarani', 'PYG', 'Gs'),
(82, 'Nuevos Soles', 'PEN', 'S/.'),
(83, 'Pesos', 'PHP', 'Php'),
(84, 'Zlotych', 'PLN', 'zł'),
(85, 'Rials', 'QAR', '﷼'),
(86, 'New Lei', 'RON', 'lei'),
(87, 'Rubles', 'RUB', 'руб'),
(88, 'Pounds', 'SHP', '£'),
(89, 'Riyals', 'SAR', '﷼'),
(90, 'Dinars', 'RSD', 'Дин.'),
(91, 'Rupees', 'SCR', '₨'),
(92, 'Dollars', 'SGD', '$'),
(93, 'Dollars', 'SBD', '$'),
(94, 'Shillings', 'SOS', 'S'),
(95, 'Rand', 'ZAR', 'R'),
(96, 'Rupees', 'LKR', '₨'),
(97, 'Kronor', 'SEK', 'kr'),
(98, 'Dollars', 'SRD', '$'),
(99, 'Pounds', 'SYP', '£'),
(100, 'New Dollars', 'TWD', 'NT$'),
(101, 'Baht', 'THB', '฿'),
(102, 'Dollars', 'TTD', 'TT$'),
(103, 'Lira', 'TRY', '₺'),
(104, 'Liras', 'TRL', '£'),
(105, 'Dollars', 'TVD', '$'),
(106, 'Hryvnia', 'UAH', '₴'),
(107, 'Pesos', 'UYU', '$U'),
(108, 'Sums', 'UZS', 'лв'),
(109, 'Bolivares Fuertes', 'VEF', 'Bs'),
(110, 'Dong', 'VND', '₫'),
(111, 'Rials', 'YER', '﷼'),
(112, 'Zimbabwe Dollars', 'ZWD', 'Z$'),
(113, 'Rupees', 'INR', '₹');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_industries`
--

CREATE TABLE `tbl_industries` (
  `cate_id` int(10) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `category` varchar(500) NOT NULL,
  `category_status` enum('1','0','','') NOT NULL DEFAULT '0' COMMENT '0=active , 1= deactive',
  `premium` enum('0','1') NOT NULL COMMENT '0=yes , 1= no'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_industries`
--

INSERT INTO `tbl_industries` (`cate_id`, `date`, `category`, `category_status`, `premium`) VALUES
(1, '2020-12-31 11:46:45', 'HOSPITAL', '0', '1'),
(2, '2020-12-31 11:46:45', 'HOTEL & RESORT', '0', '1'),
(6, '2020-12-31 11:46:45', 'FITNESS AND GYM', '1', '0'),
(39, '2020-12-31 11:46:45', 'ENTERTAINTMENT', '0', '0'),
(47, '2020-12-31 11:46:45', 'Wine Shop', '0', '1'),
(48, '2020-12-31 11:46:45', 'INFORMATION TECH', '0', '0'),
(49, '2020-12-31 11:46:45', 'WEDDING', '0', '1'),
(50, '2020-12-31 11:46:45', 'TRAVELS', '0', '1'),
(51, '2020-12-31 11:46:45', 'TRANSPORTERS', '0', '1'),
(52, '2020-12-31 11:46:45', 'TRAINING INSTITUTE', '0', '1'),
(53, '2020-12-31 11:46:45', 'SPORTS GOOD', '0', '1'),
(54, '2020-12-31 11:46:45', 'SPORTS COACH', '0', '1'),
(55, '2020-12-31 11:46:45', 'SHOPPING', '0', '0'),
(56, '2020-12-31 11:46:45', 'SECURITY SERVICES', '0', '1'),
(57, '2020-12-31 11:46:45', 'RESTURANT', '0', '0'),
(58, '2020-12-31 11:46:45', 'REPAIRS', '0', '1'),
(59, '2020-12-31 11:46:45', 'REAL ESTATE', '0', '1'),
(60, '2020-12-31 11:46:45', 'PLAY SCHOOL', '0', '1'),
(61, '2020-12-31 11:46:45', 'PET & PET CARE', '0', '0'),
(62, '2020-12-31 11:46:45', 'PEST CONTROL', '0', '1'),
(63, '2020-12-31 11:46:45', 'PERSONAL CARE', '0', '1'),
(64, '2020-12-31 11:46:45', 'PARTY', '0', '1'),
(65, '2020-12-31 11:46:45', 'PACKERS & MOVERS', '0', '1'),
(66, '2020-12-31 11:46:45', 'ON DEMAND SERVICE', '0', '1'),
(67, '2020-12-31 11:46:45', 'MODULAR KITCHEN', '0', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_job_post`
--

CREATE TABLE `tbl_job_post` (
  `job_id` int(11) NOT NULL,
  `create_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `company_id` varchar(255) NOT NULL,
  `job_title` varchar(255) NOT NULL,
  `num_of_position` varchar(255) NOT NULL,
  `classification` varchar(255) NOT NULL,
  `job_function` varchar(255) NOT NULL,
  `industry` varchar(255) NOT NULL,
  `exprience` varchar(255) NOT NULL,
  `edu_level` varchar(255) NOT NULL,
  `salary_from` varchar(255) NOT NULL,
  `salary_to` varchar(255) NOT NULL,
  `job_type` enum('0','1','2') NOT NULL COMMENT '0 = Full Time, 1= Part time, 2= Freelancer',
  `compen_from` varchar(255) NOT NULL,
  `compen_to` varchar(255) NOT NULL,
  `compen_info` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `zipcode` varchar(12) NOT NULL,
  `location_info` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `order_no` varchar(255) NOT NULL,
  `job_description` text NOT NULL,
  `skills` varchar(255) NOT NULL,
  `work_policy` enum('0','1','2') NOT NULL COMMENT '0- Office Work, 1- Remote Work',
  `exp_year` varchar(255) NOT NULL,
  `hr_name` varchar(255) NOT NULL,
  `hr_contact` varchar(255) NOT NULL,
  `exp_month` varchar(255) NOT NULL,
  `relocation-assist` varchar(255) NOT NULL,
  `visa_requirement` varchar(255) NOT NULL,
  `pre_screen_ques` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_job_post`
--

INSERT INTO `tbl_job_post` (`job_id`, `create_date`, `company_id`, `job_title`, `num_of_position`, `classification`, `job_function`, `industry`, `exprience`, `edu_level`, `salary_from`, `salary_to`, `job_type`, `compen_from`, `compen_to`, `compen_info`, `city`, `zipcode`, `location_info`, `state`, `country`, `order_no`, `job_description`, `skills`, `work_policy`, `exp_year`, `hr_name`, `hr_contact`, `exp_month`, `relocation-assist`, `visa_requirement`, `pre_screen_ques`, `status`) VALUES
(2, '2022-11-24 04:14:34', '1', 'Web designer', '3', '', '', '1', '3 year', 'High School', '200000', '400000', '0', '', '', '', 'Bhopal', '', '', '21', 'India', '', '<p>A PHP developer is responsible for writing server-side web application logic. PHP developers usually develop back-end components, connect the application with the other (often third-party) web services, and support the front-end developers by integrating their work with the application. They are also often required to develop and integrate plugins for certain popular frameworks.</p>', 'PHP, Codeigniter', '0', '', 'Sagar Thakur', '6265965711', '', '', '', '', '0');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_policy`
--

CREATE TABLE `tbl_policy` (
  `pid` int(11) NOT NULL,
  `create_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_date` datetime DEFAULT NULL,
  `policy` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_policy`
--

INSERT INTO `tbl_policy` (`pid`, `create_date`, `update_date`, `policy`) VALUES
(1, '2022-11-23 05:07:12', NULL, '<p>This is Privacy Policy....</p>'),
(2, '2022-11-23 05:08:21', NULL, '<p>This is Terms and condition</p>');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_recruiter_registration`
--

CREATE TABLE `tbl_recruiter_registration` (
  `recruiter_id` int(11) NOT NULL,
  `create_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `recruiter_name` varchar(255) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `country_code` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL,
  `company_size` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `firm_type` varchar(255) NOT NULL,
  `linkedin` varchar(255) NOT NULL,
  `domain` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `cpassword` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_recruiter_registration`
--

INSERT INTO `tbl_recruiter_registration` (`recruiter_id`, `create_date`, `recruiter_name`, `company_name`, `email`, `country_code`, `number`, `company_size`, `designation`, `country`, `state`, `city`, `firm_type`, `linkedin`, `domain`, `password`, `cpassword`) VALUES
(1, '2022-12-05 18:28:43', 'Recruiter sagar', 'webangeltech', 'sagarthakur6947@gmail.com', '91', '6265965711', '1-5', 'developer', 'India', 'Madhaya Pradesh', 'Nashik', 'Permanent Hiring', '', '1', 'sagar@11', 'sagar@11'),
(2, '2022-12-15 05:13:41', '', '', '', '', '', 'Select Company Size', '', 'Select Country', 'Select State', 'Select City', '', '', 'Domain (Choose a max of 10 Domains )', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_role`
--

CREATE TABLE `tbl_role` (
  `rid` int(11) NOT NULL,
  `create_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `role` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_role`
--

INSERT INTO `tbl_role` (`rid`, `create_date`, `role`) VALUES
(1, '2022-11-18 15:57:47', 'Data scientist'),
(2, '2022-11-18 15:57:47', 'Data analyst'),
(3, '2022-11-18 15:57:47', 'Business analyst'),
(4, '2022-11-18 15:57:47', 'Web designer'),
(5, '2022-11-18 15:57:47', 'Quality assurance engineer'),
(6, '2022-11-18 15:57:47', 'Server engineer'),
(7, '2022-11-18 15:57:47', 'Software engineer'),
(8, '2022-11-18 15:57:47', 'Data warehouse architect'),
(9, '2022-11-18 15:57:47', 'SQL developer'),
(10, '2022-11-18 15:57:47', 'Full-stack developer'),
(11, '2022-11-18 15:57:47', 'Database administrator'),
(12, '2022-11-18 15:57:47', 'Database developer'),
(13, '2022-11-18 15:57:47', 'Software consultant'),
(14, '2022-11-18 15:57:47', 'Other'),
(15, '2023-01-22 09:36:28', 'Human Resources');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_saved_job`
--

CREATE TABLE `tbl_saved_job` (
  `save_id` int(11) NOT NULL,
  `create_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `job_id` varchar(255) NOT NULL,
  `candidate_id` varchar(255) NOT NULL,
  `recruiter_id` varchar(255) NOT NULL,
  `panel` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_saved_job`
--

INSERT INTO `tbl_saved_job` (`save_id`, `create_date`, `job_id`, `candidate_id`, `recruiter_id`, `panel`) VALUES
(17, '2022-11-30 06:46:03', '2', '15', '', ''),
(37, '2023-01-02 11:42:21', '2', '4', '', ''),
(38, '2023-01-04 00:16:16', '2', '6', '', ''),
(45, '2023-02-04 18:46:31', '2', '2', '', '0');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_size`
--

CREATE TABLE `tbl_size` (
  `size_id` int(11) NOT NULL,
  `create_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `size_num` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_size`
--

INSERT INTO `tbl_size` (`size_id`, `create_date`, `size_num`) VALUES
(1, '2022-10-20 16:33:39', '5-10'),
(2, '2022-10-20 16:33:58', '11-20'),
(3, '2022-10-20 16:34:27', '21-40'),
(4, '2022-10-20 16:34:27', '41-70'),
(5, '2022-10-20 16:35:11', '71-100'),
(6, '2022-10-20 16:35:11', '100+');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_social_links`
--

CREATE TABLE `tbl_social_links` (
  `sid` int(11) NOT NULL,
  `create_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_date` datetime DEFAULT NULL,
  `facebook` varchar(255) NOT NULL,
  `instagram` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `linkedin` varchar(255) NOT NULL,
  `telegram` varchar(255) NOT NULL,
  `youtube` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_social_links`
--

INSERT INTO `tbl_social_links` (`sid`, `create_date`, `update_date`, `facebook`, `instagram`, `twitter`, `linkedin`, `telegram`, `youtube`) VALUES
(1, '2022-11-23 05:03:32', NULL, 'facebook.com/hirbox', 'instagram.com/hirbox', 'facebook.com/twitter', 'facebook.com/linkedin', 'facebook.com/telegram', 'facebook.com/youtube');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_state`
--

CREATE TABLE `tbl_state` (
  `state_id` int(11) NOT NULL,
  `state_name` varchar(30) NOT NULL,
  `country_id` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_state`
--

INSERT INTO `tbl_state` (`state_id`, `state_name`, `country_id`) VALUES
(1, 'Andaman and Nicobar Islands', 101),
(2, 'Andhra Pradesh', 101),
(3, 'Arunachal Pradesh', 101),
(4, 'Assam', 101),
(5, 'Bihar', 101),
(6, 'Chandigarh', 101),
(7, 'Chhattisgarh', 101),
(8, 'Dadra and Nagar Haveli', 101),
(9, 'Daman and Diu', 101),
(10, 'Delhi', 101),
(11, 'Goa', 101),
(12, 'Gujarat', 101),
(13, 'Haryana', 101),
(14, 'Himachal Pradesh', 101),
(15, 'Jammu and Kashmir', 101),
(16, 'Jharkhand', 101),
(17, 'Karnataka', 101),
(18, 'Kenmore', 101),
(19, 'Kerala', 101),
(20, 'Lakshadweep', 101),
(21, 'Madhya Pradesh', 101),
(22, 'Maharashtra', 101),
(23, 'Manipur', 101),
(24, 'Meghalaya', 101),
(25, 'Mizoram', 101);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_technologies`
--

CREATE TABLE `tbl_technologies` (
  `tid` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_technologies`
--

INSERT INTO `tbl_technologies` (`tid`, `name`) VALUES
(1, 'Javascript'),
(2, 'Python'),
(3, 'Go'),
(4, 'Java'),
(5, 'Kotlin'),
(6, 'PHP'),
(7, 'C#'),
(8, 'Swift'),
(9, 'R'),
(10, 'Ruby'),
(11, 'C'),
(12, 'C++'),
(13, 'Matlab'),
(14, 'TypeScript'),
(15, 'Scala');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tbl_applied_candidate`
--
ALTER TABLE `tbl_applied_candidate`
  ADD PRIMARY KEY (`acid`);

--
-- Indexes for table `tbl_candidate_academic`
--
ALTER TABLE `tbl_candidate_academic`
  ADD PRIMARY KEY (`ace_id`);

--
-- Indexes for table `tbl_candidate_experience`
--
ALTER TABLE `tbl_candidate_experience`
  ADD PRIMARY KEY (`exp_id`);

--
-- Indexes for table `tbl_candidate_registration`
--
ALTER TABLE `tbl_candidate_registration`
  ADD PRIMARY KEY (`candidate_id`);

--
-- Indexes for table `tbl_cities`
--
ALTER TABLE `tbl_cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_company_members`
--
ALTER TABLE `tbl_company_members`
  ADD PRIMARY KEY (`member_id`);

--
-- Indexes for table `tbl_company_registration`
--
ALTER TABLE `tbl_company_registration`
  ADD PRIMARY KEY (`company_id`);

--
-- Indexes for table `tbl_contact_details`
--
ALTER TABLE `tbl_contact_details`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `tbl_country`
--
ALTER TABLE `tbl_country`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_currency`
--
ALTER TABLE `tbl_currency`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `tbl_industries`
--
ALTER TABLE `tbl_industries`
  ADD PRIMARY KEY (`cate_id`);

--
-- Indexes for table `tbl_job_post`
--
ALTER TABLE `tbl_job_post`
  ADD PRIMARY KEY (`job_id`);

--
-- Indexes for table `tbl_policy`
--
ALTER TABLE `tbl_policy`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `tbl_recruiter_registration`
--
ALTER TABLE `tbl_recruiter_registration`
  ADD PRIMARY KEY (`recruiter_id`);

--
-- Indexes for table `tbl_role`
--
ALTER TABLE `tbl_role`
  ADD PRIMARY KEY (`rid`);

--
-- Indexes for table `tbl_saved_job`
--
ALTER TABLE `tbl_saved_job`
  ADD PRIMARY KEY (`save_id`);

--
-- Indexes for table `tbl_size`
--
ALTER TABLE `tbl_size`
  ADD PRIMARY KEY (`size_id`);

--
-- Indexes for table `tbl_social_links`
--
ALTER TABLE `tbl_social_links`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `tbl_state`
--
ALTER TABLE `tbl_state`
  ADD PRIMARY KEY (`state_id`);

--
-- Indexes for table `tbl_technologies`
--
ALTER TABLE `tbl_technologies`
  ADD PRIMARY KEY (`tid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_applied_candidate`
--
ALTER TABLE `tbl_applied_candidate`
  MODIFY `acid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `tbl_candidate_academic`
--
ALTER TABLE `tbl_candidate_academic`
  MODIFY `ace_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_candidate_experience`
--
ALTER TABLE `tbl_candidate_experience`
  MODIFY `exp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_candidate_registration`
--
ALTER TABLE `tbl_candidate_registration`
  MODIFY `candidate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `tbl_cities`
--
ALTER TABLE `tbl_cities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tbl_company_members`
--
ALTER TABLE `tbl_company_members`
  MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_company_registration`
--
ALTER TABLE `tbl_company_registration`
  MODIFY `company_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tbl_contact_details`
--
ALTER TABLE `tbl_contact_details`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_country`
--
ALTER TABLE `tbl_country`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=240;

--
-- AUTO_INCREMENT for table `tbl_currency`
--
ALTER TABLE `tbl_currency`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;

--
-- AUTO_INCREMENT for table `tbl_industries`
--
ALTER TABLE `tbl_industries`
  MODIFY `cate_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `tbl_job_post`
--
ALTER TABLE `tbl_job_post`
  MODIFY `job_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_policy`
--
ALTER TABLE `tbl_policy`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_recruiter_registration`
--
ALTER TABLE `tbl_recruiter_registration`
  MODIFY `recruiter_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_role`
--
ALTER TABLE `tbl_role`
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tbl_saved_job`
--
ALTER TABLE `tbl_saved_job`
  MODIFY `save_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `tbl_size`
--
ALTER TABLE `tbl_size`
  MODIFY `size_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_social_links`
--
ALTER TABLE `tbl_social_links`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_state`
--
ALTER TABLE `tbl_state`
  MODIFY `state_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tbl_technologies`
--
ALTER TABLE `tbl_technologies`
  MODIFY `tid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
