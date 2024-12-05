<!doctype html>
<html lang="en">
    


<!-- Mirrored from themesdesign.in/morvin/layouts/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 20 Oct 2024 05:02:26 GMT -->
<head>

    
    <meta charset="utf-8" />
    
    <title>Dashboard | Morvin - Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesdesign" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- plugin css -->
    <link href="assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />

    <!-- Bootstrap Css -->
    <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />


</head>


<body>

    <!-- Begin page -->
    <div id="layout-wrapper">
        <!-- header  -->
        <?php include_once "includes/header.php" ?>

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">

                <!-- start page title -->
                <div class="page-title-box">
                    <div class="container-fluid">
                     <div class="row align-items-center">
                         <div class="col-sm-6">
                             <div class="page-title">
                                 <h4>Tableau de bord d'administration</h4>
                                     <ol class="breadcrumb m-0">
                                         <li class="breadcrumb-item"><a href="javascript: void(0);">Jo-Retail</a></li>
                                         <li class="breadcrumb-item"><a href="javascript: void(0);">Tableau de bord d'administration</a></li>
                                     </ol>
                             </div>
                         </div>
                         <div class="col-sm-6">
                            <div class="float-end d-none d-sm-block">
                                <a href="add-type_produit" class="btn btn-success">Ajouter un type de Produit</a>
                            </div>
                         </div>
                     </div>
                    </div>
                 </div>
                 <!-- end page title -->    


                <div class="container-fluid">

                    <div class="page-content-wrapper">

                    <div class="row">
                                    <div class="col-xl-3">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="text-center">
                                                    <p class="font-size-16">Produits</p>
                                                    <div class="mini-stat-icon mx-auto mb-4 mt-3">
                                                        <span class="avatar-title rounded-circle bg-soft-success">
                                                                <i class="dripicons-stack text-success font-size-20"></i>
                                                        </span>
                                                    </div>
                                                    <h5 class="font-size-22"><?php echo count(select_table('produicts_all')); ?></h5>
    
                                                    <p class="text-muted">Produits en stock</p>
                                                </div>
                                            </div>
                                        </div>

                                        
                                    </div>
                                <div class="col-xl-3">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="text-center">
                                                    <p class="font-size-16">Commandes</p>
                                                    <div class="mini-stat-icon mx-auto mb-4 mt-3">
                                                        <span class="avatar-title rounded-circle bg-soft-primary">
                                                                <i class="mdi mdi-cart-outline text-primary font-size-20"></i>
                                                            </span>
                                                    </div>
                                                    <h5 class="font-size-22"><?php echo count(select_table('commande')); ?></h5>
    
                                                    <p class="text-muted">Commandes effectuees</p>
                                                </div>
                                            </div>
                                        </div><!-- end card -->
                                </div><!-- end col -->
                                <div class="col-xl-3">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="text-center">
                                                    <p class="font-size-16">Boutiques</p>
                                                    <div class="mini-stat-icon mx-auto mb-4 mt-3">
                                                        <span class="avatar-title rounded-circle bg-soft-primary">
                                                                <i class="text-primary fas fa-warehouse font-size-20"></i>
                                                            </span>
                                                    </div>
                                                    <h5 class="font-size-22"><?php echo count(select_table('shop')); ?></h5>
    
                                                    <p class="text-muted">Nombre de Boutiques</p>
                                                </div>
                                            </div>
                                        </div><!-- end card -->
                                </div><!-- end col -->
                            <div class="col-xl-3">
                            <div class="card">
                                            <div class="card-body">
                                                <div class="text-center">
                                                    <p class="font-size-16">Clients</p>
                                                    <div class="mini-stat-icon mx-auto mb-4 mt-3">
                                                        <span class="avatar-title rounded-circle bg-soft-success">
                                                                <i class="mdi mdi-account-outline text-success font-size-20"></i>
                                                        </span>
                                                    </div>
                                                    <h5 class="font-size-22"><?php echo count(select_table('client')); ?></h5>
                                                    
                                                    <p class="text-muted">Nombre de Clients</p>
                                                </div>
                                            </div>
                                        </div><!-- end card -->
                            </div><!-- end col -->

                        
                        
                            <?php /*<div class="row">
                                <div class="col-xl-8">
                                    <div class="card">
                                        <div class="card-body">

                                        

                                            <h4 class="header-title mb-4 float-sm-start">Quick Summary</h4>

                                            <div class="float-sm-end">
                                                <ul class="nav nav-pills">
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="#">Day</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="#">Week</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="#">Month</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link active" href="#">Year</a>
                                                    </li>
                                                </ul>
                                            </div>

                                            <div class="clearfix"></div>
                                        

                                            <div class="row align-items-center">
                                                <div class="col-xl-9">

                                                    <div>
                                                        <div id="stacked-column-chart" class="apex-charts" dir="ltr"></div>
                                                    </div>

                                                </div>


                                                <div class="col-xl-3">
                                                    <div class="dash-info-widget mt-4 mt-lg-0 py-4 px-3 rounded">

                                                    

                                                        <div class="media dash-main-border pb-2 mt-2">
                                                            <div class="avatar-sm mb-3 mt-2">
                                                                <span class="avatar-title rounded-circle bg-white shadow">
                                                                        <i class="mdi mdi-currency-inr text-primary font-size-18"></i>
                                                                    </span>
                                                            </div>
                                                        <div class="media-body ps-3">

                                                            <h4 class="font-size-20">$2354</h4>
                                                            <p class="text-muted">Earning <a href="#" class="text-primary">Withdraw <i class="mdi mdi-arrow-right"></i></a>
                                                            </p>

                                                        </div>
                                                        
                                                        </div>

                                                    

                                                    

                                                        <div class="media mt-4 dash-main-border pb-2">
                                                            <div class="avatar-sm mb-3 mt-2">
                                                                <span class="avatar-title rounded-circle bg-white shadow">
                                                                        <i class="mdi mdi-credit-card-outline text-primary font-size-18"></i>
                                                                    </span>
                                                            </div>
                                                            <div class="media-body ps-3">
                                                                <h4 class="font-size-20">$1598</h4>
                                                            <p class="text-muted">To Paid <a href="#" class="text-primary">Pay <i class="mdi mdi-arrow-right"></i></a></p>
                                                            </div>
                                                        </div>

                                                    

                                                        <div class="media mt-4">
                                                            <div class="avatar-sm mb-2 mt-2">
                                                                <span class="avatar-title rounded-circle bg-white shadow">
                                                                        <i class="mdi mdi-eye-outline text-primary font-size-18"></i>
                                                                    </span>
                                                            </div>
                                                        <div class="media-body ps-3">
                                                            <h4 class="font-size-20">1230</h4>
                                                            <p class="text-muted mb-0">To Online <a href="#" class="text-primary">View <i class="mdi mdi-arrow-right"></i></a></p>
                                                        </div>
                                                        </div>
                                                    </div>
                                                </div>


                                            </div>


                                        </div>
                                    </div>
                                </div>


                                <div class="col-xl-4">
                                    <div class="row">
                                        <div class="col-xl-6 col-md-6">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="text-center">
                                                        <p class="font-size-16">Orders</p>
                                                        <div class="mini-stat-icon mx-auto mb-4 mt-3">
                                                            <span class="avatar-title rounded-circle bg-soft-primary">
                                                                    <i class="mdi mdi-cart-outline text-primary font-size-20"></i>
                                                                </span>
                                                        </div>
                                                        <h5 class="font-size-22">58</h5>
        
                                                        <p class="text-muted">70% Target</p>

                                                        <div class="progress mt-3" style="height: 4px;">
                                                            <div class="progress-bar progress-bar bg-primary" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="70">
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            
                                        </div>

                                        <div class="col-xl-6 col-md-6">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="text-center">
                                                        <p class="font-size-16">Users</p>
                                                        <div class="mini-stat-icon mx-auto mb-4 mt-3">
                                                            <span class="avatar-title rounded-circle bg-soft-success">
                                                                    <i class="mdi mdi-account-outline text-success font-size-20"></i>
                                                            </span>
                                                        </div>
                                                        <h5 class="font-size-22">136</h5>
        
                                                        <p class="text-muted">80% Target</p>

                                                        <div class="progress mt-3" style="height: 4px;">
                                                            <div class="progress-bar progress-bar bg-success" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="80">
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="header-title mb-4">Revenue Stastics</h4>

                                            <div class="media">

                                                <h4>$14,235 </h4>


                                                <div class="media-body ps-3">

                                                    <div class="dropdown">
                                                        <button class="btn btn-light btn-sm dropdown-toggle" type="button"
                                                            id="dropdownMenuButton" data-bs-toggle="dropdown"
                                                            aria-haspopup="true" aria-expanded="false">
                                                            Today<i class="mdi mdi-chevron-down ms-1"></i>
                                                        </button>
                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                            <a class="dropdown-item" href="#">Yesterday</a>
                                                            <a class="dropdown-item" href="#">Last Week</a>
                                                            <a class="dropdown-item" href="#">last Month</a>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="mt-3">
                                                <div id="stastics-chart"></div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div> */?> 

                        <div class="row">

                            <div class="col-xl-4">
                                <div class="card">
                                    <div class="card-body">

                                        <h4 class="header-title mb-4">Product Traking</h4>


                                        <ul class="list-unstyled activity-wid mb-0">

                                            <li class="activity-list activity-border">
                                                <div class="activity-icon avatar-sm">
                                               
                                                  <img src="assets/images/users/avatar-7.jpg" class="avatar-sm rounded-circle" alt="">
                                                      
                                                </div>
                                                <div class="media">
                                                    <div class="me-3">
                                                     <h5 class="font-size-15 mb-1">Your Manager Posted</h5>
                                                     <p class="text-muted font-size-14 mb-0">James Raphael</p>
                                                    </div>

                                                    <div class="media-body">
                                                        <div class="text-end d-none d-md-block">
                                                        <p class="text-muted font-size-13 mt-2 pt-1 mb-0"><i class="mdi mdi-timer-outline font-size-15 text-primary"></i> 3 days</p>
                                                        </div>
                                                    </div>
                                                   
                                                </div>
                                            </li>

                                            <li class="activity-list activity-border">
                                                <div class="activity-icon avatar-sm">
                                                    <span class="avatar-title bg-soft-primary text-primary rounded-circle">
                                                                <i class="ti-shopping-cart font-size-16"></i>
                                                            </span>
                                                </div>
                                                <div class="media">
                                                    <div class="me-3">
                                                        <h5 class="font-size-15 mb-1">You have 5 pending order.</h5>
                                                        <p class="text-muted font-size-14 mb-0">America</p>
                                                    </div>

                                                    <div class="media-body">
                                                        <div class="text-end d-none d-md-block">
                                                        <p class="text-muted font-size-13 mt-2 pt-1 mb-0"><i class="mdi mdi-timer-outline font-size-15 text-primary"></i> 1 days</p>
                                                        </div>
                                                    </div>


                                                </div>
                                            </li>

                                            <li class="activity-list activity-border">
                                                <div class="activity-icon avatar-sm">
                                                    <span class="avatar-title bg-soft-success text-success rounded-circle">
                                                                <i class="ti-user font-size-16"></i>
                                                            </span>
                                                </div>
                                                <div class="media">
                                                    <div class="me-3">
                                                        <h5 class="font-size-15 mb-1">New Order Received</h5>
                                                        <p class="text-muted font-size-14 mb-0">Thank You</p>
                                                    </div>

                                                    <div class="media-body">
                                                        <div class="text-end d-none d-md-block">
                                                        <p class="text-muted font-size-13 mt-2 pt-1 mb-0"><i class="mdi mdi-timer-outline font-size-15 text-primary"></i> Today</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>

                                            <li class="activity-list activity-border">
                                                <div class="activity-icon avatar-sm">
                                               
                                                  <img src="assets/images/users/avatar-7.jpg" class="avatar-sm rounded-circle" alt="">
                                                      
                                                </div>
                                                <div class="media">
                                                    <div class="me-3">
                                                     <h5 class="font-size-15 mb-1">Your Manager Posted</h5>
                                                     <p class="text-muted font-size-14 mb-0">James Raphael</p>
                                                    </div>

                                                    <div class="media-body">
                                                        <div class="text-end d-none d-md-block">
                                                        <p class="text-muted font-size-13 mt-2 pt-1 mb-0"><i class="mdi mdi-timer-outline font-size-15 text-primary"></i> 3 days</p>
                                                        </div>
                                                    </div>
                                                   
                                                </div>
                                            </li>

                                            <li class="activity-list activity-border">
                                                <div class="activity-icon avatar-sm">
                                                    <span class="avatar-title bg-soft-primary text-primary rounded-circle">
                                                                <i class="ti-shopping-cart font-size-16"></i>
                                                            </span>
                                                </div>
                                                <div class="media">
                                                    <div class="me-3">
                                                        <h5 class="font-size-15 mb-1">You have 1 pending order.</h5>
                                                        <p class="text-muted font-size-14 mb-0">Dubai</p>
                                                    </div>

                                                    <div class="media-body">
                                                        <div class="text-end d-none d-md-block">
                                                        <p class="text-muted font-size-13 mt-2 pt-1 mb-0"><i class="mdi mdi-timer-outline font-size-15 text-primary"></i> 1 days</p>
                                                        </div>
                                                    </div>

                                                </div>
                                            </li>

                                            <li class="activity-list">
                                                <div class="activity-icon avatar-sm">
                                                    <span class="avatar-title bg-soft-success text-success rounded-circle">
                                                                <i class="ti-user font-size-16"></i>
                                                            </span>
                                                </div>
                                                <div class="media">
                                                    <div class="me-3">
                                                        <h5 class="font-size-15 mb-1">New Order Received</h5>
                                                        <p class="text-muted font-size-14 mb-0">Thank You</p>
                                                    </div>

                                                    <div class="media-body">
                                                        <div class="text-end d-none d-md-block">
                                                        <p class="text-muted font-size-13 mt-2 pt-1 mb-0"><i class="mdi mdi-timer-outline font-size-15 text-primary"></i> Today</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>

                                            
                                        </ul>

                                    </div>
                                </div>
                            </div>


                            <div class="col-xl-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title mb-4">Earning Goal</h4>

                                        <div class="mt-2 text-center">
                                           

                                            <div class="row">
                                                <div class="col-md-6">

                                                    <div class="mt-4 mt-sm-0">


                                                        <div id="list-chart-1" class="apex-charts" dir="ltr"></div>
                                                        <p class="text-muted mb-2 mt-2 pt-1">Total Earning:</p>
                                                        <h5 class="font-size-18 mb-1">USD 13,545.65</h5>
                                                    </div>
                                                </div>



                                                <div class="col-md-6 dash-goal">

                                                    <div class="mt-4 mt-sm-0">

                                                        <div id="list-chart-2" class="apex-charts" dir="ltr"></div>

                                                        <p class="text-muted mb-2 mt-2 pt-1">Earning Goal:</p>
                                                        <h5 class="font-size-18 mb-1">USD 84,265.45</h5>


                                                    </div>


                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title mb-4">Liste des Produits</h4>



                                        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                                        <!--  -->
                                        <div class="carousel-indicators">
                                             <?php $slides = select_table('produicts_all');
                                                    foreach($slides as $index => $slide):  ?>
                                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="<?= $index ?>" class="<?= $index === 0 ? 'active' : '' ?>" aria-current="true" aria-label="Slide <?= $index + 1 ?>"></button>
                                            <?php endforeach;  ?>   
                                        </div>
                                    

                                        
                                        
                                            <div class="carousel-inner">
                                                <?php foreach($slides as $index => $slide): ?>

                                                    <div class="carousel-item <?= $index === 0 ? 'active' : '' ?>">
                                                        <div class="row align-items-center mb-5">
                                                            <div class="col-md-4">
                                                                <img src="<?php echo $image_produit . $slide -> Img1 ?>"
                                                                    class="img-fluid me-3" alt="">
                                                            </div>
                                                            <div class="col-md-7 offset-md-1">

                                                                <div class="mt-4 mt-sm-0">
                                                                    <p class="text-muted mb-2"><?php echo $slide -> nom_produit  ?></p>

                                                                    <h5 class="text-primary"><?php echo $slide -> nom_gamme  ?></h5>



                                                                    <div class="row no-gutters mt-4">

                                                                        <div class="col-8">

                                                                            <div class="mt-1">
                                                                                <p class="text-muted mb-1">Prix :</p>
                                                                                <h4><?php echo $slide -> prix_de_vente. 'FCFA'  ?> </h4>    
                                                                            </div>

                                                                        </div>

                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                
                                                <?php endforeach; ?>
                                            </div>

                                        </div>

                                    </div>

                                </div>

                               


                                


                            </div>


                            <div class="col-xl-4">
                                <div class="card">
                                    <div class="card-body">

                                        <h4 class="header-title mb-4">Sales by State</h4>

                                        <div id="world-map-markers" style="height: 230px"></div>

                                        <div class="px-4 py-3 mt-4">
                                            <p class="mb-1">USA <span class="float-right">75%</span></p>
                                            <div class="progress mt-2" style="height: 6px;">
                                                <div class="progress-bar progress-bar-striped bg-primary"
                                                    role="progressbar" style="width: 75%" aria-valuenow="75"
                                                    aria-valuemin="0" aria-valuemax="75">
                                                </div>
                                            </div>

                                            <p class="mt-3 mb-1">Russia <span class="float-right">55%</span></p>
                                            <div class="progress mt-2" style="height: 6px;">
                                                <div class="progress-bar progress-bar-striped bg-primary"
                                                    role="progressbar" style="width: 55%" aria-valuenow="55"
                                                    aria-valuemin="0" aria-valuemax="55">
                                                </div>
                                            </div>

                                            <p class="mt-3 mb-1">Australia <span class="float-right">85%</span></p>
                                            <div class="progress mt-2" style="height: 6px;">
                                                <div class="progress-bar progress-bar-striped bg-primary"
                                                    role="progressbar" style="width: 85%" aria-valuenow="85"
                                                    aria-valuemin="0" aria-valuemax="85">
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>


                            </div>


                          


                        </div>

                        <div class="row">

                            <div class="col-xl-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title mb-4">Boutiques</h4>

                                        <ul class="inbox-wid list-unstyled mb-0">
                                        <?php $boutik = select_table('shop');
                                               $boutik_recents = array_slice($boutik, -6);   ?>
                                        <?php foreach ($boutik_recents as $key => $value) : 
                                            $shop = $value -> Mat_Shop;
                                            //var_dump($shop);
                                            $rec = count(select_table_where('produits_boutik', 'Mat_Shop', $shop )); //---- recuperation du nombre de produits contenu dans une boutique
                                            //$rec2 = $rec->mat_produit;
                                            //var_dump($rec);?>
                                            
                                            <li class="inbox-list-item">
                                                <a href="#">
                                                    <div class="media">
                                                        <div class="me-3 align-self-center">
                                                            <div class="avatar-sm rounded align-self-center">
                                                                <span class="avatar-title">
                                                                    <img src="<?= $dossier_logo . $value -> logo ?>" style="max-width: 60px;" alt="">
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="media-body overflow-hidden mt-3">
                                                            <h5 class="font-size-15 mb-1"><?php echo $value -> Nom_Shop ; ?></h5>
                                                        </div>
                                                        <p class="ms-2 pt-3">
                                                            <?php  echo $rec;  ?>
                                                        </p>
                                                    </div>
                                                </a>
                                            </li>
                                                <?php endforeach; ?>
                                        </ul>
                                    

                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-8">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title mb-4">Commande recentes</h4>
                                        <div class="table-responsive">
                                            <table class="table table-centered table-nowrap mb-0">
                                                <thead class="thead-light">
                                                    <tr>
                                                        <th>Mat_Com</th>
                                                        <th>Produits</th>
                                                        <th>Boutique</th>
                                                        <th>Prix</th>
                                                        <th>Nombre_Prod.</th>
                                                        <th>Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $commande = select_table('commande');  //---- recuperations de toutes les commandes
                                                        $commande_recents = array_slice($commande, -6) //--- tri des 6 dernieres commandes uniquement ?>
                                                <?php foreach ($commande_recents as $key => $value) :
                                                    ?>
                                                    <tr>
                                                    
                                                        <td><?php echo $value -> Mat_Com ; ?></td>
                                                        <td><i class="dripicons-stack"></i> <?php echo $value -> Produit_acheter ; ?></td>
                                                        <td><?php echo select_table_where('shop', 'Mat_Shop', $value-> Mat_Shop)[0] -> Nom_Shop; ?></td>
                                                        <td><?php echo $value -> Prix ; ?> Fcfa</td>
                                                        <td><?php  ?></td>
                                                        <td><span
                                                                class="badge badge-pill badge-soft-primary font-size-13">Pending</span>
                                                        </td>
                                                    </tr>
                                                    <?php endforeach; ?>
                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- end table-responsive -->
                                    </div>
                                </div>
                            </div>


                        </div>


                    </div>


                </div> <!-- container-fluid -->
            </div>
            <!-- End Page-content -->
             <?php include_once ('includes/footer.php') ?>
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

    <!-- Right Sidebar -->
        <!-- vide -->
    <!-- /Right-bar -->

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    <!-- JAVASCRIPT -->
    <script src="assets/libs/jquery/jquery.min.js"></script>
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/metismenu/metisMenu.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/node-waves/waves.min.js"></script>

    <!-- apexcharts -->
    <script src="assets/libs/apexcharts/apexcharts.min.js"></script>

    <!-- Plugins js-->
    <script src="assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-world-mill-en.js"></script>

    <script src="assets/js/pages/dashboard.init.js"></script>


    <script src="assets/js/app.js"></script>

</body>


<!-- Mirrored from themesdesign.in/morvin/layouts/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 20 Oct 2024 05:02:30 GMT -->
</html>