<?php 
    include("M/get_sql.php");
    $req = sql_account();
    $select = "";
    while ($donnees = $req->fetch()) {
        $select = $select."<option value='".$donnees["id"]."'>".$donnees["firstname"]." ".$donnees["lastname"]."</option>\n";
    }
    include("V/mod_account.php"); 
?>