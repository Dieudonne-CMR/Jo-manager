<!doctype html>
<html lang="en">

    
<!-- Mirrored from themesdesign.in/morvin/layouts/tables-responsive.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 20 Oct 2024 05:03:51 GMT -->
<head>
        
        
        <meta charset="utf-8" />
        <title>liste prospects</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesdesign" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- Bootstrap Css -->
        <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />


         <!-- Responsive Table css -->
         <link href="assets/libs/admin-resources/rwd-table/rwd-table.min.css" rel="stylesheet" type="text/css" />

    </head>

    
    <body>

        <!-- Begin page -->
        <div id="layout-wrapper">


                <?php include_once "includes/header.php" ?>

            
            <!-- ========== Left Sidebar Start ========== -->
            
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
                                     <h4>Liste des Prospects</h4>
                                         <ol class="breadcrumb m-0">
                                             <li class="breadcrumb-item"><a href="javascript: void(0);">Jo-Retail</a></li>
                                             <li class="breadcrumb-item"><a href="javascript: void(0);">Prospects</a></li>
                                             <li class="breadcrumb-item active">Voir Prospects</li>
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
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            
                                            <h4 class="header-title">Liste des Prospects</h4><br>
                                            
                                            <button class="btn btn-secondary">Campagnes</button>
                                            
                                            <div class="table-rep-plugin">
                                                 <div class="table-responsive mb-0" data-pattern="">    
                                                    <table id="tech-companies-1" class="table table-striped">
                                                        <thead>
                                                        <tr>
                                                            <th>Nom</th>
                                                            <th data-priority="1"> Telephone</th>
                                                            <th data-priority="3">Type de rencontre</th>
                                                            <th data-priority="1">Besoin</th>
                                                            <th data-priority="3">Statut</th>
                                                            <th data-priority="3">Date de rencontre</th>
                                                            <th data-priority="6">Bid</th>
                                                            
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php foreach(select_table('prospect') as $value):?>
                                                        <tr>
                                                            <th><?php echo $value -> nom;  ?></th>
                                                            <td> <?php echo $value -> telephone;  ?>   </td>
                                                            <td>    </td>
                                                            <td>   <?php echo $value -> besoin;  ?> </td>

                                                            <td> <?php if (($value->is_client) == 0):
                                                                            echo 'prospect en cours';
                                                                        endif;     
                                                                 ?>   
                                                            </td>

                                                            <td>  <?php echo $value -> date_rencontre;  ?> </td>
                                                            <td><button class='btn btn-primary'>Ajouter</button></td>
                                                        </tr>
                                                        <?php endforeach; ?>
                                                        </tbody>
                                                    </table>
                                                </div>
            
                                            </div>
            
                                        </div>
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row -->

                        </div>
        
                        
                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                
                
                
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        <!-- Right Sidebar -->
       
        <!-- /Right-bar -->

        <?php include_once('includes/footer.php') ?>

        <!-- JAVASCRIPT -->
        <script src="assets/libs/jquery/jquery.min.js"></script>
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/node-waves/waves.min.js"></script>

        <!-- Responsive Table js -->
        <script src="assets/libs/admin-resources/rwd-table/rwd-table.min.js"></script>

        <!-- Init js -->
        <script src="assets/js/pages/table-responsive.init.js"></script>

        <script src="assets/js/app.js"></script>

    </body>

<!-- Mirrored from themesdesign.in/morvin/layouts/tables-responsive.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 20 Oct 2024 05:03:52 GMT -->
</html>
