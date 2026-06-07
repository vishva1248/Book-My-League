-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 23, 2024 at 02:48 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bml`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_username` varchar(30) NOT NULL,
  `admin_password` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone_no` varchar(11) NOT NULL,
  `address` varchar(150) NOT NULL,
  `user_ip` varchar(100) NOT NULL,
  `user_image` varchar(100) NOT NULL,
  `uid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_username`, `admin_password`, `email`, `phone_no`, `address`, `user_ip`, `user_image`, `uid`) VALUES
('Harshit vaja', 'vaja@123', 'harshithvaja256@gmail.com', '8799567787', 'junagadh', '::1', '', 803400262),
('vishva patel', 'vishva@2006', 'patelvishvadhruvesh@gmail.com', '7203889984', 'ankur', '::1', '', 1554430255);

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `po_uid` int(11) NOT NULL,
  `user_uid` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `po_uid`, `user_uid`, `date`, `time`) VALUES
(1, 0, 0, '2024-04-24', '17:06:00'),
(2, 0, 0, '2024-04-17', '17:11:00'),
(3, 0, 0, '2024-04-17', '17:17:00'),
(4, 0, 0, '2024-04-17', '17:00:00'),
(5, 0, 0, '2024-04-17', '17:20:00');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `event_id` int(30) NOT NULL,
  `event_name` varchar(30) NOT NULL,
  `event_address` varchar(50) NOT NULL,
  `event_date` date NOT NULL,
  `event_password` int(30) NOT NULL,
  `event_organizer` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`event_id`, `event_name`, `event_address`, `event_date`, `event_password`, `event_organizer`) VALUES
(0, 'crick play', 'sarkhej - ahmedabad', '2024-01-22', 12345, 'Harshit vaja');

-- --------------------------------------------------------

--
-- Table structure for table `main`
--

CREATE TABLE `main` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `phone_no` varchar(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(150) NOT NULL,
  `user_ip` varchar(100) NOT NULL,
  `user_image` varchar(100) NOT NULL,
  `uid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `main`
--

INSERT INTO `main` (`id`, `username`, `password`, `phone_no`, `email`, `address`, `user_ip`, `user_image`, `uid`) VALUES
(16, 'het patel', 'het@patel', '', 'het@gmail.com', '', '::1', '', 539489550),
(22, 'Harshit vaja', 'vaja@123', '8799567787', 'harshithvaja256@gmail.com', 'junagadh', '::1', '', 803400262),
(23, 'casjkdb', '123', 'cskjbck', 'gbdfgws@gmail.com', 'zkjcbsdk', '::1', '', 324110517),
(25, 'nitya shah', 'nitya4444', '', 'nityashah@gmail.com', '', '::1', '', 530971819),
(43, 'vishva patel', 'vishva@2006', '7203889984', 'patelvishvadhruvesh@gmail.com', 'ankur', '::1', '', 1554430255),
(46, 'shah_saheb4440', '123', '628628622', 'nitya2005shah@gmail.com', 'ranip', '0', '', 1429131459),
(47, 'Nitya_shah', 'Nitya1109', '1234567890', 'Nityashah@gmail.com', 'naranpura', '0', '', 922576945),
(48, 'xycyku_ivug', '12345', '9876544564', 'ychvgj@gmail.com', 'aec-ahmebdabad', '0', '', 1252112294),
(49, 'vimisha', '1248', '49811559', 'vimisha@gmail.com', 'ankur', '0', '', 1161706974),
(51, 'pravar', '1248', '444114', 'pravar@gmail.com', 'ahmedabad', '0', '', 1959254499);

-- --------------------------------------------------------

--
-- Table structure for table `po_confirm`
--

CREATE TABLE `po_confirm` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(150) NOT NULL,
  `phone_no` varchar(11) NOT NULL,
  `address` varchar(150) NOT NULL,
  `user_ip` int(11) NOT NULL,
  `img1` varchar(255) NOT NULL,
  `img2` varchar(255) NOT NULL,
  `img3` varchar(255) NOT NULL,
  `uid` int(11) NOT NULL,
  `place_name` varchar(30) NOT NULL,
  `place_city` varchar(50) NOT NULL,
  `place_phone_no` varchar(11) NOT NULL,
  `p_approval_img` varchar(255) NOT NULL,
  `po_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `po_confirm`
--

INSERT INTO `po_confirm` (`id`, `username`, `password`, `email`, `phone_no`, `address`, `user_ip`, `img1`, `img2`, `img3`, `uid`, `place_name`, `place_city`, `place_phone_no`, `p_approval_img`, `po_img`) VALUES
(10, 'shah_saheb4440', '123', 'nitya2005shah@gmail.com', '628628622', 'ranip', 0, '39301604bf9d80ba5e6cacb604ec78a4c305e58a.jpg', 'billiards.jpg', 'download.jpg', 1429131459, 'ck play', 'Ahmedabad', '89283289', 'WhatsApp Image 2023-09-18 at 21.18.46.jpg', ''),
(11, 'Nitya_shah', 'Nitya1109', 'Nityashah@gmail.com', '1234567890', 'naranpura', 0, '39301604bf9d80ba5e6cacb604ec78a4c305e58a.jpg', 'box-cricket-construction.jpg', '663934d9ca9699e474f795d2b77b956a59377c0e.jpg', 922576945, 'Naranpura', 'Ahmedabad', '234567891', '39301604bf9d80ba5e6cacb604ec78a4c305e58a.jpg', ''),
(12, 'xycyku_ivug', '12345', 'ychvgj@gmail.com', '9876544564', 'aec-ahmebdabad', 0, '39301604bf9d80ba5e6cacb604ec78a4c305e58a.jpg', 'download (2).jpg', 'download (4).jpg', 1252112294, 'Naranpura', 'Ahmedabad', '1234567899', 'download (5).jpg', ''),
(13, 'vimisha', '1248', 'vimisha@gmail.com', '49811559', 'ankur', 0, '39301604bf9d80ba5e6cacb604ec78a4c305e58a.jpg', 'billiards.jpg', 'billiards.jpg', 1161706974, 'lj', 'Ahmedabad', '9151995115', 'Vishva Dhruvesh Patel sign.jpg', ''),
(15, 'pravar', '1248', 'pravar@gmail.com', '444114', 'ahmedabad', 0, 'billiards.jpg', '39301604bf9d80ba5e6cacb604ec78a4c305e58a.jpg', 'WhatsApp Image 2024-03-01 at 10.01.45_a8b4143e.jpg', 1959254499, 'ankur', 'Ahmedabad', '65995226', 'download.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `po_register`
--

CREATE TABLE `po_register` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(150) NOT NULL,
  `phone_no` varchar(11) NOT NULL,
  `address` varchar(150) NOT NULL,
  `user_ip` int(11) NOT NULL,
  `img1` varchar(255) NOT NULL,
  `img2` varchar(255) NOT NULL,
  `img3` varchar(255) NOT NULL,
  `uid` int(11) NOT NULL,
  `place_name` varchar(30) NOT NULL,
  `place_city` varchar(50) NOT NULL,
  `place_phone_no` varchar(11) NOT NULL,
  `p_approval_img` varchar(255) NOT NULL,
  `po_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `phone_no` varchar(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(150) NOT NULL,
  `user_ip` varchar(100) NOT NULL,
  `user_image` varchar(100) NOT NULL,
  `uid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `username`, `password`, `phone_no`, `email`, `address`, `user_ip`, `user_image`, `uid`) VALUES
(10, 'het patel', 'het@patel', '', 'het@gmail.com', '', '::1', '', 539489550),
(12, 'nitya shah', 'nitya4444', '', 'nityashah@gmail.com', '', '::1', '', 530971819),
(13, 'nishu', '12345', '', 'nishu@gmail.com', '', '::1', '', 837451850),
(14, 'hardik', '12345', '', 'hardik@gmail.com', '', '::1', '', 233872456),
(15, 'rushi', '12345', '', 'rushi@gmail.com', '', '::1', '', 1404910622),
(16, 'ved', '12345', '', 'ved@gmail.com', '', '::1', '', 210690249),
(17, 'yash', '12345', '', 'yash@gmail.com', '', '::1', '', 386666821);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `main`
--
ALTER TABLE `main`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `po_confirm`
--
ALTER TABLE `po_confirm`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `po_register`
--
ALTER TABLE `po_register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `main`
--
ALTER TABLE `main`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `po_confirm`
--
ALTER TABLE `po_confirm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `po_register`
--
ALTER TABLE `po_register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
