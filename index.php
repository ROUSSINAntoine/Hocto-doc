<?php
    switch(isset($_GET)) {
        case(isset($_GET['page'])):
            switch($_GET['page']){
                case "login":
                    include("C/login.php");
                    break;
                case "register":
                    include("C/register.php");
                    break;
                case "search":
                    include("C/search.php");
                    break;
                case "result":
                    include("C/result.php");
                default:
                    include('E/404.html');
            }
            break;
        default:
            include('V/login.php');
    }
?>