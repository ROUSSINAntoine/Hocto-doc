<?php
//include_once("M/db_connect.php");

function modif () {
    include_once("M/other_sql.php");
    sql_modif();
}

function affichage_account() {
    include_once("M/get_sql.php");
    $req = sql_display_member();
    $data = $req->fetch();

    return $data;
    
}

if (isset($_GET["psw"])) {
    modif();
}
$data = affichage_account();
include_once("V/patient/mod_modif_account.php");


?>