<?php

/*= -Cette fonction permet de recuperer les donnees d'une table
    - Elle prend comme parametre le nom de la table 
    Exple: $nom_table= 'membre'

*/

function select_table($nom_table)
{
    global $DB;
    $recup = $DB->query("SELECT * FROM $nom_table ");
    return $recup;
}

//======= recuper les donner d'une table lorsque $nom_champ== $val
function select_table_where($nom_table, $nom_champ, $val)
{
    global $DB;

    $recup = $DB->query("SELECT * FROM $nom_table WHERE $nom_champ = :var", array("var" => $val));
    return $recup;
}
//======== Traitement des images et insertion dans un dossier 


