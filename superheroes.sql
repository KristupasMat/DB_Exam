-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2017 at 05:54 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `superheroes`
--

-- --------------------------------------------------------

--
-- Table structure for table `gifts`
--

CREATE TABLE `gifts` (
  `gift_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gifts`
--

INSERT INTO `gifts` (`gift_name`) VALUES
('cake'),
('chocolate'),
('flowers'),
('perfume');

-- --------------------------------------------------------

--
-- Table structure for table `myuser`
--

CREATE TABLE `myuser` (
  `user_id` int(1) NOT NULL,
  `hero_name` varchar(30) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `super_powers` varchar(250) NOT NULL,
  `user_picture` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `hero_id` int(11) NOT NULL,
  `hero_name` varchar(30) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `super_powers` varchar(250) NOT NULL,
  `user_picture` varchar(256) NOT NULL,
  `gift_name` varchar(30) NOT NULL,
  `comment` varchar(250) NOT NULL,
  `message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`hero_id`, `hero_name`, `age`, `gender`, `super_powers`, `user_picture`, `gift_name`, `comment`, `message`) VALUES
(1, 'Iron Man', 24, 'man', 'best armor in the world, scientific knowledge, a lot of cool gadgets', 'http://images.clipartpanda.com/iron-man-clipart-iron-man-clip-art-ironman1.png', '', '', ''),
(2, 'Spider Man', 24, 'man', 'Wall-crawling, sense perceptions, spider sense, scientific knowledge', 'https://vignette.wikia.nocookie.net/deadpool/images/5/52/Spider-Man.png/revision/latest?cb=20151211201129', '', '', ''),
(3, 'Super Man', 35, 'man', 'super strenght, flying ability, super speed, invulnerability, vision', 'https://upload.wikimedia.org/wikipedia/en/e/eb/SupermanRoss.png', '', '', ''),
(4, 'Wonder Woman', 70, 'woman', 'super strenght and speed, super stamina, energy manipulation, flight', 'https://imgc.allpostersimages.com/img/print/posters/dc-comics-wonder-woman_a-G-14345539-0.jpg?w=577&h=1041', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gifts`
--
ALTER TABLE `gifts`
  ADD PRIMARY KEY (`gift_name`);

--
-- Indexes for table `myuser`
--
ALTER TABLE `myuser`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`hero_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `hero_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
