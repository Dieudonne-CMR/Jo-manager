<?php
     //$panier = $_SESSION['panier'][$mat_shop];

     foreach ($panier as $produit) :
        $mat_product = $produit['mat_product'];
       // var_dump($mat_product);
        $quantite_commande = $produit['quantite'];
        //var_dump($quantite_commande);
    
        $tab = select_table_where('produits_boutik', 'mat_produit', $mat_product);
        $qte_disponible = $tab[0]->quantite;
        //var_dump($qte_disponible);
        if($qte_disponible >= $quantite_commande):

            $dif_quantite = $qte_disponible - $quantite_commande;

            //$sql = update_table_where('produits_boutik', 'quantite', $dif_quantite, 'mat_produit', $mat_product);

            //requete d'insertion des informations de la commande 


            /* $DB->query("UPDATE produits_boutik SET quantite = :dif_quantite WHERE mat_produit = :mat_produit limit 1",
                        [
                            'dif_quantite' => $dif_quantite,
                            'mat_produit' => $mat_product,
                        ]
                    );*/
            
        else:
            $tab2 = select_table_where('produicts_all', 'mat_produit', $mat_product);   // recuperation de la gamme du produit dont la quantite excede
            $produit = $tab2[0]->nom_produit;  // on stocke dans une variable
            echo '<div class="col-xl-7 mt-5">
                    <div class="alert alert-danger" style="width: 150px, height: 50px;" role="alert">
                    Quantite insufisante du produit : '. $produit . '<br/>quantite disponible : '. $qte_disponible .  '
                    </div></div>';
            exit;
         endif;


   
    endforeach;






?>