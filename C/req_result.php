<?php 
    include("M/get_sql.php");

    switch($_GET["type"]) {
        case "prac":
            $req = sql_search_by_prac();
            break;
    }

    while ($data = $req->fetch()) {
        $add = $data['lastname']." ".$data['firstname']."</br><a href='index.php?page=appointment&doc=".$data["id"]."'><button>take an appointment</button></a></br>";
    }    

    include("V/mod_results.php");
?>