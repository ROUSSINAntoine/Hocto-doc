<?php
    include("M/other_sql.php");

    if ($_GET["action"] == "is") {
        echo "panda";
        sql_available_true();
    } else if ($_GET["action"] == "not") {
        sql_available_false();
    }
    
?>