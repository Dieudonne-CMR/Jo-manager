<?php

//------------------- traitement des inputs
function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}


//======== Traitement des images et insertion dans un dossier 

function traiter_image($chemin, $FILES)
{
    $name_file = $FILES['name'];
    $file_size = $FILES['size'];
    $chemin_temp = $FILES['tmp_name'];
    $list_extension = ['png', 'jpg', 'jpeg', 'gif', 'pdf', 'doc'];
    $extension_file = strtolower(pathinfo($name_file, PATHINFO_EXTENSION));
    $size_max = 10000000;


    $name_file = substr($name_file, 0, 5);
    $name_file = date('y-m-d-s') . 'akila_blog' . random_int(0, 945) . '.' . $extension_file;

    if (isset($name_file)):
        if ($file_size < $size_max):
            if (in_array($extension_file, $list_extension)):
                if (move_uploaded_file($chemin_temp, $chemin . $name_file)):
                    $results = $name_file;
                else:
                    $results = 0;
                endif;
            else:
                $results = 0;
            endif;
        else:
            $results = 0;
        endif;
    else:
        $results = 0;
    endif;

    return $results;
}

//==== traitement d'image multiple
function traite_image_multiple($dossier_image, $name_fille)
{
    $uploadedImages = [];
    if (!empty($_FILES[$name_fille]['name'][0])) {
        foreach ($_FILES[$name_fille]['name'] as $key => $name) {
            $tmpName = $_FILES[$name_fille]['tmp_name'][$key];
            $newName = uniqid('img_', true) . '.' . pathinfo($name, PATHINFO_EXTENSION);
            $filePath = $dossier_image . $newName;

            if (move_uploaded_file($tmpName, $filePath)) {
                $uploadedImages[] = $newName;
            } else {
                // echo json_encode(["message" => "Erreur lors du téléchargement des images."]);
                // exit;
            }
        }
    }
    return $uploadedImages;
}


//======= supprimer les images dans un dossier
function delect_file($pash, $name_file)
{
    $file = $pash . $name_file;
    @unlink($file);
    return 'ok';
}
//==========fonction de suppression
function supprimer_data($Nom_table, $Nom_champ, $value)
{
    global $DB;
    $data = $DB->query("DELETE FROM $Nom_table WHERE $Nom_champ ='$value' LIMIT 1");
    return $data;
}

//==========fonction de transformation des premiers mots de chaque phrase en majuscule'

function majuscule_Premiere_lettre($phrase)
{
    return ucwords(strtolower($phrase));
}
//==========fonction pour convertir le pourcentage de la remise

function convertir_pourcentage_remise($nombre)
{

    $p = strpos($nombre, ".");

    if ($p !== false) :
        $v = explode(".", $nombre);
        if ($v[0] == '1' && strlen($v[1]) == 1) :
            $s = intval($v[1]) * 10;

        elseif ($v[0] == '1') :
            $s = intval($v[1]);

        else :
            $s = $nombre;
        endif;
    else :
        $s = $nombre;
    endif;
    return $s;
}

//==========fonction pour calculer la remise
function calcul_remise($prix_de_vente, $remise)
{
    $remisee = convertir_pourcentage_remise($remise);
    $remisee = (($prix_de_vente * $remisee) / 100);
    return $remisee;
}

//==========fonction pour calculer la prix de vente final

function prix_de_vente_final($prix_de_vente, $remise)
{
    return $prix_de_vente - calcul_remise($prix_de_vente, $remise);
}
