<!doctype html>
<html lang="en">
   
<!-- Mirrored from themesdesign.in/morvin/layouts/tables-datatable.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 20 Oct 2024 05:03:44 GMT -->
<head>
    <?php $titre='Voir les produits';
     include_once('includes/meta.php') ?>

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
    </head>

    
    <body>

    <style>
        .small-frame {
            width: 50px; /* Largeur du cadre */
            height: 50px; /* Hauteur du cadre */
            overflow: hidden; /* Cache les parties de l'image qui dépassent */
        }
        .small-frame img {
            width: 100%; /* Adapte la largeur de l'image à celle du cadre */
            height: auto; /* Conserve les proportions de l'image */
        }
    </style>

        <!-- Begin page -->
        <div id="layout-wrapper">

        <?php include_once "includes/header.php" ?>
            <!-- Left Sidebar End -->

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
                                    <a href="#" class="btn btn-success">Add Widget</a>
                                </div>
                             </div>
                         </div>
                        </div>
                     </div>
                     <!-- end page title -->    


                    <div class="container-fluid">

                        <div class="page-content-wrapper">
            
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
            
                                            <h4 class=""><?=  $titre ?></h4><br>
            
                                            <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                <thead>
                                                <tr>
                                                    <th>Image</th>
                                                    <th>Type_Produit</th>
                                                    <th>Gamme</th>
                                                    <th>Prix_Achat</th>
                                                    <th>Prix_Vente</th>
                                                    <th>Quantite</th>
                                                    <th>Date d'Ajout</th>
                                                    
                                                </tr>
                                                </thead>

                                                <tbody>
                                                <?php foreach ($produits as $value): 
                                                    $produit = $value -> mat_produit; //on recupere et stocke les matricules des produits lies a chaque boutique ?>
                                                <?php  ?>
                                                    <?php foreach(select_table_where('produicts_all', 'mat_produit', $produit) as $produit): //on accede enfin a toutes leurs informations pour les aficher grace a $mat_produit ?>
                                                <tr>
                                                    <td class="small-frame"><img class="img-fluid" src="<?php echo $image_produit.$produit -> Img1; ?>" alt=""></td>
                                                    <td><?php echo select_table_where('type_produit', 'mat_type', $produit -> mat_type)[0]->nom_type; ?></td>
                                                    <td><?php echo $produit -> nom_gamme ; ?></td>
                                                    <td><?php echo $produit -> prix_achat; ?></td>
                                                    <td><?php echo $produit -> prix_de_vente; ?></td>
                                                    <td>
                                                        <?php   if($gest_boutik==0): //ne pas aficher la quantite de produits lorsqu'il sagit d'un admin
                                                                    echo '-'; 
                                                                else:
                                                                    echo $value -> quantite;
                                                                endif; ?>
                                                    </td>
                                                    <td><?php echo $produit -> date_aj; ?></td>
                                                        <?php   if($gest_boutik==0):  //---afficher le bouton 'Modifier' uniquement s'il s'agit d'un admin ?>
                                                    <td style="text-align: center; vertical-align: middle;">
                                                        <a href="modifi-product/<?php echo $value->mat_produit; ?>" name="envoyer" class="btn btn-primary">Modifier</a>
                                                    </td>
                                                        <?php endif; ?>
                                                </tr>
                                                <?php endforeach; ?>
                                                <?php endforeach; ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row -->

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
        <script src="assets/libs/jquery/jquery.min.js"></script>
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/node-waves/waves.min.js"></script>

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

    </body>

<!-- Mirrored from themesdesign.in/morvin/layouts/tables-datatable.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 20 Oct 2024 05:03:51 GMT -->
</html>
