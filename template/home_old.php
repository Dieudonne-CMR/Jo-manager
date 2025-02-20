
<!doctype html>
<html lang="en">


    
<!-- Mirrored from themesdesign.in/morvin/layouts/ecommerce-products.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 20 Oct 2024 05:00:53 GMT -->
<head>
        
        
        <meta charset="utf-8" />
       <meta>
       <?php $titre='Accueil pour le gerant'; include_once('includes/meta.php') ?>

        <!-- ION Slider -->
        <link href="assets/libs/ion-rangeslider/css/ion.rangeSlider.min.css" rel="stylesheet" type="text/css"/>

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
                                     <h4>Products</h4>
                                         <ol class="breadcrumb m-0">
                                             <li class="breadcrumb-item"><a href="javascript: void(0);">Morvin</a></li>
                                             <li class="breadcrumb-item"><a href="javascript: void(0);">Ecommerce</a></li>
                                             <li class="breadcrumb-item active">Products</li>
                                         </ol>
                                </div>
                             </div>
                             <div class="col-sm-6">
                                <div class="float-end d-none d-sm-block">
                                    <a href="panier" class="btn btn-success">Panier <i class="dripicons-basket"> <span id="panier"><?= isset($_SESSION['panier'][$mat_shop]) ? sizeof($_SESSION['panier'][$mat_shop]): 0 ?></span></i></a>
                                    <a href="vide_panier" class="btn btn-danger">Vider <i class="dripicons-basket"> </i></a>
                                </div>
                             </div>
                         </div>
                        </div>
                     </div>
                     <!-- end page title -->    


                    <div class="container-fluid">

                        <div class="page-content-wrapper">

                            <div class="row" >

                            <?php
                                foreach(select_table_where('produits_boutik', 'mat_shop', $mat_shop) as $val):
                                    $mat_produit = $val->mat_produit; // recuperation des matricules des produits qui sont lies a la boutiques dans laquelle on est
                                    //var_dump($mat_produit);       
                            ?>

                                <?php foreach(select_table_where("produicts_all","mat_produit",$mat_produit) as $value): 
                                     //$mat_type=$value->nom_type  //-- du produits
                                ?>
                                    <div class="col-xl-4 col-sm-6">
                                        <div class="card">
                                            <div class="card-body">
                                            <div class="product-img pb-3">
                                               <?php /* <div class="product-ribbon  bg-primary">
                                                    25% Off
                                                </div> */?>
                                                
                                                <img src="<?php echo $image_produit . $value -> Img1 ?>" alt="" class="img-fluid mx-auto d-block">
                                            </div>
    
                                            <div class="text-center">
    
                                                <a href="#" class="text-dark " >
                                                    <h5 class="font-size-18"><?php echo select_table_where('type_produit', 'mat_type', $value -> mat_type)[0]->nom_type. '  |  '. $value -> nom_gamme. '  |  '. $value -> dimensions ; ?></h5>
                                                </a>
    
                                                <h4 class="mt-3 mb-0"><?php echo $value -> prix_de_vente; ?> <span class="font-size-14 text-muted me-2"><del><?php //echo $type; ?></del></span></h4>
    
                                                <div class="mt-3">
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item">
                                                            <i class="mdi mdi-star text-warning"></i>
                                                            <i class="mdi mdi-star text-warning"></i>
                                                            <i class="mdi mdi-star text-warning"></i>
                                                            <i class="mdi mdi-star text-warning"></i>
                                                            <i class="mdi mdi-star-half text-warning"></i>
                                                        </li>
                                                    </ul>
                                                </div>
  
                                                <div class="product-action mt-2">
                                                    <form class='ajpanier' action="aj_panier" method="POST">
                                                        <input type="hidden" name="mat_product" value="<?php echo $mat_produit; ?>">
                                                        <input type="hidden" name="nom" value="<?php echo $value -> nom_gamme; ?>">
                                                        <input type="hidden" name="prix" value="<?php echo $value -> prix_de_vente; ?>">
                                                        <input type="hidden" name="image" value="<?php echo $value -> Img1; ?>">
                                                        <div class="d-grid">
                                                            <button type="submit" class="btn btn-primary"> Ajouter au panier</button>
                                                        </div>
                                                    </form>
                                                </div>
                                                
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach;    ?>
                            <?php endforeach; ?>
                                
                                
                            </div>
                            <!-- end row -->

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
        
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- JAVASCRIPT -->
         
        <script src="assets/libs/jquery/jquery.min.js"> </script>
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/node-waves/waves.min.js"></script>

        <!-- Ion Range Slider-->
        <script src="assets/libs/ion-rangeslider/js/ion.rangeSlider.min.js"></script>

        <!-- init js -->
        <script src="assets/js/pages/product-filter-range.init.js"></script>
        
        <script src="assets/js/app.js"></script>
        
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        
        <script src="assets/js/aj-panier.js"></script>
        

       
    </body>

<!-- Mirrored from themesdesign.in/morvin/layouts/ecommerce-products.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 20 Oct 2024 05:01:59 GMT -->
</html>
