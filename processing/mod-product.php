<?php
    
    if(isset($_POST["enregistrer"])):
        if(isset($_POST["mat_produit"])):
            $mat_produit = test_input($_POST["mat_produit"]);
            
            // ici nous allons verifier si le produit exuste dans la BD avent de faire des modifications
            $verification_produit=select_table_where('produits','Mat_Produit',$mat_produit);
            // var_dump($verification_produit);
            if(sizeof($verification_produit)>0) :
                $nom_produit = test_input($_POST['nom_produit']);
                $prix = test_input($_POST['prix']);
                $prix_promo = test_input($_POST['prix_promo']) ;
                $quantite = test_input($_POST['quantite']);
                $description = test_input($_POST['decription']);
                $mat_cat = test_input($_POST['mat_Cat']);
                $mat_produit = test_input($_POST['mat_produit']);
                // var_dump($mat_produit);
                

                $DB->query(
                    "UPDATE produits SET Nom_Produit = :nom_produit, Prix = :prix, Prix_Promo = :prix_promo, quantite = :quantite, Description = :description, Mat_Cat = :mat_cat WHERE Mat_Produit = '$mat_produit' LIMIT 1",
                    [
                        'nom_produit' => $nom_produit,
                        'prix' => $prix,
                        'prix_promo' => $prix_promo,
                        'quantite' => $quantite,
                        'description' => $description,
                        'mat_cat' => $mat_cat
                        
                    ]
                );
                header("Location: modifi-product/$mat_produit");
            
            else:
                header("Location: products");
            endif;
   
        else :
            echo "<p>Erreur : Tous les champs requis ne sont pas remplis.</p>";
        endif;
    endif;

    




?>
