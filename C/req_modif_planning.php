<?php

include("M/other_sql.php");
include("V/mod_modif_planning.php");
$days = "";
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
$_GET['days']=$days;

if(isset($_GET["practitioner"])){

$req = modif_planning();

}
    





?>