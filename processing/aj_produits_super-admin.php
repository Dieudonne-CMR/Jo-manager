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
            $nom_type = test_input($_POST['nom_type']);
            $mat_gamme = test_input($_POST['mat_gamme']);
            $nom_dim = test_input($_POST['nom_dim']);
            $nom_gamme = test_input($_POST['nom_gamme']);
            $nom_epaisseur = test_input($_POST['nom_epaisseur']);
            $description = test_input($_POST['description']);
            $remise = test_input($_POST['remise']);  
            $taie = test_input($_POST['taie']);   
            
            
            if($mat_type == 'type-190'):  //Oreillers :condition pour specifier que ces champs sont vides dans la BD
              $nom_dim = $taie = $nom_epaisseur ='';
            endif;


            $DB->query("INSERT INTO produicts_all (mat_type, nom_produit, mat_gamme, nom_gamme, mat_produit, dimensions, epaisseur, prix_achat, Coef_vente, prix_de_vente, description_produit, remise, taie, Img1, Img2, Img3) 
                        VALUES (:mat_type, :nom_produit, :mat_gamme, :nom_gamme, :mat_produit, :dimensions, :epaisseur, :prix_achat, :Coef_vente, :prix_de_vente, :description_produit, :remise, :taie, :Img1, :Img2, :Img3)",
            [
              'mat_produit'=>$mat_produit,
              'prix_achat'=>$prix_achat,
              'Coef_vente'=>$Coef_vente,
              'prix_de_vente'=>$prix_de_vente,
              'Img1'=>$name_fille1,
              'Img2'=>$name_fille2,
              'Img3'=>$name_fille3,
              'mat_type'=> $mat_type,
              'mat_gamme'=> $mat_gamme,
              'nom_gamme'=> $nom_gamme,
              'dimensions'=> $nom_dim,
              'epaisseur'=> $nom_epaisseur,
              'taie'=> $taie,
              'description_produit'=> $description,
              'remise'=> $remise,
              'nom_produit'=>$nom_type
            ]
          );
          
          //$_SESSION['ok']='ok';
          header("location:accueil_sup_ad");






    endif;




















?>