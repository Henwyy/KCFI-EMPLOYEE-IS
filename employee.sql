-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2022 at 05:35 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `employee`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `pword` varchar(65) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `uname`, `pword`) VALUES
(1, 'Juan Dela Cruz', 'admin@gmail.com', '$2y$10$Uq8znSVfYUBAiRa83taR/e6KIDHL0dPdLIqbsbQunQrQF/TbRtJse');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `emp_id` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `mname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `position` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `work_status` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `department` varchar(100) NOT NULL,
  `date_hired` date NOT NULL,
  `emp_status` varchar(100) NOT NULL,
  `date_regular` date NOT NULL,
  `length_service` varchar(100) NOT NULL,
  `date_birth` date NOT NULL,
  `rice_subsidy` varchar(100) NOT NULL,
  `ecc_share` varchar(100) NOT NULL,
  `sss` varchar(100) NOT NULL,
  `philhealth` varchar(100) NOT NULL,
  `pagibig` varchar(100) NOT NULL,
  `hip` varchar(100) NOT NULL,
  `dependents` varchar(100) NOT NULL,
  `group_life_premium` varchar(100) NOT NULL,
  `group_life_coverage` varchar(100) NOT NULL,
  `hmo` varchar(100) NOT NULL,
  `sss_num` varchar(100) NOT NULL,
  `philhealth_num` varchar(100) NOT NULL,
  `pagibig_num` varchar(100) NOT NULL,
  `tin_num` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `bank_account` varchar(100) NOT NULL,
  `emergency_name` varchar(100) NOT NULL,
  `relationship` varchar(100) NOT NULL,
  `emergency_contact` varchar(100) NOT NULL,
  `spouse` varchar(100) NOT NULL,
  `children` varchar(100) NOT NULL,
  `father` varchar(100) NOT NULL,
  `mother` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `provincial_address` varchar(100) NOT NULL,
  `resignation_date` date NOT NULL,
  `photo` varchar(200) NOT NULL,
  `date_added` datetime NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`emp_id`, `fname`, `mname`, `lname`, `position`, `gender`, `work_status`, `email`, `department`, `date_hired`, `emp_status`, `date_regular`, `length_service`, `date_birth`, `rice_subsidy`, `ecc_share`, `sss`, `philhealth`, `pagibig`, `hip`, `dependents`, `group_life_premium`, `group_life_coverage`, `hmo`, `sss_num`, `philhealth_num`, `pagibig_num`, `tin_num`, `contact`, `bank_account`, `emergency_name`, `relationship`, `emergency_contact`, `spouse`, `children`, `father`, `mother`, `address`, `provincial_address`, `resignation_date`, `photo`, `date_added`, `status`) VALUES
(10002, 'fname', 'mname', 'lname', 'posi', 'Male', 'Resigned', 'lllandera@gmail.com', 'Finance, Admin, HR', '2022-03-07', 'Contractual', '2022-03-08', 'ser', '2022-03-22', 'rice', 'ecc', 'sss', 'phil', 'pagi', 'hel', 'deps', 'prem', 'cove', 'hmo', 'sss', 'phil', 'pagi', 'tin', 'cont', 'bank', 'emr', 'rel', 'cont', 'spo', 'chil', 'fath', 'moth', 'address', 'prov', '2022-03-29', '16488116091177460926246de59c8237', '2022-03-30 06:18:34', 1),
(10006, 'DWA', 'DAWDAW', 'DAW', 'WDAW', 'Male', 'Active', 'dwadaw@dwadw', 'Finance, Admin, HR', '2022-03-01', 'Probationary', '2022-03-07', 'DAWDAW', '2022-03-29', 'WDA', 'DAWD', 'WDA', 'WDA', 'WDA', 'WDA', 'WDA', 'WDAWDA', 'WDAWDA', 'WDA', 'WDA', 'WDA', 'WDA', 'WDA', 'WDA', 'WDA', 'WDA', 'WDA', 'WDA', 'WDA', 'WDA', 'WDA', 'WDA', 'WDA', 'WDA', '2022-03-28', '164865921125670196162448b0bdd0bd', '2022-03-31 00:48:47', 1);

-- --------------------------------------------------------

--
-- Table structure for table `intern`
--

CREATE TABLE `intern` (
  `intern_id` int(11) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `mname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `int_status` varchar(100) NOT NULL,
  `university` varchar(100) NOT NULL,
  `start_date` varchar(100) NOT NULL,
  `hours` varchar(100) NOT NULL,
  `department` varchar(100) NOT NULL,
  `resume_link` varchar(100) NOT NULL,
  `portfolio` varchar(100) NOT NULL,
  `moa` varchar(100) NOT NULL,
  `agreement` varchar(100) NOT NULL,
  `waiver` varchar(100) NOT NULL,
  `status` int(11) NOT NULL,
  `date_added` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `intern`
--

INSERT INTO `intern` (`intern_id`, `photo`, `fname`, `mname`, `lname`, `int_status`, `university`, `start_date`, `hours`, `department`, `resume_link`, `portfolio`, `moa`, `agreement`, `waiver`, `status`, `date_added`) VALUES
(10001, '16488120116247970096246dfeb7d900', 'Dennise', 'De Guzman', 'Vidar', 'Active', 'Cavite State University', '2022-04-01', '2', 'Content and Production', '2', 'N/A', '16488120355259474856246e00309366', '164881203511895794446246e0030992d', '164881203515608638496246e00309dcd', 1, '2022-04-01 18:30:33'),
(10002, '164880933318723339036246d575248bf', 'Dennis', 'De Guzman', 'Vidar', 'Active', 'university', '2022-04-01', '0', 'Finance, Admin, HR', 'res', 'N/A', '16488093334031672506246d57521fcf', '164880933311336728046246d575245b0', '164880933313507897386246d5752474a', 1, '2022-04-01 18:35:33'),
(10003, '1648809367272392646246d59797921', 'ad', 'wd', 'dawsd', 'Done', 'asd', '2022-04-01', '0', 'Finance, Admin, HR', 'res', 'por', '16488093676328584766246d597951cd', '164880936715825885796246d5979747e', '16488093679082162436246d59797697', 1, '2022-04-01 18:36:07'),
(10005, '1648906977292697978624852e194b96', 'e', 'e', 'e', 'Done', 'e', '2022-04-02', '0', 'Finance, Admin, HR', '0', 'e', 'https://www.youtube.com/', 'https://www.youtube.com/', 'https://www.youtube.com/', 1, '2022-04-02 21:42:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indexes for table `intern`
--
ALTER TABLE `intern`
  ADD PRIMARY KEY (`intern_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `emp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10007;

--
-- AUTO_INCREMENT for table `intern`
--
ALTER TABLE `intern`
  MODIFY `intern_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10006;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
