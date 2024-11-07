
$(document).ready(function() {
    $('.ajpanier').submit(function(e) {
        // alert("ok")
        e.preventDefault(); // Empêche le rechargement de la page

        var $form = $(this);
        var data = $form.serialize(); // Sérialise les données du formulaire
        var url = 'aj_panier'; // URL du script PHP


        // Envoie une requête POST avec les données du formulaire
        $.post(url, data, function(response) {
            console.log(response); // Affiche la réponse dans la console
            if (response == 0) {
                Swal.fire({
                    icon: 'success',
                    title: 'Succès',
                    text: "Ajouter au panier",
                }).then(() => {
                    // window.location.href = 'liste-gerant';
                });
            } 

           
        })
        
    });
});
