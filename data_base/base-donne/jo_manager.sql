-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 29 oct. 2024 à 14:59
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
-- Structure de la table `commande`
--

CREATE TABLE `commande` (
  `ID_Commande` int(11) NOT NULL,
  `Mat_Shop` int(11) DEFAULT NULL,
  `Mat_Com` varchar(100) NOT NULL,
  `Produit_Chaine` int(11) NOT NULL,
  `Prix` decimal(10,2) NOT NULL,
  `Date_Achat` date NOT NULL,
  `Mat_Mem` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
(7, 'bayiha Dieudonne', 'logpom', '+237 0690386539', '791', '343', 2, '0000-00-00', NULL, 'JO-765');

-- --------------------------------------------------------

--
-- Structure de la table `produits`
--

CREATE TABLE `produits` (
  `ID_Produit` int(11) NOT NULL,
  `Mat_Produit` varchar(100) NOT NULL,
  `Nom_Produit` varchar(255) NOT NULL,
  `Description` text DEFAULT NULL,
  `Prix` decimal(10,2) NOT NULL,
  `Prix_Promo` decimal(10,2) DEFAULT NULL,
  `Mat_Cat` varchar(11) DEFAULT NULL,
  `Mat_Shop` varchar(100) DEFAULT NULL,
  `quantite` int(11) NOT NULL,
  `Img1` varchar(255) DEFAULT NULL,
  `Img2` varchar(255) DEFAULT NULL,
  `Img3` varchar(255) DEFAULT NULL,
  `Img4` varchar(255) DEFAULT NULL,
  `Date_Ajout` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `produits`
--

INSERT INTO `produits` (`ID_Produit`, `Mat_Produit`, `Nom_Produit`, `Description`, `Prix`, `Prix_Promo`, `Mat_Cat`, `Mat_Shop`, `quantite`, `Img1`, `Img2`, `Img3`, `Img4`, `Date_Ajout`) VALUES
(1, 'C-535', 'Matelas', 'je suis test', 125000.00, 0.00, 'C002', NULL, 0, 'img_671f2e802d9413.81820486.jpg', 'img_671f2e802f4101.59116801.jpeg', 'img_671f2e802fff54.19759336.jpg', NULL, '0000-00-00');

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
  `Date_Ajout` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `shop`
--

INSERT INTO `shop` (`ID_Shop`, `Mat_Shop`, `Nom_Shop`, `Localisation`, `Telephone`, `Email`, `Mat_admin`, `logo`, `Banniere`, `Date_Ajout`) VALUES
(1, '343', 'Matelas', 'logpom', '690386539', 'infoyiha@gmail.com', '0', '0', '0', '0000-00-00');

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
-- Index pour la table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`ID_Commande`);

--
-- Index pour la table `connexion`
--
ALTER TABLE `connexion`
  ADD PRIMARY KEY (`ID_Connexion`);

--
-- Index pour la table `membre`
--
ALTER TABLE `membre`
  ADD PRIMARY KEY (`ID_Membre`),
  ADD UNIQUE KEY `Telephone` (`Telephone`),
  ADD KEY `Role` (`Role`);

--
-- Index pour la table `produits`
--
ALTER TABLE `produits`
  ADD PRIMARY KEY (`ID_Produit`),
  ADD KEY `Mat_Cat` (`Mat_Cat`);

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
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `ID_Categorie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `commande`
--
ALTER TABLE `commande`
  MODIFY `ID_Commande` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `connexion`
--
ALTER TABLE `connexion`
  MODIFY `ID_Connexion` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `membre`
--
ALTER TABLE `membre`
  MODIFY `ID_Membre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `produits`
--
ALTER TABLE `produits`
  MODIFY `ID_Produit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `shop`
--
ALTER TABLE `shop`
  MODIFY `ID_Shop` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `membre`
--
ALTER TABLE `membre`
  ADD CONSTRAINT `membre_ibfk_1` FOREIGN KEY (`Role`) REFERENCES `role` (`id`);

--
-- Contraintes pour la table `produits`
--
ALTER TABLE `produits`
  ADD CONSTRAINT `produits_ibfk_1` FOREIGN KEY (`Mat_Cat`) REFERENCES `categorie` (`Mat_Cat`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
