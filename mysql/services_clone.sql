-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 21, 2022 at 08:31 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `services_clone`
--

-- --------------------------------------------------------

--
-- Table structure for table `service_descriptions`
--

CREATE TABLE `service_descriptions` (
  `description` text NOT NULL,
  `service_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service_descriptions`
--

INSERT INTO `service_descriptions` (`description`, `service_id`) VALUES
('• Market and demographic evaluations including club surveys & industry trends <br>\r\n• Services pricing and compensation recommendations <br>\r\n•Industry research and benchmarking studies', 1),
('- Survey, trend analyses and demographics determination of wellness programs and services<br>\r\n- Customization of programs and services for your specific club demographics to include:<br>\r\n•Fitness and Movement Options<br>\r\n•Mental Health and Wellbeing<br>\r\n•Optimal Nutrition<br>\r\n•Relaxation and Recovery<br>\r\n•Beauty and Self Care', 2),
('•Research and feasibility studies to develop a unique, customized wellness concept for the club<br>\r\n•Assist with committee, board and member presentations<br>\r\n•Collaborate on facility design and space planning<br>\r\n•Recommendations for Best-in-Class equipment vendors, proposals and layout options & competitive pricing bids<br>\r\n•Marketing, events and staff and member education', 3),
('•Operational budget projections<br>\r\n•Capital budget development<br>\r\n•Software and operational tools recommendations<br>\r\n•Equipment leasing versus purchasing analysis<br>\r\n•Propose most efficient and effective operational structure and standard operating procedures', 4),
('•Identify the staffing model that best meets club objectives<br>\r\n•Recruiting and job placement for key professional positions<br>\r\n•Grand opening launch with program and services introduction to the membership<br>\r\n•Coaching and mentoring for staff and management', 5),
('•Ongoing education, support and networking facilitated by Club Wellness Consultants in conjunction with Allied Industry Associations<br>\r\n•Annual Performance Evaluation to include all aspects of the operations: staff, programs, equipment, member satisfaction and target budget vs actuals<br>\r\n•Target operational budget vs actuals performance data<br>\r\n•Industry Trends Updates', 6);

-- --------------------------------------------------------

--
-- Table structure for table `service_titles`
--

CREATE TABLE `service_titles` (
  `id` int(11) NOT NULL,
  `service` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service_titles`
--

INSERT INTO `service_titles` (`id`, `service`) VALUES
(1, 'Competitive Analysis and Trend Data'),
(2, 'Wellness Programs & Services'),
(3, 'Initial Concepts and Project Design'),
(4, 'Operations & Budget Planning'),
(5, 'Staffing Models & Compensation'),
(6, 'Strategic Planning & Future Initiatives');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `service_descriptions`
--
ALTER TABLE `service_descriptions`
  ADD PRIMARY KEY (`service_id`);

--
-- Indexes for table `service_titles`
--
ALTER TABLE `service_titles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `service_titles`
--
ALTER TABLE `service_titles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `service_descriptions`
--
ALTER TABLE `service_descriptions`
  ADD CONSTRAINT `service_descriptions_ibfk_1` FOREIGN KEY (`service_id`) REFERENCES `service_titles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
