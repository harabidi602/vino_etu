-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 10, 2020 at 06:22 AM
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
-- Table structure for table `vino__bouteille`
--

DROP TABLE IF EXISTS `vino__bouteille`;
CREATE TABLE IF NOT EXISTS `vino__bouteille` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `code_saq` varchar(50) NOT NULL,
  `pays` varchar(50) NOT NULL,
  `description` varchar(200) NOT NULL,
  `prix_saq` float NOT NULL,
  `url_saq` varchar(200) NOT NULL,
  `url_img` varchar(200) NOT NULL,
  `format` varchar(20) NOT NULL,
  `id_type` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_type` (`id_type`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vino__bouteille`
--

INSERT INTO `vino__bouteille` (`id`, `nom`, `image`, `code_saq`, `pays`, `description`, `prix_saq`, `url_saq`, `url_img`, `format`, `id_type`) VALUES
(1, 'Borsao Seleccion', '//s7d9.scene7.com/is/image/SAQ/10324623_is?$saq-rech-prod-gril$', '10324623', 'Espagne', 'Vin rouge\r\n         \r\n      \r\n      \r\n      Espagne, 750 ml\r\n      \r\n      \r\n      Code SAQ : 10324623', 11, 'https://www.saq.com/page/fr/saqcom/vin-rouge/borsao-seleccion/10324623', '//s7d9.scene7.com/is/image/SAQ/10324623_is?$saq-rech-prod-gril$', ' 750 ml', 1),
(2, 'Monasterio de Las Vinas Gran Reserva', '//s7d9.scene7.com/is/image/SAQ/10359156_is?$saq-rech-prod-gril$', '10359156', 'Espagne', 'Vin rouge\r\n         \r\n      \r\n      \r\n      Espagne, 750 ml\r\n      \r\n      \r\n      Code SAQ : 10359156', 19, 'https://www.saq.com/page/fr/saqcom/vin-rouge/monasterio-de-las-vinas-gran-reserva/10359156', '//s7d9.scene7.com/is/image/SAQ/10359156_is?$saq-rech-prod-gril$', ' 750 ml', 1),
(3, 'Castano Hecula', '//s7d9.scene7.com/is/image/SAQ/11676671_is?$saq-rech-prod-gril$', '11676671', 'Espagne', 'Vin rouge\r\n         \r\n      \r\n      \r\n      Espagne, 750 ml\r\n      \r\n      \r\n      Code SAQ : 11676671', 12, 'https://www.saq.com/page/fr/saqcom/vin-rouge/castano-hecula/11676671', '//s7d9.scene7.com/is/image/SAQ/11676671_is?$saq-rech-prod-gril$', ' 750 ml', 1),
(4, 'Campo Viejo Tempranillo Rioja', '//s7d9.scene7.com/is/image/SAQ/11462446_is?$saq-rech-prod-gril$', '11462446', 'Espagne', 'Vin rouge\r\n         \r\n      \r\n      \r\n      Espagne, 750 ml\r\n      \r\n      \r\n      Code SAQ : 11462446', 14, 'https://www.saq.com/page/fr/saqcom/vin-rouge/campo-viejo-tempranillo-rioja/11462446', '//s7d9.scene7.com/is/image/SAQ/11462446_is?$saq-rech-prod-gril$', ' 750 ml', 1),
(5, 'Bodegas Atalaya Laya 2017', '//s7d9.scene7.com/is/image/SAQ/12375942_is?$saq-rech-prod-gril$', '12375942', 'Espagne', 'Vin rouge\r\n         \r\n      \r\n      \r\n      Espagne, 750 ml\r\n      \r\n      \r\n      Code SAQ : 12375942', 17, 'https://www.saq.com/page/fr/saqcom/vin-rouge/bodegas-atalaya-laya-2017/12375942', '//s7d9.scene7.com/is/image/SAQ/12375942_is?$saq-rech-prod-gril$', ' 750 ml', 1);

-- --------------------------------------------------------

--
-- Table structure for table `vino__bouteille_type`
--

DROP TABLE IF EXISTS `vino__bouteille_type`;
CREATE TABLE IF NOT EXISTS `vino__bouteille_type` (
  `id` int(11) NOT NULL,
  `type` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vino__bouteille_type`
--

INSERT INTO `vino__bouteille_type` (`id`, `type`) VALUES
(1, 'Vin rouge'),
(2, 'Vin blanc');

-- --------------------------------------------------------

--
-- Table structure for table `vino__cellier`
--

DROP TABLE IF EXISTS `vino__cellier`;
CREATE TABLE IF NOT EXISTS `vino__cellier` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_utilisateur` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_utilisateur` (`id_utilisateur`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vino__cellier`
--

INSERT INTO `vino__cellier` (`id`, `id_utilisateur`) VALUES
(1, 1),
(2, 2),
(3, 2),
(5, 2),
(4, 3),
(6, 4);

-- --------------------------------------------------------

--
-- Table structure for table `vino__cellier_bouteille`
--

DROP TABLE IF EXISTS `vino__cellier_bouteille`;
CREATE TABLE IF NOT EXISTS `vino__cellier_bouteille` (
  `id_cellier` int(11) NOT NULL,
  `id_bouteille` int(11) NOT NULL,
  `date_achat` date NOT NULL,
  `garde_jusqua` varchar(200) NOT NULL,
  `notes` varchar(200) NOT NULL,
  `prix` float NOT NULL,
  `quantite` int(11) NOT NULL,
  `millesime` int(11) NOT NULL,
  PRIMARY KEY (`id_cellier`,`id_bouteille`),
  KEY `id_bouteille` (`id_bouteille`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vino__cellier_bouteille`
--

INSERT INTO `vino__cellier_bouteille` (`id_cellier`, `id_bouteille`, `date_achat`, `garde_jusqua`, `notes`, `prix`, `quantite`, `millesime`) VALUES
(1, 1, '0000-00-00', '2020', '2020-01-16', 0, 4, 0),
(2, 2, '0000-00-00', '2020', '2020-03-16', 0, 1, 0),
(3, 1, '2019-01-16', '2020', '2020-01-16', 22, 11, 1999),
(4, 3, '0000-00-00', '2020', '2020-010-16', 0, 1, 0),
(5, 1, '0000-00-00', '2020', '2020-01-16', 0, 2, 0),
(6, 1, '0000-00-00', '2020', '2020-01-16', 0, 2, 0);

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
  `courriel` varchar(200) NOT NULL,
  `telephone` varchar(50) NOT NULL,
  `id_type` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_type` (`id_type`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vino__utilisateur`
--

INSERT INTO `vino__utilisateur` (`id`, `nom`, `prenom`, `identifiant`, `mdp`, `courriel`, `telephone`, `id_type`) VALUES
(1, 'justin', 'trudeau', 'justinT', 'justin2020', 'justin.trudeau@gmail.com', '(514)-254-1254', 1),
(2, '', '', '', '', '', '(514)-254-1254', 2),
(3, '', '', '', '', '', '(514)-254-1254', 2),
(4, '', '', '', '', '', '(514)-254-1254', 2),
(5, '', '', '', '', '', '(514)-254-1254', 1);

-- --------------------------------------------------------

--
-- Table structure for table `vino__utilisateur_type`
--

DROP TABLE IF EXISTS `vino__utilisateur_type`;
CREATE TABLE IF NOT EXISTS `vino__utilisateur_type` (
  `id` int(11) NOT NULL,
  `type` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vino__utilisateur_type`
--

INSERT INTO `vino__utilisateur_type` (`id`, `type`) VALUES
(1, 'administrateur'),
(2, 'usager');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `vino__bouteille`
--
ALTER TABLE `vino__bouteille`
  ADD CONSTRAINT `vino__bouteille_ibfk_1` FOREIGN KEY (`id_type`) REFERENCES `vino__bouteille_type` (`id`);

--
-- Constraints for table `vino__cellier`
--
ALTER TABLE `vino__cellier`
  ADD CONSTRAINT `vino__cellier_ibfk_1` FOREIGN KEY (`id_utilisateur`) REFERENCES `vino__utilisateur` (`id`);

--
-- Constraints for table `vino__cellier_bouteille`
--
ALTER TABLE `vino__cellier_bouteille`
  ADD CONSTRAINT `vino__cellier_bouteille_ibfk_1` FOREIGN KEY (`id_cellier`) REFERENCES `vino__cellier` (`id`),
  ADD CONSTRAINT `vino__cellier_bouteille_ibfk_2` FOREIGN KEY (`id_bouteille`) REFERENCES `vino__bouteille` (`id`);

--
-- Constraints for table `vino__utilisateur`
--
ALTER TABLE `vino__utilisateur`
  ADD CONSTRAINT `vino__utilisateur_ibfk_1` FOREIGN KEY (`id_type`) REFERENCES `vino__utilisateur_type` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
