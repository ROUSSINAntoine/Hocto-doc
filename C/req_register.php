<?php

    include('M/db_connect.php'); 
    include("M/other_sql.php");

    if(isset($_GET['email'])){   
        
        $_SESSION['email'] = $_GET['email'];
        $_SESSION['pass'] = $_GET['pass'];
        $_SESSION['conf'] = $_GET['conf'];


        

        if (!(preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#i", $_SESSION['email']))) {
            //header('Location: index.php?page=register');
        } else if ($_SESSION['pass']==$_SESSION['conf']) {
            
            
            if (isset($_GET["prac"])) {
                sql_reg_prac();
            } else {
                sql_reg_patient();
            }    

        }
    
            include('V/mod_login.php');
        } else {
            include('V/mod_register.php');
        }
?>