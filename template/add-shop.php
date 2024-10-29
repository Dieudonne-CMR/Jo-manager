<!doctype html>
<html lang="en">
    
<!-- Mirrored from themesdesign.in/morvin/layouts/form-validation.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 20 Oct 2024 05:03:25 GMT -->
<head>
    <meta charset="utf-8" />
        <?php $titre='ajouter une boutique'; include_once('includes/meta.php') ?>

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
           <?php include_once "includes/header.php"; 
                $ok = isset($_SESSION['ok']) ?  $_SESSION['ok']: '' ; unset($_SESSION['ok']);
                
            ?>

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
                                     <h4>Création d'une boutique</h4>
                                         <ol class="breadcrumb m-0">
                                             <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                                             <li class="breadcrumb-item active">Création d'une Boutique</li>
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
                                            
                                            <?php /*
                                            <h4 class="header-title">La zonne  de création de la boutique</h4>
                                            <p class="card-title-desc">For custom Bootstrap form validation messages, you’ll need to add the <code>novalidate</code> boolean attribute to your <code>&lt;form&gt;</code>.</p> */?>
                                            
                                            <form method='post' id="uploadForm" action='aj-shop' class="needs-validation" enctype="multipart/form-data" novalidate >
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label for="validationCustom01" class="form-label">Nom de la Boutique</label>
                                                            <input type="text" name="nom_shop" class="form-control" id="validationCustom01"
                                                                placeholder="Entrez le nom de votre Boutique" required>
                                                            <div class="valid-feedback">
                                                                Looks good!
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label for="validationCustom02" class="form-label">Localisation</label>
                                                            <input type="text" name="localisation" class="form-control" 
                                                                placeholder="Entrez la Localisation">
                                                            <div class="valid-feedback">
                                                                Looks good!
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label for="validationCustom03" class="form-label">Téléphone</label>
                                                            <input type="phone" name="tel_shop" class="form-control" 
                                                                placeholder="Entrez le numéro de téléphone"> 
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label for="validationCustom04" class="form-label">Email</label>
                                                            <input type="email" name="email" class="form-control" 
                                                                placeholder="Entrez l'email">
                                                            <div class="invalid-feedback">
                                                                Veuillez fournir un email valide
                                                            </div>
                                                        </div>
                                                    </div>    
                                                </div>
                                                <div class="row">

                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label for="validationCustom01" class="form-label">Logo</label>

                                                            <input type="file" name="logo" id="logoUpload" class="form-control" 
                                                            placeholder="" accept="image/*">
                                                            <div class="valid-feedback">
                                                                ça a l'air bien!
                                                            </div>
                                                            <!-- voir image avant de soumettre -->
                                                            <img id="logoPreview" src="" alt="Aperçu de l'image" style="max-width: 100px; display: none;">

                                                        </div>
                                                    </div>
                                                    
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label for="validationCustom05" class="form-label">Bannière</label>

                                                            <input type="file" name="banniere" id="bannerUpload" class="form-control" 
                                                            placeholder="" accept="image/*">
                                                            <div class="valid-feedback">
                                                                ça a l'air bien!
                                                            </div>
                                                            
                                                            <!-- voir image avant de soumettre -->
                                                            <img id="bannerPreview" src="" alt="Aperçu de l'image" style="max-width: 100px; display: none;">

                                                        </div>
                                                    </div>
                                                </div>
                                               
                                                <div>
                                                    <button class="btn btn-primary" type="submit" name="soumettre">Soumettre</button>
                                                </div>
                                            </form>
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

        <script src="assets/libs/parsleyjs/parsley.min.js"></script>

        <script src="assets/js/pages/form-validation.init.js"></script>

        <script src="assets/js/app.js"></script>
        <script src="assets/js/aj-shop.js"></script>
        <script>
            // message d'alerte
            <?php if ( $ok == 'ok'): ?>
                Swal.fire({
                    icon: 'success',
                    title: 'Succès',
                    text: 'Connexion réussie !',
                }).then(() => {
                    window.location.href = 'shops   ';
                });
            <?php endif ?>
        </script>
    </body>

<!-- Mirrored from themesdesign.in/morvin/layouts/form-validation.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 20 Oct 2024 05:03:26 GMT -->
</html>
