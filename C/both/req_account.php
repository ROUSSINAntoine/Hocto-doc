<?php 
    include("M/get_sql.php");
    $req = sql_account();
    $select = "";
    $dis = "";

    if ($_SESSION["type"] == "pat") {
        while ($data = $req->fetch()) {
            $select = $select."<option value='".$data["id"]."'>".$data["firstname"]." ".$data["lastname"]."</option>\n";
        }
    
        if ($select == "") {
            $dis = "disabled";
        }

        include("V/patient/mod_account.php");
    } else {
        include("V/practitioner/mod_account_prac.php");
    }
    
     


?>
