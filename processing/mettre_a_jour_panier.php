<?php

// Activer l'affichage des erreurs pour le débogage
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $mat_produit = $_POST['mat_produit'] ?? null;
    $action = $_POST['action'] ?? null;

        if (isset($_SESSION['panier'][$mat_shop][$mat_produit])) {
            if ($action === 'increment') {
                $_SESSION['panier'][$mat_shop][$mat_produit]['quantite'] += 1;
            } elseif ($action === 'decrement' && $_SESSION['panier'][$mat_shop][$mat_produit]['quantite'] > 1) {
                $_SESSION['panier'][$mat_shop][$mat_produit]['quantite'] -= 1;
            }

            // Calcul des totaux
            $totalProduit = $_SESSION['panier'][$mat_shop][$mat_produit]['prix'] * $_SESSION['panier'][$mat_shop][$mat_produit]['quantite'];
            $totalPanier = array_reduce($_SESSION['panier'][$mat_shop], function($total, $produit) {
                return $total + ($produit['prix'] * $produit['quantite']);
            }, 0);

            echo json_encode([
                'success' => true,
                'quantite' => $_SESSION['panier'][$mat_shop][$mat_produit]['quantite'],
                'totalProduit' => $totalProduit,
                'totalPanier' => $totalPanier
            ]);
            exit;
        } var_dump($_SESSION['panier'][$mat_shop][$mat_produit]['quantite']);
        
        echo json_encode(['success' => false, 'message' => 'Produit introuvable']);
        exit;
}

echo json_encode(['success' => false, 'message' => 'Requete invalide']);
exit;

