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

//======= recuper les donner d'une table lorsque $nom_champ== $val
function select_table_where_2($nom_table, $nom_champ1, $val1, $nom_champ2, $val2)
{
    global $DB;

    $recup = $DB->query("SELECT * FROM $nom_table WHERE $nom_champ1 = :var1 AND $nom_champ2 = :var2" , 
    array("var1" => $val1, "var2"=> $val2));
    return $recup;
}


