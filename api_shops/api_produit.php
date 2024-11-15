<?php
//---requete pour afficher les elements d'une categores

#--------api_shop id_website

$image_produit = "https://akila.store/_ressources/images_articles/";

$id_website= '7220708820';

//------------- Permet de recuper les produit d'une boutique
function recup_produict($id_website){ 

    $url_akila= "https://akila.store/produits";
    
    $data = array( 
               'id_website' => $id_website, 
               );
    
    // utilisez 'http' même si vous envoyez la requête sur https:// ...
    $options = array(
     'http' => array(
       'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
       'method'  => 'POST',
       'content' => http_build_query($data)
     )
    );
    $context  = stream_context_create($options);
    $result= file_get_contents($url_akila, false, $context);
    $info_post = json_decode($result);
    if ($info_post  === FALSE) { /* Handle error */ }
    // var_dump($vues);
    return $info_post ;
  }
  /*

  stdClass Object ( [id_article] => 1823 
  [mat_article] => 0683254082 
  [id_website] => 7220708820 
  [nom_art] => Fonio Précuit 
  [madein] => ML 
  [nom_art_marketplace] => 
  [permalien] => 
  [id_categorie_art] => 512 
  [id_categorie_lv1] => supermarche 
  [id_categorie_lv2] => 
  [id_categorie_lv3] => 
  [mat_categorie_art] => 1507 
  [mat_categorie_market_lv3] => 
  [prix_reel] => 1500 
  [prix_fictif] => 
  [prix_reel_marketplace] => 
  [prix_fictif_marketplace] => 
  [stock] => 0 
  [lien_img_vedette] => bimousso_0683254082_vedette.jpg 
  [lien_img2] => 
  [lien_img3] => 
  [lien_img4] => 
  [lien_img5] => 
  [lien_img6] => 
  [lien_img7] => 
  [lien_img8] => 
  [lien_img9] => 
  [lien_img10] => 
  [details] => 
  [courte_description] => Le fonio précuit est un aliment traditionnel africain qui est très apprécié pour sa facilité de préparation. Il s'agit d'une céréale sans gluten qui est riche en nutriments essentiels tels que les protéines, les fibres et les minéraux. 
  [description] =>
Le fonio précuit est souvent utilisé comme base pour les plats principaux ou comme accompagnement dans de nombreux plats africains. Il a une texture légère et moelleuse, et un goût délicat et légèrement noisette.

Grâce à sa pré-cuisson, le fonio peut être prêt en seulement quelques minutes, ce qui en fait une option idéale pour les repas rapides et sains.

Que ce soit dans une salade, un ragoût ou simplement en accompagnement, le fonio précuit est une excellente alternative nutritive aux autres grains.

[lien_video] => [utilisation] => [date_ajout] => 2024-10-01 [heure_ajout] => 13:42:13 [is_out_of_stock] => 0 [is_deleted_user] => 0 [is_deleted_admin] => 0 [is_active_space] => 1 [is_active_website] => 1 [is_active_market] => 1 [mat_member] => 7856235489 [lien_article_externe] => [prix_fournisseur] => [mat_fournisseur] => ) 

*/