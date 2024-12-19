 

    //===============================================================
    // Fonction pour prévisualiser une image
    function previewImage(inputElement, previewElementId) {
       const file = inputElement.files[0];  // Récupère le fichier sélectionné
       if (file) {
           const reader = new FileReader();
           
           // Lorsque le fichier est chargé, afficher l'aperçu
           reader.onload = (e) => {
               const previewElement = document.getElementById(previewElementId);
               previewElement.src = e.target.result;  // URL de l'image
               previewElement.style.display = 'block';  // Affiche l'image de prévisualisation
           };
    
           // Lecture du fichier comme URL de données
           reader.readAsDataURL(file);
       }
    }
    
    // Sélectionne les champs input et ajoute les écouteurs d'événements
    document.getElementById('imgUpload1').addEventListener('change', function() {
       previewImage(this, 'imgPreview1');
    });
    
    document.getElementById('imgUpload2').addEventListener('change', function() {
       previewImage(this, 'imgPreview2');
    });
    
    document.getElementById('imgUpload3').addEventListener('change', function() {
       previewImage(this, 'imgPreview3');
    });
 
