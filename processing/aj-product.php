<?php 

// var_dump($_FILES);

if(isset($_POST['enregistrer'])):
    //=============== traitement des image
    var_dump($_FILES['images']);
    $name_fille=traite_image_multiple($image_produit,'images');
    
    
    if(!empty($_POST['nom_produit']) AND !empty($_POST['mat_Cat'])):

      $name_fille1=$name_fille2=$name_fille3='';

        $name_fille1=$name_fille[0];
        $name_fille2=$name_fille[1];
        $name_fille3=$name_fille[2];

        $nom_produit= test_input($_POST['nom_produit']);
        $prix=test_input($_POST['prix']);
        $prix_promo =test_input(($_POST['prix_promo']));
        $mat_Cat= test_input($_POST['mat_Cat']);
        $decription = trim($_POST['decription']);
        $quantite= test_input($_POST['quantite']);
        $mat_Produit='P-'.random_int(0,80000);
        $mat_shop; // matricule de la boutique

        $DB->query("INSERT INTO produits (Mat_Produit,Nom_Produit,Description, Prix,Prix_Promo,Mat_Cat,Mat_Shop,quantite,Img1,Img2,Img3) 
        VALUES(:Mat_Produit,:Nom_Produit,:Description,:Prix, :Prix_Promo, :Mat_Cat, :Mat_Shop, :quantite,:Img1,:Img2,:Img3)",
          [
            'Mat_Produit'=>$mat_Produit,
            'Nom_Produit'=>$nom_produit,
            'Description'=> $decription, 
            'Prix'=>$prix,
            'Prix_Promo'=>$prix_promo,
            'Mat_Cat'=>$mat_Cat,
            'Mat_Shop'=>$mat_shop,
            'quantite'=>$quantite,
            'Img1'=>$name_fille1,
            'Img2'=>$name_fille2,
            'Img3'=>$name_fille3
          ]
        );

        $_SESSION['ok']='ok';
        header("location:add-product");

    endif;

endif;

//==============

