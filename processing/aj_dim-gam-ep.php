<?php
    if(isset($_POST['submit_gamme'])):
        $aj_gamme = test_input($_POST['aj_gamme']);

        var_dump($aj_gamme);


    endif;



    if(isset($_POST['submit_dimension'])):
        $aj_dimension = test_input($_POST['aj_dimension']);


        var_dump($aj_dimension);

    endif;



    if(isset($_POST['submit_epaisseur'])):
        $aj_epaisseur = test_input($_POST['aj_epaisseur']);

        var_dump($aj_epaisseur);
    endif;


























?>