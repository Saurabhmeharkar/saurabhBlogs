-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 24, 2021 at 10:52 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `saurabhblogsuserdata`
--

-- --------------------------------------------------------

--
-- Table structure for table `userdata`
--

CREATE TABLE `userdata` (
  `id` int(255) NOT NULL,
  `user` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `comment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userdata`
--

INSERT INTO `userdata` (`id`, `user`, `email`, `mobile`, `comment`) VALUES
(2, 'Saurabh Meharkar', 'saurabh@gmail.com', '8956899556', 'This is my first php project.'),
(3, 'Chaitanya meharkar', 'chaitanya@gmail.com', '8957455669', 'Chaitanya meharkar is my litter brother and he is doing polytechnique from GH raisoni college of polytechnique.'),
(6, 'Saurabh Meharkar', 'saurabhmeharkar@gmail.com', '08975066993', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut doloribus perferendis quam libero\r\n                        voluptatum beatae'),
(7, 'Meharkar ', 'meharkarpc@gmail.com', '08974589993', 'Lorem ipsummet consectetur adipisicing elit. Ut doloribus perferendis quam libero\r\n                        voluptatum beatae'),
(12, 'Saurabh Meharkar', 'meharkarpc@gmail.com', '08975066993', 'window.location.replace(\"index.php\")\r\n'),
(13, 'Saurabh Meharkar', '', '08975066993', ''),
(15, 'Saurabh Meharkar', 'anita@gmail.com', '08975066993', '\r\nif(!$user || !$email || !$mobile || !$comment){\r\n    ?>\r\n<script>\r\nalert(\"Please fill data below.\");\r\nwindow.location.replace(\"contact.php\")\r\n</script>\r\n<?php\r\n    \r\n}'),
(20, 'Saurabh Meharkar', 'happy@my.com', '08975066993', 'websitedatawebsitedatawebsitedatawebsitedata'),
(21, '', '', '', ''),
(22, '', '', '', ''),
(23, 'Saurabh Meharkar', 'meharkarpc@gmail.com', '08975066993', 'userdata Your Starter'),
(24, 'Meharkar don', 'scmeharkarpc@gmail.com', '8957566998', 'This is a message from another man who start his journey with the web development you khow that guy ia alsio dont dont his name if ypu kone plaese ley ,et j');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `userdata`
--
ALTER TABLE `userdata`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `userdata`
--
ALTER TABLE `userdata`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
