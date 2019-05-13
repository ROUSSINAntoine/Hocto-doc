<?php
    session_start();
    switch(isset($_GET)) {
        case(isset($_GET['page'])):
            switch($_GET['page']){
                case "login":
                    include("C/req_login.php");
                    break;
                case "register":
                    include("C/register.php");
                    break;
                case "account":
                    include("C/req_account.php");
                    break;
                case "search":
                    include("C/search.php");
                    break;
                case "result":
                    include("C/result.php");
                case "modif_account":
                    include("C/req_modif_account.php");
                    break;
                default:
                    include('E/404.html');
            }
            break;
        default:
            include('V/mod_login.php');
    }
?>