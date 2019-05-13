<?php
//include("M/db_connect.php");

function modif () {
    include("M/other_sql.php");
    sql_modif();
}

function affichage_account() {
    include("M/get_sql.php");
    $req = sql_modif_account();
    $data = $req->fetch();
    
    return $data;
    $req->closeCursor();
}

if (isset($_GET["psw"])) {
    modif();
}

$data = affichage_account();
include("V/mod_modif_account.php");


?>