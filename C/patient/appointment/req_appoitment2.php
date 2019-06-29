<?php
    include_once("M/get_sql.php");
    include_once("M/other_sql.php");
    include_once("C/fct/select.php");

    

    if (isset($_GET["hours"])) {
        sql_appointment();
        header('Location: index.php?page=login');
    } else {
        $timestamp = strtotime($_GET["dtrdv"]);
        $day = date("l", $timestamp);
        $day = strtolower($day);
        
        $req = sql_length($day);
        $data = $req->fetch();
        $step = $data["length_time"];
        $req->closeCursor();

        $select_hour = create_select($step, $day);
        include("V/patient/appointment/mod_appointment2.php");
    }
    
?>