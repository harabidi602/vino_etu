-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : ven. 09 oct. 2020 à 10:11
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
-- Structure de la table `vino__bouteille`
--

CREATE TABLE `vino__bouteille` (
  `id` int(11) NOT NULL,
  `nom` varchar(200) DEFAULT NULL,
  `image` varchar(200) DEFAULT NULL,
  `code_saq` varchar(50) DEFAULT NULL,
  `pays` varchar(50) DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL,
  `prix_saq` float DEFAULT NULL,
  `url_saq` varchar(200) DEFAULT NULL,
  `url_img` varchar(200) DEFAULT NULL,
  `format` varchar(20) DEFAULT NULL,
  `id_type` int(11) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `vino__bouteille`
--

INSERT INTO `vino__bouteille` (`id`, `nom`, `image`, `code_saq`, `pays`, `description`, `prix_saq`, `url_saq`, `url_img`, `format`, `id_type`, `id_user`) VALUES
(343, '1000 Stories Zinfandel Californie 2018 750 ml', '//www.saq.com/media/catalog/product/1/3/13584455-1_1578538222.png?quality=80&fit=bounds&height=166&width=111&canvas=111:166', '13584455', 'États-Unis', 'Vin rouge | 750 ml | États-Unis', 28.85, 'https://www.saq.com/fr/13584455', '//www.saq.com/media/catalog/product/1/3/13584455-1_1578538222.png?quality=80&fit=bounds&height=166&width=111&canvas=111:166', '750 ml', 1, NULL),
(344, '11th Hour Cellars Pinot Noir 750 ml', '//www.saq.com/media/catalog/product/1/3/13966470-1_1578546924.png?quality=80&fit=bounds&height=166&width=111&canvas=111:166', '13966470', 'États-Unis', 'Vin rouge | 750 ml | États-Unis', 18.45, 'https://www.saq.com/fr/13966470', '//www.saq.com/media/catalog/product/1/3/13966470-1_1578546924.png?quality=80&fit=bounds&height=166&width=111&canvas=111:166', '750 ml', 1, NULL),
(345, '13th Street Winery Gamay 2017 750 ml', '//www.saq.com/media/catalog/product/1/2/12705631-1_1582140016.png?quality=80&fit=bounds&height=166&width=111&canvas=111:166', '12705631', 'Canada', 'Vin rouge | 750 ml | Canada', 19.95, 'https://www.saq.com/fr/12705631', '//www.saq.com/media/catalog/product/1/2/12705631-1_1582140016.png?quality=80&fit=bounds&height=166&width=111&canvas=111:166', '750 ml', 1, NULL),
(346, '13th Street Winery Red Palette 2016 750 ml', '//www.saq.com/media/catalog/product/1/2/12687823-1_1578361222.png?quality=80&fit=bounds&height=166&width=111&canvas=111:166', '12687823', 'Canada', 'Vin rouge | 750 ml | Canada', 18.95, 'https://www.saq.com/fr/12687823', '//www.saq.com/media/catalog/product/1/2/12687823-1_1578361222.png?quality=80&fit=bounds&height=166&width=111&canvas=111:166', '750 ml', 1, NULL),
(347, '14 Hands Cabernet-Sauvignon Columbia Valley 750 ml', '//www.saq.com/media/catalog/product/1/3/13876247-1_1582145731.png?quality=80&fit=bounds&height=166&width=111&canvas=111:166', '13876247', 'États-Unis', 'Vin rouge | 750 ml | États-Unis', 14.95, 'https://www.saq.com/fr/13876247', '//www.saq.com/media/catalog/product/1/3/13876247-1_1582145731.png?quality=80&fit=bounds&height=166&width=111&canvas=111:166', '750 ml', 1, NULL),
(348, '14 Hands Hot to Trot Columbia Valley 750 ml', '//www.saq.com/media/catalog/product/1/2/12245611-1_1580661909.png?quality=80&fit=bounds&height=166&width=111&canvas=111:166', '12245611', 'États-Unis', 'Vin rouge | 750 ml | États-Unis', 15.95, 'https://www.saq.com/fr/12245611', '//www.saq.com/media/catalog/product/1/2/12245611-1_1580661909.png?quality=80&fit=bounds&height=166&width=111&canvas=111:166', '750 ml', 1, NULL),
(349, '1865 Syrah Limited Edition 2017 750 ml', '//www.saq.com/media/catalog/product/1/3/13270211-1_1578443420.png?quality=80&fit=bounds&height=166&width=111&canvas=111:166', '13270211', 'Chili', 'Vin rouge | 750 ml | Chili', 34.75, 'https://www.saq.com/fr/13270211', '//www.saq.com/media/catalog/product/1/3/13270211-1_1578443420.png?quality=80&fit=bounds&height=166&width=111&canvas=111:166', '750 ml', 1, NULL),
(350, '19 Crimes Cabernet-Sauvignon Limestone Coast 750 ml', '//www.saq.com/media/catalog/product/1/2/12824197-1_1578411313.png?quality=80&fit=bounds&height=166&width=111&canvas=111:166', '12824197', 'Australie', 'Vin rouge | 750 ml | Australie', 18.95, 'https://www.saq.com/fr/12824197', '//www.saq.com/media/catalog/product/1/2/12824197-1_1578411313.png?quality=80&fit=bounds&height=166&width=111&canvas=111:166', '750 ml', 1, NULL),
(351, '19 Crimes Shiraz/Grenache/Mataro 750 ml', '//www.saq.com/media/catalog/product/1/2/12073995-1_1580659214.png?quality=80&fit=bounds&height=166&width=111&canvas=111:166', '12073995', 'Australie', 'Vin rouge | 750 ml | Australie', 18.95, 'https://www.saq.com/fr/12073995', '//www.saq.com/media/catalog/product/1/2/12073995-1_1580659214.png?quality=80&fit=bounds&height=166&width=111&canvas=111:166', '750 ml', 1, NULL),
(352, '1938 - Depuis Un Esprit D\'exception Puisseguin Saint-Émilion 2016 750 ml', '//www.saq.com/media/catalog/product/1/1/11655601-1_1580625025.png?quality=80&fit=bounds&height=166&width=111&canvas=111:166', '11655601', 'France', 'Vin rouge | 750 ml | France', 27.1, 'https://www.saq.com/fr/11655601', '//www.saq.com/media/catalog/product/1/1/11655601-1_1580625025.png?quality=80&fit=bounds&height=166&width=111&canvas=111:166', '750 ml', 1, NULL),
(353, '3 Badge Leese-Fitch Merlot 2015 750 ml', '//www.saq.com/media/wysiwyg/placeholder/category/06.png', '13523011', 'États-Unis', 'Vin rouge | 750 ml | États-Unis', 18.85, 'https://www.saq.com/fr/13523011', '//www.saq.com/media/wysiwyg/placeholder/category/06.png', '750 ml', 1, NULL),
(354, '3 de Valandraud 2016 750 ml', '//www.saq.com/media/catalog/product/1/3/13392031-1_1578535218.png?quality=80&fit=bounds&height=166&width=111&canvas=111:166', '13392031', 'France', 'Vin rouge | 750 ml | France', 52.25, 'https://www.saq.com/fr/13392031', '//www.saq.com/media/catalog/product/1/3/13392031-1_1578535218.png?quality=80&fit=bounds&height=166&width=111&canvas=111:166', '750 ml', 1, NULL),
(355, '3 Rings Shiraz 2017 750 ml', '//www.saq.com/media/catalog/product/1/2/12815725-1_1578411013.png?quality=80&fit=bounds&height=166&width=111&canvas=111:166', '12815725', 'Australie', 'Vin rouge | 750 ml | Australie', 22.25, 'https://www.saq.com/fr/12815725', '//www.saq.com/media/catalog/product/1/2/12815725-1_1578411013.png?quality=80&fit=bounds&height=166&width=111&canvas=111:166', '750 ml', 1, NULL),
(356, '350° de Bellevue 2015 750 ml', '//www.saq.com/media/catalog/product/1/2/12562123-1_1578346511.png?quality=80&fit=bounds&height=166&width=111&canvas=111:166', '12562123', 'France', 'Vin rouge | 750 ml | France', 41.75, 'https://www.saq.com/fr/12562123', '//www.saq.com/media/catalog/product/1/2/12562123-1_1578346511.png?quality=80&fit=bounds&height=166&width=111&canvas=111:166', '750 ml', 1, NULL),
(357, '4 Kilos Gallinas y Focas 2017 750 ml', '//www.saq.com/media/catalog/product/1/3/13903479-1_1589489114.png?quality=80&fit=bounds&height=166&width=111&canvas=111:166', '13903479', 'Espagne', 'Vin rouge | 750 ml | Espagne', 34.5, 'https://www.saq.com/fr/13903479', '//www.saq.com/media/catalog/product/1/3/13903479-1_1589489114.png?quality=80&fit=bounds&height=166&width=111&canvas=111:166', '750 ml', 1, NULL),
(358, '4 Kilos The Island Syndicate 2017 750 ml', '//www.saq.com/media/wysiwyg/placeholder/category/06.png', '13903487', 'Espagne', 'Vin rouge | 750 ml | Espagne', 24.35, 'https://www.saq.com/fr/13903487', '//www.saq.com/media/wysiwyg/placeholder/category/06.png', '750 ml', 1, NULL),
(359, '6 Degrees Red Blend 750 ml', '//www.saq.com/media/catalog/product/1/3/13234738-1_1578442821.png?quality=80&fit=bounds&height=166&width=111&canvas=111:166', '13234738', 'États-Unis', 'Vin rouge | 750 ml | États-Unis', 11.9, 'https://www.saq.com/fr/13234738', '//www.saq.com/media/catalog/product/1/3/13234738-1_1578442821.png?quality=80&fit=bounds&height=166&width=111&canvas=111:166', '750 ml', 1, NULL),
(360, '655 Miles Cabernet Sauvignon Lodi 750 ml', '//www.saq.com/media/catalog/product/1/4/14139863-1_1578552320.png?quality=80&fit=bounds&height=166&width=111&canvas=111:166', '14139863', 'États-Unis', 'Vin rouge | 750 ml | États-Unis', 14.95, 'https://www.saq.com/fr/14139863', '//www.saq.com/media/catalog/product/1/4/14139863-1_1578552320.png?quality=80&fit=bounds&height=166&width=111&canvas=111:166', '750 ml', 1, NULL),
(361, '7Colores Gran Reserva Valle Casablanca 2016 750 ml', '//www.saq.com/media/wysiwyg/placeholder/category/06.png', '14208427', 'Chili', 'Vin rouge | 750 ml | Chili', 19.05, 'https://www.saq.com/fr/14208427', '//www.saq.com/media/wysiwyg/placeholder/category/06.png', '750 ml', 1, NULL),
(362, 'A Mandria di Signadore Patrimonio 2018 750 ml', '//www.saq.com/media/catalog/product/1/1/11908161-1_1580629223.png?quality=80&fit=bounds&height=166&width=111&canvas=111:166', '11908161', 'France', 'Vin rouge | 750 ml | France', 41, 'https://www.saq.com/fr/11908161', '//www.saq.com/media/catalog/product/1/1/11908161-1_1580629223.png?quality=80&fit=bounds&height=166&width=111&canvas=111:166', '750 ml', 1, NULL),
(363, 'A thousand Lives Cabernet-Sauvignon Mendoza 750 ml', '//www.saq.com/media/catalog/product/1/4/14250211-1_1580352616.png?quality=80&fit=bounds&height=166&width=111&canvas=111:166', '14250211', 'Argentine', 'Vin rouge | 750 ml | Argentine', 8.95, 'https://www.saq.com/fr/14250211', '//www.saq.com/media/catalog/product/1/4/14250211-1_1580352616.png?quality=80&fit=bounds&height=166&width=111&canvas=111:166', '750 ml', 1, NULL),
(364, 'A. & P. de Villaine La Fortune 2018 750 ml', '//www.saq.com/media/catalog/product/9/1/918219-1_1580608218.png?quality=80&fit=bounds&height=166&width=111&canvas=111:166', '918219', 'France', 'Vin rouge | 750 ml | France', 42.25, 'https://www.saq.com/fr/918219', '//www.saq.com/media/catalog/product/9/1/918219-1_1580608218.png?quality=80&fit=bounds&height=166&width=111&canvas=111:166', '750 ml', 1, NULL),
(365, 'A. de Luze & Fils Château La Verrière 2016 750 ml', '//www.saq.com/media/catalog/product/1/3/13710861-1_1580352021.png?quality=80&fit=bounds&height=166&width=111&canvas=111:166', '13710861', 'France', 'Vin rouge | 750 ml | France', 20, 'https://www.saq.com/fr/13710861', '//www.saq.com/media/catalog/product/1/3/13710861-1_1580352021.png?quality=80&fit=bounds&height=166&width=111&canvas=111:166', '750 ml', 1, NULL),
(366, 'A.A. Badenhorst Family Red Blend 2017 750 ml', '//www.saq.com/media/catalog/product/1/2/12275298-1_1581958830.png?quality=80&fit=bounds&height=166&width=111&canvas=111:166', '12275298', 'Afrique du Sud', 'Vin rouge | 750 ml | Afrique du Sud', 41.75, 'https://www.saq.com/fr/12275298', '//www.saq.com/media/catalog/product/1/2/12275298-1_1581958830.png?quality=80&fit=bounds&height=166&width=111&canvas=111:166', '750 ml', 1, NULL),
(441, 'A.A. Badenhorst The Curator 2018 750 ml', '//www.saq.com/media/catalog/product/1/2/12819435-1_1589314084.png?quality=80&fit=bounds&height=166&width=111&canvas=111:166', '12819435', 'Afrique du Sud', 'Vin rouge | 750 ml | Afrique du Sud', 14.2, 'https://www.saq.com/fr/12819435', '//www.saq.com/media/catalog/product/1/2/12819435-1_1589314084.png?quality=80&fit=bounds&height=166&width=111&canvas=111:166', '750 ml', 1, NULL),
(442, 'test bouteille karima', NULL, NULL, 'canada', '', 0, NULL, '', '', 2, 10),
(443, 'test2', NULL, NULL, 'maroc', '', 0, NULL, 'img/bouteille.png', '', 1, 10),
(444, 'nouvelleBouteille', NULL, NULL, 'Maroc', '', 75, NULL, 'img/bouteille.png', '', 1, 10),
(445, 'nouvelleBouteille', NULL, NULL, 'Maroc', '', 75, NULL, 'img/bouteille.png', '', 1, 10),
(446, 'nouvelleBouteille2', NULL, NULL, 'maroc', '', 4, NULL, 'img/bouteille.png', '', 2, 10),
(447, '19 Crimes Hard Chard 750 ml', '//www.saq.com/media/catalog/product/1/3/13624710-1_1578539419.png?quality=80&fit=bounds&height=166&width=111&canvas=111:166', '13624710', 'Australie', 'Vin blanc | 750 ml | Australie', 17.95, 'https://www.saq.com/fr/13624710', '//www.saq.com/media/catalog/product/1/3/13624710-1_1578539419.png?quality=80&fit=bounds&height=166&width=111&canvas=111:166', '750 ml', 2, NULL),
(448, 'A&D Wines Monologo Arinto p24 2019 750 ml', '//www.saq.com/media/catalog/product/1/4/14296666-1_1580258418.png?quality=80&fit=bounds&height=166&width=111&canvas=111:166', '14296666', 'Portugal', 'Vin blanc | 750 ml | Portugal', 18.65, 'https://www.saq.com/fr/14296666', '//www.saq.com/media/catalog/product/1/4/14296666-1_1580258418.png?quality=80&fit=bounds&height=166&width=111&canvas=111:166', '750 ml', 2, NULL),
(449, 'A.A. Badenhorst The Curator 2019 750 ml', '//www.saq.com/media/catalog/product/1/2/12889126-1_1578413412.png?quality=80&fit=bounds&height=166&width=111&canvas=111:166', '12889126', 'Afrique du Sud', 'Vin blanc | 750 ml | Afrique du Sud', 14.2, 'https://www.saq.com/fr/12889126', '//www.saq.com/media/catalog/product/1/2/12889126-1_1578413412.png?quality=80&fit=bounds&height=166&width=111&canvas=111:166', '750 ml', 2, NULL),
(450, 'Adega De Pegões Colheita Seleccionada 2016 750 ml', '//www.saq.com/media/catalog/product/1/3/13679892-1_1578540618.png?quality=80&fit=bounds&height=166&width=111&canvas=111:166', '13679892', 'Portugal', 'Vin rouge | 750 ml | Portugal', 16.55, 'https://www.saq.com/fr/13679892', '//www.saq.com/media/catalog/product/1/3/13679892-1_1578540618.png?quality=80&fit=bounds&height=166&width=111&canvas=111:166', '750 ml', 1, NULL),
(451, 'Adega de Pegões Colheita Seleccionada Peninsula de Setubal 750 ml', '//www.saq.com/media/catalog/product/1/0/10838801-1_1580608817.png?quality=80&fit=bounds&height=166&width=111&canvas=111:166', '10838801', 'Portugal', 'Vin blanc | 750 ml | Portugal', 12.7, 'https://www.saq.com/fr/10838801', '//www.saq.com/media/catalog/product/1/0/10838801-1_1580608817.png?quality=80&fit=bounds&height=166&width=111&canvas=111:166', '750 ml', 2, NULL),
(452, 'Adega de Penalva Dão 2019 750 ml', '//www.saq.com/media/catalog/product/1/2/12728904-1_1578408922.png?quality=80&fit=bounds&height=166&width=111&canvas=111:166', '12728904', 'Portugal', 'Vin blanc | 750 ml | Portugal', 11.95, 'https://www.saq.com/fr/12728904', '//www.saq.com/media/catalog/product/1/2/12728904-1_1578408922.png?quality=80&fit=bounds&height=166&width=111&canvas=111:166', '750 ml', 2, NULL),
(453, 'Alain Brumont La Gascogne 3 L', '//www.saq.com/media/catalog/product/1/3/13950347-1_1578546910.png?quality=80&fit=bounds&height=166&width=111&canvas=111:166', '13950347', 'France', 'Vin blanc | 3 L | France', 43.15, 'https://www.saq.com/fr/13950347', '//www.saq.com/media/catalog/product/1/3/13950347-1_1578546910.png?quality=80&fit=bounds&height=166&width=111&canvas=111:166', '3 L', 2, NULL),
(454, 'Alain Chavy Puligny Montrachet Les Char 2018 750 ml', '//www.saq.com/media/wysiwyg/placeholder/category/06.png', '14534652', 'France', 'Vin blanc | 750 ml | France', 101.2, 'https://www.saq.com/fr/14534652', '//www.saq.com/media/wysiwyg/placeholder/category/06.png', '750 ml', 2, NULL),
(455, 'Alain Chavy Saint-Aubin Premier Cru En Remilly 2018 750 ml', '//www.saq.com/media/wysiwyg/placeholder/category/06.png', '14534636', 'France', 'Vin blanc | 750 ml | France', 77.75, 'https://www.saq.com/fr/14534636', '//www.saq.com/media/wysiwyg/placeholder/category/06.png', '750 ml', 2, NULL),
(456, 'Alamos Chardonnay Mendoza 2018 750 ml', '//www.saq.com/media/catalog/product/4/6/467969-1_1580601326.png?quality=80&fit=bounds&height=166&width=111&canvas=111:166', '467969', 'Argentine', 'Vin blanc | 750 ml | Argentine', 14.95, 'https://www.saq.com/fr/467969', '//www.saq.com/media/catalog/product/4/6/467969-1_1580601326.png?quality=80&fit=bounds&height=166&width=111&canvas=111:166', '750 ml', 2, NULL),
(457, 'Alamos Seleccion Malbec Mendoza 2017 750 ml', '//www.saq.com/media/catalog/product/1/1/11015726-1_1580611518.png?quality=80&fit=bounds&height=166&width=111&canvas=111:166', '11015726', 'Argentine', 'Vin rouge | 750 ml | Argentine', 16.3, 'https://www.saq.com/fr/11015726', '//www.saq.com/media/catalog/product/1/1/11015726-1_1580611518.png?quality=80&fit=bounds&height=166&width=111&canvas=111:166', '750 ml', 1, NULL),
(458, 'Albente Feudi di San Gregorio 750 ml', '//www.saq.com/media/catalog/product/1/4/14228356-1_1578554417.png?quality=80&fit=bounds&height=166&width=111&canvas=111:166', '14228356', 'Italie', 'Vin blanc | 750 ml | Italie', 14.3, 'https://www.saq.com/fr/14228356', '//www.saq.com/media/catalog/product/1/4/14228356-1_1578554417.png?quality=80&fit=bounds&height=166&width=111&canvas=111:166', '750 ml', 2, NULL),
(459, 'Albert Bichot Bourgogne Aligoté 750 ml', '//www.saq.com/media/catalog/product/1/3/130724-1_1581313221.png?quality=80&fit=bounds&height=166&width=111&canvas=111:166', '130724', 'France', 'Vin blanc | 750 ml | France', 16.15, 'https://www.saq.com/fr/130724', '//www.saq.com/media/catalog/product/1/3/130724-1_1581313221.png?quality=80&fit=bounds&height=166&width=111&canvas=111:166', '750 ml', 2, NULL),
(460, 'Albert Bichot Bourgogne Vieilles Vignes 750 ml', '//www.saq.com/media/catalog/product/1/0/10667474-1_1580598314.png?quality=80&fit=bounds&height=166&width=111&canvas=111:166', '10667474', 'France', 'Vin rouge | 750 ml | France', 19.05, 'https://www.saq.com/fr/10667474', '//www.saq.com/media/catalog/product/1/0/10667474-1_1580598314.png?quality=80&fit=bounds&height=166&width=111&canvas=111:166', '750 ml', 1, NULL),
(461, 'Albert Bichot Chablis 750 ml', '//www.saq.com/media/catalog/product/1/7/17897-1_1580591719.png?quality=80&fit=bounds&height=166&width=111&canvas=111:166', '17897', 'France', 'Vin blanc | 750 ml | France', 24.95, 'https://www.saq.com/fr/17897', '//www.saq.com/media/catalog/product/1/7/17897-1_1580591719.png?quality=80&fit=bounds&height=166&width=111&canvas=111:166', '750 ml', 2, NULL),
(462, 'Albert Bichot Chardonnay Vieilles Vignes 750 ml', '//www.saq.com/media/catalog/product/1/0/10845357-1_1580609113.png?quality=80&fit=bounds&height=166&width=111&canvas=111:166', '10845357', 'France', 'Vin blanc | 750 ml | France', 18.2, 'https://www.saq.com/fr/10845357', '//www.saq.com/media/catalog/product/1/0/10845357-1_1580609113.png?quality=80&fit=bounds&height=166&width=111&canvas=111:166', '750 ml', 2, NULL),
(463, 'Albert Bichot Pouilly-Fuissé 750 ml', '//www.saq.com/media/catalog/product/2/2/22871-1_1580591726.png?quality=80&fit=bounds&height=166&width=111&canvas=111:166', '22871', 'France', 'Vin blanc | 750 ml | France', 25.85, 'https://www.saq.com/fr/22871', '//www.saq.com/media/catalog/product/2/2/22871-1_1580591726.png?quality=80&fit=bounds&height=166&width=111&canvas=111:166', '750 ml', 2, NULL),
(464, 'Allegrini Corte Giara Valpolicella 750 ml', '//www.saq.com/media/catalog/product/1/3/13190317-1_1594997419.png?quality=80&fit=bounds&height=166&width=111&canvas=111:166', '13190317', 'Italie', 'Vin rouge | 750 ml | Italie', 15.8, 'https://www.saq.com/fr/13190317', '//www.saq.com/media/catalog/product/1/3/13190317-1_1594997419.png?quality=80&fit=bounds&height=166&width=111&canvas=111:166', '750 ml', 1, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `vino__bouteilles_stats`
--

CREATE TABLE `vino__bouteilles_stats` (
  `id` int(11) NOT NULL,
  `id_bouteille` int(11) NOT NULL,
  `date_changement` datetime NOT NULL,
  `actions` int(11) NOT NULL,
  `quantite` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `vino__bouteilles_stats`
--

INSERT INTO `vino__bouteilles_stats` (`id`, `id_bouteille`, `date_changement`, `actions`, `quantite`) VALUES
(23, 344, '2020-10-07 11:40:01', 2, 1),
(24, 344, '2020-10-07 11:40:02', 2, 1),
(25, 344, '2020-10-07 11:40:02', 2, 1),
(26, 344, '2020-10-07 11:40:02', 2, 1),
(27, 344, '2020-10-07 11:40:02', 2, 1),
(28, 344, '2020-10-07 11:40:02', 2, 1),
(29, 344, '2020-10-07 11:40:02', 2, 1),
(30, 344, '2020-10-07 11:40:03', 2, 1),
(31, 344, '2020-10-07 11:40:03', 2, 1),
(32, 344, '2020-10-07 11:40:03', 2, 1),
(33, 344, '2020-10-07 11:40:03', 2, 1),
(34, 344, '2020-10-07 11:40:03', 2, 1),
(35, 346, '2020-10-07 11:40:05', 2, 1),
(36, 346, '2020-10-07 11:40:05', 2, 1),
(37, 346, '2020-10-07 11:40:05', 2, 1),
(38, 346, '2020-10-07 11:40:06', 2, 1),
(39, 346, '2020-10-07 11:40:06', 2, 1),
(40, 346, '2020-10-07 11:40:06', 2, 1),
(41, 346, '2020-10-07 11:40:06', 2, 1),
(42, 346, '2020-10-07 11:40:06', 2, 1),
(43, 346, '2020-10-07 11:40:06', 2, 1),
(44, 346, '2020-10-07 11:40:07', 2, 1),
(45, 346, '2020-10-07 11:40:07', 2, 1),
(46, 350, '2020-10-07 11:40:08', 1, 1),
(47, 350, '2020-10-07 11:40:12', 2, 1),
(48, 350, '2020-10-07 11:40:12', 2, 1),
(49, 350, '2020-10-07 11:40:13', 2, 1),
(50, 350, '2020-10-07 11:40:13', 2, 1),
(51, 350, '2020-10-07 11:40:13', 2, 1),
(52, 350, '2020-10-07 11:40:13', 2, 1),
(53, 363, '2020-10-07 11:40:29', 1, 1),
(54, 363, '2020-10-07 11:40:29', 1, 1),
(55, 363, '2020-10-07 11:40:30', 1, 1),
(56, 363, '2020-10-07 11:40:30', 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `vino__bouteille_type`
--

CREATE TABLE `vino__bouteille_type` (
  `id` int(11) NOT NULL,
  `type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `vino__bouteille_type`
--

INSERT INTO `vino__bouteille_type` (`id`, `type`) VALUES
(1, 'Vin rouge'),
(2, 'Vin blanc'),
(3, 'Vin rosé');

-- --------------------------------------------------------

--
-- Structure de la table `vino__cellier`
--

CREATE TABLE `vino__cellier` (
  `id` int(11) NOT NULL,
  `id_utilisateur` int(11) NOT NULL,
  `nom_cellier` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `vino__cellier`
--

INSERT INTO `vino__cellier` (`id`, `id_utilisateur`, `nom_cellier`) VALUES
(38, 10, 'Karima Cellier1');

-- --------------------------------------------------------

--
-- Structure de la table `vino__cellier_bouteille`
--

CREATE TABLE `vino__cellier_bouteille` (
  `id_cellier` int(11) NOT NULL,
  `id_bouteille` int(11) NOT NULL,
  `nom_bouteille` varchar(255) DEFAULT NULL,
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

INSERT INTO `vino__cellier_bouteille` (`id_cellier`, `id_bouteille`, `nom_bouteille`, `date_achat`, `garde_jusqua`, `notes`, `prix`, `quantite`, `millesime`) VALUES
(38, 343, NULL, '2020-10-08', '1', 'bon', 130, 10, 15),
(38, 442, NULL, '2020-10-08', '0', 'bien', 0, 10, 0),
(38, 443, NULL, '2020-10-08', '0', 'bon', 60, 10, 0),
(38, 446, NULL, '2020-10-08', '0', '', 0, 1, 0);

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
  `date_inscription` date DEFAULT NULL,
  `activation` int(11) NOT NULL,
  `id_type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `vino__utilisateur`
--

INSERT INTO `vino__utilisateur` (`id`, `nom`, `prenom`, `identifiant`, `mdp`, `date_inscription`, `activation`, `id_type`) VALUES
(1, 'Zinedine', 'Zidane', 'zizou', 'd1b6d7cf12ddd26932e1f33d96710e17', '2020-10-05', 1, 1),
(2, 'Ronaldo', 'Cristiano', 'cr7', '3234438d9c3ae26193b8d7a98f0176b2', '2020-10-01', 1, 2),
(10, 'Harabidi', 'Karima', 'karima001', '0cc80f20079e5f24939638f572c38a1a', '2019-09-10', 1, 2),
(12, 'Test', 'Test', 'test', 'b376c02c782be1ef894add6dd5111d71', '2019-09-23', 1, 2),
(15, 'Master', 'Master', 'master', 'd1b6d7cf12ddd26932e1f33d96710e17', NULL, 1, 3),
(51, 'Plokiubhjgg', 'Njkhhzzu', 'jkhzugu85', 'f0c4c3e35c77f6af95aa7770fb217b9b', '2020-07-15', 0, 2),
(52, 'Plokijuh', 'Zgtfrdes', 'tfrdes589', '228d18007ccc53c1ad3850d87e18ab0c', '2020-07-06', 1, 2),
(53, 'Montest', 'Montest', 'test96', 'f01f8d755703f51d944bbe835371fca6', '2020-07-08', 1, 2),
(54, 'Test98', 'Test98', 'test98', 'b47b4ccb4dc861496f04aaa801cc9ebe', '2020-09-08', 1, 2),
(55, 'Margarita', 'Margarita', 'marga74', 'c329f7e2a7324d965b5d7cc0c88f943e', '2020-10-04', 1, 2),
(56, 'Test2', 'Test2', 'test21', 'c16ea6ac5479fb64005672a005a5a7c8', NULL, 1, 2),
(57, 'Lamia', 'Lami', 'lamia001', '05322719ae718070efa911ef71328593', NULL, 1, 2);

-- --------------------------------------------------------

--
-- Structure de la table `vino__utilisateur_type`
--

CREATE TABLE `vino__utilisateur_type` (
  `id` int(11) NOT NULL,
  `type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `vino__utilisateur_type`
--

INSERT INTO `vino__utilisateur_type` (`id`, `type`) VALUES
(1, 'administrateur'),
(2, 'usager'),
(3, 'master');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `vino__bouteille`
--
ALTER TABLE `vino__bouteille`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_type` (`id_type`),
  ADD KEY `vino_bouteille_user` (`id_user`);

--
-- Index pour la table `vino__bouteilles_stats`
--
ALTER TABLE `vino__bouteilles_stats`
  ADD PRIMARY KEY (`id`),
  ADD KEY `vino__bouteilles_stats_ibfk` (`id_bouteille`);

--
-- Index pour la table `vino__bouteille_type`
--
ALTER TABLE `vino__bouteille_type`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `vino__cellier`
--
ALTER TABLE `vino__cellier`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_utilisateur` (`id_utilisateur`);

--
-- Index pour la table `vino__cellier_bouteille`
--
ALTER TABLE `vino__cellier_bouteille`
  ADD PRIMARY KEY (`id_cellier`,`id_bouteille`),
  ADD KEY `id_bouteille` (`id_bouteille`);

--
-- Index pour la table `vino__utilisateur`
--
ALTER TABLE `vino__utilisateur`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_type` (`id_type`);

--
-- Index pour la table `vino__utilisateur_type`
--
ALTER TABLE `vino__utilisateur_type`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `vino__bouteille`
--
ALTER TABLE `vino__bouteille`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=465;

--
-- AUTO_INCREMENT pour la table `vino__bouteilles_stats`
--
ALTER TABLE `vino__bouteilles_stats`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT pour la table `vino__cellier`
--
ALTER TABLE `vino__cellier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT pour la table `vino__utilisateur`
--
ALTER TABLE `vino__utilisateur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `vino__bouteille`
--
ALTER TABLE `vino__bouteille`
  ADD CONSTRAINT `vino__bouteille_ibfk_1` FOREIGN KEY (`id_type`) REFERENCES `vino__bouteille_type` (`id`),
  ADD CONSTRAINT `vino_bouteille_user` FOREIGN KEY (`id_user`) REFERENCES `vino__utilisateur` (`id`);

--
-- Contraintes pour la table `vino__bouteilles_stats`
--
ALTER TABLE `vino__bouteilles_stats`
  ADD CONSTRAINT `vino__bouteilles_stats_ibfk` FOREIGN KEY (`id_bouteille`) REFERENCES `vino__bouteille` (`id`);

--
-- Contraintes pour la table `vino__cellier`
--
ALTER TABLE `vino__cellier`
  ADD CONSTRAINT `vino__cellier_ibfk_1` FOREIGN KEY (`id_utilisateur`) REFERENCES `vino__utilisateur` (`id`);

--
-- Contraintes pour la table `vino__cellier_bouteille`
--
ALTER TABLE `vino__cellier_bouteille`
  ADD CONSTRAINT `vino__cellier_bouteille_ibfk_1` FOREIGN KEY (`id_cellier`) REFERENCES `vino__cellier` (`id`),
  ADD CONSTRAINT `vino__cellier_bouteille_ibfk_2` FOREIGN KEY (`id_bouteille`) REFERENCES `vino__bouteille` (`id`);

--
-- Contraintes pour la table `vino__utilisateur`
--
ALTER TABLE `vino__utilisateur`
  ADD CONSTRAINT `vino__utilisateur_ibfk_1` FOREIGN KEY (`id_type`) REFERENCES `vino__utilisateur_type` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
