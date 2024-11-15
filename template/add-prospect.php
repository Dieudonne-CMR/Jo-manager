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
                                    <h4>Ajout de Prospects</h4>
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Ecommerce</a></li>
                                        <!-- <li class="breadcrumb-item"><a href="javascript: void(0);">Ecommerce</a></li> -->
                                        <li class="breadcrumb-item active">Ajout Prospect</li>
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


                                                    <div class="row">
                                                                        <div class="col-lg-4">
                                                                            <!-- Small modal  bouton pour ouvrir la pop up-->
                                                                            <button type="button" class="btn btn-secondary btn-sm waves-effect waves-light" data-bs-toggle="modal" data-bs-target=".staticBackdrop"><i class="ti-plus"></i></button>
                                                                                    
                                                                                    <!-- Modal fenetre pop up pour ajouter une gamme -->
                                                                        <div class="modal fade staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                                            <div class="modal-dialog" role="document">
                                                                                <div class="modal-content">
                                                                                    <div class="modal-header">
                                                                                        <h5 class="modal-title" id="staticBackdropLabel">Ajout d'une campagne</h5>
                                                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                                    </div>
                                                                                    <form action="aj_campagne" method='post'>
                                                                                        <div class="modal-body">
                                                                                            <input type="text" name="aj_campagne"  multiple class="form-control" placeholder='Ajoutez une campagne'/>
                                                                                        </div>
                                                                                        <div class="modal-footer">
                                                                                            <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">Fermer</button>
                                                                                            <button type="" name='submit_campagne' class="btn btn-primary waves-effect waves-light">Sauvegarder</button>
                                                                                        </div>
                                                                                    </form>
                                                                                </div>
                                                                            </div>
                                                                        </div><br>
                                                                            <div class="mb-3">
                                                                                <label class="form-label" for="productname">Campagnes</label>
                                                                                <select class="form-control select2" name="" required>
                                                                                    <option selected="" disabled="" value="" >--Sélectionner--</option>        
                                                                                </select>
                                                                            </div>
                                                                        </div>    
                                                                    </div>

                                                    <form action="aj_prospect" id="" method="post" enctype="multipart/form-data">
                                                   
                                                        <div class="row">
                                                            <!-- end col -->
                                                            <div class="col-lg-4">
                                                                <div class="mb-3">
                                                                    <label class="form-label" for="price">Nom</label>
                                                                    <input id="price" name="nom_prospect" type="text" class="form-control" placeholder="Entrez le nom du prospect" required>
                                                                </div>
                                                            </div>
                                                            <!-- end col -->
                                                            <div class="col-lg-4">
                                                                <div class="mb-3">
                                                                    <label class="form-label" for="price">Numero Telephone</label>
                                                                    <input id="price" name="numero_prospect" type="text" class="form-control" placeholder="Enter son numero de telephone">
                                                                </div>
                                                            </div>
                                                            <!-- end col -->
                                                            <div class="col-md-4">
                                                                <div class="mb-3">
                                                                    <label class="control-label">Localisation</label>
                                                                    <input id="productname" name="localisation" type="text" class="form-control" placeholder="Entrez sa localisation" required>
                                                                </div>
                                                            </div>

                                                            <!-- end col -->
                                                            
                                                        </div>
                                                        <!-- end row -->
                                                        <div class="row">
                                                            <!-- end col -->
                                                            <div class="col-lg-4">
                                                                <div class="mb-3">
                                                                    <label class="form-label" for="price">Besoin</label>
                                                                    <input id="price" name="besoin" type="text" class="form-control" placeholder="Entrer le besoin emis par le prospect" required>
                                                                </div>
                                                            </div>
                                                            <!-- end col -->
                                                            <div class="col-lg-4">
                                                                <div class="mb-3">
                                                                    <label class="form-label"  for="price">Type de rencontre</label>
                                                                    <select class="form-control select2" name="type_rencontre">
                                                                        <option selected="" disabled="" value="" >--Sélectionner--</option> 
                                                                        <option  value="" >boutique</option>       
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <!-- end col -->
                                                            <div class="col-md-4">
                                                                <div class="mb-3">
                                                                    <label class="control-label">Date de rencontre</label>
                                                                    <input id="" name="date_rencontre" type="date" class="form-control" required>
                                                                </div>
                                                            </div>

                                                            <!-- end col -->
                                                            
                                                        </div>
                                                        <!-- end row -->
                                                       
                                                        
                                                        <ul class="pager wizard twitter-bs-wizard-pager-link">
                                                            <li class="next"><button class="btn btn-primary" type="submit" name="enregistrer">Enregistrer</button></li>
                                                        </ul>
                                                    </form>

                                                    
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
        <script src=""></script>

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