<!doctype html>
<html lang="en">



<!-- Mirrored from themesdesign.in/morvin/layouts/ecommerce-products.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 20 Oct 2024 05:00:53 GMT -->

<head>


    <meta charset="utf-8" />
    <meta>
    <?php $titre = 'Accueil pour le gerant';
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
    <!-- ION Slider -->
    <link href="assets/libs/ion-rangeslider/css/ion.rangeSlider.min.css" rel="stylesheet" type="text/css" />

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
            width: 70px;
            /* Largeur du cadre */
            height: 55px;
            /* Hauteur du cadre */
            overflow: hidden;
            /* Cache les parties de l'image qui dépassent */
        }

        .small-frame img {
            width: 100%;
            /* Adapte la largeur de l'image à celle du cadre */
            height: auto;
            /* Conserve les proportions de l'image */
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
                                        <li class="breadcrumb-item active">Bon De Livraison</li>
                                    </ol>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="float-end d-none d-sm-block">
                                    <a href="panier" class="btn btn-success">Panier <i class="dripicons-basket"> <span id="panier"><?= isset($_SESSION['panier'][$mat_shop]) ? sizeof($_SESSION['panier'][$mat_shop]) : 0 ?></span></i></a>
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
                                                        <th>Statut Payement </th>
                                                        <th>Facture</th>
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
                                                            <div class="badge badge-soft-success font-size-12">Payer</div>
                                                        </td>
                                                        <td>
                                                            <button class="btn btn-light btn-rounded">Télécharcher<i class="mdi mdi-download ms-2"></i></button>
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

            <?php include_once('includes/footer.php'); ?>

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
    <script src="assets/js/pages/ecommerce-datatables.init.js"></script>
    <!-- Datatable init js -->
    <script src="assets/js/pages/datatables.init.js"></script>
    <script src="assets/js/app.js"></script>
    <!-- ligne de gestion de l'ajout au pagnier -->

</body>

<!-- Mirrored from themesdesign.in/morvin/layouts/ecommerce-products.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 20 Oct 2024 05:01:59 GMT -->

</html>