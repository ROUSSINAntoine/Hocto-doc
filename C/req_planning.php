<?php

include("M/other_sql.php");
include("V/mod_planning.php");
if(isset($_GET["id='mychangeContent"])){
if($_GET["id='créer-tab'"] = true){
    echo ($_GET["name"]);
} else {
     echo ($_GET["nam"]);
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