<?php
    if(isset($_POST['enregistrer'])):
        
        $mat_prospect = 'Pros-'.random_int(0,800);
        $nom_prospect = test_input(($_POST['nom_prospect']));
        $telephone_prospect = test_input(($_POST['numero_prospect']));
        $localisation = test_input(($_POST['localisation']));
        $besoin = test_input(($_POST['besoin']));
        //$type_rencontre = test_input(($_POST['type_rencontre']));
        $date_rencontre = test_input(($_POST['date_rencontre']));
        var_dump($date_rencontre);

        $DB->query("INSERT INTO prospect (nom, telephone, besoin, date_rencontre, localisation, mat_pros)
                    VALUES(:nom, :telephone,  :besoin, :date_rencontre, :localisation, :mat_pros)",
          [
            'mat_pros'=>$mat_prospect,
            'nom'=>$nom_prospect,
            'besoin'=>$besoin,
            'date_rencontre'=>$date_rencontre,
            'localisation'=>$localisation,
            'telephone'=>$telephone_prospect,
          ]
        );

        header("location:home");



    endif;
?>