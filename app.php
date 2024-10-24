<?php 
include_once ("data_base/class.db.php");
include_once ('fonction/fontion.php');
include_once ('includes/main_header/main_header.php');

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
//============== afficher la page d'une boutique
// var_dump(@$url);

if(@$url[0]=='home' || @$url==''):
    include_once("template/home.php");
endif;

//============ afficher la d'accueille du supper administrateur
if(@$url[0]=='Accueil_sup_ad'):
    include('template/accueil_sup_ad.php');
endif;

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

if(@$url[0]=='add-gerant'):

    include_once 'template/add-gerant.php';

endif;

if(@$url[0]=='add-shop'):
    include_once("template/add-shop.php");
endif;


//========= les routes en POST : routes d'insertions
if (@$url[0]=='login'):
    include_once 'processing/login.php'; 
endif;
    
if(@$url[0]=='gerant'):
    include_once 'processing/gerant.php'; 
endif;

if(@$url[0]=='shop'):
    include_once 'processing/shop.php'; 
endif;
