<?php
    
    if(isset($_POST["enregistrer"])):
        if(isset($_POST["mat_produit"])):
            $mat_produit = test_input($_POST["mat_produit"]);
            var_dump($mat_produit);

            $verification_produit=select_table_where('produicts_all','mat_produit',$mat_produit);
            // var_dump($verification_produit);

            //---recuper les nom des images  sous la forme name_fille[n+1] avec n=0
            // var_dump($_FILES['images']);
            // $name_fille=traite_image_multiple($image_produit,'images');

            // $name_fille=traiter_image($image_produit,$_FILES['images1']);

            $name_fille1=$name_fille2=$name_fille3='';

            $name_fille1=traiter_image($image_produit,$_FILES['images1']); //----------nom image 1
            $name_fille2=traiter_image($image_produit,$_FILES['images2']);; //----------nom image 3
            $name_fille3=traiter_image($image_produit,$_FILES['images3']);; //----------nom image 3

            //------ modifier image 1 si elle n'est pas vide
            var_dump( $name_fille1);
                if(isset($name_fille1) && is_string($name_fille1)):
                    $imag=$verification_produit[0]->Img1;
                    delect_file($image_produit, $imag); //----permet de superimer Ancienne images avant la modification
                    $DB->query(
                                "UPDATE produicts_all SET Img1 = :Img1 
                                    WHERE mat_produit = '$mat_produit' LIMIT 1",['Img1' => $name_fille1,]
                                );
                endif;

            //------ modifier image 2 si elle n'est pas vide
                if(isset($name_fille2) && is_string($name_fille2)): 
                    $imag=$verification_produit[0]->Img2;
                    delect_file($image_produit, $imag); //----permet de superimer Ancienne images avant la modification
                    $DB->query(
                                "UPDATE produicts_all SET Img2 = :Img2 
                                    WHERE mat_produit = '$mat_produit' LIMIT 1",['Img2' => $name_fille2,]
                                );
                endif;

            //------ modifier image 3 si elle n'est pas vide
                if(isset($name_fille3) && is_string($name_fille3)): 
                    $imag=$verification_produit[0]->Img3;
                    delect_file($image_produit, $imag); //----permet de superimer Ancienne images avant la modification
                    $DB->query(
                            "UPDATE produicts_all SET Img3 = :Img3 
                                WHERE mat_produit = '$mat_produit' LIMIT 1",['Img3' => $name_fille3,]
                            );
                endif;
            
            // ici nous allons verifier si le produit exuste dans la BD avent de faire des modifications
            // var_dump($verification_produit);
            if(sizeof($verification_produit)>0) :
               // $gamme = test_input($_POST['gamme']);
               // $dimension = test_input($_POST['dimension']);
               // $epaisseur = test_input($_POST['epaisseur']);
                $coef_vente = test_input($_POST['Coef_vente']);
                $prix_de_vente = test_input($_POST['prix_de_vente']) ;
                $prix_achat = test_input($_POST['prix_achat']) ;
                $remise = test_input($_POST['remise']);
                $description = test_input($_POST['description_produit']);
                //$mat_cat = test_input($_POST['mat_Cat']);
                $mat_produit = test_input($_POST['mat_produit']);
                // var_dump($mat_produit);
                



                $DB->query("UPDATE produicts_all SET   prix_achat = :prix_achat,
                Coef_vente = :Coef_vente, remise = :remise, prix_de_vente = :prix_de_vente, description_produit = :description_produit  WHERE mat_produit = :mat_produit LIMIT 1",
                [
                        //'gamme' => $gamme,
                        //'dimensions' => $dimension,
                        //'epaisseur' => $epaisseur,
                        'prix_achat' => $prix_achat,
                        'Coef_vente' => $coef_vente,
                        'prix_de_vente' => $prix_de_vente,
                        'remise' => $remise,
                        'description_produit' => $description,
                        'mat_produit' => $mat_produit
                        //'mat_cat' => $mat_cat
                       // 'mat_produit' => $mat_produit
                ]
                );

               /* $DB->query("UPDATE produicts_all SET nom_gamme = :nom_gamme, dimensions = :dimensions, epaisseur = :epaisseur, prix_achat = :prix_achat, Coef_vente = :Coef_vente,
                     prix_de_vente = :prix_de_vente, description_produit = :description_produit, remise = :remise WHERE mat_produit = ':mat_produit' LIMIT 1",
                    [
                        'gamme' => $gamme,
                        'dimensions' => $dimension,
                        'epaisseur' => $epaisseur,
                        'prix_achat' => $prix_achat,
                        'Coef_vente' => $coef_vente,
                        'prix_de_vente' => $prix_de_vente,
                        'remise' => $remise,
                        'description_produit' => $description,
                        'mat_produit' => $mat_produit
                        //'mat_cat' => $mat_cat
                       // 'mat_produit' => $mat_produit
                        
                    ]
                );*/
                $_SESSION['ok']= 0;
                header("Location: modifi-product/$mat_produit");
                // header("Location: products");
            
            else:
               header("Location: modifi-product/$mat_produit");
            endif;
   
        else :
            echo "<p>Erreur : Tous les champs requis ne sont pas remplis.</p>";
        endif;
    endif;

    




?>
