<?php
    include("M/get_sql.php");
    include("M/other_sql.php");
    include_once("C/fct/select.php");

    $req = sql_account();
    $select = "";
    while ($data = $req->fetch()) {
        $select = $select."<option value='".$data["id"]."'>".$data["firstname"]." ".$data["lastname"]."</option>\n";
    }
    $req->closeCursor();
    $_SESSION['id_rdv'] =$_GET['id_rdv'];
    include("V/patient/mod_change_rdv.php");

?>