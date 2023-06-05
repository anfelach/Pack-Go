-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2023 at 02:52 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `packgo`
--

-- --------------------------------------------------------

--
-- Table structure for table `agencies`
--

CREATE TABLE `agencies` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `wilaya` varchar(50) DEFAULT NULL,
  `profile_picture` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `agencies`
--

INSERT INTO `agencies` (`id`, `name`, `email`, `password`, `phone`, `wilaya`, `profile_picture`) VALUES
(14, 'Takwa', 'takwa@gmail.com', '$2y$10$8eyc1kiveuMRY58fNan8T.OJZzCOsD4dzFrSZCVOHHArGJ0buuyqS', '0789653489', 'Tizi Ouzou', '31tStsGyBRL._AC_SY780_.jpg'),
(17, 'Algeria Tours 16', 'algeriatours@gmail.com', '$2y$10$tvcvpqYVZy1ANAhjgnzsYOTHO8Ki5nCNDs4K9CL00GMg/o8xwXNXu', '0773620805', 'Algiers', 'algeriatours.JPG'),
(18, 'Oryx Voyage', 'oryx@gmail.com', '$2y$10$SOFEHWmarYstCBknSVFDoeTu0RkdlrS5X/SSpewSyG/WBwQshHe2W', '0699843949', 'Boumerdès', 'oryx.jpg'),
(19, 'Laabas travel', 'laabas@gmail.com', '$2y$10$ETMREKQxBHFPMp8tnggwlOsnGggENYUlQqhaW2hyv98ZwJ9ubhNvO', '0770333271', 'Annaba', 'abbas.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `profile_picture` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `name`, `email`, `password`, `profile_picture`) VALUES
(1, 'chaker', 'yousfi.chaker26@gmail.com', '$2y$10$CzP09tJptwn5ov4txN46Xec460COSGkfuNtBflZNyLOJqIlusNI9m', ''),
(2, 'chaker', 'chochotube@gmail.com', '$2y$10$p9S68fnOHX9yIpa8LipNuOJ1mR9TF.YXLIPMlSf0jRnAH/TjKzriu', '31tStsGyBRL._AC_SY780_.jpg'),
(3, 'chocho', 'chocho@gmail.com', '$2y$10$8Bg.fIZ.GhZ58aF8omsTt.jtU0cNqQEfMXL2JUQS7gian7229ytKW', ''),
(4, 'Test', 'chaker@gmail.com', '$2y$10$ZLfiuD0dShTxmZ.GaAsTy.34arzTVfDy07LSRrhC0U2CfAajKvnde', ''),
(5, 'John Doe', 'johndoe@example.com', 'pass123', 'john_profile.jpg'),
(6, 'Jane Smith', 'janesmith@example.com', 'pass456', 'jane_profile.jpg'),
(7, 'ChakerYousfi', 'ChakerYousfi@gmail.com', '$2y$10$e.FGP5yK6EpPc9YwQlt3eOV8MF061Dux4IFd0RLYkIsZ6QXW.LJrG', '360_F_446927419_Vg0W5Ul93DoVIGKRtGjC7TXMfrXqofUF.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `trips`
--

CREATE TABLE `trips` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `destination` varchar(255) NOT NULL,
  `departure_date` date DEFAULT NULL,
  `departure_place` varchar(255) DEFAULT NULL,
  `duration` int(11) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `available_places` int(11) DEFAULT NULL,
  `agency_id` int(11) DEFAULT NULL,
  `trip_url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `trips`
--

INSERT INTO `trips` (`id`, `title`, `description`, `destination`, `departure_date`, `departure_place`, `duration`, `price`, `available_places`, `agency_id`, `trip_url`) VALUES
(37, 'trip to setif', 'good trip with nice price', 'setif', '2023-06-08', 'alger', 2, 20000.00, 15, 14, '2d5bc97d17c4235ee7a78a00b7d39ae0.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `wilaya`
--

CREATE TABLE `wilaya` (
  `wilaya_id` int(11) NOT NULL,
  `wilaya_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `wilaya`
--

INSERT INTO `wilaya` (`wilaya_id`, `wilaya_name`) VALUES
(1, 'Adrar'),
(2, 'Chlef'),
(3, 'Laghouat'),
(4, 'Oum El Bouaghi'),
(5, 'Batna'),
(6, 'Béjaïa'),
(7, 'Biskra'),
(8, 'Béchar'),
(9, 'Blida'),
(10, 'Bouira'),
(11, 'Tamanrasset'),
(12, 'Tébessa'),
(13, 'Tlemcen'),
(14, 'Tiaret'),
(15, 'Tizi Ouzou'),
(16, 'Alger'),
(17, 'Djelfa'),
(18, 'Jijel'),
(19, 'Sétif'),
(20, 'Saïda'),
(21, 'Skikda'),
(22, 'Sidi Bel Abbès'),
(23, 'Annaba'),
(24, 'Guelma'),
(25, 'Constantine'),
(26, 'Médéa'),
(27, 'Mostaganem'),
(28, 'M\'Sila'),
(29, 'Mascara'),
(30, 'Ouargla'),
(31, 'Oran'),
(32, 'El Bayadh'),
(33, 'Illizi'),
(34, 'Bordj Bou Arréridj'),
(35, 'Boumerdès'),
(36, 'El Tarf'),
(37, 'Tindouf'),
(38, 'Tissemsilt'),
(39, 'El Oued'),
(40, 'Khenchela'),
(41, 'Souk Ahras'),
(42, 'Tipaza'),
(43, 'Mila'),
(44, 'Aïn Defla'),
(45, 'Naâma'),
(46, 'Aïn Témouchent'),
(47, 'Ghardaïa'),
(48, 'Relizane');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agencies`
--
ALTER TABLE `agencies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trips`
--
ALTER TABLE `trips`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wilaya`
--
ALTER TABLE `wilaya`
  ADD PRIMARY KEY (`wilaya_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agencies`
--
ALTER TABLE `agencies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `trips`
--
ALTER TABLE `trips`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `wilaya`
--
ALTER TABLE `wilaya`
  MODIFY `wilaya_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
