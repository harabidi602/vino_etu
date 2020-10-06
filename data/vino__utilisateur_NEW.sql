-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 30, 2020 at 01:22 AM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vinodb`
--

-- --------------------------------------------------------

--
-- Table structure for table `vino__utilisateur`
--

DROP TABLE IF EXISTS `vino__utilisateur`;
CREATE TABLE IF NOT EXISTS `vino__utilisateur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(200) NOT NULL,
  `prenom` varchar(200) NOT NULL,
  `identifiant` varchar(200) NOT NULL,
  `mdp` varchar(200) NOT NULL,
  `courriel` varchar(200) DEFAULT NULL,
  `telephone` varchar(50) DEFAULT NULL,
  `id_type` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_type` (`id_type`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vino__utilisateur`
--

INSERT INTO `vino__utilisateur` (`id`, `nom`, `prenom`, `identifiant`, `mdp`, `courriel`, `telephone`, `id_type`) VALUES
(1, 'Zinedine', 'Zidane', 'zizou', 'd1b6d7cf12ddd26932e1f33d96710e17', 'zizou@gmail.com', '(514)-254-1254', 1),
(2, 'Ronaldo', 'Cristiano', 'cr7', '96ba600b96d99aa1f5d3ef3b156ed379', 'cr7@gmail.com', '(514)-499-7694', 2),
(36, 'Pirlo', 'Andrea', 'pirlo', 'ef415e6ee09ea13de0deadbcfe44708c', 'pirlo@gmail.com', '5147963258', 2),
(40, 'Test', 'Test', 'test', '662af1cd1976f09a9f8cecc868ccc0a2', NULL, NULL, 2);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `vino__utilisateur`
--
ALTER TABLE `vino__utilisateur`
  ADD CONSTRAINT `vino__utilisateur_ibfk_1` FOREIGN KEY (`id_type`) REFERENCES `vino__utilisateur_type` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
