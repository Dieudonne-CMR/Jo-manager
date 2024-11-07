<?php

// Récupérer les données envoyées par le formulaire
$id = $_POST['id'];
$nom = $_POST['nom'];
$prix = $_POST['prix'];

// Vérifier si le panier est déjà créé dans la session
if (!isset($_SESSION['panier'])) {
    $_SESSION['panier'] = [];
}

// Ajouter le produit au panier
$_SESSION['panier'][$id] = [
    'nom' => $nom,
    'prix' => $prix,
    'quantite' => (isset($_SESSION['panier'][$id]) ? $_SESSION['panier'][$id]['quantite'] + 1 : 1)
];
//var_dump($_SESSION['panier'][$id]);
// Rediriger vers la page des produits
header("Location: panier");
exit();
?>
