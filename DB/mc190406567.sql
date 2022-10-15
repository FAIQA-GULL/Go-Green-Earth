-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2021 at 08:44 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mc190406567`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`name`, `email`, `pass`) VALUES
('Nasir', 'mc190406567@vu.edu.pk', '123456'),
('mcsm-f19-091', 'mcsm-f19-091@superior.edu.pk', '7581'),
('ronnien', 'ronniengoda@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `destric`
--

CREATE TABLE `destric` (
  `name` varchar(50) NOT NULL,
  `prov` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `destric`
--

INSERT INTO `destric` (`name`, `prov`) VALUES
('Muzaffargarh', 'Punjab'),
('Kot Radha kishan', 'Punjab'),
('Karachi', 'Sindh'),
('Bahawalnagar District', 'Punjab'),
('Bahawalpur District', 'Punjab'),
('Rahim Yar Khan District', 'Punjab'),
('Dera Ghazi Khan District', 'Punjab'),
('Layyah District', 'Punjab'),
('Muzaffargarh District', 'Punjab'),
('Rajanpur District', 'Punjab'),
('Karachi Central', 'Sindh'),
('Karachi East', 'Sindh'),
('Karachi South', 'Sindh'),
('Malir', 'Sindh'),
('District at a glance Ziarat', 'Balochistan'),
('District at a glance Zhob', 'Balochistan'),
('District at a glance Sibi', 'Balochistan'),
('District at a glance Quetta', 'Balochistan'),
('District at a glance Pishin', 'Balochistan'),
('Bannu District', 'Khyber Pukhton Khawan'),
('Lakki Marwat ', 'Khyber Pukhton Khawan'),
('District North Waziristan District', 'Khyber Pukhton Khawan');

-- --------------------------------------------------------

--
-- Table structure for table `msg`
--

CREATE TABLE `msg` (
  `m_id` int(255) NOT NULL,
  `email` text NOT NULL,
  `subject` text NOT NULL,
  `msg` text NOT NULL,
  `category` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `msg`
--

INSERT INTO `msg` (`m_id`, `email`, `subject`, `msg`, `category`) VALUES
(1, 'hi@gmail.com', 'message ', 'text', 'contact'),
(2, 'hi@gmail.com', 'message ', 'feedback', 'feedback');

-- --------------------------------------------------------

--
-- Table structure for table `plant`
--

CREATE TABLE `plant` (
  `plant_id` int(255) NOT NULL,
  `name` varchar(100) NOT NULL,
  `cost` int(30) NOT NULL,
  `qty` int(10) NOT NULL,
  `de` varchar(255) NOT NULL,
  `province` text NOT NULL,
  `district` text NOT NULL,
  `area` text NOT NULL,
  `cover` text NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `plant`
--

INSERT INTO `plant` (`plant_id`, `name`, `cost`, `qty`, `de`, `province`, `district`, `area`, `cover`, `start_date`, `end_date`, `status`) VALUES
(1, 'Tree', 150000, 1000, '', 'Sindh', 'Malir', 'AreA name ', '60', '2021-02-01', '2021-04-30', 'In Process'),
(3, 'Tomato plant', 100, 2500, 'Tree_Plantation.pdf', 'Punjab', 'district', 'AreA name ', '60', '2021-04-01', '2021-04-29', 'In Process'),
(4, 'onlive Plants', 200, 2000, '', 'Punjab', 'Rahim Yar Khan District', 'AreA name ', '8', '2021-02-01', '2021-04-22', 'In Process'),
(6, 'Vegetable plant ', 300, 3000, '', 'Punjab', 'Layyah District', 'AreA name ', '40', '2021-04-16', '2021-04-30', 'Pending'),
(7, 'Olive ', 2000, 3000, '', 'Punjab', 'Rahim Yar Khan District', 'AreA name ', '3', '2021-04-02', '2021-04-30', 'Canceled'),
(8, 'Fruit Tree', 1000, 2000, 'Tree_Plantation.pdf', 'Punjab', 'Muzaffargarh District', 'AreA name ', '40', '2021-04-01', '2021-05-31', 'In Process'),
(11, 'new plant', 1, 2, '', 'Balochistan', 'District at a glance Pishin', 'AreA name ', '120', '2021-05-07', '2021-05-07', 'Started'),
(13, 'dfgfds', 9000, 9000, '', 'Punjab', 'Malir', 'sdfsdfsdf', '60', '2021-05-07', '2021-05-07', 'Started');

-- --------------------------------------------------------

--
-- Table structure for table `plant_modal`
--

CREATE TABLE `plant_modal` (
  `p_id` int(255) NOT NULL,
  `name` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `cost` text NOT NULL,
  `qty` text NOT NULL,
  `de` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `plant_modal`
--

INSERT INTO `plant_modal` (`p_id`, `name`, `image`, `cost`, `qty`, `de`) VALUES
(1, 'Tomato Plant', 'depositphotos_276589354-stock-photo-potato-plant-potatoes-variety-home.jpg', '100', '1000', 'lorem text will be herer\r\n'),
(2, 'Areca-palm Plant', 'areca-palm.jpg', '100', '100', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry'),
(3, 'Heartleaf philodendron Plant', 'heartleaf philodendron.jpg', '300', '400', 'detail will be here'),
(4, 'Flower Pants', 'flower.png', '400', '5000', 'detail '),
(5, 'Culinary herb Plant', 'culinary herb.jpg', '200', '8000', 'dessfsdf');

-- --------------------------------------------------------

--
-- Table structure for table `province_record`
--

CREATE TABLE `province_record` (
  `pro_id` int(255) NOT NULL,
  `pro_name` text NOT NULL,
  `district` text NOT NULL,
  `to_area` text NOT NULL,
  `from_area` text NOT NULL,
  `s_date` date NOT NULL,
  `e_date` date NOT NULL,
  `percentage` text NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `province_record`
--

INSERT INTO `province_record` (`pro_id`, `pro_name`, `district`, `to_area`, `from_area`, `s_date`, `e_date`, `percentage`, `status`) VALUES
(1, 'Punjab', 'Bahawalnagar District', 'Haroonabad Tehsil ', 'Bahawalnagar Chishtian Fort Abbas Haroonabad Minchinabad', '2020-11-01', '2021-08-31', '40', 'In Process'),
(2, 'Punjab', 'Dera Ghazi Khan District', 'Shadan Lund', 'Kot Chutta, MC Taunsa', '2021-03-01', '2021-09-30', '50', 'Pending'),
(4, 'Sindh', 'Karachi East', 'Jamshed Town.', 'Gulshan Town.', '2021-03-01', '2021-04-30', '10', 'In Process'),
(5, 'Sindh', 'Malir', 'Ibrahim Hyderi taluka', 'Shah Mureed taluka ', '2021-01-01', '2021-07-30', '30', 'In Process'),
(6, 'Balochistan', 'District at a glance Ziarat', 'Ayubia National Park', 'Ayub National Park', '2020-05-01', '2022-02-01', '500', 'Ended'),
(7, 'Sindh', 'Karachi East', 'Jamshed Town.', 'Gulshan Town.', '2021-04-23', '2021-05-31', '21', 'In Process');

-- --------------------------------------------------------

--
-- Table structure for table `pushase_tree`
--

CREATE TABLE `pushase_tree` (
  `tree_id` int(255) NOT NULL,
  `tree_name` text NOT NULL,
  `cost` text NOT NULL,
  `qty` text NOT NULL,
  `total` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pushase_tree`
--

INSERT INTO `pushase_tree` (`tree_id`, `tree_name`, `cost`, `qty`, `total`) VALUES
(6, 'helig', '2', '4', '8');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `user_id` int(255) NOT NULL,
  `user_name` text NOT NULL,
  `user_email` text NOT NULL,
  `user_password` text NOT NULL,
  `user_type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`user_id`, `user_name`, `user_email`, `user_password`, `user_type`) VALUES
(1, 'ahmad', 'hi@gmail.com', '123', 'user'),
(2, 'Nasir', 'mc190406567@vu.edu.pk', '12346', 'admin'),
(4, 'mcsm-f19-091', 'MYemail@gmail.com', '123', 'admin'),
(5, 'new ', 'newone@gmail.com', '123', 'user'),
(6, 'faiqaq', 'skdfkdf@gmail.com ', '123654', 'user'),
(7, 'agian ', 'ah@gmai.com ', '122', 'user'),
(8, 'agian ', 'ah@gmai.com ', '122', 'user'),
(9, 'agian ', 'ah@gmai.com ', '122', 'user'),
(10, 'agian ', 'ah@gmai.com ', '122', 'user'),
(11, 'agian ', 'ah@gmai.com ', '122', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `msg`
--
ALTER TABLE `msg`
  ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `plant`
--
ALTER TABLE `plant`
  ADD PRIMARY KEY (`plant_id`);

--
-- Indexes for table `plant_modal`
--
ALTER TABLE `plant_modal`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `province_record`
--
ALTER TABLE `province_record`
  ADD PRIMARY KEY (`pro_id`);

--
-- Indexes for table `pushase_tree`
--
ALTER TABLE `pushase_tree`
  ADD PRIMARY KEY (`tree_id`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `msg`
--
ALTER TABLE `msg`
  MODIFY `m_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `plant`
--
ALTER TABLE `plant`
  MODIFY `plant_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `plant_modal`
--
ALTER TABLE `plant_modal`
  MODIFY `p_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `province_record`
--
ALTER TABLE `province_record`
  MODIFY `pro_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pushase_tree`
--
ALTER TABLE `pushase_tree`
  MODIFY `tree_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `user_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
