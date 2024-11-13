<div class="row">
    <div class="col-sm-4 mb-3">
        <div class="fallback">
                <!-- Small modal  bouton pour ouvrir la pop up-->
                    <button type="button" class="btn btn-secondary btn-sm waves-effect waves-light" data-bs-toggle="modal" data-bs-target=".staticBackdrop"><i class="ti-plus"></i></button>
                            
                            <!-- Modal fenetre pop up pour ajouter une gamme -->
                <div class="modal fade staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">Ajout d'une gamme</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form action="####">
                                <div class="modal-body">
                                    <input type="text" name="gamme"  multiple class="form-control" placeholder='Ajoutez une gamme'/>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">Fermer</button>
                                    <button type="" name='submit_gamme' class="btn btn-primary waves-effect waves-light">Sauvegarder</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div><br>
            <label class="form-label" for="productdesc">Gamme</label>
            <input type="text" name=""  multiple class="form-control" id="imgUpload1"  />
        </div>
        
        
    </div>

    <div class="col-sm-4 mb-3">
        <div class="fallback">
        
                <button type="button" class="btn btn-secondary btn-sm waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#myModal"><i class="ti-plus"></i></button>
                <!-- sample modal content -->
                <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title mt-0" id="myModalLabel">Ajout d'une dimension</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                    
                                </button>
                            </div>
                            <form action="">
                                <div class="modal-body">
                                    <input type="text" name="dimension"  multiple class="form-control" placeholder='Ajoutez une dimension ' />
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
            <label class="form-label" for="productdes">Dimensions</label>
            <input type="text" name="" class="form-control" />
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
                                <h5 class="modal-title mt-0" id="exampleModalScrollableTitle">Ajout d'une epaisseur</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                    
                                </button>
                            </div>
                            <form action="">
                                <div class="modal-body">
                                    <input type="text" name="epaisseur"  multiple class="form-control" placeholder='Ajoutez une epaisseur'/>
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
            <label class="form-label" for="productdesc">Epaisseur</label>
            <input type="text" name="" class="form-control" id="imgUpload3" accept="image/*" />
        </div>
        
    </div>

    <div class="col-sm-4 mb-3">
        <div class="fallback">
            <label class="form-label" for="productdesc">Prix Achat</label>
            <input type="text" name="images[]"  multiple class="form-control" id="imgUpload1"  />
        </div>
        
    </div>

    <div class="col-sm-4 mb-3">
        <div class="fallback">
            <label class="form-label" for="productdesc">Coef. de vente</label>
            <input type="text" name="" class="form-control" />
        </div>
        
    </div>

    <div class="col-sm-4 mb-3">
        <div class="fallback">
            <label class="form-label" for="productdesc">Prix de vente</label>
            <input type="text" name="" class="form-control" />
        </div>

    </div>
    
</div>

<!-- end row -->

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
</div>