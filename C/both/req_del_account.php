<?php
    include_once('M/db_connect.php');
    include_once("M/other_sql.php");

    if (isset($_SESSION['type']) && $_SESSION["type"] == "pat") {
        sql_reg_del();
    } elseif (isset($_SESSION['type']) && $_SESSION["type"] == "prac") {
        sql_reg_del_prac();
    }

    include_once("V/connection/mod_login.php");
?>    