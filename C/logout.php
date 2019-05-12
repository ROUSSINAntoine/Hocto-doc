<?php
session_start();

session_destroy();
echo $_SESSION['email'];
echo $_SESSION['password'];
header('Location: ../V/mod_login.php');
exit;	
?>