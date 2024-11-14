<?php
    if(isset($_POST['enregistrer'])):
        
        $nom_prospect = test_input($_POST['nom_prospect']);
        $numero_prospect = test_input($_POST['numero_prospect']);
        $localisation = test_input($_POST['localisation']);
        $besoin = test_input($_POST['besoin']);
        $type_rencontre = test_input($_POST['type_rencontre']);
        $date_rencontre = test_input($_POST['date_rencontre']);





    endif;
?>