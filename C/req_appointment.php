<?php
    include("M/get_sql.php");
    include("M/other_sql.php");

    $req = sql_account();
    $select = "";
    while ($data = $req->fetch()) {
        $select = $select."<option value='".$data["id"]."'>".$data["firstname"]." ".$data["lastname"]."</option>\n";
    }

    if (isset($_GET["hrdv"])) {
        sql_appointment();
        echo "a";
        header('Location: index.php?page=login');
    } else {
        include("V/mod_appointment.php");
    }
    
?>