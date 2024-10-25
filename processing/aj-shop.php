<?php
  if(isset($_POST["soumettre"])):
    if(!empty($_POST['nom_shop']) AND  !empty($_POST['localisation']) AND !empty($_POST['tel_shop']) AND !empty($_POST['email']) AND !empty($_POST['logo']) AND !empty($_POST["banniere"])):
      
      $nom_shop = htmlspecialchars($_POST['nom_shop']);
      $localisation = htmlspecialchars($_POST['localisation']);
      $ntel_shop = htmlspecialchars($_POST['tel_shop']);
      $email = htmlspecialchars($_POST['email']);
      $logo = htmlspecialchars($_POST['logo']);
      $banniere = htmlspecialchars($_POST['banniere']);

    endif;
  endif;