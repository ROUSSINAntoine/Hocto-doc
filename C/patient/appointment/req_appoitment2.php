<?php
    include_once("M/get_sql.php");
    include_once("M/other_sql.php");
    include_once("C/fct/select.php");
    
    if ()) {
        $hr = $_GET["hours"].":".$_GET["minutes"].":00";
        sql_appointment($hr);
        header('Location: index.php?page=login');
    } else {
        include("V/patient/appointment/mod_appointment2.php");
    }
    
?>