<!doctype html>
<html lang="en">

    
<!-- Mirrored from themesdesign.in/morvin/layouts/ecommerce-shops.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 20 Oct 2024 05:02:45 GMT -->
<head>
        
        
        <?php $titre = 'Liste des boutiques';
        include_once('includes/meta.php') ?>
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- Bootstrap Css -->
        <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />


          <!-- DataTables -->
          <link href="assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
          <link href="assets/libs/datatables.net-autoFill-bs4/css/autoFill.bootstrap4.min.html" rel="stylesheet" type="text/css" />
          <link href="assets/libs/datatables.net-keytable-bs4/css/keyTable.bootstrap4.min.css" rel="stylesheet" type="text/css" />
  
          <!-- Responsive datatable examples -->
          <link href="assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />   

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
                                     <h4>Boutiques</h4>
                                         <ol class="breadcrumb m-0">
                                             <li class="breadcrumb-item"><a href="javascript: void(0);">Ecommerce</a></li>
                                             <li class="breadcrumb-item active">Boutiques</li>
                                         </ol>
                                 </div>
                             </div>
                             <div class="col-sm-6">
                                <div class="float-end d-none d-sm-block">
                                    <a href="#" class="btn btn-success">Ajouter une boutique</a>
                                </div>
                             </div>
                         </div>
                        </div>
                     </div>
                     <!-- end page title -->    


                    <div class="container-fluid">

                        <div class="page-content-wrapper">
                         



                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="card m-b-30">
                                        <div class="card-body">
                                            <h4 class="mt-0 header-title mb-4">Boutiques</h4>
                                            <div class="table-responsive">
                                                <table class="table table-centered table-nowrap table-hover mb-0">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">Logo</th>
                                                            <th scope="col">Nom de la boutique</th>
                                                            <th scope="col">Localisation</th>
                                                            <th scope="col">Email</th>
                                                            <th scope="col">Telephone</th>
                                                            <th scope="col" style="text-align: center">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php foreach(select_table('shop') as $value):?>
                                                            <tr>
                                                                <td>
                                                                    <img src="<?php echo $dossier_logo.$value -> logo ; ?>" alt="" class="avatar-sm">
                                                                </td>
                                                                <td>
                                                                <h5 class="font-size-16"> <?php echo $value -> Nom_Shop ; ?> </h5>
                                                                <p class="text-muted mb-0">
                                                                    <i class="mdi mdi-account me-1"></i> <?php echo select_table_where('membre','Mat_Shop', $value -> Mat_Shop)[0]->Nom; ?>
                                                                </p>
                                                                </td>
                                                                <td><?php echo $value -> Localisation ; ?></td>
                                                                <td><?php echo $value -> Email ; ?></td>
                                                                <td><?php echo $value -> Telephone ; ?></td>
                                                                <td style="text-align: center; vertical-align: middle;">
                                                                    <button class="btn btn-primary">Voir</button>
                                                                </td>
                                                            </tr>
                                                        <?php endforeach; ?>
                                                    </tbody>
                                                </table>
                                            </div>
        
                                        </div>
                                    </div>
                                </div>
        
                            </div>
                            <!-- END ROW -->
        
                                
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="text-center my-3">
                                        <a href="javascript:void(0);" class="text-primary"><i class="mdi mdi-loading mdi-spin font-size-20 align-middle me-2"></i> Load more </a>
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

        <!-- Plugins js-->
        <script src="assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js"></script>
        <script src="assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-world-mill-en.js"></script>

        <script src="assets/js/pages/ecommerce-shop.init.js"></script>


        <script src="assets/js/app.js"></script>

    </body>

<!-- Mirrored from themesdesign.in/morvin/layouts/ecommerce-shops.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 20 Oct 2024 05:02:48 GMT -->
</html>
