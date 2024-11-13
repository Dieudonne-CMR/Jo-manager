
$(document).ready(function() {
    $('.ajpanier').submit(function(e) {
        // alert("ok")
        e.preventDefault(); // Empêche le rechargement de la page

        var $form = $(this);
        var data = $form.serialize(); // Sérialise les données du formulaire
        var url = 'aj_panier'; // URL du script PHP


        // Envoie une requête POST avec les données du formulaire
        $.post(url, data, function(response) {
            donne= JSON.parse(response)// recuper les donnes sous forme de js
            console.log(donne); // Affiche la réponse dans la console
            $('#panier').text(donne.panier)
            if (donne.ok == 0) {
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
