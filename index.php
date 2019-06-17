<?php session_start(); ?>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style/custom_nav.css">

   
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<?php
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
                case "créer_planning";
                    include("C/req_créer_planning.php");
                    break;
                case "modif_planning";
                    include("C/req_modif_planning.php");
                    break;
                case "histo";
                    include("C/req_histo.php");
                    break;
                case "planning";
                    include("C/req_planning.php");
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
                case "available":
                    include("C/req_available.php");
                    break;
                case "modif_account_prac";
                    include("C/req_modif_account_prac.php");
                    break;
                case "home_prac";
                    include("C/req_home_prac.php");
                    break;
                case "popup_delete_rdv";
                    include("C/req_popup_delete_rdv.php");
                    break;
                case "home";
                    include("C/req_home.php");
                    break;
                default:
                    include('E/404.html');
            }
            break;
        default:
            include('V/mod_login.php');
    }
?>