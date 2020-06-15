-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2020 at 09:49 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jobportal`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adm_id` int(20) NOT NULL,
  `adm_name` varchar(100) NOT NULL,
  `adm_pass` varchar(100) NOT NULL,
  `adm_type` varchar(20) DEFAULT NULL,
  `adm_phone` int(20) DEFAULT NULL,
  `gender` varchar(20) NOT NULL,
  `adm_email` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adm_id`, `adm_name`, `adm_pass`, `adm_type`, `adm_phone`, `gender`, `adm_email`) VALUES
(1, 'admin', 'password', 'admin', 1980058647, 'male', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `application`
--

CREATE TABLE `application` (
  `apply_id` int(20) NOT NULL,
  `user_id` int(20) DEFAULT NULL,
  `emp_id` int(20) DEFAULT NULL,
  `job_id` int(20) DEFAULT NULL,
  `status` int(20) DEFAULT NULL,
  `date_applied` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `application`
--

INSERT INTO `application` (`apply_id`, `user_id`, `emp_id`, `job_id`, `status`, `date_applied`) VALUES
(1, 41, 1, 1, NULL, '08-01-20'),
(2, 41, 1, 2, NULL, '08-01-20'),
(3, 41, 1, 3, NULL, '08-01-20');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `eid` int(20) NOT NULL,
  `log_id` int(20) NOT NULL,
  `ename` varchar(100) DEFAULT NULL,
  `etype` varchar(100) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `location` varchar(200) DEFAULT NULL,
  `logo` varchar(50) DEFAULT NULL,
  `description` varchar(700) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`eid`, `log_id`, `ename`, `etype`, `address`, `phone`, `location`, `logo`, `description`) VALUES
(4, 32, 'Bashundhara Group', 'Company', '221b Baker Street.', '01980058647', NULL, 'Bashundhara Group1.jpg', NULL),
(2, 34, 'Backspace', 'Company', 'LA Galaxy', '01856215485', NULL, NULL, NULL),
(1, 43, 'Eusha Modon', 'Company', 'Updated', '21131343', NULL, NULL, NULL),
(3, 47, 'Super Admin', 'Company', 'Dhaka', '0120391285', NULL, NULL, NULL),
(5, 49, 'New Comp', 'Company', '221B Baker.', '0120391285', NULL, 'New Comp5.png', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `jobid` int(20) NOT NULL,
  `eid` int(20) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `jobdesc` varchar(700) NOT NULL,
  `vacno` int(20) DEFAULT NULL,
  `experience` varchar(100) DEFAULT NULL,
  `basicpay` varchar(100) DEFAULT NULL,
  `fnarea` varchar(100) DEFAULT NULL,
  `location` varchar(200) DEFAULT NULL,
  `industry` varchar(200) DEFAULT NULL,
  `ugqual` varchar(100) DEFAULT NULL,
  `pgqual` varchar(100) DEFAULT NULL,
  `profile` varchar(700) DEFAULT NULL,
  `postdate` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`jobid`, `eid`, `title`, `jobdesc`, `vacno`, `experience`, `basicpay`, `fnarea`, `location`, `industry`, `ugqual`, `pgqual`, `profile`, `postdate`) VALUES
(1, 1, 'Interactive Research and Development', 'We deliver a comprehensive continuum of care for mothers, newborns and children by expanding the coverage of high-impact, life-saving interventions. We intertwine technology with health service delivery particularly to increase the coverage of routine immunization and transform the vaccine delivery system.', 1, '1', 'BDT 25000', 'Badvel', 'Dhaka', 'Agriculture/Dairy Technology', 'BCA', 'M.Ed', 'Awesome.', '08-01-20'),
(2, 1, 'Professional cinematographer', 'The term “videographer” came into common vernacular as a way to describe an individual who works in videography or video production, as opposed to film production. This means that a cinematographer works with film stock and a videographer works with video.', 4, '2', 'Rs 259', 'dhaka', NULL, 'Accounting/Consulting/Taxation', 'B.Sc', 'M.Ed', 'eta bhalo.', '08-01-20'),
(3, 1, 'Wordpress Developer Needed', 'Simply a WordPress theme is a complete design for a website.  It includes all of the things that we typically associate with web design. From colors selection to headers, footers, and sidebar positioning. Through its stylesheet, a WordPress theme controls everything related to typography â€” including font face, font style, margins and indentation, and line spacing.\r\nItâ€™s a messy collection of the files and folders. Some of those happens to be wordpress templates.\r\nSimply a WordPress theme is a complete design for a website.  It includes all of the things that we typically associate with web design. From colors selection to headers, footers, and sidebar positioning. Through its stylesheet,', 9, '2', 'Rs 2500', 'Noapara', NULL, 'Airlines/Hotel/Hospitality/Travel/Tourism/Restaurants', 'B.Tech/B.E.', 'M.Com', 'SSC', '08-01-20'),
(4, 1, 'Looking for a female representative', 'Mama Noodles is also looking for a female candidate to work on an ongoing campaign at Unimart for 2 to 3 weeks.\r\n\r\nApproximate time 10 a.m. to 7 p.m.\r\n**compensation will be given**\r\n\r\nIf you are interested, kindly inbox me.', 9, '2', 'USD 245', 'Dhaka', NULL, 'Cement/Construction/Engineering/Metals/Steel/Iron', 'LLB', 'M.Ed', 'Post', '10-02-20'),
(5, 1, 'Internship Opportunity at Nestle', 'Requirements:\r\n\r\n>Major in Finance/ Marketing/ Economics/ Statistics\r\n\r\n>Minimum CGPA 3.20\r\n\r\n>Should have sufficient knowledge MS Excel and MS PowerPoint.\r\n\r\nInterested candidates matching with the below requirements are requested to share CVs at saeef.Iqbal@bd.nestle.com as soon as possible', 3, '2', 'USD 34235', 'Sunny', NULL, 'Animation / Gaming', 'B.B.A', 'MS', 'Industries', '26-02-20');

-- --------------------------------------------------------

--
-- Table structure for table `jobseeker`
--

CREATE TABLE `jobseeker` (
  `user_id` int(20) NOT NULL,
  `log_id` int(20) DEFAULT NULL,
  `name` varchar(100) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `experience` varchar(100) DEFAULT NULL,
  `skills` varchar(100) DEFAULT NULL,
  `basic_edu` varchar(100) DEFAULT NULL,
  `master_edu` varchar(100) DEFAULT NULL,
  `Resume` varchar(100) DEFAULT NULL,
  `photo` varchar(200) DEFAULT NULL,
  `location` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobseeker`
--

INSERT INTO `jobseeker` (`user_id`, `log_id`, `name`, `phone`, `experience`, `skills`, `basic_edu`, `master_edu`, `Resume`, `photo`, `location`) VALUES
(48, 51, 'New Jobseeker', '01928393879', '5', 'Good Boyo', 'B.Sc', 'M.Tech', NULL, 'New Jobseeker48.jpg', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `log_id` int(20) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(250) DEFAULT NULL,
  `usertype` varchar(20) NOT NULL,
  `status` int(1) DEFAULT NULL,
  `vkey` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`log_id`, `email`, `password`, `usertype`, `status`, `vkey`) VALUES
(43, 'superadmin@gmail.com', '$2y$10$Ez.ll.PwFYJemY382ywsrOyE8TvNog1QjGW/JLE16/Qxu9LxpZjUG', 'company', 0, NULL),
(48, 'testing@gmail.com', '$2y$10$T22dEURtkRBmqu10eNDoGe4243cYJiwqj.ioISXJIVgeI0SRicLJ2', 'jobseeker', 1, NULL),
(49, 'newcomp@gmail.com', '$2y$10$7kinbeyidKsQPfpGxltjReO8eEoe87eo4WeMZxJZXdP89jcgyq/Xm', 'company', 0, NULL),
(51, 'newjobseeker@gmail.com', '$2y$10$CwePQl2lkZVpjFWmZVg2QeTXk3asw7RtcUG4LAImOnyky5TWpZtUK', 'jobseeker', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `selection`
--

CREATE TABLE `selection` (
  `sel_id` int(20) NOT NULL,
  `user_id` int(20) DEFAULT NULL,
  `emp_id` int(20) DEFAULT NULL,
  `job_id` int(20) DEFAULT NULL,
  `status` int(5) DEFAULT NULL,
  `date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `selection`
--

INSERT INTO `selection` (`sel_id`, `user_id`, `emp_id`, `job_id`, `status`, `date`) VALUES
(1, 41, 1, 1, 1, '08-01-20'),
(2, 41, 1, 4, 1, '10-02-20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `application`
--
ALTER TABLE `application`
  ADD PRIMARY KEY (`apply_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `emp_id` (`emp_id`),
  ADD KEY `job_id` (`job_id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`jobid`),
  ADD KEY `eid` (`eid`);

--
-- Indexes for table `jobseeker`
--
ALTER TABLE `jobseeker`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `log_id` (`log_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`log_id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `log_id` (`log_id`),
  ADD KEY `log_id_2` (`log_id`);

--
-- Indexes for table `selection`
--
ALTER TABLE `selection`
  ADD PRIMARY KEY (`sel_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `emp_id` (`emp_id`),
  ADD KEY `job_id` (`job_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `application`
--
ALTER TABLE `application`
  MODIFY `apply_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `jobid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `jobseeker`
--
ALTER TABLE `jobseeker`
  MODIFY `user_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `log_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT for table `selection`
--
ALTER TABLE `selection`
  MODIFY `sel_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
