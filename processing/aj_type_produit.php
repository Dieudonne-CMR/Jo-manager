<?php
    if(isset($_POST['enregistrer'])):
        $nom_type = test_input(($_POST['nom_type']));
        $mat_type = 'type-'.random_int(0,800);


        $DB->query("INSERT INTO type_produit (nom_type, mat_type) VALUES(:nom_type, :mat_type)",
          [
            'mat_type'=>$mat_type,
            'nom_type'=>$nom_type,
          ]
        );

        header("location:accueil_sup_ad");

    endif;
?>