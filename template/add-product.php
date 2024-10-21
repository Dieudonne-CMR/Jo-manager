<!doctype html>
<html lang="en">

    
<!-- Mirrored from themesdesign.in/morvin/layouts/ecommerce-add-product.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 20 Oct 2024 05:02:48 GMT -->
<head>
        
        
        <meta charset="utf-8" />

        <title>Add Product | Morvin - Admin & Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesdesign" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

          <!-- twitter-bootstrap-wizard css -->
          <link rel="stylesheet" href="assets/libs/twitter-bootstrap-wizard/prettify.css">

          <!-- select2 css -->
          <link href="assets/libs/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
  
          <!-- dropzone css -->
          <link href="assets/libs/dropzone/min/dropzone.min.css" rel="stylesheet" type="text/css" />

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
                                     <h4>Add Product</h4>
                                         <ol class="breadcrumb m-0">
                                             <li class="breadcrumb-item"><a href="javascript: void(0);">Morvin</a></li>
                                             <li class="breadcrumb-item"><a href="javascript: void(0);">Ecommerce</a></li>
                                             <li class="breadcrumb-item active">Add Product</li>
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
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-body">
                                            
                                            <div id="addproduct-nav-pills-wizard" class="twitter-bs-wizard">
                                                <ul class="twitter-bs-wizard-nav">
                                                    <li class="nav-item add-product-border">
                                                        <a href="#basic-info" class="nav-link" data-toggle="tab">
                                                            <span class="step-number">01. Basic Info</span>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item add-product-border">
                                                        <a href="#product-img" class="nav-link" data-toggle="tab">
                                                            <span class="step-number">02. Product Img</span>
                                                        </a>
                                                    </li>
                                                    
                                                    <li class="nav-item">
                                                        <a href="#metadata" class="nav-link" data-toggle="tab">
                                                            <span class="step-number">03. Meta Data</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <!-- ebd ul -->
                                                <div class="tab-content twitter-bs-wizard-tab-content">
                                                    <div class="tab-pane" id="basic-info">
                                                        <h4 class="header-title">Informations basiques</h4>
                                                        <p class="card-title-desc">Remplissez toutes les informations ci-dessous</p>
    
                                                        <form>
                                                            <div class="mb-3">
                                                                <label class="form-label" for="productname">Nom du Produit</label>
                                                                <input id="productname" name="productname" type="text" class="form-control" placeholder="Entrez le nom de votre produit">
                                                            </div>
                                                            <div class="row">
                                                            <!-- end col -->
                                                                <div class="col-lg-4">
                                                                    <div class="mb-3">
                                                                        <label class="form-label" for="price">Prix</label>
                                                                        <input id="price" name="price" type="text" class="form-control" placeholder="Entrez le Prix">
                                                                    </div>
                                                                </div>
                                                                <!-- end col -->
                                                                <div class="col-lg-4">
                                                                    <div class="mb-3">
                                                                        <label class="form-label" for="price">Prix Promo</label>
                                                                        <input id="price" name="price" type="text" class="form-control" placeholder="Enter le Prix Promotionnel">
                                                                    </div>
                                                                </div>
                                                                <!-- end col -->
                                                            </div>
                                                            <!-- end row -->
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="mb-3">
                                                                        <label class="control-label">Catégorie</label>
                                                                        <select class="form-control select2">
                                                                            <option>Sélectionner</option>
                                                                            <option value="EL">Habillement</option>
                                                                            <option value="FA">Accessoires</option>
                                                                            <option value="FI">etc...</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <!-- end col -->
                                                                <div class="col-lg-4">
                                                                    <div class="mb-3">
                                                                        <label class="form-label" for="price">Date d'Ajout du Produit</label>
                                                                        <input id="price" name="price" type="date" class="form-control" placeholder="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- end row -->
                                                            <div class="mb-3">
                                                                <label class="form-label" for="productdesc">Description du Produit</label>
                                                                <textarea class="form-control" id="productdesc" rows="5" placeholder="Entrez la description de votre produit"></textarea>
                                                            </div>
                                                        </form>

                                                        <ul class="pager wizard twitter-bs-wizard-pager-link">
                                                            <li class="next"><a href="../#"> Images du Produit <i class="mdi mdi-arrow-right ms-1"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <!-- end tabpane -->
                                                    <div class="tab-pane" id="product-img">
                                                        <h4 class="header-title">Images du Produit</h4>
                                                        <p class="card-title-desc">Télécharger les images de votre Produit</p>
                                                        <form action="https://themesdesign.in/" method="post" class="dropzone">
                                                            <div class="fallback">
                                                                <input name="file" type="file" multiple />
                                                            </div>
                            
                                                            <div class="dz-message needsclick">
                                                                <div class="mb-3">
                                                                    <i class="display-4 text-muted mdi mdi-cloud-download-outline"></i>
                                                                </div>
                                                                
                                                                <h4>Déposez les fichiers ici ou cliquez pour télécharger.</h4>
                                                            </div>
                                                        </form>
                                                        <ul class="pager wizard twitter-bs-wizard-pager-link">
                                                            <li class="previous"><a href="../#"><i class="mdi mdi-arrow-left me-1"></i> Informations basiques</a></li>
                                                            <li class="next"><a href="../#">Meta Data <i class="mdi mdi-arrow-right ms-1"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="tab-pane" id="metadata">
                                                        <h4 class="header-title">Meta Data</h4>
                                                        <p class="card-title-desc">Fill all information below</p>
    
                                                        <form>
                                                            <div class="row">
                                                                <div class="col-sm-6">
                                                                    <div class="mb-3">
                                                                        <label class="form-label" for="metatitle">Meta title</label>
                                                                        <input id="metatitle" name="metatitle" type="text" class="form-control" placeholder="Enter meta title">
                                                                    </div>
                                                                </div><!-- end col -->
                                                                <div class="col-sm-6">
                                                                    <div class="mb-3">
                                                                        <label class="form-label" for="metakeywords">Meta Keywords</label>
                                                                        <input id="metakeywords" name="metakeywords" type="text" class="form-control" placeholder="Enter keywords">
                                                                    </div>
                                                                </div><!-- end col -->
                                                            </div>
                                                            <!-- end row -->
                                                            <div class="mb-3">
                                                                <label class="form-label" for="metadescription">Meta Description</label>
                                                                <textarea class="form-control" id="metadescription" rows="5" placeholder="Enter Description"></textarea>
                                                            </div>
                                                        </form>
                                                        <!-- end form -->
                                                        <ul class="pager wizard twitter-bs-wizard-pager-link">
                                                            <li class="previous"><a href="../#"><i class="mdi mdi-arrow-left me-1"></i> Product Img</a></li>
                                                            <li class="float-end"><a href="../#">Save Changes <i class="mdi mdi-arrow-right ms-1"></i></a></li>
                                                        </ul>
                                                        <!-- end ul -->
                                                    </div>
                                                    <!-- end tabpane -->
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

        <!-- twitter-bootstrap-wizard js -->
        <script src="assets/libs/twitter-bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>

        <script src="assets/libs/twitter-bootstrap-wizard/prettify.js"></script>

        <!-- select 2 plugin -->
        <script src="assets/libs/select2/js/select2.min.js"></script>

        <!-- dropzone plugin -->
        <script src="assets/libs/dropzone/min/dropzone.min.js"></script>

        <!-- init js -->
        <script src="assets/js/pages/ecommerce-add-product.init.js"></script>

        <script src="assets/js/app.js"></script>

    </body>

<!-- Mirrored from themesdesign.in/morvin/layouts/ecommerce-add-product.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 20 Oct 2024 05:02:50 GMT -->
</html>
