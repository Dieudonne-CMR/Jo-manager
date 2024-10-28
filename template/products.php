<!doctype html>
<html lang="en">


<!-- Mirrored from themesdesign.in/morvin/layouts/ecommerce-products.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 20 Oct 2024 05:00:53 GMT -->

<head>


    <meta charset="utf-8" />


    <title>Products | Morvin - Admin & Dashboard Template</title>

    <meta>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesdesign" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

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
                                    <h4>Produits</h4>
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Ecommerce</a></li>
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
                            <div class="col-xl-3 col-lg-4">



                                <div class="card">

                                    <div class="card-body">

                                        <div class="border p-3 rounded mt-4">

                                            <h5 class="font-size-16">Recherche</h5>

                                            <div class="search-box me-2 mt-3">
                                                <div class="position-relative">
                                                    <input type="text" class="form-control" placeholder="Recherche...">
                                                    <i class="ti-search search-icon"></i>
                                                </div>
                                            </div>

                                        </div>


                                        <div class="border p-3 rounded mt-4">


                                            <div class="collapse show" id="collapseExample3">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-9">
                                <div class="row" >
                                    <?php foreach(select_table_where("Produits","Mat_Shop",$mat_shop) as $value):    ?>
                                        <div class="col-xl-4 col-sm-6">
                                          <div class="card">
                                            <div class="card-body">
                                                <div class="product-img">
                                                    <div class="product-ribbon  bg-primary">
                                                        25% Off
                                                    </div>
                                                    <img src="<?php //je n'ai pas reussi à implementer en utilisant le chemin d'accès ?>" alt="" class="img-fluid mx-auto d-block">
                                                </div>

                                                <div class="text-center">

                                                    <a href="#" class="text-dark">
                                                        <h5 class="font-size-18"><?php echo $value -> nom_produit; ?></h5>
                                                    </a>

                                                    <h4 class="mt-3 mb-0"><?php echo $value -> prix_promo;   ?><span class="font-size-14 text-muted me-2"><del><?php echo $value -> prix;   ?></del></span></h4>

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
                                                        <div class="d-grid">
                                                            <a href="javascript:;" class="btn btn-primary"><i class="bx bxs-cart-add"></i>Add to Cart</a>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                    <?php endforeach;    ?>
                                    <?php /* <div class="col-xl-4 col-sm-6">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="product-img">
                                                    <div class="product-ribbon  bg-primary">
                                                        25% Off
                                                    </div>

                                                    <img src="assets/images/product/img-7.png" alt="" class="img-fluid mx-auto d-block">
                                                </div>

                                                <div class="text-center">

                                                    <a href="#" class="text-dark">
                                                        <h5 class="font-size-18">Home & Office Chair Green</h5>
                                                    </a>

                                                    <h4 class="mt-3 mb-0">$200 <span class="font-size-14 text-muted me-2"><del>$240</del></span></h4>

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
                                                        <div class="d-grid">
                                                            <a href="javascript:;" class="btn btn-primary"><i class="bx bxs-cart-add"></i>Add to Cart</a>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>*/?> 
                                </div>

                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div>
                                                            <p class="mb-sm-0 mt-2">Page <span class="font-weight-bold">2</span> sur <span class="font-weight-bold">113</span></p>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="float-sm-end">
                                                            <ul class="pagination pagination-rounded mb-sm-0">
                                                                <li class="page-item disabled">
                                                                    <a href="#" class="page-link"><i class="mdi mdi-chevron-left"></i></a>
                                                                </li>
                                                                <li class="page-item">
                                                                    <a href="#" class="page-link">1</a>
                                                                </li>
                                                                <li class="page-item active">
                                                                    <a href="#" class="page-link">2</a>
                                                                </li>
                                                                <li class="page-item">
                                                                    <a href="#" class="page-link">3</a>
                                                                </li>
                                                                <li class="page-item">
                                                                    <a href="#" class="page-link">4</a>
                                                                </li>
                                                                <li class="page-item">
                                                                    <a href="#" class="page-link">5</a>
                                                                </li>
                                                                <li class="page-item">
                                                                    <a href="#" class="page-link"><i class="mdi mdi-chevron-right"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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



            <?php include_once('includes/footer.php') ?>

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

    <!-- Ion Range Slider-->
    <script src="assets/libs/ion-rangeslider/js/ion.rangeSlider.min.js"></script>

    <!-- init js -->
    <script src="assets/js/pages/product-filter-range.init.js"></script>

    <script src="assets/js/app.js"></script>

</body>

<!-- Mirrored from themesdesign.in/morvin/layouts/ecommerce-products.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 20 Oct 2024 05:01:59 GMT -->

</html>