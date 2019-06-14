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
                    include("C/req_register.php");
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
                case "delete":
                    include("C/req_del_account.php");
                    break;
                case "modif_planning";
                    include("C/req_modif_planning.php");
                    break;
                case "histo";
                    include("C/req_histo.php");
                    break;
                    case "modif_rdv";
                    include("C/req_modif_rdv.php");
                    break;
                case "delete_rdv";
                    include("C/req_delete_rdv.php");
                    break;
                case "modif_account":
                    if (isset($_GET["modif"])) {
                        include("C/req_modif_account.php");
                    } else if (isset($_GET["del"])) {
                        include("C/req_del_patient.php");
                    }
                    break;
                case "modif_account_prac";
                    include("C/req_modif_account_prac.php");
                    break;
                default:
                    include('E/404.html');
            }
            break;
        default:
            include('V/mod_login.php');
    }
?>