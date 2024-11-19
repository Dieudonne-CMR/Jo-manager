
$(document).ready(function() {
    $('.aj_checkout').submit(function(e) {
        // alert("ok")
        //e.preventDefault(); // Empêche le rechargement de la page

        var $form = $(this);
        var data = $form.serialize(); // Sérialise les données du formulaire
        var url = 'save_checkout'; // URL du script PHP


        // Envoie une requête POST avec les données du formulaire
        $.post(url, data, function(response) {
            console.log(response); // Affiche la réponse dans la console
            if (response == 0) {
                Swal.fire({
                    icon: 'success',
                    title: 'Succès',
                    text: "Commande enregistree",
                }).then(() => {
                     window.location.href = 'home';
                });
            } 

           
        })
        
    });
});
