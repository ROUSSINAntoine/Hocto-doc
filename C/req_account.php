<?php 
    include("M/get_sql.php");
    
    $dis = "";

    if ($_SESSION["type"] == "pat") {
        
        $req = sql_account();
        $select = "";
        
        
        
        while ($data = $req->fetch()) {
            $select = $select."<option value='".$data["id"]."'>".$data["firstname"]." ".$data["lastname"]."</option>\n";
        }
    
        $req->closeCursor();

        if ($select == "") {
            $dis = "disabled";
        }

        include("V/mod_account.php");
    } else {
        $req = sql_is_available();

        if ($req->fetch() == false) {
            $dis = "checked";
        }
        include("V/mod_account_prac.php");
    }
    
     


?>
