<?php
    if(!empty($_SESSION['panier'][$mat_shop])):
        if(isset($_POST['soumettre'])):

            // ----------je veux recuperer uniquement les noms des produits dans ma session panier
            $nom_produit = [];
            foreach($_SESSION['panier'][$mat_shop] as $value):
                $nom_produit[] = $value['nom'];
            endforeach;

            $nom_produits = implode("/", $nom_produit); //je change mon tableau en chaine de caracteres pour afficher dans la base de donnees
            //------------------------------------------------------------

            //var_dump($nom_produits);    // on recupere les informations du panier envoyees via notre formulaire
            $nom_client = test_input($_POST['nom_client']);   
            $tel_client = test_input($_POST['tel_client']);
            $localisation = test_input($_POST['ville_client'].', '.$_POST['adresse_client']);
            $mat_com = 'C-'.random_int(0,80000);
            $totalPanier = test_input($_POST['prix_total_commande']);


        //requete d'insertion des informations de la commande 

        $DB->query('INSERT INTO commande (Mat_Com, Mat_Shop, Mat_Mem, Produit_acheter, Prix, nom_client, telephon_client, localisation)
        VALUES (:Mat_Com, :Mat_Shop, :Mat_Mem, :Produit_acheter, :Prix, :nom_client, :telephon_client, :localisation)',
        [
            'Mat_Com' => $mat_com,
            'Mat_Shop' => $mat_shop,
            'Produit_acheter' => $nom_produits,
            'Prix' => $totalPanier,
            'nom_client' => $nom_client,
            'telephon_client' => $tel_client,
            'localisation' => $localisation,
            'Mat_Mem' => $mat_gerant,
        ]
        );

        $_SESSION['ok']='ok';
        header("location:home"); 
 

    endif;
endif;
?>