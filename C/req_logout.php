<?php
//session_start();
$_SESSION = array();
session_destroy();
include('./V/mod_login.php');
exit;	
?>