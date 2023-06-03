-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 01, 2023 at 01:32 AM
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
(1, 'Travel Agency 1', 'agency1@example.com', 'pass123', '123456789', 'Wilay 1', 'agency1_profile.jpg'),
(2, 'Travel Agency 2', 'agency2@example.com', 'pass789', '987654321', 'Wilay 2', NULL),
(3, 'zitoun', 'imad@imad.com', '$2y$10$KIZjgZwdfQCGIW0ZW5hW8e5PEPRvdoZYfFOhcVPYIM3BidI2RvJrC', '0562173210', 'Jijel', ''),
(4, 'imad', 'hi@ensia.com', '$2y$10$oeIJuvHsdG6S/vGlN/EBAetmZLgE35XlA7Bc.uID4GP7AKkBMvMy2', '0562173210', 'Jijel', ''),
(5, 'sifou', 'sssssssssssiiiiiii@ensia.com', '$2y$10$QEL7Fz/B0RPGPEs8S3NeZ.YGTOfwqxDyvxwYwF4KXMdYJOJ0HpAIK', '0562173210', 'Jijel', ''),
(6, 'sifou', 'sifou@gmail.com', '$2y$10$uSOk3DFUMkKDHA6UCtt5F.4WdiER2pFrPG0PAloKZQ0P6VYuH50EO', '0562173210', 'Jijel', ''),
(9, 'Travel agency', 'eddineimad330@gmail.com', '$2y$10$eW9BSAMo1XOUlufHeCuHquDVcnWKshkF9ZPxw/.P0q9TYF2Ovpmmi', '0562173210', 'Chlef', 'Screenshot from 2023-05-31 22-38-37.png'),
(10, 'Travel agency', 'eddind330@gmail.com', '$2y$10$a6y/s8QjOTcTyVAih4hIk.lFDxhGPqmbGX02bFLaMlA2l5/15vk9m', '0562173210', 'Chlef', 'Screenshot from 2023-05-31 22-38-37.png'),
(11, 'Travel agency', 'eddi330@gmail.com', '$2y$10$g0eqp9YlehJSLxRcKUTO8O/IQ7KQXvmR2kIuZywzorsUlzGnJ744W', '0562173210', 'Chlef', 'Screenshot from 2023-05-31 22-38-37.png'),
(12, 'Travel agency', 'di330@gmail.com', '$2y$10$FKYGpi96g/5ZlfI4CGe45eTlESuzOP7JZHBOeTtDG7WYGZD1mbOKa', '0562173210', 'Chlef', 'Screenshot from 2023-05-31 22-38-37.png'),
(13, 'Travel agency', 'di330@gail.com', '$2y$10$Wku3URq4n/TuMiI2qriFQeGsX4MnEWpSrbNzYvtiMUALc54vJWWsS', '0562173210', 'Chlef', 'Screenshot from 2023-05-31 22-38-37.png');

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
(6, 'Jane Smith', 'janesmith@example.com', 'pass456', 'jane_profile.jpg');

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
(23, 'Trip 1', 'Description 1', 'Algiers', '2023-06-01', 'Place 1', 7, '100.00', 10, 1, 'https://example.com/trip1'),
(24, 'Trip 2', 'Description 2', 'Oran', '2023-06-02', 'Place 2', 5, '75.00', 5, 1, 'https://example.com/trip2'),
(25, 'Trip 3', 'Description 3', 'Constantine', '2023-06-03', 'Place 3', 3, '50.00', 8, 2, 'https://example.com/trip3'),
(26, 'Trip 4', 'Description 4', 'Annaba', '2023-06-04', 'Place 4', 4, '60.00', 12, 2, 'https://example.com/trip4'),
(27, 'Trip 5', 'Description 5', 'Tlemcen', '2023-06-05', 'Place 5', 6, '90.00', 3, 3, 'https://example.com/trip5');

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
(28, 'MSila'),
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `trips`
--
ALTER TABLE `trips`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `wilaya`
--
ALTER TABLE `wilaya`
  MODIFY `wilaya_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
