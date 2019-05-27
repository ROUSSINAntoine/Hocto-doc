<?php
    include('M/db_connect.php');
    include("M/other_sql.php");

    if (isset($_SESSION['id'])) {
        $req = sql_reg_del();
    } 
?>    