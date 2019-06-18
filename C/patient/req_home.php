<?php
    include("./M/get_sql.php");
    include("./M/other_sql.php");
    $req= sql_membre();
    $data= $req->fetch();
    $req->closeCursor();
    if($data['firstname'] == null || $data['firstname'] == "") {
        if($_GET['firstname'] == "" || $_GET['lastname'] == "" || $_GET['phone_number'] == "" || $_GET['adrs'] == "" || $_GET['city'] == "" || $_GET['postcode'] == "") {
            include("./V/practitioner/mod_home_start.php");
        } else {
            sql_add_patient ();
            include("./V/patient/mod_home.php");
        }
    } else {
        include("./V/patient/mod_home.php");
    }
?>