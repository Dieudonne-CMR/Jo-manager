<?php
    if(isset($_POST['submit_gamme'])):
        $aj_gamme = test_input(($_POST['aj_gamme']));
        $mat_gamme='Gam-'.random_int(0,80000);

        //var_dump($aj_gamme);

        $DB->query("INSERT INTO gamme_produit (nom_gamme, mat_gamme) VALUES(:nom_gamme, :mat_gamme)",
          [
            'mat_gamme'=>$mat_gamme,
            'nom_gamme'=>$aj_gamme,
          ]
        );

        header("location:aj_produit_admin");

    endif;
// ----------------------------------------------------------------------------------------------------------------


    if(isset($_POST['submit_dimension'])):
        $aj_dimension = test_input(($_POST['aj_dimension']));
        $mat_dim='Dim-'.random_int(0,80000);


        //var_dump($aj_dimension);


        $DB->query("INSERT INTO dimension (mat_dim, dimension) VALUES (:mat_dim , :dimension)",
        [
          'mat_dim'=>$mat_dim,
          'dimension'=>$aj_dimension,
        ]
      );

      header("location:aj_produit_admin");

    endif;



    if(isset($_POST['submit_epaisseur'])):
        $aj_epaisseur = test_input($_POST['aj_epaisseur']);
        $mat_epaisseur='Ep-'.random_int(0,80000);


        //var_dump($aj_epaisseur);

        $DB->query("INSERT INTO epaisseur (mat_epaisseur, epaisseur) VALUES (:mat_epaisseur, :epaisseur)",
        [
          'mat_epaisseur'=>$mat_epaisseur,
          'epaisseur'=>$aj_epaisseur,
        ]
      );

      header("location:aj_produit_admin");
    endif;


?>