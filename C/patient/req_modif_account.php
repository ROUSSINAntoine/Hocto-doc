<?php
//include_once("M/db_connect.php");

function modif () {
    include_once("M/other_sql.php");
    $req=sql_modif();
    $req->closeCursor();
}
function modif_patient() {
    include_once("M/other_sql.php");
    modif_patient();
}

function affichage_account() {
    include_once("M/get_sql.php");
    $req = sql_display_member();
    $data = $req->fetch();
    
    //$req->closeCursor();
    return $data;
    
}

if (isset($_GET["psw"])) {
    modif();
}
$data = affichage_account();
include_once("V/patient/mod_modif_account.php");


?>