<?php
    //Permet de fermer la session d'un user
    $_SESSION = array();
    session_destroy();
    
    include('./V/mod_login.php');
    
    exit;	
?>