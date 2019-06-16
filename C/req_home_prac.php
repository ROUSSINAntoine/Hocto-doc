<?php
    include("./M/get_sql.php");
    include("./M/other_sql.php");
    $req= sql_modif_pract();
    $data= $req->fetch();
    $req->closeCursor();
    if($data['firstname'] == null || $data['firstname'] == "") {
        if($_GET['emails'] == "" || $_GET['psw'] == "" || $_GET['firstname'] == "" || $_GET['lastname'] == "" || $_GET['phone'] == "" || $_GET['adrs'] == "" || $_GET['city'] == "" || $_GET['postcode'] == "") {
            include("./V/mod_info_prac.php");
        } else {
            sql_modif_prac();
        include("./V/mod_prac_home.php");
        }
    } else {
        include("./V/mod_prac_home.php");
    }
?>