<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupérer les informations du produit à partir du formulaire
    $id = $_POST['id'];
    $nom = $_POST['nom'];
    $prix = $_POST['prix'];

    // Initialiser le panier s'il n'existe pas
    if (!isset($_SESSION['panier'])) {
        $_SESSION['panier'] = [];
    }

    // Ajouter le produit au panier (ou augmenter la quantité s'il est déjà dans le panier)
    if (isset($_SESSION['panier'][$id])) {
        $_SESSION['panier'][$id]['quantite'] += 1;
    } else {
        $_SESSION['panier'][$id] = [
            'nom' => $nom,
            'prix' => $prix,
            'quantite' => 1,
        ];
    }

    // Rediriger vers la page des produits ou du panier
    header('Location: home');
    exit();
}
?>
