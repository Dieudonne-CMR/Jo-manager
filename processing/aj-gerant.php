<?php
// var_dump($_POST);


if(isset($_POST['nom']) AND !empty($_POST['nom'])):
    $nom_boutik = test_input($_POST['nom']);
    $localisation_gerant = test_input($_POST['localisation_gerant']);
    $telephone_gerant = test_input($_POST['telephone_gerant']);
    $mat_boutik= test_input($_POST['mat-boutik']);
    $role= test_input($_POST['role']); 
    $mat_gerant = 'JO-'.random_int(0,800); 
    $password= 'Password-'.random_int(0,800);
    // var_dump($role);

    $gerant=select_table_where('membre','Telephone',$telephone_gerant );
    if(sizeof($gerant)<1):
        
        $DB->query("INSERT INTO membre (Nom,Localisation, Telephone,Matricule,Mat_shop, Role, password) 
        VALUES(:Nom, :Localisation, :Telephone, :Matricule, :Mat_shop, :Role, :password)",
          [
            'Nom'=>$nom_boutik,
            'Localisation'=>$localisation_gerant,
            'Telephone'=>$telephone_gerant,
            'Matricule'=>$mat_gerant,
            'Mat_shop'=>$mat_boutik,
            'Role'=> $role,
            'password'=>$password,
          ] );

          $reponse=0;
    else:

        $reponse=1;
    endif;

endif;
echo json_encode($reponse) ;