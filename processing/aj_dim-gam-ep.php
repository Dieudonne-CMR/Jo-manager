<?php
    if(isset($_POST['submit_gamme'])):
        $aj_gamme = test_input(($_POST['aj_gamme']));
        $mat_gamme='Gam-'.random_int(0,80000);
        $mat_type = test_input($_POST['mat_type']);

        //var_dump($aj_gamme);

        $DB->query("INSERT INTO gamme_produit (nom_gamme, mat_gamme, mat_type) VALUES(:nom_gamme, :mat_gamme, :mat_type)",
          [
            'mat_gamme'=>$mat_gamme,
            'nom_gamme'=>$aj_gamme,
            'mat_type'=>$mat_type,
          ]
        );

        header("location:aj_produit_admin/$mat_type");

    endif;
// ----------------------------------------------------------------------------------------------------------------


    if(isset($_POST['submit_dimension'])):
        $aj_dimension = test_input(($_POST['aj_dimension']));
        $mat_dim='Dim-'.random_int(0,80000);
        $mat_type = test_input($_POST['mat_type']);


        //var_dump($aj_dimension);


        $DB->query("INSERT INTO dimensions (mat_dim, dimension, mat_type) VALUES (:mat_dim , :dimension, :mat_type)",
        [
          'mat_dim'=>$mat_dim,
          'dimension'=>$aj_dimension,
          'mat_type'=>$mat_type,
        ]
      );

      header("location:aj_produit_admin/$mat_type");

    endif;



    if(isset($_POST['submit_epaisseur'])):
        $epaisseur = test_input($_POST['epaisseur']);
        $mat_epaisseur='Ep-'.random_int(0,80000);
        $mat_type = test_input($_POST['mat_type']);


        //var_dump($aj_epaisseur);

        $DB->query("INSERT INTO epaisseur (mat_epaisseur, epaisseur, mat_type) VALUES (:mat_epaisseur, :epaisseur, :mat_type)",
        [
          'mat_epaisseur'=>$mat_epaisseur,
          'epaisseur'=>$epaisseur,
          'mat_type'=>$mat_type,
        ]
      );

      header("location:aj_produit_admin/$mat_type");
    endif;


?>