<?php
    
    if(isset($_POST["enregistrer"])):
        if(isset($_POST["mat_produit"])):
            $mat_produit = test_input($_POST["mat_produit"]);

            $verification_produit=select_table_where('produits','Mat_Produit',$mat_produit);

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
                                "UPDATE produits SET Img1 = :Img1 
                                    WHERE Mat_Produit = '$mat_produit' LIMIT 1",['Img1' => $name_fille1,]
                                );
                endif;

            //------ modifier image 2 si elle n'est pas vide
                if(isset($name_fille2) && is_string($name_fille2)): 
                    $imag=$verification_produit[0]->Img2;
                    delect_file($image_produit, $imag); //----permet de superimer Ancienne images avant la modification
                    $DB->query(
                                "UPDATE produits SET Img2 = :Img2 
                                    WHERE Mat_Produit = '$mat_produit' LIMIT 1",['Img2' => $name_fille2,]
                                );
                endif;

            //------ modifier image 3 si elle n'est pas vide
                if(isset($name_fille3) && is_string($name_fille3)): 
                    $imag=$verification_produit[0]->Img3;
                    delect_file($image_produit, $imag); //----permet de superimer Ancienne images avant la modification
                    $DB->query(
                            "UPDATE produits SET Img3 = :Img3 
                                WHERE Mat_Produit = '$mat_produit' LIMIT 1",['Img3' => $name_fille3,]
                            );
                endif;
            
            // ici nous allons verifier si le produit exuste dans la BD avent de faire des modifications
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
                $_SESSION['ok']='ok';
                header("Location: modifi-product/$mat_produit");
            
            else:
                header("Location: products");
            endif;
   
        else :
            echo "<p>Erreur : Tous les champs requis ne sont pas remplis.</p>";
        endif;
    endif;

    




?>
