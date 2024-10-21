<?php 

$url="";
if(isset($_GET['url'])):
    $url=explode('/',$_GET['url']);
endif;

//------------deconnexion

if(@$url[0]=='deconnexion' AND !empty($url[1])): 
    $d=$url[1];
    require "path_action/deconnexion.php";
endif; 
// fin de


// les routes du projet

if(@$url==''):

    include_once("template/home.php");

elseif(@$url[0]=='Accueil_sup_ad'):

    include('template/accueil_sup_ad.php');

elseif(@$url[0]=='shops'):

    include('template/shops.php');

elseif(@$url[0]=='products'):

    include_once('template/products.php');

elseif(@$url[0]=='product-detail'):

    include_once('template/product-detail.php');

elseif(@$url[0]=='achat'):

    include_once('template/achat.php');

elseif(@$url[0]=='panier'):

    include_once('template/panier.php');

elseif(@$url[0]=='add-product'):

    include_once('template/add-product.php');

elseif(@$url[0]=='add-gerant'):

    include_once 'template/add-gerant.php';

elseif(@$url[0]=='add-shop'):
    
    include_once("template/add-shop.php");

elseif(@$url[0]=='auth-login'):

        include_once('template/auth-login.php');

endif;

