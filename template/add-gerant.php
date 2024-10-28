<!doctype html>
<html lang="en">


<!-- Mirrored from themesdesign.in/morvin/layouts/form-wizard.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 20 Oct 2024 05:03:32 GMT -->

<head>


    <meta charset="utf-8" />
   <meta>

   <?php $titre='ajouter un gerant'; include_once('includes/meta.php') ?>

    <!-- twitter-bootstrap-wizard css -->
    <link rel="stylesheet" href="assets/libs/twitter-bootstrap-wizard/prettify.css">


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
                                    <h4>Ajout Gerant</h4>
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Dashbord</a></li>
                                        <!-- <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li> -->
                                        <li class="breadcrumb-item active">Ajout Gerant</li>
                                    </ol>
                                </div>
                            </div>
                            <?php /*<div class="col-sm-6">
                                <div class="float-end d-none d-sm-block">
                                    <a href="#" class="btn btn-success">Add Widget</a>
                                </div>
                            </div> */?>
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

                                        <h4 class="header-title">L'ajout du gerant dant une boutique </h4>
                                        <br>

                                        <form action="aj-gerant" method="post" id="aj-gerant">

                                            <div class="row mb-3">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Nom</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" name="nom" type="text" placeholder="Entrez votre Nom" id="example-text-input" required>
                                                </div>
                                            </div>
    
                                            <div class="row mb-3">
                                                <label for="example-search-input" class="col-sm-2 col-form-label">Localisation</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" name="localisation_gerant" type="search" placeholder="Entrez votre localisation" id="example-search-input">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="example-tel-input" class="col-sm-2 col-form-label">Telephone</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" name="telephone_gerant" type="tel" placeholder="+237 699 99 99 99" id="example-tel-input">
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class=" mb-3">
                                                        <label class="col-sm-4 col-form-label">Boutique</label>
                                                        <div class="col-sm-12">
                                                            <select class="form-control select2 " name="mat-boutik" required>
                                                            <option selected="" disabled="" value="">Choose...</option>
                                                                <?php foreach(select_table('shop') as $value): ?>
                                                                    <option value="<?= $value -> Mat_Shop ?>" ><?= $value -> Nom_Shop ?></option>
                                                                <?php endforeach ?>                                                                
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class=" mb-3">
                                                        <label class="col-sm-2 col-form-label">Role</label>
                                                        <div class="col-sm-12">
                                                            <select class="form-control select2" required name="role">
                                                            <option selected="" disabled="" value="">--Sélectionner--</option>
                                                                <?php foreach(select_table('role') as $value): ?>
                                                                    <option value="<?= $value -> id ?>" <?= $value -> id=='2' ?  'selected':'' ?>><?= $value -> role ?></option>
                                                                <?php endforeach ?>                                                                
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div>
                                                <button class="btn btn-primary" type="submit" name="soumettre">Enregistrer</button>
                                            </div>

                                        </form>

                                    </div>
                                </div>
                            </div> <!-- end col -->
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

    <!-- form wizard init -->
    <script src="assets/js/pages/form-wizard.init.js"></script>

    <script src="assets/js/app.js"></script>
    <script src="assets/js/aj-gerant.js"></script>

</body>

<!-- Mirrored from themesdesign.in/morvin/layouts/form-wizard.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 20 Oct 2024 05:03:32 GMT -->

</html>