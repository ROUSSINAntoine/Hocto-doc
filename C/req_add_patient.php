<?php

    if(isset($_GET['firstname']) && isset($_GET['lastname']) && isset($_GET['phone_number']) && isset($_GET['adrs']) && isset($_GET['city']) && isset($_GET['postcode']) && isset($_GET['ssn']))  {
        include("M/other_sql.php");
        sql_add_patient();
        header('Location: index.php?page=account');
        
    } else if (count($_GET) > 1) {
        include("V/mod_add_patient.php");
        echo "Certain champs sont vide";
    } else {
        include("V/mod_add_patient.php");
    }

?>