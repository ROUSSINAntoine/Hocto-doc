<?php 
    include_once("M/get_sql.php");

    switch($_GET["type"]) {
        case "prac":
            $req = sql_search_by_prac();
            break;
    }
    
    $add = "";
    
    while ($data = $req->fetch()) {
        $add = $add.$data['lastname']." ".$data['firstname']."</br><a href='index.php?page=appointment&doc=".$data["id"]."'><button>take an appointment</button></a></p>";
    }    
    $req-> closeCursor();

    if ($add == "") {
        $add = "There is no practitioner register under that name";
    }

    include_once("V/patient/mod_results.php");
?>