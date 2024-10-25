<?php

    $host = 'localhost';
    $dbname = 'jo_manager';
    $username = 'root';     // username par défaut
    $password = '';         //password par défaut

  if(isset($_POST["soumettre"])):
    if(!empty($_POST['nom_shop']) AND  !empty($_POST['localisation']) AND !empty($_POST['tel_shop']) AND !empty($_POST['email']) AND !empty($_POST["banniere"])):
      
      $nom_shop = htmlspecialchars($_POST['nom_shop']);
      $localisation = htmlspecialchars($_POST['localisation']);
      $tel_shop = htmlspecialchars($_POST['tel_shop']);
      $email = htmlspecialchars($_POST['email']);
      // $logo = htmlspecialchars($_POST['logo']);
      $banniere = htmlspecialchars($_POST['banniere']);



      try {
            //connexion à mysql

        $pdo = new PDO("mysql:host=$host;dbname=$dbname","$username","$password");
      } catch (PDOException $exc) {
        echo $exc->getMessage();
        exit();
       }

       //requete d'insertion dans la TABLE shop
       $sql = "INSERT INTO `shop`(`nom_shop`, `localisation`, `tel_shop`, `email`, 
              , `banniere`) VALUES(:nom_shop, :localisation, :tel_shop, :email,
               :banniere)";
              $res = $pdo->prepare($sql);
              $exec = $res->execute(array(":nom_shop"=>$nom_shop, ":localisation"=>$localisation,
                                          ":tel_shop"=>$tel_shop, ":email"=>$email, 
                                          ,":banniere"=>$banniere));

        if($exec){
          echo 'Ajout de la boutique réussi';
        }else{
          echo "Échec de l'opération d'insertion";
        }
      


    endif;
  endif;