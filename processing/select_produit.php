<?php

            //page de la requete d'insertion d'un produit dans produits_boutik
        if(isset($_POST['submit'])) :

            //var_dump($mat_produit1);
            $mat_produit = test_input($_POST['mat_produit']);
            $mat_shop = test_input($_POST['mat_shop']);
            $quantite = test_input($_POST['quantite']);
            $mat_produit_boutik = 'Produit_boutik-'.random_int(0,80000);
        

            $verif_produits = select_table_where_2('produits_boutik', 'Mat_shop', $mat_shop, 'mat_produit', $mat_produit);
            //var_dump($verif_produits);

            if(empty($verif_produits)):
                $DB->query("INSERT INTO produits_boutik (Mat_shop, mat_produit, quantite, mat_produit_boutik) 
                VALUES(:Mat_shop, :mat_produit, :quantite, :mat_produit_boutik)",
                [
                'Mat_shop'=>$mat_shop,
                'mat_produit'=>$mat_produit,
                'mat_produit_boutik'=>$mat_produit_boutik,
                'quantite'=>$quantite
                ]
            );

                 header("location:home");

            else:
                header("location:add-product/$mat_type");
            endif;

            /*foreach(select_table_where('produits_boutik', 'mat_shop', $mat_shop) as $val):
                $mat_produit1 = $val->mat_produit; // recuperation des matricules des produits qui sont lies a la boutiques dans laquelle on est
                //var_dump($mat_produit);       
            endforeach;

                

                if($mat_produit1 !== $mat_produit):
                   

                else:
                     //header("location:add-product/$mat_type");
                        //echo 'produit deja ajoute';

                    

            endif;*/
        endif;

?>