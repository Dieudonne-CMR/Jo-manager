<?php 

//------------------- traitement des inputs
function test_input($data) {
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
    $list_extension = ['png', 'jpg', 'jpeg', 'gif','pdf','doc'];
    $extension_file = strtolower(pathinfo($name_file, PATHINFO_EXTENSION));
    $size_max = 10000000;


    $name_file = substr($name_file, 0, 5);
    $name_file = date('y-m-d-s') . 'akila_blog' . random_int(0,945). '.' . $extension_file;

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

//======= supprimer les images dans un dossier
function delect_file($pash, $name_file)
{
    $file = $pash . $name_file;
    unlink($file);
    return 'ok';
}
//==========fonction de suppression
function supprimer_data($Nom_table, $Nom_champ,$value){
    global $DB;
    $data = $DB->query("DELETE FROM $Nom_table WHERE $Nom_champ ='$value' LIMIT 1");
    return $data;
}
