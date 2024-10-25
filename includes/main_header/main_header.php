<?php
// session_start();
if(empty($_SESSION['auth']['Matricule']) || empty($_SESSION['auth']['password']) ):
    header('location:auth-login.php');
endif;

$membre= select_table('membre','Matricule',$_SESSION['auth']['Matricule']);
if(empty($membre)):
    header('location:auth-login.php');
endif;

// session_destroy();

$nom_membre=$membre[0]->Nom;
$mat_shop=$membre[0]->Mat_Shop;
$telphone= $membre[0]->Telephone;
$permission=$membre[0]->Permission;
$mat_membre=$membre[0]->Matricule;