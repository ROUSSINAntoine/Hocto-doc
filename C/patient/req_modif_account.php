<?php
//include("M/db_connect.php");

function modif () {
    include("M/other_sql.php");
    $req=sql_modif();
}

function affichage_account() {
    include("M/get_sql.php");
    $req = sql_display_member();
    $data = $req->fetch();

    return $data;
    
}

if (isset($_GET["psw"])) {
    modif();
}
$data = affichage_account();
include("V/patient/mod_modif_account.php");


?>