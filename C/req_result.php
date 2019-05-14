<?php 
    include("M/get_sql.php");

    switch($_GET["type"]) {
        case "prac":
            $req = sql_search_by_prac();
            break;
    }

    $data = $req->fetch();
    var_dump($data);    

    include("V/mod_result.php") 
?>