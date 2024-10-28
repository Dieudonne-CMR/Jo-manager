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