<?php
// Démarrer la session


// Vérifier si le panier et l'ID du produit sont définis
if (isset($_SESSION['panier'][$mat_shop]) && isset($_GET['produit_id'])) {
    //$produitId = $_POST['produit_id']; // Pour un formulaire POST
    $produitId = $_GET['produit_id']; // Si vous utilisez un lien avec GET

    // Parcourir le panier pour trouver et supprimer le produit
    foreach ($_SESSION['panier'][$mat_shop] as $key => $item) {
        if ($item['produit_id'] == $produitId) {
            unset($_SESSION['panier'][$mat_shop][$key]);
            break;
        }
    }

    // Réorganiser les indices du tableau (optionnel)
    $_SESSION['panier'][$mat_shop] = array_values($_SESSION['panier'][$mat_shop]);


 // Retourner une réponse de succès
 echo 'Produit supprimé avec succès';
} else {
    // Retourner une réponse d'erreur
    echo 'Erreur de suppression';
}
?>
