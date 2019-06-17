<?php

include("M/other_sql.php");
include("V/mod_créer_planning.php");
if(isset($_GET["d_time"])){
if($_GET["id='créer-tab'"] = true){
    echo ($_GET["id='mycréerContent'"]);
} else {
     echo ($_GET["id='mychangeContent'"]);
}
}
if(isset($_GET["days_time"])){
if(isset($_GET["practitioner"])){

$req = creer_planning();

}
}
if(isset($_GET["start_hollyday"])){
$req = creer_hollyday();
}