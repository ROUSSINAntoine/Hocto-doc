<?php
//include("M/db_connect.php");

function modif () {
    include("M/other_sql.php");
    $req=sql_modif();
    $req->closeCursor();
}
function modif_patient() {
    include("M/other_sql.php");
    modif_patient();
}
function affichage_account() {
    include("M/get_sql.php");
    $req = sql_display_member();
    $data = $req->fetch();
    
    $req->closeCursor();
    return $data;
    
}

if (isset($_GET["psw"])) {
    modif();
}

$data = affichage_account();
include("V/mod_modif_account.php");


?>