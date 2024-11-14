<?php
    if(isset($_POST['enregistrer'])):
         //---recuper les nom des images  sous la forme name_fille[n+1] avec n=0
        $name_fille=traite_image_multiple($image_produit,'images');


        $name_fille1=$name_fille2=$name_fille3='';

            $name_fille1=$name_fille[0]; //----------nom image 1
            $name_fille2=$name_fille[1]; //----------nom image 3
            $name_fille3=$name_fille[2]; //----------nom image 3

            $prix_achat = test_input($_POST['prix_achat']);
            $coef_vente = test_input($_POST['coef_vente']);
            $prix_vente = test_input($_POST['prix_vente']);

            $gamme = test_input($_POST['gamme']);
            $epaisseur = test_input($_POST['epaisseur']);
            $dimension = test_input($_POST['dimension']);


            






    endif;




















?>