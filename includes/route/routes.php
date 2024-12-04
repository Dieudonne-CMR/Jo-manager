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
    if(@$url[0]=='accueil_sup_ad'):
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
    if(@$url[0]=='home' || @$url=='' || @$url[0]=='accueil_sup_ad'):
        
        include_once("template/home.php");
    endif;
endif;

//===== fin Route supper admin

if(@$url[0]=='shops'):
    include('template/shops.php');
endif;

if(@$url[0]=='products'): 

    $produits=[];
    if($gest_boutik==0 AND empty($mat_shop)): //--
        //------recuper les produits de toutes les boutiques
        $produits= select_table("produicts_all");
        $titre='Produits dans les boutiques';
    else:
        //------recuper les produits d'une boutique
        $produits= select_table_where("produits_boutik", "Mat_shop", $mat_shop); //on recupere tout les matricules des boutiques des gerants
        //var_dump($produits);
        $titre='Liste des Produits';

    endif;

    include_once('template/products.php');
endif;

if(@$url[0]=='product-detail'):
    include_once('template/product-detail.php');
endif;

if(@$url[0]=='achat'):
    include_once('template/achat.php');
endif;

//page d'ajout d'un produit par un admin
if(@$url[0]=='aj_produit_admin'):
    $mat_type = $url[1]; 
    $verif_mat_type = select_table_where('type_produit', 'mat_type', $mat_type);
    //var_dump($verif_mat_type);
    if (!empty($verif_mat_type)):
        include_once('template/ajout_produit_admin.php');
    else:
        header('Location:../home');
    endif; 
    
endif;


//page d'ajout d'un prospect par un gerant
if(@$url[0]=='add-prospect'):
    include_once('template/add-prospect.php');
endif;


//page de listing de tous les prospects 
if(@$url[0]=='liste_prospects'):
    include_once('template/liste_prospects.php');
endif;


//page d;ajout d;un type de produit 
if(@$url[0]=='add-type_produit'):
    include_once('template/add-type_produit.php');
endif;


if(@$url[0]=='panier'):
    //----- Récupérer le panier depuis la session
    $panier = !empty($_SESSION['panier'][$mat_shop]) ? $_SESSION['panier'][$mat_shop]: [];
    // unset($_SESSION['panier']);
    include_once('template/panier.php');
endif;

if(@$url[0]=='add-product'):  //route permettant a un gerant de selectionner le type de produit qu'il souhaite ajouter dans sa boutique

    $mat_type = $url[1]; 
    $verif_mat_type = select_table_where('type_produit', 'mat_type', $mat_type);
    if (!empty($verif_mat_type)):
        include_once('template/add-product.php');
    else:
        header('Location:../home');
    endif; 
endif;

//--------Chechout de la commande
if(@$url[0]=='checkout'):
    include_once('template/checkout.php');
endif;



//----------- cette route nous permet de faire la modification d'un produit

if(@$url[0]=='modifi-product'):
   
    // var_dump(@$url[1]);
    if(empty($url[1])):
        header("location:../products");
    else:
        $mat_pro= test_input($url[1]);

        //-------- ici nous allons verifier que le produit existe avant de modifier 
        $product = select_table_where("produicts_all", "mat_produit", $mat_pro) ;
        $type = $product[0] -> nom_produit; //----- recuperation du nom du type de produits
        //var_dump($type);
        if(sizeof($product)>0):
            include_once('template/modifi-product.php');
        else:
            header("location:../products");
        endif;
    endif;

endif;

 //------cette route nous permet de faire la modification d'une boutique
 if(@$url[0]=='modifi-shop'):
    $recup = select_table_where('shop','Mat_Shop',$mat_shop);
    // var_dump($recup);
    if(sizeof($recup)<1):
        header("location:home");
    endif;
    $recup = $recup[0];
    include_once("template/modifi-shop.php");
endif;

 //------cette route nous permet de faire la modification d'un membre
 if(@$url[0]=='modifi-gerant'):
    $recup = select_table_where('membre','Mat_Shop',$mat_shop);
    // var_dump($recup);
    if(sizeof($recup)<1):
        header("location:home");
    endif;
    $recup = $recup[0];
    include_once("template/modifi-gerant.php");
endif;



//=== les routes en POST : routes d'insertions checkout
    
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

if(@$url[0]=='mod-gerant'):
    include_once 'processing/mod-gerant.php'; 
endif;
//---------
if(@$url[0]=='mod-product'):
    include_once 'processing/mod-product.php'; 
endif;

//-----traitement produit dans le panier vide_panier
if(@$url[0]=='aj_panier'):
    include_once 'processing/ajouter_au_panier.php'; 
endif;
//---vider le panier
if(@$url[0]=='vide_panier'):
    unset($_SESSION['panier'][$mat_shop]);
    header("location:home");
endif;

//--------Mise ajour du panier
if(@$url[0]=='mettre_a_jour_panier'):
    include_once 'processing/mettre_a_jour_panier.php'; 
endif;

//--------sauvegarde d'une commande
if(@$url[0]=='save_checkout'):
    include_once 'processing/save_checkout.php'; 
endif;

//--------traitement d'ajout d'une campagne
if(@$url[0]=='aj_campagne'):
    include_once 'processing/aj_campagne.php'; 
endif;


//--------traitement d'ajout d'un prospect
if(@$url[0]=='aj_prospect'):
    include_once 'processing/aj_prospect.php'; 
endif;


//--------route pour le traitement de la selection d'un produit par un gerant(ajout dans produi_boutik)
if(@$url[0]=='select_produit'):
    include_once 'processing/select_produit.php'; 
endif;


//--------traitement d'ajout d'un type de produit
if(@$url[0]=='aj_type_produit'):
    include_once 'processing/aj_type_produit.php'; 
endif;


if(@$url[0]=='panier'):
    include_once 'processing/supprimer_panier.php'; 
endif;


//route d'ajout d'une gamme,dimension ou epaisseur
if(@$url[0]=='aj_dim-gam-ep'):
    include_once 'processing/aj_dim-gam-ep.php'; 
endif;

//route d'ajout d'un produit par un admin
if(@$url[0]=='aj_produits_super-admin'):
    include_once 'processing/aj_produits_super-admin.php';
endif;

//suppression d'un produit dans la commande
if(@$url[0]=='supprimer_panier'):
    include_once "processing/$url[0].php";
endif;

//======== Les actions 
//------deconnexion

if(@$url[0]=='deconnexion'): 
    require "processing/deconnexion.php";
endif; 
// fin dez