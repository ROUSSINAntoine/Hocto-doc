<?php

include("M/other_sql.php");
include("V/mod_modif_planning.php");

/*function sql_planning () {
    include("M/get_sql.php");
    $data = $req->fetch();

    $req->closeCursor();
    return $data;
}*/
/*$days = "";
if(isset($_GET["lundi"])){
    $days = $days."lundi; ";
}
if(isset($_GET["mardi"])){
    $days = $days."mardi; ";
}
if(isset($_GET["mercredi"])){
    $days = $days."mercredi; ";
}
if(isset($_GET["jeudi"])){
    $days = $days."jeudi; ";
}
if(isset($_GET["vendredi"])){
    $days = $days."vendredi; ";
}
if(isset($_GET["samedi"])){
    $days = $days."samedi; ";
}
if(isset($_GET["dimanche"])){
    $days = $days."dimanche; ";
}
$_GET['days']=$days;*/

if(isset($_GET["days_time"])){
if(isset($_GET["practitioner"])){

$req = modif_planning();

}
}

//$data = sql_planning();
    





?>