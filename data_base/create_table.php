<?php
include('class.db.php');
// $db=

 // Création des tables
 $tables = [
    // Table Membre
    "CREATE TABLE IF NOT EXISTS Membre (
        ID_Membre INT AUTO_INCREMENT PRIMARY KEY,
        Nom VARCHAR(255) NOT NULL,
        Localisation VARCHAR(255),
        Téléphone VARCHAR(15) UNIQUE NOT NULL,
        Matricule VARCHAR(100) NOT NULL,
        Mat_Shop INT,
        Rôle VARCHAR(50) NOT NULL,
        Date_Ajout DATE NOT NULL,
        Permission INT,
        -- FOREIGN KEY (Mat_Shop) REFERENCES Shop(ID_Shop)
    )",

    // Table Shop
    "CREATE TABLE IF NOT EXISTS Shop (
        ID_Shop INT AUTO_INCREMENT PRIMARY KEY,
        Mat_Shop VARCHAR(100) UNIQUE NOT NULL,
        Nom_Shop VARCHAR(255) NOT NULL,
        Localisation VARCHAR(255),
        Téléphone VARCHAR(15) UNIQUE NOT NULL,
        Email VARCHAR(255) UNIQUE NOT NULL,
        Mat_Mem INT,
        Banniere VARCHAR(255),
        Date_Ajout DATE NOT NULL,
        FOREIGN KEY (Mat_Mem) REFERENCES Membre(ID_Membre)
    )",

    // Table Produits
    "CREATE TABLE IF NOT EXISTS Produits (
        ID_Produit INT AUTO_INCREMENT PRIMARY KEY,
        Mat_Produit VARCHAR(100) NOT NULL,
        Nom_Produit VARCHAR(255) NOT NULL,
        Description TEXT,
        Prix DECIMAL(10,2) NOT NULL,
        Prix_Promo DECIMAL(10,2),
        Mat_Cat INT,
        Mat_Shop INT,
        Img1 VARCHAR(255),
        Img2 VARCHAR(255),
        Img3 VARCHAR(255),
        Img4 VARCHAR(255),
        Date_Ajout DATE NOT NULL,
        FOREIGN KEY (Mat_Cat) REFERENCES Categorie(ID_Catégorie),
        FOREIGN KEY (Mat_Shop) REFERENCES Shop(ID_Shop)
    )",

    // Table Categorie
    "CREATE TABLE IF NOT EXISTS Categorie (
        ID_Catégorie INT AUTO_INCREMENT PRIMARY KEY,
        Nom VARCHAR(255) NOT NULL,
        Description TEXT,
        Mat_Shop INT,
        Mat_Cat VARCHAR(100) NOT NULL,
        Date_Ajout DATE NOT NULL,
        -- FOREIGN KEY (Mat_Shop) REFERENCES Shop(ID_Shop)
    )",

    // Table Commande
    "CREATE TABLE IF NOT EXISTS Commande (
        ID_Commande INT AUTO_INCREMENT PRIMARY KEY,
        Mat_Shop INT,
        Mat_Com VARCHAR(100) NOT NULL,
        Produit_Chaîne INT NOT NULL,
        Prix DECIMAL(10,2) NOT NULL,
        Date_Achat DATE NOT NULL,
        Mat_Mem INT,
        FOREIGN KEY (Mat_Shop) REFERENCES Shop(ID_Shop),
        FOREIGN KEY (Produit_Chaîne) REFERENCES Produits(ID_Produit),
        FOREIGN KEY (Mat_Mem) REFERENCES Membre(ID_Membre)
    )",

    // Table Connexion
    "CREATE TABLE IF NOT EXISTS Connexion (
        ID_Connexion INT AUTO_INCREMENT PRIMARY KEY,
        Mat_Mem INT,
        Action VARCHAR(255) NOT NULL,
        Mat_Shop INT,
        Date_Action DATE NOT NULL,
        FOREIGN KEY (Mat_Mem) REFERENCES Membre(ID_Membre),
        FOREIGN KEY (Mat_Shop) REFERENCES Shop(ID_Shop)
    )"
];

// Exécution des requêtes de création de tables
foreach ($tables as $table) {
    $Db->exec($table);
    echo "Table créée avec succès.<br>";
}

echo "Toutes les tables ont été créées avec succès.";
?>