-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  jeu. 21 jan. 2021 à 13:55
-- Version du serveur :  10.3.15-MariaDB
-- Version de PHP :  7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `apprenant`
--

-- --------------------------------------------------------

--
-- Structure de la table `listes`
--

CREATE TABLE `listes` (
  `ID` int(60) NOT NULL,
  `nom` varchar(60) NOT NULL,
  `prenom` varchar(60) NOT NULL,
  `email` varchar(150) NOT NULL,
  `naissance` date NOT NULL,
  `genre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `listes`
--

INSERT INTO `listes` (`ID`, `nom`, `prenom`, `email`, `naissance`, `genre`) VALUES
(4, 'hello', 'kari', 'ibblaise832@gmail.com', '2020-12-28', '1'),
(5, 'hello', 'kari', 'ibblaise832@gmail.com', '2020-12-28', '1'),
(6, 'hello', 'kari', 'ibblaise832@gmail.com', '2020-12-28', '1'),
(7, 'hello', 'kari', 'ibblaise832@gmail.com', '2020-12-28', '1'),
(8, 'hello1', 'kari', 'ibblaise832@gmail.com', '2021-01-20', '1'),
(9, 'hello', 'kari', 'ibblaise832@gmail.com', '2021-01-15', 'homme'),
(10, 'MIHIN', 'AimÃ©', 'ibblaise832@gmail.com', '1996-06-07', 'homme'),
(11, 'MIHIN', 'sara', 'ibblaise832@gmail.com', '1996-06-25', 'femme'),
(12, 'DIEBRE', 'Davy', 'ddiebre@gmail.com', '2020-10-01', 'homme'),
(13, 'DIEBRE', 'aminata', 'ddiebre@gmail.com', '2020-10-01', 'homme');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `listes`
--
ALTER TABLE `listes`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `listes`
--
ALTER TABLE `listes`
  MODIFY `ID` int(60) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
