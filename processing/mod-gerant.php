<?php

if(isset($_POST["soumettre"])):
  // var_dump($_POST);
    if(!empty($_POST['nom'])):
      $error = "non";
      $nom_boutik = test_input($_POST['nom']);
      $localisation_gerant = test_input($_POST['localisation_gerant']);
      $telephone_gerant = test_input($_POST['telephone_gerant']); 
      $mat_gerant = 'JO-'.random_int(0,800);  
      $password= 'Pw-'.random_int(0,10000);
      $R = select_table_where('membre','Telephone',$telephone_gerant);
      if(sizeof($R)>0)
      {
        // $nom_logo=traiter_image($dossier_logo, $_FILES['logo']);
        // $nom_banniere=traiter_image($dossier_logo, $_FILES['banniere']);
      
        $DB->query("UPDATE membre SET Nom = :nom_boutik, Localisation = :localisation_gerant, Telephone = :telephone_gerant, password = :password  WHERE Telephone = :telephone_gerant",
        [
            'nom_boutik' => $nom_boutik,
            'localisation_gerant' => $localisation_gerant,
            'telephone_gerant' => $telephone_gerant,
            'password' => $password,
            'mat_shop' => $mat_shop,
        ]
        );
        $error="ok";
      }

      $_SESSION['ok']= $error;
      header("location:modifi-gerant");
    endif;
endif;


?>