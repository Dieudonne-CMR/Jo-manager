<?php
session_start();
  if(isset($_POST["connecter"])):
    if(!empty($_POST['matricule']) AND !empty($_POST['password'])):
      $nom_utilisateur = $_POST["matricule"];
      $mot_de_passe = $_POST["password"];

          // VERIFICATION DE L'EXISTANCE DE L'UTILISATEUR

          $user= $DB->query("SELECT matricule FROM membre WHERE id_membre:id");
          
          if($controlUser == 0)
          {
             
           
          }
      
      
    endif;
  endif;