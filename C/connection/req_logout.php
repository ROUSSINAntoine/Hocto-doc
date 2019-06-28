<?php
    //Permet de fermer la session d'un user
    $_SESSION = array();
    session_destroy();
    
    include_once('./V/connection/mod_login.php');
    
    exit;	
?>