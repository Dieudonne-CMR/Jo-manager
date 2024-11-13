

<?php function formulaire_js_validation($id_class_formulaire, $post_url){ return  ?>
 
<script>
    
    $(document).ready(function() {
        $(<?= $id_class_formulaire ?>).submit(function(e) {
            e.preventDefault(); // Empêche le rechargement de la page
    
            var $form = $(this);
            var data = $form.serialize(); // Sérialise les données du formulaire
            var url = '<?= $post_url ?>'; // URL du script PHP

    
            // Envoie une requête POST avec les données du formulaire
            $.post(url, data, function(response) {
                console.log(response); // Affiche la réponse dans la console
                if (response == 0) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Succès',
                        text: 'Connexion réussie !',
                        confirmButtonText: 'OK'
                    }).then(() => {
                        window.location.href = 'home';
                    });
                } 
    
                if (response == 1) {
                    Swal.fire({
                      icon: 'error',
                      title: 'Erreur',
                      text: 'Vos informations sont incorrect.',
                      confirmButtonText: 'OK'
                    })
                } 
               
            })
            .fail(function(jqXHR, textStatus, errorThrown){
                // Gère les erreurs
                console.error('Erreur lors de la requête AJAX:', textStatus, errorThrown);
                Swal.fire({
                    icon: 'error',
                    title: 'Erreur',
                    text: 'Une erreur est survenue. Veuillez réessayer.',
                });
            });
            
        });
    });
</script>
 
<?php }?>
