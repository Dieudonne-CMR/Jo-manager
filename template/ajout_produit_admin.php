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
                                                <div class="tab-pane" style="display: block;" >
                                                    <h4 class="header-title">Informations basiques</h4>
                                                    <p class="card-title-desc">Remplissez toutes les informations ci-dessous
                                                        
                                                    </p><br>
                                                    
                                <?php if($mat_type): ?> 
                                    <?php $nom_type = select_table_where('type_produit', 'mat_type', $mat_type)[0] -> nom_type; //--- on recupere le nom de chaque type de produit pour l'afficher ensuite ?>

                                            <div class='row'>
                                                        <div class="col-sm-4 mb-3">
                                                                    <div class="fallback">
                                                                        <!-- Small modal  bouton pour ouvrir la pop up-->
                                                                            <button type="button" class="btn btn-secondary btn-sm waves-effect waves-light" data-bs-toggle="modal" data-bs-target=".staticBackdrop"><i class="ti-plus"></i></button>
                                                                                    
                                                                                    <!-- Modal fenetre pop up pour ajouter une gamme -->
                                                                        <div class="modal fade staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                                            <div class="modal-dialog" role="document">
                                                                                <div class="modal-content">
                                                                                    <div class="modal-header">
                                                                                        <h5 class="modal-title" id="staticBackdropLabel">
                                                                                            <?php if ($mat_type == 'Type-125'):
                                                                                                    echo "Ajout d'une Matiere"; ?>
                                                                                            <?php else:
                                                                                                    echo "Ajout d'une Gamme"; ?>
                                                                                            <?php endif; ?>
                                                                                        </h5>
                                                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                                    </div>
                                                                                    <form action="aj_dim-gam-ep" method='post'>
                                                                                        <div class="modal-body">
                                                                                            <input type="hidden" name='mat_type' value="<?php echo $mat_type ?>">
                                                                                            <input type="text" name="aj_gamme"  multiple class="form-control" placeholder='<?php if ($mat_type == 'Type-125'):
                                                                                                                                                                                        echo "Ajoutez une matiere"; ?>
                                                                                                                                                                                <?php else:
                                                                                                                                                                                        echo "Ajoutez une gamme"; ?>
                                                                                                                                                                                <?php endif; ?>'
                                                                                                                                                                                />
                                                                                        </div>
                                                                                        <div class="modal-footer">
                                                                                            <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">Fermer</button>
                                                                                            <button type="" name='submit_gamme' class="btn btn-primary waves-effect waves-light">Sauvegarder</button>
                                                                                        </div>
                                                                                    </form>
                                                                                </div>
                                                                            </div>
                                                                        </div><br>
                                                                    <label class="form-label" for="productdesc">
                                                                        <?php if ($mat_type == 'Type-125'):
                                                                                echo 'Matiere'; ?>
                                                                        <?php else:
                                                                                echo "Gamme"; ?>
                                                                        <?php endif; ?>
                                                                    </label>
                                                                    <select class="form-select" name="gamme" required>
                                                                        
                                                                        <option selected="" disabled="" value="" >--Sélectionner--</option>

                                                                            <?php foreach(select_table_where('gamme_produit', 'mat_type', $mat_type) as $gam) : //requete permettant de trier les gammes en fonction du type de produit
                                                                                $nom_gamme = $gam -> nom_gamme;
                                                                                $mat_gamme = $gam -> mat_gamme; ?>
                                                                            <option value="<?= $gam -> mat_gamme ?>"><?= $gam -> nom_gamme ?></option>
                                                                            <?php endforeach; ?> 

                                                                    </select>
                                                        </div>
                                                        </div>
                                                                
                                                                
                                                        

                                                            <?php if($mat_type !== 'type-190'): //Condition pour illustrer que le type 'Oreiller' n'a pas dimension et epaisseur?>
                                                                <div class="col-sm-4 mb-3">
                                                                    <div class="fallback">
                                                                    
                                                                            <button type="button" class="btn btn-secondary btn-sm waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#myModal"><i class="ti-plus"></i></button>
                                                                            <!-- sample modal content -->
                                                                            <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                                                <div class="modal-dialog">
                                                                                    <div class="modal-content">
                                                                                        <div class="modal-header">
                                                                                            <h5 class="modal-title mt-0" id="myModalLabel">
                                                                                                <?php if ($mat_type == 'Type-125'):
                                                                                                        echo "Ajout d'une Taille"; ?>
                                                                                                <?php else:
                                                                                                        echo "Ajout d'une Dimension"; ?>
                                                                                                <?php endif; ?>
                                                                                            </h5>
                                                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                                                                                
                                                                                            </button>
                                                                                        </div>
                                                                                        <form action="aj_dim-gam-ep" method='post'>
                                                                                            <div class="modal-body">
                                                                                                <input type="hidden" name='mat_type' value="<?php echo $mat_type ?>">
                                                                                                <input type="text" name="aj_dimension"  multiple class="form-control" placeholder='<?php if ($mat_type == 'Type-125'):
                                                                                                                                                                                echo "Ajoutez une taille"; ?>
                                                                                                                                                                        <?php else:
                                                                                                                                                                                echo "Ajoutez une dimension"; ?>
                                                                                                                                                                        <?php endif; ?> '
                                                                                                                                                                         />
                                                                                                                                                
                                                                                            </div>
                                                                                            <div class="modal-footer">
                                                                                                <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">Fermer</button>
                                                                                                <button type="submit" name='submit_dimension' class="btn btn-primary waves-effect waves-light">Sauvegarder</button>
                                                                                            </div>
                                                                                        </form>
                                                                                    </div><!-- /.modal-content -->
                                                                                </div><!-- /.modal-dialog -->
                                                                            </div><!-- /.modal -->
                                                                        <br>
                                                                        <label class="form-label" for="productdes">
                                                                            <?php if ($mat_type == 'Type-125'):
                                                                                    echo 'Taille'; ?>
                                                                            <?php else:
                                                                                    echo "Dimension"; ?>
                                                                            <?php endif; ?>
                                                                        </label>
                                                                        <select class="form-select" name="dimension" required>
                                                                            <option selected="" disabled="" value="" >--Sélectionner--</option>

                                                                                <?php foreach(select_table_where('dimensions', 'mat_type', $mat_type) as $dim) : //requete permettant de trier les dimensions en fonction du type de produit
                                                                                    $mat_dim = $dim->mat_dim;
                                                                                    $nom_dim = $dim -> dimension; ?>
                                                                                <option value="<?= $dim -> mat_dim ?>"><?= $dim -> dimension ?></option>
                                                                                <?php endforeach; ?> 

                                                                        </select>
                                                                    </div>   
                                                                </div>
                                                                

                                                                <div class="col-sm-4 mb-3">
                                                                    <div class="fallback">
                                                                            <!-- Small modal -->
                                                                            <button type="button" class="btn btn-secondary btn-sm waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#exampleModalScrollable"><i class="ti-plus"></i></button>
                                                                        
                                                                            <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                                                                                <div class="modal-dialog modal-dialog-scrollable">
                                                                                    <div class="modal-content">
                                                                                        <div class="modal-header">
                                                                                            <h5 class="modal-title mt-0" id="exampleModalScrollableTitle">
                                                                                                <?php if ($mat_type == 'Type-125'):
                                                                                                        echo "Ajout d'un Pack"; ?>
                                                                                                <?php else:
                                                                                                        echo "Ajout d'une Epaisseur"; ?>
                                                                                                <?php endif; ?>
                                                                                            </h5>
                                                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                                                                                
                                                                                            </button>
                                                                                        </div>
                                                                                        <form action="aj_dim-gam-ep" method='post'>
                                                                                            <div class="modal-body">
                                                                                                <input type="hidden" name='mat_type' value="<?php echo $mat_type ?>">
                                                                                                <input type="text" name="epaisseur"  multiple class="form-control" placeholder='<?php if ($mat_type == 'Type-125'): // Type de produit Drap
                                                                                                                                                                                        echo "Ajoutez un pack"; ?>
                                                                                                                                                                                <?php else:
                                                                                                                                                                                        echo "Ajoutez une epaisseur"; ?>
                                                                                                                                                                                <?php endif; ?>'
                                                                                                                                                                                />
                                                                                            </div>
                                                                                            <div class="modal-footer">
                                                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                                                                                                <button type="submit" name='submit_epaisseur' class="btn btn-primary">Sauvegarder</button>
                                                                                            </div>
                                                                                        </form>
                                                                                    </div><!-- /.modal-content -->
                                                                                </div><!-- /.modal-dialog -->
                                                                            </div><!-- /.modal -->
                                                                        <br>
                                                                        <label class="form-label" for="productdesc">
                                                                            <?php if ($mat_type == 'Type-125'):
                                                                                    echo 'Pack'; ?>
                                                                            <?php else:
                                                                                    echo "Epaisseur"; ?>
                                                                            <?php endif; ?>
                                                                        </label>
                                                                        <select class="form-select" name="epaisseur" required>
                                                                            <option selected="" disabled="" value="" >--Sélectionner--</option>

                                                                            <?php foreach(select_table_where('epaisseur', 'mat_type', $mat_type) as $ep ) :
                                                                                $mat_epaisseur = $ep->mat_epaisseur;
                                                                                $nom_epaisseur = $ep->epaisseur ?>
                                                                            <option value="<?= $ep->mat_epaisseur ?>"><?= $ep->epaisseur ?></option>
                                                                            <?php endforeach; ?> 

                                                                        </select>
                                                                    </div>
                                                                    
                                                                </div>

                                                            <?php endif; ?>


                                                    <form action="aj_produits_super-admin" id="" method="post" enctype="multipart/form-data">
                                                                    
                                                                    <div class="row">
                                                            
                                                                    
                                                                    <?php if($mat_type == 'Type-149'): //Ajout du champ Prix/cm pour le type de Produit Mousse?>
                                                                    
                                                                        <div class="col-sm-4 mb-3">
                                                                            <div class="fallback">
                                                                                <label class="form-label" for="productdesc">Prix / cm</label>
                                                                                <input type="text" name="prix_cm" class="form-control"/>
                                                                            </div>
                                                                            
                                                                        </div>
                                                                    <?php endif; ?>    

                                                                    <?php if($mat_type == 'Type-125'): ?>
                                                                        <div class="col-sm-4 mb-3">
                                                                            <div class="fallback">
                                                                                <label class="form-label" for="productdesc">Taie</label>
                                                                                <input type="text"  name="taie"  required class="form-control"/>
                                                                            </div>
                                                                            
                                                                        </div>
                                                                    <?php endif; ?>
                                                                    

                                                                        <div class="col-sm-4 mb-3">
                                                                            <div class="fallback">
                                                                                <label class="form-label" for="productdesc">Prix Achat</label>
                                                                                <input type="number" id="prix_achat" name="prix_achat" step="0.01" onchange="calculerPrixVente()" required class="form-control"/>
                                                                            </div>
                                                                            
                                                                        </div>

                                                                        <div class="col-sm-4 mb-3">
                                                                            <div class="fallback">
                                                                                <label class="form-label" for="productdesc">Coef. de vente</label>
                                                                                <input type="number" id="coef_vente" name="coef_vente" step="0.01" onchange="calculerPrixVente()" required class="form-control"/>
                                                                            </div>
                                                                            
                                                                        </div>

                                                                        <div class="col-sm-4 mb-3">
                                                                            <div class="fallback">
                                                                                <label class="form-label" for="productdesc">Prix de vente</label>
                                                                                <input type="number" id="prix_vente" name="prix_vente" class="form-control" />
                                                                            </div>

                                                                        </div>


                                                                        <div class="col-sm-4 mb-3">
                                                                            <div class="fallback">
                                                                                
                                                                                <label class="form-label" for="productdesc">Remise</label>
                                                                                <input type="text" name="remise" class="form-control" />
                                                                            </div>

                                                                        </div>
                                                                
                                                                    </div>

                                                            <!-- end row -->

                                                        <?php //if ($mat_type == 'Type-125'):?>
                                                                
                                                            <div class="mb-3">
                                                                <label class="form-label" for="productdesc">Description du Produit</label>
                                                                <textarea class="form-control" name="description" id="productdesc" rows="5" placeholder="Entrez la description de votre produit"></textarea>
                                                            </div>
                                                        <?php //endif; ?>

                                                            <div class="tab-pane" id="product-img">
                                                            <h4 class="header-title">Images du Produit</h4>
                                                            <p class="card-title-desc">Télécharger les images de votre Produit</p>

                                                            <div class="row">
                                                                <div class="col-sm-4 mb-3">
                                                                    <div class="fallback">
                                                                        <input type="file" name="images[]"  class="form-control" id="imgUpload1" accept="image/*" />
                                                                    </div>
                                                                    <!-- voir image avant de soumettre -->
                                                                    <img id="imgPreview1" class="mt-3" src=""  alt="Aperçu de l'image" style="max-width: 100px; display: none;">
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
                                                            <input type="hidden" name='mat_type' value="<?php echo $mat_type ?>">
                                                            <input type="hidden" name='mat_gamme' value="<?php echo $mat_gamme ?>">
                                                            <input type="hidden" name='nom_type' value="<?php echo $nom_type ?>">
                                                            <input type="hidden" name='nom_gamme' value="<?php echo $nom_gamme ?>">
                                                            <input type="hidden" name='nom_dim' value="<?php echo $nom_dim ?>">
                                                            <input type="hidden" name='nom_epaisseur' value="<?php echo $nom_epaisseur ?>">
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
                        <?php endif; ?>
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
    </script>



        <!-- init js -->
        <script src="assets/js/pages/ecommerce-add-product.init.js"></script>

        <script src="assets/js/app.js"></script>
        <script src="assets/js/aj-produit-admin.js"></script>

        
        


</body>

<!-- Mirrored from themesdesign.in/morvin/layouts/ecommerce-add-product.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 20 Oct 2024 05:02:50 GMT -->

</html>