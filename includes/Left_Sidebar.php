<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <div data-simplebar class="h-100">


        <div class="user-sidebar text-center">
            <div class="dropdown">
                <div class="user-img">
                    <img src="assets/images/users/avatar-7.jpg" alt="" class="rounded-circle">
                    <span class="avatar-online bg-success"></span>
                </div>
                <div class="user-info">
                    <h5 class="mt-3 font-size-16 text-white"><?= explode(' ',$nom_membre)[0] ?></h5>
                    <span class="font-size-13 text-white-50"><?= $role_membre ?></span>
                </div>
            </div>
        </div>



        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menu</li>

                <li>
                    <a href="accueil_sup_ad" class="waves-effect">
                        <i class="dripicons-home"></i><span class="badge rounded-pill bg-info float-end">3</span>
                        <span>Dashboard</span>
                    </a>
                </li>

            
                <li>
                    <a href="products" class="waves-effect">
                        <i class="dripicons-calendar"></i>
                        <span>Nos produits</span>
                    </a>
                </li>

                <li>
                    <a href="achat" class="waves-effect">
                        <i class="dripicons-cart"></i>
                        <span>Liste des ventes</span>
                    </a>
                </li>

                <?php if($gest_boutik==1): // zone des gerant de boutique?>
                <li>
                    <a href="panier" class="waves-effect">
                        <i class="dripicons-cart"></i>
                        <span> Voir le panier</span>
                    </a>
                </li>
                <?php endif ?>


                            <!-- zone de gestion des prospects par le gerant -->
                <?php if($gest_boutik==1): // zone des gerant de boutique?>
                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class="dripicons-phone"></i>
                            <span>Prospects</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="add-prospect">Ajout Prospect</a></li>
                            <li><a href="liste_prospects">Voir Prospects</a></li>
                            
                        </ul>
                    </li>
                <?php endif ?>

                <!-- permission admin -->
                <?php if($gest_boutik==0): ?>
                 <!-- zone d'ajout des produits -->
                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class="ti-plus"></i>
                            <span>Ajout de produits</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            
                            <li><a><u> <b> Type de produits</b> </u></a></li>
                            <?php foreach(select_table('type_produit') as $value): ?>
                                <li><a href="aj_produit_admin/<?= $value->mat_type; ?>"><?php echo $value->nom_type; ?></a></li>
                            <?php endforeach;?>    
                        </ul>
                    </li>
                    
                    <li>
                        <a href="shops" class=" waves-effect">
                            <i class="dripicons-calendar"></i>
                            <span>Boutiques</span>
                        </a>
                    </li>
                    <li>
                        <a href="add-shop" class=" waves-effect">
                            <i class="dripicons-wallet"></i>
                            <span>Créé Boutique</span>
                        </a>
                    </li>

                    <li>
                        <a href="add-gerant" class=" waves-effect">
                            <i class="fas fa-people-arrows"></i>
                            <span>Ajout Gerant</span>
                        </a>
                    </li>

                    <li>
                        <a href="liste-gerant" class=" waves-effect">
                            <i class="fas fa-atom"></i>
                            <span>Liste des gerants</span>
                        </a>
                    </li>

                    
                <?php endif ?>
                
                <!-- ------------------------------------------------- -->

                
                <?php if($gest_boutik==1): // zone des gerant de boutique?>

                            <!-- zone de selection des produits par un gerant pour sa boutique -->
                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class="ti-plus"></i>
                            <span>Selection Produits</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <?php foreach(select_table('type_produit') as $value): ?>
                                <li><a href="add-product/<?= $value->mat_type; ?>"><?php echo $value-> nom_type ?></a></li>
                            <?php endforeach;?>    
                        </ul>
                    </li>
                                <!-- ---------------------------------------------------------- -->

                    <li>
                        
                        <a href="modifi-shop" class=" waves-effect">
                            <i class="fas fa-cog"></i>
                            <span>Modification Boutique</span>
                        </a>
                    </li>
                   

                <?php endif ?>
                

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->