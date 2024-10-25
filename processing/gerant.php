<?php

$host = 'localhost';
$dbname = 'jo_manager';
$username = 'root';     // username par défaut
$password = '';         //password par défaut

if(isset($_POST["soumettre"])):
  if(!empty($_POST["nom"]) AND !empty($_POST["localisation_gerant"]) AND !empty($_POST["telephone gerant"])):
    $nom = $_POST['nom'];
    $localisation_gerant = $_POST['localisation_gerant'];
    $telephone_gerant = $_POST["telephone_gerant"];



      try {
        //connexion à mysql

    $pdo = new PDO("mysql:host=$host;dbname=$dbname","$username","$password");
  } catch (PDOException $exc) {
    echo $exc->getMessage();
    exit();
   }

    //requete d'insertion dans la TABLE shop`
    $sql = "INSERT INTO `membre`( `nom`, `localisation_gerant`, `telephone_gerant`) VALUES (:nom, :localisation_gerant, :telephone_gerant)";
    $res = $pdo->prepare($sql);
    $exec = $res->execute(array(":nom"=>$nom, ":localisation_gerant"=>$localisation_gerant,
                                ":telephone_gerant"=>$telephone_gerant));

    if($exec){
    echo 'Ajout du membre réussi';
    }else{
    echo "Échec de l'opération d'insertion";
    }



  endif;
endif;