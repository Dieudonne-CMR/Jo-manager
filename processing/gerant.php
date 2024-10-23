<?php

if(isset($_POST["soumettre"])):
  if(!empty($_POST["nom"]) AND !empty($_POST["localisation_gerant"]) AND !empty($_POST["telephone gerant"])):
    $nom = $_POST['nom'];
    $localisation_gerant = $_POST['localisation_gerant'];
    $telephone_gerant = $_POST["telephone_gerant"];
  endif;
endif;