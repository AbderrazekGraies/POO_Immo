-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : mar. 17 jan. 2023 à 14:58
-- Version du serveur : 8.0.30
-- Version de PHP : 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `immo`
--

-- --------------------------------------------------------

--
-- Structure de la table `images`
--

CREATE TABLE `images` (
  `propriete_ID` int NOT NULL,
  `image` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `images`
--

INSERT INTO `images` (`propriete_ID`, `image`) VALUES
(9, 'maison-campgane.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `proprietes`
--

CREATE TABLE `proprietes` (
  `propriete_ID` int NOT NULL,
  `adress` varchar(30) NOT NULL,
  `ville` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `type` varchar(20) NOT NULL,
  `surface` int NOT NULL,
  `typeDannonce` varchar(10) NOT NULL,
  `prix` int NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `proprietes`
--

INSERT INTO `proprietes` (`propriete_ID`, `adress`, `ville`, `type`, `surface`, `typeDannonce`, `prix`, `description`) VALUES
(9, 'fezgfze', 'Grenoble', 'Maison', 1, 'vendre', 1, 'jytkytkytk');

-- --------------------------------------------------------

--
-- Structure de la table `proprietetype`
--

CREATE TABLE `proprietetype` (
  `type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `region`
--

CREATE TABLE `region` (
  `region` varchar(20) NOT NULL,
  `ville` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `region`
--

INSERT INTO `region` (`region`, `ville`) VALUES
('Auvergne-Rhône-Alpes', 'Grenoble'),
('Auvergne-Rhône-Alpes', 'Lyon');

-- --------------------------------------------------------

--
-- Structure de la table `types`
--

CREATE TABLE `types` (
  `type` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `user_ID` int NOT NULL,
  `firstName` varchar(20) NOT NULL,
  `lastName` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `telephone` int NOT NULL,
  `password` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`user_ID`, `firstName`, `lastName`, `email`, `telephone`, `password`) VALUES
(3, 'toto', 'toto', 'toto@gmail.com', 1010, '$2y$10$edleX12bwwLfHFvvVbYGoOkfz4nSFznpLJFt48p3oDG3.6F9ArmWS'),
(14, 'tata', 'tata', 'tata@gmail.com', 2002, '$2y$10$yTVCXDwFAROItq1GV8t3LO/iWMPCl2WfHOsMG/UXzNc9NkQ/WHte6');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `images`
--
ALTER TABLE `images`
  ADD UNIQUE KEY `propriete_ID` (`propriete_ID`,`image`);

--
-- Index pour la table `proprietes`
--
ALTER TABLE `proprietes`
  ADD PRIMARY KEY (`propriete_ID`);

--
-- Index pour la table `proprietetype`
--
ALTER TABLE `proprietetype`
  ADD UNIQUE KEY `type` (`type`);

--
-- Index pour la table `region`
--
ALTER TABLE `region`
  ADD UNIQUE KEY `region` (`region`,`ville`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_ID`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `proprietes`
--
ALTER TABLE `proprietes`
  MODIFY `propriete_ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `user_ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
