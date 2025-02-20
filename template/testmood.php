<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Galerie d'Images</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .img-fluid {
            cursor: pointer;
        }
        .modal-content {
            text-align: center;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="row">
        <?php
        // Exemple de tableau d'images
        $images = [
            ['url' => 'image1.jpg', 'title' => 'Image 1', 'description' => 'Description 1'],
            ['url' => 'image2.jpg', 'title' => 'Image 2', 'description' => 'Description 2'],
            // Ajoutez plus d'images ici...
        ];
        foreach ($images as $index => $image): ?>
            <div class="col-md-4">
                <button type="button" class="btn small-frame btn-sm waves-effect waves-light" data-toggle="modal" data-target="#exampleModal" onclick="showModal(<?php echo $index; ?>)">
                    <img class="img-fluid" src="<?php echo $image['url']; ?>" alt="">
                </button>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Informations de l'image</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h2 id="modal-title"></h2>
                <p id="modal-description"></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
<script>
    var images = <?php echo json_encode($images); ?>;

    function showModal(index) {
        var image = images[index];
        document.getElementById('modal-title').innerText = image.title;
        document.getElementById('modal-description').innerText = image.description;
    }
</script>

</body>
</html>






<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Galerie d'Images</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .img-fluid {
            cursor: pointer;
        }
        .modal-content {
            text-align: center;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="row">
        <?php
        // Exemple de tableau d'objets pour les images
        $images = [
            (object) ['url' => 'image1.jpg', 'title' => 'Image 1', 'description' => 'Description 1'],
            (object) ['url' => 'image2.jpg', 'title' => 'Image 2', 'description' => 'Description 2'],
            // Ajoutez plus d'images ici...
        ];
        foreach ($images as $index => $image): ?>
            <div class="col-md-4">
                <button type="button" class="btn small-frame btn-sm waves-effect waves-light" data-toggle="modal" data-target="#exampleModal" onclick="showModal(<?php echo $index; ?>)">
                    <img class="img-fluid" src="<?php echo $image->url; ?>" alt="">
                </button>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Informations de l'image</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h2 id="modal-title"></h2>
                <p id="modal-description"></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
<script>
    var images = <?php echo json_encode($images); ?>;

    function showModal(index) {
        var image = images[index];
        document.getElementById('modal-title').innerText = image.title;
        document.getElementById('modal-description').innerText = image.description;
    }
</script>

</body>
</html>






<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Galerie d'Images</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .img-fluid {
            cursor: pointer;
        }
        .modal-content {
            text-align: center;
        }
        .modal img {
            width: 100%;
            height: auto;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="row">
        <?php
        // Exemple de tableau d'objets pour les images
        $images = [
            (object) ['url' => 'image1.jpg', 'title' => 'Image 1', 'description' => 'Description 1'],
            (object) ['url' => 'image2.jpg', 'title' => 'Image 2', 'description' => 'Description 2'],
            // Ajoutez plus d'images ici...
        ];
        foreach ($images as $index => $image): ?>
            <div class="col-md-4">
                <button type="button" class="btn small-frame btn-sm waves-effect waves-light" data-toggle="modal" data-target="#exampleModal" onclick="showModal(<?php echo $index; ?>)">
                    <img class="img-fluid" src="<?php echo $image->url; ?>" alt="">
                </button>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Informations de l'image</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <img id="modal-image" src="" alt="">
                <h2 id="modal-title"></h2>
                <p id="modal-description"></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
<script>
    var images = <?php echo json_encode($images); ?>;

    function showModal(index) {
        var image = images[index];
        document.getElementById('modal-image').src = image.url;
        document.getElementById('modal-title').innerText = image.title;
        document.getElementById('modal-description').innerText = image.description;
    }
</script>

</body>
</html>




<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Galerie d'Images</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .img-fluid {
            cursor: pointer;
        }
        .modal-content {
            text-align: center;
        }
        .modal img {
            width: 100%;
            height: auto;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="row">
        <?php
        // Exemple de tableau d'objets pour les images
        $produits = [
            (object) ['Img1' => 'image1.jpg', 'title' => 'Image 1', 'description' => 'Description 1'],
            (object) ['Img1' => 'image2.jpg', 'title' => 'Image 2', 'description' => 'Description 2'],
            // Ajoutez plus de produits ici...
        ];

        $image_produit = 'path/to/images/'; // Définissez le chemin de base pour vos images

        foreach ($produits as $index => $produit): ?>
            <div class="col-md-4">
                <button type="button" class="btn small-frame btn-sm waves-effect waves-light" data-toggle="modal" data-target="#exampleModal" onclick="showModal(<?php echo $index; ?>)">
                    <img class="img-fluid" src="<?php echo $image_produit . $produit->Img1; ?>" alt="">
                </button>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Informations de l'image</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <img id="modal-image" src="" alt="">
                <h2 id="modal-title"></h2>
                <p id="modal-description"></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
<script>
    var produits = <?php echo json_encode($produits); ?>;
    var image_produit = '<?php echo $image_produit; ?>';

    function showModal(index) {
        var produit = produits[index];
        document.getElementById('modal-image').src = image_produit + produit.Img1;
        document.getElementById('modal-title').innerText = produit.title;
        document.getElementById('modal-description').innerText = produit.description;
    }
</script>

</body>
</html>



var str1 = "Bonjour";
var str2 = "le monde";
var result = str1.concat(" ", str2);
console.log(result); // Affiche "Bonjour le monde"
