<?php session_start(); ?>

<?php
$displaycss = true;
    switch(isset($_GET)) {
        case(isset($_GET['page'])):
            switch($_GET['page']){
                case "calendar":
                    $displaycss = false;
                    break;
            }
        }
if($displaycss == true)
{
    ?>
<head>
<link rel="stylesheet" href="public/bootstrap/css/bootstrap.css" >

</head>
<?php
}
    switch(isset($_GET)) {
        case(isset($_GET['page'])):
            switch($_GET['page']){
                case "login":
                    include_once("C/connection/req_login.php");
                    break;
                case "logout":
                    include_once("C/connection/req_logout.php");
                    break;
                case "register":
                    include_once("C/connection/req_register.php");
                    break;
                case "add_patient":
                    include_once("C/patient/req_add_patient.php");
                    break;
                case "account":
                    include_once("C/both/req_account.php");
                    break;
                case "search":
                    include_once("C/patient/req_search.php");
                    break;
                case "result":
                    include_once("C/patient/req_result.php");
                    break;
                case "appointment":
                    include_once("C/patient/appointment/req_appointment.php");
                    break;
                case "appointment2":
                    include_once("C/patient/appointment/req_appoitment2.php");
                    break;
                case "delete":
                    include_once("C/both/req_del_account.php");
                    break;
                case "modif_planning":
                    include_once("C/practitioner/req_modif_planning.php");
                    break;
                case "delete_planning":
                    include_once("C/practitioner/req_delete_planning.php");
                    break;
                case "create_planning":
                    include_once("C/practitioner/req_create_planning.php");
                    break;
                case "histo":
                    include_once("C/both/req_histo.php");
                    break;
                case "modif_rdv":
                    include_once("C/both/req_modif_rdv.php");
                    break;
                case "delete_rdv":
                    include_once("C/both/req_delete_rdv.php");
                    break;
                case "calendar";
                    include("C/practitioner/req_calendar.php");
                    break; 
                case "modif_account":
                    if (isset($_GET["modif"])) {
                        include("C/patient/req_modif_account.php");
                    } else if (isset($_GET["del_popup"])) {
                        include("C/popup/req_del_patient_popup.php");
                    }
                    break;
                case "available":
                    include_once("C/practitioner/req_available.php");
                    break;
                case "del_patient":
                    include("C/patient/req_del_patient.php");
                    break;
                case "modif_account_prac":
                    include_once("C/practitioner/req_modif_account_prac.php");
                    break;
                case "home_prac":
                    include_once("C/practitioner/req_home_prac.php");
                    break;
                case "popup_delete_rdv":
                    include_once("C/popup/req_popup_delete_rdv.php");
                    break;
                case "popup_delete_account":
                    include_once("C/popup/req_popup_delete_account.php");
                    break;
                case "popup_delete_account_prac":
                    include_once("C/popup/req_popup_delete_prac.php");
                    break;
                case "home":
                    include_once("C/patient/req_home.php");
                    break;
                case "observ_modif":
                    include_once("C/practitioner/req_observ_modif.php");
                    break;
                case "change_rdv":
                    include("C/both/req_change_rdv.php");
                    break;
                case "change_member_rdv":
                    include("C/both/req_change_member_rdv.php");
                    break;
                default:
                    include_once('E/404.html');
            }
            break;
        default:
            include_once('V/connection/mod_login.php');
    }
?>