-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : mar. 29 sep. 2020 à 12:32
-- Version du serveur :  10.3.23-MariaDB-0+deb10u1
-- Version de PHP : 7.3.19-1~deb10u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `e1995654`
--

-- --------------------------------------------------------

--
-- Structure de la table `vino__cellier_bouteille`
--

CREATE TABLE `vino__cellier_bouteille` (
  `id_cellier` int(11) NOT NULL,
  `id_bouteille` int(11) NOT NULL,
  `date_achat` date DEFAULT NULL,
  `garde_jusqua` varchar(200) DEFAULT NULL,
  `notes` varchar(200) DEFAULT NULL,
  `prix` float DEFAULT NULL,
  `quantite` int(11) DEFAULT NULL,
  `millesime` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `vino__cellier_bouteille`
--

INSERT INTO `vino__cellier_bouteille` (`id_cellier`, `id_bouteille`, `date_achat`, `garde_jusqua`, `notes`, `prix`, `quantite`, `millesime`) VALUES
(1, 362, '2020-10-02', '10', 'ok', 5, 0, 1000),
(3, 347, '2020-09-09', '10', 'ok', 13, 10, 1200),
(17, 346, '2020-09-10', '0', '', 0, 0, 0),
(17, 352, '2020-09-28', '1', 'oo', 10, 100, 1),
(18, 343, '2020-09-10', '10', 'ok', 15, 60, 10),
(18, 347, '2020-12-10', '10', 'ok', 15, 15, 1200),
(18, 348, '2020-05-12', '15', 'bien', 10, 10, 12),
(18, 349, '2019-12-10', '10', 'bon', 16.03, 0, 1500),
(18, 357, '1852-12-10', '10', 'ok', 13, 12, 1200),
(18, 363, '2020-09-10', '10', 'ok', 1, 10, 10),
(20, 349, '2020-09-24', '10', 'bon', 13, 10, 1990),
(20, 357, '2020-04-10', '16', 'bon', 20, 13, 1500),
(20, 364, '2020-06-16', 'oui', 'tres bon', 16, 19, 13),
(26, 349, '1985-12-10', '20', '30', 16, 16, 13);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `vino__cellier_bouteille`
--
ALTER TABLE `vino__cellier_bouteille`
  ADD PRIMARY KEY (`id_cellier`,`id_bouteille`),
  ADD KEY `id_bouteille` (`id_bouteille`);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `vino__cellier_bouteille`
--
ALTER TABLE `vino__cellier_bouteille`
  ADD CONSTRAINT `vino__cellier_bouteille_ibfk_1` FOREIGN KEY (`id_cellier`) REFERENCES `vino__cellier` (`id`),
  ADD CONSTRAINT `vino__cellier_bouteille_ibfk_2` FOREIGN KEY (`id_bouteille`) REFERENCES `vino__bouteille` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
