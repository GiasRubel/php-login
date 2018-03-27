-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 28, 2016 at 08:05 AM
-- Server version: 5.7.11
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(32) DEFAULT NULL,
  `password` varchar(32) DEFAULT NULL,
  `name` varchar(32) DEFAULT NULL,
  `email` varchar(32) DEFAULT NULL,
  `website` varchar(32) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `name`, `email`, `website`) VALUES
(1, 'lhlh', '1234', 'Gias', 'gias.rubel@gmail.com', 'https://www.youtube.com/'),
(2, 'gias', NULL, 'Gias', 'gias.rubel@gmail.com', 'https://www.youtube.com/'),
(3, 'lhlh', '81dc9bdb52d04dc20036dbd8313ed055', 'Gias', 'md.uttsho@gmail.com', 'https://www.youtube.com/'),
(4, 'lhlh', '81dc9bdb52d04dc20036dbd8313ed055', 'casdc', 'sfsd@jdcajs', 'asdcas'),
(5, 'fsdafdasf', '81dc9bdb52d04dc20036dbd8313ed055', 'dvdas', 'gias.rubel@gmail.com', 'fdsfcasd'),
(6, 'new', 'b59c67bf196a4758191e42f76670ceba', 'new name', 'new@gmail.com', 'www.new.com'),
(7, 'gias', 'b59c67bf196a4758191e42f76670ceba', 'Gias', 'gias.rubel.gggg@gmail.com', 'https://www.youtube.com/');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
