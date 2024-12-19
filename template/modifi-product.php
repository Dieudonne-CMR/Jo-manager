<!doctype html>
<html lang="en">


<!-- Mirrored from themesdesign.in/morvin/layouts/ecommerce-add-product.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 20 Oct 2024 05:02:48 GMT -->

<head>



    <meta charset="utf-8" />

    <?php $titre = 'ajouter un produit';
    include_once('includes/meta.php'); ?>

    <base href="../">

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
                                                <div class="tab-pane" style="display: block;">
                                                    <h4 class="header-title">Informations basiques</h4>
                                                    <p class="card-title-desc">Remplissez toutes les informations ci-dessous

                                                    </p><br>

                                                    <?php //if($mat_type): 
                                                    ?>
                                                    <?php //$nom_type = select_table_where('type_produit', 'mat_type', $mat_type)[0] -> nom_type; //--- on recupere le nom de chaque type de produit pour l'afficher ensuite 
                                                    ?>

                                                    <div class='row'>

                                                        <form action="mod-product" id="mod-product" method="post" enctype="multipart/form-data">


                                                            <div class="row">


                                                                <?php if ($type == 'Mousse'): //Ajout du champ Prix/cm pour le type de Produit Mousse
                                                                ?>

                                                                    <div class="col-sm-4 mb-3">
                                                                        <div class="fallback">
                                                                            <label class="form-label" for="productdesc">Prix / cm</label>
                                                                            <input type="text" name="prix_cm" class="form-control" />
                                                                        </div>

                                                                    </div>
                                                                <?php endif; ?>

                                                                <?php if ($type == 'Draps'): //---- ajout du champ Taie pour le type Draps 
                                                                ?>
                                                                    <div class="col-sm-4 mb-3">
                                                                        <div class="fallback">
                                                                            <label class="form-label" for="productdesc">Taie</label>
                                                                            <input type="text" name="taie" value="<?php echo $product[0]->Taie; ?>" required class="form-control" />
                                                                        </div>

                                                                    </div>
                                                                <?php endif; ?>


                                                                <div class="col-sm-4 mb-3">
                                                                    <div class="fallback">
                                                                        <label class="form-label" for="productdesc">Prix Achat</label>
                                                                        <input type="number" id="prix_achat" name="prix_achat" step="0.01" value="<?php echo $product[0]->prix_achat; ?>" onchange="calculerPrixVente()" required class="form-control" />
                                                                    </div>

                                                                </div>

                                                                <div class="col-sm-4 mb-3">
                                                                    <div class="fallback">
                                                                        <label class="form-label" for="productdesc">Coef. de vente</label>
                                                                        <input type="number" id="coef_vente" name="Coef_vente" step="0.01" value="<?php echo $product[0]->Coef_vente; ?>" onchange="calculerPrixVente()" required class="form-control" />
                                                                    </div>

                                                                </div>

                                                                <div class="col-sm-4 mb-3">
                                                                    <div class="fallback">
                                                                        <label class="form-label" for="productdesc">Prix de vente</label>
                                                                        <input type="number" id="prix_vente" name="prix_de_vente" value="<?php echo $product[0]->prix_de_vente; ?>" class="form-control" />
                                                                    </div>

                                                                </div>


                                                                <div class="col-sm-4 mb-3">
                                                                    <div class="fallback">

                                                                        <label class="form-label" for="productdesc">Remise</label>
                                                                        <input type="text" name="remise" class="form-control" value="<?php echo $product[0]->remise; ?>" />
                                                                    </div>

                                                                </div>

                                                            </div>

                                                            <!-- end row -->

                                                            <?php //if ($mat_type == 'Type-125'):
                                                           
                                                            ?>

                                                            <div class="mb-3">
                                                                <label class="form-label" for="productdesc">Description du Produit</label>
                                                                <textarea class="form-control" name="description_produit" id="productdesc" value="<?php echo $product[0]->description_produit; ?>" rows="5"><?php echo $product[0]->description_produit; ?></textarea>
                                                            </div>
                                                            <?php //endif; 
                                                            ?>

                                                            <div class="tab-pane" id="product-img">
                                                                <h4 class="header-title">Images du Produit</h4>
                                                                <p class="card-title-desc">Télécharger les images de votre Produit</p>

                                                                <div class="row">
                                                                    <div class="col-sm-4 mb-3">
                                                                        <div class="fallback">
                                                                            <img src="<?php echo $image_produit . $product[0]->Img1 ?>" alt="" style="max-width: 100px;"><br><br>
                                                                            <input type="file" name="images1" class="form-control" id="imgUpload1" accept="image/*" />
                                                                        </div>
                                                                        <!-- voir image avant de soumettre -->
                                                                        <img id="imgPreview1" class="mt-3" src="" alt="Aperçu de l'image" style="max-width: 100px; display: none;">
                                                                    </div>

                                                                    <div class="col-sm-4 mb-3">
                                                                        <div class="fallback">
                                                                            <img src="<?php echo $image_produit . $product[0]->Img2 ?>" alt="" style="max-width: 100px;"><br><br>
                                                                            <input type="file" name="images2" class="form-control" id="imgUpload2" accept="image/*" />
                                                                        </div>
                                                                        <img id="imgPreview2" class="mt-3" src="" alt="Aperçu de l'image" style="max-width: 100px; display: none;">
                                                                    </div>

                                                                    <div class="col-sm-4 mb-3">
                                                                        <div class="fallback">
                                                                            <img src="<?php echo $image_produit . $product[0]->Img3 ?>" alt="" style="max-width: 100px;"><br><br>
                                                                            <input type="file" name="images3" class="form-control" id="imgUpload3" accept="image/*" />
                                                                        </div>
                                                                        <img id="imgPreview3" src="" class="mt-3" alt="Aperçu de l'image" style="max-width: 100px; display: none;">
                                                                    </div>
                                                                </div>
                                                                <input type="hidden" name='gamme' value="<? //= $gam -> nom_gamme 
                                                                                                            ?>">
                                                                <input type="hidden" name='dimension' value="<? //= $dim -> dimensions 
                                                                                                                ?>">
                                                                <input type="hidden" name='epaisseur' value="<? //= $ep-> epaisseur 
                                                                                                                ?> ">
                                                                <input type="hidden" name='mat_produit' value="<?= $product[0]->mat_produit ?> ">
                                                            </div>
                                                            <ul class="pager wizard twitter-bs-wizard-pager-link">
                                                                <li class="next"><button class="btn btn-primary" type='submit' name="enregistrer">Enregistrer</button></li>
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
                                <?php //endif; 
                                ?>
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

            <script>
                function calculerPrixVente() {
                    // Récupérer les valeurs des champs
                    const prixAchat = parseFloat(document.getElementById('prix_achat').value) || 0;
                    const coef = parseFloat(document.getElementById('coef_vente').value) || 0;

                    // Calculer le prix total
                    const prixVente = prixAchat * coef;

                    // Afficher le résultat dans le champ Prix Total
                    document.getElementById('prix_vente').value = prixVente;
                }

                // notification
                <?php if(isset($_SESSION['ok'])): 
                    $ok= $_SESSION['ok']; unset($_SESSION['ok']) ; ?>
                        if ( <?= $ok ?> == 0 ) {
                        Swal.fire({
                            icon: 'success',
                            title: 'succès',
                            text: "Modification effectuer",
                        }).then(() => {
                            window.location.href = ' products';
                        });
                    } 
                <?php endif; ?>
            </script>



            <!-- init js -->
            <script src="assets/js/pages/ecommerce-add-product.init.js"></script>

            <script src="assets/js/app.js"></script>
            <script src="assets/js/aj-produit-admin.js"></script>





</body>




<!-- Mirrored from themesdesign.in/morvin/layouts/ecommerce-add-product.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 20 Oct 2024 05:02:50 GMT -->

</html>