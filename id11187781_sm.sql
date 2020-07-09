-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 09, 2020 at 06:13 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id11187781_sm`
--

-- --------------------------------------------------------

--
-- Table structure for table `11`
--

CREATE TABLE `11` (
  `de` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `file1`
--

CREATE TABLE `file1` (
  `filename` varchar(100) NOT NULL,
  `foldername` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `file1`
--

INSERT INTO `file1` (`filename`, `foldername`) VALUES
('IA-1-Solution by Mandar Sir.pdf', 'shubhz'),
('Question Bank.pdf', 'shubhz'),
('MP MAY 2019 SOLUTION.pdf', 'shubhz'),
('MP-IA1_SOL_2018.pdf', 'shubhz'),
('MP IA 1 Notebook by Arya Tadwalkar.pdf', 'shubhz'),
('sql queries.pdf', 'shubhz'),
('Relational Algebra Queries Example 2.pdf', 'shubhz'),
('Relational Algebra Queries Example.pdf', 'shubhz'),
('DBMS by Shrishti Agrawal.pdf', 'shubhz'),
('Chapter2_ER Model.pdf', 'shubhz'),
('Chapter2_ER Model.pdf', 'shubhz'),
('11', '22'),
('11', 'shubhz'),
('sql queries.pdf', 'qwre'),
('Relational Algebra Queries Example 2.pdf', 'qwre'),
('sql queries.pdf', 'qwre'),
('DBMS by Shrishti Agrawal.pdf', 'qwre'),
('dbms notebook (1).pdf', 'qwre'),
('Financial Sample.xlsx', 'shubhz'),
('sample.doc', 'shubhz'),
('MUMBAI UNIVERCITY.pdf', 'Street Mart1'),
('result Sem3.jpg', 'Street Mart1'),
('admission.pdf', 'Official Official Offic'),
('MUMBAI UNIVERCITY.pdf', 'Official Official Offic'),
('photo.jpg', ''),
('MyAadhar Pass SHUB1998.pdf', ''),
('MUMBAI UNIVERCITY.pdf', ''),
('Img985.jpg', ''),
('Signature.jpg', ''),
('Annul.jpg', '$b'),
('Screenshot from 2019-07-01 13-10-32.png', ''),
('Img985.jpg', ''),
('admission.pdf', ''),
('admission.pdf', ''),
('result Sem 4.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `Folder1`
--

CREATE TABLE `Folder1` (
  `fn` varchar(150) NOT NULL,
  `fd` varchar(300) NOT NULL,
  `path1` varchar(300) NOT NULL,
  `id` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Folder1`
--

INSERT INTO `Folder1` (`fn`, `fd`, `path1`, `id`) VALUES
('Street Mart1', 'Street Market Official 1 Street Market Official 1 ', 'files/Street Mart1', 'admin'),
('Street Mart3', ' Street Market Official 1 Street Market Official 1', 'files/Street Mart3', 'admin'),
('Street Mart4', 'Street Market Official 1 Street Market Official 1', 'files/Street Mart4', 'admin'),
('team1 team1 team1 team1', 'team1 team1 team1 team1 team1 team1 team1 team1 ', 'files/team1 team1 team1 team1', 'admin'),
('Street Market Offi 1111', 'Street Market Official 1Street Market Official 1', 'files/Street Market Offi 1111', 'admin'),
('Street Market 12334 ', 'Street Market Official 1 Street Market Official 1', 'files/Street Market 12334 ', 'admin'),
('Folder Create Success 1', 'Folder Create Successfully! Folder Create Successf', 'files/Folder Create Success 1', 'admin'),
('Official Official Offic', 'OfficialOfficialOfficialOfficialOfficialOfficial', 'files/Official Official Offic', 'admin'),
('Street Market Offi16', 'Street Market Offi12Street Market Offi12', 'files/Street Market Offi16', '18102c2059');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` varchar(20) NOT NULL,
  `pass` varchar(40) NOT NULL,
  `name` varchar(70) NOT NULL,
  `email` varchar(100) NOT NULL,
  `role` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `pass`, `name`, `email`, `role`) VALUES
('admin', '123', 'shubham wagh', 'waghshubham84@gmail.com', 'head'),
('fdg', 'esf', 'sfdg', '', 'Choose'),
('admin1', '123', 'abc', 'waghshubham84@gmail.com', 'head'),
('18102c2059', '123', 'abc', 'waghshubham84@gmail.com', 'head');

-- --------------------------------------------------------

--
-- Table structure for table `shubhz`
--

CREATE TABLE `shubhz` (
  `filename` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
