<!doctype html>
<html lang="en">


<!-- Mirrored from themesdesign.in/morvin/layouts/ecommerce-add-product.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 20 Oct 2024 05:02:48 GMT -->

<head>


    <meta charset="utf-8" />

    <?php $titre = 'ajouter un produit';
    include_once('includes/meta.php') ?>
    <!-- <base href="../"> -->

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
                                    <h4>Ajout de Produits</h4>
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Ecommerce</a></li>
                                        <!-- <li class="breadcrumb-item"><a href="javascript: void(0);">Ecommerce</a></li> -->
                                        <li class="breadcrumb-item active">Ajout Produits</li>
                                    </ol>
                                </div>
                            </div>
                            <?php /*<div class="col-sm-6">
                                <div class="float-end d-none d-sm-block">
                                    <a href="#" class="btn btn-success">Add Widget</a>
                                </div>
                             </div> */ ?>
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
                                            
                                            <!-- ebd ul -->
                                            <div class="tab-content twitter-bs-wizard-tab-content">
                                                <div class="tab-pane" style="display: block;" >
                                                    <h4 class="header-title">Informations basiques</h4>
                                                    <p class="card-title-desc">Remplissez toutes les informations ci-dessous</p>

                                                    <form action="aj-product" id="aj-produit" method="post" enctype="multipart/form-data">
                                                    <?php
                                                        
                                                        if (isset($_GET['Mat_Produit'])) {
                                                            $mat_produit = $_GET['Mat_Produit'];

                                                            // $produit = $DB->query("SELECT * FROM produits WHERE Mat_Produit = ?", [$mat_produit]);
                                                            $produit = select_table_where('produits','Mat_Produit',$Mat_Produit);
                                                            // var_dump($produit);
                                                            
                                                        }
                                                    ?>
                                                        <div class="mb-3">
                                                            <label class="form-label" for="productname">Nom du Produit</label>
                                                            <input id="productname" name="nom_produit" type="text" class="form-control" placeholder="Entrez le nom de votre produit" required>
                                                        </div>
                                                        <div class="row">
                                                            <!-- end col -->
                                                            <div class="col-lg-4">
                                                                <div class="mb-3">
                                                                    <label class="form-label" for="price">Prix</label>
                                                                    <input id="price" name="prix" type="text" class="form-control" placeholder="Entrez le Prix" required>
                                                                </div>
                                                            </div>
                                                            <!-- end col -->
                                                            <div class="col-lg-3">
                                                                <div class="mb-3">
                                                                    <label class="form-label" for="price">Prix Promo</label>
                                                                    <input id="price" name="prix_promo" type="text" class="form-control" placeholder="Enter le Prix Promotionnel">
                                                                </div>
                                                            </div>
                                                            <!-- end col -->
                                                            <div class="col-md-3">
                                                                <div class="mb-3">
                                                                    <label class="control-label">Catégorie</label>
                                                                    <select class="form-control select2" name="mat_Cat" required>
                                                                        <option selected="" disabled="" value="" >--Sélectionner--</option>

                                                                        <?php foreach(select_table('categorie') as $value): ?>
                                                                            <option value="<?= $value-> Mat_Cat ?>"> <?= $value-> Nom?> </option>

                                                                        <?php endforeach?>
                                                                        
                                                                    </select>
                                                                </div>
                                                            </div>

                                                            <!-- end col -->
                                                            <div class="col-lg-2">
                                                                <div class="mb-3">
                                                                    <label class="form-label" for="price">Quantité</label>
                                                                    <input id="quantité" name="quantite" type="number" class="form-control" min="1" placeholder="Quantite" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- end row -->
                                                
                                                        <!-- end row -->
                                                        <div class="mb-3">
                                                            <label class="form-label" for="productdesc">Description du Produit</label>
                                                            <textarea class="form-control" name="decription" id="productdesc" rows="5" placeholder="Entrez la description de votre produit"></textarea>
                                                        </div>
                                                        <div class="tab-pane" id="product-img">
                                                            <h4 class="header-title">Images du Produit</h4>
                                                            <p class="card-title-desc">Télécharger les images de votre Produit</p>

                                                            <div class="row">
                                                                <div class="col-sm-4 mb-3">
                                                                    <div class="fallback">
                                                                        <input type="file" name="images[]"  multiple class="form-control" id="imgUpload1" accept="image/*" />
                                                                    </div>
                                                                    <!-- voir image avant de soumettre -->
                                                                    <img id="imgPreview1" class="mt-3" src="" alt="Aperçu de l'image" style="max-width: 100px; display: none;">
                                                                </div>

                                                                <div class="col-sm-4 mb-3">
                                                                    <div class="fallback">
                                                                        <input type="file" name="images[]" class="form-control" id="imgUpload2" accept="image/*" />
                                                                    </div>
                                                                    <img id="imgPreview2" class="mt-3" src="" alt="Aperçu de l'image" style="max-width: 100px; display: none;">
                                                                </div>
                                                                <div class="col-sm-4 mb-3">
                                                                    <div class="fallback">
                                                                        <input type="file" name="images[]" class="form-control" id="imgUpload3" accept="image/*" />
                                                                    </div>
                                                                    <img id="imgPreview3" src="" class="mt-3" alt="Aperçu de l'image"  style="max-width: 100px; display: none;">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <ul class="pager wizard twitter-bs-wizard-pager-link">
                                                            <li class="next"><button class="btn btn-primary" type="submit" name="enregistrer">Enregistrer</button></li>
                                                        </ul>
                                                    </form>

                                                    <div id="uploadStatus"></div>
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
        <script src="assets/js/aj-produits.js"></script>

        <?php include_once "includes/header.php"; 
                $ok = isset($_SESSION['ok']) ?  $_SESSION['ok']: '' ; unset($_SESSION['ok']);
                
            ?>
        <script>
            // message d'alerte
            <?php if ( $ok == 'ok'): ?>
                Swal.fire({
                    icon: 'success',
                    title: 'Succès',
                    text: 'Connexion réussie !',
                }).then(() => {
                    window.location.href = 'home';
                });
            <?php endif ?>
        </script>

</body>

<!-- Mirrored from themesdesign.in/morvin/layouts/ecommerce-add-product.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 20 Oct 2024 05:02:50 GMT -->

</html>