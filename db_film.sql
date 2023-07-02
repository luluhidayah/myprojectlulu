-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2023 at 03:09 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_film`
--

-- --------------------------------------------------------

--
-- Table structure for table `film`
--

CREATE TABLE `film` (
  `id` int(11) NOT NULL,
  `nama_film` varchar(200) NOT NULL,
  `id_genre` varchar(200) NOT NULL,
  `duration` varchar(50) NOT NULL,
  `cover` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `film`
--

INSERT INTO `film` (`id`, `nama_film`, `id_genre`, `duration`, `cover`, `created_at`, `update_at`) VALUES
(1, '5 CM', '2', '1 Jam 2 Menit', '5CM.jpg', '2023-06-16 04:22:03', '2023-06-16 04:22:03'),
(2, 'Transformers', '5', '2 Jam 8 Menit', 'Transformers.jpg', '2023-06-16 04:23:16', '2023-06-16 04:23:16'),
(3, 'Mumun', '1', '1 Jam 20 Menit', 'Mumun.jpg', '2023-06-16 04:23:55', '2023-06-16 04:23:55'),
(4, 'Fast and Forious', '1', '5 Jam 2 Menit', 'FaF.jpg', '2023-06-16 04:24:49', '2023-06-16 04:24:49'),
(5, '2012', '3', '3 Jam 8 Menit', '2012.jpg', '2023-06-16 04:25:30', '2023-06-16 04:25:30'),
(6, 'The Raid', '5', '2 Jam 2 Menit', 'TheRaid.jpg', '2023-06-16 04:26:31', '2023-06-16 04:26:31'),
(7, 'Avanger', '5', '2 Jam 8 Menit', 'Avanger.jpg', '2023-06-16 04:27:18', '2023-06-16 04:27:18'),
(8, 'Hati Suhita', '4', '2 Jam 20 Menit', 'HatiSuhita.jpg', '2023-06-16 04:28:10', '2023-06-16 04:28:10'),
(9, 'KKN di Desa Penari', '1', '2 Jam 2 Menit', 'KKN.jpg', '2023-06-16 04:28:55', '2023-06-16 04:28:55'),
(10, 'Annabele ', '1', '2 Jam 5 Menit', 'Anabele.jpg', '2023-06-16 04:29:34', '2023-06-16 04:29:34'),
(11, 'Warkop the Reabon', '7', ' 3 Jam 10 Menit', '1687916903_2969a9023071eac3c886.jpg', '2023-06-28 01:48:23', '2023-06-28 01:48:23');

-- --------------------------------------------------------

--
-- Table structure for table `genre`
--

CREATE TABLE `genre` (
  `id_genre` int(11) NOT NULL,
  `nama_genre` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `genre`
--

INSERT INTO `genre` (`id_genre`, `nama_genre`, `created_at`, `updated_at`) VALUES
(1, 'Horor', '2023-06-21 08:16:34', '2023-06-21 08:16:34'),
(2, 'Advanture', '2023-06-21 08:17:03', '2023-06-21 08:17:03'),
(3, 'Drama', '2023-06-21 08:17:18', '2023-06-21 08:17:18'),
(4, 'Romance', '2023-06-21 08:17:31', '2023-06-21 08:17:31'),
(5, 'Action', '2023-06-21 08:17:56', '2023-06-21 08:17:56'),
(6, 'Religi', '2023-06-21 08:18:08', '2023-06-21 08:18:08'),
(7, 'Comedy', '2023-06-21 08:19:36', '2023-06-21 08:19:36'),
(8, 'Petualangan', '2023-06-21 08:20:52', '2023-06-21 08:20:52'),
(9, 'Animation', '2023-06-21 08:21:22', '2023-06-21 08:21:22'),
(10, 'Fantasi', '2023-06-21 08:22:03', '2023-06-21 08:22:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`id_genre`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `film`
--
ALTER TABLE `film`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `genre`
--
ALTER TABLE `genre`
  MODIFY `id_genre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
