<!doctype html>
<html lang="en">
<?php
$panier = $_SESSION['panier'][$mat_shop] ?? [];
?>
    
<!-- Mirrored from themesdesign.in/morvin/layouts/ecommerce-checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 20 Oct 2024 05:02:43 GMT -->
<head>
        
        
        <meta charset="utf-8" />
            <?php $titre='Checkout commande'; 
                include_once('includes/meta.php') ?>

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
                                     <h4>Validation de la commande</h4>
                                         <ol class="breadcrumb m-0">
                                             <li class="breadcrumb-item"><a href="javascript: void(0);">Jo-Retail</a></li>
                                             <li class="breadcrumb-item"><a href="javascript: void(0);">Ecommerce</a></li>
                                             <li class="breadcrumb-item active">Validation de la commande</li>
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
                                <div class="col-xl-5">
                                    <div class="card">
                                        <div class="card-body">
                                            <table class="table table-centered mb-0 table-nowrap">
                                                <thead>
                                                <tr>
                                                    <th class="border-top-0" style="width: 100px;" scope="col">Photo</th>
                                                    <th class="border-top-0" scope="col">Produit</th>
                                                    <th class="border-top-0" scope="col">Total</th>
                                                    
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <?php if (!empty($panier)): ?>
                                                    <?php
                                                    
                                                    // var_dump($panier);
                                                        $totalPanier = 0;
                                                        foreach ($panier as $produit):
                                                            $mat_produit= $produit['mat_produit']; //--- matricule de produits
                                                            $totalProduit = $produit['prix'] * $produit['quantite']; //---- prix total de produits
                                                            $totalPanier += $totalProduit; //---- Prix total du panier
                                                            // var_dump($totalPanier);
                                                 ?>
                                                <tr>
                                                    <td><img src="<?= $image_produit . $produit['image'] ?>" alt="product-img" title="product-img" class="avatar-md"></td>
                                                    <td>
                                                        <h5 class="font-size-16 text-truncate"><a href="ecommerce-product-detail.html" class="text-reset"><?php echo $produit['nom'];  ?></a></h5>
                                                        <p class="font-size-14 mb-0 text-muted"><?php echo $produit['prix']. ' x '. $produit['quantite'];  ?></p>
                                                    </td>
                                                    <td id='total-<?php echo $mat_produit; ?>'>
                                                        <?php echo $totalProduit ?> Fcfa</td>
                                                    </tr>
                                                    <?php endforeach; ?>
                                                        <?php else: ?>
                                                            <p>Votre panier est vide.</p>
                                                            <?php $totalPanier = 0; ?>                                                        <?php endif; ?>
                                                    <tr>
                                                        <td colspan="1">
                                                        </td>
                                                        <td>
                                                            <h6 class="m-0 text-end"> Total:</h6>
                                                        </td>
                                                        <td id="total-panier">
                                                            <?= $totalPanier ?> Fcfa
                                                        </td>
                                                    </tr>
                                                    
                                                </tbody><!-- end tbody -->
                                            </table><!-- end table -->
                                        </div><!-- end cardbody -->
                                    </div><!-- end card -->
                                </div><!-- end col -->
                                <div class="col-xl-7">
                                    <div class="card">
                                        <div class="card-body">
                                            <div id="checkout-nav-pills-wizard" class="twitter-bs-wizard">
                                                <ul class="twitter-bs-wizard-nav">
                                                    <li class="nav-item chackout-border">
                                                        <a href="#billing-info" class="nav-link" data-toggle="tab">
                                                            <span class="step-number">Infos Client</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <div class="tab-content twitter-bs-wizard-tab-content">
                                                    <div class="tab-pane" id="billing-info">
                                                        <h5 class="header-title">Informations du Client</h5>
                                                        <p>Veuillez remplir le formulaire relatif a votre Commande</p>        

                                                        <form class='aj_checkout' action='save_checkout' method='POST'>
                                                            <div>
                                                                <div>
                                                                    <div class="row">
                                                                        <div class="col-lg-4">
                                                                            <div class="mb-4">
                                                                                <label class="form-label" for="billing-name">Nom</label>
                                                                                <input type="text" name='nom_client' class="form-control" id="billing-name" placeholder="Entrez votre nom">
                                                                            </div>
                                                                        </div><!-- end col -->
                                                                        <div class="col-lg-4">
                                                                        <div class="mb-4 mb-lg-0">
                                                                                <label class="form-label">Ville</label>
                                                                                <select class="form-select" name='ville_client' title="Ville">
                                                                                    <option value="0">Selectionner une ville</option>
                                                                                    <option value="Douala">Douala</option>
                                                                                    <option value="Yaounde">Yaounde</option>
                                                                                    <option value="Bafoussam">Bafoussam</option>
                                                                                    <option value="Kribi">Kribi</option>
                                                                                    <option value="Limbe">Limbe</option>
                                                                                    <option value="Dschang">Dschang</option>                                  
                                                                                </select>
                                                                            </div>
                                                                        </div><!-- end col -->
                                                                        <div class="col-lg-4">
                                                                            <div class="mb-4">
                                                                                <label class="form-label" for="billing-phone">Telephone</label>
                                                                                <input type="number" name='tel_client' class="form-control" id="billing-phone" placeholder="Entrer num. tel.">
                                                                            </div>
                                                                        </div><!-- end col -->
                                                                    </div><!-- end row -->
                                                                    <div class="mb-4">
                                                                        <label class="form-label" for="billing-address">Adresse</label>
                                                                        <input type='text' class="form-control" name='adresse_client' id="billing-address" rows="3" placeholder="Entrez votre adresse complete"></input>
                                                                    </div>
                                    
                                                                    <input type="hidden" name='prix_total_commande' value='<?= $totalPanier //je recupere le prix total de ma commande ?>'>
                                                                    <input type="hidden" name='mat_produit' value='<?= $mat_produit //je recupere le prix total de ma commande ?>'>
                                                                    <input type="hidden" name='panier' value='<?= $panier //je recupere le prix total de ma commande ?>'>
                                                                    <input type="hidden" name='shop' value='<?= $mat_shop //je recupere le matricule de la boutique dans laquelle je suis ?>'>
                                                                    <button type='submit' name='soumettre' class="btn btn-primary">
                                                                             Soumettre
                                                                    </button> 
                                                                </div>
                                                            </div>
                                                        </form><!-- end form -->
                                                    </div>
                                                </div>  
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end row -->
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
         <!-- ecommerce-checkout init -->
         <script src="assets/js/pages/ecommerce-checkout.init.js"></script>

        <script src="assets/js/app.js"></script>
        <script src="assets/js/aj_checkout.js"></script>



    </body>

<!-- Mirrored from themesdesign.in/morvin/layouts/ecommerce-checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 20 Oct 2024 05:02:45 GMT -->
</html>
