<?php 
    include("M/get_sql.php");
    $req = sql_account();
    $select = "";

    while ($data = $req->fetch()) {
        $select = $select."<option value='".$data["id"]."'>".$data["firstname"]." ".$data["lastname"]."</option>\n";
    }

    if ($select == "") {
        $dis = "disabled";
    }
    include("V/mod_account.php"); 


?>
