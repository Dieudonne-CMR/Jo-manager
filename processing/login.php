<?php
include_once ("../data_base/class.db.php");
include_once ('../fonction/fontion.php');
// var_dump($_POST);
$reponse=1;

if(!empty($_POST['matricule'])):
  if(!empty($_POST['mot_de_passe'])):
    $mat_user=test_input($_POST['matricule']);
    $mot_de_passe=test_input($_POST['mot_de_passe']);

    $auth= $DB->query("SELECT * FROM membre WHERE Matricule=:mat AND password=:pass  LIMIT 1",
      ['mat'=>$mat_user,'pass'=> $mot_de_passe]);

    // $auth= select_table_where('membre','Nom','password');
    // var_dump($auth);
           
    if(count($auth)>0):
        $_SESSION['auth']=[];
        $_SESSION['auth']=[
            'Mat_Shop'=>$auth[0]->Mat_Shop,
            'permission'=>$auth[0]->Permission,
            'password'=>$auth[0]->password,
            'Matricule'=>$auth[0]->Matricule,
        ];
        $reponse=0;
      endif;

  endif;
  echo json_encode($reponse);
endif;
