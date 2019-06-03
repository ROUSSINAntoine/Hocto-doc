<?php
    include('M/db_connect.php');
    include("M/other_sql.php");

    if (isset($_SESSION['type']) && $_SESSION["type"] == "pat") {
        sql_reg_del();
    } elseif (isset($_SESSION['type']) && $_SESSION["type"] == "prac") {
        sql_reg_del_prac();
    }
?>    