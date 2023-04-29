-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 29 avr. 2023 à 23:07
-- Version du serveur : 10.4.27-MariaDB
-- Version de PHP : 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `pack&go`
--

-- --------------------------------------------------------

--
-- Structure de la table `agencies`
--

CREATE TABLE `agencies` (
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `wilaya` varchar(50) NOT NULL,
  `phonenum` int(11) NOT NULL,
  `profile` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `agencies`
--

INSERT INTO `agencies` (`name`, `email`, `password`, `wilaya`, `phonenum`, `profile`) VALUES
('ensia', 'ensia@gmail.com', '$2y$10$XA9KxbSsju76cr2.9iiy6.BH8WaqBGd6qEGqfAlKBwRMYhUwW9.XG', 'Tébessa', 2147483647, ''),
('hey', 'hey@gmail.com', '$2y$10$zB5qYov/H44nf14OVR8Xt.NYmSxm0y.sL2b0uq3twsokN7kut1hvS', 'Tizi Ouzou', 1234567890, ''),
('hola', 'hola@gmail.com', '$2y$10$N6BCsNAzUg68xHizHoh8LupCgG01VnltTBQ6TCSTP2nGB.vIGXYVm', 'Bouira', 666666666, ''),
('pack&GO', 'pack&go@gmail.com', '$2y$10$d.gEKrAHrEZZgL1qdOyVHeVwjdGszXZVkAOstFKne1OoAvu1OaoR6', 'Algiers', 555555555, ''),
('travel', 'travel@gmail.com', '$2y$10$U126X.NG5Rmq3UQ05cvpCucQ.5Dj3j17EjpJDce7AnI0TorWi5U4W', 'Adrar', 666666666, ''),
('voyage', 'voyage@gmail.com', '$2y$10$wKvZXlVpg8hynddtmi1t5OScm66GoqEg21clyDKg/IVRdgkiuac.q', 'Jijel', 2147483647, ''),
('work', 'work@gmail.com', '$2y$10$F6HyX3iMeJ.0fiiZOZ9KT.tP0uVuL3SUn1Q01uXKnEMkrPa7Kxr1G', 'Tamanrasset', 1111111111, '');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `pfp` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`email`, `username`, `password`, `pfp`) VALUES
('a@gmail.com', 'anphel', '$2y$10$I3WrdgYlu3cl4M5RmhTVhOuZRTz0IFqLE2J45UCiXu4KCm7XLe4Bi', ''),
('aaa@gmail.com', 'aaa', '$2y$10$AorqvV2Tj8Q5sKZFs3.G7udhuNxypemK8tyPHRBbRuISmEZgbl4aW', ''),
('anfel@gmail.com', 'anfel', '$2y$10$cHJ/7ZIMXXbiPmJyRen7Weo0FYR3n6pziDp3FHVqdJvASJvrK6wT.', ''),
('azerty@gmail.com', 'anphel', '$2y$10$kMg8K.8SH8CqSuV3.061fOKCmr7XiHHaLSpqGU/oQn7dVgrboihOq', ''),
('blabla@gmail.com', 'blabla', '$2y$10$0WvXuLc63n8hj0TILzaukebjnNDGNP22ywddKXEaPViUEm2T2W4Fm', ''),
('chaker@gmail.com', 'chaker', '$2y$10$4YOgpliC7vec8Hw1f8YcNuHAA7350bBKallwMF3uf2Rsoii2C0l6u', ''),
('hhggghg@gmail.com', 'an.pheel', '$2y$10$V3VdDi/Uia0JZi.L7BUHb.j.4rEjAH003PBB3fFDTPn0NS26ah3VG', ''),
('mmm@gmail.com', 'mmm', '$2y$10$0hH2BtkEBM1FAS0N9RRd..J/vye.E6.SZUopnVAFVP5lOtNJlWkK2', ''),
('njjj@jjjk.xom', 'an.pheel', '$2y$10$PKyqHpfMHdsLtA6gVq3em.alT242N2dq/RR6k5HCD8ZS8AcAC6ySu', ''),
('QASZDEFRGT@gmail.com', 'qsdfg', '$2y$10$8ZfDCXVI0lOueGW6pUbFgeM8HVXsxM.W3Xe2mkPMcytCeYfcqYPZa', ''),
('sarra@gmail.com', 'sarra', '$2y$10$8vTbTus.7AU1aMgaVUCHxuPttSyO9/UrbQKLeq1QiH4YnNAquZys2', ''),
('sss@gmail.com', 'ss', '$2y$10$od1jofFVu7IFW/qkFOqxRO6xeDdjXhg8Z9GzYgqr9HjBk7O4RIL6a', '');

-- --------------------------------------------------------

--
-- Structure de la table `trips`
--

CREATE TABLE `trips` (
  `name` varchar(100) NOT NULL,
  `destination` varchar(100) NOT NULL,
  `departure` varchar(100) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `prices` int(11) NOT NULL,
  `available_places` int(11) NOT NULL,
  `trip_pic` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `agencies`
--
ALTER TABLE `agencies`
  ADD PRIMARY KEY (`email`);

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
