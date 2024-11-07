<?php
// Récupérer le panier depuis la session
$panier = $_SESSION['panier'] ?? [];
?>
<!doctype html>
<html lang="en">

    
<!-- Mirrored from themesdesign.in/morvin/layouts/ecommerce-cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 20 Oct 2024 05:02:42 GMT -->
<head>
        
        
        <meta charset="utf-8" />

        <title>Cart | Morvin - Admin & Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesdesign" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <link href="assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css" rel="stylesheet" />

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
                                     <h4>Panier</h4>
                                         <ol class="breadcrumb m-0">
                                             <li class="breadcrumb-item"><a href="javascript: void(0);">Ecommerce</a></li>
                                             <li class="breadcrumb-item active">Panier</li>
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
                                            <div class="table-responsive">
                                            
                                                <table class="table table-centered mb-0 table-nowrap">
                                                    <thead class="bg-light">
                                                        <tr>
                                                            <th style="width: 120px">Produit</th>
                                                            <th>Nom du Produit</th>
                                                            <th>Description Produit</th>
                                                            <th>Prix</th>
                                                            <th>Quantité</th>
                                                            <th>Total</th>
                                                            <th class="text-center">Action</th>
                                                        </tr>
                                                    </thead><!-- end thead -->
                                                    <tbody>
                                                    <?php if (!empty($panier)): ?>
                                                    <?php
                                                        $totalPanier = 0;
                                                        //session_destroy($_SESSION['panier']);
                                                        foreach ($_SESSION['panier'] as $id => $produit):
                                                            //$totalProduit = $produit['prix'] * $produit['quantite'];
                                                            //$totalPanier += $totalProduit;
                                                        ?>
                                                        <tr>
                                                            <td>
                                                                <img src="" alt="product-img"
                                                                    title="product-img" class="avatar-md" />
                                                            </td>
                                                            <td>
                                                                <h5 class="font-size-14 text-truncate"><a href="ecommerce-product-detail.html" class="text-reset"><?php echo $produit['nom'];  ?></a></h5>
                                                            </td>
                                                            <td>
                                                                <h5 class="font-size-14 text-truncate"><a href="ecommerce-product-detail.html" class="text-reset"><?php echo $produit['quantite']; ?></a></h5>
                                                            </td>
                                                            <td>
                                                            <?php echo $produit['prix']; ?>
                                                            </td>
                                                            

                                                            <td>
                                                                <button class="modifier-quantite" data-id="<?php echo $id; ?>" data-action="decrement">-</button>
                                                                <span id="quantite-<?php echo $id; ?>"><?php echo $produit['quantite']; ?></span>
                                                                <button class="modifier-quantite" data-id="<?php echo $id; ?>" data-action="increment">+</button>
                                                            </td>

                                                            <td>
                                                            <?php echo $totalProduit; ?>
                                                            </td>

                                                            <td style="width: 90px;" class="text-center">
                                                                <a href="javascript:void(0);" class="action-icon text-danger"> <i class="mdi mdi-trash-can font-size-18"></i></a>
                                                            </td>
                                                    
                                                        </tr><!-- end tr -->
                                                        <?php endforeach; ?>
                                                        <?php else: ?>
                                                            <p>Votre panier est vide.</p>
                                                        <?php endif; ?>
                                                        <tr class="bg-light text-end">
                                                            
                                                            <th scope="row" colspan="6">
                                                                Sous-Total :
                                                            </th>
                                                            
                                                            <td>
                                                                $ 1450
                                                            </td>
                                                        </tr><!-- end tr -->
                                                        <tr class="bg-light text-end">
                                                            
                                                            <th scope="row" colspan="6">
                                                                Rabais :
                                                            </th>
                                                            
                                                            <td>
                                                                - $ 30
                                                            </td>
                                                        </tr><!-- end tr -->
                                                        <tr class="bg-light text-end">
                                                            
                                                            <th scope="row" colspan="6">
                                                                Frais d'expédition :
                                                            </th>
                                                            
                                                            <td>
                                                                $ 15
                                                            </td>
                                                        </tr><!-- end tr -->
                                                        <tr class="bg-light text-end">
                                                            
                                                            <th scope="row" colspan="6">
                                                                Total :
                                                            </th>
                                                            
                                                            <td>
                                                                $ 1435
                                                            </td>
                                                        </tr><!-- end tr -->
                                                    </tbody><!-- end tbody -->
                                                </table><!-- end table -->
                                            </div>
                                        </div><!-- end cardbody -->
                                    </div><!-- end card -->
                                </div><!-- end col -->
                            </div><!-- end row -->

                        </div>
        
                        
                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

              
                
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                <script>document.write(new Date().getFullYear())</script> © Morvin.
                            </div>
                            <div class="col-sm-6">
                                <div class="text-sm-end d-none d-sm-block">
                                    Crafted with <i class="mdi mdi-heart text-danger"></i> by <a href="https://1.envato.market/themesdesign" target="_blank">Themesdesign</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        <!-- Right Sidebar -->
        <div class="right-bar">
            <div data-simplebar class="h-100">
                <div class="rightbar-title d-flex align-items-center px-3 py-4">
            
                    <h5 class="m-0 me-2">Settings</h5>

                    <a href="javascript:void(0);" class="right-bar-toggle ms-auto">
                        <i class="mdi mdi-close noti-icon"></i>
                    </a>
                </div>

                <!-- Settings -->
                <hr class="mt-0" />
                <h6 class="text-center mb-0">Choose Layouts</h6>

                <div class="p-4">
                    <div class="mb-2">
                        <img src="assets/images/layouts/layout-1.jpg" class="img-fluid img-thumbnail" alt="layout-1">
                    </div>

                    <div class="form-check form-switch mb-3">
                        <input class="form-check-input theme-choice" type="checkbox" id="light-mode-switch" checked>
                        <label class="form-check-label" for="light-mode-switch">Light Mode</label>
                    </div>
    
                    <div class="mb-2">
                        <img src="assets/images/layouts/layout-2.jpg" class="img-fluid img-thumbnail" alt="layout-2">
                    </div>
                    <div class="form-check form-switch mb-3">
                        <input class="form-check-input theme-choice" type="checkbox" id="dark-mode-switch" data-bsStyle="assets/css/bootstrap-dark.min.css" data-appStyle="assets/css/app-dark.min.css">
                        <label class="form-check-label" for="dark-mode-switch">Dark Mode</label>
                    </div>
    
                    <div class="mb-2">
                        <img src="assets/images/layouts/layout-3.jpg" class="img-fluid img-thumbnail" alt="layout-3">
                    </div>
                    <div class="form-check form-switch mb-5">
                        <input class="form-check-input theme-choice" type="checkbox" id="rtl-mode-switch" data-appStyle="assets/css/app-rtl.min.css">
                        <label class="form-check-label" for="rtl-mode-switch">RTL Mode</label>
                    </div>

            
                </div>

            </div> <!-- end slimscroll-menu-->
        </div>
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- JAVASCRIPT -->
        <script src="assets/libs/jquery/jquery.min.js"></script>
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/node-waves/waves.min.js"></script>

        <!-- Bootrstrap touchspin -->
        <script src="assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>

        <script src="assets/js/pages/ecommerce-cart.init.js"></script>

        <script src="assets/js/app.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('.modifier-quantite').click(function() {
            var id = $(this).data('id');
            var action = $(this).data('action');

            console.log(id);
            console.log(action);
            $.ajax({
                url: 'mettre_a_jour_panier.php',
                method: 'POST',
                data: {
                    id: id,
                    action: action
                },
                success: function(response) {
                    try {
                        var data = JSON.parse(response);
                            
                        if (data.success) {
                            $('#quantite-' + id).text(data.quantite);
                            $('#total-' + id).text(data.totalProduit + ' €');
                            $('#total-panier').text(data.totalPanier + ' €');
                        } else {
                            alert(data.message || 'Erreur lors de la mise à jour.');
                        }
                    } catch (e) {
                        console.error('Erreur lors du traitement de la réponse JSON:', e);
                        alert('Une erreur est survenue. Veuillez réessayer.');
                    }
                }
            });
        });
    });
</script>

    </body>

<!-- Mirrored from themesdesign.in/morvin/layouts/ecommerce-cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 20 Oct 2024 05:02:43 GMT -->
</html>
