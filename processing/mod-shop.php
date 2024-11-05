<?php

if(isset($_POST["soumettre"])):
  // var_dump($_POST);
    if(!empty($_POST['nom_shop'])):
      $error = "non";
      $nom_shop = test_input($_POST['nom_shop']);
      $localisation = test_input($_POST['localisation']);
      $tel_shop = test_input($_POST['tel_shop']);
      $email = test_input($_POST['email']);
      $mat_shop=test_input($_POST['mat_shop']);
      $R = select_table_where('shop','mat_shop',$mat_shop);
      if(sizeof($R)>0)
      {
        // $nom_logo=traiter_image($dossier_logo, $_FILES['logo']);
        // $nom_banniere=traiter_image($dossier_logo, $_FILES['banniere']);
      
        $DB->query("UPDATE shop SET Nom_Shop = :nom_shop, Localisation = :localisation, Telephone = :telephone, Email = :email  WHERE Mat_Shop = :mat_shop",
        [
            'nom_shop' => $nom_shop,
            'localisation' => $localisation,
            'telephone' => $tel_shop,
            'email' => $email,
            'mat_shop' => $mat_shop,
        ]
        );
        $error="ok";
      }

      $_SESSION['ok']= $error;
      header("location:modifi-shop");
    endif;
endif;


?>