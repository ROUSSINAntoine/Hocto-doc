<?php
    include_once("M/get_sql.php");
    include_once("M/other_sql.php");
    include_once("C/fct/select.php");

    
    $req = sql_account();
    $select = "";
    while ($data = $req->fetch()) {
        $select = $select."<option value='".$data["id"]."'>".$data["firstname"]." ".$data["lastname"]."</option>\n";
    }
    $req->closeCursor();
    
    if (isset($_GET["patient"] && isset($_GET["dtrdv"]) {
        include("C/patient/appointment/req_appointment2.php");
    } else {
        include("V/patient/appointment/mod_appointment.php");
    }
    
?>