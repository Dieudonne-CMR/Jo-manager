<?php
  if(isset($_POST["connecter"])):
    if(!empty($_POST['nom_utilisateur']) AND !empty($_POST['mot_de_passe'])):

      $nom_utilisateur = $_POST["nom_utilisateur"];
      $mot_de_passe = $_POST["mot_de_passe"];
    endif;
  endif;