-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 02 déc. 2024 à 18:12
-- Version du serveur : 10.4.28-MariaDB
-- Version de PHP : 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `jo_manager`
--

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `ID_Categorie` int(11) NOT NULL,
  `Nom` varchar(255) NOT NULL,
  `Description` text DEFAULT NULL,
  `Mat_Shop` int(11) DEFAULT NULL,
  `Mat_Cat` varchar(100) NOT NULL,
  `Date_Ajout` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`ID_Categorie`, `Nom`, `Description`, `Mat_Shop`, `Mat_Cat`, `Date_Ajout`) VALUES
(1, 'Lit', 'Lits en plusieurs tailles et matériaux', 1, 'C001', '2024-10-27'),
(2, 'Matelas', 'Matelas de qualité avec différents niveaux de confort', 2, 'C002', '2024-10-27'),
(3, 'Table', 'Tables pour salon, salle à manger et bureau', 3, 'C003', '2024-10-27'),
(4, 'Chaise', 'Chaises pour différents styles de maison et bureau', 4, 'C004', '2024-10-27'),
(5, 'Armoire', 'Armoires et rangements pour la chambre', 5, 'C005', '2024-10-27');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) DEFAULT NULL,
  `telephone` varchar(255) NOT NULL,
  `ville` varchar(255) NOT NULL,
  `localisation` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE `commande` (
  `ID_Commande` int(11) NOT NULL,
  `Mat_Shop` varchar(255) DEFAULT NULL,
  `Mat_Com` varchar(100) NOT NULL,
  `Produit_acheter` text NOT NULL,
  `Prix` decimal(10,2) NOT NULL,
  `nom_client` varchar(255) NOT NULL,
  `telephon_client` varchar(255) NOT NULL,
  `localisation` varchar(255) NOT NULL,
  `Date_Achat` date NOT NULL DEFAULT current_timestamp(),
  `Mat_Mem` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `commande`
--

INSERT INTO `commande` (`ID_Commande`, `Mat_Shop`, `Mat_Com`, `Produit_acheter`, `Prix`, `nom_client`, `telephon_client`, `localisation`, `Date_Achat`, `Mat_Mem`) VALUES
(83, 'B612', 'C-79900', 'soie / coton / dure / coussins', 84550.00, 'Ngouo', '655544444', 'Kribi, Dombe', '2024-11-28', 0),
(84, 'B125', 'C-9643', 'coussins / coussin-double / soie / coton', 195000.00, 'Ngouo gil', '655544499', 'Limbe, Dombe', '2024-11-28', 0),
(85, 'B125', 'C-9643', 'coussins / coussin-double / soie / coton', 195000.00, 'Ngouo gil', '655544499', 'Limbe, Dombe', '2024-11-28', 0),
(86, 'B125', 'C-37042', 'coussins / coussin-double / soie / coton', 147000.00, 'Divin', '99999999', 'Yaounde, Londo', '2024-11-28', 0),
(87, 'B125', 'C-74315', 'soie / coussin-double', 22000.00, 'Steeve', '55555555', 'Yaounde, Damas', '2024-11-28', 0),
(88, 'B125', 'C-74315', 'soie / coussin-double', 22000.00, 'Steeve', '55555555', 'Yaounde, Damas', '2024-11-28', 0),
(89, 'B125', 'C-65656', 'soie', 36000.00, 'Ngouo', '655544444', 'Kribi, Dombe', '2024-11-28', 0),
(90, 'B125', 'C-60825', 'coussin-double / soie', 22000.00, 'Ngouo', '655544444', 'Kribi, Dombe', '2024-11-28', 0),
(91, 'B125', 'C-60825', 'coussin-double / soie', 22000.00, 'Ngouo', '655544444', 'Kribi, Dombe', '2024-11-28', 0),
(92, 'B612', 'C-50522', 'dure / coton', 25200.00, 'Ngouo', '655544499', 'Limbe, Dombe', '2024-11-28', 0),
(93, 'B612', 'C-50522', 'dure / coton', 25200.00, 'Ngouo', '655544499', 'Limbe, Dombe', '2024-11-28', 0),
(94, 'B612', 'C-70976', 'coton', 15000.00, 'Divin', '99999999', 'Yaounde, Londo', '2024-11-28', 0);

-- --------------------------------------------------------

--
-- Structure de la table `connexion`
--

CREATE TABLE `connexion` (
  `ID_Connexion` int(11) NOT NULL,
  `Mat_Mem` varchar(11) DEFAULT NULL,
  `Action` varchar(255) NOT NULL,
  `Mat_Shop` varchar(11) DEFAULT NULL,
  `Date_Action` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `dimensions`
--

CREATE TABLE `dimensions` (
  `id` int(11) NOT NULL,
  `dimension` varchar(100) NOT NULL,
  `mat_type` varchar(255) NOT NULL,
  `mat_dim` varchar(100) NOT NULL,
  `date_ajour` date DEFAULT curdate()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `dimensions`
--

INSERT INTO `dimensions` (`id`, `dimension`, `mat_type`, `mat_dim`, `date_ajour`) VALUES
(1, '888', '', 'Dim-1287', '2024-11-15'),
(2, '888', 'type-356', 'Dim-30201', '2024-11-18'),
(3, '888', 'type-356', 'Dim-17092', '2024-11-18'),
(4, '555', 'type-356', 'Dim-3986', '2024-11-18'),
(5, '77', 'type-170', 'Dim-23392', '2024-11-18'),
(6, '555', 'type-356', 'Dim-29799', '2024-11-18'),
(7, '34x55', 'type-356', 'Dim-55074', '2024-11-18'),
(8, '300 X 60', 'type-356', 'Dim-75887', '2024-11-18'),
(9, '77', 'Type-149', 'Dim-62582', '2024-11-20'),
(10, '699', 'Type-149', 'Dim-17710', '2024-11-20'),
(11, '888', 'type-356', 'Dim-1435', '2024-11-20'),
(12, '77', 'type-356', 'Dim-48456', '2024-11-20'),
(13, '77', 'type-356', 'Dim-6025', '2024-11-20'),
(14, '12', 'Type-125', 'Dim-30808', '2024-11-20'),
(15, '14', 'Type-125', 'Dim-64084', '2024-11-21'),
(16, '14', 'Type-125', 'Dim-19425', '2024-11-21'),
(17, '80', 'type-170', 'Dim-25907', '2024-11-28');

-- --------------------------------------------------------

--
-- Structure de la table `epaisseur`
--

CREATE TABLE `epaisseur` (
  `id` int(11) NOT NULL,
  `epaisseur` int(11) NOT NULL,
  `mat_type` varchar(255) NOT NULL,
  `mat_epaisseur` varchar(255) NOT NULL,
  `date_ajout` date DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `epaisseur`
--

INSERT INTO `epaisseur` (`id`, `epaisseur`, `mat_type`, `mat_epaisseur`, `date_ajout`) VALUES
(3, 0, 'type-170', 'Ep-73963', '2024-11-18'),
(4, 4444, 'type-170', 'Ep-2575', '2024-11-18'),
(5, 0, 'Type-149', 'Ep-14836', '2024-11-18'),
(6, 0, 'Type-149', 'Ep-49548', '2024-11-18'),
(7, 4444, 'Type-149', 'Ep-73981', '2024-11-18'),
(8, 88888, 'type-356', 'Ep-22128', '2024-11-18'),
(9, 133333, 'type-356', 'Ep-36467', '2024-11-18'),
(10, 50, 'Type-125', 'Ep-8554', '2024-11-20'),
(11, 44, 'type-356', 'Ep-7458', '2024-11-20'),
(12, 4444, 'Type-149', 'Ep-55506', '2024-11-20'),
(13, 50, 'Type-149', 'Ep-71811', '2024-11-21'),
(14, 10, 'Type-125', 'Ep-60235', '2024-11-22');

-- --------------------------------------------------------

--
-- Structure de la table `gamme_produit`
--

CREATE TABLE `gamme_produit` (
  `id` int(11) NOT NULL,
  `nom_gamme` varchar(255) NOT NULL,
  `mat_type` varchar(255) NOT NULL,
  `mat_gamme` varchar(100) NOT NULL,
  `date_aj` date DEFAULT curdate()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `gamme_produit`
--

INSERT INTO `gamme_produit` (`id`, `nom_gamme`, `mat_type`, `mat_gamme`, `date_aj`) VALUES
(1, 'hhhh', '', 'Gam-35443', '2024-11-15'),
(2, 'grand', 'type-170', 'Gam-76378', '2024-11-18'),
(3, 'double', 'type-356', 'Gam-58367', '2024-11-18'),
(4, 'triple', 'type-356', 'Gam-188', '2024-11-18'),
(5, 'hhh', 'Type-149', 'Gam-35417', '2024-11-20'),
(6, 'soie', 'Type-125', 'Gam-49147', '2024-11-20'),
(7, 'coussins', 'type-190', 'Gam-64495', '2024-11-20'),
(8, 'hi-tech', 'type-170', 'Gam-70613', '2024-11-28'),
(9, 'coton', 'Type-125', 'Gam-69029', '2024-11-28'),
(10, 'dure', 'Type-149', 'Gam-69110', '2024-11-28'),
(11, 'tendre', 'Type-149', 'Gam-59154', '2024-11-28'),
(12, 'coussin-double', 'type-190', 'Gam-59156', '2024-11-28');

-- --------------------------------------------------------

--
-- Structure de la table `membre`
--

CREATE TABLE `membre` (
  `ID_Membre` int(11) NOT NULL,
  `Nom` varchar(255) NOT NULL,
  `Localisation` varchar(255) DEFAULT NULL,
  `Telephone` varchar(15) NOT NULL,
  `Matricule` varchar(100) NOT NULL,
  `Mat_Shop` varchar(255) DEFAULT NULL,
  `Role` int(50) NOT NULL,
  `Date_Ajout` date NOT NULL,
  `Permission` int(11) DEFAULT NULL,
  `password` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `membre`
--

INSERT INTO `membre` (`ID_Membre`, `Nom`, `Localisation`, `Telephone`, `Matricule`, `Mat_Shop`, `Role`, `Date_Ajout`, `Permission`, `password`) VALUES
(4, 'Dony', 'Logbessou', '+237 690 99 99 ', 'MAT001', NULL, 1, '2024-10-26', NULL, '123456'),
(8, 'Guy Marcel SOHAING', 'logpom', '690386539', 'JO-463', 'B612', 2, '0000-00-00', NULL, 'Password-674'),
(9, 'bayiha Dieudonne', 'logpom', '+237690386539', 'JO-773', 'B125', 2, '0000-00-00', NULL, 'Pw-2967');

-- --------------------------------------------------------

--
-- Structure de la table `pack`
--

CREATE TABLE `pack` (
  `id` int(11) NOT NULL,
  `le_pack` varchar(255) NOT NULL,
  `mat_pack` varchar(100) NOT NULL,
  `date_aj` date DEFAULT curdate()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `produicts_all`
--

CREATE TABLE `produicts_all` (
  `id` int(11) NOT NULL,
  `nom_produit` varchar(255) NOT NULL,
  `mat_type` varchar(100) DEFAULT NULL,
  `mat_gamme` varchar(100) DEFAULT NULL,
  `nom_gamme` varchar(255) NOT NULL,
  `mat_produit` varchar(100) NOT NULL,
  `dimensions` varchar(100) DEFAULT NULL,
  `epaisseur` decimal(5,2) DEFAULT NULL,
  `Taie` varchar(255) NOT NULL,
  `prix_achat` decimal(10,2) DEFAULT NULL,
  `Coef_vente` decimal(5,2) DEFAULT NULL,
  `prix_de_vente` decimal(10,2) DEFAULT NULL,
  `prix_unitaire` decimal(10,2) DEFAULT NULL,
  `description_produit` text DEFAULT NULL,
  `remise` decimal(5,2) DEFAULT NULL,
  `pack` varchar(100) DEFAULT NULL,
  `Img1` varchar(255) DEFAULT NULL,
  `Img2` varchar(255) DEFAULT NULL,
  `Img3` varchar(255) DEFAULT NULL,
  `date_aj` date DEFAULT curdate()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `produicts_all`
--

INSERT INTO `produicts_all` (`id`, `nom_produit`, `mat_type`, `mat_gamme`, `nom_gamme`, `mat_produit`, `dimensions`, `epaisseur`, `Taie`, `prix_achat`, `Coef_vente`, `prix_de_vente`, `prix_unitaire`, `description_produit`, `remise`, `pack`, `Img1`, `Img2`, `Img3`, `date_aj`) VALUES
(59, 'Draps', 'Type-125', 'Gam-49147', 'soie', 'p-57926', '14', 10.00, 'raide', 4000.00, 3.00, 12000.00, NULL, 'doux', 34.00, NULL, 'img_674843a9c54c58.48651067.jpg', NULL, NULL, '2024-11-28'),
(60, 'Draps', 'Type-125', 'Gam-69029', 'coton', 'p-75799', '14', 10.00, 'sale', 7500.00, 2.00, 15000.00, NULL, 'large', 600.00, NULL, 'img_674843f4ddc282.83248562.jpg', NULL, NULL, '2024-11-28'),
(61, 'Matelas', 'type-356', 'Gam-188', 'triple', 'p-45980', '77', 44.00, '', 600.00, 4.00, 2400.00, NULL, 'grand', 444.00, NULL, 'img_6748446e9295e3.57482632.jpg', NULL, NULL, '2024-11-28'),
(62, 'Matelas', 'type-356', 'Gam-188', 'triple', 'p-50989', '77', 44.00, '', 5000.00, 6.00, 30000.00, NULL, 'durable', 999.99, NULL, 'img_674844a2080945.17094618.jpg', NULL, NULL, '2024-11-28'),
(63, 'Mousse', 'Type-149', 'Gam-69110', 'dure', 'p-58488', '699', 50.00, '', 850.00, 3.00, 2550.00, NULL, 'gros', 500.00, NULL, 'img_6748479028f433.81410802.jpg', NULL, NULL, '2024-11-28'),
(64, 'Mousse', 'Type-149', 'Gam-59154', 'tendre', 'p-1342', '699', 50.00, '', 600.00, 8.00, 4800.00, NULL, 'bonne', 600.00, NULL, 'img_674847d69b9307.81982152.jpg', NULL, NULL, '2024-11-28'),
(65, 'Oreillers', 'type-190', 'Gam-64495', 'coussins', 'p-68289', '', 0.00, '', 7000.00, 1.00, 7000.00, NULL, 'gros', 350.00, NULL, 'img_674847f9b52967.74430287.jpg', NULL, NULL, '2024-11-28'),
(66, 'Oreillers', 'type-190', 'Gam-59156', 'coussin-double', 'p-39986', '', 0.00, '', 5000.00, 2.00, 10000.00, NULL, 'immense', 500.00, NULL, 'img_6748483a738820.87130232.jpg', NULL, NULL, '2024-11-28');

-- --------------------------------------------------------

--
-- Structure de la table `produits_boutik`
--

CREATE TABLE `produits_boutik` (
  `id` int(11) NOT NULL,
  `Mat_shop` varchar(100) DEFAULT NULL,
  `mat_produit` varchar(100) DEFAULT NULL,
  `quantite` int(11) DEFAULT NULL,
  `mat_produit_boutik` varchar(100) NOT NULL,
  `date_aj` date DEFAULT curdate()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `produits_boutik`
--

INSERT INTO `produits_boutik` (`id`, `Mat_shop`, `mat_produit`, `quantite`, `mat_produit_boutik`, `date_aj`) VALUES
(125, 'B125', 'p-68289', 0, 'Produit_boutik-42804', '2024-11-28'),
(126, 'B125', 'p-39986', 0, 'Produit_boutik-26446', '2024-11-28'),
(127, 'B125', 'p-57926', 0, 'Produit_boutik-56370', '2024-11-28'),
(128, 'B125', 'p-75799', 2, 'Produit_boutik-22056', '2024-11-28'),
(130, 'B125', 'p-58488', 5, 'Produit_boutik-33630', '2024-11-28'),
(131, 'B125', 'p-45980', 5, 'Produit_boutik-12367', '2024-11-28'),
(132, 'B125', 'p-50989', 5, 'Produit_boutik-8505', '2024-11-28'),
(133, 'B612', 'p-57926', 2, 'Produit_boutik-25138', '2024-11-28'),
(134, 'B612', 'p-75799', 4, 'Produit_boutik-74920', '2024-11-28'),
(135, 'B612', 'p-58488', 5, 'Produit_boutik-47446', '2024-11-28'),
(136, 'B612', 'p-68289', 4, 'Produit_boutik-26460', '2024-11-28'),
(137, 'B612', 'p-39986', 7, 'Produit_boutik-70682', '2024-11-28'),
(138, 'B612', 'p-45980', 7, 'Produit_boutik-37724', '2024-11-28');

-- --------------------------------------------------------

--
-- Structure de la table `prospect`
--

CREATE TABLE `prospect` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `telephone` varchar(15) NOT NULL,
  `Type_rencontre` varchar(255) DEFAULT NULL,
  `besoin` text DEFAULT NULL,
  `is_client` tinyint(1) DEFAULT 0,
  `date_rencontre` date DEFAULT NULL,
  `date_aj` date DEFAULT curdate(),
  `mat_pros` varchar(100) NOT NULL,
  `localisation` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `prospect`
--

INSERT INTO `prospect` (`id`, `nom`, `telephone`, `Type_rencontre`, `besoin`, `is_client`, `date_rencontre`, `date_aj`, `mat_pros`, `localisation`) VALUES
(8, 'nnnn', 'cccc', NULL, 'mmmmm', 0, '2024-11-20', '2024-11-15', 'Pros-476', 'Douala'),
(9, 'nnnn', 'cccc', NULL, 'mmmmm', 0, '2024-12-07', '2024-11-15', 'Pros-156', 'Douala'),
(10, 'mmmmmmmmm mmm', 'cccc', NULL, 'mmmmm', 0, '2024-11-28', '2024-11-15', 'Pros-748', 'Douala');

-- --------------------------------------------------------

--
-- Structure de la table `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `role` varchar(222) NOT NULL,
  `gestion_boutik` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `role`
--

INSERT INTO `role` (`id`, `role`, `gestion_boutik`) VALUES
(1, 'Admin', 0),
(2, 'Gerant', 1);

-- --------------------------------------------------------

--
-- Structure de la table `shop`
--

CREATE TABLE `shop` (
  `ID_Shop` int(11) NOT NULL,
  `Mat_Shop` varchar(100) NOT NULL,
  `Nom_Shop` varchar(255) NOT NULL,
  `Localisation` varchar(255) DEFAULT NULL,
  `Telephone` varchar(15) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Mat_admin` varchar(11) DEFAULT NULL,
  `logo` varchar(202) DEFAULT NULL,
  `Banniere` varchar(255) DEFAULT NULL,
  `Date_Ajout` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `shop`
--

INSERT INTO `shop` (`ID_Shop`, `Mat_Shop`, `Nom_Shop`, `Localisation`, `Telephone`, `Email`, `Mat_admin`, `logo`, `Banniere`, `Date_Ajout`) VALUES
(1, 'B612', 'Jo-retail bedy', 'logpom', '+237 0690386539', 'dieudonnebayiha@manaschool.net', 'MAT001', '24-10-29-35jo_retail212.jpg', '0', '2024-10-29'),
(2, 'B661', 'Michel Biyong Shop', 'Makepe', '72219712', '022@gmail.com', 'MAT001', '24-10-29-09jo_retail934.jpeg', '0', '2024-10-29'),
(3, 'B125', 'Jo-retail bonamoussadi', 'Bonamoussdi', '690386539', 'donalbayiha@gmail.com', 'MAT001', '24-11-12-05akila_blog100.png', '0', '2024-11-12');

-- --------------------------------------------------------

--
-- Structure de la table `type_produit`
--

CREATE TABLE `type_produit` (
  `id` int(11) NOT NULL,
  `nom_type` varchar(255) NOT NULL,
  `mat_type` varchar(100) NOT NULL,
  `date_aj` date DEFAULT curdate()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `type_produit`
--

INSERT INTO `type_produit` (`id`, `nom_type`, `mat_type`, `date_aj`) VALUES
(1, 'Draps', 'Type-125', '2024-11-15'),
(2, 'Mousse', 'Type-149', '2024-11-15'),
(3, 'Matelas', 'type-356', '2024-11-15'),
(5, 'Electromenager', 'type-170', '2024-11-18'),
(6, 'Oreillers', 'type-190', '2024-11-18');

-- --------------------------------------------------------

--
-- Structure de la table `type_rencontre`
--

CREATE TABLE `type_rencontre` (
  `id` int(11) NOT NULL,
  `label` varchar(255) NOT NULL,
  `mat_type` varchar(100) NOT NULL,
  `date_aj` date DEFAULT curdate()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`ID_Categorie`),
  ADD KEY `Mat_Cat` (`Mat_Cat`);

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`ID_Commande`),
  ADD KEY `Mat_Shop` (`Mat_Shop`);

--
-- Index pour la table `connexion`
--
ALTER TABLE `connexion`
  ADD PRIMARY KEY (`ID_Connexion`);

--
-- Index pour la table `dimensions`
--
ALTER TABLE `dimensions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `mat_dim` (`mat_dim`);

--
-- Index pour la table `epaisseur`
--
ALTER TABLE `epaisseur`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `gamme_produit`
--
ALTER TABLE `gamme_produit`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `mat_gamme` (`mat_gamme`);

--
-- Index pour la table `membre`
--
ALTER TABLE `membre`
  ADD PRIMARY KEY (`ID_Membre`),
  ADD UNIQUE KEY `Telephone` (`Telephone`),
  ADD KEY `Role` (`Role`);

--
-- Index pour la table `pack`
--
ALTER TABLE `pack`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `mat_pack` (`mat_pack`);

--
-- Index pour la table `produicts_all`
--
ALTER TABLE `produicts_all`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `mat_produit` (`mat_produit`),
  ADD KEY `mat_type` (`mat_type`),
  ADD KEY `mat_gamme` (`mat_gamme`),
  ADD KEY `pack` (`pack`);

--
-- Index pour la table `produits_boutik`
--
ALTER TABLE `produits_boutik`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `mat_produit_boutik` (`mat_produit_boutik`),
  ADD KEY `mat_produit` (`mat_produit`),
  ADD KEY `Mat_shop` (`Mat_shop`);

--
-- Index pour la table `prospect`
--
ALTER TABLE `prospect`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `mat_pros` (`mat_pros`);

--
-- Index pour la table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `shop`
--
ALTER TABLE `shop`
  ADD PRIMARY KEY (`ID_Shop`),
  ADD UNIQUE KEY `Mat_Shop` (`Mat_Shop`),
  ADD UNIQUE KEY `Telephone` (`Telephone`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Index pour la table `type_produit`
--
ALTER TABLE `type_produit`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `mat_type` (`mat_type`);

--
-- Index pour la table `type_rencontre`
--
ALTER TABLE `type_rencontre`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `mat_type` (`mat_type`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `ID_Categorie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `commande`
--
ALTER TABLE `commande`
  MODIFY `ID_Commande` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT pour la table `connexion`
--
ALTER TABLE `connexion`
  MODIFY `ID_Connexion` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `dimensions`
--
ALTER TABLE `dimensions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT pour la table `epaisseur`
--
ALTER TABLE `epaisseur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `gamme_produit`
--
ALTER TABLE `gamme_produit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `membre`
--
ALTER TABLE `membre`
  MODIFY `ID_Membre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `pack`
--
ALTER TABLE `pack`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `produicts_all`
--
ALTER TABLE `produicts_all`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT pour la table `produits_boutik`
--
ALTER TABLE `produits_boutik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=139;

--
-- AUTO_INCREMENT pour la table `prospect`
--
ALTER TABLE `prospect`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `shop`
--
ALTER TABLE `shop`
  MODIFY `ID_Shop` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `type_produit`
--
ALTER TABLE `type_produit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `type_rencontre`
--
ALTER TABLE `type_rencontre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `commande`
--
ALTER TABLE `commande`
  ADD CONSTRAINT `commande_ibfk_1` FOREIGN KEY (`Mat_Shop`) REFERENCES `shop` (`Mat_Shop`);

--
-- Contraintes pour la table `membre`
--
ALTER TABLE `membre`
  ADD CONSTRAINT `membre_ibfk_1` FOREIGN KEY (`Role`) REFERENCES `role` (`id`);

--
-- Contraintes pour la table `produicts_all`
--
ALTER TABLE `produicts_all`
  ADD CONSTRAINT `produicts_all_ibfk_1` FOREIGN KEY (`mat_type`) REFERENCES `type_produit` (`mat_type`),
  ADD CONSTRAINT `produicts_all_ibfk_2` FOREIGN KEY (`mat_gamme`) REFERENCES `gamme_produit` (`mat_gamme`),
  ADD CONSTRAINT `produicts_all_ibfk_3` FOREIGN KEY (`pack`) REFERENCES `pack` (`mat_pack`);

--
-- Contraintes pour la table `produits_boutik`
--
ALTER TABLE `produits_boutik`
  ADD CONSTRAINT `produits_boutik_ibfk_1` FOREIGN KEY (`mat_produit`) REFERENCES `produicts_all` (`mat_produit`),
  ADD CONSTRAINT `produits_boutik_ibfk_2` FOREIGN KEY (`Mat_shop`) REFERENCES `shop` (`Mat_Shop`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
