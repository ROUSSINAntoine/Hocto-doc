<?php

    $check = true;

    
    if (!(isset($_GET['phone_number'])) || !(is_numeric($_GET['phone_number'])) || strlen($_GET['phone_number']) != 10) {
        $check = false;
    }

    if (!(isset($_GET['postcode'])) || !(is_numeric($_GET['postcode'])) || strlen($_GET['postcode']) != 5) {
        $check = false;
    }

    if (!(isset($_GET['ssn'])) || !(is_numeric($_GET['ssn'])) || strlen($_GET['ssn']) != 15) {
        $check = false;
    }

    if (!(isset($_GET['firstname'])) || $_GET['firstname'] == "" || strlen($_GET['firstname']) > 35) {
        $check = false;
    }

    if (!(isset($_GET['lastname'])) || $_GET['lastname'] == "" || strlen($_GET['lastname']) > 50) {
        $check = false;
    }

    if (!(isset($_GET['adrs'])) || $_GET['adrs'] == "" || strlen($_GET['adrs']) > 60) {
        $check = false;
    }

    if (!(isset($_GET['city'])) || $_GET['city'] == "" || strlen($_GET['city']) > 40) {
        $check = false;
    }
    
    foreach ($_GET as $key => $value) {
        $$key = $value;
    }

    if($check == true)  {
        include("M/other_sql.php");
        sql_add_patient();

        header('Location: index.php?page=account');
        
    } else if (count($_GET) > 1) {
        include("V/mod_add_patient.php");
        echo "Some fields are empty, incomplete or too long";
    } else {
        $ssn = "";
        $postcode = "";
        $city = "";
        $adrs = "";
        $phone_number = "";
        $lastname = "";
        $firstname = "";
        include("V/mod_add_patient.php");
    }

?>