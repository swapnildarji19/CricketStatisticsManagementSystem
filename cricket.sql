-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 21, 2019 at 03:45 PM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cricket`
--

-- --------------------------------------------------------

--
-- Table structure for table `coach`
--

DROP TABLE IF EXISTS `coach`;
CREATE TABLE IF NOT EXISTS `coach` (
  `c_id` varchar(30) NOT NULL,
  `c_name` varchar(30) NOT NULL,
  `c_role` varchar(30) NOT NULL,
  `t_id` varchar(30) NOT NULL,
  PRIMARY KEY (`c_id`),
  KEY `t_id` (`t_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coach`
--

INSERT INTO `coach` (`c_id`, `c_name`, `c_role`, `t_id`) VALUES
('c1', 'Ravi Shastri', 'Bat', 'MI'),
('c2', 'Stephan Fleming', 'bat ', 'CSK');

-- --------------------------------------------------------

--
-- Table structure for table `matches`
--

DROP TABLE IF EXISTS `matches`;
CREATE TABLE IF NOT EXISTS `matches` (
  `day` date NOT NULL,
  `time` varchar(6) NOT NULL,
  `t_1` varchar(3) NOT NULL,
  `t_2` varchar(3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `matches`
--

INSERT INTO `matches` (`day`, `time`, `t_1`, `t_2`) VALUES
('2019-04-01', '3PM', 'MI', 'CSK');

-- --------------------------------------------------------

--
-- Table structure for table `player`
--

DROP TABLE IF EXISTS `player`;
CREATE TABLE IF NOT EXISTS `player` (
  `p_id` varchar(30) NOT NULL,
  `p_name` varchar(30) NOT NULL,
  `p_age` varchar(30) NOT NULL,
  `p_role` varchar(30) NOT NULL,
  `p_bat` varchar(30) NOT NULL,
  `p_bowl` varchar(30) NOT NULL,
  `t_id` varchar(30) NOT NULL,
  PRIMARY KEY (`p_id`),
  KEY `t_id` (`t_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `player`
--

INSERT INTO `player` (`p_id`, `p_name`, `p_age`, `p_role`, `p_bat`, `p_bowl`, `t_id`) VALUES
('cs1', 'MS Dhoni', '37', 'wic', '4000', '0', 'CSK'),
('cs2', 'Dwanye Bravo', '38', 'all', '2500', '65', 'CSK'),
('cs3', 'Suresg Raina', '34', 'bat', '5000', '15', 'CSK'),
('m1', 'Rohit Sharma', '30', 'Bat', '4500', '20', 'MI'),
('m2', 'Lasith Malinga', '35', 'bowl', '500', '150', 'MI'),
('m3', 'Jasprit Bumrah', '26', 'bowl', '100', '80', 'MI'),
('sr1', 'David Warner', '33', 'bat', '4500', '10', 'SRH'),
('sr2', 'Kane Williamson', '34', 'bat', '3000', '5', 'SRH'),
('sr3', 'Bhuvneshwar Kumar', '35', 'bowl', '500', '125', 'SRH');

-- --------------------------------------------------------

--
-- Table structure for table `sponser`
--

DROP TABLE IF EXISTS `sponser`;
CREATE TABLE IF NOT EXISTS `sponser` (
  `s_id` varchar(30) NOT NULL,
  `s_name` varchar(30) NOT NULL,
  `s_amt` varchar(30) NOT NULL,
  `t_id` varchar(30) NOT NULL,
  PRIMARY KEY (`s_id`),
  KEY `t_id` (`t_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sponser`
--

INSERT INTO `sponser` (`s_id`, `s_name`, `s_amt`, `t_id`) VALUES
('1a', 'Reliance', '500000', 'MI'),
('1b', 'Jio', '10000', 'MI');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

DROP TABLE IF EXISTS `team`;
CREATE TABLE IF NOT EXISTS `team` (
  `t_id` varchar(30) NOT NULL,
  `t_name` varchar(30) NOT NULL,
  `t_rank` varchar(30) NOT NULL,
  `t_location` varchar(30) NOT NULL,
  PRIMARY KEY (`t_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`t_id`, `t_name`, `t_rank`, `t_location`) VALUES
('CSK', 'Chennai Super Kings', '2', 'Chennai'),
('DD', 'Delhi Daredevils', '6', 'Delhi'),
('KKR', 'Kolkata Knight Riders', '4', 'Kolkata'),
('MI', 'Mumbai Indians', '1', 'Mumbai'),
('RR', 'Rajasthan Royals', '5', 'Rajasthan'),
('SRH', 'Sunrisers Hyderabad', '3', 'Hyderabad');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `coach`
--
ALTER TABLE `coach`
  ADD CONSTRAINT `coach_ibfk_1` FOREIGN KEY (`t_id`) REFERENCES `team` (`t_id`);

--
-- Constraints for table `player`
--
ALTER TABLE `player`
  ADD CONSTRAINT `t_id` FOREIGN KEY (`t_id`) REFERENCES `team` (`t_id`);

--
-- Constraints for table `sponser`
--
ALTER TABLE `sponser`
  ADD CONSTRAINT `sponser_ibfk_1` FOREIGN KEY (`t_id`) REFERENCES `team` (`t_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
