
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
                                             <li class="breadcrumb-item"><a href="javascript: void(0);">E-Ccommerce</a></li>
                                             <li class="breadcrumb-item active">Produits</li>
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
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
            
                                            <h4 class=""><?= $titre ?> </h4><br>
            
                                            <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                <thead>
                                                <tr>
                                                    <th>Image</th>
                                                    <th>Type_Produit</th>
                                                    <th>Gamme</th>
                                                    <th>Dimension</th>
                                                    <th>Prix_Produit</th>                                            
                                                    <th>Date d'Ajout</th>
                                                    <th>Ajouter au panier </th>
                                                    
                                                </tr>
                                                </thead>

                                                <tbody>
                                                <?php
                                                 foreach(select_table_where('produits_boutik', 'mat_shop', $mat_shop) as $value):
                                                 $mat_produit = $value->mat_produit; // recuperation des matricules des produits qui sont lies a la boutiques dans laquelle on est
                                                  //var_dump($mat_produit);       
                                                 ?>

                                                <?php foreach(select_table_where("produicts_all","mat_produit", $mat_produit) as $produit): 
                                                //$mat_type=$value->nom_type  //-- du produits
                                                 ?>  
                                                                                              
                                                <tr>
                                                   <td ><button type="button" class="btn small-frame btn-sm waves-effect waves-light" data-bs-toggle="modal" data-bs-target=".exampleModalFullscreen">
                                                    <img class="img-fluid" src="<?php echo $image_produit.$produit -> Img1; ?>" alt=""></button>
                                                    <div class="modal fade exampleModalFullscreen" tabindex="-1" aria-labelledby="#exampleModalFullscreenLabel" style="display: none;" aria-hidden="true">
                                                    <div class="modal-dialog modal-fullscreen">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title mt-0" id="exampleModalFullscreenLabel">produit</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                <div class="modal-body">
                                                  <div class="row">
                                                          <div class="col-lg-12">
                                                            <div class="card">
                                                              <div class="card-body">
                                                                 <div class="row">
                                                                    <div class="col-xl-5">
                                                                      <div class="product-detail">
                                                                        <div class="row">
                                                                          <div class="col-3">
                                                                             <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                                                              <a class="nav-link active" id="product-1-tab" data-bs-toggle="pill" href="#product-1" role="tab">
                                                                              <img src="<?php echo $image_produit.$produit ->Img1; ?>" alt="" class="img-fluid mx-auto d-block tab-img rounded">
                                                                               </a>
                                                                               <a class="nav-link" id="product-2-tab" data-bs-toggle="pill" href="#product-2" role="tab">
                                                                               <img src="<?php echo $image_produit.$produit ->Img2; ?>" alt="" class="img-fluid mx-auto d-block tab-img rounded">
                                                                                </a>
                                                                                <a class="nav-link" id="product-3-tab" data-bs-toggle="pill" href="#product-3" role="tab">
                                                                                <img src="<?php echo $image_produit.$produit ->Img3; ?>" alt="" class="img-fluid mx-auto d-block tab-img rounded">
                                                                                </a>
                                                                                <a class="nav-link" id="product-4-tab" data-bs-toggle="pill" href="#product-4" role="tab">
                                                                                <img src="<?php echo $image_produit.$produit ->Img2; ?>" alt="" class="img-fluid mx-auto d-block tab-img rounded">
                                                                               </a>
                                                                              </div>
                                                                          </div>
                                                                     <div class="col-md-8 col-9">
                                                                      <div class="tab-content" id="v-pills-tabContent">
                                                                        <div class="tab-pane fade show active" id="product-1" role="tabpanel">
                                                                          <div class="product-img">
                                                                            <img src="<?php echo $image_produit.$produit ->Img1; ?>" alt="" class="img-fluid mx-auto d-block" data-zoom="assets/images/product/img-1.png">
                                                                          </div>
                                                                         </div>
                                                                       <div class="tab-pane fade" id="product-2" role="tabpanel">
                                                                       <div class="product-img">
                                                                            <img src="<?php echo $image_produit.$produit ->Img2; ?>" alt="" class="img-fluid mx-auto d-block">
                                                                       </div>
                                                                    </div>
                                                                    <div class="tab-pane fade" id="product-3" role="tabpanel">
                                                                        <div class="product-img">
                                                                            <img src="<?php echo $image_produit.$produit ->Img3; ?>" alt="" class="img-fluid mx-auto d-block">
                                                                        </div>
                                                                    </div>
                                                                    <div class="tab-pane fade" id="product-4" role="tabpanel">
                                                                        <div class="product-img">
                                                                            <img src="<?php echo $image_produit.$produit ->Img1; ?>" alt="" class="img-fluid mx-auto d-block">
                                                                        </div>
                                                                    </div>
                                                                 </div>                                                                                   
                                                              </div>
                                                           </div>
                                                        </div>
                                                          <!-- end product img -->
                                                     </div>
                                                      <div class="col-xl-7">
                                                        <div class="mt-4 mt-xl-3">
                                                        <a href="#" class="text-primary">Chair</a>
                                                        <h5 class="mt-1 mb-3">Home & Office Chair Green</h5>
    
                                                        <div class="d-inline-flex">
                                                            <div class="text-muted me-3">
                                                                <span class="mdi mdi-star text-warning"></span>
                                                                <span class="mdi mdi-star text-warning"></span>
                                                                <span class="mdi mdi-star text-warning"></span>
                                                                <span class="mdi mdi-star text-warning"></span>
                                                                <span class="mdi mdi-star-half text-warning"></span>
                                                            </div>
                                                        </div>
                                                        
                                                        <h5 class="mt-2"><del class="text-muted me-2">$200</del>$240 <span class="text-danger font-size-12 ms-2">25 % Off</span></h5>
                                              
                                                        <hr class="my-4">

                                                        <div class="mt-4">
                                                            <h6>Features :</h6>

                                                          <div class="mt-4">
                                                            <p class="text-muted mb-2"><i class="mdi mdi-check-bold text-success me-2"></i>Various have evolved over years sometimes on purpose.</p>
                                                            <p class="text-muted mb-2"><i class="mdi mdi-check-bold text-success me-2"></i>Always free from repetition injected humour or words etc.</p>
                                                            <p class="text-muted mb-2"><i class="mdi mdi-check-bold text-success me-2"></i>Excepteur cupidatat mollit anim id est laborum.</p>
                                                          </div>
                                                        </div>

                                                        <div class="mt-4">
                                                            <button type="button" class="btn btn-primary waves-effect waves-light mt-2">
                                                                <i class="mdi mdi-cart me-2"></i> Ajouter au panier 
                                                            </button>                                                           
                                                        </div>
                                                        
                                                      </div>
                                                    </div>
                                                 </div>
                                                   <!-- end row -->
                                                </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">Close</button>
                                                            <!-- <button type="button" class="btn btn-primary waves-effect waves-light">Save changes</button> -->
                                                            </div>
                                                         </div><!-- /.modal-content -->
                                                       </div><!-- /.modal-dialog -->
                                                     </div>
                                                    </td>                   
                                                    <td><?php echo select_table_where('type_produit', 'mat_type', $produit -> mat_type)[0]->nom_type; ?></td>
                                                    <td><?php echo $produit -> nom_gamme ; ?></td>
                                                    <td><?php echo $produit -> dimensions; ?></td>
                                                    <td><?php echo $produit -> prix_de_vente; ?></td>                                         
                                                    <td><?php echo $produit -> date_aj; ?></td>
                                                      
                                                    <td style="text-align: center; vertical-align: middle;">
                                                    <form class='ajpanier' action="aj_panier" method="POST">
                                                        <input type="hidden" name="mat_product" value="<?php echo $mat_produit; ?>">
                                                        <input type="hidden" name="nom" value="<?php echo $produit -> nom_gamme; ?>">
                                                        <input type="hidden" name="prix" value="<?php echo $produit -> prix_de_vente; ?>">
                                                        <input type="hidden" name="image" value="<?php echo $produit -> Img1; ?>">
                                                        <div class="d-grid">
                                                            <button type="submit" class="btn btn-primary"> Ajouter au devis</button>
                                                        </div>
                                                    </form>
                                                    </td>
                                                       
                                                </tr>
                                                <?php endforeach; ?>
                                                <?php endforeach; ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row -->
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
       
    </body>

<!-- Mirrored from themesdesign.in/morvin/layouts/ecommerce-products.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 20 Oct 2024 05:01:59 GMT -->
</html>
