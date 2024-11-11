<?php
    if(!empty($_SESSION['panier'][$mat_shop])):
        if(isset($_POST['soumettre'])):
            $recup_panier = $_SESSION['panier'][$mat_shop];     // on recupere les informations du panier envoyees via notre formulaire
            $nom_client = test_input($_POST['nom_client']);
            $adresse_client = test_input($_POST['adresse_client']);
            $tel_client = test_input($_POST['tel_client']);
            $ville_client = test_input($_POST['ville']);



        //requete d'insertion des informations de la commande 












    endif;
endif;
?>