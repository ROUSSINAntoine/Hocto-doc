<?php
    include_once("M/other_sql.php");
    include_once("M/get_sql.php");
    $page = "";

    if (isset($_GET["observ"])) {
        sql_modif_observ();
        $page = "C/both/req_histo.php";
        
    } else {
        $req = sql_get_obs();

        $obs = $req->fetch();
        $obs = $obs["observations"];

        $req->closeCursor();
        
        $page = "V/practitioner/mod_observ_modif.php";
    }
    
    include_once($page);
?>