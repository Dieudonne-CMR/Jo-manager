
$(document).ready(function() {
    $('#aj-gerant').submit(function(e) {
        e.preventDefault(); // Empêche le rechargement de la page

        var $form = $(this);
        var data = $form.serialize(); // Sérialise les données du formulaire
        var url = 'aj-gerant'; // URL du script PHP


        // Envoie une requête POST avec les données du formulaire
        $.post(url, data, function(response) {
            console.log(response); // Affiche la réponse dans la console
            if (response == 0) {
                Swal.fire({
                    icon: 'success',
                    title: 'Succès',
                    text: "L'ajout du gerant vient d'etre effectué !",
                }).then(() => {
                    window.location.href = 'liste-gerant';
                });
            } 

            if (response == 1) {
                Swal.fire({
                  icon: 'error',
                  title: 'Erreur',
                  text: "Ce numero Existe déjà !",
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