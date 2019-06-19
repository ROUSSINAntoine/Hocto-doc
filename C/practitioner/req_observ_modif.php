<?php
    include("M/other_sql.php");
    include("M/get_sql.php");

    $page = "";

    if (isset($_GET["observ"])) {
        sql_modif_observ();
        $page = "C/both/req_histo.php";
    } else {
        $req = sql_get_obs();

        $obs = $req->fetch();
        $obs = $obs[0];

        $req->closeCursor();
        
        $page = "V/practitioner/mod_observ_modif.php";
    }
    
    include($page);
?>