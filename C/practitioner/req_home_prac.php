<?php
    include_once("./M/get_sql.php");
    include_once("./M/other_sql.php");
    $req= sql_prac();
    $data= $req->fetch();
    $req->closeCursor();
    if($data['firstname'] == null || $data['firstname'] == "") {
        if($_GET['emails'] == "" || $_GET['psw'] == "" || $_GET['firstname'] == "" || $_GET['lastname'] == "" || $_GET['phone'] == "" || $_GET['adrs'] == "" || $_GET['city'] == "" || $_GET['postcode'] == "") {
            include_once("./V/practitioner/mod_info_prac.php");
        } else {
            sql_modif_prac();
        include_once("./V/practitioner/mod_prac_home.php");
        }
    } else {
        include_once("./V/practitioner/mod_prac_home.php");
    }
?>