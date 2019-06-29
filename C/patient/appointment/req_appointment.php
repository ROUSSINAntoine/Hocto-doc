<?php
    include_once("M/get_sql.php");
    include_once("M/other_sql.php");
    
    $req = sql_account();
    $select = "";
    while ($data = $req->fetch()) {
        $select = $select."<option value='".$data["id"]."'>".$data["firstname"]." ".$data["lastname"]."</option>\n";
    }
    $req->closeCursor();
    
    if (isset($_GET["patient"]) && isset($_GET["dtrdv"])) {
        $timestamp = strtotime($_GET["dtrdv"]);
        $day = date("l", $timestamp);
        $day = strtolower($day);

        $req = sql_working_day($day);
        $data = $req->fetch();
        $req->closeCursor();

        $req = sql_hollyday();
        $data2 = $req->fetch();
        $req->closeCursor();

        if ($data == false) {
            goto a;
        } else if ($data2 != false) {
            goto a;
        }

        include("C/patient/appointment/req_appoitment2.php");
    } else {
        a:
        include("V/patient/appointment/mod_appointment.php");
    }
    
?>