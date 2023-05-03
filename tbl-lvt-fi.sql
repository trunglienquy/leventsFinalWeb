-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2023 at 02:16 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pjweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `allproduct`
--

CREATE TABLE `allproduct` (
  `idProduct` int(11) NOT NULL,
  `nameProduct` varchar(50) NOT NULL,
  `priceProduct` int(11) NOT NULL,
  `imageFrontProduct` text NOT NULL,
  `imageAfterProduct` text NOT NULL,
  `catagories` int(11) NOT NULL COMMENT '1 la áo, 2 là quần, 3 là balo, 4 là áo khoác, 5 là phụ kiện',
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `allproduct`
--

INSERT INTO `allproduct` (`idProduct`, `nameProduct`, `priceProduct`, `imageFrontProduct`, `imageAfterProduct`, `catagories`, `quantity`) VALUES
(1, 'Levents áo thun 1', 350000, 'img/all1-bf.jpg', 'img/all1-af.jpg', 1, 100),
(2, 'A Levents áo thun 2', 350000, 'img/all2-bf.jpg', 'img/all2-af.jpg', 1, 100),
(3, 'Levents áo thun 3', 350000, 'img/all3-bf.jpg', 'img/all3-af.jpg', 1, 100),
(4, 'Levents áo thun 4', 450000, 'img/all4-bf.jpg', 'img/all4-af.jpg', 1, 100),
(5, 'Levents áo thun 5', 350000, 'img/all5-bf.jpg', 'img/all5-af.jpg', 1, 100),
(6, 'B Levents áo thun 6', 350000, 'img/all6-bf.jpg', 'img/all6-af.jpg', 1, 100),
(7, 'Levents áo thun 7', 350000, 'img/all7-bf.jpg', 'img/all7-af.jpg', 1, 100),
(8, 'Levents áo thun 8', 230000, 'img/all10-bf.jpg', 'img/all10-af.jpg', 1, 100),
(9, 'Levents áo thun 9', 350000, 'img/all11-bf.jpg', 'img/all11-af.jpg', 1, 100),
(10, 'Levents áo thun 10', 350000, 'img/all12-bf.jpg', 'img/all12-af.jpg', 1, 100),
(11, 'Levents áo thun 11', 350000, 'img/pr1F.jpg', 'img/pr1.png', 1, 100),
(12, 'Levents áo thun 12', 550000, 'img/tee-1-bf.jpg', 'img/tee-1-af.jpg', 1, 100),
(13, 'Levents quần 1', 500000, 'img/pant-1-bf.jpg', 'img/pant-1-af.jpg', 2, 100);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `idCategory` int(11) NOT NULL,
  `nameCategory` varchar(250) NOT NULL,
  `status-category` int(11) NOT NULL COMMENT '1 is available 2 is sold-out'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`idCategory`, `nameCategory`, `status-category`) VALUES
(1, 't-shirt', 1),
(2, 'pants', 2),
(3, 'balo', 1),
(4, 'outwear', 1),
(5, 'accessories', 1);

-- --------------------------------------------------------

--
-- Table structure for table `loginweb`
--

CREATE TABLE `loginweb` (
  `id_user` int(11) NOT NULL,
  `name_user` varchar(255) NOT NULL,
  `phone_user` varchar(20) NOT NULL,
  `password_user` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `loginweb`
--

INSERT INTO `loginweb` (`id_user`, `name_user`, `phone_user`, `password_user`) VALUES
(1, 'abc@gmail.comd', '0362734471', '123456'),
(2, 'abcd@gmail.com', '0123456', '123456'),
(3, 'nqh@gmail.com', '0364781722', '01664781722');

-- --------------------------------------------------------

--
-- Table structure for table `productofnewarrival`
--

CREATE TABLE `productofnewarrival` (
  `id` int(11) NOT NULL,
  `image_before` text NOT NULL,
  `image_after` text NOT NULL,
  `name` varchar(200) NOT NULL,
  `price` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `productofnewarrival`
--

INSERT INTO `productofnewarrival` (`id`, `image_before`, `image_after`, `name`, `price`) VALUES
(1, 'img/all4-bf.jpg', 'img/all4-af.jpg', 'Levents - Không tên, bí ẩn', '395,000 vnđ'),
(2, 'img/all5-bf.jpg', 'img/all5-af.jpg', 'Levents-test', '230.000 vnd'),
(3, 'img/all6-bf.jpg', 'img/all6-af.jpg', 'Levents-NoName', '395,000 vnđ'),
(4, 'img/all1-bf.jpg', 'img/all1-af.jpg', 'Levents no names', '395,000 vnđ'),
(5, 'img/all2-bf.jpg', 'img/all2-af.jpg', 'Levents no name', '395,000 vnđ'),
(6, 'img/all3-bf.jpg', 'img/all3-af.jpg', 'Levents no name', '395,000 vnđ'),
(7, 'img/all7-bf.jpg', 'img/all7-af.jpg', 'Levents no name', '395,000 vnđ'),
(8, 'img/all8-bf.jpg', 'img/all8-af.jpg', 'Levents no name', '395,000 vnđ');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id_user` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_numberphone` varchar(20) NOT NULL,
  `user_birthday` date NOT NULL,
  `user_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id_user`, `user_name`, `user_email`, `user_numberphone`, `user_birthday`, `user_password`) VALUES
(1, 'le minh trung', 'abc@gmail.comd', '0362734471', '2003-09-06', ' 123456'),
(2, 'huynh anh tuan', 'abcd@gmail.com', '0123456', '2003-09-06', ' 123456'),
(3, 'NQH', 'nqh@gmail.com', '0364781722', '2003-09-06', ' 01664781722');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `allproduct`
--
ALTER TABLE `allproduct`
  ADD PRIMARY KEY (`idProduct`),
  ADD UNIQUE KEY `nameProduct` (`nameProduct`),
  ADD KEY `Fk-category` (`catagories`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`idCategory`);

--
-- Indexes for table `loginweb`
--
ALTER TABLE `loginweb`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `productofnewarrival`
--
ALTER TABLE `productofnewarrival`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `allproduct`
--
ALTER TABLE `allproduct`
  MODIFY `idProduct` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `idCategory` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `loginweb`
--
ALTER TABLE `loginweb`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `productofnewarrival`
--
ALTER TABLE `productofnewarrival`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `allproduct`
--
ALTER TABLE `allproduct`
  ADD CONSTRAINT `Fk-category` FOREIGN KEY (`catagories`) REFERENCES `category` (`idCategory`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
