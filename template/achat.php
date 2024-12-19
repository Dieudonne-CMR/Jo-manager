<!doctype html>
<html lang="en">

    
<!-- Mirrored from themesdesign.in/morvin/layouts/ecommerce-orders.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 20 Oct 2024 05:02:38 GMT -->
<head>
        
        
        <meta charset="utf-8" />


        <?php $titre='Achat de produits'; include_once('includes/meta.php') ?>

        <!-- DataTables -->
        <link href="assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />

        <!-- Responsive datatable examples -->
        <link href="assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />  

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
                                     <h4>Commandes</h4>
                                         <ol class="breadcrumb m-0">
                                             <li class="breadcrumb-item"><a href="javascript: void(0);">Ecommerce</a></li>
                                             <li class="breadcrumb-item active">Commandes</li>
                                         </ol>
                                 </div>
                             </div>
                         </div>
                        </div>
                     </div>
                     <!-- end page title -->    


                    <div class="container-fluid">

                        <div class="page-content-wrapper">

                        


                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-body  pt-0">
                                            <ul class="nav nav-tabs nav-tabs-custom mb-4">
                                                <li class="nav-item">
                                                    <a class="nav-link fw-bold p-3 active" href="#">Toutes les commandes</a>
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
                                                            <th>Matricule</th>
                                                            <th>Date</th>
                                                            <th>Nom du client</th>
                                                            <th>Nom de la boutique</th>
                                                            <th>Produits commandes</th>
                                                            <th>Prix total</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php foreach (select_table('commande') as  $value) : ?>
                                                        <tr>
                                                            <td>
                                                                <div class="form-check">
                                                                    <input type="checkbox" class="form-check-input" id="ordercheck1">
                                                                    <label class="form-check-label" for="ordercheck1">&nbsp;</label>
                                                                </div>
                                                            </td>
                                                            
                                                            <td><?php echo $value -> Mat_Com ; ?> </td>

                                                            <td>
                                                            <?php echo $value -> Date_Achat ; ?>
                                                            </td>

                                                            <td><?php echo $value -> nom_client ; ?></td>

                                                            <td>
                                                                <?php echo select_table_where('shop', 'Mat_Shop', $value-> Mat_Shop)[0] -> Nom_Shop; ?>
                                                                          
                                                            </td>

                                                            <td>
                                                                <?php echo $value -> Produit_acheter ; ?>
                                                            </td>
                                                            
                                                            <td>
                                                                 <?php echo $value -> Prix ; ?> Fcfa
                                                            </td>
                                                            <td>
                                                                <button class="btn btn-light btn-rounded">Facture <i class="mdi mdi-download ms-2"></i></button>
                                                            
                                                        </tr>
                                                        <?php endforeach; ?>
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
        <script src="assets/libs/jquery/jquery.min.js"></script>
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/node-waves/waves.min.js"></script>

        <!-- Required datatable js -->
        <script src="assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
        
        <!-- Responsive examples -->
        <script src="assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
        <script src="assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

        <script src="assets/js/pages/ecommerce-datatables.init.js"></script>

        <script src="assets/js/app.js"></script>

    </body>

<!-- Mirrored from themesdesign.in/morvin/layouts/ecommerce-orders.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 20 Oct 2024 05:02:42 GMT -->
</html>
