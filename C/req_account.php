<?php 
    include("M/get_sql.php");
    $req = sql_account();
    $select = "";
    while ($data = $req->fetch()) {
        $select = $select."<option value='".$data["id"]."'>".$data["firstname"]." ".$data["lastname"]."</option>\n";
    }
    include("V/mod_account.php"); 


?>
