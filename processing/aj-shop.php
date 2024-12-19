<?php
// var_dump($_POST);

  if(isset($_POST["soumettre"])):
    if(!empty($_POST['nom_shop'])):

      $email= $nom_banniere='';
      
      $mat_shop='B'.random_int(0,800);
      $nom_shop = @test_input($_POST['nom_shop']);
      $localisation = @test_input($_POST['localisation']);
      $tel_shop = @test_input($_POST['tel_shop']);
      $email = @test_input($_POST['email']);

      $nom_logo=@traiter_image($dossier_logo, $_FILES['logo']);
      $nom_banniere= @traiter_image($dossier_logo, $_FILES['banniere']);
      
      
      $DB->query("INSERT INTO Shop (Mat_Shop,Nom_Shop,Localisation,Telephone,Email,Mat_admin,logo,Banniere) 
      VALUES(:mat_shop, :nom_shop, :localisation, :telephone, :email, :mat_admin,:logo,:banniere)",
        [
          'mat_shop'=>$mat_shop,
          "nom_shop"=>$nom_shop,
          'localisation'=>$localisation,
          'telephone'=>$tel_shop,
          'email'=>$email,
          'mat_admin'=>$mat_membre,
          'logo'=> $nom_logo,
          'banniere'=>$nom_banniere
        ]
      );
      
      $_SESSION['ok']= 'ok';
      var_dump($_SESSION['ok'], $nom_banniere );
      // header("location:add-shop");
    endif;
  endif;