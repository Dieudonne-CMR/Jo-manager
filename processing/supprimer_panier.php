<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
// Démarrer la session
// var_dump($_POST);
var_dump($_SESSION['panier'][$mat_shop]);

if(isset($_POST['mat_produit'])):
    $mat_produit= strip_tags($_POST['mat_produit']);

    foreach ($_SESSION['panier'][$mat_shop] as $key => $item) {
        if ($item['mat_product'] ==$mat_produit) {
            unset($_SESSION['panier'][$mat_shop][$key]);
     
            break;
        }
    }
    
    // Calcul des totaux
    $totalProduit = $_SESSION['panier'][$mat_shop][$mat_produit]['prix'] * $_SESSION['panier'][$mat_shop][ $mat_produit]['quantite'];
    $totalPanier = array_reduce($_SESSION['panier'][$mat_shop], function($total, $produit) {
        return $total + ($produit['prix'] * $produit['quantite']);
    }, 0);
    var_dump($totalPanier);
endif;


?>
