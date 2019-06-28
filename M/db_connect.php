<?php
    
    $db_username = "root";
    $db_password = "";
    $db_host = "localhost";
    $db_name = "hoctodoc";

    try {
        $db = new PDO("mysql:host=$db_host;port=3306;dbname=$db_name;charset=utf8", $db_username, $db_password);
    } catch(PDOException $ex) {
        die("Failed to connect to the database: " . $ex->getMessage());
    }
?>