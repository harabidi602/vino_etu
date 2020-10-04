-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : Dim 04 oct. 2020 à 11:11
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
-- Structure de la table `vino__utilisateur`
--

CREATE TABLE `vino__utilisateur` (
  `id` int(11) NOT NULL,
  `nom` varchar(200) NOT NULL,
  `prenom` varchar(200) NOT NULL,
  `identifiant` varchar(200) NOT NULL,
  `mdp` varchar(200) NOT NULL,
  `courriel` varchar(200) DEFAULT NULL,
  `telephone` varchar(50) DEFAULT NULL,
  `date_inscription` date DEFAULT NULL,
  `id_type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `vino__utilisateur`
--

INSERT INTO `vino__utilisateur` (`id`, `nom`, `prenom`, `identifiant`, `mdp`, `courriel`, `telephone`, `date_inscription`, `id_type`) VALUES
(1, 'Zinedine', 'Zidane', 'zizou', 'd1b6d7cf12ddd26932e1f33d96710e17', 'zizou@gmail.com', '(514)-254-1254', '2020-10-05', 1),
(2, 'Ronaldo', 'Cristiano', 'cr7', '3234438d9c3ae26193b8d7a98f0176b2', 'cr7@gmail.com', '(514)-499-7694', '2020-10-01', 2),
(10, 'Harabidi', 'Karima', 'karima001', 'a688ef4d329f1c36150fb3c4171a4026', 'karima.harabidi@yahoo.fr', '1-514-604-1922', '2019-09-10', 2),
(12, 'Test', 'Test', 'test', 'b376c02c782be1ef894add6dd5111d71', 'test@gmail.com', '514-604-1922', '2019-09-23', 2),
(51, 'Plokiubhjgg', 'Njkhhzzu', 'jkhzugu85', 'f0c4c3e35c77f6af95aa7770fb217b9b', NULL, NULL, '2020-07-15', 2),
(52, 'Plokijuh', 'Zgtfrdes', 'tfrdes589', '228d18007ccc53c1ad3850d87e18ab0c', NULL, NULL, '2020-07-06', 2),
(53, 'Montest', 'Montest', 'test96', 'f01f8d755703f51d944bbe835371fca6', NULL, NULL, '2020-07-08', 2),
(54, 'Test98', 'Test98', 'test98', 'b47b4ccb4dc861496f04aaa801cc9ebe', NULL, NULL, '2020-09-08', 2),
(55, 'Margarita', 'Margarita', 'marga74', 'c329f7e2a7324d965b5d7cc0c88f943e', NULL, NULL, '2020-10-04', 2);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `vino__utilisateur`
--
ALTER TABLE `vino__utilisateur`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_type` (`id_type`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `vino__utilisateur`
--
ALTER TABLE `vino__utilisateur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `vino__utilisateur`
--
ALTER TABLE `vino__utilisateur`
  ADD CONSTRAINT `vino__utilisateur_ibfk_1` FOREIGN KEY (`id_type`) REFERENCES `vino__utilisateur_type` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
