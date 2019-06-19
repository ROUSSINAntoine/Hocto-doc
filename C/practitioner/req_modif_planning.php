<?php

include("M/other_sql.php");
include("V/practitioner/mod_modif_planning.php");


if(isset($_GET["days_time"])){
if(isset($_GET["practitioner"])){

$req = modif_planning();

}
}
if(isset($_GET["practitioner"])){
$req = modif_hollyday ();
}


function affichage_planning() {
include("M/get_sql.php");
$req = sql_planning();
$data = $req->fetch();
    
    $req->closeCursor();
    return $data;
}

$data = affichage_planning();




?>