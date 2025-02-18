
<!doctype html>
<html lang="en">


    
<!-- Mirrored from themesdesign.in/morvin/layouts/ecommerce-products.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 20 Oct 2024 05:00:53 GMT -->
<head>
        
        
        <meta charset="utf-8" />
       <meta>
       <?php $titre='Accueil pour le gerant'; include_once('includes/meta.php') ?>

    <!-- Bootstrap Css -->
    <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

    <!-- DataTables -->
    <link href="assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />

    <!-- Responsive datatable examples -->
    <link href="assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />  
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
    <style>
        .small-frame {
            width: 70px; /* Largeur du cadre */
            height: 55px; /* Hauteur du cadre */
            overflow: hidden; /* Cache les parties de l'image qui dépassent */
        }
        .small-frame img {
            width:100%; /* Adapte la largeur de l'image à celle du cadre */
            height: auto; /* Conserve les proportions de l'image */
        }
    </style>

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
                                     <h4><?php echo $titre; ?></h4>
                                         <ol class="breadcrumb m-0">
                                             <li class="breadcrumb-item"><a href="javascript: void(0);">Jo-Retail</a></li>
                                             
                                             <li class="breadcrumb-item active">Nos Devis</li>
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

                     <div class="search-wrap" id="search-wrap">
                        <div class="search-bar">
                            <input class="search-input form-control" placeholder="Search" />
                            <a href="#" class="close-search toggle-search" data-target="#search-wrap">
                                <i class="mdi mdi-close-circle"></i>
                            </a>
                        </div>
                    </div>
                    <div class="container-fluid">

                        <div class="page-content-wrapper">                     

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-body  pt-0">
                                            <ul class="nav nav-tabs nav-tabs-custom mb-4">
                                                <li class="nav-item">
                                                    <a class="nav-link fw-bold p-3 active" href="#">Devis du jour</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link p-3 fw-bold" href="#">Tous les devis</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link p-3 fw-bold" href="#">Factures</a>
                                                </li>
                                            </ul>
                                            <div class="table-responsive">
                                                <table class="table table-centered datatable dt-responsive nowrap " style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                    <thead class="thead-light">
                                                        <tr>
                                                            <th style="width: 20px;">
                                                                <div class="form-check">
                                                                    <input type="checkbox" class="form-check-input" id="ordercheck">
                                                                    <label class="form-check-label" for="ordercheck">&nbsp;</label>
                                                                </div>
                                                            </th>
                                                            <th>ID Devis</th>
                                                            <th>Date</th>
                                                            <th>Nom Client</th>
                                                            <th>Total</th>                                                           
                                                            <th>Payer</th>
                                                            <th style="width: 120px;">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <div class="form-check">
                                                                    <input type="checkbox" class="form-check-input" id="ordercheck1">
                                                                    <label class="form-check-label" for="ordercheck1">&nbsp;</label>
                                                                </div>
                                                            </td>
                                                            
                                                            <td><a href="javascript: void(0);" class="text-dark fw-bold">#NZ1572</a> </td>
                                                            <td>
                                                                04 Apr, 2020
                                                            </td>
                                                            <td>Walter Brown</td>
                                                            
                                                            <td>
                                                                $172
                                                            </td>
                                                           
                                                            <td>
                                                            <div class="d-grid">
                                                            <button type="button" class="btn btn-primary btn-sm waves-effect waves-light" data-bs-toggle="modal" data-bs-target=".bs-example-modal-lg">Payer</button>
                                                           </div>
                                                           <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog modal-lg">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title mt-0" id="myLargeModalLabel">Large modal</h5>
                                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                                                                
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                        
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="table-responsive">
                                            
                                                <table class="table table-centered mb-0 table-nowrap">
                                                    <thead class="bg-light">
                                                        <tr>
                                                            <th style="width: 120px">Image</th>
                                                            <th>Nom_ du Produit</th>  
                                                            <th>Prix de Vente</th>
                                                            <th>Quantité</th>
                                                            <th>Total</th>
                                                            <th class="text-center">Action</th>
                                                        </tr>
                                                    </thead><!-- end thead -->
                                                    <tbody>
                                                    <?php if (!empty($panier)): ?>
                                                    <?php
                                                    
                                                    // var_dump($panier);
                                                        $totalPanier = 0;
                                                        foreach ($panier as $produit):
                                                            $mat_produit= $produit['mat_product']; //--- matricule de produits
                                                            $totalProduit = $produit['prix'] * $produit['quantite']; //---- prix total de produits
                                                            $totalPanier += $totalProduit; //---- Prix total du panier
                                                            // var_dump($totalPanier);
                                                            $nom_type = select_table_where('produicts_all', 'mat_produit', $mat_produit)[0] -> nom_produit; //--- on recupere le nom de chaque type de produit pour l'afficher ensuite 
                                                        //var_dump($nom_type);
                                                        ?>
                                                        <tr id="produit-<?= $mat_produit; ?>">
                                                            <td>
                                                                <img src="<?= $image_produit . $produit['image'] ?>" alt="product-img"
                                                                    title="product-img" class="avatar-md" />
                                                            </td>
                                                            <td>
                                                                <h5 class="font-size-14 text-truncate"><a href="ecommerce-product-detail.html" class="text-reset"><?php echo $nom_type.' - '. $produit['nom'];  ?></a></h5>
                                                            </td>
                                                            
                                                            <!-- Prix de unitaire d'un produits -->
                                                            <td>
                                                                <?php echo $produit['prix']; ?> Fcfa
                                                            </td>
                                                            
                                                            <!-- les bouton plus (+) et moin (-) -->
                                                            <td>
                                                                <button class="modifier-quantite" data-id="<?php echo $mat_produit; ?>" data-action="decrement">-</button>
                                                                <span id="quantite-<?php echo $mat_produit; ?>"><?php echo $produit['quantite']; ?></span>
                                                                <button class="modifier-quantite" data-id="<?php echo $mat_produit; ?>" data-action="increment">+</button>
                                                            </td>
                                                            
                                                            <!-- Affiche le totale de produit -->
                                                            <td id='total-<?php echo $mat_produit; ?>'>
                                                                <?php  echo $totalProduit; ?> Fcfa
                                                            </td>

                                                            <td style="width: 90px;" class="text-center">
                                                                <button class="supprimer" data-id="<?= $produit['mat_product'] ?>" class="action-icon text-danger" title="Supprimer"> 
                                                                    <i class="mdi mdi-trash-can font-size-18"></i>
                                                                </button>
                                                            </td>
                                                    
                                                        </tr><!-- end tr -->
                                                        <?php endforeach; ?>
                                                        <?php else: ?>
                                                            <p>Votre panier est vide.</p>
                                                            <?php $totalPanier = 0; ?>
                                                        <?php endif; ?>
                                                        <tr class="bg-light text-end">
                                                        
                                                            <th scope="row" colspan="5">
                                                                Total :
                                                            </th>
                                                            <!-- affiche la sommes la somme total du panier  -->
                                                            <td id="total-panier">
                                                                 <?= $totalPanier ?> Fcfa
                                                            </td>
                                                        </tr><!-- end tr -->                                                      
                                                    </tbody><!-- end tbody -->
                                                </table><!-- end table -->
                                                <div class="col-sm-12 pt-3">
                                                    <div class="float-end d-none d-sm-block">
                                                        <a href="checkout" class="btn btn-success">Valider la commande</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- end cardbody -->
                                    </div><!-- end card -->
                                 
                                                                        </div>
                                                                    </div><!-- /.modal-content -->
                                                                </div><!-- /.modal-dialog -->
                                                            </div>
                                                            </td>
                                                            <td id="tooltip-container1">
                                                                <a href="javascript:void(0);" class="me-3 text-primary" data-bs-container="#tooltip-container1" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="mdi mdi-pencil font-size-18"></i></a>
                                                                <a href="javascript:void(0);" class="text-danger" data-bs-container="#tooltip-container1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="mdi mdi-trash-can font-size-18"></i></a>
                                                            </td>
                                                        </tr>                                                   
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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

         <!-- Required datatable js -->
         <script src="assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
         <script src="assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
         <!-- Buttons examples -->
         <script src="assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
         <script src="assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
         <script src="assets/libs/jszip/jszip.min.js"></script>
         <script src="assets/libs/pdfmake/build/pdfmake.min.js"></script>
         <script src="assets/libs/pdfmake/build/vfs_fonts.js"></script>
         <script src="assets/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
         <script src="assets/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
         <script src="assets/libs/datatables.net-buttons/js/buttons.colVis.min.js"></script>
         <!-- Responsive examples -->
         <script src="assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
         <script src="assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>
   
          <!-- Datatable init js -->
        <script src="assets/js/pages/datatables.init.js"></script>   
        <script src="assets/js/app.js"></script>
    <!-- ligne de gestion de l'ajout au pagnier -->
          <!-- Required datatable js -->
        <script src="assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
        
        <!-- Responsive examples -->
        <script src="assets/js/pages/ecommerce-datatables.init.js"></script>

    </body>

<!-- Mirrored from themesdesign.in/morvin/layouts/ecommerce-products.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 20 Oct 2024 05:01:59 GMT -->
</html>
