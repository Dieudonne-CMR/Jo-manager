<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$response=[];
// Récupérer les données envoyées par le formulaire
$mat_product = test_input($_POST['mat_product']);
$nom = test_input($_POST['nom']);
$prix = test_input($_POST['prix']);
$image = test_input($_POST['image']);
$type = test_input($_POST['type']);

// Vérifier si le panier est déjà créé dans la session
if (!isset($_SESSION['panier'][$mat_shop])) {
    $_SESSION['panier'][$mat_shop] = [];
}

// Ajouter le produit au panier
$_SESSION['panier'][$mat_shop][$mat_product] = [
    'mat_product'=>$mat_product,
    'nom' => $nom,
    'prix' => $prix,
    'image' => $image,
    'quantite' => (isset($_SESSION['panier'][$mat_shop][$mat_product]) ? $_SESSION['panier'][$mat_shop][$mat_product]['quantite'] + 1 : 1)
];
$response=json_encode([
    'ok'=>0,
    'panier'=> sizeof($_SESSION['panier'][$mat_shop]),
]);
echo $response; //-- bien ajouter au panier
// Rediriger vers la page des produits
// header("Location: panier");
exit();

function mettre_a_jour_quantite($mat_product, $quantite) {
    if (isset($_SESSION['panier'][$mat_product])) {
        $_SESSION['panier'][$mat_product] = $quantite;
        if ($quantite <= 0) {
            unset($_SESSION['panier'][$mat_product]); // Supprimer si quantité <= 0
        }
    }
}
        

?>
