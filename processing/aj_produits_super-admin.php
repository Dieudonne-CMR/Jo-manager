<?php
    if(isset($_POST['enregistrer']) ):
         //---recuper les nom des images  sous la forme name_fille[n+1] avec n=0
        $name_fille=traite_image_multiple($image_produit,'images');


        $name_fille1=$name_fille2=$name_fille3='';

            $name_fille1=$name_fille[0]; //----------nom image 1
            @$name_fille2=$name_fille[1]; //----------nom image 3
            @$name_fille3=$name_fille[2]; //----------nom image 3

            $prix_achat = test_input($_POST['prix_achat']);
            $Coef_vente = test_input($_POST['coef_vente']);
            $prix_de_vente = test_input($_POST['prix_vente']);
            $mat_produit='p-'.random_int(0,80000);
            $mat_type = test_input($_POST['mat_type']);
            

            /*$gamme = test_input($_POST['gamme']);
            $epaisseur = test_input($_POST['epaisseur']);
            $dimension = test_input($_POST['dimension']);*/


            $DB->query("INSERT INTO produicts_all (mat_produit, prix_achat, Coef_vente, prix_de_vente,mat_type, Img1, Img2, Img3) VALUES (:mat_produit, :prix_achat, :Coef_vente, :prix_de_vente, :mat_type, :Img1, :Img2, :Img3)",
            [
              'mat_produit'=>$mat_produit,
              'prix_achat'=>$prix_achat,
              'Coef_vente'=>$Coef_vente,
              'prix_de_vente'=>$prix_de_vente,
              'Img1'=>$name_fille1,
              'Img2'=>$name_fille2,
              'Img3'=>$name_fille3,
              'mat_type'=> $mat_type
            ]
          );
    
          header("location:accueil_sup_ad");






    endif;




















?>