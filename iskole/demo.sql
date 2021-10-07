-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 03, 2021 at 07:03 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `demo`
--

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL DEFAULT '0',
  `last_name` varchar(255) NOT NULL DEFAULT '0',
  `email` varchar(255) NOT NULL DEFAULT '0',
  `updated_email` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL DEFAULT '0',
  `DOB` date NOT NULL,
  `Mobile` char(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `type` varchar(255) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `first_name`, `last_name`, `email`, `updated_email`, `password`, `DOB`, `Mobile`, `created_at`, `updated_at`, `type`) VALUES
(33, 'Esari', 'Vithana', 'esariupendri1997@gmail.com', 'esariupendri1997@gmail.com', '$2y$04$aOfzWy0Eg6w0fu1doT1Fh.LrX8W4fu76I6Y62ne7kxgRecNoiiukS', '0000-00-00', '0112569569', '2021-09-30 18:58:10', '2021-09-30 18:58:10', 'student'),
(34, 'Samadi', 'Bhagya', 'samadi@gmail.com', NULL, '$2y$04$oUy2Mk8wi1O3SCszQND2dOwbzXqYzGjJtmKkdGfCmvMRzltNOr8qa', '0000-00-00', '', '2021-09-30 19:21:37', '2021-09-30 19:21:37', 'student'),
(35, 'Samadi', 'fernando', 'buddhima12@gmail.com', NULL, '$2y$04$vimo83TbuCyAPMbVzodNleFsFf88kyx6LBV1gVNg0RrVFmnWlZY62', '0000-00-00', '', '2021-10-02 19:03:22', '2021-10-02 19:03:22', 'student'),
(36, 'Samadi', 'Bhagya', 'sam@gmail.com', NULL, '$2y$04$Eu.fzx21XNm7htwP0pif9.FCdpBSLoMwImwM2rKgswr9I8yg4TBMa', '0000-00-00', '', '2021-10-02 19:13:13', '2021-10-02 19:13:13', 'student'),
(37, 'Neeta', 'Perera', 'neeta@gmail.com', NULL, '$2y$04$raEAtGLAEwvQC8jCOCP5R.JjBKt8NXq/e.EM.m1m7R.QiT/A/FUxC', '0000-00-00', '', '2021-10-03 05:59:19', '2021-10-03 05:59:19', 'student'),
(38, 'Jane', 'Fernando', 'jane@gmail.com', NULL, '$2y$04$gy98a7fVPyciyBpchS22Yu61JdsZtMcqDPlV91gzTAccTXW0v0CXW', '0000-00-00', '', '2021-10-03 06:06:59', '2021-10-03 06:06:59', 'student'),
(39, 'Senuli', 'Perera', 'piyumi@gmail.com', '', '$2y$04$DFIjS7Xi78KqlbeoI2wgwOtJdItSOWLb3TYaSTKqsAVrIphtDdytm', '0000-00-00', '0112569569', '2021-10-03 06:25:12', '2021-10-03 06:25:12', 'student'),
(40, 'Asiri', 'Gunarathna', 'hashani@gmail.com', NULL, '$2y$04$hRNGYFr.05rWxJ6u6nIuX.FswSqnWLkqBYyKC/ZoNLXV.52/ccoRW', '0000-00-00', '0112569569', '2021-10-03 06:38:32', '2021-10-03 06:38:32', 'student');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `email`, `password`) VALUES
(8, 'Pure Coding', 'purecodingofficial@gmail.com', '0139a3c5cf42394be982e766c93f5ed0'),
(9, 'esari', 'esariupendri1997@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(10, 'cordex', 'cordex@gmail.com', '81b073de9370ea873f548e31b8adc081'),
(11, 'nisheda', 'nisheda5@gmail.com', '250cf8b51c773f3f8dc8b4be867a9a02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
