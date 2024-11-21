<?php
        if(isset($_POST['submit'])) :

            $mat_shop = test_input($_POST['mat_shop']);
            
            $mat_produit = test_input($_POST['mat_produit']);
            $mat_produit_boutik = 'Produit_boutik-'.random_int(0,80000);


            $DB->query("INSERT INTO produits_boutik (Mat_shop,mat_produit, mat_produit_boutik) 
                        VALUES(:Mat_shop, :mat_produit, :mat_produit_boutik)",
                [
                'Mat_shop'=>$mat_shop,
                
                'mat_produit'=>$mat_produit,
                'mat_produit_boutik'=>$mat_produit_boutik,
                ]
            );


            header("location:add-product/$mat_type");

        endif;


?>