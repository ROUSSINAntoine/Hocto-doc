<?php
    include_once("M/other_sql.php");
    sql_del_patient();
    header('Location: index.php?page=account');
?>