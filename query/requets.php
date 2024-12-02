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


//=========== requete pour modifier la valeur d'un champ
function update_table_where($nom_table ,$nom_champ, $val_champ_modifier, $champ_unique_table, $val_champ_unique)
{
    global $DB;
    $DB->query("UPDATE $nom_table SET $nom_champ = :val_champ_modifier WHERE $champ_unique_table = :val_champ_unique limit 1",
                        [
                            'val_champ_modifier' => $val_champ_modifier,
                            'val_champ_unique' => $val_champ_unique,
                        ]
                    );
    return true;
}

