<?php 


// $nom_shop= select_table_where('shop','Mat_Shop', $mat_shop);

// var_dump($nom_shop[0]->Nom_Shop);
// var_dump(select_table_where('shop','Mat_Shop', $mat_shop)[0]->Nom_Shop);


$url="";

if(isset($_GET['url'])):
    $url=explode('/',$_GET['url']);
endif;

//=========================================== Route supper admin
if($gest_boutik==0):

    //--- afficher la d'accueille du supper administrateur
    if(@$url[0]=='Accueil_sup_ad'):
        include('template/accueil_sup_ad.php');
    endif;
     //--- afficher la d'accueille du supper administrateur
     if(@$url==''):
        include('template/accueil_sup_ad.php');
    endif;
     //--- afficher la d'accueille du supper administrateur
    if(@$url[0]=='home'):
        include('template/accueil_sup_ad.php');
    endif;

    //-------- ajoute d'un gerant
    if(@$url[0]=='add-gerant'): 
        include_once 'template/add-gerant.php';
    endif;
    //------- Ajout d'une boutique 
    if(@$url[0]=='add-shop'):
        include_once("template/add-shop.php");
    endif;
    //------liste des gerants
    if(@$url[0]=='liste-gerant'):
        include_once("template/liste-gerant.php");
    endif;

    



elseif($gest_boutik==1): 

    //-------- page d'accueil pour les gerants dans boutiques
    if(@$url[0]=='home' || @$url==''):
        include_once("template/home.php");
    endif;
endif;
//===== fin Route supper admin


if(@$url[0]=='shops'):
    include('template/shops.php');
endif;

if(@$url[0]=='products'):

    include_once('template/products.php');
endif;

if(@$url[0]=='product-detail'):

    include_once('template/product-detail.php');
endif;

if(@$url[0]=='achat'):

    include_once('template/achat.php');
endif;

if(@$url[0]=='panier'):

    include_once('template/panier.php');
endif;

if(@$url[0]=='add-product'):

    include_once('template/add-product.php');
endif;

 //------cette route nous permet faire la modification d'une boutique
 if(@$url[0]=='modifi-shop'):
    $recup = select_table_where('shop','Mat_Shop',$mat_shop);
    // var_dump($recup);
    if(sizeof($recup)<1):
        header("location:home");
    endif;
    $recup = $recup[0];
    include_once("template/modifi-shop.php");
endif;



//=== les routes en POST : routes d'insertions
    
if(@$url[0]=='aj-gerant'):
    include_once 'processing/aj-gerant.php'; 
endif;

if(@$url[0]=='aj-shop'):
    include_once 'processing/aj-shop.php'; 
endif;

if(@$url[0]=='aj-product'):
    include_once 'processing/aj-product.php'; 
endif;

if(@$url[0]=='mod-shop'):
    include_once 'processing/mod-shop.php'; 
endif;


//======== Les actions
//------deconnexion

if(@$url[0]=='deconnexion'): 
    require "processing/deconnexion.php";
endif; 
// fin de