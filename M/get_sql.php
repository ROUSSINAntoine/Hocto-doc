<?php
    function sql_account() {
        include("M/db_connect.php");
        $req = $db -> query("SELECT firstname, lastname, id FROM patient WHERE account LIKE ".$_SESSION["id"]);
        return $req;
    }
?>