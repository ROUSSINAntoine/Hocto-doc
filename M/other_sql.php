<?php
    function sql_modif () {
        include("M/db_connect.php");
        //modif account
        $req =$db->prepare ("UPDATE account JOIN patient ON account.id = patient.account SET account.psw =:psw , account.email =:emails ,patient.firstname =:firstname ,patient.lastname=:lastname, patient.adrs= :adrs , patient.phone_number =:phone , patient.city=:city , patient.postcode =:postcode , patient.ssn =:ssn WHERE patient.id LIKE :id AND account.email=:email");
        $req ->execute (array (
            "psw"=>$_GET["psw"],
            "id"=>$_GET['id'],
            "firstname"=>$_GET['firstname'],
            "lastname" =>$_GET['lastname'],
            "phone"=>$_GET['phone'],
            "adrs" =>$_GET['adrs'],
            "city" =>$_GET['city'],
            "postcode" =>$_GET['postcode'],
            "ssn" =>$_GET['ssn'],
            "email"=>$_GET['email'],
            "emails"=>$_GET['emails'] ));
        return $req;
    }

     function modif_planning () 
    //modifier la table planning
    {
    include("M/db_connect.php");
        $req =$db->prepare ("UPDATE planning SET start_hollyday=:start_hollyday,end_hollyday=:end_hollyday, open_time =:open_time,break_time=:break_time ,resume_time =:resume_time , close_time =:close_time ,length_time= :length_time , days_time =:days_time  WHERE practitioner LIKE :practitioner");
        $req ->execute (array (
            "open_time"=>$_GET['open_time'],
            "break_time" =>$_GET['break_time'],
            "resume_time"=>$_GET['resume_time'],
            "close_time" =>$_GET['close_time'],
            "length_time" =>$_GET['length_time'],
            "days_time" =>$_GET['days'],
            "start_hollyday" =>$_GET['start_hollyday'],
            "end_hollyday" =>$_GET['end_hollyday'],
            "practitioner" =>$_GET['practitioner'] ));
            return $req;
        }
    
    function sql_add_patient () {
        include("M/db_connect.php");
        
        $req = $db->query("INSERT INTO patient (id, firstname, lastname, phone_number, adrs, city, postcode, ssn, account) VALUES (NULL, \"".$_GET['firstname']."\", \"".$_GET['lastname']."\", ".$_GET['phone_number'].", \"".$_GET['adrs']."\", \"".$_GET['city']."\", ".$_GET['postcode'].", ".$_GET['ssn'].", ".$_SESSION['id'].")");
        $req->closeCursor();
    }
    
    function sql_appointment ($hr) {
        include("M/db_connect.php");
        //$hr = date("H:i", strtotime($_GET['hrrdv']));
        $req =$db->query("INSERT INTO `rdv` (`id`, `dtrdv`, `hrrdv`, `observations`, `practitioner`, `patient`) VALUES (NULL, \"".$_GET["dtrdv"]."\", \"".$hr."\", '', \"".$_GET['doc']."\", \"".$_GET['patient']."\")");
    }

    function sql_del_patient () {
        include("M/db_connect.php");
        $req = $db->query("DELETE FROM patient WHERE id = ".$_GET["id"]);
    }

    function sql_reg_prac () {
        include("M/db_connect.php");
        $req = $db->query("INSERT INTO practitioner (id, email, psw) VALUES (null, \"".$_GET["email"]."\",\"".$_GET["pass"]."\")");
    }

    function sql_reg_patient() { 
        include("M/db_connect.php");       
        $req = $db->prepare("INSERT INTO account(id, email ,psw) VALUES(null, :email, :psw)");
        
        $req->execute(array(
            'psw' => $_SESSION['pass'],
            'email' => $_SESSION['email']
            )
        );
    }
    
    function sql_reg_del() {
        include("M/db_connect.php");
        $req = $db->query("DELETE FROM account WHERE id = ".$_SESSION["type"]);
        header('Location: index.php');  
    }
    
    function sql_reg_del_prac() {
        include("M/db_connect.php");
        $req = $db->query("DELETE FROM practitioner WHERE id = ".$_SESSION["id"]);
        header('Location: index.php');  
    }

?> 