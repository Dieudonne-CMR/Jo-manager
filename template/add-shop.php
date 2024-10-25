<!doctype html>
<html lang="en">

    
<!-- Mirrored from themesdesign.in/morvin/layouts/form-validation.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 20 Oct 2024 05:03:25 GMT -->
<head>
        
        
        <meta charset="utf-8" />

       <meta>

        <title>Form Validation | Morvin - Admin & Dashboard Template</title>
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
                                            
                                            <form method='post' id="uploadForm" action='aj-shop' class="needs-validation" novalidate>
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
                                                            <input type="text" name="localisation" class="form-control" id="validationCustom02"
                                                                placeholder="Entrez la Localisation"  required>
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
                                                            <input type="phone" name="tel_shop" class="form-control" id="validationCustom02"
                                                                placeholder="Entrez le numéro de téléphone" required> 
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label for="validationCustom04" class="form-label">Email</label>
                                                            <input type="emeail" name="email" class="form-control" id="validationCustom04"
                                                                placeholder="Entrez l'email" required>
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
                                                             <!-- voir image avant de soumettre -->
                                                            <img id="previewlogo" src="" alt="Aperçu de l'image" style="max-width: 300px; display: none;">
                                                            <input type="file" name="logo" id="logoUpload" class="form-control" 
                                                                placeholder="" required>
                                                            <div class="valid-feedback">
                                                                Ca a l'air bien!
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label for="validationCustom02" class="form-label">Bannière</label>

                                                            <!-- voir image avant de soumettre -->
                                                            <img id="preview" src="" alt="Aperçu de l'image" style="max-width: 300px; display: none;">

                                                            <input type="file" name="banniere" id="imageUpload" class="form-control" 
                                                                placeholder="" accept="image/*" required>
                                                            <div class="valid-feedback">
                                                                Ca a l'air bien!
                                                            </div>
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
        <!-- <script>
        // Sélectionne le champ input et l'image de prévisualisation
        const imageInput = document.getElementById('imageUpload');
        const previewImage = document.getElementById('preview');

        const logoInput = document.getElementById('logoUpload');
        const previewlogo = document.getElementById('previewlogo');

        // Écouteur d'événements pour le changement de fichier
        imageInput.addEventListener('change', (event) => {
            const file = event.target.files[0];  // Récupère le fichier sélectionné
            if (file) {
                const reader = new FileReader();
                
                // Lorsque le fichier est chargé, afficher l'aperçu
                reader.onload = (e) => {
                    previewImage.src = e.target.result;  // URL de l'image
                    previewImage.style.display = 'block';  // Affiche l'image de prévisualisation

                    previewlogo.src = e.target.result;  // URL de l'image
                    previewlogo.style.display = 'block';  // Affiche l'image de prévisualisation
                };

                // Lecture du fichier comme URL de données
                reader.readAsDataURL(file);
            }


            if (file) {
                const reader = new FileReader();
                
                // Lorsque le fichier est chargé, afficher l'aperçu
                reader.onload = (e) => {n

                    previewlogo.src = e.target.result;  // URL de l'image
                    previewlogo.style.display = 'block';  // Affiche l'image de prévisualisation
                };

                // Lecture du fichier comme URL de données
                reader.readAsDataURL(file);
            }
        });
    </script> -->
    </body>

<!-- Mirrored from themesdesign.in/morvin/layouts/form-validation.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 20 Oct 2024 05:03:26 GMT -->
</html>
