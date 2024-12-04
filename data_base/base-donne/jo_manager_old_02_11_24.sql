-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 14 nov. 2024 à 16:56
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
(1, 'B612', 'C-56329', 'Montre / Montre de luc / Biscuite', 159870.00, 'bayiha', '6999999999', 'AF, Logpom, Montana city', '2024-11-12', NULL),
(2, 'B612', 'C-18391', 'Montre / Montre de luc / Biscuite', 479714.00, 'bayiha', '6999999999', 'AF,', '2024-11-12', NULL);

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
-- Structure de la table `dimension`
--

CREATE TABLE `dimension` (
  `id` int(11) NOT NULL,
  `dimension` varchar(100) NOT NULL,
  `mat_dim` varchar(100) NOT NULL,
  `date_ajour` date DEFAULT curdate()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `gamme_produit`
--

CREATE TABLE `gamme_produit` (
  `id` int(11) NOT NULL,
  `nom_gamme` varchar(255) NOT NULL,
  `mat_gamme` varchar(100) NOT NULL,
  `date_aj` date DEFAULT curdate()
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
  `mat_produit` varchar(100) NOT NULL,
  `dimensions` varchar(100) DEFAULT NULL,
  `epaisseur` decimal(5,2) DEFAULT NULL,
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
-- Index pour la table `dimension`
--
ALTER TABLE `dimension`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `mat_dim` (`mat_dim`);

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
  MODIFY `ID_Commande` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `connexion`
--
ALTER TABLE `connexion`
  MODIFY `ID_Connexion` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `dimension`
--
ALTER TABLE `dimension`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `gamme_produit`
--
ALTER TABLE `gamme_produit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `membre`
--
ALTER TABLE `membre`
  MODIFY `ID_Membre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `pack`
--
ALTER TABLE `pack`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `produicts_all`
--
ALTER TABLE `produicts_all`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `produits_boutik`
--
ALTER TABLE `produits_boutik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `prospect`
--
ALTER TABLE `prospect`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `shop`
--
ALTER TABLE `shop`
  MODIFY `ID_Shop` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `type_produit`
--
ALTER TABLE `type_produit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

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
