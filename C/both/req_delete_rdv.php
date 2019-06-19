<?php
    include_once("M/other_sql.php");
    include_once("M/get_sql.php");

    sql_delete_rdv();

    header('Location: index.php?page=modif_rdv');

?>
