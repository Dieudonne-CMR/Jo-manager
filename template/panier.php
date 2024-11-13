<!doctype html>
<html lang="en">   
<!-- Mirrored from themesdesign.in/morvin/layouts/ecommerce-cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 20 Oct 2024 05:02:42 GMT -->
<head>
        
        
        <meta charset="utf-8" />

        <?php $titre='Panier des produits'; 
            include_once('includes/meta.php') ?>

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
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="table-responsive">
                                            
                                                <table class="table table-centered mb-0 table-nowrap">
                                                    <thead class="bg-light">
                                                        <tr>
                                                            <th style="width: 120px">Produit</th>
                                                            <th>Nom du Produit</th>  
                                                            <th>Prix Unitaire</th>
                                                            <th>Quantité</th>
                                                            <th>Total</th>
                                                            <th class="text-center">Action</th>
                                                        </tr>
                                                    </thead><!-- end thead -->
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
                                                        <tr id="produit-<?= $produit['mat_produit']; ?>">
                                                            <td>
                                                                <img src="<?= $image_produit . $produit['image'] ?>" alt="product-img"
                                                                    title="product-img" class="avatar-md" />
                                                            </td>
                                                            <td>
                                                                <h5 class="font-size-14 text-truncate"><a href="ecommerce-product-detail.html" class="text-reset"><?php echo $produit['nom'];  ?></a></h5>
                                                            </td>
                                                            
                                                            <!-- Prix de unitaire d'un produits -->
                                                            <td>
                                                                <?php echo $produit['prix']; ?> Fcfa
                                                            </td>
                                                            
                                                            <!-- les bouton plus (+) et moin (-) -->
                                                            <td>
                                                                <button class="modifier-quantite" data-id="<?php echo $mat_produit; ?>" data-action="decrement">-</button>
                                                                <span id="quantite-<?php echo $mat_produit; ?>"><?php echo $produit['quantite']; ?></span>
                                                                <button class="modifier-quantite" data-id="<?php echo $mat_produit; ?>" data-action="increment">+</button>
                                                            </td>
                                                            
                                                            <!-- Affiche le totale de produit -->
                                                            <td id='total-<?php echo $mat_produit; ?>'>
                                                                <?php  echo $totalProduit; ?> Fcfa
                                                            </td>

                                                            <td style="width: 90px;" class="text-center">
                                                                <button class="supprimer" data-id="<?= $produit['mat_produit']; ?>" class="action-icon text-danger" title="Supprimer"> 
                                                                    <i class="mdi mdi-trash-can font-size-18"></i>
                                                                </button>
                                                            </td>
                                                    
                                                        </tr><!-- end tr -->
                                                        <?php endforeach; ?>
                                                        <?php else: ?>
                                                            <p>Votre panier est vide.</p>
                                                            <?php $totalPanier = 0; ?>
                                                        <?php endif; ?>
                                                        <tr class="bg-light text-end">
                                                        
                                                            <th scope="row" colspan="5">
                                                                Total :
                                                            </th>
                                                            <!-- affiche la sommes la somme total du panier  -->
                                                            <td id="total-panier">
                                                                 <?= $totalPanier ?> Fcfa
                                                            </td>
                                                        </tr><!-- end tr -->

                                                        <?php /*
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
                                                         */?>
                                                         
                                                    </tbody><!-- end tbody -->
                                                </table><!-- end table -->
                                                <div class="col-sm-12 pt-3">
                                                    <div class="float-end d-none d-sm-block">
                                                        <a href="checkout" class="btn btn-success">Valider la commande</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- end cardbody -->
                                    </div><!-- end card -->
                                </div><!-- end col -->
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

        <!-- Bootrstrap touchspin -->
        <script src="assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>

        <script src="assets/js/pages/ecommerce-cart.init.js"></script>

        <script src="assets/js/app.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $(document).ready(function() {
        $('.modifier-quantite').click(function() {
            var mat_produit = $(this).data('id');
            var action = $(this).data('action');

            // console.log(id);
            // console.log(action);
            $.ajax({
                url: 'mettre_a_jour_panier',
                method: 'POST',
                data: {
                    mat_produit: mat_produit,
                    action: action
                },
                success: function(response) {
                    try {
                        var data = JSON.parse(response);
                        console.log(data)
                            
                        if (data.success) {
                            $('#quantite-' + mat_produit).text(data.quantite);
                            $('#total-' + mat_produit).text(data.totalProduit + ' Fcfa');
                            $('#total-panier').text(data.totalPanier + ' Fcfa');
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
<!-- ---------------------------------------------------------------------------------------- -->
<script>
    // Attendre que la page soit chargée
    document.addEventListener('DOMContentLoaded', function () {
    // Sélectionner tous les boutons de suppression
    const boutonsSupprimer = document.querySelectorAll('.supprimer');

    // Ajouter un événement de clic à chaque bouton de suppression
    boutonsSupprimer.forEach(button => {
        button.addEventListener('click', function () {
            // Récupérer l'ID du produit à partir de l'attribut 'data-id'
            const produitId = this.getAttribute('data-id');
            
            // Créer une nouvelle requête AJAX
            const xhr = new XMLHttpRequest();
            xhr.open('POST', 'supprimer_panier.php', true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

            // Lorsque la réponse est reçue, mettre à jour l'interface
            xhr.onload = function () {
                if (xhr.status === 200) {
                    // Si la suppression est réussie, retirer la ligne du tableau
                    document.getElementById('produit-' + produitId).remove();

                    // Afficher un message de succès
                    document.getElementById('message').innerText = 'Produit supprimé avec succès !';
                } else {
                    // Si une erreur se produit
                    document.getElementById('message').innerText = 'Erreur de suppression.';
                }
            };

            // Envoyer l'ID du produit à supprimer
            xhr.send('produit_id=' + produitId);
        });
    });
});

</script>

    </body>

<!-- Mirrored from themesdesign.in/morvin/layouts/ecommerce-cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 20 Oct 2024 05:02:43 GMT -->
</html>
