<?php
    
    switch($_GET["type"]) {
        case "prac":
            $type = "prac";
            break;
    }

    include("V/patient/mod_search.php");

?>