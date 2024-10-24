-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 23 oct. 2024 à 20:04
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
  `Mat_Mem` int(11) DEFAULT NULL,
  `Action` varchar(255) NOT NULL,
  `Mat_Shop` int(11) DEFAULT NULL,
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
  `Mat_Shop` int(11) DEFAULT NULL,
  `Role` varchar(50) NOT NULL,
  `Date_Ajout` date NOT NULL,
  `Permission` int(11) DEFAULT NULL,
  `password` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `membre`
--

INSERT INTO `membre` (`ID_Membre`, `Nom`, `Localisation`, `Telephone`, `Matricule`, `Mat_Shop`, `Role`, `Date_Ajout`, `Permission`, `password`) VALUES
(1, 'Jean Dupont', 'Douala', '655123456', 'MAT001', 1, 'Administrateur', '2024-10-10', 1, '123456'),
(2, 'Marie Claire', 'Yaoundé', '677654321', 'MAT002', 2, 'Manager', '2024-10-10', 2, '123456'),
(3, 'Paul Kengue', 'Bafoussam', '690987654', 'MAT003', 3, 'Employé', '2024-10-10', 3, '123456');

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
  `Mat_Cat` int(11) DEFAULT NULL,
  `Mat_Shop` int(11) DEFAULT NULL,
  `Img1` varchar(255) DEFAULT NULL,
  `Img2` varchar(255) DEFAULT NULL,
  `Img3` varchar(255) DEFAULT NULL,
  `Img4` varchar(255) DEFAULT NULL,
  `Date_Ajout` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
  `Mat_Mem` int(11) DEFAULT NULL,
  `Banniere` varchar(255) DEFAULT NULL,
  `Date_Ajout` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`ID_Categorie`);

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
  ADD UNIQUE KEY `Telephone` (`Telephone`);

--
-- Index pour la table `produits`
--
ALTER TABLE `produits`
  ADD PRIMARY KEY (`ID_Produit`);

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
  MODIFY `ID_Categorie` int(11) NOT NULL AUTO_INCREMENT;

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
  MODIFY `ID_Membre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `produits`
--
ALTER TABLE `produits`
  MODIFY `ID_Produit` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `shop`
--
ALTER TABLE `shop`
  MODIFY `ID_Shop` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
