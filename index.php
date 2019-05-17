<?php
    session_start();
    switch(isset($_GET)) {
        case(isset($_GET['page'])):
            switch($_GET['page']){
                case "login":
                    include("C/req_login.php");
                    break;
                case "logout":
                    include("C/req_logout.php");
                    break;
                case "register":
                    include("C/register.php");
                    break;
                case "add_patient":
                    include("C/req_add_patient.php");
                    break;
                case "account":
                    include("C/req_account.php");
                    break;
                case "search":
                    include("C/req_search.php");
                    break;
                case "result":
                    include("C/req_result.php");
                    break;
                case "appointment":
                    include("C/req_appointment.php");
                    break;
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